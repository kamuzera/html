<?php require_once("../class/PHPMailer-5.2-stable/PHPMailerAutoload.php");   

#Receber Variaveis

$Nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$Email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$TelefoneWp=filter_input(INPUT_POST,'telefonewp',FILTER_SANITIZE_STRING);
$Mensagem=filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_STRING);

#Instanciar a nossa classe

$ObjMail = new PHPMailer;

$ObjMail->isSMTP();                                      // Set mailer to use SMTP
$ObjMail->Host = 'mail.sublimetshirt.com.br';  // Specify main and backup SMTP servers
$ObjMail->SMTPAuth = true;                               // Enable SMTP authentication
$ObjMail->Username = 'admin@sublimetshirt.com.br';                 // SMTP username
$ObjMail->Password = 'VcO{bsTwwLp;';                           // SMTP password
# $ObjMail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$ObjMail->Port = 587;                                    // TCP port to connect to

$ObjMail->setFrom('$Email', '$Nome');
$ObjMail->addAddress('admin@sublimetshirt.com.br', 'kmsx3');     // Add a recipient
/* $ObjMail->addAddress('ellen@example.com');               // Name is optional
$ObjMail->addReplyTo('info@example.com', 'Information');
$ObjMail->addCC('cc@example.com');
$ObjMail->addBCC('bcc@example.com'); */

$ObjMail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$ObjMail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$ObjMail->isHTML(true);                                  // Set email format to HTML

$ObjMail->Subject = 'Contato do site';
$ObjMail->Body    = "<strong>
Nome: $Nome<br>
Email: $Email<br>
Telefone: $TelefoneWp<br>
Mensagem: $Mensagem<br>

</strong>";
$ObjMail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($ObjMail->send()) {
    echo "
    <script>
        alert('Cadastro efetuado com sucesso!');
        window.location.href='../index.php';
    </script>";
} else {
    echo "
    <script>
        alert('Cadastro efetuado com sucesso!');
        window.location.href='../contato.php';
    </script>";
}

?>