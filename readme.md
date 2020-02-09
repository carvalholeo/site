# Sobre o repositório

Este repositório contém os dados para implementar o meu site. É, basicamente, uma página que pode levar para outras telas com mais detalhes do meu currículo.

Feito em [Laravel 6.0](https://laravel.com/) no back-end e com o template [Colorlib](https://colorlib.com/) no front-end, o site do domínio principal tem como objetivo ser um currículo, com projetos e portifólio, demonstrando projetos já executados e deixando um formulário de contato.

Assim como a maioria dos meus projetos, o código-fonte do site é aberto e está sob a licença GNU Affero General Public License v3.0, e, portanto, pode receber atualizações via PR de qualquer pessoa interessada em contribuir.

## Requerimentos

Por utilizar o Laravel, o repositório tem como requisitos mínimos para funcionar: 

* PHP >= 7.2
* BCMath PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PDO PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

É preciso, também, ter o [Composer](https://getcomposer.org/) instalado na máquina, para fazer a instalação das dependências necessárias do repositório.

Não se esqueça que, por causa da natureza de repositório, é obrigatório ter o [Git](https://git-scm.com/) no servidor destino.

## Como instalar

Entre no terminal da máquina, navegue até a pasta que vai ficar o repositório e faça o clone do repositório:
```
git clone https://github.com/carvalholeo/site.git
```

Isso vai criar uma pasta chamada ```site``` dentro da pasta que vc fez o clone. Digite ```cd site```, para entrar nessa pasta.

Em seguida, precisamos realizar a instalação dos pacotes. Isso é feito com o comando:
```
composer install
```

Logo após, dê um comando para copiar o arquivo ```.env.example``` para ```.env```. Isso é feito para que a aplicação funcione. Sem ela, simplesmente nada funcionará.

```
cp .env.example .env
```

Mais abaixo, vou explicar quais diretivas são obrigatórias e como fazer a configuração.

Garanta que a pasta ```storage``` esteja com as permissões corretas, pois é nela que ficam os caches, logs e arquivos que podem ser usados como assets da aplicação.

Para que os recursos públicos de ```storage``` estejam disponíveis dentro de public, você precisa dar o seguinte comando:

```
php artisan storage:link
```

Se apresentar um erro de pasta já criada, navegue até o diretório ```public``` e remova a pasta/arquivo ```storage``` e execute o comando acima novamente.

Ele cria um link simbólico/atalho dentro de public, para ser utilizado pelo front-end.

Crie um arquivo vazio chamado ```database.sqlite``` dentro do diretório ```database```. Tenha certeza que o arquivo possui as mesmas permissões do resto da pasta.

Lembre-se de configurar o seu servidor para que acesse a pasta ```public```, pois a pasta ```site``` NÃO DEVE estar acessível publicamente.

## Configurar arquivo ```.env```

O arquivo ```.env``` é o coração das configurações e deve ter suas informações incluídas manualmente, visto que tem informações sensíveis em si mesmo. O arquivo ```.env.example``` contém somente as diretivas e exemplos.

Antes de mais nada, vamos criar a chave criptográfica.

```
php artisan key:generate
```
---
Depois, vamos fazer as configurações:

```
APP_NAME=Laravel
```
Nome da aplicação. Atualmente configurado como 'Léo Carvalho'

```
APP_ENV=local
```
Ambiente que a aplicação está rodando. Em produção, utilizar ```production```. Em ambiente de desenvolvimento, usar ```development``` ou ```local```

```
APP_KEY=
```
Chave criptográfica. Gerada automaticamente anteriormente.

```
APP_DEBUG=true
```
Define se a aplicação vai mostrar abertamente os erros e exceções. Aceita somente ```true``` (mostrar as exceções) e ```false``` (não mostrar as exceções, lançando erro 500 para o usuário).

```
APP_URL=http://localhost
```
Aqui é definida a URL da aplicação. No momento está configurado como ```https://leocarvalho.dev```.

---
```
DB_CONNECTION=sqlite
```
Aqui configurado qual o driver de conexão e qual o banco de dados a ser utilizado. Basta manter desta forma.

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME='My name'
MAIL_TO_ADDRESS=null
MAIL_BCC_ADDRESS=null
```
Aqui, você faz a configuração do SMTP, para envio de e-mails a partir do sistema.

```
GOOGLE_RECAPTCHA_SECRET_KEY=
```
Por fim, aqui fica a configuração de chave privada do Google Recaptcha. Ele é necessário para que, nas telas onde há formulários, o usuário consiga enviar informações ao back-end.
