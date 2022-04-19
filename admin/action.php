<?php 
require_once 'include/header.php';
 $user_id = $_GET['user_id'];
$fund_id = $_GET['fund_id'];
$user = fetch_user($user_id);
        extract($user);
$cry = fetch_cry($fund_id);
extract($cry);

        if (isset($_POST['submit']))  {
var_dump($_POST);
            $ans = action($_POST);

            echo '<script>
    alert("Update Sucessfully");
       window.location.href = "deposite.php";
</script>';      

}
                              
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
                           fund
                        </div>
                        <div class="panel-body">
                           
                            <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <?php  echo $fullname; ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>

                                        <tr>
                                            <th>Cryptocurrency</th>
                                            <td><?php echo $crypto_currency; ?></td>
                                        </tr>

                                        <tr>
                                        <th>Amount in USD </th>
                                        <td>$<?php   echo $temp_amount; ?></td>
                                         </tr>

                                           <tr>
                                            <th>Transaction status</th>
                                            <td><?php   echo $tx_status; ?></td>
                                             </tr>

                                           

                                    </thead>


                                   
                                </table>


                                                     <form class="form-horizontal" id="invest" method="post">
                                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                               <input type="hidden" name="fund_id" value="<?php echo $fund_id; ?>">
                                              <input type="hidden" name="temp_amount" value="<?php echo $temp_amount; ?>">
                                               <input type="hidden" name="fullname" value="<?php echo $fullname; ?>"> 


                                          

                                            <div class="input-group">

                                                 <span class="input-group-addon"><i class="ti-timer"></i></span> 

                                                 <select class="form-control" name="action" required>
                                                     <option>--choose your action--</option>

                                                     <option value="confirm">Confirm</option>
                                                     <option value="decline">decline</option>
                                                     <option value="delete">delete</option>
                                                 </select>


                                            </div>

 

                                </div>

                                    <div class="panel-footer">

                                        <div id="result"></div>

                                        <button type="submit" id="sun" name="submit" class="btn btn-primary btn-block btn-flat"> action </button>

                                    </div>

                                    </form>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            
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