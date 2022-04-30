@extends('customer.layouts.master')
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
                                <table class="table mt-3">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
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
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->order_code }}</td>
                                                <td>{{ $order->product->product_name }}</td>
                                                <td>₹ {{ $order->product->product_price }}</td>
                                                <td>{{ $order->address_line1.','.$order->address_line2.','.$order->district.','.$order->state.','.$order->pincode }}</td>
                                                <td>
                                                    <p class="fw-bold text-uppercase text-success op-8">{{ \App\Http\Constants\WebConstants::ORDER_STATUS[(int)$order->status->pluck('id')->first() - 1]['name'] }}</p>
                                                </td>
                                                <td>
{{--                                                     <a class="btn btn-warning btn-sm"--}}
{{--                                                        href=""><i class="far fa-view"></i>--}}
{{--                                                     </a>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <td colspan="4">No Data Found</td>
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
        <script src="{{asset('backend/assets/js/jquery.validate.min.js')}}"></script>
        <script>

        </script>
    @endpush
@endsection
