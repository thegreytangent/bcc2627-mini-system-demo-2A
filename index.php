<?php include 'classes/Page.php'; ?>
<?php include 'classes/Person.php'; ?>
<?php include 'classes/Student.php'; ?>

<?php include 'repositories/IStudentRepository.php'; ?>
<?php include 'repositories/DBRepository.php'; ?>
<?php include 'repositories/StudentRepository.php'; ?>



<html>
 <?php include 'components/head.php'; ?>
<body>
   <?php include 'components/navbar.php'; ?>
    <div class="layout">
        <?php include 'components/sidebar.php'; ?>

        <?php  
        
        Page::display($_GET['page'] ?? "dashbooard"); 
        
        
        ?>
        
    </div>
</body>
</html>