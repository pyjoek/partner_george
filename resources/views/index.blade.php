<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/gold.css')}}">
    <link rel="stylesheet" href="{{asset('css/babylon.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/material-icons.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="inc/img/logo4b.ico" type="image/x-icon">
    <title>Pastpr Tony Kapola</title>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const countryNames = [
"Afghanistan",
  "Åland Islands",
  "Albania",
  "Algeria",
  "American Samoa",
  "Andorra",
  "Angola",
  "Anguilla",
  "Antarctica",
  "Antigua and Barbuda",
  "Argentina",
  "Armenia",
  "Aruba",
  "Australia",
  "Austria",
  "Azerbaijan",
  "Bahamas (the)",
  "Bahrain",
  "Bangladesh",
  "Barbados",
  "Belarus",
  "Belgium",
  "Belize",
  "Benin",
  "Bermuda",
  "Bhutan",
  "Bolivia (Plurinational State of)",
  "Bonaire, Sint Eustatius and Saba",
  "Bosnia and Herzegovina",
  "Botswana",
  "Bouvet Island",
  "Brazil",
  "British Indian Ocean Territory (the)",
  "Brunei Darussalam",
  "Bulgaria",
  "Burkina Faso",
  "Burundi",
  "Cabo Verde",
  "Cambodia",
  "Cameroon",
  "Canada",
  "Cayman Islands (the)",
  "Central African Republic (the)",
  "Chad",
  "Chile",
  "China",
  "Christmas Island",
  "Cocos (Keeling) Islands (the)",
  "Colombia",
  "Comoros (the)",
  "Congo (the Democratic Republic of the)",
  "Congo (the)",
  "Cook Islands (the)",
  "Costa Rica",
  "Croatia",
  "Cuba",
  "Curaçao",
  "Cyprus",
  "Czechia",
  "Côte d'Ivoire",
  "Denmark",
  "Djibouti",
  "Dominica",
  "Dominican Republic (the)",
  "Ecuador",
  "Egypt",
  "El Salvador",
  "Equatorial Guinea",
  "Eritrea",
  "Estonia",
  "Eswatini",
  "Ethiopia",
  "Falkland Islands (the) [Malvinas]",
  "Faroe Islands (the)",
  "Fiji",
  "Finland",
  "France",
  "French Guiana",
  "French Polynesia",
  "French Southern Territories (the)",
  "Gabon",
  "Gambia (the)",
  "Georgia",
  "Germany",
  "Ghana",
  "Gibraltar",
  "Greece",
  "Greenland",
  "Grenada",
  "Guadeloupe",
  "Guam",
  "Guatemala",
  "Guernsey",
  "Guinea",
  "Guinea-Bissau",
  "Guyana",
  "Haiti",
  "Heard Island and McDonald Islands",
  "Holy See (the)",
  "Honduras",
  "Hong Kong",
  "Hungary",
  "Iceland",
  "India",
  "Indonesia",
  "Iran (Islamic Republic of)",
  "Iraq",
  "Ireland",
  "Isle of Man",
  "Israel",
  "Italy",
  "Jamaica",
  "Japan",
  "Jersey",
  "Jordan",
  "Kazakhstan",
  "Kenya",
  "Kiribati",
  "Korea (the Democratic People's Republic of)",
  "Korea (the Republic of)",
  "Kuwait",
  "Kyrgyzstan",
  "Lao People's Democratic Republic (the)",
  "Latvia",
  "Lebanon",
  "Lesotho",
  "Liberia",
  "Libya",
  "Liechtenstein",
  "Lithuania",
  "Luxembourg",
  "Macao",
  "Madagascar",
  "Malawi",
  "Malaysia",
  "Maldives",
  "Mali",
  "Malta",
  "Marshall Islands (the)",
  "Martinique",
  "Mauritania",
  "Mauritius",
  "Mayotte",
  "Mexico",
  "Micronesia (Federated States of)",
  "Moldova (the Republic of)",
  "Monaco",
  "Mongolia",
  "Montenegro",
  "Montserrat",
  "Morocco",
  "Mozambique",
  "Myanmar",
  "Namibia",
  "Nauru",
  "Nepal",
  "Netherlands (the)",
  "New Caledonia",
  "New Zealand",
  "Nicaragua",
  "Niger (the)",
  "Nigeria",
  "Niue",
  "Norfolk Island",
  "Northern Mariana Islands (the)",
  "Norway",
  "Oman",
  "Pakistan",
  "Palau",
  "Palestine, State of",
  "Panama",
  "Papua New Guinea",
  "Paraguay",
  "Peru",
  "Philippines (the)",
  "Pitcairn",
  "Poland",
  "Portugal",
  "Puerto Rico",
  "Qatar",
  "Republic of North Macedonia",
  "Romania",
  "Russian Federation (the)",
  "Rwanda",
  "Réunion",
  "Saint Barthélemy",
  "Saint Helena, Ascension and Tristan da Cunha",
  "Saint Kitts and Nevis",
  "Saint Lucia",
  "Saint Martin (French part)",
  "Saint Pierre and Miquelon",
  "Saint Vincent and the Grenadines",
  "Samoa",
  "San Marino",
  "Sao Tome and Principe",
  "Saudi Arabia",
  "Senegal",
  "Serbia",
  "Seychelles",
  "Sierra Leone",
  "Singapore",
  "Sint Maarten (Dutch part)",
  "Slovakia",
  "Slovenia",
  "Solomon Islands",
  "Somalia",
  "South Africa",
  "South Georgia and the South Sandwich Islands",
  "South Sudan",
  "Spain",
  "Sri Lanka",
  "Sudan (the)",
  "Suriname",
  "Svalbard and Jan Mayen",
  "Sweden",
  "Switzerland",
  "Syrian Arab Republic",
  "Taiwan (Province of China)",
  "Tajikistan",
  "Tanzania, United Republic of",
  "Thailand",
  "Timor-Leste",
  "Togo",
  "Tokelau",
  "Tonga",
  "Trinidad and Tobago",
  "Tunisia",
  "Turkey",
  "Turkmenistan",
  "Turks and Caicos Islands (the)",
  "Tuvalu",
  "Uganda",
  "Ukraine",
  "United Arab Emirates (the)",
  "United Kingdom of Great Britain and Northern Ireland (the)",
  "United States Minor Outlying Islands (the)",
  "United States of America (the)",
  "Uruguay",
  "Uzbekistan",
  "Vanuatu",
  "Venezuela (Bolivarian Republic of)",
  "Viet Nam",
  "Virgin Islands (British)",
  "Virgin Islands (U.S.)",
  "Wallis and Futuna",
  "Western Sahara",
  "Yemen",
  "Zambia",
  "Zimbabwe"
      ];

      const inputField = document.getElementById('country');
      const dataList = document.createElement('datalist');
      dataList.id = 'countryList';
      inputField.setAttribute('list', 'countryList');
      inputField.parentNode.appendChild(dataList);

      function suggestCountries() {
        const input = inputField.value.toLowerCase();
        const options = [];

        countryNames.forEach(country => {
          if (country.toLowerCase().startsWith(input)) {
            options.push(country);
          }
        });

        const dataList = document.getElementById('countryList');
        dataList.innerHTML = ''; // Clear previous options

        options.forEach(option => {
          const optionElement = document.createElement('option');
          optionElement.value = option;
          dataList.appendChild(optionElement);
        });
      }

      inputField.addEventListener('input', suggestCountries);
    });
  </script>
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
                                    <form method="post" action="/store" autocomplete="off" enctype="multipart" class="form">
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
                                            <!-- <i class="material-icons prefix blue-grey-text darken-3">location_city</i> -->
                                            <input type="text" id="location" name="location" placeholder="Enter your location" hidden>
                                            <!-- <label>Nationality</label> -->
                                        </div>
                                        <div class="row">
                                            <div class="input-field a col s12 m6">
                                                <i class="material-icons prefix blue-grey-text darken-3">location_on</i>
                                                <input type="text" id="country" class="autocomplete" name="country" class="validate blue-grey-text darken-3" >
                                                <label for="country">Country</label>
                                                </div>
                                              
                                                                        
                                        
                                        
                                            <!-- <input type="text" id="country" name="country"
                                                class="validate blue-grey-text darken-3" >
                                            <label for="country">Country</label>
                                        </div> -->
                                        <div class="input-field a col s12 m6">
                                            <i class="material-icons prefix blue-grey-text darken-3">landscape</i>
                                            <input type="text" id="region" name="region"
                                                class="validate blue-grey-text darken-3" >
                                            <label for="region">City / Region</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field a col s12 m5">
                                            <i class="material-icons prefix blue-grey-text darken-3">format_list_numbered</i>
                                            <input type="number" id="amount" name="amount"
                                                class="validate blue-grey-text darken-3" >
                                            <label for="amount">Amount</label>
                                        </div>
                                        <div class="input-field a col s12 m7">
                                            <i class="material-icons prefix blue-grey-text darken-3">widgets</i>
                                            <input type="text" id="material" name="material"
                                                class="validate blue-grey-text darken-3" >
                                            <label for="material">Material</label>
                                        </div>
                                        </div>
                                        <div class="input-field a col s12 m12">
                                            <i class="material-icons prefix blue-grey-text darken-3">date_range</i>
                                            <input type="number" id="duration" name="duration"
                                                class="validate blue-grey-text darken-3"  Placeholder="Insert number of weeks">
                                            <label for="duration">Duration</label>
                                        </div>
                                        <div style="clear: both" class="center">
                                            <button class="btn-flat white-text login hoverable blue-grey darken-3"
                                                type="submit" onclick="myFunc(event)"
                                                style="height: 30px;line-height: 25px;border-radius: 3px; margin-top: 10px;  background: linear-gradient(135deg,#ffa20c,#f92263) !important;">SUBMIT
                                                
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