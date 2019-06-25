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
                include("include/iniciar.inc.php");
            ?> 
        
            <main>
        
                <section class="backgroundsection">

                    <div class="iniciarbox">
                        <p class="iniciartitle">Iniciar sessão</p>

                        <form name="iniciarsessao" method="post">

                            <input class="emailbtn" type="text" placeholder="Email" name="email"><br>
                            <input class="pswbtn" type="password" placeholder="Palavra-passe" name="psw"><br>
                            <button type="submit" class="criarbtn" name="iniciarconta">Entrar<img class="arrowcriar" src="imagens/right-arrow-white.png" alt="seta indicadora para o lado direito"></button>
                                

                                <div class="crieconta">
                                
                                    <?php
                                        include("erromsg.php");
                                    ?>
                                    <p>Ainda não se registou? <a class="criecontahigh" href="registar.php">Crie conta</a>.</p>
                                    
                                </div>

                        </form>
                    </div>

                </section>
        
        
        
        
            </main>

        </body>

</html>