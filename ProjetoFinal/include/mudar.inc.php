<?php


// php update data in mysql database using PDO

if(isset($_POST['mudar']))
{
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=registar","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    
    // get values form input text and number
    
    $psw = $_POST['psw'];
    $psw1 = $_POST['psw1'];
  

    //Vereficar se todos os campos foram preenchidas corretamente 
    if(empty($psw) || empty($psw1) || empty($email)
    {
        header("Location: ../ProjetoFinal/mudar.php?change=failed=empty-fields&e-mail=".$email.);
        exit();
        } 
        
        //Vereficar se o e-mail inserido é valido
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            header("Location: ../ProjetoFinal/alterar.php?error=invalid-e-mail&e-mail=".$mail);
            exit();
        }
    
    
    else { 
        
        $query = "UPDATE `users` SET `email`=:email,`cidade`=:cidade,`uni`=:uni,`distancia`=:distancia,`preco`=:preco,`mail`=:mail,`descricao`=:descricao,`foto`=:foto WHERE `id` = :id";
    
        $pdoResult = $pdoConnect->prepare($query);
    
        $pdoExec = $pdoResult->execute(array(":id"=>$id,":alojamento"=>$alojamento,":cidade"=>$cidade,":uni"=>$uni,":distancia"=>$distancia,":preco"=>$preco,":mail"=>$mail,":descricao"=>$descricao,":foto"=>$foto));
    
        if($pdoExec)
        {
            header("Location: ../ProjetoFinal/alterar.php?edit=success");
        } else{
            header("Location: ../ProjetoFinal/alterar.php?edit=success");
        }
    }
}

// Update - https://www.youtube.com/watch?v=Zm1T3YBZtP0

?>