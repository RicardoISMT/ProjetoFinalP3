<?php
session_start();

try {
    $pdoConnect = new PDO("mysql:host=localhost;dbname=registar","root","");
if(isset($_SESSION["email"])) {

    $email = $_SESSION['email'];
    
    $pdoQuery = "SELECT * FROM users WHERE email = :email";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":email"=>$email));

            if($pdoExec)
            {
            // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
            if($pdoResult->rowCount()>0)
            {
                foreach($pdoResult as $row)
                {
                    $email = $row['email'];
                    $person = $row['person'];

                    echo '<a href="sair.php" class="inicio">Bem-vindo, '.$row["person"],' (Logout)</a>
                    <a class="inicio" href="adicionar.php"><img class="plusbutton" src="imagens/plus-button.png" alt="botão de adicionar">Adicionar</a>
                    ';

            }} else {
            echo '<a class="registo" href="registar.php">Registar</a>
            <a class="inicio" href="iniciar.php">Iniciar sessão</a>';
            }}} else {
                echo '<a class="registo" href="registar.php">Registar</a>
                <a class="inicio" href="iniciar.php">Iniciar sessão</a>';} 
            }
            
            catch (PDOException $exc) {
            echo $exc->getMessage();
            exit();
            }
?>
 
<!-- Mostrar diferentes opções após iniciar a sessão - https://www.youtube.com/watch?v=b-2_Y53CTYA -->