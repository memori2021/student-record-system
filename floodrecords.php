<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content=", initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Online Flood Monitoring</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="datatable/dataTables.bootstrap.min.css">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<body>
   <!-- nv section -->
<!--particles js files-->

  <!--first particles.js file and app.js-->
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container "> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">   
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="logo">
           
              </ul>
              <ul class="profile">
              <h6><span> </span></h6></a>
              </ul>
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link  " href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#history">History </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Flood Records </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/fm/login.php">User Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/fm/login.php">Admin Login </a>
                </li>
              </ul>
            </div>
          </div>
          </nav>
          </div>
        </nav>
      </div>
    </div>
  </section>

  

<!--particles js files-->

  <!--first particles.js file and app.js-->
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
     
          </div>
        </div>
      </div>
    </div>

  <!-- shop section -->
  <div id="particles-js">
  <section class="shop_section layout_padding">
    <section class="history_section" id="history"></section>
    <div class="container">
      <div class="box">
        <div class="detail-box">
          <h2>
            Flood Records
          </h2>
          <p>
   
          <table class="table table-bordered table-striped" id="example1"  style="width:100%; background-color:white;">
				<thead>
					<th>Status</th>
          <th>Date</th>
          <th>Time</th>
			
				</thead>
				<tbody>
					<?php
						//database connection
						$conn = new mysqli('localhost', 'root', '', 'asidatabase');
						if ($conn->connect_error){
							die("Connection Failed". $conn->connect_error);
						}

						$sql = "select * from floodstatus";
						$query = $conn->query($sql);
						while($row=$query->fetch_array()){
							?>
							<tr>
								<td><?php echo $row['alertstatus']; ?></td>
                <td><?php echo $row['datestatus']; ?></td>
                <td><?php echo $row['timestatus']; ?></td>
       		</tr>
							<?php
						}
					?>
				</tbody>
			</table>
          
          </p>
        </div>
     
      </div>
    </div>
  </section>
<div>
  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section" id="aboutus">
    <div class="container-fluid">
      
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- cars section -->


  <script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap.min.js"></script>
	<script>
	  $(function () {
	    $('#example1').DataTable()
	    $('#example2').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : false,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : false
	    })
	  })
	</script>



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>