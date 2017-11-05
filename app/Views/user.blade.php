<?php
require_once '../app/Views/partials/header.php';
?>

    <h1 class="text-center">User Page</h1>
    <hr>
    
    <div class="menu text-center">
        <a href="<?php echo $GLOBALS['static'] ?>/home">Home</a> |
        <a href="<?php echo $GLOBALS['static'] ?>/user/show" class="active">User</a> |
        <a href="<?php echo $GLOBALS['static'] ?>/about">About</a> |
        <a href="https://github.com/egin10/devcat-framework">Github</a>
    </div>
    <hr>
    
    <ul>
        <?php
            foreach ($data['users'] as $user){
                echo '<li>'.$user['firstname'].' '.$user['lastname'].'</li>';
            }
        ?>
    </ul>

<?php
    require_once '../app/Views/partials/footer.php';
?>