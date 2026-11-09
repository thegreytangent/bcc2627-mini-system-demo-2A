<main class="content">
    <h2>Student Information</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=student-add" class="btn btn-success mb-4 ">Add Student</a>
      
                <table class="table table-bordered table-responsive text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Student Number</th>
                            <th>Complete Name</th>
                            <th>Date of Birth</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php foreach(StudentRepository::all() as $student) : ?>
                    <tr>
                        <td><?php echo $student->getIdNumber(); ?></td>
                        <td><?php echo $student->completeName(); ?></td>
                        <td><?php echo $student->dateOfBirth(); ?></td>
                        <td>
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger" onclick="deleteData('<?php echo $student->getId(); ?>')">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
function deleteData(id) {
if (confirm('do you want to delete the data?')) {
    window.location  = "modules/student_delete.php?id=" + id;
} else {
 alert("data cannot be deleted");
}

;
}
</script>