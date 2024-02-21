<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="inc/materialize.min.css"> -->
    <!-- <link rel="stylesheet" href="inc/gold.css"> -->
    <!-- <link rel="stylesheet" href="inc/material-icons.css"> -->
    <!-- <link rel="stylesheet" href="inc/babylon.css"> -->
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
                                <div class="container" style="padding-bottom: 5px; text-align: center;" id="aziz">
                                    <img src="{{ asset('images/logo.png') }}" height="100" alt="" style="margin: 0 auto;">
                                    <h5 style="font-weight: 500; margin-top: 5px; color: #da6a27 !important;">PARTNERS LOGIN</h5>
                                </div>


                                    <div class="divider"
                                        style="width: 20%; margin-left: 40%; margin-right: 40%; height: 3px; background-color: #da6a27; margin-top: 0px; margin-bottom: 0px;">
                                    </div>
                                    <form method="post" action="{{ route('login') }}" name="login_form" name="login_form"
                                        autocomplete="off" enctype="multipart" class="">
                                        @csrf
                                        <div class="input-field a col s12 m12">
                                            <i class="material-icons prefix blue-grey-text darken-3">person_pin</i>
                                            <input type="text" id="username" name="email"
                                                class="validate blue-grey-text darken-3" required>
                                            <label for="username">Username or Email</label>
                                        </div>

                                        <div class="input-field a col s12 m12">
                                            <i class="material-icons prefix blue-grey-text darken-3">lock</i>
                                            <input type="password" id="password" name="password"
                                                class="validate blue-grey-text darken-3" required>
                                            <label for="password">Password</label>
                                        </div>

                                        <div class="center">
                                           <button class="btn-flat white-text login hoverable blue-grey darken-3"
                                                id="" type="submit" name="submit"
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


    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1JZ8MGdNxIHNVsihkOg8n4RL3Vjht6vQ&libraries=places"></script> -->
    <!-- <script src="inc/jquery.min.js"></script>
    <script src="inc/materialize.min.js"></script> -->

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset( 'js/materialize.min.js')}}"></script>


    <script>
        // $(function () {
        //     $('select').formSelect();
        //     $("#email_exists").hide();
        //     $("#email_invalid").hide();
        //     $("#email_empty").hide();


        //     $("#phone_exists").hide();
        //     $("#phone_empty").hide();

        //     $("#trno_exists").hide();
        //     $("#trno_empty").hide();

        //     $("#fullname_empty").hide();
        //     $("#title_empty").hide();

        //     $("#password_empty").hide();
        //     $("#cpassword_empty").hide();

        //     $("#aziza").hide();
        //     $("#aziz").show();
        // });

        // $("#list_in").on("click", function () {
        //     $("#aziz").hide();
        //     $("#aziza").show();
        // });
        // $("#icon_in").on("click", function () {
        //     $("#aziz").show();
        //     $("#aziza").hide();
        // });



        // function myFunc(e) {
        //     e.preventDefault();
        //     var fullname = $('#fullname').val();
        //     var id_no = $('#ID_no').val();
        //     var email = $('#email').val();
        //     var phone = $('#phone').val();
        //     var title = $('#title').val();
        //     var tr_no = $('#tr_no').val();
        //     var password = $('#password_reg').val();
        //     var cpassword = $('#cpassword_reg').val();

        //     if (email == "") {
        //         $("#email_empty").show();
        //     } else {
        //         $("#email_empty").hide();
        //     }

        //     if (id_no == "") {
        //         $("#ID_no_empty").show();
        //     } else {
        //         $("#ID_no_empty").hide();
        //     }

        //     if (phone == "") {
        //         $("#phone_empty").show();
        //     } else {
        //         $("#phone_empty").hide();
        //     }

        //     if (tr_no == "") {
        //         $("#trno_empty").show();
        //     } else {
        //         $("#trno_empty").hide();
        //     }

        //     if (fullname == "") {
        //         $("#fullname_empty").show();
        //     } else {
        //         $("#fullname_empty").hide();
        //     }

        //     if (title == "") {
        //         $("#title_empty").show();
        //     } else {
        //         $("#title_empty").hide();
        //     }

        //     if (password == "") {
        //         $("#password_empty").show();
        //     } else {
        //         $("#password_empty").hide();
        //     }
        //     if (cpassword == "") {
        //         $("#cpassword_empty").show();
        //     } else {
        //         $("#cpassword_empty").hide();
        //     }
            
        // }


       

//AIzaSyC1JZ8MGdNxIHNVsihkOg8n4RL3Vjht6vQ (api)
// window.addEventListener('load', () => {
//   getLocation();
// });

// function getLocation() {
//   if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(showPosition);
//   } else {
//     alert("Geolocation is not supported by this browser.");
//   }
// }

// function showPosition(position) {
//   const latitude = position.coords.latitude;
//   const longitude = position.coords.longitude;

//   // Call reverse geocoding API to get the address from latitude and longitude
//   fetch(`https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=AIzaSyC1JZ8MGdNxIHNVsihkOg8n4RL3Vjht6vQ`)
//     .then(response => response.json())
//     .then(data => {
//       const address = data.results[0].formatted_address;
//       const locationInput = document.getElementById('location');
//       locationInput.value = address;
//     })
//     .catch(error => console.log(error));
// }


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

  // You can use latitude and longitude to reverse geocode the location
  // Here, I'm just setting the value of the input field as an example
  const locationInput = document.getElementById('location');
  locationInput.value = `Latitude: ${latitude}, Longitude: ${longitude}`;
}

    </script>

</body>

</html>