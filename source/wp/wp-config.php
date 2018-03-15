<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ---------------------------

// Database Settings

// Local
define('DB_NAME', 'my_wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock');

// Common
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');     // 照合順序

// ---------------------------

// localでpluginのアップデートの際にFTPアカウントを求められたりした時は、一時的に下記を有効化する
// define('FS_METHOD','direct');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dLgyGXn/i96CRT@e|P%Z9KEq(y )W91D&9Fm,_Fdm+CgACR@w0O`+!.cmra6`_$W');
define('SECURE_AUTH_KEY',  '&IOCQR2A<@VDt~fKaioT=cyEN.7>&|w|n6NGrk[RGG7~h7REH[-iWbR&4H1v{Y]2');
define('LOGGED_IN_KEY',    'tMr;QSw)DR>[x/*V=:B3 l*|IbJI_i),tv o![YI4Qc-y%KGlJt?[&y<YtME<*nl');
define('NONCE_KEY',        '@}VD+wtf2b22KUsKa;TyoE6p.J?xpGN+[}Zq1Bqb#DQ$ZkdJ_eV]doZ )RvM5KF1');
define('AUTH_SALT',        '-M(X1G}:,-3b3^zr_&AO)vF6Oo0E$aN~XD<f^Z9PHZ_jTTo6} X:voE;XSYU!70-');
define('SECURE_AUTH_SALT', 's`rGB_Rf^a-GFIWOY1i0v>x +o-qHN/}k3EWj<)c(0OK}b)co.yF6|JBNqnA- Gj');
define('LOGGED_IN_SALT',   'LqG3+zk3dJaWB*&!b_?fbug8`,+-xr02*A_#WX}#E>)sE=JNLmt)b@pQ$<E=*ICt');
define('NONCE_SALT',       'Oz7M)q/-s.I*JTc]Gx;p2ag7/>*WM/LHeE^8)W{|j(A]Q^6q=w<A?,D1H+iko&u=');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

// ContactForm7 で自動改行させない
define( 'WPCF7_AUTOP', false );


/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
