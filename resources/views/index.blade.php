<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/gold.css')}}">
    <link rel="stylesheet" href="{{asset('css/babylon.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-icons.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="inc/img/logo4b.ico" type="image/x-icon">
    <title>Pastpr Tony Kapola</title>
    
</head>

<style>
    .vile1{
        background-color: #e9e2df;
         box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
         border: none;
         border-radius: 10px;
    }

    body{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff1e8; /* Initial background color */
        animation: glowAnimation 2s ease-in-out infinite alternate; /* Glowing animation */
        }

    @keyframes glowAnimation {
        0% {
            box-shadow: 0 0 10px 10px #fff; /* Initial glow effect */
        }
        100% {
            box-shadow: 0 0 50px 50px #fff; /* Final glow effect */
        }
        }

    .input-field>label {
        color: #607d8b;
    }

    .toast {
        background-color: transparent !important;
        padding: 0;
        line-height: 0.2em;
        box-shadow: none;
        padding: 10px;
    }

    @media only screen and (min-width: 993px) {
        #toast-container {
            top: 10%;
            right: 2%;
            max-width: 86%;
        }
    }

    .input-field.col label {
        top: 4px !important;
        left: 0 !important;
    }

    .input-field>label:not(.label-icon).active {
        transform: translateY(-5px) scale(0.8);
    }

    .input-field {
        margin-bottom: .5rem;
        margin-top: .2rem;
    }

    input[type=text]:not(.browser-default):focus.invalid~label {
        color: orangered !important;
    }

    /* input.invalid[type=text]:not(.browser-default):focus */
    input.invalid[type=text]:not(.browser-default) {
        border-bottom: 1px solid orangered !important;
        -webkit-box-shadow: 0 1px 0 0 orangered !important;
        box-shadow: 0 1px 0 0 orangered !important;
    }

    .input-field>label {
        color: #607d8b !important;
        margin-top: -5px;
    }



    input[type=text]:not(.browser-default):focus:not([readonly]) {
        border-bottom: 1px solid #607d8b !important;
        -webkit-box-shadow: 0 1px 0 0 #607d8b !important;
        box-shadow: 0 1px 0 0 #607d8b !important;
    }

    input[type=text]:not(.browser-default):focus:not([readonly])~label {
        color: #607d8b !important;
        font-weight: 600;
    }

    input[type=password]:not(.browser-default):focus:not([readonly]) {
        border-bottom: 1px solid #607d8b !important;
        -webkit-box-shadow: 0 1px 0 0 #607d8b !important;
        box-shadow: 0 1px 0 0 #607d8b !important;
    }

    input[type=password]:not(.browser-default):focus:not([readonly])~label {
        color: #607d8b !important;
        font-weight: 600;
    }



    @media only screen and (max-width: 600px) {

        p,
        label {
            font-size: 12px !important;
        }

        input[type=password]:not(.browser-default),
        input[type=text]:not(.browser-default),
        input[type=number]:not(.browser-default),
        input[type=email]:not(.browser-default) {
            height: 1.7rem;
        }





        .input-field {
            margin-bottom: 0 !important;
            margin-top: .7rem !important;
        }

        .input-field .prefix {
            top: 0rem;
        }

        .input-field>label {
            color: #607d8b !important;
            margin-top: -5px;
        }

        .input-field.col label {
            top: 0px !important;
            left: 0 !important;
        }

        .btn {
            font-size: 12px;
        }

        .login {
            height: 26px !important;
        }

    }
</style>



<body>
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

</body>

</html>