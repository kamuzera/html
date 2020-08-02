<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        

        <title>Cadastre-se</title>
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
            <source media="(max-width: 480px)" srcset="../images/mobile-bannercadastre-se.jpg">
            <source media="(min-width: 481px) and (max-width: 980px)" srcset="../images/tablet-bannercadastre-se.jpg">
            <source media="(min-width: 981px)" srcset="../images/desktop-bannercadastre-se.jpg">
            <img src="../images/mobile-bannercadastre-se.jpg" alt="Veiculs KGX bannercadastre-se 1" title="Veiculs KGX bannercadastre-se 1">
        </picture>
    </div>

</header>


<main>
    <div class="texto-responsivo">
    Cadastre-se para obter maiores informações<br>

        <form name="FormularioCadastro" id="FormularioCadastro" method="post" action="../controllers/ControllerInsercao.php">
            <div class="formulario">
                <label for="nome">Nome:* </label><br>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="formulario">
                <label for="email">E-mail: </label><br>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="formulario">
                <label for="Telefone">Telefone: </label><br>
                <input type="tel" id="telefone" name="telefone">
            </div>
            <div class="formulario">
                <label for="TelefoneWp">Telefone (WhatsApp): </label><br>
                <input type="tel" id="telefonewp" name="telefonewp" required>
            </div>
            <div class="formulario">
                <label for="Idade">Idade: </label><br>
                <input type="text" id="idade" name="idade">
            </div>
            <div class="formulario">
                <label for="Cpf">CPF: </label><br>
                <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="formulario">
                <label for="RG">RG: </label><br>
                <input type="text" id="rg" name="rg" required>
            </div>
            <div class="formulario">
                <label for="Salario">Salário: </label><br>
                <input type="text" id="salario" name="salario">
            </div>
            <div class="formulario">
                <label for="DataNascimento">Data Nascimento: </label><br>
                <input type="text" id="datanascimento" name="datanascimento">
            </div>
            <div class="formulario">
                <input type="submit" id="botao" name="botao" value="Cadastrar">
            </div>
            

        </form>
    </div>

</main>

<footer>

 <?php require_once ("../libraries/footer.php")?>

</footer>


</body>






</html>
