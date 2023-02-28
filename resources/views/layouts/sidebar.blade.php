 <!-- BEGIN SIDEBAR -->
 <div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            {{-- <li class="sidebar-search-wrapper">
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
            </li> --}}
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
            <li class="nav-item start {{Route::currentRouteName() == 'home' || Route::currentRouteName() == 'order_detail' ? 'active open' : null}}">
                <a href="{{route('home')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">{{ __('Dashboard') }}</span>
                    <span class="{{Route::currentRouteName() == 'home' ? 'selected' : null}}"></span>
                    
                </a>
            </li>
            <li class="nav-item start {{Route::currentRouteName() == 'profile.setting' ? 'active open' : null}}">
                <a href="{{route('profile.setting')}}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">{{ __('Update') }} {{__('Profile')}}</span>
                    <span class="{{Route::currentRouteName() == 'profile.setting' ? 'selected' : null}}"></span>
                    
                </a>
            </li>
            <li class="nav-item start {{Route::currentRouteName() == 'users' || Route::currentRouteName() == 'user-profile' ? 'active open' : null}}">
                <a href="{{route('users')}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">{{ __('All') }} {{ __('Users') }}</span>
                    <span class="{{Route::currentRouteName() == 'users' ? 'selected' : null}}"></span>
                </a>
            </li>

            <li class="nav-item start {{Route::currentRouteName() == 'histories' || Route::currentRouteName() == 'user-profile' ? 'active open' : null}}">
                <a href="{{route('histories')}}" class="nav-link nav-toggle">
                    <i class="fa fa-history"></i>
                    <span class="title">{{ __('Keyword Search History') }}</span>
                    <span class="{{Route::currentRouteName() == 'histories' ? 'selected' : null}}"></span>
                </a>
            </li>

            <li class="nav-item start {{Route::currentRouteName() == 'partner-history' || Route::currentRouteName() == 'user-profile' ? 'active open' : null}}">
                <a href="{{route('partner-history')}}" class="nav-link nav-toggle">
                    <i class="fa fa-history"></i>
                    <span class="title">{{ __('Merchants Search History') }}</span>
                    <span class="{{Route::currentRouteName() == 'partner-historypa' ? 'selected' : null}}"></span>
                </a>
            </li>

            <li class="nav-item start {{Route::currentRouteName() == 'category' ? 'active open' : null}}">
                <a href="{{route('category')}}" class="nav-link nav-toggle">
                    <i class="fa fa-list-alt"></i>
                    <span class="title">{{ __('Categories') }}</span>
                    <span class="{{Route::currentRouteName() == 'category' ? 'selected' : null}}"></span>
                </a>
            </li>

            <li class="nav-item start {{Route::currentRouteName() == 'marchant' ? 'active open' : null}}">
                <a href="{{route('marchant')}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">{{ __('Partners') }}</span>
                    <span class="{{Route::currentRouteName() == 'marchant' ? 'selected' : null}}"></span>
                </a>
            </li>


            <li class="nav-item start {{Route::currentRouteName() == 'product' ? 'active open' : null}}">
                <a href="{{route('product')}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">{{ __('Partner Product') }}</span>
                    <span class="{{Route::currentRouteName() == 'product' ? 'selected' : null}}"></span>
                </a>
            </li>

            <li class="nav-item start {{Route::currentRouteName() == 'partner' ? 'active open' : null}}">
                <a href="{{route('partner')}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">{{ __('Merchant Keyword') }}</span>
                    <span class="{{Route::currentRouteName() == 'partner' ? 'selected' : null}}"></span>
                </a>
            </li>

            <li class="nav-item start {{Route::currentRouteName() == 'notification' ? 'active open' : null}}">
                <a href="{{route('notification')}}" class="nav-link nav-toggle">
                    <i class="fa fa-bell"></i>
                    <span class="title">{{ __('Push Notification') }}</span>
                    <span class="{{Route::currentRouteName() == 'notification' ? 'selected' : null}}"></span>
                </a>
            </li>

            <li class="nav-item start {{Route::currentRouteName() == 'Cashwithdraws' || Route::currentRouteName() == 'user-profile' ? 'active open' : null}}">
                <a href="{{route('Cashwithdraws')}}" class="nav-link nav-toggle">
                    <i class="fa fa-history"></i>
                    <span class="title">{{ __('CashWithdraw Requests') }}</span>
                    <span class="{{Route::currentRouteName() == 'Cashwithdraws' ? 'selected' : null}}"></span>
                </a>
            </li>
            <li class="nav-item start {{Route::currentRouteName() == 'UserProductRedeems' || Route::currentRouteName() == 'user-profile' ? 'active open' : null}}">
                <a href="{{route('UserProductRedeems')}}" class="nav-link nav-toggle">
                    <i class="fa fa-history"></i>
                    <span class="title">{{ __('User Product Redeem') }}</span>
                    <span class="{{Route::currentRouteName() == 'UserProductRedeems' ? 'selected' : null}}"></span>
                </a>
            </li>
            

            <li class="nav-item start {{Route::currentRouteName() == 'promocodes' ? 'active open' : null}}">
                <a href="{{route('promocodes')}}" class="nav-link nav-toggle">
                    <i class="fa fa-gift"></i>
                    <span class="title">{{ __('Promo Codes') }}</span>
                    <span class="{{Route::currentRouteName() == 'promocode' ? 'selected' : null}}"></span>
                </a>
            </li>

            <li class="nav-item start {{Route::currentRouteName() == 'site.settings' ? 'active open' : null}}">
                <a href="{{route('site.settings')}}" class="nav-link nav-toggle">
                    <i class="fa fa-cog"></i>
                    <span class="title">{{ __('Site Settings') }}</span>
                    <span class="{{Route::currentRouteName() == 'site.settings' ? 'selected' : null}}"></span>
                </a>
            </li>

        
            {{--  <li class="nav-item {{Route::currentRouteName() == 'stores' || Route::currentRouteName() == 'play_details' || Route::currentRouteName() == 'store.create' || Route::currentRouteName() == 'store.edit'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-home"></i>
                    <span class="title">{{ __('Stores')}}</span>
                    <span class="{{Route::currentRouteName() == 'stores' || Route::currentRouteName() == 'play_details' || Route::currentRouteName() == 'store.create' || Route::currentRouteName() == 'store.edit' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'stores' ? 'active open' : null}}">
                        <a href="{{route('stores')}}" class="nav-link ">
                            <span class="title">{{ __('List Store') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'store.create' || Route::currentRouteName() == 'store.create'
                    || Route::currentRouteName() == 'store.edit' ? 'active open' : null}} ">
                        <a href="{{route('store.create')}}" class="nav-link ">
                            <span class="title">{{ __('Add Store')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{Route::currentRouteName() == 'coin_types' || Route::currentRouteName() == 'coin_type.create' || Route::currentRouteName() == 'coin_type.edit'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-gift"></i>
                    <span class="title">{{ __('Coin Types')}}</span>
                    <span class="{{Route::currentRouteName() == 'coin_types' || Route::currentRouteName() == 'coin_type.create' || Route::currentRouteName() == 'coin_type.edit' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'coin_types' ? 'active open' : null}}">
                        <a href="{{route('coin_types')}}" class="nav-link ">
                            <span class="title">{{ __('List Coin Type') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'coin_type.create' || Route::currentRouteName() == 'coin_type.create'
                    || Route::currentRouteName() == 'coin_type.edit' ? 'active open' : null}} ">
                        <a href="{{route('coin_type.create')}}" class="nav-link ">
                            <span class="title">{{ __('Add Coin Type')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
             <li class="nav-item {{Route::currentRouteName() == 'compaign_videos' || Route::currentRouteName() == 'compaign_video.create' || Route::currentRouteName() == 'compaign_video.edit'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-play"></i>
                    <span class="title">{{ __('Compaign Videos')}}</span>
                    <span class="{{Route::currentRouteName() == 'compaign_videos' || Route::currentRouteName() == 'compaign_video.create' || Route::currentRouteName() == 'compaign_video.edit' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'compaign_videos' ? 'active open' : null}}">
                        <a href="{{route('compaign_videos')}}" class="nav-link ">
                            <span class="title">{{ __('List Compaign Video') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'compaign_video.create' || Route::currentRouteName() == 'compaign_video.create'
                    || Route::currentRouteName() == 'compaign_video.edit' ? 'active open' : null}} ">
                        <a href="{{route('compaign_video.create')}}" class="nav-link ">
                            <span class="title">{{ __('Add Compaign Video')}}</span>
                        </a>
                    </li>
                </ul>
            </li> 
            <li class="nav-item {{Route::currentRouteName() == 'compaigns' || Route::currentRouteName() == 'compaign.create' || Route::currentRouteName() == 'compaign.edit'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-play"></i>
                    <span class="title">{{ __('Compaigns')}}</span>
                    <span class="{{Route::currentRouteName() == 'compaigns' || Route::currentRouteName() == 'compaign.create' || Route::currentRouteName() == 'compaign.edit' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'compaigns' ? 'active open' : null}}">
                        <a href="{{route('compaigns')}}" class="nav-link ">
                            <span class="title">{{ __('List Compaign') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'compaign.create' || Route::currentRouteName() == 'compaign.create'
                    || Route::currentRouteName() == 'compaign.edit' ? 'active open' : null}} ">
                        <a href="{{route('compaign.create')}}" class="nav-link ">
                            <span class="title">{{ __('Add Compaign')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{Route::currentRouteName() == 'tickets' || Route::currentRouteName() == 'ticket.mega_mula' ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-play"></i>
                    <span class="title">{{ __('Tickets')}}</span>
                    <span class="{{Route::currentRouteName() == 'tickets' || Route::currentRouteName() == 'ticket.mega_mula' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'tickets' ? 'active open' : null}}">
                        <a href="{{route('tickets')}}" class="nav-link ">
                            <span class="title">{{ __('GiveAway Ticket') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'ticket.mega_mula' || Route::currentRouteName() == 'ticket.mega_mula' ? 'active open' : null}} ">
                        <a href="{{route('ticket.mega_mula')}}" class="nav-link ">
                            <span class="title">{{ __('MegaMula Ticket')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{Route::currentRouteName() == 'trivias' || Route::currentRouteName() == 'trivia.create' || Route::currentRouteName() == 'trivia.edit' || Route::currentRouteName() == 'trivia.answers'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-play"></i>
                    <span class="title">{{ __('Trivia')}}</span>
                    <span class="{{Route::currentRouteName() == 'trivias' || Route::currentRouteName() == 'trivia.create' || Route::currentRouteName() == 'trivia.edit' || Route::currentRouteName() == 'trivia.answers' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'trivias' ? 'active open' : null}}">
                        <a href="{{route('trivias')}}" class="nav-link ">
                            <span class="title">{{ __('List Trivia') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'trivia.create' || Route::currentRouteName() == 'trivia.create'
                    || Route::currentRouteName() == 'trivia.edit' ? 'active open' : null}} ">
                        <a href="{{route('trivia.create')}}" class="nav-link ">
                            <span class="title">{{ __('Add Trivia')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{Route::currentRouteName() == 'surveys' || Route::currentRouteName() == 'survey.create' || Route::currentRouteName() == 'survey.edit' || Route::currentRouteName() == 'survey.answers'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-play"></i>
                    <span class="title">{{ __('Survey')}}</span>
                    <span class="{{Route::currentRouteName() == 'surveys' || Route::currentRouteName() == 'survey.create' || Route::currentRouteName() == 'survey.edit' || Route::currentRouteName() == 'survey.answers' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'surveys' ? 'active open' : null}}">
                        <a href="{{route('surveys')}}" class="nav-link ">
                            <span class="title">{{ __('List Survey') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'survey.create' || Route::currentRouteName() == 'survey.create'
                    || Route::currentRouteName() == 'survey.edit' ? 'active open' : null}} ">
                        <a href="{{route('survey.create')}}" class="nav-link ">
                            <span class="title">{{ __('Add Survey')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{Route::currentRouteName() == 'branded_contents' || Route::currentRouteName() == 'branded_content.create' || Route::currentRouteName() == 'branded_content.edit'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-picture-o"></i>
                    <span class="title">{{ __('Branded Content')}}</span>
                    <span class="{{Route::currentRouteName() == 'branded_contents' || Route::currentRouteName() == 'branded_content.create' || Route::currentRouteName() == 'branded_content.edit' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'branded_contents' ? 'active open' : null}}">
                        <a href="{{route('branded_contents')}}" class="nav-link ">
                            <span class="title">{{ __('List Content') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'branded_content.create' || Route::currentRouteName() == 'branded_content.create'
                    || Route::currentRouteName() == 'branded_content.edit' ? 'active open' : null}} ">
                        <a href="{{route('branded_content.create')}}" class="nav-link ">
                            <span class="title">{{ __('Add Content')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{Route::currentRouteName() == 'winner_giveaway_annouce.create' || Route::currentRouteName() == 'winner_megamula_annouce.create'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-picture-o"></i>
                    <span class="title">{{ __('Goto Live')}}</span>
                    <span class="{{Route::currentRouteName() == 'winner_giveaway_annouce.create' || Route::currentRouteName() == 'winner_megamula_annouce.create' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'winner_giveaway_annouce.create' ? 'active open' : null}}">
                        <a href="{{route('winner_giveaway_annouce.create')}}" class="nav-link ">
                            <span class="title">{{ __('Giveaway') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'winner_megamula_annouce.create' ? 'active open' : null}} ">
                        <a href="{{route('winner_megamula_annouce.create')}}" class="nav-link ">
                            <span class="title">{{ __('MegaMula')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{Route::currentRouteName() == 'winners_giveaway' || Route::currentRouteName() == 'winners_megamula'  ? 'active open' : null}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-picture-o"></i>
                    <span class="title">{{ __('Winners')}}</span>
                    <span class="{{Route::currentRouteName() == 'winners_giveaway' ? 'selected' : 'arrow'}}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{Route::currentRouteName() == 'winners_giveaway' ? 'active open' : null}}">
                        <a href="{{route('winners_giveaway')}}" class="nav-link ">
                            <span class="title">{{ __('Giveaway') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() == 'winners_megamula' ? 'active open' : null}} ">
                        <a href="{{route('winners_megamula')}}" class="nav-link ">
                            <span class="title">{{ __('MegaMula')}}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{Route::currentRouteName() == 'reports' ? 'active open' : null}}">
                <a href="{{route('reports')}}" class="nav-link nav-toggle">
                    <i class="fa fa-file"></i>
                    <span class="title">{{ __('Reports') }}</span>
                    <span class="{{Route::currentRouteName() == 'reports' ? 'selected' : null}}"></span>
                </a>
            </li>
       
            <li class="nav-item start {{Route::currentRouteName() == 'vehicles' || Route::currentRouteName() == 'vehicle-profile' ? 'active open' : null}}">
                <a href="{{route('vehicles')}}" class="nav-link nav-toggle">
                    <i class="fa fa-car"></i>
                    <span class="title">{{ __('Vehicles') }}</span>
                    <span class="{{Route::currentRouteName() == 'vehicles' ? 'selected' : null}}"></span>
                </a>
            </li>
            <li class="nav-item start {{Route::currentRouteName() == 'orders' ? 'active open' : null}}">
                <a href="{{route('orders')}}" class="nav-link nav-toggle">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">{{ __('Order') }} </span>
                    <span class="{{Route::currentRouteName() == 'orders' ? 'selected' : null}}"></span>
                    
                </a>
            </li>
           
            <li class="nav-item start {{Route::currentRouteName() == 'support' || Route::currentRouteName() == 'support.detail' ? 'active open' : null}}">
                <a href="{{route('support')}}" class="nav-link nav-toggle">
                    <i class="fa fa-comment"></i>
                    <span class="title">{{ __('Help & Support') }}</span>
                    <span class="{{Route::currentRouteName() == 'support' ? 'selected' : null}}"></span>
                </a>
            </li> --}}
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->