 <div class="content-header">
     <div class="container-fluid">
         Products
     </div>
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
                                $sql = "SELECT * FROM products ORDER BY product_code ASC";
                                $query = mysqli_query($koneksi, $sql);
                                while ($products = mysqli_fetch_array($query)) {
                                ?>
                                 <tr>
                                     <td><?php echo $no ?></td>
                                     <td><?php echo $products['product_code'] ?></td>
                                     <td><?php echo $products['product_name'] ?></td>
                                     <td><?php echo $products['category_id'] ?></td>
                                     <td><?php echo $products['price'] ?></td>
                                     <td><?php echo $products['stock'] ?></td>
                                     <td>
                                         <div class="d-flex justify-content-center">
                                             <a href="" class="btn btn-sm  btn-warning mr-2 text-white">
                                             <i class="fas fa-edit text-white"></i>   
                                             Edit
                                            </a>
                                                 <a href="" class="btn btn-sm  btn-danger">
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