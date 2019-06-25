
<?php
    try {
        $sqlconnection = new pdo ('mysql:host=localhost;dbname=registar;charset=utf8','root','');
    } catch(PDOException $pe) {
        echo 'erro';
        die;
    }
?>


<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>ClassyRent - Aluguer de quartos para universitários</title>
        <meta name="author" content="Ricardo Malva">
        <meta name="description" content="ClassyRent - Aluguer de quartos universitários">
        <meta name="keyword" content="Alojamento, universidades, quartos para estudantes">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css.php">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="imagens/classyicon.png"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    
    <body>

        <a id="top"></a>
        <a href="index.php"><img class="classylogo" src="imagens/classyrentlogo.png" alt="Logótipo da ClassyRent"></a>
            
        <nav class="classynavbar">
            <a class="lingua">Português<img class="anglearrowdown" src="imagens/portugal.png" alt="Bandeira do país de Portugal"></a>
            
            <?php
                include("login.php");
            ?>

        </nav>

        <a id="search"></a>

        <main>

            <section class="landback">

                <div class="landbox">

                    <p class="landtitle">Encontra a estadia mais próxima da tua<br> Universidade!</p>

                        <?php
                            include("erromsg.php");
                        ?>

                        <?php
                            include("include/index.inc.php");
                        ?>                   

                    <form name="searchform" method="post">

                        <input class="inseririnfo" list="alojamento" name="alojamento" type="text" value="" placeholder="Apartamentos, quartos ou estúdios">   
                        <datalist id="alojamento">
                            <option value="Apartamento">
                            <option value="Quarto">
                            <option value="Estúdio">
                        </datalist>    

                        <input class="inseririnfocity" list="cidade" name="cidade" type="text" value="" placeholder="Cidade">
                        <datalist id="cidade">
                            <option value="Coimbra">
                        </datalist>

                        <input class="inseririnfo" list="uni" type="text" name="uni" value="" placeholder="Universidade ou instituto">
                        <datalist id="uni">
                            <option value="Instituto Superior Miguel Torga">
                            <option value="Faculdade de Ciências do Desporto e Educação Física">
                            <option value="Faculdade de Ciências e Tecnologia">
                            <option value="Instituto de Direito">
                            <option value="Faculdade de Economia">
                            <option value="Faculdade de Farmácia">
                            <option value="Faculdade de Letras">
                            <option value="Faculdade de Medicina">
                            <option value="Faculdade de Psicologia e de Ciências da Educação">
                            <option value="Escola Superior de Enfermagem de Coimbra">
                            <option value="Escola Superior Agrária de Coimbra">
                            <option value="Escola Superior de Educação de Coimbra">
                            <option value="Escola Superior de Tecnologia e Gestão de Oliveira do Hospital">
                            <option value="Escola Superior de Tecnologia da Saúde de Coimbra">
                            <option value="Instituto Superior de Contabilidade e Administração de Coimbra">
                            <option value="Instituto Superior de Contabilidade e Administração de Coimbra">
                            <option value="Instituto Superior de Engenharia de Coimbra">
                            <option value="Escola Universitária Vasco da Gama">
                        </datalist>

                        <button type="submit" class="procurarbtn" name="procurardados">Procurar</button>

                    </form>

                </div>
            </section>


            <section>
                <div class="introdiv">
                    <p class="introdivtitle">Nunca foi tão fácil encontrar um espaço perfeito.</p>
                    <p>No nosso website oferecemos as melhores opções para alojamento perto da tua universidade de preferência.<br>Assim vais poder desfrutrar de uma bela estadia enquanto amplias o teu conhecimento.</p>
                    <p>Procura a tua estadia ideal <a class="aquihigh" href="#search">aqui</a>.</p>
                </div>
            </section>


            <section>

                <a id="searchfound"></a>

                <div>
                    <p class="destaquetitle">Alojamento em destaque</p>

                    <?php
                        include("include/random.inc.php");
                    ?>

                </div>

            </section> 

            <?php 
                include("new.php");
            ?> 

            <?php 
                include("include/meu.inc.php");
            ?> 

            <?php 
                include("include/eliminar.inc.php");
            ?> 

            <?php
                include("footer.php");
            ?>
        
        </main>
        
    </body>

</html>