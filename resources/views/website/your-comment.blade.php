@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">
    <section class="exchange-table-wrap pb-100 pt-5">
        <div class="container">
            @if (session('success'))
                <p class="alert alert-success">{{session('success')}}</p>
            @endif
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        
                        <h2>Your Comments</h2>
                        <div align="left"> offers authentic forex &amp;
                            bullion rates free of charge for the benefit of web users. Forex.pk is not a foreign
                            exchange company so if you want to trade in forex please visit Forex brokers directory
                            to contact any forex dealer. <br>
            
                            <br>
            
                            Your can send your <span class="boldtext">comments &amp; suggestions</span> for the
                            improvement of website.
                        </div>
                    </div>
                </div>
    

            </div>

            <div class="row mb-3">
                <div class="col-xl-10 col-lg-10 offset-lg-3">
                    <form action="{{route('SaveComment')}}" method="POST" class="convert-form">
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
                                        Company</label>
                                    <input type="text" required id="company" name="company">

                                </div>
                            </div>
                        
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Address</label>
                                    
                                   <textarea name="address"  id="address" cols="80" rows="8"></textarea>

                                </div>
                            </div>
                        
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Email Address</label>
                                    <input type="email" required id="email" name="email">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Phone</label>
                                    <input type="text" required id="phone" name="phone">

                                </div>
                            </div>
                        
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px;font-weight: bold">
                                        Comments</label>
                                    
                                   <textarea name="comment" required id="comment" cols="80" rows="8"></textarea>

                                </div>
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-lg-2 text-lg-end" style="margin-top: 43px">
                                <button type="submit" class="btn style1" style="float: left;">Send Comment<i
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