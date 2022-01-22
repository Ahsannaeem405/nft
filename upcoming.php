<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/upcoming.css">
    <link rel="stylesheet" href="./css/footer.css">
    <!-- owl carousel slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font links-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,700;1,400&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <title>Upcoming page</title>
</head>

<body>
    <!--Nav Bar start-->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light">

        <a class="navbar-brand" href="index.php">
            <img src="./img/logo.png" alt="logo-pic" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item  mx-2">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item mx-2">

                    <a class="nav-link" href="#">News letter</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item active mx-2">
                    <a class="nav-link" href="upcoming.php">Upcoming</a>
                </li>
            </ul>
            <div class="nav-right">
                <a href="#" class="signup-link">
                    <i class="fas fa-sign-out-alt"></i>
                    Sign up
                </a>
                <a href="login.php" class="login-link">
                    Login
                </a>
            </div>
        </div>

    </nav>
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
    <div class="container-fluid">
        <div class="row mx-5 mt-3">
            <div class="col-12">
                <button class="float-right new-project-btn" onclick={openForm()}>Add Your Project</button>
            </div>
        </div>
        <div class="row my-3 mx-xl-3 mx-lg-1 mx-1 d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4  pt-4 px-3">
                <div class="upcoming-card ">
                    <a href="#">
                    <div class="upcoming-card-img">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEMfrw6hmh-H4Oz0kvXJH_7RezLdGdxVnycQ&usqp=CAU" />

                        <div class="card-user-info p-2">
                            <div class="d-flex justify-content-between">
                                <h3>Silly Sheep NFT</h3>
                                <span>(Asia, Lahore)</span>
                            </div>

                            <p class="mt-1">Pixelated sheep NFTs with future animated series</p>
                        </div>
                    </div>
                    <div class="upcoming-card-data p-2">

                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="card-time-details w-50">
                                <div class="persale-details">
                                    <h4>Presale:<span class="px-2">Yesterday</span></h4>
                                    <p>10:00 pm </p>
                                </div>
                                <div class="persale-details">
                                    <h4>Sale:<span class="px-2">Today</span></h4>
                                    <p>10:00 pm</p>
                                </div>

                            </div>
                            <div class="card-amount-details">
                                <p>Presale: 0.07 ETH</p>
                                <p>Public Sale: 0.09 ETH</p>
                                <span>10,000 Total</span>
                            </div>
                        </div>
                        <div class="upcoming-card-links d-flex text-center justify-content-between mx-0 mx-sm-4">
                            <a href="#"><i class="fab fa-discord mr-2"></i>DisCard</a>
                            <a href="#"><i class="fab fa-twitter mr-2"></i>@Cryptopixel</a>
                            <a href="#"><i class="fas fa-globe mr-2"></i>cryptopixel.co</a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4  pt-4 px-3">
                <div class="upcoming-card ">
                    <a href="#">
                    <div class="upcoming-card-img">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEMfrw6hmh-H4Oz0kvXJH_7RezLdGdxVnycQ&usqp=CAU" />

                        <div class="card-user-info p-2">
                            <div class="d-flex justify-content-between">
                                <h3>Silly Sheep NFT</h3>
                                <span>(Asia, Lahore)</span>
                            </div>

                            <p class="mt-1">Pixelated sheep NFTs with future animated series</p>
                        </div>
                    </div>
                    <div class="upcoming-card-data p-2">

                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="card-time-details w-50">
                                <div class="persale-details">
                                    <h4>Presale:<span class="px-2">Yesterday</span></h4>
                                    <p>10:00 pm </p>
                                </div>
                                <div class="persale-details">
                                    <h4>Sale:<span class="px-2">Today</span></h4>
                                    <p>10:00 pm</p>
                                </div>

                            </div>
                            <div class="card-amount-details">
                                <p>Presale: 0.07 ETH</p>
                                <p>Public Sale: 0.09 ETH</p>
                                <span>10,000 Total</span>
                            </div>
                        </div>
                        <div class="upcoming-card-links d-flex text-center justify-content-between mx-0 mx-sm-4">
                            <a href="#"><i class="fab fa-discord mr-2"></i>DisCard</a>
                            <a href="#"><i class="fab fa-twitter mr-2"></i>@Cryptopixel</a>
                            <a href="#"><i class="fas fa-globe mr-2"></i>cryptopixel.co</a>
                        </div>
                    </div>
                    </a>
                </div>
            </div> <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4  pt-4 px-3">
                <div class="upcoming-card ">
                    <a href="#">
                    <div class="upcoming-card-img">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEMfrw6hmh-H4Oz0kvXJH_7RezLdGdxVnycQ&usqp=CAU" />

                        <div class="card-user-info p-2">
                            <div class="d-flex justify-content-between">
                                <h3>Silly Sheep NFT</h3>
                                <span>(Asia, Lahore)</span>
                            </div>

                            <p class="mt-1">Pixelated sheep NFTs with future animated series</p>
                        </div>
                    </div>
                    <div class="upcoming-card-data p-2">

                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="card-time-details w-50">
                                <div class="persale-details">
                                    <h4>Presale:<span class="px-2">Yesterday</span></h4>
                                    <p>10:00 pm </p>
                                </div>
                                <div class="persale-details">
                                    <h4>Sale:<span class="px-2">Today</span></h4>
                                    <p>10:00 pm</p>
                                </div>

                            </div>
                            <div class="card-amount-details">
                                <p>Presale: 0.07 ETH</p>
                                <p>Public Sale: 0.09 ETH</p>
                                <span>10,000 Total</span>
                            </div>
                        </div>
                        <div class="upcoming-card-links d-flex text-center justify-content-between mx-0 mx-sm-4">
                            <a href="#"><i class="fab fa-discord mr-2"></i>DisCard</a>
                            <a href="#"><i class="fab fa-twitter mr-2"></i>@Cryptopixel</a>
                            <a href="#"><i class="fas fa-globe mr-2"></i>cryptopixel.co</a>
                        </div>
                    </div>
                    </a>
                </div>
            </div> <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4  pt-4 px-3">
                <div class="upcoming-card ">
                    <a href="#">
                    <div class="upcoming-card-img">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEMfrw6hmh-H4Oz0kvXJH_7RezLdGdxVnycQ&usqp=CAU" />

                        <div class="card-user-info p-2">
                            <div class="d-flex justify-content-between">
                                <h3>Silly Sheep NFT</h3>
                                <span>(Asia, Lahore)</span>
                            </div>

                            <p class="mt-1">Pixelated sheep NFTs with future animated series</p>
                        </div>
                    </div>
                    <div class="upcoming-card-data p-2">

                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="card-time-details w-50">
                                <div class="persale-details">
                                    <h4>Presale:<span class="px-2">Yesterday</span></h4>
                                    <p>10:00 pm </p>
                                </div>
                                <div class="persale-details">
                                    <h4>Sale:<span class="px-2">Today</span></h4>
                                    <p>10:00 pm</p>
                                </div>

                            </div>
                            <div class="card-amount-details">
                                <p>Presale: 0.07 ETH</p>
                                <p>Public Sale: 0.09 ETH</p>
                                <span>10,000 Total</span>
                            </div>
                        </div>
                        <div class="upcoming-card-links d-flex text-center justify-content-between mx-0 mx-sm-4">
                            <a href="#"><i class="fab fa-discord mr-2"></i>DisCard</a>
                            <a href="#"><i class="fab fa-twitter mr-2"></i>@Cryptopixel</a>
                            <a href="#"><i class="fas fa-globe mr-2"></i>cryptopixel.co</a>
                        </div>
                    </div>
                    </a>
                </div>
            </div> <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4  pt-4 px-3">
                <div class="upcoming-card ">
                    <a href="#">
                    <div class="upcoming-card-img">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEMfrw6hmh-H4Oz0kvXJH_7RezLdGdxVnycQ&usqp=CAU" />

                        <div class="card-user-info p-2">
                            <div class="d-flex justify-content-between">
                                <h3>Silly Sheep NFT</h3>
                                <span>(Asia, Lahore)</span>
                            </div>

                            <p class="mt-1">Pixelated sheep NFTs with future animated series</p>
                        </div>
                    </div>
                    <div class="upcoming-card-data p-2">

                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="card-time-details w-50">
                                <div class="persale-details">
                                    <h4>Presale:<span class="px-2">Yesterday</span></h4>
                                    <p>10:00 pm </p>
                                </div>
                                <div class="persale-details">
                                    <h4>Sale:<span class="px-2">Today</span></h4>
                                    <p>10:00 pm</p>
                                </div>

                            </div>
                            <div class="card-amount-details">
                                <p>Presale: 0.07 ETH</p>
                                <p>Public Sale: 0.09 ETH</p>
                                <span>10,000 Total</span>
                            </div>
                        </div>
                        <div class="upcoming-card-links d-flex text-center justify-content-between mx-0 mx-sm-4">
                            <a href="#"><i class="fab fa-discord mr-2"></i>DisCard</a>
                            <a href="#"><i class="fab fa-twitter mr-2"></i>@Cryptopixel</a>
                            <a href="#"><i class="fas fa-globe mr-2"></i>cryptopixel.co</a>
                        </div>
                    </div>
                    </a>
                </div>
            </div> <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4  pt-4 px-3">
                <div class="upcoming-card ">
                    <a href="#">
                    <div class="upcoming-card-img">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEMfrw6hmh-H4Oz0kvXJH_7RezLdGdxVnycQ&usqp=CAU" />

                        <div class="card-user-info p-2">
                            <div class="d-flex justify-content-between">
                                <h3>Silly Sheep NFT</h3>
                                <span>(Asia, Lahore)</span>
                            </div>

                            <p class="mt-1">Pixelated sheep NFTs with future animated series</p>
                        </div>
                    </div>
                    <div class="upcoming-card-data p-2">

                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="card-time-details w-50">
                                <div class="persale-details">
                                    <h4>Presale:<span class="px-2">Yesterday</span></h4>
                                    <p>10:00 pm </p>
                                </div>
                                <div class="persale-details">
                                    <h4>Sale:<span class="px-2">Today</span></h4>
                                    <p>10:00 pm</p>
                                </div>

                            </div>
                            <div class="card-amount-details">
                                <p>Presale: 0.07 ETH</p>
                                <p>Public Sale: 0.09 ETH</p>
                                <span>10,000 Total</span>
                            </div>
                        </div>
                        <div class="upcoming-card-links d-flex text-center justify-content-between mx-0 mx-sm-4">
                            <a href="#"><i class="fab fa-discord mr-2"></i>DisCard</a>
                            <a href="#"><i class="fab fa-twitter mr-2"></i>@Cryptopixel</a>
                            <a href="#"><i class="fas fa-globe mr-2"></i>cryptopixel.co</a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            
          
        </div>
    </div>
    <!--Upcoming page end-->
    <!--From Pop Up-->
    <div id="add-project">
        <div class="container p-0">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="add-project-form my-3 px-2 px-sm-4 py-4" >
                        <h2 class="mb-3 mb-lg-4">Upcoming NFT Sales Form</h2>
                        <form class="text-left">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Project's Name </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter your project name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Email </label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="You Email Address">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website URL (if not available, please provide an est.
                                    target date if possible)
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Project's Official Discord Invite Link. MAKE SURE
                                    THE INVITE LINK WILL NOT EXPIRE!
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Project's Official Twitter</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">Enter as
                                    https://twitter.com/yourtwitterhandle, if you don't have an official twitter for the
                                    project provide your personal twitter
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">OpenSea Link (if available)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">Enter as
                                    https://opensea.io/collection/yourcollectionname
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">What is the maximum number of items in your collection?
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">Or at least the first batch that you
                                    would like to be mentioned.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unit Price (ETH)
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Project's Sale Start Date (in UTC only*)
                                </label>
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <input type="date" class="form-control" placeholder="Date">
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="time" class="form-control" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Please enter a short description (50 chars max) that you
                                    would like to show on the page
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tell us about your project
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">What makes your project differences/ stand out from
                                    others?
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Project's Roadmap and/ or Current Activities (If
                                    available)
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"><span class="small">Please provide links to some example images from your
                                    collection (max at 4) to be added to the upcoming page. Still images only, no gifs.</span>
                                    PLEASE MAKE SURE YOU ARE SATISFIED WITH YOUR IMAGE SELECTION. WE RESERVE THE RIGHT
                                    NOT CHANGE IMAGES LATER.
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                What is your collection's blockchain?
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="Ethereum" value="Ethereum" checked>
                                    <label class="form-check-label" for="Ethereum">
                                        Ethereum
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="Matic" value="option2">
                                    <label class="form-check-label" for="Matic">
                                        Matic
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blockchain" id="BinanceSmartChain" value="option3">
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
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Is your project a derivative of an existing project? If so, which project?
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="">
                            </div>
                            

                            <button type="submit" class="btn btn-primary" onclick={closeForm()}>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer blcok start-->
    <div class="container-fluid footer">
        <div class="row p-1 p-sm-5 p-lg-2 p-xl-5">
            <div class="col-lg-4 col-md-6 col-sm-12 py-3 py-md-5 d-flex align-items-center justify-content-center">
                <a href="index.php" class="footer-logo ">
                    <img src="./img/logo.png" />
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
    <!-- Jquery bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- owl carousal jquery-->
    <script>
        var popup = document.getElementById("add-project").style;
        function openForm() {
            popup.display = "block";
        }
        function closeForm() {
            popup.display = "none";
        }
        </script>
</body>

</html>