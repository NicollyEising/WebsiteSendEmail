<?php 

require './PHPMailer/OAuthTokenProvider.php';
require './PHPMailer/OAuth.php';
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/POP3.php';
require './PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Mensagem {
    private $email = null;
    private $title = null;
    private $mensagem = null;
    public $status = array('codigo_status' => null, 'descricao_status' => '');

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function mensagemValida() {
        return !empty($this->email) && !empty($this->title) && !empty($this->mensagem);
    }
}

$mensagem = new Mensagem();
$mensagem->__set('email', $_POST['email'] ?? '');
$mensagem->__set('title', $_POST['title'] ?? '');
$mensagem->__set('mensagem', $_POST['message'] ?? '');

if(!$mensagem->mensagemValida()){
    header('Location: index.php');
    exit;
}

$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'email@gmail.com'; #inserir email
    $mail->Password   = ''; #inserir app password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Destinatário
    $mail->setFrom('email@gmail.com', 'Teste Email'); #inserir email
    $mail->addAddress($mensagem->__get('email'));

    // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = $mensagem->__get('title');
    $mail->Body    = $mensagem->__get('mensagem');
    $mail->AltBody = 'Necessário utilizar um client que suporte HTML para visualizar corretamente a mensagem.';

    $mail->send();
    $mensagem->status['codigo_status'] = 1;
    $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';
} catch (Exception $e) {
    $mensagem->status['codigo_status'] = 2;
    $mensagem->status['descricao_status'] = 'Não foi possível enviar este e-mail. Detalhes do erro: ' . $mail->ErrorInfo;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Enviar E-mail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-lg text-center">
        <?php if($mensagem->status['codigo_status'] == 1): ?>
            <h1 class="text-2xl font-bold text-green-600">Sucesso</h1>
            <p><?php echo $mensagem->status['descricao_status']; ?></p>
        <?php else: ?>
            <h1 class="text-2xl font-bold text-red-600">Erro</h1>
            <p><?php echo $mensagem->status['descricao_status']; ?></p>
        <?php endif; ?>
        <a href="index.php" class="mt-4 inline-block px-4 py-2 bg-slate-800 text-white rounded-md hover:bg-slate-700">Voltar</a>
    </div>
</body>
</html>
