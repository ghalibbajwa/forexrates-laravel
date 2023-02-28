<footer class="footer-wrap">
    <div class="container">
        <div class="row pt-100 pb-75">
            <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <a href="{{url('/')}}" class="footer-logo">
                        <img src="{{url('')}}/website_assets/img/forexrates-logo.png" alt="Image">
                    </a>
                    <p class="comp-desc">
                        FOREXRATES.pk, Pakistan's #1 currency rates portal, provides you up to the minute exchange rates in Pakistan Open Market, Pakistan Inter Bank & International Currency market.
                    </p>
                    {{-- <ul class="social-profile style1 list-style">
                        <li>
                            <a target="_blank" href="https://facebook.com/">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://instagram.com/">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://linkedin.com/">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                    </ul> --}}
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6"></div>

            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Currency Rates</h3>
                    <ul class="footer-menu list-style">
                        <li>
                            <a href="{{route('currency_rates',['AUD','PKR'])}}" target="_blank">
                                Australian Dollar to PKR 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('currency_rates',['CAD','PKR'])}}" target="_blank">
                                Canadian Dollar to PKR 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('currency_rates',['CNY','PKR'])}}" target="_blank">
                                Chinese Yuan to PKR 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('currency_rates',['EUR','PKR'])}}" target="_blank">
                                Euro to PKR 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('currency_rates',['HKD','PKR'])}}" target="_blank">
                                Hong Kong Dollar to PKR 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Currency Rates</h3>
                    <ul class="footer-menu list-style">
                        <li>
                            <a href="{{route('currency_rates',['INR','PKR'])}}" target="_blank">
                                Indian Rupee to PKR 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('currency_rates',['JPY','PKR'])}}" target="_blank">
                                Japanese Yen to PKR 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('currency_rates',['SAR','PKR'])}}" target="_blank">
                                Saudi Riyal to PKR 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('currency_rates',['AED','PKR'])}}" target="_blank">
                                UAE Dirham to PKR 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('currency_rates',['GBP','PKR'])}}" target="_blank">
                                Pound Sterling to PKR 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Quick Links</h3>
                    <ul class="footer-menu list-style">
                        <li>
                            <a href="{{route('home')}}" target="_blank">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('privacypolicy') }}" target="_blank">
                                Privacy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('termUse') }}" target="_blank">
                                Terms of Use
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route('disclaimer') }}" target="_blank">
                                Disclaimer
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}" target="_blank">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
          
        </div>
        <div class="row">
            <h4 style="padding-left:0px;margin-top:20px;color:white;">Disclaimer</h4>
            <p style="color: rgba(255, 255, 255, 0.8)">
            FOREXRATES.pk is neither a currency exchange company nor affiliated with any currency dealer, so it doesn't
            provide forex trading or a money transfer facility. FOREXRATES.pk maintains accuracy by updating currency
            exchange rates received from various authentic sources for the public's interest. However, these are only
            indicative rates as exchange rates change from minute to minute. FOREXRATES.pk also provides Currency Rates,
            Gold Rates to some Pakistan News websites. FOREXRATES.pk is not responsible or liable for any transactions
            made based on these rates.</p>
            <div class="col-md-12">
                <p class="copyright-text"><i class="ri-copyright-line"></i>Copyright 2022. All Rights Reserved
                    By <a href="{{route('home')}}" target="_blank">Forexrates</a></p>
            </div>
        </div>
    </div>
</footer>

