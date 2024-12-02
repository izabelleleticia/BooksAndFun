<?php
//reconher os arquivos do phpmailer

require_once("phpmailer/src/PHPMailer.php");
require_once("phpmailer/src/SMTP.php");

function enviarEmail($dados){
    try{
        $enviar = new PHPMailer\PHPMailer\PHPMailer();
        $enviar->isSMTP();
        $enviar->SMTPDebug = 0;
        $enviar->Host = "smtp.hostinger.com";
        $enviar->Port = 465;
        $enviar->SMTPSecure = 'ssl';
        $enviar->SMTPAuth = true;
        $enviar->Username = "ti26@smpsistema.com.br";
        $enviar->Password = "Senac@ti26";
        $enviar->isHTML(true);

        //Configurar o e-mail principal
        $enviar->setFrom("ti26@smpsistema.com.br", $dados['nome']);
        $enviar->addAddress("honeymoonspam@gmail.com", "Contato Mestre Motores");
        $enviar->Subject = $dados['assunto'];
        $enviar->msgHTML("Nome: {$dados['nome']} <br>
        E-mail: {$dados['email']} <br>
        Telefone: {$dados['fone']} <br>
        Mensagem: {$dados['mensagem']} <br>");

        $enviar->AltBody = "Nome: {$dados['nome']} \n
        E-mail: {$dados['email']} \n
        Telefone: {$dados['fone']} \n
        Mensagem: {$dados['mensagem']}";



        if (!$enviar->send()){
            throw new Exception("Erro ao enviar o E-mail:".$enviar->ErrorInfo);
        }




    }
    catch(Exception $e){
        return false;

    }
    return true;

}//Estrutura Lógica
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $dados = [
        'nome' => htmlspecialchars($_POST['nome']), 
        'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
        'fone' => htmlspecialchars($_POST['fone']),
        'mensagem' => htmlspecialchars($_POST['mensagem']),
        'assunto' => "CONTATO SITE - BOOKSANDFUN"
    ];


    $emailEnviado = enviarEmail($dados);
    if ($emailEnviado){
        enviarEmail($dados);
        header("Location: index.php?status=sucesso");
        exit;
       } else  {
        header("Location: index.php?status=erro");
        exit;
       }

}

?>