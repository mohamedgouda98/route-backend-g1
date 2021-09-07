<?php include "../back/header.php";?>
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 px-2">
                <div class="col-sm-6">
                    <h2 class="text-secondary">Add New Category</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
</div>
<div class="container">
        <div class="row">
                <div class="col-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Category Name</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="card-footer">
                            <button type="updateCate" class="btn btn-primary">Update</button>
                            <button type="addCate" class="btn btn-danger">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
<?php include "../back/footer.php"?>
