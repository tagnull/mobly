<p align="center"><img src="https://vstocker.com/assets/images/logos/vstocker_black.png"></p>

## Virtual Stocker
Este é o sistema de demonstração criado para a Mobly, criado à partir do Framework PHP Laravel 5.7.25.


## Recomendações
* É necessário que você tenha o **MySQL** instalado (local ou remoto) e um web server. Eu recomendo o **nginx**.
* Crie um vhost no **nginx** e aponte o endereço do vhost para o diretório raiz do sistema.
* Apesar de não realizar nenhuma transação, o shopping roda em HTTPS.
* Caso queiram testar as funcionalidades de "Esqueci Minha Senha", eu recomendo o uso da aplicação [Mailtrap](https://mailtrap.io) para o envio de emails e será necessária a configuração das seguintes variáveis no arquivo .env:
```ini
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=SEU_TOKEN_USERNAME
MAIL_PASSWORD=SEU_TOKEN_PASSWORD
```

## Instalando
De acordo com a [documentação do Laravel](https://laravel.com/docs), estes são os requerimentos necessários para rodar o Framework:
* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* BCMath PHP Extension

Baixe este repositório e realize os procedimento abaixo:

Todos os comandos serão feitos à partir da raíz do sistema setado no vhost (exemplificando):
```console
root@mobly:/var/www/html/mobly#
```

Baixe o arquivo de variáveis:
```console
root@mobly:/var/www/html/mobly# wget https://gist.githubusercontent.com/tagnull/37b2841861f97875edda7876bdc7aa90/raw/662aefe94a7b1d95fa2e4c610beff968225eff0f/.env
```

Configure o arquivo .env com suas informações para o acesso com os dados do administrador e banco de dados:
```ini
...
ADMIN_NAME="Nome do Usuário"
ADMIN_EMAIL=email@email
ADMIN_PASSWORD=s3nh4s3cr3t4
...
DB_DATABASE=SEU_DB_AQUI
DB_USERNAME=SEU_USER_AQUI
DB_PASSWORD=SUA_SENHA_AQUI
...
```

Dê a permissão correta aos diretórios:
```console
root@mobly:/var/www/html/mobly# chmod -R 777 bootstrap/cache/ storage/
```

Gere a secret key da aplicação
```console
root@mobly:/var/www/html/mobly# php artisan key:generate
```

Rode as migrations
```console
root@mobly:/var/www/html/mobly# php artisan migrate:fresh --seed
```

Baixe o arquivo SQL contendo os dados para teste
```console
root@mobly:/var/www/html/mobly# wget https://gist.githubusercontent.com/tagnull/272736bf9f96c29098e8a6be880ea87c/raw/d9af008744ba7ac43695dd82e782209969eb2446/dump_data.sql
```

Importe o arquivo SQL para seu banco de dados
```console
root@mobly:/var/www/html/mobly# mysql -u SEU_USER_AQUI -h SEU_SERVER_AQUI  -p SEU_BANCO_AQUI < dump_data.sql
```

## Ready to go!
Agora você pode acessar o sistema à partir do vhost criado.

Estas são algumas das funções do sistema:
* Login de usuário
* Registro de usuário
* Adição de item em carrinho de compra
* Adição de item em lista de desejos
* Página de conta do usuário
* Página de pedidos realizados do usuário
* Página para visualização do pedido (específico)
* Página com categorias
* Aplicação multi idiomas
* Quick view do produto
* e mais...

Existem alguns elementos da tela que não tem funcionalidade, estão apenas para preenchimento de espaço, ex: Assinatura de Newsletter no rodapé, cores e tamanhos dos produtos na página de visualização do produto.

* O Frontend da loja virtual é baseado no tema 'Pebona' para a Prestashop.

Os dados do sistema foram obtidos do próprio site da Mobly. Existem 4167 produtos cadastrados em várias categorias.

Eu batizei o sistema de Virtual Stocker e utilizei um domínio que eu tenho (https://vstocker.com) para subir uma réplica em funcionamento do site.

Obrigado!

## Videos
<blockquote class="embedly-card"><h4><a href="https://www.useloom.com/embed/97b6594b119e4d7f9afcab8546f15f44">Virtual Stocker</a></h4><p>Apesar de o áudio e o vídeo estarem um pouco desincronizados, eu fiz um video de demonstração da loja.</p></blockquote>
