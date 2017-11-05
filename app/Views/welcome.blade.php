<?php
    require_once '../app/Views/partials/header.php';
?>

    <h1>DevCat</h1>
    <hr>
    
    <div class="menu">
        <a href="<?php echo $GLOBALS['static'] ?>/home" class="active">Home</a> |
        <a href="<?php echo $GLOBALS['static'] ?>/user/show">User</a> |
        <a href="<?php echo $GLOBALS['static'] ?>/about">About</a> |
        <a href="https://github.com/egin10/devcat-framework">Github</a>
    </div>

<?php
    require_once '../app/Views/partials/footer.php';
?>