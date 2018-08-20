<?php
  include("auth.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }
    </style>
    <!--<script type="text/javascript">
    $(document).ready(function () {

        var GroupIDs = [];
        var CustomerID = "AD_CLIENT1";
        GroupIDs[0] = CustomerID;
        var jsonData = JSON.stringify({ GroupIDs: GroupIDs });
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "Functions/LoadStartup.asmx/LoadCurrentFeeders",
            data: jsonData,
            dataType: "json",
            success: function (result) {
                var m = 0;
              //alert(result[0].groupIDs);
                //document.getElementById('hdnGroupIDs').value = "" + result[0].groupIDs;
                var totalmid = ""; var totalMnid = "";
                //document.getElementById("CustLogo").src = "assets/images/Client" + $('#CustID').val() + ".png"
              
                
                $.each(result.d, function (key, value) {
                    $('#loadfeeders').append($("<option></option>").val(value.Value).html(value.Name));
                    
                });

                if(alert) {
                    alert("feeders requested!");
                  }

                });
                
               
            }
        });
    </script>-->
  </head>
  <body class="app">
    <!-- @TOC -->
    <!-- =================================================== -->
    <!--
      + @Page Loader
      + @App Content
          - #Left Sidebar
              > $Sidebar Header
              > $Sidebar Menu

          - #Main
              > $Topbar
              > $App Screen Content
    -->

    <!-- @Page Loader -->
    <!-- =================================================== -->
    <div id='loader'>
      <div class="spinner"></div>
    </div>

    <script>
      window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
          loader.classList.add('fadeOut');
        }, 300);
      });
    </script>

    <!-- @App Content -->
    <!-- =================================================== -->
    <div>
      <!-- #Left Sidebar ==================== -->
      <div class="sidebar">
        <div class="sidebar-inner">
          <!-- ### $Sidebar Header ### -->
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed"><span style="font-family: 'Cooper Black';color:royalblue;font-size: 2em;">AD</span><span style="font-family: 'Cooper Black';color:green;font-size: 2em;">SMART</span>
                <a class="sidebar-link td-n" href="index.html">
                  <div class="peers ai-c fxw-nw logo">
                    <!--<div class="peer logo">
                      <div class="logo">-->
                        <!--<img src="assets/static/images/logo.png" alt="">-->
                      <!--</div>
                    </div>-->
                    <div class="peer peer-greed">
                      <!--<h5 class="lh-1 mB-0 logo-text">ADSMART</h5>-->
                      
                    </div>
                  </div>
                </a>
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n">
                    <i class="ti-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- ### $Sidebar Menu ### -->
          <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Dashboard</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>

                  <a class='sidebar-link' href="basic-table.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-stats-up"></i>
                  </span>
                  <span class="title">Live DB</span>
                  </a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-pie-chart"></i>
                  </span>
                  <span class="title">Group DB</span>
                  </a>
                                   
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 fa-bar-chart"></i>
                  </span>
                  <span class="title">Projection View</span>
                  </a>
                  
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 fa-tachometer"></i>
                  </span>
                  <span class="title">Live Status</span>
                  </a>               
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 fa-map-marker"></i>
                  </span>
                  <span class="title">AD-Map</span>
                  </a>               
                  
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-bolt"></i>
                </span>
                <span class="title">CERA Reports</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-clipboard"></i>
                  </span>
                  <span class="title">Feeder Wise</span>
                  </a>  
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-clipboard"></i>
                  </span>
                  <span class="title">Group Wise</span>
                  </a> 
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-clipboard"></i>
                </span>
                <span class="title">Reports</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-clipboard"></i>
                  </span>
                  <span class="title">Instantaneous reports</span>
                  </a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-clipboard"></i>
                  </span>
                  <span class="title">Utility Reports</span>
                  </a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-clipboard"></i>
                  </span>
                  <span class="title">Energy Reports</span>
                  </a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-clipboard"></i>
                  </span>
                  <span class="title">Analysis Reports</span>
                  </a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-clipboard"></i>
                  </span>
                  <span class="title">Other Reports</span>
                  </a>
                </li>
              </ul>
            </li>
             <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-settings"></i>
                </span>
                <span class="title">Settings</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-settings"></i>
                  </span>
                  <span class="title">Client Settings</span>
                  </a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-settings"></i>
                  </span>
                  <span class="title">Meter Settings</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-bell"></i>
                </span>
                <span class="title">Alerts</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 fa fa-whatsapp"></i>
                  </span>
                  <span class="title">Whatsapp</span>
                  </a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-comment"></i>
                  </span>
                  <span class="title">Message</span>
                  </a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">
                  <span class="icon-holder">
                  <i class="c-indigo-500 ti-email"></i>
                  </span>
                  <span class="title">Email</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="signin.html">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-user"></i>
                </span>
                <span class="title">Login</span>
              </a>
            </li>
            <!--<li class="nav-item">
              <a class='sidebar-link' href="email.html">
                <span class="icon-holder">
                  <i class="c-brown-500 ti-email"></i>
                </span>
                <span class="title">Email</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="compose.html">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-share"></i>
                </span>
                <span class="title">Compose</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="calendar.html">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-calendar"></i>
                </span>
                <span class="title">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="chat.html">
                <span class="icon-holder">
                  <i class="c-deep-purple-500 ti-comment-alt"></i>
                </span>
                <span class="title">Chat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="charts.html">
                <span class="icon-holder">
                  <i class="c-indigo-500 ti-bar-chart"></i>
                </span>
                <span class="title">Charts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="forms.html">
                <span class="icon-holder">
                  <i class="c-light-blue-500 ti-pencil"></i>
                </span>
                <span class="title">Forms</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="sidebar-link" href="ui.html">
                <span class="icon-holder">
                    <i class="c-pink-500 ti-palette"></i>
                  </span>
                <span class="title">UI Elements</span>
              </a>
            </li>-->
            <!--<li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-orange-500 ti-layout-list-thumb"></i>
                </span>
                <span class="title">Tables</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="basic-table.html">Basic Table</a>
                </li>
                <li>
                  <a class='sidebar-link' href="datatable.html">Data Table</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-purple-500 ti-map"></i>
                  </span>
                <span class="title">Maps</span>
                <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="google-maps.html">Google Map</a>
                </li>
                <li>
                  <a href="vector-maps.html">Vector Map</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-red-500 ti-files"></i>
                  </span>
                <span class="title">Pages</span>
                <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="blank.html">Blank</a>
                </li>                 
                <li>
                  <a class='sidebar-link' href="404.html">404</a>
                </li>
                <li>
                  <a class='sidebar-link' href="500.html">500</a>
                </li>
                <li>
                  <a class='sidebar-link' href="signin.html">Sign In</a>
                </li>
                <li>
                  <a class='sidebar-link' href="signup.html">Sign Up</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-teal-500 ti-view-list-alt"></i>
                </span>
                <span class="title">Multiple Levels</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown">
                  <a href="javascript:void(0);">
                    <span>Menu Item</span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a href="javascript:void(0);">
                    <span>Menu Item</span>
                    <span class="arrow">
                      <i class="ti-angle-right"></i>
                    </span>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="javascript:void(0);">Menu Item</a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">Menu Item</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>-->
          </ul>
        </div>
      </div>

      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->
        <div class="header navbar">
          <div class="header-container">
            <ul class="nav-left">
              <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                  <i class="ti-menu"></i>
                </a>
              </li>
              <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                  <i class="search-icon ti-search pdd-right-10"></i>
                  <i class="search-icon-close ti-close pdd-right-10"></i>
                </a>
              </li>
              <li class="search-input">
                <input class="form-control" type="text" placeholder="Search...">
              </li>
              <li> 
                <div class="peer peer-greed">
                    <span>
                      <!--<span class="fw-500">Welcome to ADSMART</span>  -->                           
                    </span>                                                      
                </div>               
              <i class="nav-left" style="color: royalblue;font-weight:bold;font-size: 2em;">Welcome to ADSMART</i>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="notifications dropdown">
                <span class="counter bgc-red">3</span>
                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                  <i class="ti-bell"></i>
                </a>

                <!--<ul class="dropdown-menu">
                  <li class="pX-20 pY-15 bdB">
                    <i class="ti-bell pR-10"></i>
                    <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                  </li>
                  <li>
                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">John Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">post</span>
                              </span>
                            </span>
                            <p class="m-0">
                              <small class="fsz-xs">5 mins ago</small>
                            </p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class='peers fxw-n
                        +-w td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Moo Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">cover image</span>
                              </span>
                            </span>
                            <p class="m-0">
                              <small class="fsz-xs">7 mins ago</small>
                            </p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Lee Doe</span>
                              <span class="c-grey-600">commented on your <span class="text-dark">video</span>
                              </span>
                            </span>
                            <p class="m-0">
                              <small class="fsz-xs">10 mins ago</small>
                            </p>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a>
                    </span>
                  </li>
                </ul>
              </li>-->
              <li class="notifications dropdown">
                <span class="counter bgc-blue">3</span>
                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                  <i class="ti-email"></i>
                </a>

                <!--<ul class="dropdown-menu">
                  <li class="pX-20 pY-15 bdB">
                    <i class="ti-email pR-10"></i>
                    <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                  </li>
                  <li>
                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">Cera</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">5 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">Moo Doe</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">15 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">Lee Doe</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">25 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="email.html" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a>
                    </span>
                  </li>
                </ul>-->
              </li>
              <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                  <div class="peer mR-10">
                    <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                  </div>
                  <div class="peer">
                    <span class="fsz-sm c-grey-900"style="color:royalblue;font-weight: bold;"><?php echo $_SESSION['username']; ?>!</span>
                  </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-settings mR-10"></i>
                      <span>Setting</span>
                    </a>
                  </li>
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-user mR-10"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-email mR-10"></i>
                      <span>Messages</span>
                    </a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="logout.php" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-power-off mR-10"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6"></div>
              <div class="masonry-item  w-100">
                <div class="row gap-20">
                  <!-- #Toatl Visits ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Today Consumption</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span class="icon-holder">
                              <i class="fas fa-plug"></i>
                              </span>
                              <!--<span class="title">Whatsapp</span>
                            <span id="sparklinedash"></span>-->
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Total Page Views ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Today Cost</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span class="icon-holder">
                              <i class="fas fa-rupee-sign"></i>
                              </span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Unique Visitors ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Today Generation</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span class="icon-holder">
                              <i class="fas fa-bolt"></i>
                              </span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Bounce Rate ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Today Cost</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span class="icon-holder">
                              <i class="fas fa-rupee-sign"></i>
                              </span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-12">
                <!--Feeders-->
                <!--<div class="masonry-sizer col-md-6">
                  <div class="masonry-item  w-100">-->
                    <div class="row gap-20 col-md-12">
                      <div class="col-md-6">
                        
                        <h3 class="box-title"style="font-size: 1em;">Select Feeder :</h3>
                      
                        <select id="ddlFeederLivedb" style="background-color:White; border-radius:5px; width:250px">
                            <option value="7">PICHER BALL MILL OLD</option><option value="8">G/W DRYER-9&amp;10</option><option value="9">INSPECTION BOOTH-7</option><option value="11">GODREJ COMPRESSOR</option><option value="12">ESU</option><option value="15">PHASE 3 MAIN PCC AT REFIRE</option><option value="16">POP</option><option value="17">PHASE 3 DRYER 13</option><option value="18">G/W DRYER-3&amp;4</option><option value="19">HP PLANT 13</option><option value="20">PHASE 2 G/W DRYER-11</option><option value="21">HP PLANT 18&amp;19</option><option value="22">WIFI 18</option><option value="23">NEW SH/MH BALL MILL 8X10</option><option value="25">KOI SHUTTLE KILN 1 (FIELD)</option><option value="26">CASTING 13/14 PUMP</option><option value="27">GLAZE BALL MILL 7X7</option><option value="28">WIFI 24</option><option value="29">G/W DRYER 5&amp;6</option><option value="31">PITCHER BALL MILL NEW</option><option value="32">WIFI 28</option><option value="33">WIFI 29</option><option value="34">NEW ETP</option><option value="35">G/W DRYER 1&amp;2</option><option value="36">WIFI 32</option><option value="37">BEAM CASTING</option><option value="38">KOI SHUTTLE KILN 2 (FIELD)</option><option value="39">G/W DRYER-8</option><option value="40">WIFI 36</option><option value="41">MOULDING MAIN PANNEL</option><option value="42">CASTING 12/13 PUMP</option><option value="44">PHASE 2 G/W DRYER 12</option><option value="45">PHASE 4 LIGHTING</option><option value="46">INSPECTION BOOTH-8</option><option value="47">PH 3 SH/MH GSA OH &amp; PVC </option><option value="49">NEW CCS 1</option><option value="50">TNL KILN NDUSTNG BLWRS</option><option value="51">WIFI 47</option><option value="52">MOULDING DRYER 8</option><option value="53">WASHING PLANT</option><option value="54">SH/MH BLUNGER MAIN PANEL</option><option value="55">R&amp;D BOREWELL</option><option value="56">MOULDING NEW CHILLER PLANT</option><option value="57">PHASE 3 ROBOT</option><option value="58">WIFI 54</option><option value="61">GLAZING OLD ROBOT</option><option value="62">TB PLANT</option><option value="65">WIFI 61</option><option value="66">ACCOUNTS</option><option value="69">PHASE 2 SH/MH</option><option value="70">WIFI 66</option><option value="71">PHASE 3 SH/MH BALLMILL</option><option value="72">PHASE 3 DRYER 14</option><option value="73">WIFI 69</option><option value="75">NEW CCS 2</option><option value="76">MOULDING DRYER 5 6 7</option><option value="77">NEW R&amp;D</option><option value="78">G/W DRYER-7</option><option value="79">WIFI 75</option><option value="80">NEW TIME OFFICE</option><option value="81">NEW SLIP HOUSE (FIELD)</option><option value="82">WIFI 78</option><option value="83">GLAZE PRE PANEL</option><option value="85">TRANSFORMER -3</option><option value="86">TRANSFORMER -5</option><option value="87">TRANSFORMER -2</option><option value="88">TRANSFORMER -1</option><option value="89">TRANSFORMER -4</option><option value="90">HT MAIN FEEDER</option><option value="91">COMPRESSOR - 9</option><option value="92">COMPRESSOR - 6</option><option value="93">COMPRESSOR -7</option><option value="94">O/G PHASE -4 HP PLANT</option><option value="95">KOI(S/K)</option><option value="96">GLAZE HP PLNT NO.9A/10A</option><option value="97">BEAM CASTING(1)</option><option value="98">SH/MH PHASE -2</option><option value="99">GFC SHUTTLE KILN </option><option value="100">COMPRESSOR -1</option><option value="101">COMPRESSOR -2</option><option value="102">COMPRESSOR -3</option><option value="103">HP PLNT 5-6-7 1&amp;2nd FLR</option><option value="104">GFC TUNNEL KILN</option><option value="105">COPRESSOR -4</option><option value="106">COPRESSOR -5</option><option value="107">SPARE</option><option value="108">COPRESSOR -8</option><option value="109">FACTORY LIGHTING</option><option value="110">SPARE -1</option></select>
                        </div>
                        <div class="col-md-3">
                          
                        <h3 class="box-title" style="font-size: 1em;">Select Parameter :</h3>
                        <select id="ddlparamsdashboard" onchange="getSelectedValue();" style="background-color:White; border-radius:5px;">
                            <option value="0">Basic Params</option>
                            <option value="1">Power Params</option>
                            <option value="2">Energy Params</option>
                            
                        </select>
                      </div>
                      <div col-md-3>
                      
                        <h3 class="box-title" style="font-size: 1em;">Select Chart Type</h3>
                        <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                            <button type="button" id="btnarea" class="btn btn-default btn-xs active" data-toggle="on">Area</button>
                            <button type="button" id="btnline" class="btn btn-default btn-xs active" data-toggle="off">Line</button>
                            <button type="button" id="btnbar" class="btn btn-default btn-xs active" data-toggle="off">Bar</button>
                        </div>
                      </div>
                    </div>
                  
                <!--</div></div>-->
                <!--graphs-->
                <!-- #Site Visits ==================== -->
                <!--<div class="bd bgc-white">
                  <div class="peers fxw-nw@lg+ ai-s">
                    <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                      <div class="layers">
                        <div class="layer w-100 mB-10">
                          <h6 class="lh-1">Site Visits</h6>
                        </div>
                        <div class="layer w-100">
                          <div id="world-map-marker"></div>
                        </div>
                      </div>
                    </div>
                    <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
                      <div class="layers">
                        <div class="layer w-100">-->
                          <!-- Progress Bars -->
                          <!--<div class="layers">
                            <div class="layer w-100">
                              <h5 class="mB-5">100k</h5>
                              <small class="fw-600 c-grey-700">Visitors From USA</small>
                              <span class="pull-right c-grey-600 fsz-sm">50%</span>
                              <div class="progress mT-10">
                                <div class="progress-bar bgc-deep-purple-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span></div>
                              </div>
                            </div>
                            <div class="layer w-100 mT-15">
                              <h5 class="mB-5">1M</h5>
                              <small class="fw-600 c-grey-700">Visitors From Europe</small>
                              <span class="pull-right c-grey-600 fsz-sm">80%</span>
                              <div class="progress mT-10">
                                <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">80% Complete</span></div>
                              </div>
                            </div>
                            <div class="layer w-100 mT-15">
                              <h5 class="mB-5">450k</h5>
                              <small class="fw-600 c-grey-700">Visitors From Australia</small>
                              <span class="pull-right c-grey-600 fsz-sm">40%</span>
                              <div class="progress mT-10">
                                <div class="progress-bar bgc-light-blue-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> <span class="sr-only">40% Complete</span></div>
                              </div>
                            </div>
                            <div class="layer w-100 mT-15">
                              <h5 class="mB-5">1B</h5>
                              <small class="fw-600 c-grey-700">Visitors From India</small>
                              <span class="pull-right c-grey-600 fsz-sm">90%</span>
                              <div class="progress mT-10">
                                <div class="progress-bar bgc-blue-grey-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">90% Complete</span></div>
                              </div>
                            </div>
                          </div>-->

                          <!-- Pie Charts -->
                          <!--<div class="peers pT-20 mT-20 bdT fxw-nw@lg+ jc-sb ta-c gap-10">
                            <div class="peer">
                              <div class="easy-pie-chart" data-size='80' data-percent="75" data-bar-color='#f44336'>
                                <span></span>
                              </div>
                              <h6 class="fsz-sm">New Users</h6>
                            </div>
                            <div class="peer">
                              <div class="easy-pie-chart" data-size='80' data-percent="50" data-bar-color='#2196f3'>
                                <span></span>
                              </div>
                              <h6 class="fsz-sm">New Purchases</h6>
                            </div>
                            <div class="peer">
                              <div class="easy-pie-chart" data-size='80' data-percent="90" data-bar-color='#ff9800'>
                                <span></span>
                              </div>
                              <h6 class="fsz-sm">Bounce Rate</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">-->
                <!-- #Monthly Stats ==================== -->
                <!--<div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100 pX-20 pT-20">
                      <h6 class="lh-1">Monthly Stats</h6>
                    </div>
                    <div class="layer w-100 p-20">
                      <canvas id="line-chart" height="220"></canvas>
                    </div>
                    <div class="layer bdT p-20 w-100">
                      <div class="peers ai-c jc-c gapX-20">
                        <div class="peer">
                          <span class="fsz-def fw-600 mR-10 c-grey-800">10% <i class="fa fa-level-up c-green-500"></i></span>
                          <small class="c-grey-500 fw-600">APPL</small>
                        </div>
                        <div class="peer fw-600">
                          <span class="fsz-def fw-600 mR-10 c-grey-800">2% <i class="fa fa-level-down c-red-500"></i></span>
                          <small class="c-grey-500 fw-600">Average</small>
                        </div>
                        <div class="peer fw-600">
                          <span class="fsz-def fw-600 mR-10 c-grey-800">15% <i class="fa fa-level-up c-green-500"></i></span>
                          <small class="c-grey-500 fw-600">Sales</small>
                        </div>
                        <div class="peer fw-600">
                          <span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span>
                          <small class="c-grey-500 fw-600">Profit</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">-->
                <!-- #Todo ==================== -->
                <!--<div class="bd bgc-white p-20">
                  <div class="layers">
                    <div class="layer w-100 mB-10">
                      <h6 class="lh-1">Todo List</h6>
                    </div>
                    <div class="layer w-100">
                      <ul class="list-task list-group" data-role="tasklist">
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall1" class=" peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Call John for Dinner</span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall2" class=" peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Book Boss Flight</span>
                              <span class="peer">
                                <span class="badge badge-pill fl-r badge-success lh-0 p-10">2 Days</span>
                              </span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall3" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall3" class=" peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Hit the Gym</span>
                              <span class="peer">
                                <span class="badge badge-pill fl-r badge-danger lh-0 p-10">3 Minutes</span>
                              </span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall4" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall4" class=" peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Give Purchase Report</span>
                              <span class="peer">
                                <span class="badge badge-pill fl-r badge-warning lh-0 p-10">not important</span>
                              </span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall5" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall5" class=" peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Watch Game of Thrones Episode</span>
                              <span class="peer">
                                <span class="badge badge-pill fl-r badge-info lh-0 p-10">Tomorrow</span>
                              </span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall6" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall6" class=" peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Give Purchase report</span>
                              <span class="peer">
                                <span class="badge badge-pill fl-r badge-success lh-0 p-10">Done</span>
                              </span>
                            </label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">-->
                <!-- #Sales Report ==================== -->
                <!--<div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100 p-20">
                      <h6 class="lh-1">Sales Report</h6>
                    </div>
                    <div class="layer w-100">
                      <div class="bgc-light-blue-500 c-white p-20">
                        <div class="peers ai-c jc-sb gap-40">
                          <div class="peer peer-greed">
                            <h5>November 2017</h5>
                            <p class="mB-0">Sales Report</p>
                          </div>
                          <div class="peer">
                            <h3 class="text-right">$6,000</h3>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive p-20">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class=" bdwT-0">Name</th>
                              <th class=" bdwT-0">Status</th>
                              <th class=" bdwT-0">Date</th>
                              <th class=" bdwT-0">Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="fw-600">Item #1 Name</td>
                              <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Unavailable</span> </td>
                              <td>Nov 18</td>
                              <td><span class="text-success">$12</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #2 Name</td>
                              <td><span class="badge bgc-deep-purple-50 c-deep-purple-700 p-10 lh-0 tt-c badge-pill">New</span></td>
                              <td>Nov 19</td>
                              <td><span class="text-info">$34</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #3 Name</td>
                              <td><span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c badge-pill">New</span></td>
                              <td>Nov 20</td>
                              <td><span class="text-danger">-$45</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #4 Name</td>
                              <td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Unavailable</span></td>
                              <td>Nov 21</td>
                              <td><span class="text-success">$65</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #5 Name</td>
                              <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Used</span></td>
                              <td>Nov 22</td>
                              <td><span class="text-success">$78</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #6 Name</td>
                              <td><span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c badge-pill">Used</span> </td>
                              <td>Nov 23</td>
                              <td><span class="text-danger">-$88</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #7 Name</td>
                              <td><span class="badge bgc-yellow-50 c-yellow-700 p-10 lh-0 tt-c badge-pill">Old</span></td>
                              <td>Nov 22</td>
                              <td><span class="text-success">$56</span></td>
                            </tr>
                          </tbody>
                        </table>
                       </div>
                    </div>
                  </div>
                  <div class="ta-c bdT w-100 p-20">
                    <a href="#">Check all the sales</a>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">-->
                <!-- #Weather ==================== -->
                <!--<div class="bd bgc-white p-20">
                  <div class="layers">-->
                    <!-- Widget Title -->
                    <!--<div class="layer w-100 mB-20">
                      <h6 class="lh-1">Weather</h6>
                    </div>-->
                    <!-- Today Weather -->
                    <!--<div class="layer w-100">
                      <div class="peers ai-c jc-sb fxw-nw">
                        <div class="peer peer-greed">
                          <div class="layers">-->
                            <!-- Temprature -->
                            <!--<div class="layer w-100">
                              <div class="peers fxw-nw ai-c">
                                <div class="peer mR-20">
                                  <h3>32<sup>°F</sup></h3>
                                </div>
                                <div class="peer">
                                  <canvas class="sleet" width="44" height="44"></canvas>
                                </div>
                              </div>
                            </div>-->

                            <!-- Condition -->
                            <!--<div class="layer w-100">
                              <span class="fw-600 c-grey-600">Partly Clouds</span>
                            </div>
                          </div>
                        </div>
                        <div class="peer">
                          <div class="layers ai-fe">
                            <div class="layer">
                              <h5 class="mB-5">Monday</h5>
                            </div>
                            <div class="layer">
                              <span class="fw-600 c-grey-600">Nov, 01 2017</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->

                    <!-- Today Weather Extended -->
                    <!--<div class="layer w-100 mY-30">
                      <div class="layers bdB">
                        <div class="layer w-100 bdT pY-5">
                          <div class="peers ai-c jc-sb fxw-nw">
                            <div class="peer">
                              <span>Wind</span>
                            </div>
                            <div class="peer ta-r">
                              <span class="fw-600 c-grey-800">10km/h</span>
                            </div>
                          </div>
                        </div>
                        <div class="layer w-100 bdT pY-5">
                          <div class="peers ai-c jc-sb fxw-nw">
                            <div class="peer">
                              <span>Sunrise</span>
                            </div>
                            <div class="peer ta-r">
                              <span class="fw-600 c-grey-800">05:00 AM</span>
                            </div>
                          </div>
                        </div>
                        <div class="layer w-100 bdT pY-5">
                          <div class="peers ai-c jc-sb fxw-nw">
                            <div class="peer">
                              <span>Pressure</span>
                            </div>
                            <div class="peer ta-r">
                              <span class="fw-600 c-grey-800">1B</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->

                    <!-- Week Forecast -->
                    <!--<div class="layer w-100">
                      <div class="peers peers-greed ai-fs ta-c">
                        <div class="peer">
                          <h6 class="mB-10">MON</h6>
                          <canvas class="sleet" width="30" height="30"></canvas>
                          <span class="d-b fw-600">32<sup>°F</sup></span>
                        </div>
                        <div class="peer">
                          <h6 class="mB-10">TUE</h6>
                          <canvas class="clear-day" width="30" height="30"></canvas>
                          <span class="d-b fw-600">30<sup>°F</sup></span>
                        </div>
                        <div class="peer">
                          <h6 class="mB-10">WED</h6>
                          <canvas class="partly-cloudy-day" width="30" height="30"></canvas>
                          <span class="d-b fw-600">28<sup>°F</sup></span>
                        </div>
                        <div class="peer">
                          <h6 class="mB-10">THR</h6>
                          <canvas class="cloudy" width="30" height="30"></canvas>
                          <span class="d-b fw-600">32<sup>°F</sup></span>
                        </div>
                        <div class="peer">
                          <h6 class="mB-10">FRI</h6>
                          <canvas class="snow" width="30" height="30"></canvas>
                          <span class="d-b fw-600">24<sup>°F</sup></span>
                        </div>
                        <div class="peer">
                          <h6 class="mB-10">SAT</h6>
                          <canvas class="wind" width="30" height="30"></canvas>
                          <span class="d-b fw-600">28<sup>°F</sup></span>
                        </div>
                        <div class="peer">
                          <h6 class="mB-10">SUN</h6>
                          <canvas class="sleet" width="30" height="30"></canvas>
                          <span class="d-b fw-600">32<sup>°F</sup></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">-->
                <!-- #Chat ==================== -->
                <!--<div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100 p-20">
                      <h6 class="lh-1">Quick Chat</h6>
                    </div>
                    <div class="layer w-100">-->
                      <!-- Chat Box -->
                      <!--<div class="bgc-grey-200 p-20 gapY-15">-->
                        <!-- Chat Conversation -->
                        <!--<div class="peers fxw-nw">
                          <div class="peer mR-20">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/11.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div class="layers ai-fs gapY-5">
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>Lorem Ipsum is simply dummy text of</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>the printing and typesetting industry.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>Lorem Ipsum has been the industry's</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>-->

                        <!-- Chat Conversation -->
                        <!--<div class="peers fxw-nw ai-fe">
                          <div class="peer ord-1 mL-20">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/12.jpg" alt="">
                          </div>
                          <div class="peer peer-greed ord-0">
                            <div class="layers ai-fe gapY-10">
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>Heloo</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>??</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>-->
                      <!-- Chat Send -->
                      <!--<div class="p-20 bdT bgc-white">
                        <div class="pos-r">
                          <input type="text" class="form-control bdrs-10em m-0" placeholder="Say something...">
                          <button type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1">
                            <i class="fa fa-paper-plane-o"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>-->
              </div>
            </div>
          </div>
          <div>
             <p><a href="index.php">Home</a></p>
             <a href="logout.php">Logout here</a>
          </div>
        </main>
         
        <!-- ### $App Screen Footer ### -->
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
          <span>Copyright © 2017 Designed by Venlite Energy Ltd<a href="#" target='_blank' title="Colorlib"></a>. All rights reserved.</span>
        </footer>
      </div>
    </div>
  </body>
</html>
