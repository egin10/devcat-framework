<?php
    require_once '../app/Views/partials/header.php';
?>

    <h1 class="text-center">DevCat</h1>
    <hr>
    
    <div class="menu text-center">
        <a href="<?php echo new Url('home'); ?>" class="active">Home</a> |
        <a href="<?php echo new Url('user/show'); ?>">User</a> |
        <a href="<?php echo new Url('about'); ?>">About</a> |
        <a href="https://github.com/egin10/devcat-framework">Github</a>
    </div>
    <hr>

    <h1 class="text-center">Welcome</h1>

<?php
    require_once '../app/Views/partials/footer.php';
?>