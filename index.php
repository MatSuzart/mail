<?php
    if(isset($_POST['nome']) && !empty($_POST['nome'])){

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $msg = addslashes($_POST['msg']);

        $para = "exemplo@gmail.com"
        $assunto = "EXEMPLO"
        $corpo = "Nome: ".$nome." - ".$email." - Mensagem: ".$msg; 
        $cabecalho = "From: exemplo@gmail.com"."\r\n".
                      "Reply-To:".$email."\r\n".
                      "X-Mailer: PHP/".phpversion();  

        mail($para, $assunto, $corpo, $cabecalho);

        echo "<h2>E-mail envio com sucesso</h2>";
        exit;
    }
    ?>
<form action="POST">
    
</form>    