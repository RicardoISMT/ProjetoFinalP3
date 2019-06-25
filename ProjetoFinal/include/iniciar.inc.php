<?php

    session_start();
    
    try {
        $connect = new PDO ("mysql:host=localhost;dbname=registar","root", "");
        if(isset($_POST['iniciarconta'])) {

            $email = $_POST['email'];
            $password = $_POST['psw'];
                    
            //Vereficar se o e-mail e/ou a palavra-passe foram preenchidas corretamente     
            if (empty($email) || empty($password)) {
                header("Location: ../ProjetoFinal/iniciar.php?error=empty-fields&e-mail=".$email);
                exit();
            }
            
            //Vereficar se o e-mail inserido é valido
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                header("Location: ../ProjetoFinal/iniciar.php?error=invalid-e-mail&e-mail=".$email);
                exit();
            }

            $select = $connect->prepare("SELECT * FROM users WHERE email='$email' AND pass='$password'");
            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            $data=$select->fetch();

            if($data['email'] != $email && $data['pass'] != $password) {
                header('Location: ../ProjetoFinal/iniciar.php?account-not-registered');

            } elseif($data['email'] == $email && $data['pass'] == $password) {
                $_SESSION['email']=$data['email'];
                $_SESSION['password']=$data['pass'];
                header("Location: ../ProjetoFinal/index.php?session=started");

            }
        }
        }
    
    catch(PDOException $e) {
        echo "error".$e->getMessage();
    }
    
?> 


<!--A ligação estabelecida entre o formulário, presente no website, e a base de dados,e os validadores da informação inserida, foi possível devido aos seguintes:
    Docente Programação II - Frederico Fonseca (PDF's fornecidos)
    Weblesson - https://www.youtube.com/watch?v=b-2_Y53CTYA (tutorial PHP Login PDO)
--> 