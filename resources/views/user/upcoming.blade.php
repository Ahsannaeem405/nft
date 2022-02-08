@extends('user.layout.default')
@section('content')
    <!--Nav Bar start-->
  @include('user.layout.header')
  <style></style>
    <!--Nav Bar end-->
    <!--upcoming page start-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="upcoming-pageheading mt-5 text-center mx-1 px-1 mx-md-5 px-md-5">
                    <h2 class="mb-3">Upcoming NFT Sales</h2>
                    <p class=" px-0 px-lg-5">Disclaimer: Any information provided on this page including the featured
                        project(s) should not be
                        considered as financial or investment advice. The information is provided as-is with no
                        guarantees.
                        We cannot validate the claims or the trustworthiness of the projects listed. By using this
                        information you agree to not take rarity.tools responsible for the results of your investment
                        decisions resulting from it. Please do your own research!</p>
                    <p class="text-muted px-0 px-lg-5">
                        Warning: We do not guarantee that the information provided here is 100% accurate. Please verify
                        all information (such as final sale date/time) from official project channels to be sure you
                        don't miss the sale. Projects may change price, supply, sale date/time and/or other information
                        without us knowing.
                    </p>
                    <br>
                    <p class="text-muted px-0 px-lg-5">
                        Notice: This information is provided as a free service. Inclusion in this list does not mean we
                        will automatically list and create rankings for the project.
                    </p>
                    <!-- <a href="#">
                        Submit your project for this list.
                    </a> -->
                </div>
            </div>
        </div>
    </div>

<div class="my-5">
    <div class="container-fluid s1">
        <div class="row mx-5 mt-3">
            <div class="col-12">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <button class="float-right new-project-btn" onclick=openForm()>Add Your Project</button>
            </div>
        </div>
        <div class="row my-3 mx-xl-3 s1 mx-lg-1 mx-1 d-flex justify-content-center">

            @foreach ($view as  $views)


            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4  pt-4 px-3">
                <div class="upcoming-card ">
                    <a href="#">
                    <div class="upcoming-card-img">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEMfrw6hmh-H4Oz0kvXJH_7RezLdGdxVnycQ&usqp=CAU" />

                        <div class="card-user-info p-2">
                            <div class="d-flex justify-content-between">
                                <h3>{{ $views->name}}</h3>

                            </div>

                            <p class="mt-1">{{ $views->short_description}}</p>
                        </div>
                    </div>
                    <div class="upcoming-card-data p-2">

                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="card-time-details w-50">
                                <div class="persale-details">
                                    <h4>{{$views->blockchain}}:<span class="px-2">{{$views->date}}</span></h4>
                                    <p>{{ $views->time}} </p>
                                </div>


                            </div>
                            <div class="card-amount-details">
                                <p>Unit Price: {{ $views->unit_price}}</p>

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

    <!--Upcoming page end-->

    {{-- Featured section --}}


    {{-- end featured section --}}
    <!--From Pop Up-->
    <div id="add-project">
        <div class="container p-0">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="add-project-form my-3 px-2 px-sm-4 py-4" >

                        <h2 class="mb-3 mb-lg-4">Upcoming NFT Sales Form</h2>
                        <form action="{{url('upcoming/save')}}" method="POST" style="text-align: start;">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Project's Name </label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter your project name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Email </label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="You Email Address" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website URL (if not available, please provide an est.
                                    target date if possible)
                                </label>
                                <input type="text" name="url" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Website URL" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Project's Official Discord Invite Link. MAKE SURE
                                    THE INVITE LINK WILL NOT EXPIRE!
                                </label>
                                <input type="text" name="official_url" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Official Discord Invite Link" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Project's Official Twitter</label>
                                <input type="text" name="official_twitter" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Official Twitter" required>
                                <small id="emailHelp" class="form-text text-muted">Enter as
                                    https://twitter.com/yourtwitterhandle, if you don't have an official twitter for the
                                    project provide your personal twitter
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">OpenSea Link (if available)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="openSea_link" placeholder="OpenSea Link" required>
                                <small id="emailHelp" class="form-text text-muted">Enter as
                                    https://opensea.io/collection/yourcollectionname
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">What is the maximum number of items in your collection?
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="maximum_number" placeholder="Enter Maximum Number" required>
                                <small id="emailHelp" class="form-text text-muted">Or at least the first batch that you
                                    would like to be mentioned.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unit Price (ETH)
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="unit_price" placeholder="Enter Unit Price" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Project's Sale Start Date (in UTC only*)
                                </label>
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <input type="date" class="form-control" name="date"  placeholder="Date" required>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="time" class="form-control" name="time" placeholder="Time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Please enter a short description (50 chars max) that you
                                    would like to show on the page
                                </label>
                                <input type="text" class="form-control" name="short_description" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Short Description" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tell us about your project
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="tell_us" placeholder="Tell us about your project" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">What makes your project differences/ stand out from
                                    others?
                                </label>
                                <input type="text" class="form-control" name="project_differences" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Project Differences" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Project's Roadmap and/ or Current Activities (If
                                    available)
                                </label>
                                <input type="text" class="form-control" name="projects_roadmap" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Project's Roadmap" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"><span class="small">Please provide links to some example images from your
                                    collection (max at 4) to be added to the upcoming page. Still images only, no gifs.</span>
                                    PLEASE MAKE SURE YOU ARE SATISFIED WITH YOUR IMAGE SELECTION. WE RESERVE THE RIGHT
                                    NOT CHANGE IMAGES LATER.
                                </label>
                                <input type="text" class="form-control" name="links_images" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required >
                            </div>
                            <div class="form-group">
                                What is your collection's blockchain?
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="Ethereum" value="Ethereum" checked>
                                    <label class="form-check-label" for="Ethereum" >
                                        Ethereum
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="Matic" value="Matic" >
                                    <label class="form-check-label" for="Matic" >
                                        Matic
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="BinanceSmartChain" value="Chain">
                                    <label class="form-check-label" for="BinanceSmartChain">
                                        Binance Smart Chain
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="Cardano" value="Cardano">
                                    <label class="form-check-label" for="Cardano">
                                        Cardano
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="Wax" value="Wax">
                                    <label class="form-check-label" for="Wax">
                                        Wax
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="Other" value="Other">
                                    <label class="form-check-label" for="Other">
                                        Other
                                    </label>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">What is your minting contract address (if you know it)?
                                </label>
                                <input type="text" class="form-control" id=" minting"
                                    aria-describedby="emailHelp" placeholder="Enter Minting Contract Address" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Is your project a derivative of an existing project? If so, which project?
                                </label>
                                <input type="text" class="form-control" name="derivative" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="" required>
                            </div>


                            <input type="submit" class="btn btn-primary"  value="Submit" onclick={closeForm()}>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer blcok start-->
    @include('user.layout.footer')
    <!--footer block end-->
    <!-- Jquery bootstrap script -->

    <script>
        //    alert(12);

    var popup = document.getElementById("add-project").style;
    function openForm() {
        popup.display = "block";
    }
    function closeForm() {
        popup.display = "none";
    }
    </script>
@endsection
