 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Add Products</h1>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- Main content -->
 <div class="content d-flex justify-content-center">
     <div class="col-6">
         <section class="content">
             <div class="card">
                 <div class="card-body">
                     <h5>Add Product</h5>
                     <form action="pages/products/action.php?act=insert" method="POST">
                         <input class="form-control mb-2" type="text" name="product_code" placeholder="Product Code" required>
                         <input class="form-control mb-2" type="text" name="product_name" placeholder="Product Name" required>
                         <select class="form-control mb-2" required name="category_id">
                             <option>Choose Cateory</option>
                             <?php
                                $sql = "SELECT * FROM categories";
                                $exceute = mysqli_query($koneksi, $sql);
                                while ($categories = mysqli_fetch_array($exceute)) {
                                ?>
                                 <option value="<?php echo $categories['category_id'] ?>">
                                     <?php echo $categories['category_name'] ?>
                                 </option>
                             <?php
                                }
                                ?>
                         </select>
                         <input class="form-control mb-2" type="text" name="price" placeholder="Price" required>
                         <input class="form-control mb-2" type="text" name="stock" placeholder="Stok" required>
                         <button type="submit" class="btn btn-sm btn-primary"> Submmit</button>
                         <button type="reset" class="btn btn-sm btn-danger"> Reset</button>
                     </form>
                 </div>
             </div>
         </section>
     </div>
 </div>