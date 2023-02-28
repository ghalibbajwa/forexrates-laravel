@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">


    <section class="exchange-table-wrap pb-100 pt-5">
        <div class="container" style="margin-top: 0px">
            <h2 class="pb-3">Comments List</h2>
            <div class="exchange-table">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                          
                            <th scope="col" style="width: 10%">SR.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Comapny</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Created Date</th>

                            
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $com)
                            <tr>
                                <td>1</td>
                                <td>{{ $com->name }}</td>
                                <td>{{ $com->email }}</td>
                                <td>{{ $com->company }}</td>
                                <td>{{ $com->address }}</td>
                                <td>{{ $com->phone }}</td>
                                <td>{{ $com->comment }}</td>
                                <td>{{ $com->created_at->format('d/m/Y') }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>




</div>


@endsection