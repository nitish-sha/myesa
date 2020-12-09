   @yield('content')
   
   <footer>
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-lg-5">
                        <h6 class="h6">Already <b>Convinced?</b></h6>
                        <div class="select_area">
                            <p>I'm looking for </p>
                            <select>
                                <option>ESA Travel Letter</option>
                                <option>ESA Housing Letter</option>
                                <option>ESA 2-IN-1 Letter</option>
                                <option>ESA Complete Package</option>
                            </select>
                            <button onclick="window.location.href='https://myesadoc.com/register?token=88905b1d0060cabddf10ea1be9eea08d'"  class='btn'>Get Now</button>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-left mt-5">
                    <div class="Qlinks d-xl-flex d-lg-flex align-items-center">
                        <div class="col-lg-3">
                            <img src="{{asset('public/forntend/img/footrlogo.png')}}" class="" title="footerLogo">
                            <p>
                                My ESA doctor is a service of Steady Care Medical. 
                                Our physicians and mental health professionals issue
                                emotional support letters for those in need, based on
                                our professional medical opinion.
                            </p>
                            <h6 class="copy">&COPY; 2017 - 2020 | All Rights Reserved</h6>
                            <ul class="social-network">
                                <li>
                                    <a href="#">
                                        <img class="lazyloaded" alt="facebook" width="20" height="20" src="{{asset('/public/forntend/img/facebook.svg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="lazyloaded" alt="twitter" width="20" height="20" src="{{asset('/public/forntend/img/twitter.svg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="lazyloaded" alt="linkedin" width="23" height="23" src="{{asset('/public/forntend/img/linkedin.svg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-instagram" name="instagram">
                                        <img class="lazyloaded" alt="instagram" width="20" height="20" src="{{asset('/public/forntend/img/instagram.svg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-youtube" name="youtube">
                                        <img class="lazyloaded" alt="youtube" width="20" height="20" src="{{asset('/public/forntend/img/youtube.svg')}}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <h6>Ouick Links</h6>
                                <ul>
                                    <li><a href="">How it Work</a></li>
                                    <li><a href="">How to Get an Emotional Support Animal</a></li>
                                    <li><a href="">Sitemap</a></li>
                                    <li><a href="">Benefits</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <h6>About</h6>
                                <ul>
                                    <li><a href="">Who we are</a></li>
                                    <li><a href="">FAQs</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <h6>Our Details</h6>
                                <ul>
                                    <li><a href="">2001 East 1st St Ste 102 Santa Ana, CA 92705</a></li>
                                    <li><a href="">8:00 AM to 10:00 PM PST</a></li>
                                    <li><a href="">11:00 AM to 1:00 AM EST</a></li>
                                    <li><a href="tel:8663605652">(866) 360-5652</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{asset('/public/forntend/js/jquery.js')}}" type="text/javascript"></script>
        <script src="{{asset('/public/forntend/js/bs.js')}}" type="text/javascript"></script>
        <script src="{{asset('/public/forntend/js/lazy.js')}}" type="text/javascript"></script>
        
    </body>
</html>