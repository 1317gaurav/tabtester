<?php
session_start();
// print_r($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Appreciate your colleagues
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
  
      <div class="logo"><a href="" class="simple-text logo-normal">
          <!--Territory Implementation-->
          <img src="assets/img/log.png" width="385px" height="50px" style="margin-left:15px;">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
         
          <li class="nav-item active ">
            <a class="nav-link" href="user.php">
              <i class="material-icons"style="color:#FFFF33;">feedback
</i>
              <p>Compose</p>
            </a>
          </li>
          
           <li class="nav-item ">
            <a class="nav-link" href="sent.php">
              <i class="material-icons"style="color:#FFFF33;">send</i>
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
           
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="material-icons" style="color:red;font-size: 30px;">power_settings_new</i>
                 
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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                
                  <p class="card-category" style="font-size:16px; "><i class="material-icons" style="color:#FFFF33;">emoji_emotions</i> <b>Appreciate your colleagues <i class="material-icons" style="color:#FFFF33;">emoji_emotions</i></b></p>
                </div><br><br>
                <div class="card-body">
                  <form method="post" action="mail.php">
                     <div class="row">
                         
                   <div class="col-md-12">
                        <div class="form-group">
                          <!--<label>Appreciate to</label>-->
                          
                        
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email1" required>
                       
                          
                          
<!--                          <input type="email" class="form-control">-->
                            
<!--<fieldset>-->
 
<!--  <select class="form-control dropdown" id="occupation" name="email1">-->
<!--    <option value="" selected="selected" disabled="disabled">-- select one --</option>-->
<!--    <optgroup label="Custom:">-->
<!--      <option value="anant.m@taboola.com">Anant Maheshwari</option>-->
<!--      <option value="rohit.s@taboola.com">Rohit Sharma</option>-->
<!--      <option value="nitesh.d@taboola.com">Nitesh Deptwal</option>-->
<!--      <option value="ishnak.g@taboola.com">Ishank Gupta</option>-->
<!--      <option value="lovlesh.y@taboola.com">Lovlesh Yadav</option>-->
<!--      <option value="akanksha.s@taboola.com">Akanksha Singh</option>-->
<!--      <option value="ankit.b@taboola.com">Ankit Binjola</option>-->
<!--      <option value="gaurav.k@taboola.com">Gaurav Kumar</option>-->
<!--      <option value="roshan.c@taboola.com">Roshan Chaudhary</option>-->
<!--     <option value="nehal.g@taboola.com">Nehal Gaba</option>-->
     
<!--    </optgroup>-->
<!--    <optgroup label="Best practice:">-->
<!--      <option value="diwakar.m@taboola.com">Diwakar Mishra-->
<!--</option>-->
<!--      <option value="anil.kumar@taboola.com">Anil Kumar</option>-->
<!--      <option value="kamal.p@taboola.com">Kamal Pandey</option>-->
<!--      <option value="chetna.b@taboola.com">Chetna Bhardwaj</option>-->
<!--      <option value="alisha.j@taboola.com">Alisha Juneja</option>-->
<!--      <option value="anurag.k@taboola.com">Anurag Kumar-->
<!--</option>-->
<!--      <option value="shalagya.r@taboola.com">Shalagya Rathore-->

<!--</option>-->
<!--      <option value="benny.k@taboola.com">Benny Khatri-->

<!--</option>-->
   
     
<!--    </optgroup>-->
<!--    <optgroup label="Mocks/Design">-->
<!--      <option value="karan.r@taboola.com">Karan Rawat</option>-->
<!--      <option value="suman.b@taboola.com">Suman Bala</option>-->
<!--      <option value="jackey.j@taboola.com">Jackey</option>-->
<!--      <option value="aman.j@taboola.com">Aman Jindal</option>-->
<!--      <option value="priya.s@taboola.com">Priya Suryavanshi</option>-->
     
<!--    </optgroup>-->
    
    
<!--  </select>-->
<!--</fieldset>-->
                        </div>
                      </div>
                      </div>
                  
                   <br>
                    <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <!--<label>About Me</label>-->
                          <div class="form-group">
                            <label class="bmd-label-floating">Something I really appreciate about you is...</label>
                            <textarea class="form-control" rows="4" name="msg" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div><br>
                      
                      
                      
                      
                       <div class="row">
                           
                            <div class="col-md-12">
                        <div class="form-group">
                          <!--<label>About Me</label>-->
                          <div class="form-group">
                            <label class="bmd-label-floating">Can I share with you a bit of feedback</label>
                            <textarea class="form-control" rows="4" name="msg1"></textarea>
                          </div>
                        </div>
                      </div>
                           
                           
                           
                           
                           
                      <!--<div class="col-md-12">-->
                      <!--  <div class="form-group">-->
                      <!--    <label class="bmd-label-floating">Can I share with you a bit of feedback </label>-->
                      <!--    <div class="form-group">-->
                      <!--      <label class="bmd-label-floating"></label>-->
                      <!--      <textarea class="form-control" rows="5" name="msg1"></textarea>-->
                      <!--    </div>-->
                      <!--  </div>-->
                      <!--</div>-->
                    </div>
                      
                      
                    <button type="submit" class="btn btn-primary pull-right" style="font-size:12px;">Send Appriciation</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="<?=$_SESSION['user']['picture']; ?>" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category">Territory Implementation</h6>
                  <h4 class="card-title"><i class="material-icons" style="color:#FFFF00; margin-top:20px;">sentiment_satisfied_alt
</i>&nbsp;<?=$_SESSION['user']['name']; ?>&nbsp;<i class="material-icons" style="color:#FFFF00">sentiment_satisfied_alt
</i></h4>
                  
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--<footer class="footer">-->
      <!--  <div class="container-fluid">-->
          
      <!--    <div class="copyright float-right" id="date">-->
      <!--       powered by-->
      <!--      <a href="#" target="_blank">Territory Implementation</a>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</footer>-->
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
              
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Powered<i class="material-icons">favorite</i> by
            <a href="" target="_blank">Territory Implementation</a>
          </div>
        </div>
      </footer>
     
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

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