# Envio de E-mail

Este projeto é um exemplo de envio de e-mails utilizando PHP e PHPMailer, com interface de feedback de sucesso ou erro.

## Requisitos

* PHP 7.4 ou superior
* Servidor SMTP (ex.: Gmail)
* PHPMailer (incluso no projeto)

## Configuração

1. Configure seu e-mail e senha de app (para Gmail) no arquivo `enviar_email.php`:

    \$mail->Username   = '[email@gmail.com]'; #inserir email

    \$mail->Password   = ''; #inserir app password

2. Ajuste o remetente do e-mail:

    \$mail->setFrom('[email@gmail.com]', 'Teste Email'); #inserir email

## Uso

1. Preencha o formulário HTML.
2. O script PHP processará os dados enviados, validará o formulário e tentará enviar o e-mail.
3. Ao finalizar, a página exibirá uma mensagem de sucesso ou erro.

## Estrutura do Projeto

* `index.php` — formulário para envio de e-mail
* `enviar_email.php` — script que processa e envia o e-mail
* `PHPMailer/` — biblioteca PHPMailer

## Observações

* Para Gmail, é necessário criar uma senha de app se a autenticação em duas etapas estiver habilitada.
