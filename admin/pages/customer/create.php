 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Add Customer</h1>
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
                     <h5>Add Customer</h5>
                     <form action="pages/customer/action.php?act=insert" method="POST">
                         <input class="form-control mb-2" type="text" name="customer_code" placeholder="Kode Customer" required>
                         <input class="form-control mb-2" type="text" name="customer_name" placeholder="Name Customer" required>
                        
                         <input class="form-control mb-2" type="text" name="phone" placeholder="No Telepon" required>
                         <input class="form-control mb-2" type="text" name="customer_address" placeholder="Alamat" required>
                         <button type="submit" class="btn btn-sm btn-primary"> Submmit</button>
                         <button type="reset" class="btn btn-sm btn-danger"> Reset</button>
                     </form>
                 </div>
             </div>
         </section>
     </div>
 </div>