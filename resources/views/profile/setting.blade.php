@extends('layouts.master')
@section('title', __('Profile Setting'))

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
        <span>{{ __('Profile Setting')}}</span>
    </li>
</ul>
@endsection

<!-- BEGIN Products STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-cogs"> </i> {{ __('Profile Setting')}}
                        <button onclick="window.history.back(1)" type="button"
                            class="btn btn-block btn-primary btn-md float-sm-right"
                            >{{ __('Go Back')}}</button>
                    </div>
                    <div class="panel-body">
                        <!-- form start -->
                        <!-- BEGIN FORM-->
                        <!-- form start -->
                        {{-- <button onclick="window.history.back(1)" type="button" class="btn btn-block btn-primary btn-md col-md-2 float-sm-right">Go Back</button> --}}
                        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="patch">
                            <div class="row">
                                <div class="col-md-6" style="margin-top: 17px">
                                    <div class="form-group">
                                        <label>{{ __('Full Name')}} <span class="text-danger">*</span></label>
                                        <input type="text" name="name" parsley-trigger="change" required
                                            placeholder="Full Name..." class="form-control" id="irst_name"
                                            value="{{$user->name}}">
                                    </div>
                                    <span class="text-danger">{{ $errors->first('name') ?? null }}</span>
                                </div>
                                <div class="col-md-6" style="margin-top: 17px">
                                    <div class="form-group">
                                        <label>{{ __('Email')}} <span class="text-danger">*</span></label>
                                        <input type="email" name="email" parsley-trigger="change" required=""
                                            placeholder="Email..." class="form-control" value="{{$user->email}}">
                                    </div>
                                    <span class="text-danger">{{ $errors->first('email') ?? null }}</span>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                    <div class="mt30">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="changePasswordCheckbox" name="change_password"
                                                {{ old('change_password') == 1 ? 'checked' : null }} value="1">
                                            <label class="custom-control-label" for="changePasswordCheckbox">{{ __('Change Password')}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ __('Current Password')}} <span class="text-danger">*</span></label>
                                        <input type="password" name="current_password" placeholder="Password..."
                                            class="form-control" disabled data-parsley-maxlength="22"
                                            data-parsley-minlength="6">
                                    </div>
                                    <span class="text-danger">{{ $errors->first('current_password') ?? null }}</span>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ __('New Password')}} <span class="text-danger">*</span></label>
                                        <input type="password" name="password" placeholder="Password..."
                                            class="form-control" disabled data-parsley-maxlength="22"
                                            data-parsley-minlength="6">
                                    </div>
                                    <span class="text-danger">{{ $errors->first('password') ?? null }}</span>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ __('Confirm Password')}} <span class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation"
                                            placeholder="Confirm Password..." class="form-control" disabled
                                            data-parsley-maxlength="22" data-parsley-minlength="6">
                                    </div>
                                    <span
                                        class="text-danger">{{ $errors->first('password_confirmation') ?? null }}</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary btn-md float-sm-right"
                            >{{ __('Update')}}</button>
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
<script src="{{url('')}}/dash-assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript">
</script>
<script src="{{url('')}}/dash-assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#quickForm').validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    emai: true,
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

        $('#changePasswordCheckbox').click(function () {
            if ($(this).prop('checked')) {
                $('input[name="current_password"]').removeAttr('disabled');
                $('input[name="current_password"]').attr('required', true);
                $('input[name="password"]').removeAttr('disabled');
                $('input[name="password"]').attr('required', true);
                $('input[name="password_confirmation"]').removeAttr('disabled');
                $('input[name="password_confirmation"]').attr('required', true);
            } else {
                $('input[name="current_password"]').removeAttr('required');
                $('input[name="current_password"]').attr('disabled', true);
                $('input[name="password"]').removeAttr('required');
                $('input[name="password"]').attr('disabled', true);
                $('input[name="password_confirmation"]').removeAttr('required');
                $('input[name="password_confirmation"]').attr('disabled', true);
            }
        });

        if ($('#changePasswordCheckbox').prop('checked')) {
            $('input[name="current_password"]').removeAttr('disabled');
            $('input[name="current_password"]').attr('required', true);
            $('input[name="password"]').removeAttr('disabled');
            $('input[name="password"]').attr('required', true);
            $('input[name="password_confirmation"]').removeAttr('disabled');
            $('input[name="password_confirmation"]').attr('required', true);
        } else {
            $('input[name="current_password"]').removeAttr('required');
            $('input[name="current_password"]').attr('disabled', true);
            $('input[name="password"]').removeAttr('required');
            $('input[name="password"]').attr('disabled', true);
            $('input[name="password_confirmation"]').removeAttr('required');
            $('input[name="password_confirmation"]').attr('disabled', true);
        }
    });
</script>
@endsection
@endsection