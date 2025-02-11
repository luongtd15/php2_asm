<!-----------------------------------------------------------------------------------
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024
----------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="admin, dashboard, ecommerce, panel" />
    <meta name="description" content="Carrot - Admin.">
    <meta name="author" content="ashishmaraviya">

    <title>@yield('title')</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost/PHP2/asm/image/admin/favicon/favicon.ico">

    <!-- Icon CSS -->
    <link href="http://localhost/PHP2/asm/css/admin/vendor/materialdesignicons.min.css" rel="stylesheet">
    <link href="http://localhost/PHP2/asm/css/admin/vendor/remixicon.css" rel="stylesheet">
    <link href="http://localhost/PHP2/asm/css/admin/vendor/owl.carousel.min.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href='http://localhost/PHP2/asm/css/admin/vendor/datatables.bootstrap5.min.css' rel='stylesheet'>
    <link href='http://localhost/PHP2/asm/css/admin/vendor/responsive.datatables.min.css' rel='stylesheet'>
    <link href='http://localhost/PHP2/asm/css/admin/vendor/daterangepicker.css' rel='stylesheet'>
    <link href="http://localhost/PHP2/asm/css/admin/vendor/simplebar.css" rel="stylesheet">
    <link href="http://localhost/PHP2/asm/css/admin/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/PHP2/asm/css/admin/vendor/apexcharts.css" rel="stylesheet">
    <link href="http://localhost/PHP2/asm/css/admin/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet">

    <!-- Main CSS -->
    <link id="main-css" href="http://localhost/PHP2/asm/css/admin/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>



</head>

<body>
    <main class="wrapper sb-default ecom">
        <!-- Loader -->
        <div id="cr-overlay">
            <div class="loader"></div>
        </div>

        <!-- Header -->
        <header class="cr-header">
            <div class="container-fluid">
                <div class="cr-header-items">
                    <div class="left-header">
                        <a href="javascript:void(0)" class="cr-toggle-sidebar">
                            <span class="outer-ring">
                                <span class="inner-ring"></span>
                            </span>
                        </a>

                        <div class="header-search-box">
                            <div class="header-search-drop">
                                <a href="javascript:void(0)" class="open-search"><i class="ri-search-line"></i></a>
                                <form class="cr-search">
                                    <input class="search-input" type="text" placeholder="Search...">
                                    <a href="javascript:void(0)" class="search-btn"><i class="ri-search-line"></i>
                                    </a>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    <div class="right-header">
                        <div class="cr-right-tool cr-flag-drop language">
                            <div class="cr-hover-drop">
                                <div class="cr-hover-tool">
                                    <img class="flag" src="http://localhost/PHP2/asm/image/admin/flag/us.png" alt="flag">
                                </div>
                                <div class="cr-hover-drop-panel right">
                                    <ul>
                                        <li><a href="javascript:void(0)"><img class="flag" src="http://localhost/PHP2/asm/image/admin/flag/us.png"
                                                    alt="flag">English</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="http://localhost/PHP2/asm/image/admin/flag/in.png"
                                                    alt="flag">Hindi</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="http://localhost/PHP2/asm/image/admin/flag/de.png"
                                                    alt="flag"> Deutsch</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="http://localhost/PHP2/asm/image/admin/flag/it.png"
                                                    alt="flag">Italian</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="http://localhost/PHP2/asm/image/admin/flag/jp.png"
                                                    alt="flag">Japanese</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cr-right-tool apps">
                            <div class="cr-hover-drop">
                                <div class="cr-hover-tool">
                                    <i class="ri-apps-2-fill"></i>
                                </div>
                                <div class="cr-hover-drop-panel right">
                                    <h6 class="title">Apps</h6>
                                    <ul>
                                        <li><a href="javascript:void(0)"><img class="app" src="http://localhost/PHP2/asm/image/admin/apps/1.png"
                                                    alt="flag">English</a></li>
                                        <li><a href="javascript:void(0)"><img class="app" src="http://localhost/PHP2/asm/image/admin/apps/2.png"
                                                    alt="flag">Hindi</a></li>
                                        <li><a href="javascript:void(0)"><img class="app" src="http://localhost/PHP2/asm/image/admin/apps/3.png"
                                                    alt="flag"> Deutsch</a></li>
                                        <li><a href="javascript:void(0)"><img class="app" src="http://localhost/PHP2/asm/image/admin/apps/4.png"
                                                    alt="flag">Italian</a></li>
                                        <li><a href="javascript:void(0)"><img class="app" src="http://localhost/PHP2/asm/image/admin/apps/5.png"
                                                    alt="flag">Japanese</a></li>
                                        <li><a href="javascript:void(0)"><img class="app" src="http://localhost/PHP2/asm/image/admin/apps/6.png"
                                                    alt="flag">Japanese</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cr-right-tool display-screen">
                            <a class="cr-screen full" href="javascript:void(0)"><i
                                    class="ri-fullscreen-line"></i></a>
                            <a class="cr-screen reset" href="javascript:void(0)"><i
                                    class="ri-fullscreen-exit-line"></i></a>
                        </div>
                        <div class="cr-right-tool">
                            <a class="cr-notify" href="javascript:void(0)">
                                <i class="ri-notification-2-line"></i>
                                <span class="label"></span>
                            </a>
                        </div>
                        <div class="cr-right-tool display-dark">
                            <a class="cr-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
                            <a class="cr-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
                        </div>
                        <div class="cr-right-tool cr-user-drop">
                            <div class="cr-hover-drop">
                                <div class="cr-hover-tool">
                                    <img class="user" src="http://localhost/PHP2/asm/image/admin/user/1.jpg" alt="user">
                                </div>
                                <div class="cr-hover-drop-panel right">
                                    <div class="details">
                                        <h6>Wiley Waites</h6>
                                        <p>wiley@example.com</p>
                                    </div>
                                    <ul class="border-top">
                                        <li><a href="team-profile.html">Profile</a></li>
                                        <li><a href="faq.html">Help</a></li>
                                        <li><a href="chatapp.html">Messages</a></li>
                                        <li><a href="project-overview.html">Projects</a></li>
                                        <li><a href="team-update.html">Settings</a></li>
                                    </ul>
                                    <ul class="border-top">
                                        <li><a href="signin.html"><i class="ri-logout-circle-r-line"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- sidebar -->
        <div class="cr-sidebar-overlay"></div>
        <div class="cr-sidebar" data-mode="light">
            <div class="cr-sb-logo">
                <a href="http://localhost/PHP2/asm/admin" class="sb-full"><img src="http://localhost/PHP2/asm/image/admin/logo/full-logo.png" alt="logo"></a>
                <a href="http://localhost/PHP2/asm/admin" class="sb-collapse"><img src="http://localhost/PHP2/asm/image/admin/logo/collapse-logo.png" alt="logo"></a>
            </div>
            <div class="cr-sb-wrapper">
                <div class="cr-sb-content">
                    <ul class="cr-sb-list">
                        <li class="cr-sb-item sb-drop-item">
                            <a href="javascript:void(0)" class="cr-drop-toggle">
                                <i class="ri-dashboard-3-line"></i><span class="condense">Dashboard<i
                                        class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                            <ul class="cr-sb-drop condense">
                                <li><a href="http://localhost/PHP2/asm/admin/categories" class="cr-page-link drop"><i
                                            class="ri-checkbox-blank-circle-line"></i>Category list</a></li>
                                <li><a href="http://localhost/PHP2/asm/admin/products" class="cr-page-link drop"><i
                                            class="ri-checkbox-blank-circle-line"></i>Product list</a></li>
                                <li><a href="http://localhost/PHP2/asm/admin/" class="cr-page-link drop"><i
                                            class="ri-checkbox-blank-circle-line"></i>User list</a></li>
                                <li><a href="http://localhost/PHP2/asm/admin/" class="cr-page-link drop"><i
                                            class="ri-checkbox-blank-circle-line"></i>Comment list</a></li>
                                <li><a href="http://localhost/PHP2/asm/admin/" class="cr-page-link drop"><i
                                            class="ri-checkbox-blank-circle-line"></i></a></li>
                                <li><a href="http://localhost/PHP2/asm/admin/" class="cr-page-link drop"><i
                                            class="ri-checkbox-blank-circle-line"></i>Order List</a></li>

                                <!-- <li class="cr-sb-item sb-subdrop-item">
                                    <a href="javascript:void(0)" class="cr-sub-drop-toggle">
                                        <i class="ri-shield-user-line"></i><span class="condense">Vendor<i
                                                class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                                    <ul class="cr-sb-subdrop condense">
                                        <li><a href="vendor-profile.html" class="cr-page-link subdrop"><i
                                                    class="ri-checkbox-blank-circle-line"></i>Profile</a></li>
                                        <li><a href="vendor-update.html" class="cr-page-link subdrop"><i
                                                    class="ri-checkbox-blank-circle-line"></i>Vendor Update</a></li>
                                        <li><a href="vendor-list.html" class="cr-page-link subdrop"><i
                                                    class="ri-checkbox-blank-circle-line"></i>Vendor List</a></li>
                                        <li><a href="invoice.html" class="cr-page-link subdrop"><i
                                                    class="ri-checkbox-blank-circle-line"></i>Invoice</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>



                        <li class="cr-sb-item-separator"></li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Notify sidebar -->
        <div class="cr-notify-bar-overlay"></div>
        <div class="cr-notify-bar">
            <div class="cr-bar-title">
                <h6>Notifications<span class="label">12</span></h6>
                <a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
            </div>
            <div class="cr-bar-content">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
                            type="button" role="tab" aria-controls="alert" aria-selected="true">Alert</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                            type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button"
                            role="tab" aria-controls="log" aria-selected="false">Log</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
                        <div class="cr-alert-list">
                            <ul>
                                <li>
                                    <div class="icon cr-alert">
                                        <i class="ri-alarm-warning-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Your final report is overdue</div>
                                        <p class="time">Just now</p>
                                        <p class="message">Please submit your quarterly report before - June 15.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-warn">
                                        <i class="ri-error-warning-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Your product campaign is stop!</div>
                                        <p class="time">5:45AM - 25/05/2023</p>
                                        <p class="message">Please submit your quarterly report before Jun 15.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-success">
                                        <i class="ri-check-double-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Your payment is successfully processed</div>
                                        <p class="time">9:20PM - 19/06/2023</p>
                                        <p class="message">Check your account wallet. if there is any issue, create
                                            support ticket.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-warn">
                                        <i class="ri-error-warning-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Budget threshold exceeded!</div>
                                        <p class="time">4:15AM - 01/04/2023</p>
                                        <p class="message">Budget threshold was exceeded for project "Carrot" B612
                                            elements.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-warn">
                                        <i class="ri-close-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Project submission was decline!</div>
                                        <p class="time">4:15AM - 01/04/2023</p>
                                        <p class="message">Your project "B126" is declined by Theresa Mayeras.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon cr-success">
                                        <i class="ri-check-double-line"></i>
                                    </div>
                                    <div class="detail">
                                        <div class="title">Your payment is successfully processed</div>
                                        <p class="time">9:20PM - 19/06/2023</p>
                                        <p class="message">Check your account wallet. if there is any issue, create
                                            support ticket.</p>
                                    </div>
                                </li>
                                <li class="check"><a class="cr-primary-btn" href="chatapp.html">View all</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                        <div class="cr-message-list">
                            <ul>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="http://localhost/PHP2/asm/image/admin/user/9.jpg" alt="user">
                                        <span class="label online"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Boris Whisli</a>
                                        <p class="time">5:30AM, Today</p>
                                        <p class="message">Hello, I am sending some file. Please use this in landing
                                            page. And make sure this all files are comppress.</p>
                                        <span class="download-files">
                                            <span class="download">
                                                <img src="http://localhost/PHP2/asm/image/admin/other/1.jpg" alt="image">
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                            <span class="download">
                                                <img src="http://localhost/PHP2/asm/image/admin/other/2.jpg" alt="image">
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                            <span class="download">
                                                <span class="file">
                                                    <i class="ri-file-ppt-line"></i>
                                                </span>
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="http://localhost/PHP2/asm/image/admin/user/8.jpg" alt="user">
                                        <span class="label offline"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Frank N. Stein</a>
                                        <p class="time">8:30PM, 05/12/2023</p>
                                        <p class="message">Please take a look on landing page. There is some bus to open
                                            popup model. and save form data.</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="http://localhost/PHP2/asm/image/admin/user/7.jpg" alt="user">
                                        <span class="label busy"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Frank N. Stein</a>
                                        <p class="time">8:30PM, 05/12/2023</p>
                                        <p class="message">Please take a look on landing page. There is some bus to open
                                            popup model. and save form data.</p>
                                        <span class="download-files">
                                            <span class="download">
                                                <span class="file">
                                                    <i class="ri-file-zip-line"></i>
                                                </span>
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                            <span class="download">
                                                <span class="file">
                                                    <i class="ri-file-text-line"></i>
                                                </span>
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                            <span class="download">
                                                <span class="file">
                                                    <i class="ri-file-ppt-line"></i>
                                                </span>
                                                <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="http://localhost/PHP2/asm/image/admin/user/6.jpg" alt="user">
                                        <span class="label busy"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Paige Turner</a>
                                        <p class="time">4:30PM, 12/12/2023</p>
                                        <p class="message">Landing page issues are done. and now i am working on admin
                                            user module.</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="chatapp.html" class="reply">Reply</a>
                                    <div class="user">
                                        <img src="http://localhost/PHP2/asm/image/admin/user/5.jpg" alt="user">
                                        <span class="label busy"></span>
                                    </div>
                                    <div class="detail">
                                        <a href="chatapp.html" class="name">Allie Grater</a>
                                        <p class="time">8:30PM, 05/12/2023</p>
                                        <p class="message">Take marketing module task.</p>
                                    </div>
                                </li>
                                <li class="check"><a class="cr-primary-btn" href="chatapp.html">View all</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <div class="cr-activity-list activity-list">
                            <ul>
                                <li>
                                    <span class="date-time">8 Thu<span class="time">11:30 AM - 05:10 PM
                                        </span></span>
                                    <p class="title">Project Submitted from Smith</p>
                                    <p class="detail">Lorem Ipsum is simply dummy text of the printing and
                                        lorem is typesetting industry.</p>
                                    <span class="download-files">
                                        <span class="download">
                                            <img src="http://localhost/PHP2/asm/image/admin/other/1.jpg" alt="image">
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <img src="http://localhost/PHP2/asm/image/admin/other/2.jpg" alt="image">
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-ppt-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="date-time warn">7 Wed<span class="time">1:30 PM - 02:30 PM
                                        </span></span>
                                    <p class="title">Morgus pvt - project due</p>
                                    <p class="detail">Project modul delay for some bugs.</p>
                                    <span class="download-files">
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-zip-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-text-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <img src="http://localhost/PHP2/asm/image/admin/other/3.jpg" alt="image">
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="date-time">6 Tue<span class="time">9:30 AM - 11:00 AM
                                        </span></span>
                                    <p class="title">Interview for management dept.</p>
                                    <p class="detail">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form,
                                        by injected humour.</p>
                                    <span class="download-files">
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-zip-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-text-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                        <span class="download">
                                            <span class="file">
                                                <i class="ri-file-ppt-line"></i>
                                            </span>
                                            <a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="date-time">5 Mon<span class="time">3:30 AM - 4:00 PM
                                        </span></span>
                                    <p class="title">Meeting with mr. Ken doe</p>
                                    <p class="detail">The majority have suffered alteration in some form,
                                        by injected humour.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="copyright">
                    <p><span id="copyright_year"></span> © Carrot, All rights Reserved.</p>
                    <p>Design by MaraviyaInfotech.</p>
                </div>
            </div>
        </footer>

        <!-- Feature tools -->
        <div class="cr-tools-sidebar-overlay"></div>
        <div class="cr-tools-sidebar">
            <a href="javascript:void(0)" class="cr-tools-sidebar-toggle in-out">
                <i class="ri-settings-4-line"></i>
            </a>
            <div class="cr-bar-title">
                <h6>Tools</h6>
                <a href="javascript:void(0)" class="close-tools"><i class="ri-close-line"></i></a>
            </div>
            <div class="cr-tools-detail">
                <div class="cr-tools-block">
                    <h3>Sidebar</h3>
                    <div class="cr-tools-info">
                        <div class="cr-tools-item sidebar active" data-sidebar-mode-tool="light">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/side-light.png" alt="light">
                            <p>light</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="dark">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/side-dark.png" alt="dark">
                            <p>dark</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-1">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/side-bg-1.png" alt="background">
                            <p>Bg-1</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-2">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/side-bg-2.png" alt="background">
                            <p>Bg-2</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-3">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/side-bg-3.png" alt="background">
                            <p>Bg-3</p>
                        </div>
                        <div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-4">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/side-bg-4.png" alt="background">
                            <p>Bg-4</p>
                        </div>
                    </div>
                </div>
                <div class="cr-tools-block">
                    <h3>Header</h3>
                    <div class="cr-tools-info">
                        <div class="cr-tools-item header active" data-header-mode="light">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/header-light.png" alt="light">
                            <p>light</p>
                        </div>
                        <div class="cr-tools-item header" data-header-mode="dark">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/header-dark.png" alt="dark">
                            <p>dark</p>
                        </div>
                    </div>
                </div>
                <div class="cr-tools-block">
                    <h3>Backgrounds</h3>
                    <div class="cr-tools-info">
                        <div class="cr-tools-item bg active" data-bg-mode="default">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/bg-0.png" alt="default">
                            <p>Default</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-1">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/bg-1.png" alt="bg-1">
                            <p>Bg-1</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-2">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/bg-2.png" alt="bg-2">
                            <p>Bg-2</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-3">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/bg-3.png" alt="bg-3">
                            <p>Bg-3</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-4">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/bg-4.png" alt="bg-4">
                            <p>Bg-4</p>
                        </div>
                        <div class="cr-tools-item bg" data-bg-mode="bg-5">
                            <img src="http://localhost/PHP2/asm/image/admin/tools/bg-5.png" alt="bg-5">
                            <p>Bg-5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Vendor Custom -->
    <script src="http://localhost/PHP2/asm/js/admin/vendor/jquery-3.6.4.min.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/vendor/simplebar.min.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/vendor/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/vendor/apexcharts.min.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/vendor/owl.carousel.min.js"></script>
    <!-- Data Tables -->
    <script src='http://localhost/PHP2/asm/js/admin/vendor/jquery.datatables.min.js'></script>
    <script src='http://localhost/PHP2/asm/js/admin/vendor/datatables.bootstrap5.min.js'></script>
    <script src='http://localhost/PHP2/asm/js/admin/vendor/datatables.responsive.min.js'></script>
    <!-- Caleddar -->
    <script src="http://localhost/PHP2/asm/js/admin/vendor/jquery.simple-calendar.js"></script>
    <!-- Date Range Picker -->
    <script src="http://localhost/PHP2/asm/js/admin/vendor/moment.min.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/vendor/daterangepicker.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/vendor/date-range.js"></script>

    <!-- Main Custom -->
    <script src="http://localhost/PHP2/asm/js/admin/main.js"></script>
    <script src="http://localhost/PHP2/asm/js/admin/data/ecommerce-chart-data.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:34 GMT -->

</html>