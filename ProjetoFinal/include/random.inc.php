<?php


    $pdoConnect = new PDO("mysql:host=localhost;dbname=registar","root","");
        

        $selectQuery = $pdoConnect->prepare("SELECT * FROM places WHERE 'alojamento' = :alojamento ORDER BY RAND() LIMIT 1");
        $selectQuery->bindParam('alojamento',$alojamento);
        $alojamento = 'alojamento';
        $selectQuery->execute();

        
        while($row = $selectQuery->fetch(PDO::FETCH_ASSOC)){

            echo'

            <section>
    
                <div class="places">
        
                    <div>
                        <img class="placeimg" src="pictures/'.$row['foto'].'">
                        <p class="placeinfo"> <strong> '.$row['preco'].'€ por mês</strong><br>a '.$row['distancia'].' metros da/o '.$row['uni'].'.<br><br>
                        '.$row['alojamento'].' na cidade de/o '.$row['cidade'].'.<br>
                        <br>Descrição: '.$row['descricao'].' <br><br>       <a class="emailhigh" href="mailto:'.$row['mail'].'?Subject=ClassyRent - Aluguer de alojamento"> Contactar proprietário</a></p>
                    </div>
    
                </div>
    
            </section>';  
        }

    // Imprimir "row" aleatória - https://www.youtube.com/watch?v=NbalKd9699Q
?>