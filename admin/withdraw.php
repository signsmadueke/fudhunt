<?php 
require_once 'include/header.php';
  $user_id = $_GET['user_id'];
 ?> 
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Withdraw <small>Admin</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Tables</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

                                                    <th>S/N</th>
                                                    <th>Amount</th>
                                                    <th>Crypto</th>
                                                    <th>Address</th>
                                                    <th>Time</th>

                                                </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                        $response = fetch_with($user_id);
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);

                         ?>    
                            <tr>
                        <td><?php echo $i++; ?></td>
                        <!-- <td><?php// echo 'username'; ?></td> -->
                        <td>$<?php echo $withdraw_amount; ?></td>
                        <td><?php echo $crypto_currency; ?></td>
                        <td><?php echo $crypto_address; ?></td>
                        <td><?php       echo $withdraw_date; ?></td>
                     </tr>
              <?php }} ?>                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                <!-- /. ROW  -->
            
                <!-- /. ROW  -->

                <!-- /. ROW  -->
        </div>
<?php 
require_once 'include/footer.php';
 ?> 