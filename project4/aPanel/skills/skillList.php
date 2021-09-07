<?php
ob_start();
session_start();
include "../back/header.php";?>
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Skills List</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="../index/index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Skills list</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Skills Full List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <?php
                            if(isset($_SESSION['done']))
                            {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <?php
                                    echo $_SESSION['done'];
                                    unset($_SESSION['done']);

                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th style="width: 40px">Label</th>
                                        <th>Progress</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                <?php

                                include "../back/skillsController.php";
                                $skills = skillsController::getSkills();

                                while($row = $skills->fetch()){

                                ?>

                                    <tr>
                                        <td><?php echo  $row['id']?></td>
                                        <td><?php echo $row['name']?></td>
                                        <td style="width: 100px;"><span class="badge bg-warning"> <?php echo $row['number']?> </span></td>
                                        <td>
                                            <div class="progress progress-xs mt-2">
                                                <div class="progress-bar bg-secondary progress-bar-danger" style="width: <?php echo $row['number'] . '%'?>"></div>
                                            </div>
                                        </td>
                                        <td style="width: 180px;">
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal" title="Edit">                           
                                                <i class="text-warning  far fa-edit fa-2x" data-toggle="tooltip"></i>
                                            </a>
                                            
                                            <a href="#deleteEmployeeModal<?php echo $row['id']?>" class="delete ml-2" data-toggle="modal">
                                                <i class="text-danger far fa-trash-alt fa-2x" data-toggle="tooltip" title="Delete"></i>
                                            </a>
                                        </td>
                                        <!-- Edit Modal HTML -->
                                        <div id="editEmployeeModal" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form method="post" action="../back/skillsController.php">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update Skill Info</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control" required>
                                                                </div>
                                                                </div>
                                                                <div class="col-12">
                                                                <div class="form-group">
                                                                <label>Percentage</label>
                                                                <input type="number" max="100" name="number" value="<?php echo $row['number']?>" class="form-control" required>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" value="<?php echo $row['id']?>" name="skillId">
                                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                            <input type="submit" name="updateSkillSubmit" class="btn btn-info" value="update">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Delete Modal HTML -->
                                        <div id="deleteEmployeeModal<?php echo $row['id']?>" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form method="post" action="../back/skillsController.php">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Skill</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete these Records?</p>
                                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="skillId" value="<?php echo $row['id']?>">
                                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                            <input type="submit" name="deleteSkillSubmit" class="btn btn-danger" value="Delete">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>

                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
<?php include "../back/footer.php"?>
