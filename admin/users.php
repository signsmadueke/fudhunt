<?php
require_once 'include/header.php';
?>
<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">
            Users <small>Responsive tables</small>
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
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Funds</th>
                                        <th>Escrow</th>
                                        <th>Withdraw</th>
                                        <th>Delete Account</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $response = fetch_users();
                                    $i = 1;
                                    if ($response) {
                                        foreach ($response as $row) {
                                            extract($row)

                                    ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $fullname; ?></td>
                                                <td><?php echo $email; ?></td>
                                                <td class="center"><?php echo $password; ?></td>
                                                <td><a href="fund.php?user_id=<?php echo $user_id; ?>" class="btn btn-info btn-sm">Funds</a></td>
                                                <td><a href="escrow.php?user_id=<?php echo $user_id; ?>" class="btn btn-warning btn-sm">Escrow</a></td>
                                                <td><a href="withdraw.php?user_id=<?php echo $user_id; ?>" class="btn btn-success btn-sm">Withdraw</a></td>
                                                <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                                            </tr>

                                    <?php   }
                                    } ?>

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