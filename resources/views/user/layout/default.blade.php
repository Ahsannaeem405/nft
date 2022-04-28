<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/user/css/header.css')}}">
<link rel="stylesheet" href="{{asset('/user/css/homepage.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/upcoming.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/newsletter.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/login.css')}}">

    <link rel="stylesheet" href="{{asset('/user/css/dark-mode.css')}}"


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
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,700;1,400&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>

    <title>Buy and sell crypto</title>
     <style>

        body {
            color: black;
            background-color: white;
        }
        .dark-theme {
            color: white !important;
            background-color: #272727;
        }
        .dark-theme div ul li a {
            color: white !important;
        }
        .dark-theme .navbar{
            box-shadow: 0px 10px 15px rgba(255, 255, 255, 0.5);
        }
        .dark-theme .navbar-collapse{
            background-color: #272727; */
        }
        .dark-theme .navbar-collapse ul  {
            color: white  !important;
        }
        .dark-theme .navbar-collapse .active{
            border-bottom: 2px solid white;
        }
        .dark-theme .row .col-12 .home-slider .row {
            color: white  !important;
            background-color: #272727; */
        }
        .dark-theme .row .col-12 .home-slider .row .col-10 {
            color: white  !important;
            background-color: transparent; */
        }

        .dark-theme .block-body .feature-card{
            border: 1px solid rgba(255, 255, 255, 0.1)
        }
        .dark-theme .block-body .feature-card .card-bio{
            color: white;
        }
        .dark-theme .feature-card .card-head p{
            color:white;
        }
        .dark-theme .feature-card .card-body .card-values{
            color: #fff;
        }
        .dark-theme .row .col-12 .explore-nft div  .row div a .explore-card .explore-card-body h5{
            color: white  !important;
        }
        .dark-theme .row .col-12 .explore-nft div  .row div a .explore-card .explore-card-body div span{
            color: white  !important;
        }
        .dark-theme .upcoming-pageheading  {
            color: white  !important;
            background-color: #272727 ;
        }
        .dark-theme .upcoming-card {
            color: white  !important;
            background-color: #343434 !important;
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 0.5)
        }
        .dark-theme .explore-nft-header{
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .dark-theme .row div .row div .footer-links div a{
            color: white  !important;
        }
        .dark-theme .headerblock{
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.5);
        }
        .dark-theme .headerblock .headerblock-left {
            color: white  !important;
            background-color: transparent !important; */
        }
        .dark-theme .row .col-12 .headerblock .row .col-lg-6 {
            color: white  !important;
            background-color: transparent !important;
        }
        .dark-theme .headerblock .headerblock-right .owl-theme .owl-item .header-card {
            background-color: #343434 !important;
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 0.5) !important;
        }
        .dark-theme .headerblock .headerblock-right .owl-theme .owl-item .header-card .header-card-head{
            border-bottom: 1px solid rgba(255,255,255, 0.5) !important;
        }
        .dark-theme .headerblock .headerblock-right .owl-theme .owl-item .header-card .header-card-head button{
            background-color: #343434;
            color: white;
        }
        .dark-theme .headerblock .headerblock-right .owl-theme .owl-item .header-card .header-card-head button{
            color: white:
        }
        .dark-theme .headerblock .headerblock-right .owl-theme .owl-item .header-card .header-card-body .list-group .table-heading{
            background-color: #343434;
            color: white;
        }

        .dark-theme .headerblock .headerblock-right .owl-theme .owl-item .header-card .header-card-body .list-group .list-group-item{
            background-color: #343434;
            color: white !important;
        }
        .dark-theme .headerblock .headerblock-right .owl-theme .owl-item .header-card .header-card-body .list-group .list-group-item:first-child{
            border-radius: 0px !important;
        }

        .dark-theme .top-collection-main .top-collection{
            background-color: #343434 ;
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 0.5);
        }
        .dark-theme .top-collection-main .top-collection .block-header h3{
            color: white;
        }
        .dark-theme .top-collection-main .top-collection .block-header{
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        nav button {
            background-color: green !important;
            color: green !important;
            border: 2px solid red;
        }
        .dark-theme .s1 {
            background-color: #272727 !important; */
            color: white  !important;

        }
        .dark-theme .s1 .s2{
            background-color: #272727 !important; */
            color: white  !important;

        }
        .dark-theme h4{
            color: white  !important;
        }

        .dark-theme h4 span{
            color: white  !important;
        }
        .dark-theme .explore-nft {
            background-color: #343434;
        }
        .dark-theme .footer-logo img{
            box-shadow: 0px 0px 8px rgba(255,255,255,0.2);
        }
        .dark-theme .explore-nft-header h2{
            color:white;
        }
        .dark-theme .explore-nftbody .row .col-12 a div div h5{
            color: white  !important;
        }
        .dark-theme .explore-nftbody .row .col-12 a div div div span{
            color: white  !important;
        }
        .dark-theme .quiry-questions .card{
                background-color: #343434;
                border: 1px solid rgba(255,255,255,.125);
        }
        .dark-theme .contact-form{
            background-color: #343434;
            box-shadow:0px 0px 8px rgba(255,255,255,0.5)
        }

        /* body{
        text-align:center;
        }


        .mode {
            float:right;
            margin-top: 20px;
            margin-right: 20px;
        }
        .change {
            cursor: pointer;
            border: 1px solid #555;
            border-radius: 10%;
            width: 20px;
            text-align: center;
            padding: 8px;
            margin-left: 8px;
        }
        .dark{
            background-color: #222;

        } */

    </style>
</head>

<body class="{{ $theme . '-theme' }}" >

@yield('content')





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<!-- owl carousal jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })


    $('.owl-carousel2').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        dots: false,
        nav: false,
        autoplayTimeout:2000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
</script>
<!-- <script>
    var toggled = false;
    var circle = $("#circle");
    $("#toggle").click(function () {
    // $("h1, p, div").toggleClass("color-white");
    // $("body, div, li, nav").toggleClass("bck-color-black");
    if (!toggled) {
        circle.css("margin-left", "100px");
        toggled = true;
    } else {
        circle.css("margin-left", "1px");
        toggled = false;
    }
    });
</script> -->
<script>
var toggled = false;

var toggle = document.getElementById('theme-check');

var circle = document.getElementById('circle');
var body = document.getElementsByTagName('body')[0];
var nav = document.getElementsByTagName('nav')[0];
// var fot = document.getElementsByClassName('row')[0];
var back = document.getElementsByClassName('top-collection-main')[0];
var fot = document.getElementsByClassName('footer')[0];


var sun_class = 'icon-sun';
var moon_class = 'icon-moon';
var dark_theme_class = 'dark-theme';

function chnageTheme(obj){
    if(document.getElementById('theme-check').checked){
        body.classList.add(dark_theme_class);
        nav.classList.add(dark_theme_class);
       // back.classList.add(dark_theme_class);
      //  fot.classList.add(dark_theme_class);
        // toggle_icon.innerHTML = "light theme";
        setCookie('theme', 'dark');

    }
    else{
        body.classList.remove(dark_theme_class);
        nav.classList.remove(dark_theme_class);
      //  back.classList.remove(dark_theme_class);
        //fot.classList.remove(dark_theme_class);
        // toggle_icon.innerHTML = "dark theme";

        setCookie('theme', 'light');
    }
}


function setCookie(name, value) {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}


</script>



</body>

</html>

<!-- // $( ".change" ).on("click", function() {
        //     if( $( "body" ).hasClass( "dark" )) {
        //         $( "body" ).removeClass( "dark" );
        //         $( ".change" ).text( "OFF" );
        //     } else {
        //         $( "body" ).addClass( "dark" );
        //         $( ".change" ).text( "ON" );
        //     }
        // });  -->
<!-- this is comments for remember -->
