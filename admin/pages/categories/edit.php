<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content d-flex justify-content-center">
    <div class="col-6">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Products</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body ">
                <?php
                $category_id = $_GET['category_id'];
                $sql = "SELECT * FROM categories WHERE category_id = '$category_id'";
                $query = mysqli_query($koneksi, $sql);
                $category = mysqli_fetch_array($query);
                ?>
                <form action="pages/categories/action.php?act=update&category_id=<?php echo $category['category_id']; ?>" method="post">
                    <input class="form-control mb-2" type="text" name="category_name" placeholder="Nama Kategori" required value="<?php echo $category['category_name'] ?>">
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn btn-warning mr-2 text-white" type="submit">Update</button>
                        <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>