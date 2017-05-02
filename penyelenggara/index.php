
<?php
  
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>

<style>
  h3{
    color: white;
  }

</style> 
    
    
  </head>

  <body>

  <section id="container" >
      
      <!--sidebar start-->
      <aside>
          <div  id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/kim.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['nama_lomba']; ?></h5> 
                    
                  <li class="mt">
                      <a class="active"  href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Data Tim</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tim-belum-dikonfirmasi.php">Data Tim Terdaftar</a></li>
                          <li><a  href="buttons.html">Data Tim Terkonfirmasi</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="panel-heading">
              <h1 style="text-transform: uppercase;color: black;text-align: center;"> SISTEM MAGAGEMENT <?php echo $_SESSION['nama_lomba']; ?></h1>
            </div>
            <div  class="col-md-4 col-sm-4 mb">
                          <div style="background: red" class="darkblue-panel pn">
                            <div class="darkblue-header">
                    <h3>PESAN</h3>
                            </div>
                            <h1 class="mt"><i class="fa fa-comment fa-3x"></i></h1>
                
                <footer>
                  <div class="centered">
                    <h5><i class="fa fa-trophy"></i> 17,988</h5>
                  </div>
                </footer>
                          </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->
                    

                    <div class="col-md-4 col-sm-4 mb">
                          <div style="background: #ffd11a" class="darkblue-panel pn">
                            <div class="darkblue-header">
                    <h3>TIM TERDAFTAR</h3>
                            </div>
                            <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
               
                <footer>
                  <div class="centered">
                    <h5><i class="fa fa-trophy"></i> 17,988</h5>
                  </div>
                </footer>
                          </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->
                   


                    <div  class="col-md-4 col-sm-4 mb">
                <div  class="green-panel pn">
                  <div style="background: #68dff0"  class="green-header">
                    <h3 >SLOT KOSONG</h3>
                  </div>
                <canvas id="serverstatus03" height="120" width="120"></canvas>
                <script>
                  var doughnutData = [
                      {
                        value: 60,
                        color:"#2b2b2b"
                      },
                      {
                        value : 40,
                        color : "#fffffd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                </script>
                <h5>SISA 3 SLOT</h5>
                </div>
              </div><! --/col-md-4 -->               
            

              <div class="panel panel-info">
           <h1 style="text-transform: uppercase;color: white;text-align: center;">  XXXXXXXXX</h1>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4 col-lg-4 " align="center"> <img alt="User Pic" src="kim.png" class=" img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-8 col-lg-8 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><b>Nama Lomba</b></td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td><b>Penyelenggara</b></td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td><b>Lokasi</b> </td>
                        <td>01/24/1988</td>
                      </tr>
                         <td><b>Waktu Mulai</b> </td>
                        <td>01/24/1988</td>
                      </tr>
                           <td><b>Waktu Selesai</b> </td>
                        <td>01/24/1988</td>
                      </tr>
                        <td><b>Kategori</b> </td>
                        <td>01/24/1988</td>
                      </tr>
                         <td><b>Email</b> </td>
                        <td>01/24/1988</td>
                      </tr>
                         <td><b>No HP</b> </td>
                        <td>01/24/1988</td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">edit profil</a>

                 
                </div>
              </div>
            </div>
                 
            
          </div>
                  
          </section>
      </section>           
      
  </section>

    
	
	
  </body>
</html>
