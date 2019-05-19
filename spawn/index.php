<!DOCTYPE html>
<html>

<?php 
require_once('header.php');
require_once('db.php');
require_once('spawn.php');
?>


<?php 
if(isset($_POST['reset'])){
    $spawn = "<p> You're in the lobby, please press SPAWN to spawn ! </p>";
}
if(isset($_POST['spawn'])){
    if(isset($_POST['id']) && !(empty($_POST['id']))){
        $new_spawn = new_spawn($db,$_POST['id']);
    }else{
        $new_spawn = new_spawn($db,-1);
    }
    $x = $new_spawn['x'];
    $y = $new_spawn['y'];
    $id = $new_spawn['id'];
    $spawn = "<p>x:$x y:$y</p>";
}else{
    $spawn = "<p> You're in the lobby, please press SPAWN to spawn ! </p>";
}
?>

<body>
    <form action="index.php" method='POST'>
        <?=$spawn;?>
        <input name='id' type='hidden' value="<?php echo($id)?>" />
        <button name=" spawn" type='submit'>SPAWN</button>
    </form>


    <form action="index.php" method='POST'>
        <button name="reset" type='submit'>RESET</button>
    </form>
    <br><br><br>
    <a href='add.php'>Ajouter des spawns</a>
</body>

</html>