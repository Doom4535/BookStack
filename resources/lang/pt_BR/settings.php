<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Configurações',
    'settings_save' => 'Salvar Configurações',
    'settings_save_success' => 'Configurações salvas',

    // App Settings
    'app_customization' => 'Customização',
    'app_features_security' => 'Recursos & Segurança',
    'app_name' => 'Nome da Aplicação',
    'app_name_desc' => 'Esse nome será mostrado no cabeçalho e em e-mails.',
    'app_name_header' => 'Mostrar o nome no cabeçalho',
    'app_public_access' => 'Acesso Público',
    'app_public_access_desc' => 'Habilitar esta opção irá permitir que visitantes, que não estão logados, acessem o conteúdo em sua instância do BookStack.',
    'app_public_access_desc_guest' => 'O acesso de visitantes públicos pode ser controlado através do usuário "Convidado".',
    'app_public_access_toggle' => 'Permitir acesso público',
    'app_public_viewing' => 'Permitir visualização pública?',
    'app_secure_images' => 'Upload de Imagens mais Seguro',
    'app_secure_images_toggle' => 'Habilitar uploads de imagem mais seguro',
    'app_secure_images_desc' => 'Por razões de performance, todas as imagens são públicas. Esta opção adiciona uma string randômica na frente das URLs de imagens. Certifique-se de que os diretórios não possam ser indexados para prevenir acesso indesejado.',
    'app_editor' => 'Editor de Página',
    'app_editor_desc' => 'Selecione qual editor será utilizado pelos usuários ao editar páginas.',
    'app_custom_html' => 'Conteúdo customizado para <head> HTML',
    'app_custom_html_desc' => 'Quaisquer conteúdos aqui adicionados serão inseridos no final da seção <head> de cada página. Essa é uma maneira útil de sobrescrever estilos e adicionar códigos de análise de site.',
    'app_custom_html_disabled_notice' => 'O conteúdo customizado do <head> HTML está desabilitado nesta página de configurações, para garantir que quaisquer alterações danosas possam ser revertidas.',
    'app_logo' => 'Logo da Aplicação',
    'app_logo_desc' => 'A imagem deve ter 43px de altura. <br>Imagens maiores serão reduzidas.',
    'app_primary_color' => 'Cor Primária da Aplicação',
    'app_primary_color_desc' => 'Define a cor primária para a aplicação, incluindo o banner, botões e links.',
    'app_homepage' => 'Página Inicial',
    'app_homepage_desc' => 'Selecione uma opção para ser exibida como página inicial em vez da padrão. Permissões de página serão ignoradas para as páginas selecionadas.',
    'app_homepage_select' => 'Selecione uma página',
    'app_disable_comments' => 'Desativar Comentários',
    'app_disable_comments_toggle' => 'Desativar comentários',
    'app_disable_comments_desc' => 'Desativar comentários em todas as páginas no aplicativo.<br> Comentários existentes não serão exibidos.',

    // Color settings
    'content_colors' => 'Cores do Conteúdo',
    'content_colors_desc' => 'Define as cores para todos os elementos da hierarquia de organização de páginas. Escolher cores com brilho similar ao das cores padrão é aconselhável para a legibilidade.',
    'bookshelf_color' => 'Cor da Prateleira',
    'book_color' => 'Cor do Livro',
    'chapter_color' => 'Cor do Capítulo',
    'page_color' => 'Cor da Página',
    'page_draft_color' => 'Cor do Rascunho',

    // Registration Settings
    'reg_settings' => 'Cadastro',
    'reg_enable' => 'Habilitar Cadastro',
    'reg_enable_toggle' => 'Habilitar cadastro',
    'reg_enable_desc' => 'Quando o cadastro é habilitado, visitantes poderão cadastrar-se como usuários do aplicativo. Realizado o cadastro, recebem um único cargo padrão.',
    'reg_default_role' => 'Cargo padrão para usuários após o cadastro',
    'reg_enable_ldap_warning' => 'A opção acima não é usada enquanto a autenticação por LDAP está ativa. Contas de usuário para membros não existentes serão criadas automaticamente se a autenticação contrária ao sistema LDAP em uso é bem sucedida.',
    'reg_email_confirmation' => 'Confirmação de E-mail',
    'reg_email_confirmation_toggle' => 'Requerer confirmação de e-mail',
    'reg_confirm_email_desc' => 'Em caso da restrição de domínios estar em uso, a confirmação de e-mail será requerida e essa opção será ignorada.',
    'reg_confirm_restrict_domain' => 'Restrição de Domínios',
    'reg_confirm_restrict_domain_desc' => 'Entre com uma lista separada por vírgulas de domínios de e-mails aos quais você deseja restringir o cadastro. Um e-mail de confirmação será enviado para o usuário validar seu endereço de e-mail antes de ser permitido a interagir com a aplicação. <br> Note que os usuários serão capazes de alterar o seus endereços de e-mail após o sucesso na confirmação do cadastro.',
    'reg_confirm_restrict_domain_placeholder' => 'Nenhuma restrição definida',

    // Maintenance settings
    'maint' => 'Manutenção',
    'maint_image_cleanup' => 'Limpeza de Imagens',
    'maint_image_cleanup_desc' => "Examina páginas e revisa seus conteúdos para verificar quais imagens e desenhos estão atualmente em uso e quais são redundantes. Certifique-se de criar um backup completo do banco de dados e imagens antes de executar esta ação.",
    'maint_image_cleanup_ignore_revisions' => 'Ignorar imagens em revisões',
    'maint_image_cleanup_run' => 'Executar Limpeza',
    'maint_image_cleanup_warning' => ':count imagens potencialmente não utilizadas foram encontradas. Tem certeza de que deseja excluir estas imagens?',
    'maint_image_cleanup_success' => ':count imagens potencialmente não utilizadas foram encontradas e excluídas!',
    'maint_image_cleanup_nothing_found' => 'Nenhuma imagem não utilizada foi encontrada, nada foi excluído!',
    'maint_send_test_email' => 'Enviar um E-mail de Teste',
    'maint_send_test_email_desc' => 'Esta opção envia um e-mail de teste para o endereço especificado no seu perfil.',
    'maint_send_test_email_run' => 'Enviar e-mail de teste',
    'maint_send_test_email_success' => 'E-mail enviado para :address',
    'maint_send_test_email_mail_subject' => 'E-mail de Teste',
    'maint_send_test_email_mail_greeting' => 'O envio de e-mails parece funcionar!',
    'maint_send_test_email_mail_text' => 'Parabéns! Já que você recebeu esta notificação, suas opções de e-mail parecem estar configuradas corretamente.',

    // Role Settings
    'roles' => 'Cargos',
    'role_user_roles' => 'Cargos de Usuário',
    'role_create' => 'Criar novo Cargo',
    'role_create_success' => 'Cargo criado com sucesso',
    'role_delete' => 'Excluir Cargo',
    'role_delete_confirm' => 'A ação vai excluír o cargo de nome \':roleName\'.',
    'role_delete_users_assigned' => 'Esse cargo tem :userCount usuários vinculados a ele. Se quiser migrar usuários desse cargo para outro, selecione um novo cargo.',
    'role_delete_no_migration' => "Não migre os usuários",
    'role_delete_sure' => 'Tem certeza que deseja excluir esse cargo?',
    'role_delete_success' => 'Cargo excluído com sucesso',
    'role_edit' => 'Editar Cargo',
    'role_details' => 'Detalhes do Cargo',
    'role_name' => 'Nome do Cargo',
    'role_desc' => 'Breve Descrição do Cargo',
    'role_external_auth_id' => 'IDs de Autenticação Externa',
    'role_system' => 'Permissões do Sistema',
    'role_manage_users' => 'Gerenciar usuários',
    'role_manage_roles' => 'Gerenciar cargos e permissões de cargos',
    'role_manage_entity_permissions' => 'Gerenciar todos os livros, capítulos e permissões de páginas',
    'role_manage_own_entity_permissions' => 'Gerenciar permissões de seu próprio livro, capítulo e paginas',
    'role_manage_page_templates' => 'Gerenciar modelos de página',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Gerenciar configurações da aplicação',
    'role_asset' => 'Permissões de Ativos',
    'role_asset_desc' => 'Essas permissões controlam o acesso padrão para os ativos dentro do sistema. Permissões em Livros, Capítulos e Páginas serão sobrescritas por essas permissões.',
    'role_asset_admins' => 'Administradores recebem automaticamente acesso a todo o conteúdo, mas essas opções podem mostrar ou ocultar as opções da Interface de Usuário.',
    'role_all' => 'Todos',
    'role_own' => 'Próprio',
    'role_controlled_by_asset' => 'Controlado pelos ativos nos quais o upload foi realizado',
    'role_save' => 'Salvar Cargo',
    'role_update_success' => 'Cargo atualizado com sucesso',
    'role_users' => 'Usuários com este cargo',
    'role_users_none' => 'Nenhum usuário está atualmente vinculado a este cargo',

    // Users
    'users' => 'Usuários',
    'user_profile' => 'Perfil do Usuário',
    'users_add_new' => 'Adicionar Novo Usuário',
    'users_search' => 'Pesquisar Usuários',
    'users_details' => 'Detalhes do Usuário',
    'users_details_desc' => 'Defina um nome de exibição e um endereço de e-mail para este usuário. O endereço de e-mail será usado para fazer login na aplicação.',
    'users_details_desc_no_email' => 'Defina um nome de exibição para este usuário para que outros usuários possam reconhecê-lo',
    'users_role' => 'Cargos do Usuário',
    'users_role_desc' => 'Selecione os cargos aos quais este usuário será vinculado. Se um usuário for vinculado a múltiplos cargos, suas permissões serão empilhadas e ele receberá todas as habilidades dos cargos atribuídos.',
    'users_password' => 'Senha do Usuário',
    'users_password_desc' => 'Defina uma senha usada para fazer login na aplicação. Esta deve ter pelo menos 6 caracteres.',
    'users_send_invite_text' => 'Você pode escolher enviar a este usuário um convite por e-mail que o possibilitará definir sua própria senha, ou defina você uma senha.',
    'users_send_invite_option' => 'Enviar convite por e-mail',
    'users_external_auth_id' => 'ID de Autenticação Externa',
    'users_external_auth_id_desc' => 'Este é o ID usado para identificar este usuário quando se comunicando com seu sistema LDAP.',
    'users_password_warning' => 'Apenas preencha os dados abaixo caso queira modificar a sua senha.',
    'users_system_public' => 'Esse usuário representa quaisquer convidados que visitam o aplicativo. Ele não pode ser usado para login mas é automaticamente atribuído.',
    'users_delete' => 'Excluir Usuário',
    'users_delete_named' => 'Excluir :userName',
    'users_delete_warning' => 'A ação vai excluir completamente o usuário de nome \':userName\' do sistema.',
    'users_delete_confirm' => 'Tem certeza que deseja excluir esse usuário?',
    'users_delete_success' => 'Usuários excluídos com sucesso',
    'users_edit' => 'Editar Usuário',
    'users_edit_profile' => 'Editar Perfil',
    'users_edit_success' => 'Usuário atualizado com sucesso',
    'users_avatar' => 'Imagem de Usuário',
    'users_avatar_desc' => 'Defina uma imagem para representar este usuário. Essa imagem deve ser um quadrado com aproximadamente 256px de altura e largura.',
    'users_preferred_language' => 'Linguagem de Preferência',
    'users_preferred_language_desc' => 'Esta opção irá alterar o idioma utilizado para a interface de usuário da aplicação. Isto não afetará nenhum conteúdo criado por usuários.',
    'users_social_accounts' => 'Contas Sociais',
    'users_social_accounts_info' => 'Aqui você pode conectar outras contas para acesso mais rápido. Desconectar uma conta não retira a possibilidade de acesso usando-a. Para revogar o acesso ao perfil através da conta social, você deverá fazê-lo na sua conta social.',
    'users_social_connect' => 'Contas Conectadas',
    'users_social_disconnect' => 'Desconectar Conta',
    'users_social_connected' => 'Conta :socialAccount foi conectada com sucesso ao seu perfil.',
    'users_social_disconnected' => 'Conta :socialAccount foi desconectada com sucesso de seu perfil.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID"" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token Created :timeAgo',
    'user_api_token_updated' => 'Token Updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'cs' => 'Česky',
        'sv' => 'Svenska',
        'ko' => '한국어',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский',
        'uk' => 'Українська',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
        'hu' => 'Magyar',
        'tr' => 'Türkçe',
    ]
    //!////////////////////////////////
];
