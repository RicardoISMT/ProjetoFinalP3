<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>ClassyRent - Aluguer de quartos universitários</title>
        <meta name="author" content="Ricardo Malva">
        <meta name="description" content="ClassyRent - Aluguer de quartos universitários">
        <meta name="keyword" content="Alojamento, universidades, quartos para estudantes">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/beforestyle.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="imagens/classyicon.png"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    
    <body>
        <?php
            include("header.php");
        ?>

        <?php
            include("include/registar.inc.php");
        ?>              

        <main>
            <section class="backgroundsection">
                <div class="iniciarbox">
                    <p class="iniciartitle">Registar</p>
                    <form name="registarconta" method="post">
                        <input class="emailbtn" type="text" placeholder="Primeiro Nome" name="person"><br>
                        <input class="emailbtn" type="text" placeholder="Email" name="mail"><br>
                        <input class="pswbtn" type="password" placeholder="Palavra-passe" name="psw"><br>
                        <input class="pswbtn" type="password" placeholder="Confirmar a palavra-passe" name="psw1"><br>
                        <button type="submit" class="criarbtn" name="registarconta">Criar<img class="arrowcriar" src="imagens/right-arrow-white.png" alt="seta indicadora para o lado direito"></button>
                    </form>

                    <div class="crieconta">

                    <p> <?php
                            include("erromsg.php");
                        ?>

                        Já criou uma conta? <a class="criecontahigh" href="iniciar.php">Inicie a sessão</a>.</p>
                    </div>

                </div>
            </section>
                    
        </main>
        
    </body>
</html>