
<?php 


include 'dbconnection/dbconnection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $expertination = $_POST['expertination'];
    $description = $_POST['description'];
    $class_name  = $_POST['class_name']; 

    $email_query = " select * from trainers where email='$email' ";
    $query = mysqli_query($con, $email_query);

    $email_count = mysqli_num_rows($query);
    if ($email_count > 0) {
        echo "<script> alert('Email already exists');  </script>";
    } else {
        $insert_query = "insert into trainers(name,email,phone_number,expertination,description,class_name) 
              values('$name','$email','$phone_number','$expertination','$description','$class_name')";
        $insert_data = mysqli_query($con, $insert_query);
        if ($insert_data) {

            echo "<script> alert('Successfully Add Trainer');  </script>";
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
                                        <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Add Trainer</h3>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <form style="margin-top: 20px;" action="" method="post">

                                      
                                        <div class="form-group">
                                            <label class="small mb-1">Name</label>
                                            <input class="form-control py-4" type="text" name="name" placeholder="Enter name" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control py-4" type="email" name="email"  placeholder="Enter email" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Phone Number</label>
                                            <input class="form-control py-4" type="number" name="phone_number" placeholder="Enter phone number" required/>
                                        </div>
                                        <label class="small mb-1">Class Name</label>   
                                        <select class="browser-default custom-select" name="class_name" required>
                                        <?php $table = " select * from classes";
                                        $query = mysqli_query($con, $table);
                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>
                                                    <option value="<?php echo $data['name']?>"><?php echo $data['name']?></option>
                                        
                                                    <?php }?>            
                                                </select>
                                        <div class="form-group">
                                            <label class="small mb-1">Expertination</label>
                                            <input class="form-control py-4" type="text" placeholder="Enter expertination" name="expertination" required/>
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1">Description</label>

                                            <textarea class="form-control" aria-label="With textarea" name="description" cols="12" rows="10" required></textarea>
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
    