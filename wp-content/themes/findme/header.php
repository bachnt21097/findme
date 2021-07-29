<?php

/**

 * The header.

 *

 * This is the template that displays all of the <head> section and everything up until main.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Twenty_One

 * @since Twenty Twenty-One 1.0

 */



?>

<!doctype html>

<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Media Findme Thiết Kế Website Chuẩn Seo Uy Tín Tại Hà Nội</title>
    <meta name="description" content="Công ty Media Findme thiết kế website chuyên nghiệp, cao cấp. Giải pháp marketing hàng đầu cho doanh nghiệp.">


	<?php wp_head(); ?>

    <link rel='stylesheet' href='<?php echo get_home_url(); ?>/wp-content/themes/findme/assets/csstpb/line-awesome.min.css'>



	<link href="<?php echo get_home_url(); ?>/wp-content/themes/findme/favicon.png" rel="shortcut icon" type="image/x-icon" />

	<link rel='stylesheet' href='<?php echo get_home_url(); ?>/wp-content/themes/findme/assets/csstpb/all.min.css'>

	<script src="<?php echo get_home_url(); ?>/wp-content/themes/findme/assets/csstpb/email.min.js"></script>

	<meta name="description" content="Giải pháp marketing cho mọi doanh nghiệp">

	<link rel='stylesheet' href='<?php echo get_home_url(); ?>/wp-content/themes/findme/assets/csstpb/bootstrap.css'>

	<link rel='stylesheet' href='<?php echo get_home_url(); ?>/wp-content/themes/findme/assets/csstpb/index.css'>

    <link rel='stylesheet' href='<?php echo get_home_url(); ?>/wp-content/themes/findme/assets/csstpb/slick.css'>

    <link rel='stylesheet' href='<?php echo get_home_url(); ?>/wp-content/themes/findme/assets/csstpb/aos.css'>

    <script src="<?php echo get_home_url(); ?>/wp-content/themes/findme/assets/csstpb/jquery-3.5.1.min.js"></script>



</head>



<body>





	<?php wp_body_open(); ?>







  <!-- Messenger Plugin chat Code -->

    <div id="fb-root"></div>



    <!-- Your Plugin chat code -->

    <div id="fb-customer-chat" class="fb-customerchat">

    </div>



    <script>

      var chatbox = document.getElementById('fb-customer-chat');

      chatbox.setAttribute("page_id", "105677368402738");

      chatbox.setAttribute("attribution", "biz_inbox");



      window.fbAsyncInit = function() {

        FB.init({

          xfbml            : true,

          version          : 'v11.0'

        });

      };



      (function(d, s, id) {

        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;

        js = d.createElement(s); js.id = id;

        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';

        fjs.parentNode.insertBefore(js, fjs);

      }(document, 'script', 'facebook-jssdk'));

    </script>



  



    <!-- modal bootstrap -->

    <div class="modal fade modaldichvu" id="dialog1" role="dialog" aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

          

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

              <span aria-hidden="true" style="color:#000;"><i class="las la-times"></i></span>

            </button>

              <div class="col-12" style="margin-top:30px;">

                <h2 style="text-align:center;">Liên hệ với chúng tôi</h2>

                <?php echo do_shortcode('[contact-form-7 id="21" title="About us"]'); ?>

              </div>

          </div>

        </div>

      </div>

    </div> 





	 <!-- Back to top -->

    <div class="back-to-top">

        <i class="las la-angle-up"></i>

    </div>









	<div id="page" class="site">

		<div id="content" class="site-content">

			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">







<!-- menu -->

<div class="section1">

        <div class="container header">

            <div class="wrap-header" >

                <div class="navbar navbar-expand-lg navbar-light">

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-9 logo">

                        <a href="/findme"><img style="outline:none;" src="<?php echo get_home_url(); ?>/wp-content/themes/findme/img/logo-findme.png"></a>

                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-3 col-sm-3 col-3 wrap-menu">

                        <div class="toggle">

                            <!-- <i class="las la-bars drop-down-menu"></i> -->

                            <a href="#" class="menu-toggle" id="menu-toggle"><span></span></a>



                        </div>

                        <div class="collapse navbar-collapse menu">

                            <ul class="list-menu">

                               <li class="nav-item">

                                    <a href="#">VỀ CHÚNG TÔI</a>

                               </li>

                               <li class="nav-item has-childs ">

                                    <a href="#">DỊCH VỤ<i class="las la-angle-down drop-down-all"></i></a>

                                    <ul class="dropdownmenu">

                                        <li class="nav-item-lv2"><a class="nav-link" href="<?php echo get_home_url();?>/dich-vu-marketing-thue-ngoai" title="phòng Marketing thuê ngoài">Phòng Marketing thuê ngoài</a></li>

                                        <li class="nav-item-lv2"><a class="nav-link" href="<?php echo get_home_url();?>/dich-vu-viet-content-marketing" title="content marketing">Dịch vụ viết content Marketing</a></li>

                                        <li class="nav-item-lv2"><a class="nav-link" href="<?php echo get_home_url();?>/dich-vu-quan-ly-fanpage" title="quản lý fanpage">Dịch vụ quản lý Fanpage</a></li>

                                        <li class="nav-item-lv2"><a class="nav-link" href="<?php echo get_home_url();?>/dich-vu-seo-tong-the" title="seo tổng thế">Dich vụ SEO tổng thế</a></li>			

                                        <li class="nav-item-lv2"><a class="nav-link" href="<?php echo get_home_url();?>/dich-vu-viet-content-ban-hang/" title="viết content bán hàng">Dịch vụ viết content bán hàng</a></li>

                                        <li class="nav-item-lv2"><a class="nav-link" href="<?php echo get_home_url();?>/dich-vu-quang-cao-google" title="quảng cáo google">Dịch vụ quảng cáo Google</a></li>		

                                    </ul>

                               </li>

                               <li class="nav-item">

                                    <a href="<?php echo get_home_url();?>/dich-vu-thiet-ke-website">DỰ ÁN THÀNH CÔNG</a>

                               </li>

                               <li class="nav-item has-childs">

                                    <a href="<?php echo get_home_url(); ?>/lien-he">LIÊN HỆ</a>

                               </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

</div>