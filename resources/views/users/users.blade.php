@extends('layouts.master')
@section('title', __('Users'))

@section('top-styles')
<link rel="stylesheet" href="{{url('')}}/dash-assets/plugins/sweetalert2/sweetalert2.min.css">
       
<!-- Plugins css-->
<link href="{{url('')}}/dash-assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{url('')}}/dash-assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/dash-assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

<!-- END PAGE LEVEL PLUGINS -->
<style>
    a.btn.btn-secondary {
        background: #dc3535bf;
        border: 1px solid white;
    }
    h2#swal2-title {
        font-size: 25px;
    }
    div#swal2-content {
        font-size: 17px;
    }
    .swal2-icon.swal2-warning, .swal2-success-ring {
        border-radius: 50% !important;
        font-size: 11px;
    }
    .swal2-popup.swal2-modal.swal2-icon-warning.swal2-show {
        height: 280px;
        width: 36em;
    }
    table.dataTable.no-footer
    {
        border-bottom:inherit !important; 
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
        <span>{{ __('All')}} {{ __('Users')}}</span>
    </li>
</ul>
@endsection

<!-- BEGIN Playgrounds STATS 1-->
<!-- BEGIN Playgrounds STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-users"> </i> {{ __('All')}} {{ __('Users')}}
                    </div>
                    <div class="panel-body">
                        <div class="custom_datatable">
                            <form action="#" id="advanceSearch">
                                <div class="bg-black-transparent1 m-b-15 p15 pb0">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">{{ __('Name')}}</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Name" style=" z-index: 2;" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">{{ __('Phone')}}</label>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone" style=" z-index: 2;" autocomplete="off">
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">{{ __('Filter by HomeTown')}}</label>
                                                <select parsley-trigger="change" data-style="btn-white"
                                                    name="hometown" class="form-control hometown">
                                                    <option selected="" value="">No Filter</option>
                                                    @foreach ($hometowns as $home_town)
                                                        <option value="{{$home_town->id}}">{{$home_town->name}}</option>                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">{{ __('Filter by Status')}}</label>
                                                <select parsley-trigger="change" data-style="btn-white"
                                                    name="status" class="form-control ver-status">
                                                    <option selected="" value="">No Filter</option>
                                                    <option value="1">{{ __('Active')}}</option>
                                                    <option value="0">{{ __('Non Active')}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-8"></div> --}}
                                        <div class="col-md-4" style="margin-top: 23px">
                                            <div class="form-group">
                                                <button id="search"
                                                    class="btn btn-light-theme btn-block waves-effect waves-light">
                                                    <i class="fa fa-search pr-1"></i> {{ __('Search')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                 </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th class="all">{{ __('S.No')}}</th>
                                                <th class="all">{{ __('User Name')}}</th>
                                                <th class="min-phone-l">{{ __('Email')}}</th>
                                                <th class="min-phone-l">{{__('Phone')}}</th>
                                                <th class="min-tablet" width="7%">{{ __('View Profile')}}</th>
                                                <th class="none">{{ __('Registration Date')}}</th>
                                                <th class="all" width="10%">{{ __('Active/Inactive')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection

@section('rightsidebar')
@parent
@endsection

@section('page-scripts')
{{-- SweetAlert2 --}}
<script src="{{url('')}}/dash-assets/plugins/sweetalert2/sweetalert2.min.js" charset="UTF-8"></script>

<script src="{{url('')}}/dash-assets/plugins/switchery/js/switchery.min.js"></script>
<script src="{{url('')}}/dash-assets/plugins/custom/jquery.nicescroll.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('')}}/dash-assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="{{url('')}}/dash-assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('')}}/dash-assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#sample_1').DataTable({
            // retrieve: true,
            destroy: true,
            processing: true,
            serverSide: true,
            ajax: '{{route("user.datatable")}}',
            "columns": [{
                    "data": "id",
                    "defaultContent": ""
                },
                {
                    "data": "username",
                    "defaultContent": ""
                },
                {
                    "data": "email",
                    "defaultContent": "null"
                },
                {
                    "data": "phone",
                    "defaultContent": "null"
                },
                {
                    "data": "profile_pic",
                    "defaultContent": "null"
                },
                // {
                //     "data": "id",
                //     "defaultContent": ""
                // },
                {
                    "data": "created_at",
                    "defaultContent": ""
                },
                {
                    "data": "status",
                    "defaultContent": ""
                },
            ],
            "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,
                },
                {
                    "targets": 0,
                    "render": function (data, type, row, meta) {
                        return meta.row + 1;
                    },
                },
                {
                    "targets": 4,
                    "render": function (data, type, row, meta) {
                        var pic = '';
                        if(data != null)
                        {
                            pic = data;
                        }else{
                            pic = 'user-placeholder.jpeg';
                        }
                        return `<img src='{{url('')}}/profile_pic/` + pic +  `' height='50px' alt='image'/>`;
                    },
                },
             
                // {
                //     "targets": 7,
                //     "render": function (data, type, row, meta) {
                //         var edit = '{{route("user-profile",[app()->getlocale(), ":id"])}}';
                //         edit = edit.replace(':id', row.id);
                //         return `
                //         <a href="` + edit + `" class="text-info p-1" style="padding-right:6px;">
                //             <button class='btn btn-info'>{{ __('View')}}</button>
                //         </a>
                //         `;
                //                 // <span style='font-size:16px;font-weight:bolder;'>View</span>
                //     },
                // },
                // {
                //     "targets": -2,
                //     "render": function (data, type, row, meta) {
                //        return moment(data).format('MMMM Do YYYY, h:mm a');
                //     },
                // },
                {
                    "targets": -1,
                    "render": function (data, type, row, meta) {
                        
                        var checked = row.status == 1 ? 'checked' : null;
                        return `
                        <input class="status" type="checkbox" data-plugin="switchery" data-color="#005CA3" data-size="small" ` + checked + ` value="` + row.id + `">`;
                    },
                },
            ],
            "drawCallback": function (settings) {
                var elems = Array.prototype.slice.call(document.querySelectorAll('.status'));
                if (elems) {
                    elems.forEach(function (html) {
                        var switchery = new Switchery(html, {
                            color: '#36c6d3',
                            secondaryColor: '#dfdfdf',
                            jackColor: '#fff',
                            jackSecondaryColor: null,
                            className: 'switchery',
                            disabled: false,
                            disabledOpacity: 0.5,
                            speed: '0.1s',
                            size: 'small'
                        });

                    });
                }

                $('.status').change(function () {
                    var $this = $(this);
                    var id = $this.val();
                    var status = this.checked;

                    if (status) {
                        status = 1;
                    } else {
                        status = 0;
                    }

                    axios
                        .post('{{route("user.status")}}', {
                            _token: '{{csrf_token()}}',
                            _method: 'patch',
                            id: id,
                            status: status,
                        })
                        .then(function (responsive) {
                            console.log(responsive);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                });
              
            },
            //scrollX:true,
        });
        $('#advanceSearch').submit(function (e) {
            e.preventDefault();
            table.columns(2).search($('input[name="name"]').val());
            table.columns(4).search($('input[name="phone"]').val());
            //table.columns(6).search($('.hometown').val());
            table.columns(7).search($('.ver-status').val());
            table.draw();
        });

        $(".custom_datatable #DataTable_wrapper .row:nth-child(2) .col-sm-12").niceScroll();
    });
</script>
@endsection