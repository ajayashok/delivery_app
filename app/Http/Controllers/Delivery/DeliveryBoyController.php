<?php
/**
 * Created By: AJAY
 * Date:30-04-2022
 */

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Order;

class DeliveryBoyController extends Controller
{
    public function viewOrders()
    {
        $orders = Order::with('orderDelivery','status')
                    ->whereDoesntHave('orderDelivery',function ($q){
                        $q->whereNotIn('user_id',[auth()->user()->id]);
                    })
                    ->paginate(8);

        return view('delivery.orders.index',compact('orders'));
    }

    public function myOrders()
    {
        $orders = Order::with('orderDelivery','status')
            ->wherHas('orderDelivery',function ($q){
                $q->whereNotIn('user_id',[auth()->user()->id]);
            })
            ->paginate(8);

        return view('delivery.orders.my-orders',compact('orders'));
    }
    public function orderStatusChange()
    {
        $order_id = request('order_id');
        $status = request('id');

        $orders = Order::find($order_id);
        $orders->status()->sync([(int)$status]);
        $orders->orderDelivery()->sync([(int)auth()->user()->id]);
        $orders['status'] = $orders->status()->pluck('name')->first();
        return response()->json(['data'=>$orders],200);
    }
}
