<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', "findme" );


/** Username của database */
define( 'DB_USER', "root" );


/** Mật khẩu của database */
define( 'DB_PASSWORD', "" );


/** Hostname của database */
define( 'DB_HOST', "localhost" );


/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GP!7G]9u>=H#|_}/fVk)!hbgCWb|89`&-o7Rw`|xHF1w18n_+EE]@C.iwz4/.0<H' );

define( 'SECURE_AUTH_KEY',  'V2j4#=7EhUk#i yVaclo+?yOoihwycQ`=kD!DK5!1+t+P04zsfl#KB,ln26 j+p?' );

define( 'LOGGED_IN_KEY',    '5P0#S+Q.t[9cock+4gfe.Uwzj*bP*eF4],}DL*Ap*):C)5yTXZj[kt%Q!fEb&/|I' );

define( 'NONCE_KEY',        '/,kL)c[!Flqc}fMAb^/&QzlqNt+~!_Oybtb]ihPhEeD2d;aM;S1zB{nbx:NYVyg0' );

define( 'AUTH_SALT',        '|zq<iHO{tYuN@#iN2Rii=pD ![pWa9ahYg5bH.- PDWTuIN di>.LO^kwZ-7euyJ' );

define( 'SECURE_AUTH_SALT', 'dl4#E%kI?C?H{]3~N)u/UmMIkq0UrB#W-VXC?|!m}RHa/E3reSAGS56?&}F2Igue' );

define( 'LOGGED_IN_SALT',   ':TiXT4e1~ot8_w*3Uul;?r=vO=g~/~,*C:vHYN-grW B^j~ro<w]-VzAiHlQFlbe' );

define( 'NONCE_SALT',       '))PzLJK T9~eao,GKrW#J#2${1X&Rdu?3j6n[lJa.@rpu2psh]WTRkvf%8r 2Kd]' );


/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';


/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
