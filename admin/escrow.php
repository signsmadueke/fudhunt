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
                                             <th>S/N</th>
                                             <th>Fullname</th>
                                             <th>role</th>
                                             <th>Send Crypto</th>
                                             <th>Send Amount</th>
                                             <th>Partner Email</th>
                                             <th>Buy Crypto</th>
                                             <th>Buy Amount</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php 
                    $user_id = $_GET['user_id'];
                        $response = fetch_escrow($user_id);
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);

                             // var_dump($row);

                         ?>                                              
                 <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $tradefirst_name; ?></td>
                    <td><?php echo $tradefirst_role; ?></td>
                    <td><?php echo $tradefirst_coin_sending; ?></td>
                    <td>$<?php echo $tradefirst_total_amount; ?></td>
                    <td><?php echo $tradersecond_email; ?></td>
                    <td><?php echo $tradefirst_coin_recieveing; ?></td>
                    <td>$<?php echo $tradersecond_total_amount; ?></td>
                    <td> <a class="btn btn-primary btn-sm" href="es.php?tradefirst_id=<?php echo $tradefirst_id  ?>"> Action</a> </td>
                   
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