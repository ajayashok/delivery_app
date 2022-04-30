<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @if(!empty(auth()->guard('admin')->user()->profile_image))
                        <img src="{{ Storage::url('public/admin/'.auth()->guard('admin')->user()->profile_image) }}" alt="." class="avatar-img rounded-circle">
                    @else
                        <img src="{{asset('plugins/image_placeholders/profile.png')}}" alt="." class="avatar-img rounded-circle">
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
								{{auth()->guard($guard)->user()->name}}
                                <!-- <span class="user-level">{{auth()->guard($guard)->user()->email}}</span> -->
                                    <span class="caret"></span>
								</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{route('admin.profile')}}">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a  href="{{route('admin.dashboard')}}" >
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>

                </li>

                <li
                    @if(request()->segment(2) =="advetisers" || request()->segment(2) =="users")
                    class="nav-item active submenu"
                    @else
                    class=" nav-item "
                    @endif
                >

                    <a data-toggle="collapse" href="#manage-users" class="collapsed" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <p>Manage Users</p>
                        <span class="caret"></span>
                    </a>
                    <div
                        @if(request()->segment(2) =="advetisers" || request()->segment(2) =="users")
                        class="collapse show"
                        @else
                        class="collapse"
                        @endif
                        id="manage-users">
                        <ul class="nav nav-collapse">
                            <li @if( request()->segment(2) =="advetisers")
                                class="nav-item active"
                                @endif>
                                <a href="{{route('admin.advetisers.index')}}" >
                                    <span class="sub-item">Advetisers</span>
                                </a>
                            </li>
                            <li @if( request()->segment(2) =="users")
                                class="nav-item active"
                                @endif>
                                <a href="{{route('admin.users.index')}}"
                                   @if(request()->segment(2) =="users")
                                   class="active"
                                    @endif>
                                    <span class="sub-item">Users</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li
                    @if( request()->segment(2) =="banners" || request()->segment(2) =="faq")
                    class="nav-item active submenu"
                    @else
                    class=" nav-item "
                    @endif
                >
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Manage CMS</p>
                        <span class="caret"></span>
                    </a>
                    <div
                        @if( request()->segment(2) =="banners" || request()->segment(2) =="faq")
                        class="collapse show"
                        @else
                        class="collapse"
                        @endif id="dashboard">
                        <ul class="nav nav-collapse">
                            <li @if( request()->segment(2) =="banners")
                                class=" nav-item active"
                                @endif>
                                <a href="{{route('admin.banners.index')}}"
                                >

                                    <span class="sub-item">Banners</span>
                                </a>
                            </li>
                            <li @if( request()->segment(2) =="faq")
                                class="nav-item active"
                                @endif>
                                <a href="{{route('admin.faq.index')}}"
                                   @if( request()->segment(2) =="faq")
                                   class="active"
                                    @endif>
                                    <span class="sub-item">FAQ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li
                    @if(request()->segment(2) =="categories" ) class="nav-item active submenu" @else class=" nav-item " @endif>
                    <a data-toggle="collapse" href="#Catalog" class="collapsed" aria-expanded="false">
                        <i class="fas fa-th-list"></i>
                        <p>Business Directory</p>
                        <span class="caret"></span>
                    </a>
                    <div
                        @if(request()->segment(2) =="categories"||request()->segment(2) =="products"||request()->segment(2) =="abroad"||request()->segment(2) =="kerala"||request()->segment(2) =="posts") class="collapse show" @else class="collapse" @endif id="Catalog">
                        <ul class="nav nav-collapse">
                            <li  @if( request()->segment(2) =="categories")  class="nav-item active" @endif>
                                <a  href="{{route('admin.categories.index')}}" >
                                    <span class="sub-item">Manage Categories</span>
                                </a>
                            </li>
                            <li  @if( request()->segment(2) =="posts")  class="nav-item active" @endif>
                                <a  href="{{route('admin.posts.index')}}" >
                                    <span class="sub-item">Manage Business</span>
                                </a>
                            </li>
                            <li  @if( request()->segment(2) =="products")  class="nav-item active" @endif>
                                <a  href="{{route('admin.products.index')}}" >
                                    <span class="sub-item">Manage City</span>
                                </a>
                            </li>
{{--                            <li  @if( request()->segment(3) =="kerala")  class="nav-item active" @endif>--}}
{{--                                <a  href="{{route('admin.classifieds.kerala')}}" >--}}
{{--                                    <span class="sub-item"> Kerala Classifieds</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li  @if( request()->segment(3) =="abroad")  class="nav-item active" @endif>--}}
{{--                                <a  href="{{route('admin.classifieds.abroad')}}" >--}}
{{--                                    <span class="sub-item"> Abroad Classifieds</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </li>
                <li
                    @if(request()->segment(2) =="classifieds" ) class="nav-item active submenu" @else class=" nav-item " @endif>
                    <a data-toggle="collapse" href="#Classifieds" class="collapsed" aria-expanded="false">
                        <i class="fas fa-th-list"></i>
                        <p>Classifieds</p>
                        <span class="caret"></span>
                    </a>
                    <div
                        @if(request()->segment(2) =="classifieds"||request()->segment(2) =="abroad"||request()->segment(2) =="kerala") class="collapse show" @else class="collapse" @endif id="Classifieds">
                        <ul class="nav nav-collapse">
{{--                            <li  @if( request()->segment(2) =="categories")  class="nav-item active" @endif>--}}
{{--                                <a  href="{{route('admin.categories.index')}}" >--}}
{{--                                    <span class="sub-item">Manage Categories</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li  @if( request()->segment(2) =="posts")  class="nav-item active" @endif>--}}
{{--                                <a  href="{{route('admin.posts.index')}}" >--}}
{{--                                    <span class="sub-item">Manage Business</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li  @if( request()->segment(2) =="products")  class="nav-item active" @endif>--}}
{{--                                <a  href="{{route('admin.products.index')}}" >--}}
{{--                                    <span class="sub-item">Manage City</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li  @if( request()->segment(3) =="kerala")  class="nav-item active" @endif>
                                <a  href="{{route('admin.classifieds.kerala')}}" >
                                    <span class="sub-item"> Kerala Classifieds</span>
                                </a>
                            </li>
                            <li  @if( request()->segment(3) =="abroad")  class="nav-item active" @endif>
                                <a  href="{{route('admin.classifieds.abroad')}}" >
                                    <span class="sub-item"> Abroad Classifieds</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li
                    @if(request()->segment(2) =="rewards" ) class="nav-item active submenu" @else class=" nav-item " @endif>
                    <a data-toggle="collapse" href="#Rewards" class="collapsed" aria-expanded="false">
                        <i class="fas fa-th-list"></i>
                        <p>Rewards</p>
                        <span class="caret"></span>
                    </a>
                    <div
                        @if(request()->segment(2) =="rewards") class="collapse show" @else class="collapse" @endif id="Rewards">
                        <ul class="nav nav-collapse">
                            <li  @if( request()->segment(3) =="rewards")  class="nav-item active" @endif>
                                <a  href="{{ route('admin.rewards.index') }}">
                                    <span class="sub-item"> Manage Rewards</span>
                                </a>
                            </li>
                            <li  @if( request()->segment(3) =="categories")  class="nav-item active" @endif>
                                <a  href="{{ route('admin.rewards.categories.index') }}">
                                    <span class="sub-item"> Reward Category</span>
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
