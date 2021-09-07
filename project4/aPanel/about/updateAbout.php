<?php
ob_start();
session_start();
include "../back/header.php";?>

<section class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="text-secondary">Update About Details</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Update About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-9">
        <div class="card card-warning">

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

            if(isset($_SESSION['error']))
            {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);

                    ?>
                </div>
                <?php
            }
            ?>
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <?php
                    include "../back/AboutController.php";
                    $data = AboutController::getAbout();
                    $about  = $data->fetch();
                  ?>
                <form method="post" action="../back/AboutController.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="<?php echo $about['name']?>" name="name" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Age</label>
                        <input required type="text" value="<?php echo  $about['age']?>" name="age" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Job Title</label>
                        <input required type="text" value="<?php echo $about['job']?>" name="job" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>From</label>
                        <input required type="text" value="<?php echo $about['from']?>" name="from" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Lives in</label>
                        <input required type="text" value="<?php echo $about['live_in']?>" name="live_in" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <div class="form-group">
                            <label for="imgUpdate">Img</label>
                          <input type="hidden" name="oldImage" value="<?php echo $about['img']?>">
                            <input type="file" name="image" class="form-control-file" id="imgUpdate">
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                              <div class="form-group">
                                  <label for="imgUpdate">Gender</label>
                                  <input required type="text" name="gender" value="<?php echo $about['gender']?>" class="form-control" id="gender">
                              </div>
                          </div>
                      </div>

                      <div class="col-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <textarea required name="description" class="form-control" rows="3" placeholder="Enter ..."><?php echo $about['description']?></textarea>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer">
                  <button type="submit" name="updateAboutSubmit" class="btn btn-warning">Update Details</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>
<?php include "../back/footer.php"?>