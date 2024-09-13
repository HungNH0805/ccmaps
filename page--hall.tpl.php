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
<div id="page" class="site">
  <header class="fixed-top">
    <div class="container">
      <div class="row align-items-center ">
        <div class="col-md-4 col-5">
          <a href="<?= $front_page ?>"><img src="<?= $logo ?>"
                                            alt="Ảnh logo"
                                            class="img-fluid"></a>
        </div>
        <div class="col-md-8 col-7">
          <ul id="menu-header-menu" class="nav f-18">
            <li id="menu-item-321"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-321">
              <a href="index.htm" aria-current="page">Home</a></li>
            <li id="menu-item-432"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-432">
              <a
                href="/type-hall/town-hall-16">Base Layouts</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <section class="hero-sec base-feed-hero lazyload"
           style="background-image:inherit;"
           data-bg-image="linear-gradient(129deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 70%), url(https://cocbases.com/wp-content/uploads/2024/07/279360659_5650215838336026_805582114555927241_n-1.jpg)">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="black-box-wrapper text-white text-center">
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <div class="f-32 text-center fw-bold">
                  <h3>Cocbases Apps</h3>
                </div>
              </div>
            </div>
            <div class="f-18 mt-2 mb-3 hero-banner-content">
              <p>Install our application to easily copy base designs, upload
                your own bases, recruit players, or find a clan.</p>
            </div>
            <div
              class="pt-md-1 app-download d-flex justify-content-center gap-2">
              <a href="https://apps.apple.com/in/app/cocbases/id6445983656"
                 target="_blank"><img
                  data-src="https://cocbases.com/wp-content/themes/cocbases/images/app-store.svg"
                  alt="App Store" class="img-fluid lazyload" width="150"
                  height="47"
                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  style="--smush-placeholder-width: 150px; --smush-placeholder-aspect-ratio: 150/47;">
                <noscript><img
                    src="../wp-content/themes/cocbases/images/app-store.svg"
                    alt="App Store" class="img-fluid" width="150" height="47">
                </noscript>
              </a>
              <a
                href="https://play.google.com/store/apps/details?id=com.coc.cocbases&hl=en&gl=US"
                target="_blank"><img
                  data-src="https://cocbases.com/wp-content/themes/cocbases/images/google-play.svg"
                  alt="Google Play" class="img-fluid lazyload" width="150"
                  height="47"
                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  style="--smush-placeholder-width: 150px; --smush-placeholder-aspect-ratio: 150/47;">
                <noscript><img
                    src="../wp-content/themes/cocbases/images/google-play.svg"
                    alt="Google Play" class="img-fluid" width="150" height="47">
                </noscript>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="feed-sec body-bg-2">
    <div class="container">
      <section class="feed-image-sec" style="height: auto !important;">
        <div class="container ps-0 pe-0" style="height: auto !important;">
          <div class="row" style="height: auto !important;">
            <div class="col-12">
              <h1 class="mb-4 text-capitalize">
                <?= $title ?></h1>
            </div>
          </div>

        </div>

        <?php print $messages ?>
        <?php if ($tabs): ?>
          <div
            class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul
            class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </section>
    </div>
  </section>
  <div class="modal fade" id="reviewSuccessModal" tabindex="-1"
       aria-labelledby="reviewSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <h5 class="modal-title" id="reviewSuccessModalLabel">Cocbases.com</h5>
        </div>
        <div class="modal-body border-0 pb-0">
          <p class="mb-lg-0">Base rated! Your feedback is appreciated, thank
            you!</p>
        </div>
        <div class="modal-footer border-0 pt-0">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
            Ok
          </button>
        </div>
      </div>
    </div>
  </div>
  <script type="8dc234948160b7596a169aea-text/javascript">
    jQuery(document).ready(function(){
        jQuery('.feed-level-page').addClass('current-menu-item');
    })
  </script>
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-8">
            <div class="pe-70">
              <div class="pb-60 footer-dynamic-content">

                <a href="../index.htm" class="me-md-0 me-2">
                  <img
                    data-src="https://cocbases.com/wp-content/uploads/2024/04/cocbases-logo-min-1.png"
                    alt="Cocbases Logo" class="img-fluid lazyload" width="225"
                    height="50"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    style="--smush-placeholder-width: 225px; --smush-placeholder-aspect-ratio: 225/50;">
                  <noscript><img
                      data-src="https://cocbases.com/wp-content/uploads/2024/04/cocbases-logo-min-1.png"
                      alt="Cocbases Logo" class="img-fluid lazyload" width="225"
                      height="50"
                      src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                      style="--smush-placeholder-width: 225px; --smush-placeholder-aspect-ratio: 225/50;">
                    <noscript><img
                        src="../wp-content/uploads/2024/04/cocbases-logo-min-1.png"
                        alt="Cocbases Logo" class="img-fluid" width="225"
                        height="50"></noscript>
                  </noscript>
                </a>
                <div class="f-14 fw-light footer-slide-content mt-3">
                  Welcome to COCBases.com! Your ultimate destination for
                  top-notch Clash of Clans base designs. Whether you're a
                  seasoned player seeking unbeatable defense strategies or a
                  beginner looking to fortify your village, we've got you
                  covered. Our vast collection of meticulously crafted bases
                  caters to various Town Hall levels and game modes, ensuring
                  that you find the perfect layout to suit your needs. With our
                  expertly curated content and insightful tips, you'll gain a
                  competitive edge in no time. Join our thriving community of
                  CoC enthusiasts, and let's build an impregnable fortress
                  together. Prepare to dominate the battlefield with
                  COCBases.com!
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="row quick-links mb-3">
              <div class="col-lg-8 col-6 ps-lg-0 ps-30 info-links">
                <div>
                  <h5>Info</h5>
                  <ul id="menu-footer-info-menu" class="f-16">
                    <li id="menu-item-389"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389">
                      <a href="../about-us/index.htm">About Us</a></li>
                    <li id="menu-item-386"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                      <a href="../contact-us/index.htm">Contact Us</a></li>
                    <li id="menu-item-18"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-18">
                      <a href="index.htm" aria-current="page">Base Layouts</a>
                    </li>
                    <li id="menu-item-133"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-133">
                      <a href="../ads.txt">Ads.txt</a></li>
                    <li id="menu-item-387"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-387">
                      <a href="../cocbases-app-privacy-policy/index.htm">Cocbases
                        Application Privacy Policy</a></li>
                    <li id="menu-item-388"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-388">
                      <a href="../privacy-policy/index.htm">Privacy Policy</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-6 pe-lg-0 text-end social-links">
                <div class="d-inline-block text-lg-start">
                  <h5>Social Media</h5>
                  <ul id="menu-footer-social-media-menu" class="f-16">
                    <li id="menu-item-21"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
                      <a target="_blank" rel="noopener"
                         href="https://www.facebook.com/profile.php?id=61557385318496">Facebook</a>
                    </li>
                    <li id="menu-item-22"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22">
                      <a target="_blank" rel="noopener"
                         href="https://www.instagram.com/cocbases_links/">Instagram</a>
                    </li>
                    <li id="menu-item-23"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23">
                      <a target="_blank" rel="noopener"
                         href="https://in.pinterest.com/cocbases/">Pinterest</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

