<section>
    <div class="footer">

        <a href="#top"><img class="doubleuparrow" src="imagens/doubleuparrow.png" alt="dupla seta para cima"></a>
        <a href="index.php"><img  class="whitelogo" src="imagens/whitelogo.png" alt="Logotipo ClassyRent branco"></a>

        <div class="classyfootinfo">
        
            <a href="#search">Procurar alojamentos disponíveis</a><br>

            <?php
            if(isset($_SESSION["email"])){
            echo '<a href="apagar.php">Eliminar uma conta existente</a><br>';
            } else {
                echo '<a href="registar.php">Crie uma nova conta</a><br>';
            }
            ?>

        </div>

        <div class="classyfootsocialinfo">
            <p class="socialtitle">Social media</p>
            <a href="http://www.twitter.com" target="_blank"><img  src="imagens/twitter.png" alt="Logótipo do Twitter"></a>
            <a href="http://www.facebook.com" target="_blank"><img src="imagens/facebook.png" alt="Logótipo do Facebook"></a>
            <a href="http://www.plus.google.com" target="_blank"><img src="imagens/google-plus.png" alt="Logótipo do Google Plus"></a>
        </div>

        <div class="extrainfo">
            <p>Website criado por <a class="aquihigha" href="mailto:Ricardomalva97@hotmail.com?Subject=ClassyRent"><strong>Ricardo Malva</strong></a><br><strong>ClassyRent</strong> foi um projeto desenvolvido no âmbito da unidade curricular <i>Programação II</i> do <a class="aquihigha" href="http://www.ismt.pt" target="_blank"><i>Instituto Superior Miguel Torga</i></a></p>
        </div>

    </div>
</section>
