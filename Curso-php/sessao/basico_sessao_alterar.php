<?php
session_start();
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'gabrielfilho_alterado@emailaz.com.br';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>


<p>
    <a href='DESENVOLVIMENTO-WEB-PHP/Curso-php/exercicio.php?dir=sessao&file=basico_sessao.php'>Voltar</a>
</p>
<p>
    <a href='DESENVOLVIMENTO-WEB-PHP/Curso-php/exercicio.php?dir=sessao&file=basico_sessao_limpar.php'>Limpar Sessão</a>
</p>