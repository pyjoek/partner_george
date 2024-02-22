<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/gold.css')}}">
    <link rel="stylesheet" href="{{asset('css/babylon.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-icons.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="inc/img/logo4b.ico" type="image/x-icon">
    <title>Pastor Tony</title>
</head>

<body class="scrollspy">

    <div class="s-layout">
        <!-- Sidebar -->
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
                            <div class="act1  s12 m12 activee">
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
                            <a href="../system/index.html" class="grad-text">
                            <div class="act1  s12 m12 activee">
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
                            <div class="act1  s12 m12">
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

                <div class="" style="border-radius: 8px 8px 0 0; margin-top: 10px;">
                    <div class="" style="height:40px"></div>
                    <div class="row">
                        <div class="col s12" style="padding: 15px 0px;">
                            <div class="container">
                                <div class="my-box-1  white-text downingg center  "
                                    style="background: rgba(0,0,0,0.05); border-radius: 12PX;">
                                    <div class="act3">
                                        <div class="card-header2 bgg chart-container">
                                            <canvas id="chart"></canvas>
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
        $(document).ready(function () {
            $('.modal').modal();
            $('.sidenav').sidenav();
            $('.dropdown-trigger').dropdown();
            $('.sidenav').sidenav();
            $('.tooltipped').tooltip();
        });

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, "");
        });

        function utoast(valy) {
            M.toast({
                html: '<div class="my-box" style="background: rgba(0,0,0,.05); border-radius: 12px; padding: 12px !important"><p class="center red-text" style="font-weight:500 !important; font-size: 13px">' + valy + '</p></div>',
                classes: 'rounded',
                outDuration: 700,
                displayLength: 5000
            });
        }
    </script>


</body>

</html>