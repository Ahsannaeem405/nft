@extends('user.layout.default')
@section('content')


    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!--Nav Bar start-->

    @include('user.layout.header')

    <!--Home page silder end-->
    <!--top collection start-->

    <style>
        .sharelink:hover {

            color: #0056b3;
            text-decoration: none;
        }

        @media only screen and (max-width: 768px) and (min-width: 300px) {


            .share {
                display: none;
            }

            .new {
                display: none;
            }

        }

    </style>
    @dd($data)
    <div class="container my-5">
        <div class="row">
            <div class="col-12" style="    padding: unset;">
                <div class="" style="border-radius: 20px;padding: 20px;background-color: white;">

                    <div class="block-body">
                        <div class="row mb-3">
                            <div class="col-xl-7 col-lg-7 col-12 p-0">
                                <div class="mt-4 mx-2" style="    padding: 10px;">
                                    <div class="row">
                                        <div class="col-2" style="text-align: center; padding: unset;">
                                            <img style="       width: 100%; border-radius: 50%;object-fit: contain;object-position: center center;"
                                                src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        </div>
                                        <div class="col-lg-8 col-xl-8 col-md-8  col-10" style=" ">
                                            <span
                                                style="display: block;font-weight: 700;font-size: 24px;line-height: 36px;">NFT
                                            </span>
                                            <div class="col-12" style="padding: unset;    margin-top: 10px;">
                                                <div class="row">
                                                    <div class="col-md-2 col-3" style="  ">
                                                        <div
                                                            style="border-radius: 6px;background: #f2f2f2;    width: 52px; ">

                                                            <p
                                                                style="      font-size: 12px;  text-align: center;padding: 3px;color: #535572;">
                                                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="collection-info_icon__3bWQz">
                                                                    <path
                                                                        d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                                        fill="#8A8A8A"></path>
                                                                </svg>

                                                                ETH
                                                            </p>

                                                        </div>

                                                    </div>
                                                    <div class="col-4">
                                                        <div style="border-radius: 6px;background: #f2f2f2;     ">

                                                            <p
                                                                style="      font-size: 12px;  text-align: center;padding: 3px;color: #535572;">

                                                                0xcf514F
                                                                &nbsp;&nbsp;
                                                                <i class="fa fa-clone" aria-hidden="true"></i>

                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class="col-4 " style="padding-left: unset;">
                                                        <div style="    border-radius: 4px;background-color: #5a66f9;">

                                                            <p
                                                                style="   color: white;    font-size: 14px;  text-align: center;padding: 5px;">

                                                                <i class="fas fa-cube"></i>
                                                                8,888 NFTs


                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class="col-12" style="    margin-top: -11px;">
                                                        <span
                                                            style="    border-radius: 6px;font-size: 14px;padding: 3px 10px; color: #269958;   background: #f9f9f9;">Avatar
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-2 share" style="text-align: center">
                                            <a class="sharelink" href="">


                                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="collection-info_titleButtonIcon__C3_aX">
                                                    <path
                                                        d="M17.733 15.754a3.739 3.739 0 00-2.95 1.437L7.742 13.35a3.739 3.739 0 00.108-2.372L14.774 6.8a3.738 3.738 0 002.96 1.454c2.07 0 3.749-1.684 3.749-3.752a3.749 3.749 0 10-7.395.868L7.105 9.582a3.747 3.747 0 00-6.61 2.42 3.752 3.752 0 003.746 3.752c.98 0 1.872-.377 2.54-.993l7.285 3.974a3.752 3.752 0 003.667 4.521c2.07 0 3.75-1.684 3.75-3.753 0-2.071-1.68-3.749-3.75-3.749zm0-13.502a2.251 2.251 0 010 4.5 2.25 2.25 0 010-4.5zm-15.739 9.75a2.25 2.25 0 012.247-2.249 2.251 2.251 0 010 4.501 2.253 2.253 0 01-2.247-2.252zm15.74 9.753a2.25 2.25 0 010-4.5 2.251 2.251 0 010 4.5z"
                                                        fill="#7C7D8B"></path>
                                                </svg>
                                                <br>
                                                <p
                                                    style="   ont-weight: bold;  font-size: 14px;   margin-top: -4px; color:#535572">
                                                    Share</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12" style="    margin-top: 23px;">
                                            <p>Sacred Skulls is a collection of 8,888 randomly generated Skull NFTs. Our
                                                collection of Skulls are hand drawn by an incredibly talented, female
                                                artist, &nbsp;&nbsp; <a data-toggle="modal" data-target="#exampleModal" style="    color: blue;text-decoration: none">...  [View All]</a> </p>
                                        </div>

                                        <div class="col-12" style="    margin-top: 23px;    text-align: end;">
                                            <div class="col-6 offset-6">
                                                <div class="col-12">

                                                    <span
                                                        style="background: #eeeffe;border-radius: 8px;color: #5a66f9;padding: 8px 16px;">Buy
                                                        Now </span>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-12 p-0">
                                <div class="mt-4 mx-2" style="padding:10px">

                                </div>
                                <div class="col-12" style="margin-bottom: 12px;">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12"
                                            style="padding-left:unset;    margin-bottom: 10px;">

                                            <div style="  padding: 15px; background: #f9f9f9;border-radius: 12px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <p
                                                            style="font-family: Poppins; color:#535572;  margin-bottom: 3px;  font-size: 15px;">
                                                            Holders
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="data-box-small_infoIcon__yr6OS">
                                                                <path
                                                                    d="M6 0a6 6 0 100 12A6 6 0 006 0zm0 2.458a.86.86 0 110 1.718.86.86 0 010-1.718zm1.288 7.085H4.71v-.428h.429V5.25h-.43v-.43h2.148v4.295h.429v.428z"
                                                                    fill="#BDBDBD"></path>
                                                            </svg>


                                                        </p>

                                                        <h5 style="    margin-bottom: 3px;">$920,042.69</h5>
                                                        <span style="color: #5cc489;    font-weight: 700;">+75421%</span>
                                                    </div>
                                                    <div class="col-4" style="  ">
                                                        <div
                                                            style="border-radius: 6px;background: #f2f2f2;    width: 52px; ">

                                                            <p
                                                                style="      font-size: 13px;  text-align: center;padding: 3px;color: #5a66f9;">
                                                                #379

                                                            </p>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12"
                                            style="padding-left:unset;    margin-bottom: 10px;">

                                            <div style="  padding: 15px; background: #f9f9f9;border-radius: 12px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <p
                                                            style="font-family: Poppins; color:#535572;  margin-bottom: 3px;  font-size: 15px;">
                                                           Volum
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="data-box-small_infoIcon__yr6OS">
                                                                <path
                                                                    d="M6 0a6 6 0 100 12A6 6 0 006 0zm0 2.458a.86.86 0 110 1.718.86.86 0 010-1.718zm1.288 7.085H4.71v-.428h.429V5.25h-.43v-.43h2.148v4.295h.429v.428z"
                                                                    fill="#BDBDBD"></path>
                                                            </svg>


                                                        </p>

                                                        <h5 style="    margin-bottom: 3px;">$920,042.69</h5>
                                                        <span style="color: #5cc489;    font-weight: 700;">+75421%</span>
                                                    </div>
                                                    <div class="col-4" style="  ">
                                                        <div
                                                            style="border-radius: 6px;background: #f2f2f2;    width: 52px; ">

                                                            <p
                                                                style="      font-size: 13px;  text-align: center;padding: 3px;color: #5a66f9;">
                                                                #379

                                                            </p>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12" style="margin-bottom: 12px;">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12"
                                            style="    margin-bottom: 10px;padding-left:unset;">

                                            <div style="  padding: 15px; background: #f9f9f9;border-radius: 12px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <p
                                                            style="font-family: Poppins; color:#535572;  margin-bottom: 3px;  font-size: 15px;">
                                                            Floor Price
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="data-box-small_infoIcon__yr6OS">
                                                                <path
                                                                    d="M6 0a6 6 0 100 12A6 6 0 006 0zm0 2.458a.86.86 0 110 1.718.86.86 0 010-1.718zm1.288 7.085H4.71v-.428h.429V5.25h-.43v-.43h2.148v4.295h.429v.428z"
                                                                    fill="#BDBDBD"></path>
                                                            </svg>


                                                        </p>

                                                        <h5 style="    margin-bottom: 3px;">$920,042.69</h5>
                                                        <span style="color: #5cc489;    font-weight: 700;">+75421%</span>
                                                    </div>
                                                    <div class="col-4" style="  ">
                                                        <div
                                                            style="border-radius: 6px;background: #f2f2f2;    width: 52px; ">

                                                            <p
                                                                style="      font-size: 13px;  text-align: center;padding: 3px;color: #5a66f9;">
                                                                #379

                                                            </p>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12"
                                            style="margin-bottom: 10px;padding-left:unset;">

                                            <div style="  padding: 15px; background: #f9f9f9;border-radius: 12px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <p
                                                            style="font-family: Poppins; color:#535572;  margin-bottom: 3px;  font-size: 15px;">
                                                            Market Cap
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="data-box-small_infoIcon__yr6OS">
                                                                <path
                                                                    d="M6 0a6 6 0 100 12A6 6 0 006 0zm0 2.458a.86.86 0 110 1.718.86.86 0 010-1.718zm1.288 7.085H4.71v-.428h.429V5.25h-.43v-.43h2.148v4.295h.429v.428z"
                                                                    fill="#BDBDBD"></path>
                                                            </svg>


                                                        </p>

                                                        <h5 style="    margin-bottom: 3px;">$920,042.69</h5>
                                                        <span style="color: #5cc489;    font-weight: 700;">+75421%</span>
                                                    </div>
                                                    <div class="col-4" style="  ">
                                                        <div
                                                            style="border-radius: 6px;background: #f2f2f2;    width: 52px; ">

                                                            <p
                                                                style="      font-size: 13px;  text-align: center;padding: 3px;color: #5a66f9;">
                                                                #379

                                                            </p>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12" style="margin-top: 35px;">
                <div class="col-xl-5 col-lg-5 col-md-8 col-12">
                    <div class="row">


                        <div class="col-md-3 col-6" style="padding-bottom: 10px;">
                            <button style="  background: #5a66f9;  border-color: #5a66f9;                             width: 100%;
                                    border-radius: 9px;" class="btn btn-primary"> Overview</button>

                        </div>
                        <div class="col-md-3 col-6" style="padding-bottom: 10px;">
                            <button style="    background: white;
                                width: 100%;
                                border-radius: 9px;
                                color: #5a66f9;
                                border-color: white;" class="btn btn-primary"> NFT


                            </button>
                            <span class="new" style="position: absolute;top: -7px;right: 2px;
                            font-weight: 700;
                            font-size: 12px;
                            line-height: 17px;
                            color: #fff;
                            background: #ff664f;
                            border-radius: 4px;
                            border-bottom-left-radius: 0;
                            padding: 0 4px;">New!</span>
                        </div>

                        <div class="col-md-3 col-6" style="padding-bottom: 10px;">
                            <button style="    background: white;
                                width: 100%;
                                border-radius: 9px;
                                color: #5a66f9;
                                border-color: white;" class="btn btn-primary"> Holder </button>

                        </div>
                        <div class="col-md-3 col-6" style="padding-bottom: 10px;">
                            <button style="    background: white;
                                width: 100%;
                                border-radius: 9px;
                                color: #5a66f9;
                                border-color: white;" class="btn btn-primary"> Activitys </button>

                        </div>



                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12" style="    margin-top: 20px;">
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>

            </div>

        </div>
    </div>
    <!--top collection end-->
    <!--explore nft-->

    <!--home page end-->

    <!--footer blcok start-->
    <div class="container-fluid footer">
        <div class="row p-1 p-sm-5 p-lg-2 p-xl-5">
            <div class="col-lg-4 col-md-6 col-sm-12 py-3 py-md-5 d-flex align-items-center justify-content-center">
                <a href="{{ asset('/') }}" class="footer-logo ">
                    <img src="{{ asset('/img/logo.png') }}" />
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
                                <br />
                                <br />
                                <a href="#">
                                    About Us
                                </a>
                                <br />
                                <br />
                                <a href="#">
                                    contact Us
                                </a>
                                <br />
                                <br />
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
                                <br />
                                <br />
                                <a href="#">
                                    Terms and Conditions
                                </a>
                                <br />
                                <br />
                                <a href="#">
                                    Privacy Policy
                                </a>
                                <br />
                                <br />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="col-lg-4 col-md-6 col-sm-6 py-3 py-md-5">

                                                                    </div> -->
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                          <div class="modal-content">
                                                                            <div class="modal-header">
                                                                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                              </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                              ...
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                              <button type="button" class="btn btn-primary">Save changes</button>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
        </div>
    </div>
    <!--footer block end-->

    <script>
        window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title:{
                text: "Market Cap & Volume"
            },
            toolTip: {
                shared: true
            },
            axisX: {
                title: "Time",
                suffix : " s"
            },
            axisY: {
                title: "Speed",
                titleFontColor: "#4F81BC",
                suffix : " m/s",
                lineColor: "#4F81BC",
                tickColor: "#4F81BC"
            },
            axisY2: {
                title: "Distance",
                titleFontColor: "#C0504E",
                suffix : " m",
                lineColor: "#C0504E",
                tickColor: "#C0504E"
            },
            data: [{
                type: "spline",
                name: "speed",
                xValueFormatString: "#### sec",
                yValueFormatString: "#,##0.00 m/s",
                dataPoints: [
                    { x: 0 , y: 0 },
                    { x: 11 , y: 8.2 },
                    { x: 47 , y: 41.7 },
                    { x: 56 , y: 16.7 },
                    { x: 120 , y: 31.3 },
                    { x: 131 , y: 18.2 },
                    { x: 171 , y: 31.3 },
                    { x: 189 , y: 61.1 },
                    { x: 221 , y: 40.6 },
                    { x: 232 , y: 18.2 },
                    { x: 249 , y: 35.3 },
                    { x: 253 , y: 12.5 },
                    { x: 264 , y: 16.4 },
                    { x: 280 , y: 37.5 },
                    { x: 303 , y: 24.3 },
                    { x: 346 , y: 23.3 },
                    { x: 376 , y: 11.3 },
                    { x: 388 , y: 8.3 },
                    { x: 430 , y: 1.9 },
                    { x: 451 , y: 4.8 }
                ]
            },
            {
                type: "spline",
                axisYType: "secondary",
                name: "distance covered",
                yValueFormatString: "#,##0.# m",
                dataPoints: [
                    { x: 0 , y: 0 },
                    { x: 11 , y: 90 },
                    { x: 47 , y: 1590 },
                    { x: 56 , y: 1740 },
                    { x: 120 , y: 3740 },
                    { x: 131 , y: 3940 },
                    { x: 171 , y: 5190 },
                    { x: 189 , y: 6290 },
                    { x: 221 , y: 7590 },
                    { x: 232 , y: 7790 },
                    { x: 249 , y: 8390 },
                    { x: 253 , y: 8440 },
                    { x: 264 , y: 8620 },
                    { x: 280 , y: 9220 },
                    { x: 303 , y: 9780 },
                    { x: 346 , y: 10780 },
                    { x: 376 , y: 11120 },
                    { x: 388 , y: 11220 },
                    { x: 430 , y: 11300 },
                    { x: 451 , y: 11400 }
                ]
            }]
        });
        chart.render();

        }
        </script>
@endsection
