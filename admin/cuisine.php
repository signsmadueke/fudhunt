<?php 
require_once 'include/header.php';
   if (isset($_POST['submit'])) {
    $ans = add_cuisine($_POST, $_FILES['cuisine_pix']);
}

 if (isset($_POST['delete'])) {
    $ans = delete_cuisine($_POST);
}
 ?> 
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            cuisine <small>Admin</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Admin</a></li>
					  <li class="active">cuisine</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             cuisine
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr >
        <th>S/N</th>
        <th >cuisine name</th>
        <th>Cuisine Thumbnail</th>
        <th>Edit cuisine</th>
        <th>Delete cuisine</th>
        
      </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                        $response = fetch_cuisine();
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);

                         ?>   
                             <tr >
        <td><?php  echo $i++; ?></td>
        <td><?php echo $cuisine_name; ?></td>
        <td> <img src="<?php echo $cuisine_pix; ?>" height="50"> </td>
        <td><a href="edit_cuisine.php?cuisine_id=<?php echo $cuisine_id; ?>"><button class="btn-warning">Edit</button></a></td>
      
        <td>
            <form method="post">
            <input type="hidden" name="cuisine_id" value="<?php echo $cuisine_id; ?>">
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
            <span class="input-group-addon">cuisine name</span> 
            <input class="form-control" name="cuisine_name" placeholder="Enter cuisine name">
        </div>

          <br>

         <div class="input-group">
            <span class="input-group-addon">Thumbnell</span> 
        <input class="form-control" type="file" name="cuisine_pix" placeholder="Enter cuisine picture">
        </div>


       <br>




 

                                </div>

                                    <div class="panel-footer">

                                        <div id="result"></div>

                                        <button type="submit" id="sun" name="submit" class="btn btn-primary btn-block btn-flat"> add cuisine </button>

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