<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        

        <title>Sobre nós</title>
            <?php require_once ("../libraries/head.php");?>

            <meta name="description" content="KGX Veiculos é uma empresa especializada vendas de veiculos. temos muito anos de experiência na area">
            
            <meta name="keywords" content="sobre empresa de veiculos em itapoa, KGX Veiculos, carros em itapoa">
            
            <meta name="author" content="kmsx3">


    </head>
<body>


<header>
    <?php require_once ("../libraries/body.php")?>
    
    <div class="ind-banner">
        <picture>
            <source media="(max-width: 480px)" srcset="../images/mobile-bannersobrenos.jpg">
            <source media="(min-width: 481px) and (max-width: 980px)" srcset="../images/tablet-bannersobrenos.jpg">
            <source media="(min-width: 981px)" srcset="../images/desktop-bannersobrenos.jpg">
            <img src="../images/mobile-bannersobrenos.jpg" alt="Veiculs KGX bannersobrenos 1" title="Veiculs KGX bannersobrenos 1">
        </picture>
    </div>

</header>


<main>
    <div class="texto-responsivo">
        <h1>Formulário de contato</h1>
   <form name="FormularioContato" id="FomularioContato" method="post" action="../controllers/ControllerContato.php">
        <div class="formulario">
            <label for="Name">Nome</label><br>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="formulario">
            <label for="Email">E-mail</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="formulario">
            <label for="TelefoneWp">Telefone (WhatsApp)</label><br>
            <input type="tel" id="telefonewp" name="telefonewp" required>
        </div>

        <div class="formulario">
            <label for="Mensagem">Mensagem</label><br>
            <textarea name="mensagem" id="mensagem" ></textarea>
        </div>
        <div class="formulario">
            <input type="submit" id="botao" name="botao" value="Enviar">
        </div>

   </form>
    </div>

</main>

<footer>

 <?php require_once ("../libraries/footer.php")?>

</footer>


</body>






</html>
