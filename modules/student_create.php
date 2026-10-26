<?php include '../config/config.php'; ?>
<?php include '../classes/Page.php'; ?>
<?php include '../classes/Person.php'; ?>
<?php include '../classes/Student.php'; ?>

<?php include '../repositories/IStudentRepository.php'; ?>
<?php include '../repositories/DBRepository.php'; ?>
<?php include '../repositories/StudentRepository.php'; ?>

<?php
$student_number = $_POST['student_number'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];

StudentRepository::create([
    'student_number' => $student_number,
    'firstname' => $firstname,
    'lastname' => $lastname,
    'dob' => $dob,
]);

header("location: ../index.php?page=students");