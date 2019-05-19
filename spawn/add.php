<!DOCTYPE html>
<html>

<?php 
require_once('header.php');
require_once('db.php');
require_once('spawn.php');
?>

<?php if(isset($_POST['add'])){
        add_spawn($db,$_POST['x'],$_POST['y']);
}
?>

<body>
    <form action="add.php" method='POST'>
        <?=$spawn;?>
        <label>x : </label>
        <input name='x' type='text' />
        <label>y : </label>
        <input name='y' type='text' />
        <button name="add" type='submit'>ADD SPAWN</button>
    </form>

    <br><br><br>
    <a href='index.php'>GO TO LOBBY</a>
</body>

</html>