<?php
    session_start();
    
    try {
        $connect = new PDO ("mysql:host=localhost;dbname=registar","root", "");




            if(isset($_POST['add'])) {

            $alojamento = $_POST['alojamento'];
            $cidade = $_POST['cidade'];
            $uni = $_POST['uni'];
            $distancia = $_POST['distancia'];
            $preco = $_POST['preco'];
            $mail = $_POST['mail'];
            $descricao = $_POST['descricao'];
            $foto = $_POST['foto'];
                    
            //Vereficar se todos os campos foram preenchidas corretamente     
            if (empty($alojamento) || empty($cidade) || empty($uni) || empty($distancia) || empty($preco) || empty($mail) || empty($descricao) || empty($foto)) {
                header("Location: ../ProjetoFinal/adicionar.php?error=empty-fields&alojamento=".$alojamento."&cidade=".$cidade."&uni=".$uni."&distancia=".$distancia."&preco=".$preco."&mail=".$mail."&descricao=".$descricao);
                exit();
            }
            
            //Vereficar se o e-mail inserido é valido
            else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {  
                header("Location: ../ProjetoFinal/adicionar.php?error=invalid-e-mail&e-mail=".$mail);
                exit();
            }

            $insert = $connect->prepare("INSERT INTO places (alojamento, cidade, uni, distancia, preco, mail, descricao, foto) VALUES (:alojamento, :cidade, :uni, :distancia, :preco, :mail, :descricao, :foto)");
            $insert->bindParam(':alojamento',$alojamento);
            $insert->bindParam(':cidade',$cidade);
            $insert->bindParam(':uni',$uni);
            $insert->bindParam(':distancia',$distancia);
            $insert->bindParam(':preco',$preco);
            $insert->bindParam(':mail',$mail);
            $insert->bindParam(':descricao',$descricao);
            $insert->bindParam(':foto',$foto);
            $insert->execute();

            header("Location: ../ProjetoFinal/adicionar.php?add=success");
            } 
            
            
            


            
            // Remover um alojamento da base de dados através do formulário
            //youtube -> https://www.youtube.com/watch?v=1hltUwGvgn8 &  & https://www.youtube.com/watch?v=-Ev-M7qGIao 
            //blog -> http://1bestcsharp.blogspot.com/2016/07/php-pdo-insert-update-delete-search.html

            else if (isset($_POST['remove'])){

            $alojamento = $_POST['alojamento'];
            $cidade = $_POST['cidade'];
            $uni = $_POST['uni'];
            $distancia = $_POST['distancia'];
            $preco = $_POST['preco'];
            $mail = $_POST['mail'];
            $descricao = $_POST['descricao'];
            $foto = $_POST['foto'];

            //Vereficar se todos os campos foram preenchidas corretamente 
            if(empty($alojamento) || empty($cidade) || empty($uni) || empty($distancia) || empty($preco) || empty($mail) || empty($descricao) ||   empty($foto)) {
            header("Location: ../ProjetoFinal/adicionar.php?remove=failed=empty-fields&alojamento=".$alojamento."&cidade=".$cidade."&uni=".$uni."&distancia=".$distancia."&preco=".$preco."&mail=".$mail."&descricao=".$descricao);
            exit();
            } 
            
            //Vereficar se o e-mail inserido é valido
            else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {  
                header("Location: ../ProjetoFinal/adicionar.php?error=invalid-e-mail&e-mail=".$mail);
                exit();
            }
            
            else {
                $deletestmt = $connect->prepare("DELETE FROM places WHERE alojamento = :alojamento AND cidade = :cidade AND uni = :uni AND distancia = :distancia AND preco = :preco AND mail = :mail AND descricao = :descricao AND foto = :foto");
                
                $deletestmt->bindParam('alojamento', $_POST['alojamento']);
                $deletestmt->bindParam('cidade', $_POST['cidade']);
                $deletestmt->bindParam('uni', $_POST['uni']);
                $deletestmt->bindParam('distancia', $_POST['distancia']);
                $deletestmt->bindParam('preco', $_POST['preco']);
                $deletestmt->bindParam('mail', $_POST['mail']);
                $deletestmt->bindParam('descricao', $_POST['descricao']);
                $deletestmt->bindParam('foto', $_POST['foto']);
                $deletestmt->execute();
                
                if($deletestmt->rowcount()>0)
                {
                    header("Location: ../ProjetoFinal/adicionar.php?edit=success");
                } else {
                    header("Location: ../ProjetoFinal/adicionar.php?edit=failed");
                }
                
            }
        }
    }

    catch(PDOException $e) {
        echo "error".$e->getMessage();
    }

?>