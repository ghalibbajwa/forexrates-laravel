@extends('layouts.master')
@section('title', __('View Profile'))

@section('top-styles')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{url('')}}/dash-assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet"
    type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
    rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet"
    type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet"
    type="text/css" />
 <!-- BEGIN PAGE LEVEL PLUGINS -->
 <link href="{{url('')}}/dash-assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
 <link href="{{url('')}}/dash-assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
 <link href="{{url('')}}/dash-assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
 <link href="{{url('')}}/dash-assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
 <link href="{{url('')}}/dash-assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
 <link href="{{url('')}}/dash-assets/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />

 <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->

<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet"
    type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet"
    type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet"
    type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
<style>
    .images {
        height: 150px;
        border: 1px solid #8080807d;
        margin: 11px;
    }

    span.fa.fa-close {
        float: right;
        color: #f05050d6;
        font-size: 20px;
        position: relative;
        bottom: 0px;
        left: 0px;
    }

</style>
@endsection
@section('content')
@section('breadcrumb')
<ul class="page-breadcrumb">
    <li>
        <a href="{{route('home')}}">{{ __('ADMIN')}}</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{route('users')}}">{{ __('User')}}</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>{{ __('View Profile')}}</span>
    </li>
</ul>
@endsection
{{-- {{dd($user)}} --}}
<!-- BEGIN Products STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-user"> </i> {{ __('View Profile')}}
                        <button onclick="window.history.back(1)" type="button"
                            class="btn btn-block btn-primary btn-md float-sm-right">{{ __('Go Back')}}</button>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-2">
                            <ul class="list-unstyled profile-nav">
                                <li>
                                <img src="{{url('').'/profile_pic/'}}{{!empty($user->profile_pic) ? $user->profile_pic : 'user-placeholder.jpeg'}}" class="img-responsive pic-bordered" style="height: 190px;
                                width: 200px;"/>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-8 profile-info">
                                    <h1 class="font-green sbold uppercase">{{$user->full_name ?? "null"}}</h1>
                                    <ul class="list-inline">
                                        <li style="margin-bottom: 15px">
                                            <i class="fa fa-map-marker"></i>{{ __('Address')}}: {{$user->address ?? null}}
                                        </li><br>
                                        <li style="margin-bottom: 15px">
                                            <i class="fa fa-phone"></i>{{ __('Phone')}}: {{$user->phone ?? null}}
                                        </li><br>   
                                        <li style="margin-bottom: 15px">
                                            <i class="fa fa-user"></i>{{ __('Username')}}: <span>{{$user->username ?? null}}</span> 
                                        </li>
                                        <br>
                                        <li style="margin-bottom: 15px">
                                            <i class="fa fa-calendar"></i>{{ __('Registration Date')}}: {{$user->created_at->format('d M Y H:m a')}} </li>
                                        
                                        <br>
                                        <li style="margin-bottom: 15px">
                                            <i class="fa fa-toggle-on"></i>{{ __('Status')}}: <span>{{ __('Active')}} <i class="fa fa-{{$user->status == 1 ? 'check' : 'close'}}"></i> </span>
                                        <br>
                                    </ul>
                                </div>
                                
                            </div>
                            {{-- <i class="fa fa-star"></i>Average Rating:   --}}
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"> 
                                        <div class="area">
                                            <h4 style="font-weight: bolder">{{ __('Total Vehicles')}}: {{$user->vehicles->count() ?? 0}}</h4>
                                        </div>
                                    </div>
                                    <div class="row col-md-12" style="padding-right:0px;">
                                        <div class="col-md-12" style="padding-right:0px;">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>{{ __('S.No')}}</th>
                                                        <th>{{ __('Car Make/Model/Year')}}</th>
                                                        <th>{{ __('Image')}}</th>
                                                        <th>{{ __('Address')}}</th>
                                                        <th>{{ __('Created At')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($user->vehicles->count() > 0)
                                                       @php
                                                       $i =1;
                                                       @endphp
                                                        @foreach ($vehicles as $vehicle)
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td> {{$vehicle->car_make.' '.$vehicle->car_model.' '.$vehicle->car_year }}</td>
                                                                <td> <img src="{{url('').'/vehicle/'.$vehicle->image}}" height='50px'/></td>
                                                                <td> {{$vehicle->address}}</td>
                                                                <td> {{$vehicle->created_at->format('d M Y')}}</td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan="7" class="text-center" style="font-size: 20px;color:gray;">0 data available</td>
                                                    </tr>
                                                    @endif                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            

                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="area">
                                            <h4 style="font-weight: bolder">{{ __('Total Wiping')}}:
                                                {{$user->wiping->count() ?? 0}}</h4>
                                        </div>
                                    </div>
                                    <div class="row col-md-12" style="padding-right:0px;">
                                        <div class="col-md-12" style="padding-right:0px;">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>{{ __('S.No')}}</th>
                                                        <th>{{ __('Vehicle Make/Model/Year')}}</th>
                                                        <th>{{ __('Date')}}</th>
                                                        <th>{{ __('Time')}}</th>
                                                        <th>{{ __('Wiping Rate')}}</th>
                                                        <th>{{ __('Rating')}}</th>
                                                        <th>{{ __('Payment Status')}}</th>
                                                        <th>{{ __('Wiping Status')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($user->wiping->count() > 0)
                                                    @php
                                                    $i =1;
                                                    @endphp
                                                    @foreach ($wipings as $wiping)
                                                    <tr>
                                                        <td>{{$i++}}</td>
                                                        <td> {{$wiping->vehicle->car_make.' '.$wiping->vehicle->car_model.' '.$wiping->vehicle->car_year }}
                                                        </td>
                                                        <td> {{\Carbon\Carbon::parse($wiping->date)->format('d M Y')}}</td>
                                                        <td> {{\Carbon\Carbon::parse($wiping->time)->format('h a')}}</td>
                                                        <td> {{'$ '.$wiping->rate}}</td>
                                                        <td> {{$wiping->rating}}</td>
                                                        <td> {{$wiping->payment_status}}</td>
                                                        <td> {{$wiping->status}}</td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan="7" class="text-center"
                                                            style="font-size: 20px;color:gray;">0 data available</td>
                                                    </tr>
                                                    @endif </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>


                            </div>
                        </div>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
<!-- END Page -->
@section('page-scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- jquery-validation -->
<script src="{{url('')}}/dash-assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{url('')}}/dash-assets/plugins/jquery-validation/additional-methods.min.js"></script>

<script src="{{url('')}}/dash-assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/global/plugins/jquery-validation/js/additional-methods.min.js"
    type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
    type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>

<script src="{{url('')}}/dash-assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript">
</script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('custom-script')
<script type="text/javascript">
</script>
@endsection
@endsection
