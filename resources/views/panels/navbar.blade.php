<div class="navbar @if(($configData['isNavbarFixed'])=== true){{'navbar-fixed'}} @endif">
    <nav
        class="{{$configData['navbarMainClass']}} @if($configData['isNavbarDark']=== true) {{'navbar-dark'}} @elseif($configData['isNavbarDark']=== false) {{'navbar-light'}} @elseif(!empty($configData['navbarBgColor'])) {{$configData['navbarBgColor']}} @else {{$configData['navbarMainColor']}} @endif">
        <div class="nav-wrapper">
            {{--      <div class="header-search-wrapper hide-on-med-and-down">--}}
            {{--        <i class="material-icons">search</i>--}}
            {{--        <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize"--}}
            {{--          data-search="template-list">--}}
            {{--        <ul class="search-list collection display-none"></ul>--}}
            {{--      </div>--}}
            <ul class="navbar-list right">
                {{--        <li class="dropdown-language">--}}
                {{--          <a class="waves-effect waves-block waves-light translation-button" href="#"--}}
                {{--            data-target="translation-dropdown">--}}
                {{--            <span class="flag-icon flag-icon-gb"></span>--}}
                {{--          </a>--}}
                {{--        </li>--}}
                <li class="hide-on-med-and-down">
                    <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                        <i class="material-icons">settings_overscan</i>
                    </a>
                </li>
                {{--        <li class="hide-on-large-only search-input-wrapper">--}}
                {{--          <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">--}}
                {{--            <i class="material-icons">search</i>--}}
                {{--          </a>--}}
                {{--        </li>--}}
{{--                <?php $notifcations = \auth()->user()->notifications()->orderBy('created_at', 'desc')->get();?>--}}
{{--                <li>--}}
{{--                    <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"--}}
{{--                       data-target="notifications-dropdown">--}}
{{--                        <i class="material-icons">notifications_none<small--}}
{{--                                class="notification-badge">{{$notifcations->count()}}</small></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"--}}
{{--                       data-target="profile-dropdown">--}}
{{--            <span class="avatar-status avatar-online">--}}
{{--                @if(\auth()->user() && \auth()->user()->vendor && \auth()->user()->vendor->logo )--}}
{{--                    <img src="{{\auth()->user()->vendor->logo}}" alt="avatar"><i></i>--}}
{{--                @else--}}
{{--                    <img src="{{asset('images/avatar/avatar-7.png')}}" alt="avatar"><i></i>--}}
{{--                @endif--}}

{{--            </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                {{--        <li>--}}
                {{--          <a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right">--}}
                {{--            <i class="material-icons">format_indent_increase</i>--}}
                {{--          </a>--}}
                {{--        </li>--}}
            </ul>
            <!-- translation-button-->
        {{--      <ul class="dropdown-content" id="translation-dropdown">--}}
        {{--        <li class="dropdown-item">--}}
        {{--          <a class="grey-text text-darken-1" href="{{url('lang/en')}}" data-language="en">--}}
        {{--            <i class="flag-icon flag-icon-gb"></i>--}}
        {{--            English--}}
        {{--          </a>--}}
        {{--        </li>--}}
        {{--          <li class="dropdown-item">--}}
        {{--          <a class="grey-text text-darken-1" href="{{url('lang/ar')}}" data-language="en">--}}
        {{--            <i class="flag-icon flag-icon-eg"></i>--}}
        {{--            Arabic--}}
        {{--          </a>--}}
        {{--        </li>--}}
        {{--        <li class="dropdown-item">--}}
        {{--          <a class="grey-text text-darken-1" href="{{url('lang/fr')}}" data-language="fr">--}}
        {{--            <i class="flag-icon flag-icon-fr"></i>--}}
        {{--            French--}}
        {{--          </a>--}}
        {{--        </li>--}}
        {{--        <li class="dropdown-item">--}}
        {{--          <a class="grey-text text-darken-1" href="{{url('lang/pt')}}" data-language="pt">--}}
        {{--            <i class="flag-icon flag-icon-pt"></i>--}}
        {{--            Portuguese--}}
        {{--          </a>--}}
        {{--        </li>--}}
        {{--        <li class="dropdown-item">--}}
        {{--          <a class="grey-text text-darken-1" href="{{url('lang/de')}}" data-language="de">--}}
        {{--            <i class="flag-icon flag-icon-de"></i>--}}
        {{--            German--}}
        {{--          </a>--}}
        {{--        </li>--}}
        {{--      </ul>--}}
        <!-- notifications-dropdown-->

{{--            <ul class="dropdown-content" id="notifications-dropdown">--}}
{{--                <li class="divider"></li>--}}
{{--                @if($notifcations->count() > 0)--}}
{{--                    @foreach($notifcations as $notification)--}}
{{--                        <?php $data = ($notification->data)?>--}}

{{--                        @if($notification->type == "App\Notifications\ProductsCreated")--}}
{{--                            <li>--}}
{{--                                <a class="black-text" href="{{url('dashboard/products/'.$data['data']['id'])}}">--}}
{{--                                    <span class="material-icons icon-bg-circle teal small">settings</span>--}}
{{--                                    New Product Added--}}
{{--                                </a>--}}
{{--                                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days--}}
{{--                                    ago--}}
{{--                                </time>--}}
{{--                            </li>--}}
{{--                        @elseif($notification->type == "App\Notifications\OrdersCreated")--}}

{{--                            <li>--}}

{{--                                <a class="black-text" href="{{url('dashboard/orders/'.$data['data']['id'])}}">--}}
{{--                                    <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span>--}}
{{--                                    A new order has been placed!--}}
{{--                                </a>--}}
{{--                                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours--}}
{{--                                    ago--}}
{{--                                </time>--}}
{{--                            </li>--}}
{{--                        @endif--}}



{{--                        --}}{{--        <li>--}}
{{--                        --}}{{--          <a class="black-text" href="javascript:void(0)">--}}
{{--                        --}}{{--            <span class="material-icons icon-bg-circle deep-orange small">today</span>--}}
{{--                        --}}{{--            Director meeting started--}}
{{--                        --}}{{--          </a>--}}
{{--                        --}}{{--          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>--}}
{{--                        --}}{{--        </li>--}}
{{--                        --}}{{--        <li>--}}
{{--                        --}}{{--          <a class="black-text" href="javascript:void(0)">--}}
{{--                        --}}{{--            <span class="material-icons icon-bg-circle amber small">trending_up</span>--}}
{{--                        --}}{{--            Generate monthly report--}}
{{--                        --}}{{--          </a>--}}
{{--                        --}}{{--          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>--}}
{{--                        --}}{{--        </li>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </ul>--}}
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
                <li>
                    <a class="grey-text text-darken-1" href="{{url('dashboard/profile')}}">
                        <i class="material-icons">person_outline</i>
                        Profile
                    </a>
                </li>
                <li>
                    <a class="grey-text text-darken-1" href="{{url('dashboard/change_password')}}">
                        <i class="material-icons">person_outline</i>
                        {{__('dashboard.change_password')}}
                    </a>
                </li>
                <li>
                    <a class="grey-text text-darken-1" href="{{url('dashboard/admin_info')}}">
                        <i class="material-icons">person_outline</i>
                        {{__('dashboard.your_information')}}
                    </a>
                </li>
                <li>
                    @if(isset(\auth()->user()->bank_account->id))
                        <a class="grey-text text-darken-1" href="{{url('dashboard/bank_account/'.\auth()->user()->bank_account->id.'/edit')}}">
                            <i class="material-icons">person_outline</i>
                            Bank Account
                        </a>
                    @else
                        <a class="grey-text text-darken-1" href="{{url('dashboard/bank_account/create')}}">
                            <i class="material-icons">person_outline</i>
                            Bank Account
                        </a>
                    @endif

                </li>
                {{--        <li>--}}
                {{--          <a class="grey-text text-darken-1" href="{{asset('app-chat')}}">--}}
                {{--            <i class="material-icons">chat_bubble_outline</i>--}}
                {{--            Chat--}}
                {{--          </a>--}}
                {{--        </li>--}}
                {{--        <li>--}}
                {{--          <a class="grey-text text-darken-1" href="{{asset('page-faq')}}">--}}
                {{--            <i class="material-icons">help_outline</i>--}}
                {{--            Help--}}
                {{--          </a>--}}
                {{--        </li>--}}
                {{--        <li class="divider"></li>--}}
                {{--        <li>--}}
                {{--          <a class="grey-text text-darken-1" href="{{asset('user-lock-screen')}}">--}}
                {{--            <i class="material-icons">lock_outline</i>--}}
                {{--            Lock--}}
                {{--          </a>--}}
                {{--        </li>--}}
{{--                <li>--}}
{{--                    <a class="grey-text text-darken-1" href="{{asset('logout')}}"--}}
{{--                       onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">--}}
{{--                        <i class="material-icons">keyboard_tab</i>--}}
{{--                        Logout--}}
{{--                    </a>--}}

{{--                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                        {{ csrf_field() }}--}}
{{--                    </form>--}}


{{--                </li>--}}
            </ul>
        </div>
        {{--    <nav class="display-none search-sm">--}}
        {{--      <div class="nav-wrapper">--}}
        {{--        <form id="navbarForm">--}}
        {{--          <div class="input-field search-input-sm">--}}
        {{--            <input class="search-box-sm mb-0" type="search" required="" placeholder='Explore Materialize' id="search"--}}
        {{--              data-search="template-list">--}}
        {{--            <label class="label-icon" for="search">--}}
        {{--              <i class="material-icons search-sm-icon">search</i>--}}
        {{--            </label>--}}
        {{--            <i class="material-icons search-sm-close">close</i>--}}
        {{--            <ul class="search-list collection search-list-sm display-none"></ul>--}}
        {{--          </div>--}}
        {{--        </form>--}}
        {{--      </div>--}}
        {{--    </nav>--}}
    </nav>
</div>
<!-- search ul  -->
{{--<ul class="display-none" id="default-search-main">--}}
{{--  <li class="auto-suggestion-title">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <h6 class="search-title">FILES</h6>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <div class="display-flex">--}}
{{--        <div class="display-flex align-item-center flex-grow-1">--}}
{{--          <div class="avatar">--}}
{{--            <img src="{{asset('images/icon/pdf-image.png')}}" width="24" height="30" alt="sample image">--}}
{{--          </div>--}}
{{--          <div class="member-info display-flex flex-column">--}}
{{--            <span class="black-text">--}}
{{--              Two new item submitted</span>--}}
{{--            <small class="grey-text">Marketing Manager</small>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="status"><small class="grey-text">17kb</small></div>--}}
{{--      </div>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <div class="display-flex">--}}
{{--        <div class="display-flex align-item-center flex-grow-1">--}}
{{--          <div class="avatar">--}}
{{--            <img src="{{asset('images/icon/doc-image.png')}}" width="24" height="30" alt="sample image">--}}
{{--          </div>--}}
{{--          <div class="member-info display-flex flex-column">--}}
{{--            <span class="black-text">52 Doc file Generator</span>--}}
{{--            <small class="grey-text">FontEnd Developer</small>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="status"><small class="grey-text">550kb</small></div>--}}
{{--      </div>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <div class="display-flex">--}}
{{--        <div class="display-flex align-item-center flex-grow-1">--}}
{{--          <div class="avatar">--}}
{{--            <img src="{{asset('images/icon/xls-image.png')}}" width="24" height="30" alt="sample image">--}}
{{--          </div>--}}
{{--          <div class="member-info display-flex flex-column">--}}
{{--            <span class="black-text">25 Xls File Uploaded</span>--}}
{{--            <small class="grey-text">Digital Marketing Manager</small>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="status"><small class="grey-text">20kb</small></div>--}}
{{--      </div>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <div class="display-flex">--}}
{{--        <div class="display-flex align-item-center flex-grow-1">--}}
{{--          <div class="avatar">--}}
{{--            <img src="{{asset('images/icon/jpg-image.png')}}" width="24" height="30" alt="sample image">--}}
{{--          </div>--}}
{{--          <div class="member-info display-flex flex-column">--}}
{{--            <span class="black-text">Anna Strong</span>--}}
{{--            <small class="grey-text">Web Designer</small>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="status"><small class="grey-text">37kb</small></div>--}}
{{--      </div>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion-title">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <h6 class="search-title">MEMBERS</h6>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <div class="display-flex">--}}
{{--        <div class="display-flex align-item-center flex-grow-1">--}}
{{--          <div class="avatar">--}}
{{--            <img class="circle" src="{{asset('images/avatar/avatar-7.png')}}" width="30" alt="sample image"></div>--}}
{{--          <div class="member-info display-flex flex-column">--}}
{{--            <span class="black-text">John Doe</span>--}}
{{--            <small class="grey-text">UI designer</small>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <div class="display-flex">--}}
{{--        <div class="display-flex align-item-center flex-grow-1">--}}
{{--          <div class="avatar">--}}
{{--            <img class="circle" src="{{asset('images/avatar/avatar-8.png')}}" width="30" alt="sample image">--}}
{{--          </div>--}}
{{--          <div class="member-info display-flex flex-column">--}}
{{--            <span class="black-text">Michal Clark</span>--}}
{{--            <small class="grey-text">FontEnd Developer</small>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <div class="display-flex">--}}
{{--        <div class="display-flex align-item-center flex-grow-1">--}}
{{--          <div class="avatar">--}}
{{--            <img class="circle" src="{{asset('images/avatar/avatar-10.png')}}" width="30" alt="sample image">--}}
{{--          </div>--}}
{{--          <div class="member-info display-flex flex-column">--}}
{{--            <span class="black-text">Milena Gibson</span>--}}
{{--            <small class="grey-text">Digital Marketing</small>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <div class="display-flex">--}}
{{--        <div class="display-flex align-item-center flex-grow-1">--}}
{{--          <div class="avatar">--}}
{{--            <img class="circle" src="{{asset('images/avatar/avatar-12.png')}}" width="30" alt="sample image">--}}
{{--          </div>--}}
{{--          <div class="member-info display-flex flex-column">--}}
{{--            <span class="black-text">Anna Strong</span>--}}
{{--            <small class="grey-text">Web Designer</small>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--</ul>--}}
{{--<ul class="display-none" id="page-search-title">--}}
{{--  <li class="auto-suggestion-title">--}}
{{--    <a class="collection-item" href="#">--}}
{{--      <h6 class="search-title">PAGES</h6>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--</ul>--}}
{{--<ul class="display-none" id="search-not-found">--}}
{{--  <li class="auto-suggestion">--}}
{{--    <a class="collection-item display-flex align-items-center" href="#">--}}
{{--      <span class="material-icons">error_outline</span>--}}
{{--      <span class="member-info">No results found.</span>--}}
{{--    </a>--}}
{{--  </li>--}}
{{--</ul>--}}
