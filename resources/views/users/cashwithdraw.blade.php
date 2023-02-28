@extends('layouts.master')
@section('title', __('CashWithdraw Request'))

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
    
element.style {
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
        <span>{{ __('All')}} {{ __('CashWithdraw Requests')}}</span>
    </li>
</ul>
@endsection

<!-- BEGIN Playgrounds STATS 1-->
<!-- BEGIN Playgrounds STATS 1-->
<div class="row">
    <div >
        <!-- jquery validation -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-users"> </i> {{ __('CashWithdraw Requests')}}
                    </div>
                    <div class="panel-body">
                        <div class="custom_datatable">
                            
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                 </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th class="all">{{ __('S.No')}}</th>
                                                <th class="all">{{ __('Payment_id')}}</th>
                                                <th class="all">{{ __('Amount')}}</th>
                                                <th class="all">{{ __('User name')}}</th>
                                                <th class="all" >{{ __('status')}}</th>
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

 
</div>
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
            ajax: '{{route("Cashwithdraws.datatable")}}',
            "columns": [{
                    "data": "id",
                    "defaultContent": ""
                },
                {
                    "data": "payment_id",
                    "defaultContent": "null"
                },
                {
                    "data": "amount",
                    "defaultContent": "null"
                },
                {
                    "data": "user_id",
                    "defaultContent": ""
                },
                {
                    "data": "status",
                    "defaultContent": ""
                },
                // {
                //     "data": "created_at",
                //     "defaultContent": ""
                // },
                // {
                //     "data": "status",
                //     "defaultContent": ""
                // },
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
                    "targets": 3,
                    "render": function (data, type, row, meta) {
                        return row.user.username;
                    },
                },
                {
                    "targets": 4,
                    "render": function (data, type, row, meta) 
                    {
                        if (data==0) {
                            var success = '{{route("Cashwithdraws.status",[":id",":st"])}}';
                            success = success.replace(':id', row.id);
                            success = success.replace(':st', 1);

                            var reject='{{route("Cashwithdraws.status",[":id",":st"])}}';
                            reject = reject.replace(':id', row.id);
                            reject = reject.replace(':st', 2);
                            return `<div class="btn-group" role="group" aria-label="...">
                                    <a href="`+success+`" class="btn btn-success btn-sm">Complete</a>
                                    <a href="`+reject+`" class="btn btn-danger btn-sm">Reject</a>
                                    </div>`;
                        }
                        if (data==1) {
                            
                            return '<span class="badge badge-success" style="background-color: green;">Primary</span>';
                        }
                        if (data==2) {
                            return '<span class="badge badge-danger">Reject</span>';
                        }
                        
                        
                    },
                },
               
               
            ],
            "drawCallback": function (settings) {
               
            },
            //scrollX:true,
        });
        // $('#advanceSearch').submit(function (e) {
        //     e.preventDefault();
        //     table.columns(2).search($('input[name="name"]').val());
        //     table.columns(4).search($('input[name="phone"]').val());
        //     //table.columns(6).search($('.hometown').val());
        //     table.columns(7).search($('.ver-status').val());
        //     table.draw();
        // });

        // $(".custom_datatable #DataTable_wrapper .row:nth-child(2) .col-sm-12").niceScroll();
    });
</script>
@endsection