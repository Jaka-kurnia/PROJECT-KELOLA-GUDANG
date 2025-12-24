 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0"> Customer</h1>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">
         <section class="content">
             <div class="card">
                 <div class="card-header ">
                     <div class="d-flex justify-content-between">
                         <a href="dashboard.php?page=addcustomer" type="button" class="btn  btn-primary">
                             <i class="fas fa-plus"></i>
                             Tambah
                         </a>
                         <a href="pages/customer/print.php" class="btn  btn-success" target="_blank">
                             <i class="fas fa-print"></i>
                             Print
                         </a>
                     </div>
                     <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                             <i class="fas fa-minus"></i>
                         </button>
                     </div>
                 </div>
                 <div class="card-body">
                     <?php
                        if (isset($_SESSION['message'])) {
                        ?>

                         <div class="alert <?php echo $_SESSION['alert_type']; ?> alert-dismissible">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                             <h5>
                                 <?php
                                    if ($_SESSION['type'] == "success") {
                                    ?>
                                     <i class="icon fas fa-check"></i>
                                 <?php
                                    } else {
                                    ?>
                                     <i class="icon fas fa-ban"></i>
                                 <?php } ?>

                                 <?php echo $_SESSION['message'];  ?>
                             </h5>
                         </div>
                     <?php
                            unset($_SESSION['message']);
                            unset($_SESSION['alert_type']);
                            unset($_SESSION['type']);
                        }
                        if (isset($_SESSION['message'])) {
                        ?>
                         }
                 </div>
             <?php
                            unset($_SESSION['message']);
                        }
                ?>
             <!-- Form input Filter -->
             <form action="" method="GET">
                 <input type="hidden" name="page" value="customers">
                 <div class="row">
                     <div class="col-10">
                         <input class="form-control mb-2 col-12" type="text" name="product_name" value="
                         <?php if (isset($_GET['product_name'])) {
                                echo $_GET['product_name'];
                            } ?>"
                             placeholder="Product Name">
                     </div>
                     <div class="col-2">
                         <button type="submit" class="btn btn-sm btn-primary">
                             <i class="fas fa-search"></i>
                             Cari
                         </button>
                     </div>
                 </div>
             </form>

             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th style="width: 10px">No</th>
                         <th>Customer Code</th>
                         <th>Name Customer</th>
                         <th>No Telp</th>
                         <th>Address</th>
                         <th class="d-flex justify-content-center">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        $no = 1;
                        // query inner join
                        // $sql = "SELECT * FROM products INNER JOIN 
                        // categories ON products.category_id = categories.category_id";
                        // if (isset($_GET['product_name'])) {
                        //     $product_name = $_GET['product_name'];
                        //     $sql .= " WHERE product_name LIKE '%$product_name%'";
                        // }
                        $sql = "SELECT * FROM customers";
                        if(isset($_GET['customer_name'])){
                            $customer_name = $_GET['customer_name'];
                            $sql .= " WHERE customer_name LIKE '%$customer_name%'";
                        }
                        $query = mysqli_query($koneksi, $sql);
                        while ($customer = mysqli_fetch_array($query)) {
                        ?>
                         <tr>
                             <td><?php echo $no ?></td>
                             <td><?php echo $customer['customer_code'] ?></td>
                             <td><?php echo $customer['customer_name'] ?></td>
                             <td><?php echo $customer['phone'] ?></td>
                             <td><?php echo $customer['customer_address'] ?></td>
                             <td>
                                 <div class="d-flex justify-content-center">
                                     <a href="dashboard.php?page=editcustomer&customer_id=<?php echo $customer['customer_id'] ?>"
                                         class="btn btn-sm  btn-warning mr-2 text-white">
                                         <i class="fas fa-edit text-white"></i>
                                         Edit
                                     </a>
                                     <a href="pages/customer/action.php?act=delete&customer_id=<?php echo $customer['customer_id'] ?>
                                     " class="btn btn-sm  btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
                                         <i class="fas fa-trash"></i>
                                         Hapus
                                     </a>
                                 </div>
                             </td>
                         </tr>
                     <?php
                            $no++;
                        }
                        ?>
                 </tbody>
             </table>
             </div>
     </div>
     </section>
 </div>
 </div>