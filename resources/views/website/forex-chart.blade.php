@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    {{-- <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Forex Chart</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Forex Chart</li>
                </ul>
            </div>
        </div>
    </div> --}}




    <section class="exchange-table-wrap pb-100 pt-5">
        <div class="container" style="margin-top: 0px">

            <div class="row mb-3">
                <div class="col-xl-12 col-lg-12">
                    <form action="#" class="convert-form">

                        <div class="row">
                            <div class="col-md-12 mb-40">
                                <p>We provide forex charts that help you to predict the direction a rate may change. Instead of trying to "see the future," a forex forecast evaluates the past. That is to say that the analyst responsible for attempting to predict future currency moves analyzes what happened to an exchange rate in previous days.</p>
                            </div>
                            <div class="col-lg-3">
                                <h6> Look in</h6>
                                <label for="currency"
                                    style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                    Currency type
                                </label>
                                    <select name="type" id="type" >

                                        <option value="INTER">Pakistan Inter Bank Rates</option>
                                        <option value="OPEN">Pakistan Open Market Rates</option>
                                        <option value="INTL">Intlernational Forex Rates</option>
    
                                    </select>
                              
                            </div>
                            <div class="col-lg-9">
                                <h6> Period</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        
                                        <div class="form-group">
                                            <label for="currency"
                                                style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                                from Date</label>
                                            <input type="date" id="currency" name="currency">
        
                                        </div>
        
                                    </div>
                                    <div class="col-lg-6">
                                        
                                        <div class="form-group">
                                            <label for="currency"
                                                style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                                to Date</label>
                                            <input type="date" id="currency" name="currency">
        
                                        </div>
                                    </div>
                                   
                                   </div>
                            </div>
                           
                          

                        </div>
                       
                        <div class="row mt-3">

                            <h6> Currency </h6>
                             <div class="col-lg-3">
                                 <label for="currency"
                                     style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                     Base Currency 
                                 </label>
                                 <select name="country_from" id="country_from">
                                    <option value="1">USD - US Dollar</option>
                                    <option value="2">EUR - Euro</option>
                                    <option value="3">CAD - Canadian Dollar</option>
                                 </select>
                               
                             </div>
                             <div class="col-lg-3">
                                <label for="currency"
                                    style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                    Required Currency 
                                </label>
                                <select name="country_from" id="country_from">
                                    <option value="1">USD - US Dollar</option>
                                    <option value="2">EUR - Euro</option>
                                    <option value="3">CAD - Canadian Dollar</option>
                                 </select>
                              
                              </div>

                              <div class="col-lg-3">
                                <label for="currency"
                                    style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                    Base Currency 2
                                </label>
                                <select name="country_from" id="country_from">
                                    <option value="1">USD - US Dollar</option>
                                    <option value="2">EUR - Euro</option>
                                    <option value="3">CAD - Canadian Dollar</option>
                                 </select>
                              
                              </div>
                              <div class="col-lg-3">
                                <label for="currency"
                                    style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                    Required Currency 2
                                </label>
                                <select name="country_from" id="country_from">
                                    <option value="1">USD - US Dollar</option>
                                    <option value="2">EUR - Euro</option>
                                    <option value="3">CAD - Canadian Dollar</option>
                                 </select>
                              
                              </div>
                             
                            
                            
 
                         </div>

                         <div class="row">
                             <div class="col-lg-2 text-lg-end" style="margin-top: 43px">
                                 <button type="submit" class="btn style1" style="float: left;">Show<i
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