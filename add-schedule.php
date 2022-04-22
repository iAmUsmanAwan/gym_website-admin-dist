<?php


include 'dbconnection/dbconnection.php';
if (isset($_POST['submit'])) {
    $class_name = $_POST['class_name'];
    $trainer_name = $_POST['trainer_name'];
    $timing = $_POST['timing'];
    $day_of_week = $_POST['day_of_week'];
    $description = $_POST['description'];

    $insert_query = "insert into schedules(class_name,trainer_name,timing,day_of_week,description) 
              values('$class_name','$trainer_name','$timing','$day_of_week','$description')";
    $insert_data = mysqli_query($con, $insert_query);
    if ($insert_data) {

        echo "<script> alert('Successfully Add Schedule');  </script>";
    } else {
        echo "<script> alert('Error');  </script>";
    }
}


?>
<?php include 'header.php';   ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-xl-4 col-sm-12">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div>
                                <img src="./assets/img/fuse.svg" style="display: inline !important;padding-right:10px" alt="logo" width="60" height="60">
                                <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Add Schedule</h3>

                            </div>
                        </div>
                        <div class="card-body">
                            <form style="margin-top: 20px;" action="" method="post">
                                <div class="form-group">
                                    <label class="small mb-1">Class Name</label>
                                    <select class="browser-default custom-select" name="class_name" required>
                                        <?php $table = " select * from classes";
                                        $query = mysqli_query($con, $table);
                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>
                                            <option value="<?php echo $data['name'] ?>"><?php echo $data['name'] ?></option>

                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1">Trainer Name</label>
                                    <select class="browser-default custom-select" name="trainer_name" required>
                                        <?php $table = " select * from trainers";
                                        $query = mysqli_query($con, $table);
                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>
                                            <option value="<?php echo $data['name'] ?>"><?php echo $data['name'] ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Timing</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter timing" name="timing" required />
                                </div>
                                <label class="small mb-1">Please select day of week</label>
                                <select class="browser-default custom-select" name="day_of_week" required>

                                    <option value="monday" selected>Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="wednesday">Wednesday</option>
                                    <option value="thursday">Thursday</option>
                                    <option value="friday">Friday</option>

                                    <option value="staurday">Staurday</option>
                                    <option value="sunday">Sunday</option>
                                </select>

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

<?php include 'footer.php'; ?>