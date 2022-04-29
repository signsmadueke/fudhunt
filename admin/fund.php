<?php 
require_once 'include/header.php';
        $user_id = $_GET['user_id'];
        $user = fetch_user($user_id);
        extract($user);
                                
 ?> 
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            <?php echo $fullname; ?> <small>Admin</small>
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
                                            <th>#</th>
                                            <th>Crypto</th>
                                            <th>USD Equivalent</th>
                                            <th>Fund Status</th>
                                            <th>Action</th>
                                            <!-- <th>Delete Account</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php 
                        $response = fetch_funds($user_id);
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);
                             // var_dump($row);


                         ?> 
                                        <tr class="odd gradeX">
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $crypto_currency; ?></td>
                                            <td>$<?php echo $temp_amount ?></td>
                                            <td>   <?php   if ($tx_status === "waiting") {
                  ?>
                <span class="badge badge-warning" title="Make payment and upload payment proof">Waiting</span>
                <?php  } ?>

                <?php   if ($tx_status === "paid") {
                  ?>
                  <span class="badge badge-success" title="Make payment and upload payment proof">success</span>

                <?php   } ?></td>
                                    
                                            <td> <a href="action.php?fund_id=<?php echo $fund_id; ?>&user_id=<?php echo $user_id; ?>" class="btn btn-primary btn-sm">Action</a></td>
                                        </tr>
                                    <?php   }} ?>
                                       
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