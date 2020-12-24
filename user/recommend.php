<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();

?>
<?php
include '../config.php';
$qj=mysqli_query($con,"select id,name from user_login where email='".$_SESSION['email']."'");
$tr=mysqli_fetch_array($qj);
$id=$tr['id'];
$nm=$tr['name'];
$d=date("d-m-y @ g:i A");

if(isset($_POST['sub'])){
extract($_POST);

if(($bs && $cb && $cp && $js)=='1' || (($bs && $cb && $cp)=='1' && $js=='0') || (($bs && $cb && $js)=='1' && $cp=='0') || (($bs && $js && $cp)=='1' && $cb=='0') || (($js && $cb && $cp)=='1' && $bs=='0')){

$sd='You will be a great software developer';
}
else{
$sd='You cannot be a software developer';
}

if(($db1 && $db2 && $dsa && $fom)=='1' || (($db1 && $db2 && $dsa)=='1' && $fom=='2') || (($db1 && $db2 && $fom)=='1' && $dsa=='0') || (($db1 && $dsa && $fom)=='1' && $db2=='0') || (($db2 && $dsa && $fom)=='1' && $db1=='0')){

$da='You will be a great Database Analyst';
}
else{
$da='You cannot be a Database Analyst';
}

if(($ts1 && $ts2 && $hm && $um)=='1' || (($ts1 && $ts2 && $hm)=='1' && $um=='0') || (($ts1 && $ts2 && $um)=='1' && $hm=='0') || (($ts1 && $hm && $um)=='1' && $ts1=='0') || (($ts2 && $hm && $um)=='1' && $ts1=='0')){

$ae='You will be a great Hardware Engineer';
}
else{
$ae='You cannot be a Hardware Engineer';
}

if(($op1 && $op2 && $mis && $isa)=='1' || (($op1 && $op2 && $mis)=='1' && $isa=='0') || (($op1 && $op2 && $isa)=='1' && $mis=='0') || (($op1 && $mis && $isa)=='1' && $op2=='0') || (($op2 && $mis && $isa)=='1' && $op1=='0')){

$rs='You will be a great Researcher';
}
else{
$rs='You cannot be a Researcher';
}

mysqli_query($con,"insert into recommendation(student_name,bs,cb,cp,js,db1,db2,dsa,fom,ts1,ts2,hm,um,op1,op2,mis,isa,date) values('$nm','$bs','$cb','$cp','$js','$db1','$db2','$dsa','$fom','$ts1','$ts2','$hm','$um','$op1','$op2','$mis','$isa','$d')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>AREA OF SPECIALIZATION DASHBOARD</title>
    
    <!-- Basic SEO -->
     <meta name="description" content="AREA OF SPECIALIZATION ">
    <meta name="keywords" content="AREA OF SPECIALIZATION ">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
   <?php
include "inc/header.php";
   ?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
   <?php
include "inc/sidebar.php";
   ?>     
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Recommend Now</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->


                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>RECOMMENDATION</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                     <div class="row p-t-20">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for OOBASIC :</label>
                                                    <select class="form-control custom-select" name="bs">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for OOCOBOL :</label>
                                                    <select class="form-control custom-select" name="cb">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for C++ :</label>
                                                    <select class="form-control custom-select" name="cp">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->

                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Java:</label>
                                                    <select class="form-control custom-select" name="js">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Database 1:</label>
                                                    <select class="form-control custom-select" name="db1">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>


                                          <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Database 2 :</label>
                                                    <select class="form-control custom-select" name="db2">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Data Structure and Algorithms :</label>
                                                    <select class="form-control custom-select" name="dsa">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->


                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for File Organisation and management :</label>
                                                    <select class="form-control custom-select" name="fom">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>


                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Computer Troubleshooting 1 :</label>
                                                    <select class="form-control custom-select" name="ts1">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Computer Troubleshooting 2 :</label>
                                                    <select class="form-control custom-select" name="ts2">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Basic Hardware Maintenance :</label>
                                                    <select class="form-control custom-select" name="hm">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Pc Upgrade and Maintenance :</label>
                                                    <select class="form-control custom-select" name="um">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Operation Research 1 :</label>
                                                    <select class="form-control custom-select" name="op1">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Operation Research 2 :</label>
                                                    <select class="form-control custom-select" name="op2">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>

<div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Management Information System :</label>
                                                    <select class="form-control custom-select" name="mis">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>

<div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Select grade for Introduction to System Analysis :</label>
                                                    <select class="form-control custom-select" name="isa">
                                                        <option value="1">A</option>
                                                        <option value="1">B</option>
                                                        <option value="0">C</option>
                                                        <option value="0">D</option>
                                                    </select>
                                                     </div>
                                            </div>


                                            <div class="offset-sm-4 col-md-9">
                                                        <button type="submit" class="btn btn-success" name="sub"> <i class="fa fa-check"></i> Recommend</button>
                                                       
                                                    </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->


                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>RECOMMENDATION</h4><hr/>

                                <p>



                        <p>
                        <span style="color:#3e0878;">
                            Recommendation 1 : 
                        </span>       
                        <span style="color:#0b154d;">
                           <?php echo $sd;  ?> 
                        </span>  
                            </p>

                            <p>
                        <span style="color:#3e0878;">
                            Recommendation 2 : 
                        </span>       
                        <span style="color:#0b154d;">
                           <?php echo $da;  ?> 
                        </span>  
                            </p>
                            <p>
                        <span style="color:#3e0878;">
                            Recommendation 3 : 
                        </span>       
                        <span style="color:#0b154d;">
                           <?php echo $ae;  ?> 
                        </span>  
                            </p>
                            <p>
                        <span style="color:#3e0878;">
                            Recommendation 4 : 
                        </span>       
                        <span style="color:#0b154d;">
                           <?php echo $rs;  ?> 
                        </span>  
                            </p>

                            </div>
                           

                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- End Container fluid  -->
                               
                                


<!-- FOOTER REGION -->
<?php
include "inc/footer.php";
?>

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>

</body>

</html>