<?php
    require_once '../app/Views/partials/header.php';
?>

    <h1 class="text-center">DevCat</h1>
    <hr>
    
    <div class="menu text-center">
        <a href="<?php echo new Url('home'); ?>" class="active">Home</a> |
        <a href="<?php echo new Url('user/show'); ?>">User</a> |
        <a href="<?php echo new Url('about'); ?>">About</a> |
        <a href="https://github.com/egin10/devcat-framework"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
    </div>
    <hr>

    <h1 class="text-center welcome">Welcome</h1>

<?php
    require_once '../app/Views/partials/footer.php';
?>