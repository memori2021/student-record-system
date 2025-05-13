<?php
 include('includes/initialize.php');
 // include('db.php');
  //login confirmation
 confirm_logged_in();

 ?>

 
 
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard 
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <br>


<!-- UPDATE ACCOUNTS TO ONLINE -->

<?php
      // echo "SELECT oic_id FROM accounts WHERE acct_id = '$_SESSION[acct_id]'";
      // $user = $conn->prepare("SELECT oic_id FROM accounts WHERE acct_id = '$_SESSION[acct_id]'")->execute();
      // $res =  $user->fetch();

      $stmt = $conn->prepare("UPDATE accounts SET status = 'Online' WHERE oic_id = '$_SESSION[oic_id]'");
      $stmt->execute();
 
 ?>
<!-- END UPDATE -->





<!----------------------------------START SLIDER-------------------------------------------------------------->
<div class="row carousel-holder">

                    <div class="col-md-12" >
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>              
                                <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                          
                            </ol>
                            <div class="carousel-inner"  >

        <!--  <div class="item active" > <img style="height:400px;"   width="100%" class="slide-image" src="images/4444.jpg" alt=""> </div>

                                <div class="item" >    <img style="height:400px;"    width="100%" id="admin_avatar" class="img-polaroid" src="images/22.jpg">  </div>
                                <div class="item" >    <img style="height:400px;"    width="100%" id="admin_avatar" class="img-polaroid" src="images/sr.jpg">  </div>
       
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>

                                -->

<!------------------------------END SLIDER------------------------------------------------------>

<br>  
   
            <div class="col-lg-12 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <p>FLOOD RECORDS</p>
                  <table class="table table-bordered table-striped" id="example1"  style="width:100%; background-color:white;">
				<thead>
					<th>Status</th>
          <th>Date</th>
          <th>Time</th>
          <th>Image</th>
			
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
                <td> </td>
       		</tr>
							<?php
						}
					?>
				</tbody>
			</table>
                </div>
                
      
         
            

              </div>

              
            </div><!-- ./col -->
            



 



             
            </div><!-- ./col -->
          </div><!-- /.row -->




 
          <br>  <br>  <br>  <br>  
 