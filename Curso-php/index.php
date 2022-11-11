<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 basicos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Ola php</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integracao html</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integracao css</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02 tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritmeticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Procedêcia PHP</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>