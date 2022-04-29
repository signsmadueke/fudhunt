<?php 
require_once 'include/header.php';
$cuisine_id = $_GET['cuisine_id']; 
$response = fetch_single_cuisine($cuisine_id);
extract($response);

if (isset($_POST['submit'])) {
    $ans = update_cuisine($_POST);
    if ($ans === true) {
        echo ' <script type="text/javascript">
     alert("Updated successfully");
     window.location = "cuisine.php"
 </script>';
    }
}


                              
 ?> 




 <form method="post">
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            <small>Admin</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  
					  <li class="active">Edit cuisine</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit cuisine
                        </div>
                        <div class="panel-body">
                           
                            <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>

                                        <tr>
                                            <th>cuisine name</th>
                                            <td><input type="text" name="cuisine_name" value="<?php echo $cuisine_name; ?>"> </td>

                                  <input type="hidden" name="cuisine_id" value="<?php  echo $cuisine_id; ?>">
                                       

                                        </tr>
                        

                                           

                                    </thead>
                                </table>

                                </div>

                                    <div class="panel-footer">

                                        <div id="result"></div>

                                        <button type="submit" id="sun" name="submit" class="btn btn-primary btn-block btn-flat"> update </button>

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