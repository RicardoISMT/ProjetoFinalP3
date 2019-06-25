<?php


// php update data in mysql database using PDO

if(isset($_POST['update']))
{
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=registar","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    
    // get values form input text and number
    
    $id = $_POST['id'];
    $alojamento = $_POST['alojamento'];
    $cidade = $_POST['cidade'];
    $uni = $_POST['uni'];
    $distancia = $_POST['distancia'];
    $preco = $_POST['preco'];
    $mail = $_POST['mail'];
    $descricao = $_POST['descricao'];
    $foto = $_POST['foto'];

    //Vereficar se todos os campos foram preenchidas corretamente 
    if(empty($alojamento) || empty($cidade) || empty($uni) || empty($distancia) || empty($preco) || empty($mail) || empty($descricao) || empty($foto)) {
        header("Location: ../ProjetoFinal/alterar.php?edit=failed=empty-fields&alojamento=".$alojamento."&cidade=".$cidade."&uni=".$uni."&distancia=".$distancia."&preco=".$preco."&mail=".$mail."&descricao=".$descricao);
        exit();
        } 
        
        //Vereficar se o e-mail inserido é valido
        else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {  
            header("Location: ../ProjetoFinal/alterar.php?error=invalid-e-mail&e-mail=".$mail);
            exit();
        }
    
    // mysql query to Update data
    
    else { 
        
        $query = "UPDATE `places` SET `id`=:id,`alojamento`=:alojamento,`cidade`=:cidade,`uni`=:uni,`distancia`=:distancia,`preco`=:preco,`mail`=:mail,`descricao`=:descricao,`foto`=:foto WHERE `id` = :id";
    
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