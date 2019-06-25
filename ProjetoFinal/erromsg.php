<?php

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "error=empty-fields&e-mail=") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: Esqueceu-se de inserir o email e/ou a palavra-passe!</p>";

    } else if(strpos($fullUrl, "error=invalid-e-mail&e-mail=") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: O email inserido não é válido!</p>";
        
    } else if(strpos($fullUrl, "account-not-registered") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: Os dados inseridos não foram registados!</p>";

    } else if(strpos($fullUrl, "register=success") == true) {
        echo "<p class='erromsga'><strong>Parabéns</strong>: A sua conta foi criada com sucesso!</p>";

    } else if(strpos($fullUrl, "error=empty-fields&alojamento=") == true) {
        echo "<p class='erromsg'><strong>Atenção: O Formulário não foi preenchido corretamente!</strong></p>";

    } else if(strpos($fullUrl, "search=not-available") == true) {
        echo "<p class='erromsg'><strong>Atenção: Não foi encontrado nenhum alojamento disponível perto de si!</strong></p>";

    } else if(strpos($fullUrl, "search=success") == true) {
        echo "<p class='erromsga'><strong>Parabéns: A sua pesquisa foi realizada com sucesso!</strong></p>";

    }  else if(strpos($fullUrl, "search=available") == true) {
        echo "<p class='erromsga'><strong>Parabéns: A sua pesquisa foi realizada com sucesso!</strong></p>";

    } else if(strpos($fullUrl, "search=not-found") == true) {
        echo "<p class='erromsg'><strong>Atenção: Não foi encontrado nenhum alojamento disponível perto de si!</strong></p>";

    } else if(strpos($fullUrl, "error=confirm-password") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: Confirme corretamente a sua palavra-passe!</p>";

    } else if(strpos($fullUrl, "account-deleted") == true) {
        echo "<p class='erromsga'></p>";

    } else if(strpos($fullUrl, "account-not-deleted") == true) {
        echo "<p class='erromsg'><strong>Atenção</strong>: A sua conta não foi eliminada com sucesso!</p>";

    } 

?>

<!-- Criar diferentes mensagens de erro - https://www.youtube.com/watch?v=HLx-zbl6siM -->