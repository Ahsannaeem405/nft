
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
                <div class="headerblock" style="background-image: url('{{asset('img/Sentiment.jpg')}}')">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 col-lg-6 col-12">
                            <div class="headerblock-left my-3 rounded">
                                <h1>Buy and sell crypto</h1>
                                <h3>The best all-in-one NFT analytics platform</h3>
                                <p>Buy and sell digital currencies using over 350 different payment methods. Get your
                                    Paxful
                                    account to start accepting payments and sending money with 6 million people just
                                    like you.
                                </p>
                                <a href="{{url('upcoming')}}">                                    <button class="get-start">
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
                                                    <?php
                                                    $i = 1;
                                                    ?>
                                                    @foreach ($data as $datas )
                                                    <a  href="{{url('/overview',[$datas->slug])}}" style="text-decoration: none;">
                                                    <li style="    color: black;" class="list-group-item d-flex justify-content-between align-items-center border-top">


                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span class="mr-2 font-weight-bold font-italic">{{$i++}}</span>
                                                            <img src="@if(isset($datas->featured_image_url)) {{ $datas->featured_image_url}} @else https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg @endif"  style="    max-width: 20px;"
                                                                width="20" height="20" />
                                                                <span style="max-width:160px;font-size: 14px;line-height: 22px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;word-break: break-all;">  {{ $datas->name}}</span>
                                                        </div>
                                                        <div class="value-size">
                                                            ${{ number_format((float)$datas->stats->market_cap, 4, '.', '') }}
                                                            <div class="text-success text-right">{{  number_format((float)$datas->stats->average_price, 4, '.', '') }}</div>
                                                        </div>

                                                    </li>
                                                </a>
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
                                                    <?php
                                                    $i = 1;
                                                    ?>
                                                           @foreach ($data as $datas )
                                                           <a href="{{url('/overview',[$datas->slug])}}" style="text-decoration: none;">
                                                           <li style="color: black"
                                                               class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                               <div class="d-flex justify-content-center align-items-center">
                                                                   <span class="mr-2 font-weight-bold font-italic">{{$i++}}</span>
                                                                   <img src="@if(isset($datas->featured_image_url)) {{ $datas->featured_image_url}} @else https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg @endif"  style="    max-width: 20px;"
                                                                       width="20" height="20" />
                                                                       <span style="max-width:160px;font-size: 14px;line-height: 22px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;word-break: break-all;">  {{ $datas->name}}</span>
                                                               </div>
                                                               <div class="value-size">
                                                                ${{ number_format((float)$datas->stats->market_cap, 4, '.', '') }}
                                                                <div class="text-success text-right">{{  number_format((float)$datas->stats->average_price, 4, '.', '') }}</div>
                                                               </div>
                                                           </li>
                                                           </a>
                                                           @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item mx-3">
                                        <div class="header-card">
                                            <div class="header-card-head">
                                                <h5><i class="fas fa-exchange-alt mr-2 text-danger"></i></i>Volume (24H)
                                                </h5>
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
                                                    <?php
                                                    $i = 1;
                                                    ?>

                                                        @foreach ($data as $datas )
                                                        <a href="{{url('/overview',[$datas->slug])}}" style="text-decoration: none;">
                                                        <li style="color: black"
                                                            class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <span class="mr-2 font-weight-bold font-italic">{{$i++}}</span>
                                                                <img src="@if(isset($datas->featured_image_url)) {{ $datas->featured_image_url}} @else https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg @endif"  style="    max-width: 20px;"
                                                                    width="20" height="20" />
                                                                    <span style="max-width:160px;font-size: 14px;line-height: 22px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;word-break: break-all;">  {{ $datas->name}}</span>
                                                            </div>
                                                            <div class="value-size">
                                                                ${{ number_format((float)$datas->stats->market_cap, 4, '.', '') }}
                                                                <div class="text-success text-right">{{  number_format((float)$datas->stats->average_price, 4, '.', '') }}</div>
                                                            </div>
                                                        </li>
                                                        </a>
                                                        @endforeach
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
    <div class="container">
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
    <div class="container">
                    {{-- featured section --}}

                <div class="row my-5">
                    <div class="col-12">
                        <div class="explore-nft">
                            <div class="explore-nft-header">
                                <h2>Featured NFTs</h2>

                            </div>
                            <div class="explore-nftbody">
                                <div class="row">
                                    @foreach ( $feat as $feats )

                                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4  pt-4 px-3">
                                        <div class="upcoming-card ">
                                            <a href="{{url('/featured/overview',[$feats->id])}}" style="text-decoration: none;">

                                            <div class="upcoming-card-img">
                                                <img
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEMfrw6hmh-H4Oz0kvXJH_7RezLdGdxVnycQ&usqp=CAU" />

                                                <div class="card-user-info p-2">
                                                    <div class="d-flex justify-content-between">
                                                        <h3>{{ $feats->name}}</h3>

                                                    </div>

                                                    <p class="mt-1">{{ $feats->short_description}}</p>
                                                </div>
                                            </div>
                                            <div class="upcoming-card-data p-2">

                                                <div class="d-flex w-100 justify-content-between align-items-center">
                                                    <div class="card-time-details w-50">
                                                        <div class="persale-details">
                                                            <h4>{{$feats->blockchain}}:<span class="px-2">{{$feats->date}}</span></h4>
                                                            <p>{{ $feats->time}} </p>
                                                        </div>


                                                    </div>
                                                    <div class="card-amount-details">
                                                        <p>Unit Price: {{ $feats->unit_price}}</p>

                                                    </div>
                                                </div>

                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- featured end section --}}
        </div>
    <!--top collection start-->
    <div class="container my-5 top-collection-main">
        <div class="row rounded">
            <div class="col-12">
                <div class="top-collection">
                    <div class="block-header d-flex justify-content-between align-items-center">
                        <h3>Top Collection</h3>

                    </div>
                    <div class="block-body">
                        <div class="row mb-3">
                            @foreach ( $data1 as $datass )

{{-- @dd($datass) --}}
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                <a href="{{url('/overview',[$datass->slug])}}" style="text-decoration: none;">

                                <div class="feature-card mt-4 mx-2">
                                    <div class="card-head">
                                        <img
                                            src=" @if(isset( $datass->banner_image_url)) {{ $datass->banner_image_url}} @else https://helostatus.com/wp-content/uploads/2021/09/HD-WhatsApp-profile.jpg  @endif" />
                                        <div class="card-bio ml-1" style="width: 148px;line-height: 20px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;word-break: break-all;">
                                            {{$datass->name}}<br>
                                            <span>{{$datass->primary_asset_contracts[0]->symbol}}</span>
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

                                            ${{  number_format((float)$datass->stats->market_cap, 4, '.', '') }}
                                        </div>
                                        <div class="card-values border-left border-right px-3">
                                            <p>Holders</p>
                                           ${{ $datass->stats->one_day_sales}}
                                        </div>
                                        <div class="card-values">
                                            <p>Volume (24H)</p>

                                            ${{  number_format((float)$datass->stats->one_day_volume, 4, '.', '') }}


                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--top collection end-->
    <!--explore nft-->
    <div class="container my-5" id="explorenft">
        <div class="row">
            <div class="col-12">
                <div class="explore-nft">
                    <div class="explore-nft-header">
                        <h2>Explore NFTs</h2>

                    </div>
                    <div class="explore-nftbody">
                        <div class="row">
                            @foreach ( $data1 as $datass )

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
                                <a href="{{url('/overview',[$datass->slug])}}" style="text-decoration: none;">

                                    <div class="explore-card mt-3 mx-3">
                                        <div class="explore-card-img">
                                            <img
                                           style="    max-height: 190px;min-width: 240px;max-width: 240px;min-height: 190px;" src=" @if (isset($datass->large_image_url)){{$datass->large_image_url}} @else https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120  @endif " />
                                        </div>
                                        <div class="explore-card-body m-3">
                                            <h5 style="line-height: 20px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;word-break: break-all;">{{$datass->name}}</h5>
                                            <div class="d-flex align-items-center justify-content-between mt-4">
                                                <div class="explore-card-bodyimg">
                                                    <img
                                                        src=" @if(isset($datass->large_image_url)) {{ $datass->large_image_url}} @else https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120  @endif " />
                                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="project-card_icon__3yC3z mx-2">
                                                        <path
                                                            d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                                            fill="#8A8A8A"></path>
                                                    </svg>
                                                </div>
                                                <span>{{$datass->stats->total_supply}}ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--home page end-->

    <!--Footer Here-->
    @include('user.layout.footer');
@endsection
