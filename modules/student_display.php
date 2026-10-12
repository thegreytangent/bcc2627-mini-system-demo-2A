<main class="content">
    <h2>Student Information</h2>

    <br> <br> <br>
<?php
 $student = new Student('12-2334', 'John','Dela Cruz', '1922-2-23');
?>

    <table border="1">
        <tr>
            <td>Student Number</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Date of Birth</td>
        </tr>
        <tr>
            <td><?php $student->id_number; ?></td>
            <td>John</td>
            <td>Dela Cruz</td>
            <td>January 1, 2025</td>

        </tr>
    </table>



</main>