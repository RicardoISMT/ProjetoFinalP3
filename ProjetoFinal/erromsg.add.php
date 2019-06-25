<?php

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "error=empty-fields") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: Os parâmetros não foram totalmente preenchidos!</p>";

    } else if(strpos($fullUrl, "error=invalid-e-mail&e-mail=") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: O email inserido não é válido!</p>";
        
    } else if(strpos($fullUrl, "error=empty-field&foto=") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: Não foi inserida uma imagem!</p>";

    } else if(strpos($fullUrl, "remove=failed") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: Para remover é necessário preencher todo o formulário!</p>";
    
    } else if(strpos($fullUrl, "add=success") == true) {
        echo "<p class='erromsga'><strong>Parabéns</strong>: O alojamento foi adicionado com sucesso!</p>";

    } else if(strpos($fullUrl, "remove=success") == true) {
        echo "<p class='erromsga'><strong>Sucesso</strong>: O alojamento foi removido com sucesso!</p>";

    } else if(strpos($fullUrl, "edit=success") == true) {
        echo "<p class='erromsga'><strong>Sucesso</strong>: O alojamento foi editado com sucesso!</p>";

    } else if(strpos($fullUrl, "edit=failed") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: Para alterar é necessário preencher todo o formulário!</p>";
    }

?>


<!-- Criar diversas mensagens de erro - https://www.youtube.com/watch?v=HLx-zbl6siM -->
