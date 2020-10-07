<?php
session_start();
if(!isset($_SESSION['user']['email']))
{
header("Location:../index.html");    
    
}
require_once 'users.php';
$users = getUsers();
// print_r($users);
$from=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];

$count=1;
                          foreach ($users as $user):
            
                          if($user['to']==$from && $user['pread']==0)
                          {
                          $unread=$count++;
                          } 
                        endforeach;


$start_week = strtotime("last monday midnight");
$end_week = strtotime("+1 week",$start_week);

$start_week = date("Y/m/d",$start_week);
$end_week = date("Y/m/d",$end_week);

// echo $start_week.' '.$end_week ;
                          $count=1;
                          foreach ($users as $user):
            if (($user['date'] >= $start_week) && ($user['date'] <= $end_week)){
                          $unread1=$count++;
                          } 
                         
                        endforeach;
                        
                        
                        
                        $count=1;
                          foreach ($users as $user):
                              if (($user['date'] >= $start_week) && ($user['date'] <= $end_week && $user['day'] == 'Monday')){
                          $Monday=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['date'] >= $start_week) && ($user['date'] <= $end_week && $user['day'] == 'Tuesday')){
                          $Tuesday=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['date'] >= $start_week) && ($user['date'] <= $end_week && $user['day'] == 'Wednesday')){
                          $Wednesday=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['date'] >= $start_week) && ($user['date'] <= $end_week && $user['day'] == 'Thursday')){
                          $Thrusday=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['date'] >= $start_week) && ($user['date'] <= $end_week && $user['day'] == 'Friday')){
                          $Friday=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['date'] >= $start_week) && ($user['date'] <= $end_week && $user['day'] == 'Saturday')){
                          $Saturday=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['date'] >= $start_week) && ($user['date'] <= $end_week && $user['day'] == 'Sunday')){
                          $Sunday=$count++;
                          } 
                         
                        endforeach;
                        
                        
                        $count=1;
                          foreach ($users as $user):
                              if (($user['month'] >='01') && ($user['month'] <= '03')){
                          $Q1=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['month'] >='04') && ($user['month'] <= '06')){
                          $Q2=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['month'] >='07' && ($user['month'] <= '09'))){
                          $Q3=$count++;
                          } 
                         
                        endforeach;
                        $count=1;
                          foreach ($users as $user):
                              if (($user['month'] >='10') && ($user['month'] <= '12')){
                          $Q4=$count++;
                          } 
                         
                        endforeach;
                         $count=1;
                          foreach ($users as $user):
                          $year=$count++;
                          
                         
                        endforeach;
                        
                        
                        
                        
                
             

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/fav.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
 Taboola ShoutOut 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
  <link href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style style="text/css">
  
tr:hover {
    color: #fff;
    background-color:#002c79;
}

tr:hover td {
    color: #003399;
  
}

button{
     border:0;
     background:none;
     
}

      input { 
          border: none;
          }
                .my-custom-scrollbar {
position: relative;
height: 600px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;

}
.ct-series-a .ct-bar, .ct-series-a .ct-line, .ct-series-a .ct-point, .ct-series-a .ct-slice-donut{
    
        stroke: #f8f9fa;
}

.ct-chart-bar .ct-label.ct-horizontal.ct-end{
    
    color:#fff;
    font-weight:600;
}

.ct-label.ct-vertical.ct-start
{
    
    color:#fff;
    font-weight:600;
}

.card .card-header-danger .card-icon, .card .card-header-danger .card-text, .card .card-header-danger:not(.card-header-icon):not(.card-header-text), .card.bg-danger, .card.card-rotate.bg-danger .front, .card.card-rotate.bg-danger .back {
    background: linear-gradient(60deg, #715756, #e53935);
}


.card .card-header-warning .card-icon, .card .card-header-warning .card-text, .card .card-header-warning:not(.card-header-icon):not(.card-header-text), .card.bg-warning, .card.card-rotate.bg-warning .front, .card.card-rotate.bg-warning .back {
    background: linear-gradient(60deg, #013179, #016ba9);
}
    
    .card .card-header-danger .card-icon, .card .card-header-danger .card-text, .card .card-header-danger:not(.card-header-icon):not(.card-header-text), .card.bg-danger, .card.card-rotate.bg-danger .front, .card.card-rotate.bg-danger .back {
    background: linear-gradient(60deg, #0269a7, #03397e);
    }
    
    .card .card-header-success .card-icon, .card .card-header-success .card-text, .card .card-header-success:not(.card-header-icon):not(.card-header-text), .card.bg-success, .card.card-rotate.bg-success .front, .card.card-rotate.bg-success .back {
    background: linear-gradient(60deg, #013b80, #0261a0);
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body class="">
    

  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
         <img src="assets/img/logo.png"width="160px">
        </a>
      </div>
      <div class="sidebar-wrapper">
         <ul class="nav">
         
               <li class="nav-item active ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons" style="color:#009bc5;">dashboard
</i>
              <p>Dashboard</p>
            </a>
          </li>
         
         
         
         
          <li class="nav-item  ">
            <a class="nav-link" href="composeMail.php">
              <i class="material-icons" style="color:#009bc5;">feedback
</i>
              <p>Compose</p>
            </a>
          </li>
          
              <li class="nav-item">
            <a class="nav-link" href="receiveMail.php">
              <i class="material-icons" style="color:#009bc5;">inbox</i>
              <p>Received</p>
            </a>
          </li>
          
           <li class="nav-item  ">
            <a class="nav-link" href="sentMail.php">
              <i class="material-icons" style="color:#009bc5;">send</i>
              <p>Sent</p>
            </a>
          </li>
         
          
          
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">     </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!--<i class="material-icons">notifications</i>-->
                  
  <i class="material-icons" style="color:#002b7a;font-size: 30px; margin-top:-33px;">notifications</i>&nbsp; <span style="color:#ffffff;font-weight:500" class="notification"><?php echo $unread; ?></span>

                  <!--<span class="notification">5</span>-->
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    
                    
                    
                    
                    
                    
                    <?php
                         
                         
                         foreach ($users as $user): 
                          if($user['to']==$from && $user['pread']==0)
                          {
                          echo '<a class="dropdown-item" href="receive.php"><span style="color:#ff6600;">Shout From</span> &nbsp;'. $user["fname"] .'</a>';
                          } 
                        endforeach;



?> 
                </div>
              </li>
           
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
   <i class="material-icons" style="color:red;font-size: 30px; margin-top:-33px;">power_settings_new</i>&nbsp;<span style="color:#a90c0c;font-weight:500">Logout</span>
</button>
                 
                </a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            
            
            <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                <div class="ct-chart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">ShoutOuts sent this weeek</h4>
                  <p class="card-category">
              <span class="" style="font-size:50px; color:#03234c;"><?php echo $unread1 ?></span></p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated <?php echo date('Y-m-d H:i:s'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart" style="color:#fff;">
                <div class="card-header card-header-warning">
                  <div class="ct-chart1" id=""></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">ShoutOuts sent this Quarter</h4>

              <span class="" style="font-size:50px;color:#03234c;"><?php echo $Q4 ?></span></p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   <i class="material-icons">access_time</i> updated <?php echo date('Y-m-d H:i:s'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart2" id=""></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Total ShoutOuts Sent</h4>
        
              <span class="" style="font-size:50px; color:#03234c;"><?php echo $year ?></span></p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <i class="material-icons">access_time</i> updated <?php echo date('Y-m-d H:i:s'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
            
          <div class="row">
            
      <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Taboola ShoutOut Dashboard</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                         <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <input type="text" value="" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search by region..."><br>
                    <table class="table" id="myTable">
                      <thead class="" style="background-color: #06183a;">
                          
                          
                            <th style="font-size:13px; color: #fff;
    font-weight: 700;">
                         Appreciation Sent to:
                        </th>
                        
                        
                        <th style="font-size:13px; color: #fff;
    font-weight: 700;">
                         Appreciation Sent From:
                        </th>
                        <th style="font-size:15px; color: #fff;
    font-weight: 700;">
                          
                        Manager Email Address :
                        </th>
                        <th style="font-size:13px; color: #fff;
    font-weight: 700;">
                         
                        Quality Exhibited :
                        </th>
                        <th style="font-size:13px; color: #fff;
    font-weight: 700;">
                      Describe<br>quality exhibited:
                        </th>
                        <th style="font-size:13px; color: #fff;
    font-weight: 700;">
                      Region:
                        </th>
                         <th style="font-size:13px; color: #fff;
    font-weight: 700;">
                  Date:
                        </th>
                  <!--      <th style="font-size:18px; color:#000000;font-weight:400; text-align:center" >-->
                  <!--Read/Unread-->
                  <!--      </th>-->
                        
                        
                      </thead>
                      <tbody>
                          
                          
                          <?php 
                          $count=1;
                          foreach ($users as $user): 
                          $year=$count++;
           $id = $user['date'];
    $_SESSION["sno"] =  $id;
    if($user['pread']=="0") {
    $tdStyle='background-color:#E8E8E8;font-weight: bold;';
    
     $icon='VIEW';
} else {
    $tdStyle='background-color:#ffffff;';
    $icon='<i class="material-icons" style="color:#00347a;">check_circle</i>';
}

$text = $user["description"];
$newtext = wordwrap($text, 50, "<br />\n");



echo "<tr>" .
            '<form action="inbox.php" method="post">'.
            "<td style='$tdStyle'><input type='hidden' name='from'  value='" . $user["to"] . "'  />".$user["to"]."</td>".
            "<td style='$tdStyle'><input type='hidden' name='a'  value='" . $user["from"] . "'  />".$user["from"]."</td>".
             "<td style='$tdStyle'><input type='hidden' name='a'  value='" . $user["manager"] . "'  />".$user["manager"]."</td>".
              "<td style='$tdStyle'><input type='hidden' name='a'  value='" . $user["message"] . "'  />".$user["message"]."</td>".
            "<td style='$tdStyle'><input type='hidden' name='a1'  value='" . $user["description"] . "'  />".$newtext."</td>".
            "<td style='$tdStyle'><input type='hidden' name='a1'  value='" . $user["region"] . "'  />".$user["region"]."</td>".
             "<td style='$tdStyle'><input type='hidden' name='dateu'  value='" . $user["date"] . "'  />".$user["date"]."</td>".
            "</form>".
            "</tr>";



                       
                       ?>
                        <?php 
                        endforeach;; 
                        ?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            
            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content">
      <div class="modal-header"style="background-color:#003399;">
          
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align:center; color:#fff;">Taboola ShoutOut from <input  style="border:0; text-align:center;color:#fff; background-color:#003399" type="text"  id="sno" readonly></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form>
      <div class="modal-body">
          
          
  <div class="form-group">
    
  </div>
  <div class="form-group">
    <input type="text" style="border:0" id="sno1" readonly>
  </div>
          <img src="assets/img/sdsidebar-2.jpg" width="460">
      </div>
      
      
          
           <div id="sno"></div>
     
      
       <div class="form-group">
           <input type="text" style="border:0" id="sno2" readonly>
  </div>
      </form>
      
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   
      </div>
    </div>
  </div>
</div>


    
          </div>
        </div>
      </div>
   
       <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a target="_blank" href="https://www.taboola.com/">
                  Taboola
                </a>
              </li>
              <li>
                <a href="https://brain.taboola.com/">
                  Brain
                </a>
              </li>
              <li>
                <a href="https://blog.taboola.com/">
                  Blog
                </a>
              </li>
               <li style="color:#003399;">
                <a href="feedback.php">
                  Any suggestion !
                </a>
              </li>
              
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Powered<i class="material-icons"></i> by
            <a href="" target="_blank">Territory Implementation</a>
          </div>
        </div>
      </footer>
     
    </div>
  </div>
  
 
  
<script>
    
new Chartist.Bar('.ct-chart', {
  labels: ['Mon', 'Tue', 'Wed', 'Thru', 'Fri', 'Sat','Sun'],
  series: [<?php echo $Monday ?>,<?php echo $Tuesday ?>,<?php echo $Wednesday ?>,<?php echo $Thrusday ?>,<?php echo $Friday ?>,<?php echo $Saturday ?>,<?php echo $Sunday ?>]
}, {
  distributeSeries: true
});
</script>



<script>
    
new Chartist.Bar('.ct-chart1', {
  labels: ['Q1-2020', 'Q2-2020', 'Q3-2020','Q4-2020' ],
  series: [<?php echo $Q1 ?>,<?php echo $Q2 ?>,<?php echo $Q3 ?>,<?php echo $Q4 ?>]
}, {
  distributeSeries: true
});
</script>






<script>
    

new Chartist.Bar('.ct-chart2', {
  labels: ['2020'],
  series: [<?php echo $year ?>]
}, {
  distributeSeries: true
});


</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>









    <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>
