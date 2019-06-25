<?php



    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=registar","root","");
        if(isset($_SESSION["email"])){


            if($mail = $_SESSION["email"]){

                $pdoQuery = "SELECT * FROM places WHERE mail = :mail";
                $pdoResult = $pdoConnect->prepare($pdoQuery);
                $pdoExec = $pdoResult->execute(array("mail"=>$mail));

        
        

                if($pdoExec)
                {
                // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
                if($pdoResult->rowCount()>0)
                {
                    foreach($pdoResult as $row)
                    {
                
                
                        $id = $row['id'];
                        $alojamento = $row['alojamento'];
                        $cidade = $row['cidade'];
                        $uni = $row['uni'];
                        $distancia = $row['distancia'];
                        $preco = $row['preco'];
                        $mail = $row["mail"];
                        $descricao = $row['descricao'];
                        $foto = $row['foto'];

                

                        echo '

                            <section>

                                <div>
                                    <p class="destaquetitle1">'.$alojamento.' na cidade de/o '.$cidade.' perto da/o '.$uni.'.<br><strong>'.$mail.'</strong><br><a href="alterar.php"><strong>Editar alojamento - '.$id.'</strong></a></p>
                                </div>
    
                            </section> 

                            <section>

                                <div class="places">
                    
                                    <div>
                                        <img class="placeimg" src="pictures/'.$foto.'">
                                        <p class="placeinfo"> <strong> '.$preco.'€ por mês</strong><br>a '.$distancia.' metros<br>Descrição: '.$descricao.' <br><br> <a class="emailhigh" href="mailto:'.$mail.'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a><br><strong><br></strong></p>
                                    </div>

                                </div>

                            </section>';
                        }   
                    }
                } 
            } 
        } 
    }


    catch (PDOException $exc) {
        echo $exc->getMessage();
    exit();
}
?>