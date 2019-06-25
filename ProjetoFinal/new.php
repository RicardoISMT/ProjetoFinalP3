<?php

    $alojamento = "";
    $cidade = "";
    $uni = "";
    $distancia = "";
    $preco = "";
    $mail = "";
    $descricao = "";
    $foto = "";


    // conexão à base de dados
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=registar","root","");
        if(isset($_POST['procurardados'])){

        // elementos inseridos no formulário
        $alojamento = $_POST['alojamento'];
        $cidade = $_POST['cidade'];
        $uni = $_POST['uni'];









        if(empty($cidade) && empty($uni)){
    
            $pdoQuery = "SELECT * FROM places WHERE alojamento = :alojamento";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":alojamento"=>$alojamento));

            if($pdoExec)
            {
            // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
            if($pdoResult->rowCount()>0)
            {
                foreach($pdoResult as $row)
                {
                    $alojamento = $row['alojamento'];
                    $cidade = $row['cidade'];
                    $uni = $row['uni'];
                    $distancia = $row['distancia'];
                    $preco = $row['preco'];
                    $mail = $row['mail'];
                    $descricao = $row['descricao'];
                    $foto = $row['foto'];

                    echo '

                        <section>

                            <div>
                                <p class="destaquetitle1"><strong>'.$alojamento.'</strong> na cidade de/o '.$cidade.' perto da/o '.$uni.'.</p>
                            </div>
    
                        </section> 

                        <section>

                            <div class="places">
                    
                                <div>
                                    <img class="placeimg" src="pictures/'.$foto.'">
                                    <p class="placeinfo"> <strong> '.$preco.'€ por mês</strong><br>a '.$distancia.' metros<br>Descrição: '.$descricao.' <br><br> <a class="emailhigh" href="mailto:'.$mail.'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a></p>
                                </div>

                            </div>

                        </section>';
                
                    }
                }
            }










        //Procurar por: Cidade
        } else if(empty($alojamento) && empty($uni)){
    
            $pdoQuery = "SELECT * FROM places WHERE cidade = :cidade";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":cidade"=>$cidade));
    
            if($pdoExec)
            {
                // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
                if($pdoResult->rowCount()>0)
                {
                    foreach($pdoResult as $row)
                    {
                    $alojamento = $row['alojamento'];
                    $cidade = $row['cidade'];
                    $uni = $row['uni'];
                    $distancia = $row['distancia'];
                    $preco = $row['preco'];
                    $mail = $row['mail'];
                    $descricao = $row['descricao'];
                    $foto = $row['foto'];

                    echo '

                        <section>

                            <div>
                                <p class="destaquetitle1">'.$alojamento.' na cidade de/o <strong>'.$cidade.'</strong> perto da/o '.$uni.'.</p> 
                            </div>

                        </section> 

                        <section>

                            <div class="places">

                                <div>
                                    <img class="placeimg" src="pictures/'.$foto.'">
                                    <p class="placeinfo"> <strong> '.$preco.'€ por mês</strong><br>a '.$distancia.' metros<br>Descrição: '.$descricao.' <br><br> <a class="emailhigh" href="mailto:'.$mail.'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a></p>
                                </div>

                            </div>

                        </section>';
                    }
                }
            }









        } else if(empty($alojamento) && empty($cidade)){
    
            $pdoQuery = "SELECT * FROM places WHERE uni = :uni";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":uni"=>$uni));
    
            if($pdoExec)
            {
                // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
                if($pdoResult->rowCount()>0)
                {
                    foreach($pdoResult as $row)
                    {
                    $alojamento = $row['alojamento'];
                    $cidade = $row['cidade'];
                    $uni = $row['uni'];
                    $distancia = $row['distancia'];
                    $preco = $row['preco'];
                    $mail = $row['mail'];
                    $descricao = $row['descricao'];
                    $foto = $row['foto'];

                    echo '

                        <section>

                            <div>
                                <p class="destaquetitle1">'.$alojamento.' na cidade de/o '.$cidade.' perto da/o <strong>'.$uni.'</strong>.</p> 
                            </div>

                        </section> 

                        <section>

                            <div class="places">

                                <div>
                                    <img class="placeimg" src="pictures/'.$foto.'">
                                    <p class="placeinfo"> <strong> '.$preco.'€ por mês</strong><br>a '.$distancia.' metros<br>Descrição: '.$descricao.' <br><br> <a class="emailhigh" href="mailto:'.$mail.'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a></p>
                                </div>

                            </div>

                        </section>';
                    }
                }
            }









        } else if(empty($cidade)){

            $pdoQuery = "SELECT * FROM places WHERE alojamento = :alojamento AND uni = :uni";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":alojamento"=>$alojamento, ":uni"=>$uni));
    
            if($pdoExec)
            {
                // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
                if($pdoResult->rowCount()>0)
                {
                    foreach($pdoResult as $row)
                    {
                    $alojamento = $row['alojamento'];
                    $cidade = $row['cidade'];
                    $uni = $row['uni'];
                    $distancia = $row['distancia'];
                    $preco = $row['preco'];
                    $mail = $row['mail'];
                    $descricao = $row['descricao'];
                    $foto = $row['foto'];

                    echo '

                        <section>

                            <div>
                                <p class="destaquetitle1"><strong>'.$alojamento.'</strong> na cidade de/o '.$cidade.' perto da/o <strong>'.$uni.'</strong>.</p> 
                            </div>

                        </section> 

                        <section>

                            <div class="places">

                                <div>
                                    <img class="placeimg" src="pictures/'.$foto.'">
                                    <p class="placeinfo"> <strong> '.$preco.'€ por mês</strong><br>a '.$distancia.' metros<br>Descrição: '.$descricao.' <br><br> <a class="emailhigh" href="mailto:'.$mail.'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a></p>
                                </div>

                            </div>

                        </section>';
                    }
                }
            }









        } else if(empty($uni)){

            $pdoQuery = "SELECT * FROM places WHERE alojamento = :alojamento AND cidade = :cidade";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":alojamento"=>$alojamento, ":cidade"=>$cidade));
    
            if($pdoExec)
            {
                // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
                if($pdoResult->rowCount()>0)
                {
                    foreach($pdoResult as $row)
                    {
                    $alojamento = $row['alojamento'];
                    $cidade = $row['cidade'];
                    $uni = $row['uni'];
                    $distancia = $row['distancia'];
                    $preco = $row['preco'];
                    $mail = $row['mail'];
                    $descricao = $row['descricao'];
                    $foto = $row['foto'];

                    echo '

                        <section>

                            <div>
                                <p class="destaquetitle1"><strong>'.$alojamento.'</strong> na cidade de/o <strong>'.$cidade.'</strong> perto da/o '.$uni.'.</p> 
                            </div>

                        </section> 

                        <section>

                            <div class="places">

                                <div>
                                    <img class="placeimg" src="pictures/'.$foto.'">
                                    <p class="placeinfo"> <strong> '.$preco.'€ por mês</strong><br>a '.$distancia.' metros<br>Descrição: '.$descricao.' <br><br> <a class="emailhigh" href="mailto:'.$mail.'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a></p>
                                </div>

                            </div>

                        </section>';
                    }
                }
            }









        } else if(empty($alojamento)){

            $pdoQuery = "SELECT * FROM places WHERE cidade = :cidade AND uni = :uni";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":cidade"=>$cidade, ":uni"=>$uni));

            if($pdoExec)
            {
                // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
                if($pdoResult->rowCount()>0)
                {
                    foreach($pdoResult as $row)
                    {
                    $alojamento = $row['alojamento'];
                    $cidade = $row['cidade'];
                    $uni = $row['uni'];
                    $distancia = $row['distancia'];
                    $preco = $row['preco'];
                    $mail = $row['mail'];
                    $descricao = $row['descricao'];
                    $foto = $row['foto'];

                    echo '

                        <section>

                            <div>
                                <p class="destaquetitle1">'.$alojamento.' na cidade de/o <strong>'.$cidade.'</strong> perto da/o <strong>'.$uni.'</strong>.</p> 
                            </div>

                        </section> 

                        <section>

                            <div class="places">

                                <div>
                                    <img class="placeimg" src="pictures/'.$foto.'">
                                    <p class="placeinfo"> <strong> '.$preco.'€ por mês</strong><br>a '.$distancia.' metros<br>Descrição: '.$descricao.' <br><br> <a class="emailhigh" href="mailto:'.$mail.'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a></p>
                                </div>

                            </div>

                        </section>';
                    }
                }
            }









        } else if($alojamento != empty($alojamento) && $cidade != empty($cidade) && $uni != empty($uni)){

            $pdoQuery = "SELECT * FROM places WHERE alojamento = :alojamento AND cidade = :cidade AND uni = :uni";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":alojamento"=>$alojamento, ":cidade"=>$cidade, ":uni"=>$uni));
    
            if($pdoExec)
            {
                // dependendo da quantidade de existência de alojamentos com os dados iguais aos inseridos vai repetir
                if($pdoResult->rowCount()>0)
                {
                    foreach($pdoResult as $row)
                    {
                    $alojamento = $row['alojamento'];
                    $cidade = $row['cidade'];
                    $uni = $row['uni'];
                    $distancia = $row['distancia'];
                    $preco = $row['preco'];
                    $mail = $row['mail'];
                    $descricao = $row['descricao'];
                    $foto = $row['foto'];

                    echo '

                        <section>

                            <div>
                                <p class="destaquetitle1"><strong>'.$alojamento.'</strong> na cidade de/o <strong>'.$cidade.'</strong> perto da/o <strong>'.$uni.'</strong>.</p>
                            </div>

                        </section> 

                        <section>

                            <div class="places">

                                <div>
                                    <img class="placeimg" src="pictures/'.$foto.'">
                                    <p class="placeinfo"> <strong> '.$preco.'€ por mês</strong><br>a '.$distancia.' metros<br>Descrição: '.$descricao.' <br><br> <a class="emailhigh" href="mailto:'.$mail.'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a></p>
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

<!-- Efetuar a procura de dados na base de dados - https://www.youtube.com/watch?v=l9JJ2ZE4joU -->