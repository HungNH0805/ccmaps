<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div class="home1">
<div class="full-width-header">

    <!--Header Start-->
    <header id="rs-header" class="rs-header rs-transfarent-header-style rs-header-style8 lg-pt-20">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-12">
                        <div class="logo-area">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Kachi'); ?>" rel="home" id="logo">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Kachi'); ?>" />
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="main-menu text-center">
                            <!-- <div id="logo-sticky" class="text-center">
                                <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                            </div> -->
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav class="rs-menu">
                                <?= getMenuKachi()?>
                            </nav>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="rs-right-btn-inner text-right">
                            <div class="searce-box">
                                <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="apply-box">
                                <a href="/lien-he">Tư vấn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->
</div>
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php $type = arg(0)?>
                    <?php if ($type == 'node'||$type=='taxonomy'):?>
                        <?php if($type == 'node'){
                            $node = node_load(arg(1));
                            $name = $node->title;
                        }elseif($type == 'taxonomy'){
                            $taxonomy = taxonomy_term_load(arg(2));
                            $name = $taxonomy->name;
                        }else{
                            $name = '';
                        }?>
                        <ul>
                            <li>
                                <a href="//kachi.edu.vn">Trang chủ</a>
                            </li>
                            <li><?=$name?></li>
                        </ul>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$col = 12;
?>
<?php if ($page['sidebar_first']){
    $col = 9;
} ?>
<!-- Blog Section Start Here -->
<div class="blog-page-area sec-spacer">
    <div class="container">
        <?php print $messages; ?>
        <div class="contact-page-section sec-spacer">
            <?php if ($page['contact_info']) print render($page['contact_info'])?>
            <div class="contact-comment-section">
            <h3>Để lại liên hệ</h3>
            <div class="row">
                <div class="col-md-6">
                    <?php
                    webform_node_view(node_load(51),'full');
                    print theme_webform_view(node_load(51)->content);
                    ?>
                </div>
                <div class="col-md-6">
                    <?php if ($page['map_info']) print render($page['map_info'])?>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Blog End  -->

<footer id="rs-footer" class="bg3 rs-footer rs-footer-style8">
    <div class="container">
        <!-- Footer Address -->
        <div>
            <?php if ($page['contact_footer']) print render($page['contact_footer'])?>
        </div>
    </div>

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--                    <div class="about-widget">-->
                    <!--                        <a href="/kachi.edu.vn"><img src="/sites/all/themes/kachi/assets/images/logo-footer.png" alt="Footer Logo"></a>-->
                    <!--                        <p>Kachi - tự hào được học viên tín nhiệm là một trong những địa chỉ học ngoại ngữ thân thiện - uy tín - chất lượng hàng đầu không chỉ tại khu vực TP.</p>-->
                    <!--                    </div>-->
                    <?php if ($page['footer_col1']) print render($page['footer_col1'])?>
                </div>
                <div class="col-lg-3 col-md-12">
                    <?php if ($page['footer_col2']) print render($page['footer_col2'])?>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">LIÊN KẾT</h5>
                    <?php print getMenuFooterKachi()?>
                    <!--                    --><?php //if ($page['footer_col3']) print render($page['footer_col3'])?>
                </div>
                <div class="col-lg-3 col-md-12">
                    <?php if ($page['footer_col4']) print render($page['footer_col4'])?>
                </div>
            </div>
            <div class="footer-share">
                <?php if ($page['footer_share']) print render($page['footer_share'])?>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>© 2021 <a href="http://kachi.edu.vn/">Kachi</a>. Thiết kế bởi <a href="//minhhien.com.vn" target="_blank">MinhHien Solutions</a>.</p>
            </div>
        </div>
    </div>
</footer>
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="fa fa-close"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form action="/tim-kiem-khoa-hoc" method="get">
                    <div class="form-group">
                        <input class="form-control" name="title" placeholder="Nhập tên khóa học" type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
