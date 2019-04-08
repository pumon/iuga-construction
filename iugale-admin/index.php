<?php
include('../config.php');
$quote=mysqli_query($conn,"Select * from quote");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>IUGALE-Construction</title>
        <link rel="shortcut icon" href="../images/logo.png">

        <!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="../custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="../css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="../css/custom.css" />
        <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        

        <!--End off Preloader -->

        <!-- Header -->
        <header>
           
            <nav class="navbar bootsnav">
                <!-- Top Search -->
                <div class="container">
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href=""><img class="logo" src="../images/nav-logo.png"  alt=""></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="index.php">Home</a></li>                    
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->

        <section>
            <div id="wrapper">
      
               <header class="header">
                 
                 <h1>Welcome Admin</h1>
           
               </header>
               
           </div>
       </section>

       <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2>People Who Contacted</h2>
                        </div>
                    </div>
                </div>
                <table>
  <thead>
    <tr>
      <th>SL.NO</th>
      <th>NAME</th>
      <th>EMAIL ID</th>
      <th>MESSAGE</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $count=1;
     while ($select_query_array=mysqli_fetch_array($quote)){
        echo "<tr>";
        echo "<td>".$count."</td>";
        echo "<td>".$select_query_array['name']."</td>";
        echo "<td>".$select_query_array['email']."</td>";
        echo "<td>".$select_query_array['message']."</td>";
        echo "</tr>";
        $count=$count+1;
     }
     ?>
  </tbody>
</table>
        </section>

        

       
        <!-- JavaScript -->
        <script src="../js/jquery-1.12.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <!-- Bootsnav js -->
        <script src="../js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="../js/isotope.js"></script>
        <script src="../js/isotope-active.js"></script>
        <script src="../js/jquery.fancybox.js?v=2.1.5"></script>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://rawgithub.com/soulwire/sketch.js/master/js/sketch.min.js'></script>
    </body>	
</html>	