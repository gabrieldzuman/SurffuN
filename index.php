<?php
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $message = "Mensagem enviada com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SurffuN</title>
    <link rel="icon" type="image/jpg" href="./img/LOGO.jpg">
    <link rel="stylesheet" href="./style.css">
    <meta name="author" content="Gabriel Dzuman">
</head>
<body>
    <header>
        <a href="./index.php">
            <img src="./img/LOGO2.jpg" width="250px" alt="Logo SurffuN">
        </a>
        <nav class="menu">
            <a href="#sobre">Sobre</a>
            <a href="#produtos">Produtos</a>
            <a href="#lojas">Lojas</a>
            <a href="#contato">Contato</a>
        </nav>
    </header>

    <main class="conteudo">
        <section class="introducao">
            <span class="detalhe"></span>
            <h1>Pranchas Feitas a Mão</h1>
            <p>A <b>Faraöt</b> é a melhor prancha já criada pela nossa equipe. Ela é produzida manualmente com os melhores e mais rentáveis materiais.</p>
            <a class="botao" href="#produtos">Ver Mais</a>
        </section>

        <img src="./img/surf.jpg" alt="Surf Mergulho" class="imagem-surf">

        <h2 class="subtitulo">Vantagens SurffuN</h2>

        <div class="vantagens">
            <div class="vantagens-item">
                <h3>Modelos Modernos</h3>
                <p>Quando o surfista brasileiro <i>Peterson Crisanto</i> chegou para o shaper Gabriel Dzuman dizendo que sua NeckBeard 2 poderia funcionar muito bem como uma SurffuN. Então, Dzuman e a sua equipe começaram a trabalhar na reformulação da metade traseira e no rocker da NB2, assim a Faraöt nasceu.</p>
            </div>
            <div class="vantagens-item">
                <h3>Durabilidade / Funcionalidade</h3>
                <p>Sua prancha pode estar linda, leve e sem nenhum malho aberto, mas pode ter certeza que ela já não funciona mais como antigamente. <a href="#">Compre a sua <b>Faraöt</b> aqui</a></p>
            </div>
            <div class="vantagens-item">
                <h3>Segurança</h3>
                <p>Leash mais resistente e antiressecamento, maior aderência à parafina, evitando escorregões e quedas. Decks colocados na parte traseira da prancha, feitos de borracha antiderrapante, garantem que o pé do surfista esteja sempre bem fixo.</p>
            </div>
        </div>

        <section id="contato">
            <h2>Entre em Contato</h2>
            <?php if ($message): ?>
                <p class="success-message"><?php echo $message; ?></p>
            <?php endif; ?>
            <form method="POST" action="">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer class="rodape">
        <div>
            <p>&copy; SurffuN / LegatumProject - Alguns Direitos Reservados. 2024</p>
            <div class="redes-sociais">
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
            </div>
        </div>
    </footer>
</body>
</html>
