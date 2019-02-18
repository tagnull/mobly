<?php

use App\Models\Core\Translate;
use Illuminate\Database\Seeder;

class TranslatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Translate::insert([
        	// A
        	[
				'string' => 'app.name',
				'pt_BR' => 'Virtual Stocker',
				'en_US' => 'Virtual Stocker',
				'es_ES' => 'Virtual Stocker',
			],
			[
				'string' => 'app.name_short',
				'pt_BR' => 'Virtual Stocker',
				'en_US' => 'Virtual Stocker',
				'es_ES' => 'Virtual Stocker',
			],
			[
				'string' => 'app.title',
				'pt_BR' => 'Tagnull :app_name &bull; :client_name',
				'en_US' => 'Tagnull :app_name &bull; :client_name',
				'es_ES' => 'Tagnull :app_name &bull; :client_name',
			],

			// B
			[
				'string' => 'button.ok',
				'pt_BR' => 'OK',
				'en_US' => 'OK',
				'es_ES' => 'OK',
			],
			[
				'string' => 'button.cancel',
				'pt_BR' => 'Cancelar',
				'en_US' => 'Cancel',
				'es_ES' => 'Cancel',
			],
			[
				'string' => 'button.edit',
				'pt_BR' => 'Editar',
				'en_US' => 'Edit',
				'es_ES' => 'Edit',
			],
			[
				'string' => 'button.save',
				'pt_BR' => 'Salvar',
				'en_US' => 'Save',
				'es_ES' => 'Save',
			],
			[
				'string' => 'button.back',
				'pt_BR' => 'Voltar',
				'en_US' => 'Go back',
				'es_ES' => 'Go back',
			],
			[
				'string' => 'button.login',
				'pt_BR' => 'Entrar',
				'en_US' => 'Login',
				'es_ES' => 'Login',
			],
			[
				'string' => 'button.register',
				'pt_BR' => 'Registrar',
				'en_US' => 'Register',
				'es_ES' => 'Register',
			],
			[
				'string' => 'button.send_password_reset_link',
				'pt_BR' => 'Enviar link para recuperação de senha',
				'en_US' => 'Send password reset link',
				'es_ES' => 'Send password reset link',
			],
			[
				'string' => 'button.reset_password',
				'pt_BR' => 'Redefinir senha',
				'en_US' => 'Reset password',
				'es_ES' => 'Reset password',
			],
			[
				'string' => 'button.go_to_dashboard',
				'pt_BR' => 'Ir para o Início',
				'en_US' => 'Go to Dashboard',
				'es_ES' => 'Go to Dashboard',
			],
			[
				'string' => 'button.go_to_login',
				'pt_BR' => 'ou <strong>Entrar no Sistema</strong>',
				'en_US' => 'or <strong>Sign In</strong>',
				'es_ES' => 'or <strong>Sign In</strong>',
			],
			[
				'string' => 'button.return_last_page',
				'pt_BR' => 'Voltar para a última página',
				'en_US' => 'Return to the last page',
				'es_ES' => 'Return to the last page',
			],
			[
				'string' => 'button.view',
				'pt_BR' => 'Ver',
				'en_US' => 'View',
				'es_ES' => 'View',
			],
			[
				'string' => 'button.send',
				'pt_BR' => 'Enviar',
				'en_US' => 'Send',
				'es_ES' => 'Send',
			],
			[
				'string' => 'button.sending',
				'pt_BR' => 'Enviando...',
				'en_US' => 'Sending...',
				'es_ES' => 'Sending...',
			],
			[
				'string' => 'button.change',
				'pt_BR' => 'Alterar',
				'en_US' => 'Change',
				'es_ES' => 'Change',
			],
			[
				'string' => 'button.close',
				'pt_BR' => 'Fechar',
				'en_US' => 'Close',
				'es_ES' => 'Close',
			],
			[
				'string' => 'button.search',
				'pt_BR' => 'Pesquisar',
				'en_US' => 'Search',
				'es_ES' => 'Search',
			],
			[
				'string' => 'button.new',
				'pt_BR' => 'Novo',
				'en_US' => 'New',
				'es_ES' => 'New',
			],
			[
				'string' => 'button.apply',
				'pt_BR' => 'Aplicar',
				'en_US' => 'Apply',
				'es_ES' => 'Apply',
			],
			[
				'string' => 'button.add_cart',
				'pt_BR' => 'Adicionar ao Carrinho',
				'en_US' => 'Add to Cart',
				'es_ES' => 'Add to Cart',
			],
			[
				'string' => 'button.add_cart:loading',
				'pt_BR' => 'Aguarde...',
				'en_US' => 'Wait...',
				'es_ES' => 'Wait...',
			],
			[
				'string' => 'button.add_cart:added',
				'pt_BR' => 'Adicionado!',
				'en_US' => 'Added!',
				'es_ES' => 'Added!',
			],
			[
				'string' => 'button.add_cart:unavailable',
				'pt_BR' => 'Indisponível!',
				'en_US' => 'Unavailable!',
				'es_ES' => 'Unavailable!',
			],
			[
				'string' => 'button.add_wishlist',
				'pt_BR' => 'Adicionar à Lista de Desejos',
				'en_US' => 'Add to Wishlist',
				'es_ES' => 'Add to Wishlist',
			],
			[
				'string' => 'button.view_order',
				'pt_BR' => 'Ver minha compra',
				'en_US' => 'View my purchase',
				'es_ES' => 'View my purchase',
			],

			// C

			// D

			// E
			[
				'string' => 'error.messages.title',
				'pt_BR' => 'Opa! Algo de errado aconteceu!',
				'en_US' => 'Whoops! Something went wrong!',
				'es_ES' => 'Whoops! Something went wrong!',
			],
			[
				'string' => 'error.auth.failed',
				'pt_BR' => 'E-mail ou senha inválidos',
				'en_US' => 'Email or password invalid',
				'es_ES' => 'Email or password invalid',
			],
			[
				'string' => 'error.auth.account_not_active',
				'pt_BR' => 'Sua conta está inativa',
				'en_US' => 'Your account is not active',
				'es_ES' => 'Your account is not active',
			],
			[
				'string' => 'error.403.title',
				'pt_BR' => 'Proibido',
				'en_US' => 'Forbidden',
				'es_ES' => 'Forbidden',
			],
			[
				'string' => 'error.403.description',
				'pt_BR' => 'Você não possui permissão para acessar esta página.',
				'en_US' => 'You have no rights to access this page.',
				'es_ES' => 'You have no rights to access this page.',
			],
			[
				'string' => 'error.403.line',
				'pt_BR' => 'Este incidente será reportado.',
				'en_US' => 'This incident will be reported.',
				'es_ES' => 'This incident will be reported.',
			],
			[
				'string' => 'error.404.title',
				'pt_BR' => 'Não Encontrado',
				'en_US' => 'Not Found',
				'es_ES' => 'Not Found',
			],
			[
				'string' => 'error.404.description',
				'pt_BR' => 'A página que você está tentando acessar não foi encontrada.',
				'en_US' => 'The page you are trying to access was not found.',
				'es_ES' => 'The page you are trying to access was not found.',
			],
			[
				'string' => 'error.419.title',
				'pt_BR' => 'Tempo Limite de Autenticação',
				'en_US' => 'Authentication Timeout',
				'es_ES' => 'Authentication Timeout',
			],
			[
				'string' => 'error.419.description',
				'pt_BR' => 'Esta página expirou devido a inatividade.<br>Por favor, atualize a página e tente novamente.',
				'en_US' => 'The page has expired due to inactivity.<br>Please refresh and try again.',
				'es_ES' => 'The page has expired due to inactivity.<br>Please refresh and try again.',
			],

			// F
			[
				'string' => 'field.name',
				'pt_BR' => 'Nome',
				'en_US' => 'Name',
				'es_ES' => 'Name',
			],
			[
				'string' => 'field.name:placeholder',
				'pt_BR' => 'Digite o nome',
				'en_US' => 'Type the name',
				'es_ES' => 'Type the name',
			],
			[
				'string' => 'field.email',
				'pt_BR' => 'E-mail',
				'en_US' => 'Email',
				'es_ES' => 'Email',
			],
			[
				'string' => 'field.email:placeholder',
				'pt_BR' => 'Digite o e-mail',
				'en_US' => 'Type the email address',
				'es_ES' => 'Type the email address',
			],
			[
				'string' => 'field.password',
				'pt_BR' => 'Senha',
				'en_US' => 'Password',
				'es_ES' => 'Password',
			],
			[
				'string' => 'field.password:placeholder',
				'pt_BR' => 'Digite sua senha',
				'en_US' => 'Type your password',
				'es_ES' => 'Type your password',
			],
			[
				'string' => 'field.password_confirm',
				'pt_BR' => 'Confirme a senha',
				'en_US' => 'Confirm password',
				'es_ES' => 'Confirm password',
			],
			[
				'string' => 'field.password_confirm:placeholder',
				'pt_BR' => 'Digite novamente sua senha',
				'en_US' => 'Retype your password',
				'es_ES' => 'Retype your password',
			],
			[
				'string' => 'field.remember_me',
				'pt_BR' => 'Salvar meus dados',
				'en_US' => 'Remember me',
				'es_ES' => 'Remember me',
			],
			[
				'string' => 'field.search',
				'pt_BR' => 'Buscar',
				'en_US' => 'Search',
				'es_ES' => 'Search',
			],
			[
				'string' => 'field.info',
				'pt_BR' => 'Informações Adicionais',
				'en_US' => 'Additional Info',
				'es_ES' => 'Additional Info',
			],
			[
				'string' => 'field.info:placeholder',
				'pt_BR' => 'Informações sobre seu pedido, ex.: anotações para entrega.',
				'en_US' => 'Notes about your order, e.g. special notes for delivery.',
				'es_ES' => 'Notes about your order, e.g. special notes for delivery.',
			],
			[
				'string' => 'field.address',
				'pt_BR' => 'Endereço',
				'en_US' => 'Address',
				'es_ES' => 'Address',
			],
			[
				'string' => 'field.mobile',
				'pt_BR' => 'Celular',
				'en_US' => 'Mobile',
				'es_ES' => 'Mobile',
			],
			[
				'string' => 'field.phone',
				'pt_BR' => 'Telefone',
				'en_US' => 'Phone',
				'es_ES' => 'Phone',
			],
			[
				'string' => 'field.search_header',
				'pt_BR' => 'O que você deseja buscar?',
				'en_US' => 'What do you want to search for?',
				'es_ES' => 'What do you want to search for?',
			],
			[
				'string' => 'field.search:placeholder',
				'pt_BR' => 'Digite para buscar...',
				'en_US' => 'Type to search...',
				'es_ES' => 'Type to search...',
			],
			[
				'string' => 'field.search:breadcrumb',
				'pt_BR' => 'Você pesquisou \'<strong>:term</strong>\'...',
				'en_US' => 'You searched for \'<strong>:term</strong>\'...',
				'es_ES' => 'You searched for \'<strong>:term</strong>\'...',
			],
			[
				'string' => 'field.document_number',
				'pt_BR' => 'CNPJ / CPF',
				'en_US' => 'Document Number',
				'es_ES' => 'Document Number',
			],
			[
				'string' => 'field.document_number:placeholder',
				'pt_BR' => 'Digite o número do documento',
				'en_US' => 'Type the document number',
				'es_ES' => 'Type the document number',
			],
			[
				'string' => 'field.quantity',
				'pt_BR' => 'Quantidade',
				'en_US' => 'Quantity',
				'es_ES' => 'Quantity',
			],
			[
				'string' => 'field.total',
				'pt_BR' => 'Total',
				'en_US' => 'Total',
				'es_ES' => 'Total',
			],
			[
				'string' => 'field.image',
				'pt_BR' => 'Imagem',
				'en_US' => 'Image',
				'es_ES' => 'Image',
			],
			[
				'string' => 'field.unity_price',
				'pt_BR' => 'Preço Unitário',
				'en_US' => 'Unit Price',
				'es_ES' => 'Unit Price',
			],
			[
				'string' => 'field.date',
				'pt_BR' => 'Data',
				'en_US' => 'Date',
				'es_ES' => 'Date',
			],
			[
				'string' => 'field.status',
				'pt_BR' => 'Status',
				'en_US' => 'Status',
				'es_ES' => 'Status',
			],
			[
				'string' => 'field.actions',
				'pt_BR' => 'Ações',
				'en_US' => 'Actions',
				'es_ES' => 'Actions',
			],
			[
				'string' => 'field.payment_method',
				'pt_BR' => 'Método de Pagamento',
				'en_US' => 'Payment Method',
				'es_ES' => 'Payment Method',
			],
			[
				'string' => 'field.address_street',
				'pt_BR' => 'Rua',
				'en_US' => 'Street Name',
				'es_ES' => 'Street Name',
			],
			[
				'string' => 'field.address_street:placeholder',
				'pt_BR' => 'Digite o nome da rua',
				'en_US' => 'Type the street name',
				'es_ES' => 'Type the street name',
			],
			[
				'string' => 'field.address_number',
				'pt_BR' => 'Número',
				'en_US' => 'Number',
				'es_ES' => 'Number',
			],
			[
				'string' => 'field.address_number:placeholder',
				'pt_BR' => 'Digite o número',
				'en_US' => 'Type the number',
				'es_ES' => 'Type the number',
			],
			[
				'string' => 'field.address_complement',
				'pt_BR' => 'Complemento',
				'en_US' => 'Complement',
				'es_ES' => 'Complement',
			],
			[
				'string' => 'field.address_complement:placeholder',
				'pt_BR' => 'Digite o complemento',
				'en_US' => 'Type the complement',
				'es_ES' => 'Type the complement',
			],
			[
				'string' => 'field.address_neighborhood',
				'pt_BR' => 'Bairro',
				'en_US' => 'Neighborhood',
				'es_ES' => 'Neighborhood',
			],
			[
				'string' => 'field.address_neighborhood:placeholder',
				'pt_BR' => 'Digite o bairro',
				'en_US' => 'Type the neighborhood',
				'es_ES' => 'Type the neighborhood',
			],
			[
				'string' => 'field.address_city',
				'pt_BR' => 'Cidade',
				'en_US' => 'City',
				'es_ES' => 'City',
			],
			[
				'string' => 'field.address_city:placeholder',
				'pt_BR' => 'Digite a cidade',
				'en_US' => 'Type the city',
				'es_ES' => 'Type the city',
			],
			[
				'string' => 'field.address_state',
				'pt_BR' => 'Estado',
				'en_US' => 'State',
				'es_ES' => 'State',
			],
			[
				'string' => 'field.address_state:placeholder',
				'pt_BR' => 'Escolha o estado',
				'en_US' => 'Choose the state',
				'es_ES' => 'Choose the state',
			],
			[
				'string' => 'field.address_zipcode',
				'pt_BR' => 'CEP',
				'en_US' => 'Zipcode',
				'es_ES' => 'Zipcode',
			],
			[
				'string' => 'field.address_zipcode:placeholder',
				'pt_BR' => 'Digite o CEP',
				'en_US' => 'Type the Zipcode',
				'es_ES' => 'Type the Zipcode',
			],

			// G

			// H
			[
				'string' => 'html.header.hello',
				'pt_BR' => '<span class="user-name">Olá,</span> :name',
				'en_US' => '<span class="user-name">Hello,</span> :name',
				'es_ES' => '<span class="user-name">Hello,</span> :name',
			],
			[
				'string' => 'html.footer.developed_by',
				'pt_BR' => 'Desenvolvido por :logo',
				'en_US' => 'Developed by :logo',
				'es_ES' => 'Developed by :logo',
			],
			[
				'string' => 'html.footer.copyright',
				'pt_BR' => ':app_name &copy; :year - Todos os direitos reservados.',
				'en_US' => ':app_name &copy; :year - All rights reserved.',
				'es_ES' => ':app_name &copy; :year - All rights reserved.',
			],
			[
				'string' => 'html.search.title',
				'pt_BR' => 'Filtro de Buscas',
				'en_US' => 'Search Filter',
				'es_ES' => 'Search Filter',
			],
			[
				'string' => 'html.footer.newsletter.title',
				'pt_BR' => 'Assine nossas notícias',
				'en_US' => 'Sign Up For Our Newsletter',
				'es_ES' => 'Sign Up For Our Newsletter',
			],
			[
				'string' => 'html.footer.offer.title',
				'pt_BR' => 'Em Oferta',
				'en_US' => 'Special Offer',
				'es_ES' => 'Special Offer',
			],
			[
				'string' => 'html.footer.links.title',
				'pt_BR' => 'Navegue pelo Site',
				'en_US' => 'Browse our Website',
				'es_ES' => 'Browse our Website',
			],
			[
				'string' => 'html.footer.newsletter.description',
				'pt_BR' => 'Você pode cancelar a inscrição a qualquer momento. Para mais informações, por favor veja nossas informações de contato no aviso legal.',
				'en_US' => 'You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.',
				'es_ES' => 'You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.',
			],
			[
				'string' => 'html.cart.empty.title',
				'pt_BR' => 'Carrinho Vazio',
				'en_US' => 'Empty Cart',
				'es_ES' => 'Empty Cart',
			],
			[
				'string' => 'html.cart.empty.description',
				'pt_BR' => 'Ainda não existe nenhum item em seu carrinho de compras.',
				'en_US' => 'There are no items in your cart yet.',
				'es_ES' => 'There are no items in your cart yet.',
			],
			[
				'string' => 'html.cart.item.added',
				'pt_BR' => 'Item adicionado em seu carrinho de compras!',
				'en_US' => 'Item added to your cart!',
				'es_ES' => 'Item added to your cart!',
			],
			[
				'string' => 'html.cart.item.removed',
				'pt_BR' => 'Item removido do seu carrinho de compras!',
				'en_US' => 'Item removed from your cart!',
				'es_ES' => 'Item removed from your cart!',
			],
			[
				'string' => 'html.cart.item.updated',
				'pt_BR' => 'Item atualizado com sucesso!',
				'en_US' => 'Item updated successfully!',
				'es_ES' => 'Item updated successfully!',
			],
			[
				'string' => 'html.wishlist.empty.title',
				'pt_BR' => 'Lista de Desejos vazia',
				'en_US' => 'Empty Wishlist',
				'es_ES' => 'Empty Wishlist',
			],
			[
				'string' => 'html.wishlist.empty.description',
				'pt_BR' => 'Ainda não existe nenhum item em sua lista de desejos.',
				'en_US' => 'There are no items in your wishlist yet.',
				'es_ES' => 'There are no items in your wishlist yet.',
			],
			[
				'string' => 'html.wishlist.item.added',
				'pt_BR' => 'Item adicionado em sua lista de desejos!',
				'en_US' => 'Item added to your wishlist!',
				'es_ES' => 'Item added to your wishlist!',
			],
			[
				'string' => 'html.wishlist.item.removed',
				'pt_BR' => 'Item removido de sua lista de desejos!',
				'en_US' => 'Item removed from your wishlist!',
				'es_ES' => 'Item removed from your wishlist!',
			],
			[
				'string' => 'html.wishlist.item.login',
				'pt_BR' => 'Você precisa fazer seu login antes de salvar este item em sua lista!',
				'en_US' => 'You need to login first before you can add this item to your wishlist!',
				'es_ES' => 'You need to login first before you can add this item to your wishlist!',
			],

			// I

			// J

			// K

			// L

			// M
			[
				'string' => 'menu.home',
				'pt_BR' => 'Início',
				'en_US' => 'Home',
				'es_ES' => 'Home',
			],
			[
				'string' => 'menu.categories',
				'pt_BR' => 'Categorias',
				'en_US' => 'Categories',
				'es_ES' => 'Categories',
			],
			[
				'string' => 'menu.products',
				'pt_BR' => 'Produtos',
				'en_US' => 'Products',
				'es_ES' => 'Products',
			],
			[
				'string' => 'menu.cart',
				'pt_BR' => 'Carrinho',
				'en_US' => 'Cart',
				'es_ES' => 'Cart',
			],
			[
				'string' => 'menu.checkout',
				'pt_BR' => 'Checkout',
				'en_US' => 'Checkout',
				'es_ES' => 'Checkout',
			],
			[
				'string' => 'menu.my_account',
				'pt_BR' => 'Minha Conta',
				'en_US' => 'My Account',
				'es_ES' => 'My Account',
			],
			[
				'string' => 'menu.wishlist',
				'pt_BR' => 'Lista de Desejos',
				'en_US' => 'Wishlist',
				'es_ES' => 'Wishlist',
			],
			[
				'string' => 'menu.continue_shopping',
				'pt_BR' => 'Continuar Comprando',
				'en_US' => 'Continue Shopping',
				'es_ES' => 'Continue Shopping',
			],
			[
				'string' => 'menu.continue_payment',
				'pt_BR' => 'Pagar Agora',
				'en_US' => 'Continue to Payment',
				'es_ES' => 'Continue to Payment',
			],
			[
				'string' => 'menu.about',
				'pt_BR' => 'Sobre',
				'en_US' => 'About',
				'es_ES' => 'About',
			],
			[
				'string' => 'menu.contact',
				'pt_BR' => 'Contato',
				'en_US' => 'Contact',
				'es_ES' => 'Contact',
			],
			[
				'string' => 'menu.login',
				'pt_BR' => 'Login',
				'en_US' => 'Login',
				'es_ES' => 'Login',
			],
			[
				'string' => 'menu.register',
				'pt_BR' => 'Registrar-se',
				'en_US' => 'Register',
				'es_ES' => 'Register',
			],
			[
				'string' => 'menu.logout',
				'pt_BR' => 'Sair',
				'en_US' => 'Logout',
				'es_ES' => 'Logout',
			],
			[
				'string' => 'menu.settings',
				'pt_BR' => 'Configurações',
				'en_US' => 'Settings',
				'es_ES' => 'Settings',
			],
			[
				'string' => 'menu.users',
				'pt_BR' => 'Usuários',
				'en_US' => 'Users',
				'es_ES' => 'Users',
			],
			[
				'string' => 'menu.account_settings',
				'pt_BR' => 'Configurações da Conta',
				'en_US' => 'Account Settings',
				'es_ES' => 'Account Settings',
			],
			[
				'string' => 'menu.profile',
				'pt_BR' => 'Perfil',
				'en_US' => 'Profile',
				'es_ES' => 'Profile',
			],

			// N

			// O

			// P
			[
				'string' => 'page.login.title',
				'pt_BR' => 'Entrar',
				'en_US' => 'Sign In',
				'es_ES' => 'Sign In',
			],
			[
				'string' => 'page.login.description',
				'pt_BR' => 'Digite seus dados para entrar na aplicação',
				'en_US' => 'Type your data to access the application',
				'es_ES' => 'Type your data to access the application',
			],
			[
				'string' => 'page.login.forgot_password',
				'pt_BR' => 'Esqueceu sua senha?',
				'en_US' => 'Forgot your password?',
				'es_ES' => 'Forgot your password?',
			],
			[
				'string' => 'page.register.title',
				'pt_BR' => 'Registre-se',
				'en_US' => 'Register',
				'es_ES' => 'Register',
			],
			[
				'string' => 'page.register.description',
				'pt_BR' => 'Digite seus dados para se registrar',
				'en_US' => 'Type your data to register yourself',
				'es_ES' => 'Type your data to register yourself',
			],
			[
				'string' => 'page.password.email.title',
				'pt_BR' => 'Recuperar Senha',
				'en_US' => 'Password Recovery',
				'es_ES' => 'Password Recovery',
			],
			[
				'string' => 'page.password.email.description',
				'pt_BR' => 'Digite seu e-mail abaixo para resetar sua senha',
				'en_US' => 'Enter your e-mail address below to reset your password',
				'es_ES' => 'Enter your e-mail address below to reset your password',
			],
			[
				'string' => 'page.password.reset.title',
				'pt_BR' => 'Redefinir Senha',
				'en_US' => 'Password Reset',
				'es_ES' => 'Password Reset',
			],
			[
				'string' => 'page.password.reset.description',
				'pt_BR' => 'Preencha o formulário abaixo para redefinir sua senha de acesso',
				'en_US' => 'Fill out the form below to reset your password',
				'es_ES' => 'Fill out the form below to reset your password',
			],
			
			[
				'string' => 'page.home.widget.trending.title',
				'pt_BR' => 'Em Oferta',
				'en_US' => 'Special Offer',
				'es_ES' => 'Special Offer',
			],
			[
				'string' => 'page.home.widget.trending.description',
				'pt_BR' => 'Toda hora produtos em promoção para você aproveitar!',
				'en_US' => 'All-time promotional products for you to enjoy!',
				'es_ES' => 'All-time promotional products for you to enjoy!',
			],
			
			[
				'string' => 'page.home.widget.info.col1.title',
				'pt_BR' => 'Frete Grátis',
				'en_US' => 'Free Shipping',
				'es_ES' => 'Free Shiping',
			],
			[
				'string' => 'page.home.widget.info.col1.description',
				'pt_BR' => 'Frete grátis para todo Brasil',
				'en_US' => 'Free shipping to the whole Brazil',
				'es_ES' => 'Free shipping to the whole Brazil',
			],
			[
				'string' => 'page.home.widget.info.col2.title',
				'pt_BR' => 'Política de Retorno',
				'en_US' => 'Money Return',
				'es_ES' => 'Money Return',
			],
			[
				'string' => 'page.home.widget.info.col2.description',
				'pt_BR' => '30 dias para devolução gratuita',
				'en_US' => '30 days for free return',
				'es_ES' => '30 days for free return',
			],
			[
				'string' => 'page.home.widget.info.col3.title',
				'pt_BR' => 'Suporte Online',
				'en_US' => 'Online Support',
				'es_ES' => 'Online Support',
			],
			[
				'string' => 'page.home.widget.info.col3.description',
				'pt_BR' => 'Estamos aqui 24h por dia!',
				'en_US' => 'We are here 24/7!',
				'es_ES' => 'We are here 24/7!',
			],
			[
				'string' => 'page.home.widget.info.col4.title',
				'pt_BR' => 'Sem Juros',
				'en_US' => 'No Interest',
				'es_ES' => 'No Interest',
			],
			[
				'string' => 'page.home.widget.info.col4.description',
				'pt_BR' => 'Toda a loja sem juros mesmo!',
				'en_US' => 'The whole shop without interest, really!',
				'es_ES' => 'The whole shop without interest, really!',
			],
			
			[
				'string' => 'page.home.widget.instagram.title',
				'pt_BR' => 'Siga-nos no Instagram',
				'en_US' => 'Follow us on Instagram',
				'es_ES' => 'Follow us on Instagram',
			],
			[
				'string' => 'page.home.widget.instagram.description',
				'pt_BR' => 'Conheça mais do nosso dia-a-dia!',
				'en_US' => 'Get to know more about our day-to-day life!',
				'es_ES' => 'Get to know more about our day-to-day life!',
			],
			
			[
				'string' => 'page.checkout.billing_details',
				'pt_BR' => 'Detalhes da Cobrança',
				'en_US' => 'Billing Details',
				'es_ES' => 'Billing Details',
			],
			[
				'string' => 'page.checkout.your_order',
				'pt_BR' => 'Seu Pedido',
				'en_US' => 'Your Order',
				'es_ES' => 'Your Order',
			],
			[
				'string' => 'page.checkout.terms_acceptance',
				'pt_BR' => 'Eu concordo com os <a href="javascript:;">termos de serviço</a>.',
				'en_US' => 'I agree to the <a href="javascript:;">terms of service</a>.',
				'es_ES' => 'I agree to the <a href="javascript:;">terms of service</a>.',
			],
			[
				'string' => 'page.checkout.box_login.title',
				'pt_BR' => 'Já é nosso cliente? <span id="show_login">Clique aqui para fazer seu login.</span>',
				'en_US' => 'Already our customer? <span id="show_login">Click here to login.</span>',
				'es_ES' => 'Already our customer? <span id="show_login">Click here to login.</span>',
			],
			[
				'string' => 'page.checkout.box_login.message',
				'pt_BR' => 'Se você já fez compras conosco, faça login na sua conta. Se você é um cliente novo, prossiga para a seção Detalhes da Cobrança.',
				'en_US' => 'If you\'ve already made purchases with us, please sign in to your account. If you are a new customer, proceed to the Billing Details section.',
				'es_ES' => 'If you\'ve already made purchases with us, please sign in to your account. If you are a new customer, proceed to the Billing Details section.',
			],
			[
				'string' => 'page.checkout.box_login.welcome',
				'pt_BR' => 'Olá :name, é bom ter você de volta!',
				'en_US' => 'Hello :name, it\'s good to have you back!',
				'es_ES' => 'Hello :name, it\'s good to have you back!',
			],
			[
				'string' => 'page.checkout.box_login.register',
				'pt_BR' => 'Olá :name, obrigado por se registrar em nossa loja!',
				'en_US' => 'Hello :name, thank you for registering in our store!',
				'es_ES' => 'Hello :name, thank you for registering in our store!',
			],
			[
				'string' => 'page.checkout.box_coupon.title',
				'pt_BR' => 'Tem cupom de desconto? <span id="show_coupon">Clique aqui para digitá-lo.</span>',
				'en_US' => 'Have a coupon? <span id="show_coupon">Click here to Enter your code.</span>',
				'es_ES' => 'Have a coupon? <span id="show_coupon">Click here to Enter your code.</span>',
			],
			[
				'string' => 'page.my_account.user_name',
				'pt_BR' => 'Olá <span>:name</span> <br>(não é :name? :link)',
				'en_US' => 'Hello <span>:name</span> <br>(not :name? :link)',
				'es_ES' => 'Hello <span>:name</span> <br>(not :name? :link)',
			],
			[
				'string' => 'page.my_account.assistance',
				'pt_BR' => 'Precisa de Ajuda? Contate nosso suporte em <a href="mailto::mail">:mail</a>',
				'en_US' => 'Need Assistance? Customer service at <a href="mailto::mail">:mail</a>',
				'es_ES' => 'Need Assistance? Customer service at <a href="mailto::mail">:mail</a>',
			],
			[
				'string' => 'page.my_account.text',
				'pt_BR' => 'Aqui do seu dashboard, você pode facilmente checar os detalhes de sua conta e o andamento dos seus <a href="#orders">pedidos</a>.',
				'en_US' => 'Here in your dashboard, you can easily check your accoun details and all about your <a href="#orders">orders</a>.',
				'es_ES' => 'Here in your dashboard, you can easily check your accoun details and all about your <a href="#orders">orders</a>.',
			],
			[
				'string' => 'page.my_account.menu.dashboard',
				'pt_BR' => 'Dashboard',
				'en_US' => 'Dashboard',
				'es_ES' => 'Dashboard',
			],
			[
				'string' => 'page.my_account.menu.orders',
				'pt_BR' => 'Pedidos',
				'en_US' => 'Orders',
				'es_ES' => 'Orders',
			],
			[
				'string' => 'page.my_account.orders.nothing_here',
				'pt_BR' => 'Você ainda não comprou nada :(',
				'en_US' => 'You didn\'t byu anything yet :(',
				'es_ES' => 'You didn\'t byu anything yet :(',
			],
			
			[
				'string' => 'payment.boleto',
				'pt_BR' => 'Boleto',
				'en_US' => 'Boleto',
				'es_ES' => 'Boleto',
			],
			[
				'string' => 'payment.boleto:description',
				'pt_BR' => 'O boleto bancário leva em média 2 dias úteis para ser reconhecido.',
				'en_US' => 'Boleto takes about 2 working days to be fully processed.',
				'es_ES' => 'Boleto takes about 2 working days to be fully processed.',
			],
			[
				'string' => 'payment.check',
				'pt_BR' => 'Cheque',
				'en_US' => 'Check Payment',
				'es_ES' => 'Check Payment',
			],
			[
				'string' => 'payment.check:description',
				'pt_BR' => 'Por favor, envie seu cheque para a <strong>:store</strong>, Endereço: :address.',
				'en_US' => 'Please send a check to :store, Address: :address.',
				'es_ES' => 'Please send a check to :store, Address: :address.',
			],
			[
				'string' => 'payment.cash',
				'pt_BR' => 'Dinheiro',
				'en_US' => 'Cash',
				'es_ES' => 'Cash',
			],
			[
				'string' => 'payment.cash:description',
				'pt_BR' => 'Pague em dinheiro no momento da entrega de seu produto.',
				'en_US' => 'Pay in cash upon the delivery of you product.',
				'es_ES' => 'Pay in cash upon the delivery of you product.',
			],
			[
				'string' => 'payment.paypal',
				'pt_BR' => 'Paypal',
				'en_US' => 'Paypal',
				'es_ES' => 'Paypal',
			],
			[
				'string' => 'payment.paypal:description',
				'pt_BR' => 'Você pode pagar com seu cartão de crédito caso você não tenha uma conta do Paypal.',
				'en_US' => 'You can pay with your credit card if you don\'t have a PayPal account.',
				'es_ES' => 'You can pay with your credit card if you don\'t have a PayPal account.',
			],

			// Q

			// R

			// S

			// T
			[
				'string' => 'tag.off',
				'pt_BR' => '-:percent%',
				'en_US' => '-:percent%',
				'es_ES' => '-:percent%',
			],
			[
				'string' => 'tag.description',
				'pt_BR' => 'Descrição',
				'en_US' => 'Description',
				'es_ES' => 'Description',
			],
			[
				'string' => 'tag.reviews',
				'pt_BR' => 'Opiniões',
				'en_US' => 'Reviews',
				'es_ES' => 'Reviews',
			],
			[
				'string' => 'tag.comments',
				'pt_BR' => 'Comentários',
				'en_US' => 'Comments',
				'es_ES' => 'Comments',
			],
			[
				'string' => 'tag.features',
				'pt_BR' => 'Características do Produto',
				'en_US' => 'Product Features',
				'es_ES' => 'Product Features',
			],
			[
				'string' => 'tag.share',
				'pt_BR' => 'Compartilhe:',
				'en_US' => 'Share:',
				'es_ES' => 'Share:',
			],
			[
				'string' => 'tag.buyer',
				'pt_BR' => 'Comprador',
				'en_US' => 'Buyer',
				'es_ES' => 'Buyer',
			],
			[
				'string' => 'tag.scroll_for_more',
				'pt_BR' => 'Role para mais itens',
				'en_US' => 'Scrool for more items',
				'es_ES' => 'Scrool for more items',
			],
			[
				'string' => 'tag.weight',
				'pt_BR' => 'Peso',
				'en_US' => 'Weight',
				'es_ES' => 'Weight',
			],
			[
				'string' => 'tag.height',
				'pt_BR' => 'Altura',
				'en_US' => 'Height',
				'es_ES' => 'Height',
			],
			[
				'string' => 'tag.width',
				'pt_BR' => 'Largura',
				'en_US' => 'Width',
				'es_ES' => 'Width',
			],
			[
				'string' => 'tag.length',
				'pt_BR' => 'Comprimento',
				'en_US' => 'Length',
				'es_ES' => 'Length',
			],
			[
				'string' => 'tag.weight:description',
				'pt_BR' => ':weight kg',
				'en_US' => ':weight kg',
				'es_ES' => ':weight kg',
			],
			[
				'string' => 'tag.height:description',
				'pt_BR' => ':height cm',
				'en_US' => ':height cm',
				'es_ES' => ':height cm',
			],
			[
				'string' => 'tag.width:description',
				'pt_BR' => ':width cm',
				'en_US' => ':width cm',
				'es_ES' => ':width cm',
			],
			[
				'string' => 'tag.length:description',
				'pt_BR' => ':length cm',
				'en_US' => ':length cm',
				'es_ES' => ':length cm',
			],
			[
				'string' => 'tag.pagination',
				'pt_BR' => 'Mostrando registros de :from à :to de um total de :total',
				'en_US' => 'Showing :from to :to of :total entries',
				'es_ES' => 'Showing :from to :to of :total entries',
			],
			[
				'string' => 'tag.loading',
				'pt_BR' => 'Carregando...',
				'en_US' => 'Loading...',
				'es_ES' => 'Loading...',
			],

			// U

			// V

			// W

			// X

			// Y

			// Z
        ]);
    }
}