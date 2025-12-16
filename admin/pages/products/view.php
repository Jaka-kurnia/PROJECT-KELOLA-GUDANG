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
                     <a type="button" class="btn  btn-primary">Tambah</a>

                     <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                             <i class="fas fa-minus"></i>
                         </button>
                         <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                             <i class="fas fa-times"></i>
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
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                $sql = "SELECT * FROM products ORDER BY product_code ASC";
                                $query = mysqli_query($koneksi, $sql);
                                while ($products = mysqli_fetch_array($query)) {
                                    echo $products['product_code'];
                                }
                                ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </section>
     </div>
 </div>