<?php ob_start();
include "../back/header.php";
session_start();?>
            <div class="container-fluid">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Skills</h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="../index/index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Skills</li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <div class="container">
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
                    <form method="post" action="../back/skillsController.php">
                        <div class="card card-danger" style="max-width: 800px;">
                        <div class="card-header">
                            <h3 class="card-title">Add Skill</h3>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="skillName">Name</label>
                                        <input type="text" required minlength="3" name="name" class="form-control" id="skillName">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="skillRate">Percentage <small>type in %</small></label>
                                        <input type="number" required minlength="2" name="number" class="form-control" id="skillRate">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-danger" name="skillAddSubmit">add skill</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    
                </div>
            </div>
<?php include "../back/footer.php"?>
      