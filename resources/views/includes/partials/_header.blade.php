<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid">

        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Logo-->
            <div class="header-logo mr-10 d-none d-lg-flex">
                <a href="{{url('dashboard')}}">
                    @if($logo = app('setting')['web_properties']['website_logo_small']??false)
                        <img alt="Logo" src="{{resolvePhoto($logo,'none')}}" class="h-40px"/>
                    @else
                        <img alt="Logo" src="{{asset('dashboard_assets/logo/logo.png')}}" class="h-40px"/>
                    @endif
                </a>
            </div>
            <!--end::Logo-->

            <!--begin::Header Menu-->
            <div id="kt_header_menu"
                 class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item {{ request()->is('*/dashboard') ? 'menu-item-active' : '' }}"
                        aria-haspopup="true">
                        <a href="{{url('/dashboard')}}" class="menu-link">
                            <span class="menu-text">{{trans('dashboard.home')}}</span>
                        </a>
                    </li>
                    @if(!empty(app('moduels')))
                        <li class="menu-item menu-item-submenu menu-item-rel {{ active('forkliftspeed','saftey')}} "
                            data-menu-toggle="click"
                            aria-haspopup="true">
                            <a href="javascript:;"
                               class=" menu-link menu-toggle">
                                <span class="menu-text">{{trans('dashboard.my_modal')}}</span>
                                <span class="menu-desc"></span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                <ul class="menu-subnav">
                                    @if (in_array('SpeedModel', app('moduels')))
                                        <li class="menu-item {{ active('forklift_speed')}}"
                                            aria-haspopup="true">
                                            <a href="{{url('dashboard/forkliftspeed')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">{{trans('dashboard.forklift_speed')}}</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (in_array('PpesModel', app('moduels')))
                                        <li class="menu-item {{ active('safety')}}"
                                            aria-haspopup="true">
                                            <a href="{{url('dashboard/saftey')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">{{trans('dashboard.safety')}}</span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                    @endif


                    @if(\Modules\Report\Entities\PinnedReport::primary()->count() >= 1)
                    <li class="menu-item {{ request()->is('*/report/pinned') ? 'menu-item-active' : '' }}"
                        aria-haspopup="true">
                        <a href="{{url('/dashboard/report/pinned')}}" class="menu-link">
                            <span class="menu-text">{{trans('dashboard.reports')}}</span>
                        </a>
                    </li>
                    @endif

{{--                    <li class="menu-item menu-item-submenu menu-item-rel {{ active('')}} "--}}
{{--                        data-menu-toggle="click" aria-haspopup="true">--}}
{{--                        <a href="javascript:;"--}}
{{--                           class=" menu-link menu-toggle">--}}
{{--                            <span class="menu-text">{{trans('dashboard.reports')}}</span>--}}
{{--                            <span class="menu-desc"></span>--}}
{{--                            <i class="menu-arrow"></i>--}}
{{--                        </a>--}}
{{--                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">--}}
{{--                            <ul class="menu-subnav">--}}
{{--                                <li class="menu-item {{ active('pinned')}}"--}}
{{--                                    aria-haspopup="true">--}}
{{--                                    <a href="{{url('dashboard/report/pinned')}}" class="menu-link">--}}
{{--                                        <i class="menu-bullet menu-bullet-dot">--}}
{{--                                            <span></span>--}}
{{--                                        </i>--}}
{{--                                        <span class="menu-text">{{trans('dashboard.pinned')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}

                    <li class="menu-item menu-item-submenu menu-item-rel {{ active('users','roles')}} "
                        data-menu-toggle="click"
                        aria-haspopup="true">
                        <a href="javascript:;"
                           class=" menu-link menu-toggle">
                            <span class="menu-text">{{trans('dashboard.users')}}</span>
                            <span class="menu-desc"></span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item {{ active('users')}}"
                                    aria-haspopup="true">
                                    <a href="{{route('dashboard.users.index')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{trans('dashboard.users')}}</span>
                                    </a>
                                </li>

                                <li class="menu-item {{ active('roles')}}"
                                    aria-haspopup="true">
                                    <a href="{{route('dashboard.roles.index')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{trans('dashboard.roles')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel
                            {{ active('setting','categories','audit-logs','config')}}"
                        data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class=" menu-link menu-toggle">
                            <span class="menu-text">{{trans('dashboard.settings')}}</span>
                            <span class="menu-desc"></span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item {{ active('setting')}}">
                                    <a href="{{url('dashboard/setting')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{trans('dashboard.general_setting')}}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ active('categories')}}">
                                    <a href="{{route('dashboard.categories.index')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{trans('dashboard.categories')}}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ active('audit-logs')}}">
                                    <a href="{{url('dashboard/audit-logs')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{trans('dashboard.audit-logs')}}</span>
                                    </a>
                                </li>
                                @if(\Module::has('Report'))
                                    <li class="menu-item menu-item-submenu {{ active('pinned','config','builder')}}"
                                        data-menu-toggle="hover" aria-haspopup="true">
                                        <a href="javascript:;" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{__('dashboard.report')}}</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                        <div class="menu-submenu menu-submenu-classic menu-submenu-right" data-hor-direction="menu-submenu-right">
                                            <ul class="menu-subnav">
                                                <li class="menu-item {{ active('config')}}">
                                                    <a href="{{url('dashboard/config')}}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">{{trans('dashboard.config')}}</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item {{ active('builder')}}">
                                                    <a href="{{url('dashboard/report/builder')}}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">{{trans('dashboard.builder')}}</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item {{ active('pinned')}}">
                                                    <a href="{{url('dashboard/report/pinned')}}" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">{{trans('dashboard.pinned')}}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->

        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin:: Notification  -->
            <div class="topbar-item mr-3">
                <div class="dropdown-cont">
                    <div class="dropdown dropdown-inline">
                        <button type="button" id="notification_button"
                                class="btn notification-btn btn-hover-transparent-white notification-header btn-icon btn-lg"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="notification-number">
                            @php $count = app('notifications')->where('read_at',null)->count() @endphp
                                {{$count > 99 ? 99 :$count}}
                            </span>
                        </button>
                        <div class="dropdown-menu notification-dropdown" id="notification-dropdown"
                             aria-labelledby="dropdownMenuButton">
                            <div class="dropDown-title">
                                <h4>{{trans('dashboard.notifications')}}</h4>
                            </div>
                            @if(!app('notifications')->isEmpty())
                                <div class="dropdown-items-container">
                                    @foreach(app('notifications') as $notifyMessage)
                                        @php $notify = json_decode($notifyMessage->data ?? []) @endphp
                                        @if(isset($notify->message))
                                            <a href="{{route('dashboard.notifications')}}" class="dropdown-item">
                                                <p class=" font-weight-bold">{{$notify->title}}</p>
                                                <p>{{$notify->message}}</p>
                                                <span class="d-flex justify-content-between align-items-center">
                                                    <span class="text-muted text-right mt-1">
                                                        {{dateFormat($notifyMessage->created_at)}}
                                                    </span>
                                                    <span class="text-muted text-right mt-1">
                                                         {{timeFormat($notifyMessage->created_at)}}
                                                    </span>
                                                </span>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="dropdown-footer">
                                    <a href="{{route('dashboard.notifications')}}" class="text-center">
                                        <h4 class="mt-3">{{trans('dashboard.show_all_notifications')}}</h4>
                                    </a>
                                </div>
                            @else
                                <div>
                                    <img src="{{asset('dashboard_assets/media/no-notification.png')}}"
                                         class="notification-img"
                                         height="62" alt="item-1"
                                    />
                                </div>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <!--begin::Toggle-->
                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                        <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
                            @if (app()->getLocale() == 'en')
                                <div class="col-12 d-block text-center p-0 m-0">
                                    <i class="fas fa-language"></i>
                                    <small>AR</small>
                                </div>
                            @else
                                <div class="col-12 d-block text-center p-0 m-0">
                                    <i class="fas fa-language"></i>
                                    <small>EN</small>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!--end::Toggle-->
                    <!--begin::Dropdown-->
                    <div
                        class="dropdown-menu lang-dropdown p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                        <div class="dropDown-title">
                            {{trans('dashboard.languages')}}
                        </div>
                        <ul class="navi navi-hover py-4">
                            @if (app()->getLocale() == 'en')
                                <li class="navi-item">
                                    <a hreflang="ar"
                                       href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"
                                       class="navi-link justify-content-between">
                                        <span class="symbol symbol-20 mr-3">
                                            <img
                                                src="{{asset('dashboard_assets/media/svg/flags/133-saudi-arabia.svg')}}"
                                                alt=""/>
                                        </span>
                                        <span>@lang('dashboard.arabic')</span>
                                    </a>
                                </li>
                            @else
                                <li class="navi-item">
                                    <a hreflang="ar"
                                       href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"
                                       class="navi-link justify-content-between">
                                        <span class="symbol symbol-20 mr-3">
                                            <img
                                                src="{{asset('dashboard_assets/media/svg/flags/226-united-states.svg')}}"
                                                alt=""/>
                                        </span>
                                        <span>{{trans('dashboard.english')}}</span>
                                    </a>
                                </li>
                            @endif
                        </ul>

                    </div>
                    <!--end::Dropdown-->
                </div>
            </div>
            <!--end:: Notification  -->
        @if(auth()->user())
            <!--begin::User-->
                <div class="topbar-item mr-3">
                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2"
                         id="kt_quick_user_toggle">
                        <div class="symbol symbol-circle symbol-30 bg-white overflow-hidden">
                            <div class="symbol-label">
                                <img alt="Logo" src="{{resolvePhoto(auth()->user()->photo)}}" class="h-75 align-self-end"/>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::User-->
            @endif
        </div>
        <!--end::Topbar-->

    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
