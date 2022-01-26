
    @extends('user.layout.default')
    @section('content')



    <!--Nav Bar start-->

    @include('user.layout.header')


    <!--Nav Bar end-->

    <!--Home page start-->

    <div class="container my-5">
        <div class="row">
            <div class="col-12">

                <!--Header block start-->
                <div class="headerblock">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 col-lg-6 col-12">
                            <div class="headerblock-left my-3">
                                <h1>Buy and sell crypto</h1>
                                <h3>The best all-in-one NFT analytics platform</h3>
                                <p>Buy and sell digital currencies using over 350 different payment methods. Get your
                                    Paxful
                                    account to start accepting payments and sending money with 6 million people just
                                    like you.
                                </p>
                                <a>
                                    <button class="get-start">
                                        Get Start
                                    </button>

                                </a>
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-6 col-12 p-0 px-md-3">
                            <div class="headerblock-right">
                                <div class="owl-carousel1 owl-carousel owl-theme">
                                    <div class="item mx-3">
                                        <div class="header-card">
                                            <div class="header-card-head">
                                                <h5><i class="fas fa-chart-line mr-2 text-warning"></i>MarketCap
                                                    change(24H)</h5>
                                                <button>More <span class="ml-2 text-info"> ></span></button>
                                            </div>
                                            <div class="header-card-body">
                                                <ul class="list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center table-heading">
                                                        <div>
                                                            <span class="mr-2">#</span>
                                                            Collection
                                                        </div>
                                                        <div>
                                                            Marketcap
                                                        </div>
                                                    </li>
                                                    @foreach ($data->bundles as $datas )

@dd($datas )
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">01</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" style="    max-width: 20px;"
                                                                width="20" height="20" />
                                                                <span style="max-width:160px;font-size: 14px;line-height: 22px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;word-break: break-all;">  {{ $datas->name}}</span>

                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>

                                                    @endforeach
                                                    {{-- <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">02</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">03</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">04</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">05</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item mx-3">
                                        <div class="header-card">
                                            <div class="header-card-head">
                                                <h5><i class="fas fa-funnel-dollar mr-2 text-primary"></i>Buyer (24H)
                                                </h5>
                                                <button>More <span class="ml-2 text-muted"> ></span></button>
                                            </div>
                                            <div class="header-card-body">
                                                <ul class="list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center table-heading">
                                                        <div>
                                                            <span class="mr-2">#</span>
                                                            Collection
                                                        </div>
                                                        <div>
                                                            Marketcap
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">01</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">02</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">03</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">04</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">05</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item mx-3">
                                        <div class="header-card">
                                            <div class="header-card-head">
                                                <h5><i class="fas fa-exchange-alt mr-2 text-danger"></i></i>Volume (24H)
                                                </h5>
                                                <button>More <span class="ml-2 text-muted"> ></span></button>
                                            </div>
                                            <div class="header-card-body">
                                                <ul class="list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center table-heading">
                                                        <div>
                                                            <span class="mr-2">#</span>
                                                            Collection
                                                        </div>
                                                        <div>
                                                            Marketcap
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">01</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">02</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">03</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">04</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">05</span>
                                                            <img src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg"
                                                                width="20" height="20" />name
                                                        </div>
                                                        <div class="value-size">
                                                            $12,50,000.00
                                                            <div class="text-success text-right">+28.30%</div>
                                                        </div>
                                                    </li>
                                                </ul>
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
    <!--Header block end-->
    <!--Home page silder start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">


                <div class="home-slider my-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col-10">
                            <div class="owl-carousel2 owl-carousel owl-theme">
                                <div class="item">
                                    <img src="https://coinmars.net/upload/images/autoPayCrypto2.gif" />
                                </div>
                                <div class="item">
                                    <img src="https://coinmars.net/upload/images/1622201167_.png" />
                                </div>
                                <div class="item">
                                    <img src="https://coinmars.net/upload/images/1631502572_.gif" />
                                </div>
                                <div class="item">
                                    <img src="https://coinmars.net/upload/images/1631506336_.gif" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--Home page silder end-->
    <!--top collection start-->
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="top-collection">
                    <div class="block-header d-flex justify-content-between align-items-center">
                        <h3>Top Collection</h3>
                        <div>
                            <button>Read More</button>
                        </div>
                    </div>
                    <div class="block-body">
                        <div class="row mb-3">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        <div class="card-bio ml-1">
                                            Hape prime<br>
                                            <span>Avator</span>
                                        </div>
                                        <p class="card-title">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="project-card_icon__3yC3z">
                                                <path
                                                    d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                    fill="#8A8A8A"></path>
                                            </svg>
                                            ETH
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-values">
                                            <p>Market Cap</p>
                                            $320.5K
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                            20.5K
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>
                                            $56.38K
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        <div class="card-bio ml-1">
                                            Hape prime<br>
                                            <span>Avator</span>
                                        </div>
                                        <p class="card-title">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="project-card_icon__3yC3z">
                                                <path
                                                    d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                    fill="#8A8A8A"></path>
                                            </svg>
                                            ETH
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-values">
                                            <p>Market Cap</p>
                                            $320.5K
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                            20.5K
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>
                                            $56.38K
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        <div class="card-bio ml-1">
                                            Hape prime<br>
                                            <span>Avator</span>
                                        </div>
                                        <p class="card-title">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="project-card_icon__3yC3z">
                                                <path
                                                    d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                    fill="#8A8A8A"></path>
                                            </svg>
                                            ETH
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-values">
                                            <p>Market Cap</p>
                                            $320.5K
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                            20.5K
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>
                                            $56.38K
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        <div class="card-bio ml-1">
                                            Hape prime<br>
                                            <span>Avator</span>
                                        </div>
                                        <p class="card-title">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="project-card_icon__3yC3z">
                                                <path
                                                    d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                    fill="#8A8A8A"></path>
                                            </svg>
                                            ETH
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-values">
                                            <p>Market Cap</p>
                                            $320.5K
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                            20.5K
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>
                                            $56.38K
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        <div class="card-bio ml-1">
                                            Hape prime<br>
                                            <span>Avator</span>
                                        </div>
                                        <p class="card-title">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="project-card_icon__3yC3z">
                                                <path
                                                    d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                    fill="#8A8A8A"></path>
                                            </svg>
                                            ETH
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-values">
                                            <p>Market Cap</p>
                                            $320.5K
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                            20.5K
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>
                                            $56.38K
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        <div class="card-bio ml-1">
                                            Hape prime<br>
                                            <span>Avator</span>
                                        </div>
                                        <p class="card-title">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="project-card_icon__3yC3z">
                                                <path
                                                    d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                    fill="#8A8A8A"></path>
                                            </svg>
                                            ETH
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-values">
                                            <p>Market Cap</p>
                                            $320.5K
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                            20.5K
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>
                                            $56.38K
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        <div class="card-bio ml-1">
                                            Hape prime<br>
                                            <span>Avator</span>
                                        </div>
                                        <p class="card-title">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="project-card_icon__3yC3z">
                                                <path
                                                    d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                    fill="#8A8A8A"></path>
                                            </svg>
                                            ETH
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-values">
                                            <p>Market Cap</p>
                                            $320.5K
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                            20.5K
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>
                                            $56.38K
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src="https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg" />
                                        <div class="card-bio ml-1">
                                            Hape prime<br>
                                            <span>Avator</span>
                                        </div>
                                        <p class="card-title">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="project-card_icon__3yC3z">
                                                <path
                                                    d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                    fill="#8A8A8A"></path>
                                            </svg>
                                            ETH
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-values">
                                            <p>Market Cap</p>
                                            $320.5K
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                            20.5K
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>
                                            $56.38K
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
    <!--top collection end-->
    <!--explore nft-->
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="explore-nft">
                    <div class="explore-nft-header">
                        <h2>Explore NFTs</h2>
                        <div>
                            <button>Read More</button>
                        </div>
                    </div>
                    <div class="explore-nftbody">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="#">
                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img src="{{asset('/img/black-logo.jpg')}}" />
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5>The Wolfgang</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src="https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120" />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>0.023ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="#">
                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img src="{{asset('/img/black-logo.jpg')}}" />
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5>The Wolfgang</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src="https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120" />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>0.023ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="#">
                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img src="{{asset('/img/black-logo.jpg')}}" />
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5>The Wolfgang</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src="https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120" />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>0.023ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="#">
                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img src="{{asset('/img/black-logo.jpg')}}" />
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5>The Wolfgang</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src="https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120" />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>0.023ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="#">
                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img src="{{asset('/img/black-logo.jpg')}}" />
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5>The Wolfgang</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src="https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120" />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>0.023ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="#">
                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img src="{{asset('/img/black-logo')}}.jpg" />
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5>The Wolfgang</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src="https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120" />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>0.023ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="#">
                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img src="{{asset('/img/black-logo.jpg')}}" />
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5>The Wolfgang</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src="https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120" />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>0.023ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="#">
                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img src="{{asset('/img/black-logo.jpg')}}" />
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5>The Wolfgang</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src="https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120" />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>0.023ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--home page end-->

    <!--footer blcok start-->
    <div class="container-fluid footer">
        <div class="row p-1 p-sm-5 p-lg-2 p-xl-5">
            <div class="col-lg-4 col-md-6 col-sm-12 py-3 py-md-5 d-flex align-items-center justify-content-center">
                <a href="{{asset('/')}}" class="footer-logo ">
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
    <!--footer block end-->
@endsection
