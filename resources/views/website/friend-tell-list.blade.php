@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">


    <section class="exchange-table-wrap pb-100 pt-5">
        <div class="container" style="margin-top: 0px">
            <h2 class="pb-3">Tell a Friend List</h2>
            <div class="exchange-table">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                          
                            
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Friend Name</th>
                            <th scope="col">Friend Email</th>
                            <th scope="col">message</th>
                            <th scope="col">Created Date</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $com)
                            <tr>
                               
                                <td>{{ $com->name }}</td>
                                <td>{{ $com->email }}</td>
                                <td>{{ $com->friend_name }}</td>
                                <td>{{ $com->friend_email }}</td>
                                <td>{{ $com->message }}</td>
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