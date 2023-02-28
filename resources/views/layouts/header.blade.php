<!-- BEGIN HEADER -->
@php
    $message = unreadMessage();
@endphp
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{route('home')}}">
                {{-- <img src="{{url('')}}/dash-assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" />  --}}
                <h2 class="logo-default" style="margin: 10px auto;color:white;font-weight:bolder;">{{ __('Admin') }}</h2>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                {{-- <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="fa fa-language" aria-hidden="true" style="font-size: 20px"></i> <span style="color: white"> {{ __('Lang') }}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default" style='width:150px'>
                        <li>
                            <a href="{{url('/en')}}">
                                <img src="{{url('')}}/images/us-flag.png" style="border-radius: 36% !important; height: 20px;"> English </a>
                        </li>
                          <li>
                            <a href="{{url('/sp')}}">
                                <img src="{{url('')}}/images/span.png" style="border-radius: 36% !important; height: 20px; width: 20px;"> Spanish </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-default"> {{$message->count()}} </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>You have
                                <span class="bold">{{$message->count()}} New</span> Messages</h3>
                            <a href="{{route('support')}}">view all</a>
                        </li>
                        <li>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                @foreach ($message as $msg)
                                @php
                                    $diff = $msg->created_at->diffForHumans(null, true, true, 2);
                
                                    $average_time = str_replace(['h', 'm'], ['hrs', 'mins'], $diff);
                                @endphp
                                <li>
                                    <a href="{{route('support.detail',[$msg->id])}}">
                                        <span class="subject" style="margin-left: 0px">
                                            <span class="from"> {{$msg->name}} </span>
                                            <span class="time">{{$average_time}} ago</span>
                                        </span>
                                        <span class="message" style="margin-left: 0px"> {{$msg->email}}</span>
                                    </a>
                                </li>
                                @endforeach
                               </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="fa fa-language" aria-hidden="true" style="font-size: 20px"></i> <span style="color: white"> {{ __('Lang') }}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default" style='width:150px'>
                        <li>
                            <a href="{{url('/en')}}">
                                <img src="{{url('')}}/images/us-flag.png" style="border-radius: 36% !important; height: 20px;"> English </a>
                        </li>
                          <li>
                            <a href="{{url('/ar')}}">
                                <img src="{{url('')}}/images/arabic-flag.webp" style="border-radius: 36% !important; height: 20px;"> العربية </a>
                        </li>
                    </ul>
                </li> --}}
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="{{url('')}}{{'/uploads/user-placeholder.jpeg'}}"/>
                        <span class="username username-hide-on-mobile"> {{Auth::guard('admin')->user()->full_name ?? null}} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{route('profile.setting')}}">
                                <i class="icon-user"></i> {{ __('My Profile') }} </a>
                        </li>
                          <li>
                            <a href="{{route('logout')}}">
                                <i class="icon-key"></i> {{ __('Logout') }} </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                {{-- <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li> --}}
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->