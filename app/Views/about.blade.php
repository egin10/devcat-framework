<?php
require_once '../app/Views/partials/header.php';
?>

    <h1 class="text-center">About</h1>
    <hr>
    
    <div class="menu text-center">
        <a href="<?php echo new Url('home'); ?>">Home</a> |
        <a href="<?php echo new Url('user/show'); ?>">User</a> |
        <a href="<?php echo new Url('about'); ?>" class="active">About</a> |
        <a href="https://github.com/egin10/devcat-framework"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
    </div>
    <hr>

    <p class="text-center">
        This is a simple MVC using PHP.
    </p>

<?php
    require_once '../app/Views/partials/footer.php';
?>