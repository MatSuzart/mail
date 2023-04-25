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
<form method="POST">
    Nome: <br/>
    <input type="text" name="nome" /><br/><br/>

    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>

    Mensagem:<br/>
    <textarea name="mensage"> <textarea/><br/><br/>

    <input type="submit" value="Enviar" />
    
</form>    