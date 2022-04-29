<?php 
require_once 'include/header.php';
   if (isset($_POST['submit'])) {
    $ans = add_restaurant($_POST, $_FILES['restaurant_pix']);
}

 if (isset($_POST['delete'])) {
    $ans = delete_restaurant($_POST);
}
 ?> 
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            restaurant <small>Admin</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Admin</a></li>
					  <li class="active">restaurant</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             restaurant
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr >
        <th>S/N</th>
        <th>Restaurant name</th>
        <th>Restaurant Pix</th>
        <th>Restaurant Address</th>
        <th>Edit restaurant</th>
        <th>Delete restaurant</th>
        
      </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                        $response = fetch_restaurant();
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);

                         ?>   
                             <tr >
        <td><?php  echo $i++; ?></td>
        <td><?php echo $restaurant_name; ?></td>
        <td> <img src="<?php echo $restaurant_pix; ?>" height="50"> </td>
        <td><?php echo $restaurant_address; ?></td>
        <td><a href="edit_restaurant.php?restaurant_id=<?php echo $restaurant_id; ?>"><button class="btn-warning">Edit</button></a></td>
      
        <td>
            <form method="post">
            <input type="hidden" name="restaurant_id" value="<?php echo $restaurant_id; ?>">
            <button type="submit" name="delete" class="btn-danger" onclick="confirm('Are you sure you want to delete this?')">Delete</button>
            </form>
        </td>
        
      </tr>
              <?php }} ?>                                       
                                    </tbody>
                                </table>

<br>
<br>
<br>
                                  <form method="post"  class="form-horizontal" id="invest" enctype="multipart/form-data">
                                            

                                          
        <div class="input-group">
            <span class="input-group-addon">restaurant name</span> 
            <input class="form-control" name="restaurant_name" placeholder="Enter restaurant name">
        </div>
        <br>

        <div class="input-group">
            <span class="input-group-addon">restaurant address</span> 
            <input class="form-control" name="restaurant_address" placeholder="Enter restaurant address">
        </div>
        <br>

         <div class="input-group">
            <span class="input-group-addon">Thumbnell</span> 
        <input class="form-control" type="file" name="restaurant_pix" placeholder="Enter restaurant picture">
        </div>




 

                                </div>

                                    <div class="panel-footer">

                                        <div id="result"></div>

                                        <button type="submit" id="sun" name="submit" class="btn btn-primary btn-block btn-flat"> add restaurant </button>

                                    </div>

                                    </form>
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