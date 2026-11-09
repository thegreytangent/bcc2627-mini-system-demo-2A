<?php
$id = $_GET['id'];
$student = StudentRepository::find($id);

?>
<main class="content">
    <h2>Edit Student</h2>
    <div class="container">
        <div class="row">
              <div class="col-lg-12">
                <a href="?page=students" class="btn btn-dark  mb-4 ">Back</a>
              </div>
        </div>
        <div class="row">
            
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
              
                
                <form method="POST" action="modules/student_update.php?id=<?php echo $student['id']; ?>">
                    <div class="form-group">
                        <label>Student Number:</label>
                        <input type="text" value="<?php echo $student['student_number']; ?>" name="student_number" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Firstname:</label>
                        <input type="text" name="firstname" value="<?php echo $student['firstname']; ?>" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Lastname:</label>
                        <input type="text" name="lastname" value="<?php echo $student['lastname']; ?>" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="date" name="dob" value="<?php echo $student['dob']; ?>" class="form-control" />
                    </div>


                    <button type="submit" class="btn btn-info mt-4">Update</button>
                </form>


            </div>
        </div>
    </div>
</main>