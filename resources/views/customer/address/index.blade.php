@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
   <div class="content">
      <div class="page-inner">
         <div class="page-header">
            <h4 class="page-title">Manage Address</h4>
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
                     <div class="card-sub" align="right">
                        <div class="card-title">
                           <a href="{{--{{ route('admin.city.create') }}--}}"><button class="btn btn-primary btn-sm" ><i class="text-bold-600
                              fas fa-plus-circle mr-50"></i>&nbsp;&nbsp;&nbsp;Add Address
                           </button></a>
                        </div>
                        <!-- <div class="card-title">Basic Table</div> -->
                     </div>
                     <table class="table mt-3">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Title</th>
                               <th scope="col">District</th>

                               <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php //print_r($city);exit;?>
                           <?php  $i = ($city->currentPage() - 1) * $city->perPage();?>
                           @if(!empty($city) && $city[0])
                           @foreach($city as $key => $cate)
                           <?php $i++;?>
                           <tr>
                              <td>{{$i}}</td>
                              <td>{{$cate->title}}</td>
                               <td>{{App\Http\Constants\AppConstants::getDistrict($cate->state)}}</td>
                               <td>
                                 @if($cate->status=='1')
                                 <p class="fw-bold text-uppercase text-success op-8">Active</p>
                                 @else
                                 <p class="fw-bold text-uppercase text-danger op-8">Inactive </p>
                                 @endif
                              </td>
                              <td>

                                 <a class="btn btn-warning btn-sm"
                                    href="{{ route('admin.city.edit', encrypt($cate->id)) }}"><i class="far fa-edit"></i>
                                 </a> &nbsp;&nbsp;&nbsp;
                                 <a class="btn btn-danger btn-sm"
                                    href="{{ route('admin.city.destroy',$cate->id) }}" onclick='return confirm("Are you sure want to delete this?");'><i class="fas fa-trash-alt"></i>
                                 </a>
                              </td>
                           </tr>
                           @endforeach
                           @else
                           <td colspan="3">No Data Found</td>
                           @endif
                        </tbody>
                     </table>
                     {{ $city->appends($_GET)->links() }}
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
<script></script>
@endpush
@endsection
