<?php
/**
 * Created By: AJAY
 * Date:30-04-2022
 */

namespace App\Http\Controllers\Customer;

use App\Http\Constants\WebConstants;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * @return Application|Factory|View
     * Customer Dashboard
     */
    public function dashboard(){
        $data = [];
        $orders = new Order();
        $data['open'] = $orders->whereHas('status',function ($q){
                            $q->where('id',WebConstants::STATUS_OPEN);
                        })
                        ->where('customer_id',auth()->user()->id)
                        ->count();

        $data['picked'] = $orders->whereHas('status',function ($q){
                            $q->where('id',WebConstants::STATUS_PICKED);
                        })
                        ->where('customer_id',auth()->user()->id)
                        ->count();
        $data['delivered'] = $orders->whereHas('status',function ($q){
                            $q->where('id',WebConstants::STATUS_DELIVERED);
                        })
                        ->where('customer_id',auth()->user()->id)
                        ->count();
        $data['today'] = $orders->where('customer_id',auth()->user()->id)
                        ->whereDate('order_date',Carbon::today())
                        ->count();
        $data['total'] = $orders->where('customer_id',auth()->user()->id)->count();


        return view('customer.dashboard',compact('data'));
    }
}
