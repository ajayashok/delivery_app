@extends('customer.layouts.master')
@push('css')
    <link rel="stylesheet" href="{{asset('plugins/assets/css/pages/products/style.css')}}">
@endpush
@section('content')
<div class="main-panel">
   <div class="content">
      <div class="page-inner">
         <div class="page-header">
            <h4 class="page-title">All Products</h4>
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
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="product-list">
                                    <div class="row">
                                        @foreach($products as $prod)
                                        <div class="col-md-3 col-sm-6 pb-3">
                                            <div class="white-box">
                                                <div class="product-img">
                                                    <img src="{{ $prod->image }}">
                                                </div>
                                                <div class="product-bottom">
                                                    <div class="product-name">{{ $prod->product_name }}</div>
                                                    <div class="price">
                                                        <span class="rupee-icon">₹</span> {{ $prod->product_price }}
                                                    </div>
                                                    <a href="javascript:void(0)" class="blue-btn" data-id="{{ $prod->id }}">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
</div>
</div>
</div>
</div>
</div>
@push('scripts')
    <script !src="">
        var SEND_URL = @json(route('customer.place-order'));
    </script>

<script src="{{asset('plugins/assets/js/pages/products/script.js')}}"></script>
@endpush
@endsection
