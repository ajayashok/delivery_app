@extends('delivery.layouts.master')
@section('content')
<div class="main-panel">
   <div class="content">
      <div class="page-inner">
         <div class="page-header">
            <h4 class="page-title">Orders</h4>
            <ul class="breadcrumbs">
               <li class="nav-home">
                  <a href="#">
                  <i class="flaticon-home"></i>
                  </a>
               </li>
               <li class="separator">
                  <i class="flaticon-right-arrow"></i>
               </li>
            </ul>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if (Session::has($msg))
                        <div class="alert alert-{{$msg}} alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 {{ session($msg) }}
                            </div>
                        @endif
                        @endforeach
                     </div>
                     <table class="table mt-3 table-responsive">
                        <thead>
                           <tr>
                               <th scope="col">Order Id</th>
                               <th scope="col">Order Code</th>
                               <th scope="col">Product Name</th>
                               <th scope="col">Product Price</th>
                               <th scope="col">Address</th>
                               <th scope="col">Status</th>
                               <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                            @if($orders->total() > 0)
                                @foreach($orders as $key => $order)
                                   <tr>
                                      <td>{{ $order->id }}</td>
                                      <td>{{ $order->order_code }}</td>
                                      <td>{{ $order->product->product_name }}</td>
                                      <td>₹ {{ $order->product->product_price }}</td>
                                      <td>{{ $order->address_line1.','.$order->address_line2.','.$order->district.','.$order->state.','.$order->pincode }}</td>
                                      <td>
                                         <p class="fw-bold text-uppercase text-success op-8 status{{$order->id}}">{{ \App\Http\Constants\WebConstants::ORDER_STATUS[(int)$order->status->pluck('id')->first() - 1]['name'] }}</p>
                                      </td>
                                      <td>
                                        <select class="form-control m-1 changeStatus" style="width: 110%;" data-order_id="{{ $order->id }}">
                                            <option>Change Status</option>
                                            <option value="2">Picked</option>
                                            <option class="@if($order->status->pluck('id')->first() == 2) @else d-none @endif" value="3">Delivered</option>
                                        </select>
                                      </td>
                                   </tr>
                               @endforeach
                            @else
                                <td colspan="5">No Data Found</td>
                            @endif
                        </tbody>
                     </table>
                     {{ $orders->appends($_GET)->links() }}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
@push('scripts')

    <script !src="">
        var SEND_URL = @json(route('delivery.order-status-change'));
    </script>

    <script src="{{asset('plugins/assets/js/pages/delivery-boys/script.js')}}"></script>
@endpush
@endsection
