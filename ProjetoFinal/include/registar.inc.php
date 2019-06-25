<?php
    session_start();
    
    try {
        $connect = new PDO ("mysql:host=localhost;dbname=registar","root", "");
            if(isset($_POST['registarconta'])) {

            $person = $_POST['person'];
            $email = $_POST['mail'];
            $password = $_POST['psw'];
            $password1 = $_POST['psw1'];
            
                    
            //Vereficar se o e-mail e/ou a palavra-passe foram preenchidas corretamente     
            if (empty($person) || empty($email) || empty($email) || empty($password)) {
                header("Location: ../ProjetoFinal/registar.php?error=empty-fields&e-mail=".$email."&name=".$person);
                exit();
            }

            //Vereficar se o e-mail inserido é valido
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                header("Location: ../ProjetoFinal/registar.php?error=invalid-e-mail&e-mail=".$email);
                exit();

            } else if ($password != $password1) {  
                header("Location: ../ProjetoFinal/registar.php?error=confirm-password");
                exit();
            }

            $insert = $connect->prepare("INSERT INTO users (email,pass,person) VALUES (:mail,:psw,:person)");
            $insert->bindParam(':mail',$email);
            $insert->bindParam(':psw',$password);
            $insert->bindParam(':person',$person);
            $insert->execute();

            header('Location: ../ProjetoFinal/iniciar.php?register=success');
            }
        }
        catch(PDOException $e) {
            echo "error".$e->getMessage();
        }

    /* A ligação estabelecida entre o formulário, presente no website, e a base de dados,e os validadores da informação inserida, foi possível devido aos seguintes:
    Docente Programação II - Frederico Fonseca (PDF's fornecidos)
    Mujahid Khan - https://www.youtube.com/watch?v=DBf6pkaw1iI (tutorial PHP PDO)
    Mmtuts - https://www.youtube.com/watch?v=yWJFbPT3TC0 (tutorial PDO PHP)    
    */                  
                
?>