<div class="titulo">Desafio tabela</div>

<?php
$array = [
    ['01','02','03','04','05'],
    ['06','07','08','09','10'],
    ['11','12','13','14','15'],
    ['11','12','13','14','15']
];
foreach($array as $linhas){
    foreach($linhas as $valor){
        echo " $valor ";
    }
    echo "<br>";
}
?>
<table>
    <?php
        foreach($array as $linhas){
            echo '<tr>';
            foreach($linhas as $valor){
                echo "<td> $valor </td>";
            }
            echo '<tr>';
        }
    ?>
</table>

<table>
    <?php
        foreach($array as $index => $linhas){
            $style = $index % 2 ===1 ?
                'background-color: red;':'';
                echo "<tr style ='{$style}'>";
                foreach($linhas as $valor){
                    echo "<td>$valor</td>";
                }
                echo '<tr>';
            }

        
    
    ?>
</table>

<style>
    table{
        border: 1px solid #444;
        border-collapse:collapse;
        margin: 20px 0px;
    }
    table tr{
        border: 10px 20px;
    }
    table td{
        padding: 10px 20px;
    }
</style>    