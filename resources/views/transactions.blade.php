

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/gold.css')}}">
    <link rel="stylesheet" href="{{asset('css/babylon.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-icons.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../inc/img/logo4b.ico" type="image/x-icon">
    <title>Company Management System</title>
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

                    <div class="divider" style="width: 80%; margin-left: 10%; margin-right: 10%; height: 2.5px;background-color: #9e9e9e; margin-top: -10px; margin-bottom: px;"></div>


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
                            <div class="act1  s12 m12">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">people</i>
                                    Partners
                                </p>
                            </div>
                        </a>

                        <a href="/transaction" class="grad-text">
                            <div class="act1  s12 m12 activee">
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
                            <a href="../system/index.html" class="grad-text">
                            <div class="act1  s12 m12 ">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">dashboard</i>
                                    Dashboard
                                </p>
                            </div>
                        </a>

                        <a href="../system/list-partners.html" class="grad-text">
                            <div class="act1  s12 m12">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">people</i>
                                    Partners
                                </p>
                            </div>
                        </a>

                        <a href="../system/transactions.html" class="grad-text">
                            <div class="act1  s12 m12 activee">
                                <p class="grad-text my-text ">
                                    <i class="material-icons left">monetization_on</i>
                                    Transactions
                                </p>
                            </div>
                        </a>

                         <a href="../system/reports.html" class="grad-text">
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

            <div class="maining">
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="containing" style="border-radius: 8px 8px 0 0; margin-top: 10px;">
                            <div class="vile1 card containing  " style="background:  rgba(196, 72, 72, 0.05); margin-left: 60%;">
                                <div class="vile1">
                                    <div class="container center-align ">
                                    <h4 style="font-weight: 600; padding-top: 15px;">Transaction Details</h4>
                                    <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <input id="search" type="text" class="validate">
                                            <label for="search">Search User</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field col s6">
                                            <input id="amount_paid" type="number" class="validate">
                                            <label for="amount_paid">Amount Paid</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="materials_submitted" type="text" class="validate">
                                            <label for="materials_submitted">Materials Submitted</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <select id="mode_of_submission">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="bank_transfer">Bank Transfer</option>
                                            <option value="mpesa">Mpesa</option>
                                            <option value="tigo_pesa">Tigo Pesa</option>
                                            <option value="lipa_number">Lipa Number</option>
                                            <option value="cash">Cash</option>
                                            </select>
                                            <label>Mode of Submission</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <button class="btn-flat white-text login hoverable blue-grey darken-3"
                                                id="" type="submit" name="submit"
                                                style="height: 30px;line-height: 25px;border-radius: 3px; margin-top: 10px;  background: linear-gradient(135deg,#ffa20c,#f92263) !important;">Sign
                                                Up
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </form>
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
    



    <script src="../inc/jquery.min.js"></script>
    <script src="../inc/materialize.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
        });
    </script>
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


        function utoast(valy) {
            M.toast({
                html: '<div class="my-box" style="background: rgba(0,0,0,.05); border-radius: 12px; padding: 12px !important"><p class="center red-text" style="font-weight:500 !important; font-size: 13px">' + valy + '</p></div>',
                classes: 'rounded',
                outDuration: 700,
                displayLength: 5000
            });
        }


        $(document).ready(function() {
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