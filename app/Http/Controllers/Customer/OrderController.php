<?php
/**
 * Created By: AJAY
 * Date:30-04-2022
 */

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * @return JsonResponse
     * Order place
     */
    public function placeOrder()
    {
        $user = auth()->user();
        $product = Product::find(request('product_id'));
        $address = $user->address->where('is_default',1)->first();
        /**
         * Order Create
         */
        $order = new Order();
        $order->order_code = 'TIA';
        $order->product_id = request('product_id');
        $order->customer_id = $user->id;
        $order->order_price = $product->product_price;
        $order->order_date = now();
        $order->delivery_date = now();
        $order->address_line1 = $address->address_line1;
        $order->address_line2 = $address->address_line2;
        $order->district = $address->district;
        $order->state = $address->state;
        $order->pincode = $address->pincode;
        $order->save();

        /**
         * Order Code Update
         */
        $code = 'TIA'.$order->id.date("dmY");
        $order->update(['order_code'=>$code]);

        /**
         * Order Status Update
         */
        $order->status()->sync([1]);

        return response()->json(['data'=>$order],200);
    }

    /**
     * @return Application|Factory|View
     * My Order List
     */
    public function myOrders(){
        $orders = Order::with('orderDelivery','status')
            ->where('customer_id',auth()->user()->id)
            ->paginate(8);

        return view('customer.orders.my-orders',compact('orders'));
    }
}
