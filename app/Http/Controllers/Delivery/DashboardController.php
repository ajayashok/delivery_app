<?php
/**
 * Created By: AJAY
 * Date:30-04-2022
 */

namespace App\Http\Controllers\Delivery;

use App\Http\Constants\WebConstants;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard(){
        $data = [];
        $orders = new Order();
        $data['open'] = $orders->whereHas('status',function ($q){
                            $q->where('id',WebConstants::STATUS_OPEN);
                        })
                        ->whereHas('orderDelivery',function ($q){
                            $q->where('user_id',auth()->user()->id);
                        })
                        ->count();

        $data['picked'] = $orders->whereHas('status',function ($q){
                            $q->where('id',WebConstants::STATUS_PICKED);
                        })
                        ->whereHas('orderDelivery',function ($q){
                            $q->where('user_id',auth()->user()->id);
                        })
                        ->count();
        $data['delivered'] = $orders->whereHas('status',function ($q){
                            $q->where('id',WebConstants::STATUS_DELIVERED);
                        })
                        ->whereHas('orderDelivery',function ($q){
                            $q->where('user_id',auth()->user()->id);
                        })
                        ->count();
        $data['today'] = $orders->whereHas('orderDelivery',function ($q){
                            $q->where('user_id',auth()->user()->id);
                        })
                        ->whereDate('order_date',Carbon::today())
                        ->count();
        $data['total'] = $orders->whereHas('orderDelivery',function ($q){
                            $q->where('user_id',auth()->user()->id);
                        })->count();


        return view('delivery.dashboard',compact('data'));
    }
}
