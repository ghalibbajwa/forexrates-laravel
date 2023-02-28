@extends('layouts.master')
@section('title', __('Dashboard'))

@section('top-styles')
<style>
    .desc {
        font-weight: bolder !important;
    }
</style>
@endsection
@section('content')
@section('breadcrumb')
   <ul class="page-breadcrumb">
        <li>
            <a href="{{route('home')}}">{{ __('ADMIN') }}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
        <span>{{ __('Dashboard') }}</span>
        </li>
    </ul>
@endsection
        <!-- BEGIN DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="{{route('users')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{$total_users->count() ?? 0}}">{{$total_users->count() ?? 0}}</span>
                        </div>
                        <div class="desc">{{ __('Total') }} {{ __('Users') }}  </div>
                    </div>
                </a>
            </div>
            {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="{{route('tickets')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{$total_tickets ?? 0}}">{{$total_tickets ?? 0}}</span>
                        </div>
                        <div class="desc"> {{ __('Total') }} {{ __('Tickets') }}</div>
                    </div>
                </a>
            </div>--}}
            {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="{{route('compaigns')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{$total_compaigns ?? 0}}">{{$total_compaigns ?? 0}}</span>
                        </div>
                        <div class="desc"> {{ __('Total') }} {{ __('Compaigns') }} </div>
                    </div>
                </a>
            </div>--}}
            {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="{{route('winners_giveaway')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{$total_winners ?? 0}}">{{$total_winners ?? 0}}</span>
                        </div>
                        <div class="desc"> {{ __('Total') }} {{ __('Winners') }}  </div>
                    </div>
                </a>
            </div>--}}
            {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="{{route('tournaments')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{$total_tour ?? 0}}">{{$total_tour ?? 0}}</span>
                        </div>
                        <div class="desc"> {{ __('Total') }} {{ __('Tournament') }} </div>
                    </div>
                </a>
            </div> --}}
            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="{{route('reports')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{$reports ?? 0}}">{{$reports ?? 0}}</span>
                        </div>
                        <div class="desc"> {{ __('Total') }} {{ __('Reports') }} </div>
                    </div>
                </a>
            </div>--}}
            {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="{{route('trainer_booking')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{$trainer_booked ?? 0}}">{{$trainer_booked ?? 0}}</span>
                        </div>
                        <div class="desc"> {{ __('Total') }} {{ __('Booked') }} {{ __('Trainers') }} </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="{{route('transactions')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{$total_transaction ?? 0}}">
                                {{$total_transaction ?? 0}} 
                            </span>
                             AED
                        </div>
                        <div class="desc"> {{ __('Total') }} {{ __('Transaction') }} {{ __('Amount') }} </div>
                    </div>
                </a>
            </div> --}}
            {{--<hr>--}}
            
            <div class="col-lg-12 col-xs-12 col-sm-12" style="margin-top: 50px">
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption caption-md">
                            <i class="icon-bar-chart font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">{{ __('Users') }} {{ __('Activity') }}</span>
                            <span class="caption-helper">{{ __('weekly stats') }}...</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row number-stats margin-bottom-30">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="stat-left">
                                    <div class="stat-chart">
                                        <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                        <div id="sparkline_bar"></div>
                                    </div>
                                    <div class="stat-number">
                                        <div class="title"> {{ __('Total') }} </div>
                                        <div class="number"> {{$total_users->count() ?? 0}} </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="stat-right">
                                    <div class="stat-chart">
                                        <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                        <div id="sparkline_bar2"></div>
                                    </div>
                                    <div class="stat-number">
                                        <div class="title"> {{ __('New') }} </div>
                                        <div class="number"> {{$new_users ?? 0}} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-scrollable table-scrollable-borderless">
                            <table class="table table-hover table-light">
                                <thead>
                                    <tr class="uppercase">
                                        <th colspan="2"> {{ __('User') }} </th>
                                        <th> {{ __('Phone') }} </th>
                                        <th> {{ __('DOB') }} </th>
                                    </tr>
                                </thead>
                                {{-- {{dd($users)}} --}}
                                @foreach ($users as $user)
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic rounded" src="{{!empty($user->profile_pic) ?  $user->profile_pic : url('').'/uploads/'.'user-placeholder.jpeg'}}"> </td>
                                    <td>
                                        <a href="{{route('user-profile',[$user->id])}}" class="primary-link">{{$user->first_name . ' ' .$user->last_name}}</a>
                                    </td>
                                    <td>
                                        <span class="bold theme-font">{{$user->phone}}</span>
                                    </td>
                                    <td>
                                        <span class="bold theme-font">{{$user->dob}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="12,5">0</span>M$ </div>
                        <div class="desc"> Total Profit </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="549">0</span>
                        </div>
                        <div class="desc"> New Orders </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number"> +
                            <span data-counter="counterup" data-value="89"></span>% </div>
                        <div class="desc"> Brand Popularity </div>
                    </div>
                </a>
            </div> --}}
        </div>
        <div class="clearfix"></div>

@section('custom-script')

@endsection

<!-- END QUICK SIDEBAR -->
@endsection