
<?php  include 'check_admin_login.php';   ?>
<?php 


include 'dbconnection/dbconnection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];


    $class_name_query = " select * from classes where name='$name' ";
    $query = mysqli_query($con, $class_name_query);

    $class_name_count = mysqli_num_rows($query);
    if ($class_name_count > 0) {
        echo "<script> alert('Class already exists');  </script>";
    } else {
        $insert_query = "insert into classes(name,description,image_url) 
              values('$name','$description','')";
        $insert_data = mysqli_query($con, $insert_query);
        if ($insert_data) {

            echo "<script> alert('Successfully Add Class');  </script>";
        } else {
            echo "<script> alert('Error');  </script>";
        }
    }
    
}


?> 



<?php  include 'header.php';   ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-xl-4 col-sm-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div>
                                        <img src="./assets/img/fuse.svg" style="display: inline !important;padding-right:10px" alt="logo" width="60" height="60">
                                        <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Add class</h3>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <form style="margin-top: 20px;" action="" method="post">

                                        <div class="form-group">
                                            <label class="small mb-1">Class Name</label>
                                            <input class="form-control py-4" type="text" placeholder="Enter class name" name="name" required/>
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1">Description</label>

                                            <textarea class="form-control" aria-label="With textarea" cols="12" rows="10" name="description" required></textarea>
                                        </div>
                                       



                                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" name="submit" type="submit">Submit</button></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2020</div>

                    </div>
                </div>
            </footer>
        </div>
    
<?php include 'footer.php';?>