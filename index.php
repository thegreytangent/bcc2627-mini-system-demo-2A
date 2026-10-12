 <?php include 'classes/Page.php'; ?>
<html>
 <?php include 'components/head.php'; ?>
<body>
   <?php include 'components/navbar.php'; ?>
    <div class="layout">
        <?php include 'components/sidebar.php'; ?>
        
        <?php Page::display($_GET['page']); ?>
        
    </div>
</body>
</html>