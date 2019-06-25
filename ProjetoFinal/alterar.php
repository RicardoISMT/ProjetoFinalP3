<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>ClassyRent - Aluguer de quartos universitários</title>
    <meta name="author" content="Ricardo Malva">
    <meta name="description" content="ClassyRent - Aluguer de quartos universitários">
    <meta name="keyword" content="Alojamento, universidades, quartos para estudantes">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/addstyle.css.php">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="imagens/classyicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
    
    <body>
            
            <a href="index.php"><img  class="classylogo" src="imagens/classyrentlogo.png" alt="Logótipo da ClassyRent"></a>
            
            
            <nav class="classynavbar">
                <a class="lingua">Português<img class="anglearrowdown" src="imagens/portugal.png" alt="Bandeira do país de Portugal"></a>
                <a class="inicio" href="index.php">Página principal</a>
            </nav>
        
            <main>

            <?php
                include("include/edit.inc.php");
            ?>

                <section class="backgroundsection">

                    <div class="adicionarbox">

                        <p class="adicionartitle">Editar alojamento</p>
                        
                        
                            <?php
                            include("erromsg.add.php");
                            ?>
                        

                        <form name="inserirnew" method="post">
                            <input class="inserirbox" type="text" placeholder="Id" name="id"><br>
                            <input class="inserirbox" type="text" placeholder="Alojamento" name="alojamento">
                            <input class="inserirbox" type="text" placeholder="Cidade" name="cidade"><br>
                            <input class="inserirbox" type="text" placeholder="Universidade/Instituto" name="uni">
                            <input class="inserirbox" type="number" min="0" placeholder="Distância/metros" name="distancia"><br>
                            <input class="inserirbox" type="number" min="0" placeholder="Preço/mês" name="preco">
                            <input class="inserirbox" type="text" placeholder="E-mail" name="mail"><br>
                            <input class="descricaobox" type="text" placeholder="Descrição" name="descricao">
                            <input class="escolherbox" type="file" name="foto"><br>
                            <button type="submit" class="criarbtn" name="update">Confirmar <img class="addcriar1" src="imagens/edit.png" alt="símbolo de editar"></button>
                        </form>
                        
                    </div>

                </section>
        
        
        
        
            </main>
        
        
        
        </body>

</html>
