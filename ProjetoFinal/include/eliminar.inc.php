<?php
    
    try {
        $connect = new PDO ("mysql:host=localhost;dbname=registar","root", "");
            if(isset($_POST['eliminarconta'])) {

            $email = $_POST['email'];
            $password = $_POST['psw'];
            $password1 = $_POST['psw1'];
                    
            //Vereficar se o e-mail e/ou a palavra-passe foram preenchidas corretamente     
            if (empty($email) || empty($password) || empty($password1)) {
                header("Location: ../ProjetoFinal/apagar.php?error=empty-fields&e-mail=".$email);
                exit();
            }

            //Vereficar se o e-mail inserido é valido
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                header("Location: ../ProjetoFinal/apagar.php?error=invalid-e-mail&e-mail=".$email);
                exit();

            } else if ($password != $password1) {  
                header("Location: ../ProjetoFinal/apagar.php?error=confirm-password");
                exit();
            }

            else {
                $deletestmt = $connect->prepare("DELETE FROM users WHERE email = :email AND pass = :pass");
                
                $deletestmt->bindParam('email', $_POST['email']);
                $deletestmt->bindParam('pass', $_POST['psw']);
                $deletestmt->execute();
                
                if($deletestmt->rowcount()>0)
                {
                    header("Location: ../ProjetoFinal/sairconta.php");
                } else {
                    header("Location: ../ProjetoFinal/apagar.php?account-not-deleted");
                }
            }
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