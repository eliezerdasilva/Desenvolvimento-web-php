<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href='/DESENVOLVIMENTO-WEB-PHP/Curso-php/sessao/basico_sessao_alterar.php'>
        Alterar Sessão
    </a>
</p>