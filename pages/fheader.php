<!DOCTYPE html>
<html lang="en">
<?php 

    session_start();
    if(is_null($_SESSION['username'])){
        header('Location: /c/pages/login.php'); 
    }
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>



 <script src="js/jquery.min.js"></script>
 
 


    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style> 
textarea {
    width: 50%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize:;
}

 div.ex3 {
          background-color:;
          overflow: scroll;
          white-space: nowrap;
          }
   

</style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">BITS Faculty Performance Index Framework</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo ''.$_SESSION['username'];?> </a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="faculty.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Result <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addresult1.php">Add Results</a>
                                </li>
                                <li>
                                    <a href="listresult.php">List Results</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                              
                       
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Projects Guided<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addproject.php">Add Project Details</a>
                                </li>
                                <li>
                                    <a href="listproject.php">List Project Details</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                              
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Event Conducted<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addevent.php">Add Events</a>
                                </li>
                                <li>
                                    <a href="listevents.php">List Events</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Event Attended<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addevent1.php">Add Events</a>
                                </li>
                                <li>
                                    <a href="listevents1.php">List Events</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Books Published<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addbooks.php">Add Books Published</a>
                                </li>
                                <li>
                                    <a href="listbooks.php">List Published</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-user "></i> Patents<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addpatents.php">Add Patents Details</a>
                                </li>
                                <li>
                                    <a href="listpatents.php">List Patents Details</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Administrative Activities<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addadministative.php">Add Administrative Details</a>
                                </li>
                                <li>
                                    <a href="listadministative.php">List Administrative Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Professional Body Membership<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addpbms.php">Add PBM Details</a>
                                </li>
                                <li>
                                    <a href="listpbms.php">List PBM Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Courses Undertaken <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addcourse.php">Add Course Details</a>
                                </li>
                                <li>
                                    <a href="listcourse.php">List Course Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Awards & Achievements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href=Addawards.php>Add Award Details</a>
                                </li>
                                <li>
                                    <a href="listawards.php">List Award Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Research Projects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addresearch.php">Add Research Project Details</a>
                                </li>
                                <li>
                                    <a href="listresearch.php">List Research Projects Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Research Papers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addpapers.php">Add Research Paper Details</a>
                                </li>
                                <li>
                                    <a href="listpapers.php">List Research Paper Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Articles Published<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addarticles.php">Add Articles Published Details</a>
                                </li>
                                <li>
                                    <a href="listarticles.php">List Published Article Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i> Student Enrichment Activities<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Addsea.php">Add SEA Details</a>
                                </li>
                                <li>
                                    <a href="listsea.php">List SEA Details</a>
                                </li>
                            </ul>
                        </li>
                       
                         <li>
                            <a href="viewscore.php"><i class="fa fa-user "></i> View Score<span class="fa arrow"></span></a>
                            
                        </li>
                       
                              
                              
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
