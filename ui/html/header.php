<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign In</title>

    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../public/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../public/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../public/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../public/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: white;">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- Left side of Header i.e. Department Name -->
            <div class="col-md-1 column"> </div>
            <div class="navbar-header">
                <a href="http://ieor.iitb.ac.in">
                    <div class="medium-4 columns text-center">
                        <h2><b>IEOR Department<b></h2>
                        <!-- <img id = "header_image" ; alt="Meet Mentor" src="../logo.png" width="100%" height="100%"></a> -->
                    </div>
                </a>
            </div>

            <!-- Right side of Header i.e. SignUp -->
            <ul class="nav navbar-top-links navbar-right">

                <!-- <li class="dropdown">
                    <a href="signup.php"><button class ="btn btn-primary" ><b>Sign Up</b> </button></a>
                </li> -->

            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li><a href=""><i class="fa"></i><b>Your Profile</b></a></li> -->
                        <li>
                            <a href="#"><i class="fa"></i><b>Mentor Data</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href=""><i class="fa"></i><b> Your Mentors</b></a></li>
                                <li><a href=""><i class="fa"></i><b> Recommaned Mentors</b></a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li class="active"> -->
                        <li>
                            <a href="#"><i class="fa"></i><b>Mentorship Request</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href=""><i class="fa"></i><b> Accepted by Mentor</b></a></li>
                                <li><a href=""><i class="fa"></i><b> Rejected by Mentor</b></a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="logout.php"><button class ="btn btn-primary btn-sm btn-block" ><b>Log Out</b> </button></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
