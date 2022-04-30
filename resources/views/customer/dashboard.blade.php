@extends('customer.layouts.master')
<style>
    .text-decoration-none{
        text-decoration: none !important;
    }
</style>
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold">Hi {{ auth()->user()->name }}</h2>
                            <h5 class="text-white op-7 mb-2">Delivery App Customer Portal</h5>
                        </div>
                        {{-- <div class="ml-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                            <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row mt--2">
                     <div class="col-md-6">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Overall Order statistics</div>
                                <div class="card-category">Information about statistics in orders</div>
                                <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-1"></div>
                                        <h6 class="fw-bold mt-3 mb-0">Open Orders</h6>
                                        <a href="javascript:void(0);" class="text-decoration-none" target="_blank"><h2 class="pt-4 text-info">
                                            {{ $data['open'] }}</h2></a>
                                    </div>
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-2"></div>
                                        <h6 class="fw-bold mt-3 mb-0">Picked Orders</h6>
                                        <a href="javascript:void(0);" class="text-decoration-none" target="_blank"><h2 class="pt-4 text-success">{{ $data['picked'] }}</h2></a>
                                    </div>
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-3"></div>
                                        <h6 class="fw-bold mt-3 mb-0">Delivered Orders</h6>
                                        <a href="javascript:void(0);" class="text-decoration-none" target="_blank"><h2 class="pt-4 text-danger">{{ $data['delivered'] }}</h2></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Total Order statistics</div>
                                <div class="row py-3">
                                    <div class="col-md-4 d-flex flex-column justify-content-around">
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-success op-8">Total Orders</h6>
                                            <h3 class="fw-bold">{{ $data['total'] }}</h3>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-danger op-8">Todays Orders</h6>
                                            <h3 class="fw-bold">{{ $data['today'] }}</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div id="chart-container">
                                            <canvas id="totalIncomeChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright ml-auto">
                    2022, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://ajdelivery.com">Delivery App</a>
                </div>
            </div>
        </footer>
    </div>
@endsection
