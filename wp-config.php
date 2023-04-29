<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'primus' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';SMXyBu<J?K[S?W:{zls2::kxB:.3FJ=%${mn,a%#z,3zlV31cK&Hgg,oG|GTLP=' );
define( 'SECURE_AUTH_KEY',  'k]ooUeQ[,Rr]%e@x%7B9SLPX+P6+b=88*em0)~Y!>=d 4BAde$$J%5T*)s$MqM ;' );
define( 'LOGGED_IN_KEY',    '#{c/(CSGQugZSwWq]U$o]4>-^aC)Ci~GD(xW2vw}C,UGGg,dgQz3!<(tFDP_&o${' );
define( 'NONCE_KEY',        'oOsisU?{P^%ZTL)`cZ>&SyH&~K3u#E2gVl^&~xsmxr/-/q:FND%I1n,K34R3LXAV' );
define( 'AUTH_SALT',        'B`/Ua{~.g9.`,_/_rS%k`^i`JUyy.QP4PCIB&Gx% -?!pQd;J qWo7 U$E~>~qkn' );
define( 'SECURE_AUTH_SALT', '~~P)|vvTY={7d%yrVg-r7}2)als~|sb}XQ&h7gcN$M:SdkU=H`alVFFTls7k)dO?' );
define( 'LOGGED_IN_SALT',   '[t9}L{E*-&I(OmZ:AM+#5479/)_N^2_9g+~=9VQ^,!6VU<z.B[nljP~EJP_mRzsm' );
define( 'NONCE_SALT',       '7RQn-P)nV,^F{;C5L:?Dcn@+U~iKRA2,I9E24-Z <37+8h:/T20i1Gle$SmEo<O-' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_primus';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
