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
                $customer_id = $_GET['customer_id'];
                $sql = "SELECT * FROM customers WHERE customer_id = '$customer_id'";
                $query = mysqli_query($koneksi, $sql);
                $customer = mysqli_fetch_array($query);
                ?>
                <form action="pages/customer/action.php?act=update&customer_id=<?php echo $customer['customer_id']; ?>" method="post">
                    <input class="form-control mb-2" type="text" name="customer_code" placeholder="Customer Code" required value="<?php echo $customer['customer_code'] ?>">
                    <input class="form-control mb-2" type="text" name="customer_name" placeholder="Customer Name" required value="<?php echo $customer['customer_name'] ?>">
                    <input class="form-control mb-2" type="text" name="phone" placeholder="Phone" required value="<?php echo $customer['phone'] ?>">
                    <input class="form-control mb-2" type="text" name="customer_address" placeholder="Customer Address" required value="<?php echo $customer['customer_address'] ?>">
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