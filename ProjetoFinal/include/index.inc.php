<?php
   
    try {
        $connect = new PDO ("mysql:host=localhost;dbname=registar","root", "");
        if(isset($_POST['procurardados'])) {


            $alojamento = $_POST['alojamento'];
            $cidade = $_POST['cidade'];
            $uni = $_POST['uni'];


            if (empty($alojamento) && empty($cidade) && empty($uni)){
                echo "<p class='erromsg'><strong>Atenção: O formulário não foi preenchido corretamente!</strong></p>";   
            }

            

            //Mensagem de erro para ALOJAMENTO
            else if (empty($cidade) && empty($uni)){
            
                $select = $connect->prepare("SELECT * FROM places WHERE alojamento='$alojamento'");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $data=$select->fetch();


                if($data['alojamento'] == $alojamento){
                    echo "<p class='erromsga'><strong>Sucesso: Foram encontrados alojamentos disponíveis perto de si!</strong></p>";
                } else if($data['alojamento'] != $alojamento){
                    echo "<p class='erromsg'><strong>Atenção: Não foram encontrados alojamentos disponíveis perto de si!</strong></p>";
                } else {
                echo "Erro alojamento";
                } 
            }
        
                
            //Mensagem de erro para CIDADE
            else if (empty($alojamento) && empty($uni)){
            
                $select = $connect->prepare("SELECT * FROM places WHERE cidade='$cidade'");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $data=$select->fetch();


                if ($data['cidade'] == $cidade){
                    echo "<p class='erromsga'><strong>Sucesso: Foram encontrados alojamentos disponíveis na cidade escolhida!</strong></p>";
                } else if($data['cidade'] != $cidade ){
                    echo "<p class='erromsg'><strong>Atenção: Não foram encontrados alojamentos disponíveis na cidade escolhida!</strong></p>";
                } else {
                    echo "Erro cidade";
                } 
            }


            //Mensagem de erro para UNIVERSIDADE
            else if (empty($alojamento) && empty($cidade)){
            
                $select = $connect->prepare("SELECT * FROM places WHERE uni='$uni'");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $data=$select->fetch();


                if ($data['uni'] == $uni){
                    echo "<p class='erromsga'><strong>Sucesso: Foram encontrados alojamentos perto do/a seu/ua Instituto/Universidade!</strong></p>";
                } else if($data['uni'] != $uni ){
                    echo "<p class='erromsg'><strong>Atenção: Não foram encontrados alojamentos perto do/a seu/ua Instituto/Universidade!</strong></p>";
                } else {
                    echo "Erro universidade";
                } 
            }


            //Mensagem de erro para ALOJAMENTO e UNIVERSIDADE 
            else if (empty($cidade)){

                $select = $connect->prepare("SELECT * FROM places WHERE alojamento='$alojamento' AND uni='$uni'");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $data=$select->fetch();


                if ($data['uni'] == $uni){
                    echo "<p class='erromsga'><strong>Sucesso: Foram encontrados alojamentos perto do/a seu/ua Instituto/Universidade!</strong></p>";
                } else if($data['uni'] != $uni ){
                    echo "<p class='erromsg'><strong>Atenção: Não foram encontrados alojamentos perto do/a seu/ua Instituto/Universidade!</strong></p>";
                } else {
                    echo "Erro alojamento e universidade";
                } 
            }


            //Mensagem de erro para ALOJAMENTO e CIDADE 
            else if (empty($uni)){
            
                $select = $connect->prepare("SELECT * FROM places WHERE alojamento='$alojamento' AND cidade='$cidade'");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $data=$select->fetch();


                if ($data['alojamento'] == $alojamento && $data['cidade'] == $cidade){
                    echo "<p class='erromsga'><strong>Sucesso: Foram encontrados alojamentos disponíveis na cidade escolhida!</strong></p>";
                } else if($data['alojamento'] != $alojamento && $data['cidade'] != $cidade){
                    echo "<p class='erromsg'><strong>Atenção: Não foram encontrados alojamentos disponíveis na cidade escolhida!</strong></p>";
                } else {
                    echo "Erro alojamento e cidade";
                }
            }


            //Mensagem de erro para CIDADE e UNIVERSIDADE 
            else if (empty($alojamento)){

                $select = $connect->prepare("SELECT * FROM places WHERE cidade='$cidade' AND uni='$uni'");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $data=$select->fetch();


                if ($data['uni'] == $uni){
                    echo "<p class='erromsga'><strong>Sucesso: Foram encontrados alojamentos perto do/a seu/ua Instituto/Universidade na cidade escolhida!</strong></p>";
                } else if($data['uni'] != $uni ){
                    echo "<p class='erromsg'><strong>Atenção: Não foram encontrados alojamentos perto do/a seu/ua Instituto/Universidade na cidade escolhida!</strong></p>";
                } else {
                    echo "Erro alojamento e universidade";
                } 
            }


             else {
            echo "<p class='erromsga'><strong>Sucesso: Foram encontrados alojamentos disponíveis perto de si!</strong></p>";
        }
    }
}


    catch(PDOException $e) {
        echo "error".$e->getMessage();
    }

?> 