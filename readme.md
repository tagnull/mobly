<p align="center"><img src="https://vstocker.com/assets/images/logos/vstocker_black.png"></p>

## Virtual Stocker

Este é o sistema de demonstração criado para a Mobly, criado à partir do Framework PHP Laravel 5.7.25.


## Instalando

Baixe este repositório e realize os procedimento abaixo:

* Apenas para reforçar, é necessário que você tenha o **MySQL** instalado (local ou remoto) e um web server. Eu recomendo o **nginx**.
* Crie um vhost no **nginx** e aponte o endereço do vhost para o diretório raiz do sistema.
* Apesar de não realizar nenhuma transação, o shopping roda em HTTPS.

Todos os comandos serão feitos à partir da raíz do sistema setado no vhost (exemplificando):
```
root@mobly:/var/www/html/mobly#
```

Baixe o arquivo de variáveis: (https://gist.githubusercontent.com/tagnull/37b2841861f97875edda7876bdc7aa90/raw/bd997fae3e9f0fdb786c0cc4c9a859174a05a511/.env):
```
root@mobly:/var/www/html/mobly# wget https://gist.githubusercontent.com/tagnull/37b2841861f97875edda7876bdc7aa90/raw/bd997fae3e9f0fdb786c0cc4c9a859174a05a511/.env
```

Configure o arquivo .env com suas informações para o acesso com os dados do administrador e banco de dados:
```
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
```
root@mobly:/var/www/html/mobly# chmod -R 777 bootstrap/cache/ storage/
```

Gere a secret key da aplicação
```
php artisan key:generate
```

Rode as migrations
```
php artisan migrate:fresh --seed
```

Baixe o arquivo SQL contendo os dados para teste
```
root@mobly:/var/www/html/mobly# wget https://gist.githubusercontent.com/tagnull/272736bf9f96c29098e8a6be880ea87c/raw/d9af008744ba7ac43695dd82e782209969eb2446/dump_data.sql
```

Importe o arquivo SQL para seu banco de dados
```
mysql -u SEU_USER_AQUI -h SEU_SERVER_AQUI  -p SEU_BANCO_AQUI < dump_data.sql
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

Os dados do sistema foram obtidos do próprio site da Mobly. Existem 4167 produtos cadastrados em várias categorias.

Eu batizei o sistema de Virtual Stocker e utilizei um domínio que eu tenho (https://vstocker.com) para subir uma réplica em funcionamento do site.

Obrigado!
