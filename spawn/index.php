<!DOCTYPE html>
<html>

<head>
    <title>lol</title>
</head>


<body>
    <form action="index.php" method='POST'>
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