<?php include "../back/header.php";?>
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 px-2">
                <div class="col-sm-6">
                    <h2 class="text-secondary">Add Product</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
</div>
<div class="container">
<div class="card card-success">
              <div class="card-header bg-dark">
                <h3 class="card-title">Add Product Data</h3>
              </div>
              <div class="card-body">
                    <form>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="imgUpdate">Img</label>
                        <input type="file" class="form-control-file" id="imgUpdate">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                            <label>Category id</label>
                            <input type="number" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                        </div>
                    </form>
              </div>
              <div class="card-footer">
                            <button type="updateCate" class="btn btn-primary">Update</button>
                            <button type="addCate" class="btn btn-danger">Add</button>
             </div>
    </div>
</div>
<?php include "../back/footer.php"?>