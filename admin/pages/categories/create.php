 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6 d-flex justify-content-center">
                 <h1 class="m-0">Add Category</h1>
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
                     <h5>Add Category</h5>
                     <form action="pages/category/action.php?act=insert" method="POST">
                         <input class="form-control mb-2" type="text" name="category_name" placeholder="Kategori" required>
                         <button type="submit" class="btn btn-sm btn-primary"> Submmit</button>
                         <button type="reset" class="btn btn-sm btn-danger"> Reset</button>
                     </form>
                 </div>
             </div>
         </section>
     </div>
 </div>