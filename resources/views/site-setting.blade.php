@extends('layouts.master')
@section('title', __('Site Setting'))

@section('top-styles')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{url('')}}/dash-assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet"
    type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
    rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet"
    type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />

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
    .note-editor.note-frame .note-editing-area .note-editable, .note-editor.note-airframe .note-editing-area .note-editable
     {
       min-height: 200px !important;
     }

     .form-group label
     {
        margin: 0 0 10px;
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
        <span>{{ __('Site Setting')}}</span>
    </li>
</ul>
@endsection

<!-- BEGIN Category STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                @if (session('success'))
                    <p class="alert alert-success">{{session('success')}}</p>
                @endif
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-map-marker"> </i> {{ __('Site Setting')}}
                        <button onclick="window.history.back(1)" type="button"
                            class="btn btn-block btn-primary btn-md float-sm-right" >{{ __('Go Back')}}</button>
                    </div>
                    <div class="panel-body">
                        <!-- form start -->
                        <!-- BEGIN FORM-->
                        <!-- form start -->
                        <form action="{{route('site.settings.store')}}"
                            role="form" method="POST" id="quickForm" enctype="multipart/form-data">
                            @csrf
                           <div class="row">
                              
                                {{--
                                <div class="intro">
                                    
                                <div class="col-md-6">
                                    <video style="    height: 200px;  width: 100%;" controls>
                                        <source src="{{url('').'/compaign_videos/'.$setting->where('key','intro-video')->first()->value}}" type="video/mp4">
                                    </video>
                                    
                                </div>
                            
                                <div class="col-md-6">
                                    <label for="heading">{{ __('Upload Intro Video')}} <span class="text-danger">*</span></label>
                                    <input type='file' name="intro-video"/>
                                </div> 
                                </div>
                                --}}

                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Partner Credit Limit')}} <span class="text-danger">*</span></label>
                                        <input type="number" name="partner_credit_limit" parsley-trigger="change" required placeholder="Partner Credit Limit..."
                                            class="form-control" id="partner_credit_limit"  value="{{$setting->where('key','partner_credit_limit')->first()->value ?? old('partner_credit_limit')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Each User Credit Limit')}} <span class="text-danger">*</span></label>
                                        <input type="number" name="each_user_withdraw_credit_limit" parsley-trigger="change" required placeholder="Enter Each User Credit Limit..."
                                            class="form-control" id="each_user_withdraw_credit_limit"  value="{{$setting->where('key','each_user_withdraw_credit_limit')->first()->value ?? old('each_user_withdraw_credit_limit')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Keyword Search Open Website Reward Point')}} <span class="text-danger">*</span></label>
                                        <input type="number" name="keyword_search_reward" parsley-trigger="change" required placeholder="Enter Each User Credit Limit..."
                                            class="form-control" id="keyword_search_reward"  value="{{$setting->where('key','keyword_search_reward')->first()->value ?? old('keyword_search_reward')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Reward Point After Signing Up')}} <span class="text-danger">*</span></label>
                                        <input type="number" name="reward_after_signup" parsley-trigger="change" required placeholder="Enter Each User Credit Limit..."
                                            class="form-control" id="reward_after_signup"  value="{{$setting->where('key','reward_after_signup')->first()->value ?? old('reward_after_signup')}}">
                                    </div>
                                </div>
                          
                            
                           
                           

                               
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary button-custom">{{ __('Save')}}</button>
                            </div>
                        </form>
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
<script src="{{url('')}}/dash-assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>

{{-- <script src="{{url('')}}/dash-assets/pages/scripts/components-editors.min.js" type="text/javascript"></script> --}}
<!-- END PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#quickForm').validate({
            rules: {
                max_allowed_entries_giveaway: {
                    required: true,
                },
                max_allowed_entries_giveaway_single_person: {
                    required: true,
                },
                max_allowed_entries_megamula: {
                    required: true,
                },
                max_allowed_entries_megamula_single_person: {
                    required: true,
                },
                points_referral_code: {
                    required: true,
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');

            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
        // $('#compose-textarea').summernote();
    });
</script>
@endsection
@endsection