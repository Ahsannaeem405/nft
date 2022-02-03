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
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!-- <script src="{{asset('/js/dark-mode-switch.min.js')}}"></script> -->
    <!-- <script src="{{asset('/js/dark-mode-switch.js')}}"></script> -->

    <title>Buy and sell crypto</title>
     <style>
         
        body {
            color: black;
            background-color: white;
        }
        .dark-theme {
            color: white;
            background-color: black;
        } 
        .dark-theme div ul li a {
            color: white !important;
        }
        .dark-theme div  {
            color: white;
            background-color: black;
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




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous">

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
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
<script> 
var toggle_icon = document.getElementById('theme-toggle');

var body = document.getElementsByTagName('body')[0];
var nav = document.getElementsByTagName('nav')[0];
var fot = document.getElementsByClassName('row')[0];


var sun_class = 'icon-sun';
var moon_class = 'icon-moon';
var dark_theme_class = 'dark-theme';

toggle_icon.addEventListener('click', function() {
    
    if (body.classList.contains(dark_theme_class) && 
    nav.classList.contains(dark_theme_class)  ) {
        
        

        body.classList.remove(dark_theme_class);
        nav.classList.remove(dark_theme_class);
        toggle_icon.innerHTML = "dark theme";

        setCookie('theme', 'light');
    }
    else {
        
        
        body.classList.add(dark_theme_class);
        nav.classList.add(dark_theme_class);
        toggle_icon.innerHTML = "light theme";

        setCookie('theme', 'dark');
    }
    // if (nav.classList.contains(dark_theme_class)) {
    //     toggle_icon.classList.add(moon_class);
    //     toggle_icon.classList.remove(sun_class);

    //     nav.classList.remove(dark_theme_class);

    //     setCookie('theme', 'light');
    // }
    // else {
    //     toggle_icon.classList.add(sun_class);
    //     toggle_icon.classList.remove(moon_class);

    //     nav.classList.add(dark_theme_class);

    //     setCookie('theme', 'dark');
    // }

    // if (fot.classList.contains(dark_theme_class)) {
    //     toggle_icon.classList.add(moon_class);
    //     toggle_icon.classList.remove(sun_class);

    //     fot.classList.remove(dark_theme_class);

    //     setCookie('theme', 'light');
    // }
    // else {
    //     toggle_icon.classList.add(sun_class);
    //     toggle_icon.classList.remove(moon_class);

    //     fot.classList.add(dark_theme_class);

    //     setCookie('theme', 'dark');
    // }
});

function setCookie(name, value) {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

       
</script>  
<!-- // $( ".change" ).on("click", function() { 
        //     if( $( "body" ).hasClass( "dark" )) { 
        //         $( "body" ).removeClass( "dark" ); 
        //         $( ".change" ).text( "OFF" ); 
        //     } else { 
        //         $( "body" ).addClass( "dark" ); 
        //         $( ".change" ).text( "ON" ); 
        //     } 
        // });  -->

<!-- <script>
    var toggled = false;
    var circle = $("#circle");
    $("#toggle").click(function () {
    $("h1, p, div").toggleClass("color-white");
    $("body, div, li, nav").toggleClass("bck-color-black");
    if (!toggled) {
        circle.css("margin-left", "100px");
        toggled = true;
    } else {
        circle.css("margin-left", "1px");
        toggled = false;
    }
    });
</script> -->

</body>

</html>

