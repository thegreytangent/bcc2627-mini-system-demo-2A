<main class="content">
    <h2>Add New Student</h2>
    <div class="container">
        <div class="row">
              <div class="col-lg-12">
                <a href="?page=students" class="btn btn-dark  mb-4 ">Back</a>
              </div>
        </div>
        <div class="row">
            
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
              
                
                <form method="POST" action="modules/student_create.php">
                    <div class="form-group">
                        <label>Student Number:</label>
                        <input type="text" name="student_number" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Firstname:</label>
                        <input type="text" name="firstname" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Lastname:</label>
                        <input type="text" name="lastname" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="date" name="dob" class="form-control" />
                    </div>


                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>


            </div>
        </div>
    </div>
</main>