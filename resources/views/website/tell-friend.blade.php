@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    <section class="exchange-table-wrap pb-100">
        <div class="container">
            @if (session('success'))
                <p class="alert alert-success">{{session('success')}}</p>
            @endif
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div style="margin-top: 60px" class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2>Tell a Friend</h2>
                        <div align="left">
                            Tell your friends about FOREX.pk, the finest forex portal and the ultimate resource of Internationl Currency Exchange Rates, Pakistan Open Market and Inter Bank rates. Historical Forex Charts, Universal Currency Converter and much more. 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-10 col-lg-10 offset-lg-3">
                    <form action="{{route('SaveTellFriend')}}" method="POST" class="convert-form">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Your Name</label>
                                    <input type="text" required id="name" name="name">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Your Email</label>
                                    <input type="text" required id="email" name="email">

                                </div>
                            </div>
                        
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Friend's Name</label>
                                    <input type="text" required id="friend_name" name="friend_name">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Friend's Email</label>
                                    <input type="text" required id="friend_email" name="friend_email">

                                </div>
                            </div>
                        
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Optional Message</label>
                                    
                                <textarea name="message" id="message" cols="80" rows="8"></textarea>

                                </div>
                            </div>
                        
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-lg-2 text-lg-end" style="margin-top: 43px">
                                <button type="submit" class="btn style1" style="float: left;">Send<i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>




                    </form>
                </div>
            </div>
            </div>
    </section>






</div>


@endsection