<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @if(!empty(auth()->user()->image))
                        <img src="{{ asset('profile.png') }}" alt="." class="avatar-img rounded-circle">
                    @else
                        <img src="{{asset('profile.png')}}" alt="." class="avatar-img rounded-circle">
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
								{{auth()->user()->name}}
                                <span class="user-level">{{auth()->user()->email}}</span>
                                    <span class="caret"></span>
								</span>
                    </a>
                    <div class="clearfix"></div>

                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item @if(request()->segment(1) =="dashboard") active @endif">
                    <a  href="{{route('delivery.delivery_dashboard')}}" >
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>

                </li>
                <li class="nav-item @if((request()->segment(1) =="orders")) submenu active @endif" >
                    <a data-toggle="collapse" href="#Order" class="collapsed" aria-expanded="false">
                        <i class="fas fa-th-list"></i>
                        <p>Orders</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if( (request()->segment(2) == "view-orders")) show @endif" id="Order">
                        <ul class="nav nav-collapse">
                            <li class="nav-item @if( request()->segment(2) == "view-orders") active @endif">
                                <a href="{{ route('delivery.view-orders') }}">
                                    <span class="sub-item"> View Orders</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
