<?php 
require_once 'include/header.php';
   if (isset($_POST['submit'])) {
    
    $ans = add_food($_POST, $_FILES['food_pix']);

    // var_dump($ans);
}

 if (isset($_POST['delete'])) {
    $ans = delete_food($_POST);
}
 ?> 
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            food <small>Admin</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Admin</a></li>
					  <li class="active">food</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             food
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr >
        <th>S/N</th>
        <th >food name</th>
        <th >Cuisine</th>
        <th >Resturant</th>
        <th >Thumbnail</th>
        <th>Edit food</th>
        <th>Delete food</th>
        
      </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                        $response = fetch_food();
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);
                         ?>   
                             <tr >
        <td><?php  echo $i++; ?></td>
        <td><?php echo $food_name; ?></td>
        <td><?php
         $food_cuisine = fetch_single_cuisine($cuisine_id);
          extract($food_cuisine);
         echo $cuisine_name; ?>
         </td>
        <td>
            <?php
         $food_rest = fetch_single_restaurant($restaurant_id);
          extract($food_rest);
         echo $restaurant_name; ?>
        </td>


        <td>
            <img src="<?php echo $food_pix; ?>"  height="50">
        </td>
        <td><a href="edit_food.php?food_id=<?php echo $food_id; ?>"><button class="btn-warning">Edit</button></a></td>
      
        <td>
            <form method="post">
            <input type="hidden" name="food_id" value="<?php echo $food_id; ?>">
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
            <span class="input-group-addon">food name</span> 
            <input class="form-control" name="food_name" placeholder="Enter food name">
       </div>

       <br>

       <div class="input-group">
            <span class="input-group-addon">food prize</span> 
            <input class="form-control" name="food_prize" placeholder="Enter food prize">
       </div>

       <br>


        <div class="input-group">
            <span class="input-group-addon">Cuisine</span> 
            <select class="form-control" name="cuisine_id" >
                    <option> -- select cuisine--</option>
                      <?php 
                        $response = fetch_cuisine();
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);
                        ?>
                        <option value="<?php echo $cuisine_id; ?>"><?php echo $cuisine_name; ?></option>
                        <?php }} ?>   
            </select>
       </div>

       <br>


               <div class="input-group">
            <span class="input-group-addon">restaurant</span> 
            <select class="form-control" name="restaurant_id" >
                    <option> -- select restaurant--</option>
                      <?php 
                        $response = fetch_restaurant();
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);
                        ?>
                        <option value="<?php echo $restaurant_id; ?>"><?php echo $restaurant_name; ?></option>
                        <?php }} ?>   
            </select>
       </div>

       <br>


               <div class="input-group">
            <span class="input-group-addon">Thumbnell</span> 
        
        <input class="form-control" type="file" name="food_pix" placeholder="Enter food name">
 

       </div>


       <br>








 

                                </div>

                                    <div class="panel-footer">

                                        <div id="result"></div>

                                        <button type="submit" id="sun" name="submit" class="btn btn-primary btn-block btn-flat"> add food </button>

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