 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0"> Products</h1>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">
         <section class="content">
             <div class="card">
                 <div class="card-header">
                     <i class="fas fa-plus"></i>
                     <a href="dashboard.php?page=addproduct" type="button" class="btn  btn-primary">Tambah</a>

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
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th style="width: 10px">No</th>
                         <th>Code</th>
                         <th>Product Name</th>
                         <th>Category</th>
                         <th>Price</th>
                         <th>Stok</th>
                         <th class="d-flex justify-content-center">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        $no = 1;
                        // query inner join
                        $sql = "SELECT * FROM products INNER JOIN 
                        categories ON products.category_id = categories.category_id ORDER BY product_code ASC";
                        $query = mysqli_query($koneksi, $sql);
                        while ($products = mysqli_fetch_array($query)) {
                        ?>
                         <tr>
                             <td><?php echo $no ?></td>
                             <td><?php echo $products['product_code'] ?></td>
                             <td><?php echo $products['product_name'] ?></td>
                             <td><?php echo $products['category_name'] ?></td>
                             <td><?php echo $products['price'] ?></td>
                             <td><?php echo $products['stock'] ?></td>
                             <td>
                                 <div class="d-flex justify-content-center">
                                     <a href="dashboard.php?page=editproduct&product_id=<?php echo $products['product_id'] ?>"
                                         class="btn btn-sm  btn-warning mr-2 text-white">
                                         <i class="fas fa-edit text-white"></i>
                                         Edit
                                     </a>
                                     <a href="pages/products/action.php?act=delete&product_id=<?php echo $products['product_id'] ?>
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