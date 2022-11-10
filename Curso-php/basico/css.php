<div class= "titulo">integracao CSS</div>

<h1 center>
<?php
echo 'ola';
echo '<small>';
echo 'Mundo!';
echo '</small>';
?> 
</h1>
<?= "<div center azul> Outra forma</div>"?>

<br>
<div center><button dobro><?= "Legal" ?></button></div>


<style>
    button {
        padding: 5px 20px;
        background-color: #4386f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 50px;


    }
    [center]{
        display flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4
    }
    [dobro]{
       font-size: 2rem; 
    }
</style>