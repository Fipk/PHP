<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php

    if(date('H') >= 7 && date('H')<= 19){?>
    <style>
    body {
        background-color: white;
        color: black
    }
    </style>
    <?php }else{?>
    <style>
    body {
        background-color: black;
        color: white
    }
    </style>
    <?php }?>
</head>