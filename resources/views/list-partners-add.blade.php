<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/gold.css')}}">
    <link rel="stylesheet" href="{{asset('css/babylon.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-icons.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="inc/img/logo4b.ico" type="image/x-icon">
    <title>Company Management System</title>


    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/materialize.min.js')}}"></script>
</head>
<style>
    .toast {
        background-color: transparent;
        padding: 0;
        line-height: 0.2em;
        box-shadow: none;
    }

    @media only screen and (min-width: 993px) {
        #toast-container {
            top: 10%;
            right: 2%;
            max-width: 86%;
        }
    }

    .avatar-header {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        top: calc(-200px/3);
        left: 0%;
        position: relative;
        right: 50%;
        margin: 0 auto;
    }


    .card-profile .card-avatar {
        margin: -50px auto 0;
        border-radius: 50%;
        overflow: hidden;
        padding: 0;
        box-shadow: 0 16px 38px -12px rgb(0 0 0 / 56%), 0 4px 25px 0px rgb(0 0 0 / 12%), 0 8px 10px -5px rgb(0 0 0 / 20%);
    }

    .card-profile .card-avatar {
        max-width: 130px;
        max-height: 130px;
    }

    .card-profile {
        margin-top: 30px;
        text-align: center;
    }

    .card-profile .card-avatar img {
        width: 100%;
        height: auto;
        vertical-align: middle;
        border-style: none;
    }
</style>


<body class="scrollspy">
    <div class="s-layout">
        <div class="s-layout__sidebar hoverable z-depth-5 bg rasta">
            <nav class="s-sidebar__nav act0" style="-webkit-box-shadow:none !important; box-shadow: none !important;">
                <div class="">
                    <div class="center" style="margin-top: 30px;">
                        <img src="../inc/img/logo.png" alt="" class=" -img valign profile-image" width="50%">
                        <!-- <p class="center" style="font-size: 20px;">Company Name</p> -->
                    </div>

                    <div class="divider"
                        style="width: 80%; margin-left: 10%; margin-right: 10%; height: 2.5px;background-color: #9e9e9e; margin-top: -10px; margin-bottom: px;">
                    </div>


                    <div class="acthalf">
                        <a href="/dashboard" class="grad-text">
                            <div class="act1  s12 m12 ">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">dashboard</i>
                                    Dashboard
                                </p>
                            </div>
                        </a>

                        <a href="/people" class="grad-text">
                            <div class="act1  s12 m12 activee">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">people</i>
                                    Partners
                                </p>
                            </div>
                        </a>

                        <a href="/transaction" class="grad-text">
                            <div class="act1  s12 m12">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">monetization_on</i>
                                    Transactions
                                </p>
                            </div>
                        </a>

                         <a href="/reports" class="grad-text">
                            <div class="act1  s12 m12">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">description</i>
                                    Reports
                                </p>
                            </div>
                        </a>

                        <a href="#modalout" class="grad-text modal-trigger">
                            <div class="act1  s12 m12">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">open_in_new</i>
                                    <a href="/logout">Log Out</a>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

            </nav>

            <div id="modalout" class="modal logoutmodal"
                style="border-radius: 12px; margin-top: 15% !important; background-color: rgb(229,230,234); ">
                <div class="modal-content" style="padding: 6px;">
                    <h6 class="center blue-grey-text" style="font-size: 12px;">Are you sure you want to logout?</h6>
                    <div class="divider"
                        style="width: 60%; margin-left: 20%; margin-right: 20%; height: 3px;  background-color: teal; margin-top: 8px; margin-bottom: -12px;">
                    </div>

                </div>
                <div class="modal-footer"
                    style="height: fit-content; padding: 8px; background-color: rgb(229,230,234);">
                    <div class="container">
                        <div class="container center">
                            <a href="#!" class="modal-close btn-flat grad blue-grey-text"
                                style="text-transform: none; height: 25px; line-height: 26px;">No</a>
                            <a href="../index.html" class="modal-close btn-flat grad blue-grey-text"
                                style="text-transform: none; height: 25px; line-height: 26px;">Yes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="s-layout__content">

            <div class="maining">
                <div class="navbar-fixed">
                    <nav class="z-depth-1 hoverable"
                        style="background: rgba(177,177,156,1); box-shadow: 0 16px 24px 2px rgb(0 0 0 / 4%), 0 6px 30px 5px rgb(0 0 0 / 2%), 0 8px 10px -7px rgb(0 0 0 / 2%);">
                        <div class="cont001">
                            <div class="nav-wrapper">
                                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                                    <i class="material-icons medium">tune</i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>

                <!-- nav end -->
                <ul class="sidenav" id="mobile-nav" style="width:70%; background: rgb(229,230,234);">
                    <div class="only_siding">
                        <div class="center" style="padding: 16px 0 10px 0;height: 90px">
                            <img src="../inc/img/logo.png" alt="" class=" -img valign profile-image" width="150px"
                                height="60px">
                            <div class="divider"
                                style="width: 70%; margin-left: 15%; margin-right: 15%; height: 4px; background-color: grey;margin-top: 4px; margin-bottom: 0px;">
                            </div>

                        </div>

                        <div class="acthalf">
                            <a href="/dashboard" class="grad-text">
                            <div class="act1  s12 m12 ">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">dashboard</i>
                                    Dashboard
                                </p>
                            </div>
                        </a>

                        <a href="/people" class="grad-text">
                            <div class="act1  s12 m12 activee">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">people</i>
                                    Partners
                                </p>
                            </div>
                        </a>

                        <a href="/transaction" class="grad-text">
                            <div class="act1  s12 m12">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">monetization_on</i>
                                    Transactions
                                </p>
                            </div>
                        </a>

                         <a href="/reports" class="grad-text">
                            <div class="act1  s12 m12">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">description</i>
                                    Reports
                                </p>
                            </div>
                        </a>

                        <a href="#modalout" class="grad-text modal-trigger">
                            <div class="act1  s12 m12">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">open_in_new</i>
                                    Log Out
                                </p>
                            </div>
                        </a>
                        </div>
                    </div>
                </ul>

                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="containing" style="border-radius: 8px 8px 0 0; margin-top: 10px;">
                    <div style="background:  rgba(51 ,51 ,51,.05);">
                        <div class="col s12 m12">
                            
                            <div class="">
        <div class="container upp">
            <div class=" container">
                <div class="containing">
                    <div class="containing">
                        <div class="col m12 s12">
                            <div class="= card vile1">
                               
                                <div class="container" style="padding-bottom: 5px;" id="aziza">
                                    <div class="center">
                                        <img src="{{ asset('images/logo.png')}}" height="100" alt="">
                                        <!-- <img src="inc/img/logo.png" height="100" alt=""> -->
                                        <h5 class="center" style="font-weight: 500; margin-top: 5px; color: #da6a27 !important">
                                            PARTNER REGISTRATION FORM
                                        </h5>
                                    </div>

                                    <div class="divider"
                                        style="width: 20%; margin-left: 40%; margin-right: 40%; height: 3px; background-color: #da6a27; margin-top: 0px; margin-bottom: 0px;">
                                    </div>
                                    <form method="post" action="/store" autocomplete="off" enctype="multipart" class="">
                                        @csrf
                                        <div class="input-field a col s12 m12">
                                            <i class="material-icons prefix blue-grey-text darken-3">person_pin</i>
                                            <input type="text" id="fullname" name="fullname"
                                            class="validate blue-grey-text darken-3" >
                                            <label for="fullname">Full Name</label>
                                        </div>

                                        <div class="input-field a col s12 m12">
                                            <i class="material-icons prefix blue-grey-text darken-3">email</i>
                                            <input type="email" id="email" name="email"
                                                class="validate blue-grey-text darken-3" >
                                            <label for="email">Email</label>
                                        </div>

                                        <div class="input-field a col s12 m12">
                                            <i class="material-icons prefix blue-grey-text darken-3">phone</i>
                                            <input type="number" id="phone" name="phone"
                                                class="validate blue-grey-text darken-3" >
                                            <label for="phone">Phone</label>
                                        </div>
                                        <div class="input-field a col s12 m6"
                                            style="margin-top: .2rem;margin-bottom: 0;">
                                            <i class="material-icons prefix blue-grey-text darken-3">location_city</i>
                                            <label for="location">Your Location:</label>
                                            <input type="text" id="location" name="location" placeholder="Enter your location">
                                            <!-- <label>Nationality</label> -->
                                        </div>
                                        <div style="clear: both" class="center">
                                            <button class="btn-flat white-text login hoverable blue-grey darken-3"
                                                type="submit" onclick="myFunc(event)"
                                                style="height: 30px;line-height: 25px;border-radius: 3px; margin-top: 10px;  background: linear-gradient(135deg,#ffa20c,#f92263) !important;">Sign
                                                Up
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </form>



                                    <div class="divider" style="margin-top: 10px;"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @foreach ($errors->all() as $error)
                M.toast({html: '{{ $error }}', classes: 'red darken-2 rounded'});
            @endforeach
        });
    </script>
@endif


    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset( 'js/materialize.min.js')}}"></script>


    <script>
       
window.addEventListener('load', () => {
  getLocation();
});

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  const latitude = position.coords.latitude;
  const longitude = position.coords.longitude;
  const locationInput = document.getElementById('location');
  locationInput.value = `Latitude: ${latitude}, Longitude: ${longitude}`;
}

    </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-medium blue-grey" href="/">
            <i class="large material-icons">add</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>




    <script>
        const slider = document.querySelector('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 500,
            interval: 3000
        })

        function triggerM() {
            $('.modal1').modal({
                dismissible: true
            });
        }

        $(document).ready(function () {
            $('.carousel').carousel();
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
            });
            $('.modal').modal({
                dismissible: false
            });
            $('.dropdown-trigger').dropdown();
            $('.sidenav').sidenav();


        });
    </script>
</body>

</html>