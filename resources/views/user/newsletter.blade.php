
@extends('user.layout.default')
@section('content')
    <!--Nav Bar start-->
@include('user.layout.header')
    <!--Nav Bar end-->
    <!--Newsletter page Start-->
    <div class="newletter">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 py-5 px-0">
                    <div class="newsletter-from text-center">
                        <h2>SIGN UP TO A NEWSLETTER!</h2>
                        <p>For exclusive recipes, discount, opportunities and new prodects announcements, plus a few surpirse</p>
                        <form class="mt-4">
                            <div class="newletter-form d-flex justify-content-center aligin-intems-center">
                                <input type="email" class="w-100 form-control" placeholder="Enter your email Address">
                                <button type="submit"> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--NewsLetter page End-->
    <!--footer blcok start-->
    <div class="container-fluid footer">
        <div class="row p-1 p-sm-5 p-lg-2 p-xl-5">
            <div class="col-lg-4 col-md-6 col-sm-12 py-3 py-md-5 d-flex align-items-center justify-content-center">
                <a href="index.php" class="footer-logo ">
                    <img src="{{asset('/img/logo.png')}}" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 py-3 py-md-5 px-xl-5 px-1">
                <div class="get-touch">
                    <h3> Get In Touch</h3>
                </div>
                <div class="footer-icons my-3">
                    <a href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-messenger"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="#">
                    <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="add-newletter mt-4">
                    <p>Get the latest crypto news, updates, and reports by subscribing to our free newsletter.</p>
                    <form>
                        <input type="email" placeholder="Enter Your Email" class="form-control" />
                        <input type="submit" class="footer-submit mt-3" />
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 py-3 py-md-5">
                <div class="row">
                    <div class="col-6">
                        <div class="footer-links px-4 px-lg-2 px-xl-4">
                            <div>
                                <h4 class="pb-2 "> Links</h4>
                                <a href="#">
                                    Home
                                </a>
                                <br/>
                                <br/>
                                <a href="#">
                                    About Us
                                </a>
                                <br/>
                                <br/>
                                <a href="#">
                                    contact Us
                                </a>
                                <br/>
                                <br/>
                                <a href="#">
                                    Upcoming
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-links px-4 px-lg-2 px-xl-4">
                                <div>
                                    <h4 class="pb-2"> Supports</h4>
                                    <a href="#">
                                        FQA
                                    </a>
                                    <br/>
                                    <br/>
                                    <a href="#">
                                        Terms and Conditions
                                    </a>
                                    <br/>
                                    <br/>
                                    <a href="#">
                                        Privacy Policy
                                    </a>
                                    <br/>
                                    <br/>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="col-lg-4 col-md-6 col-sm-6 py-3 py-md-5">

            </div> -->

        </div>
    </div>
@endsection
