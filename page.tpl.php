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
    <div class="container-fluid">
      <div class="row">

        <div class="col-3 col-left">
          <div class="flex-shrink-0 filter-wrapper" id="filter">
            <div class="d-none d-flex align-items-center text-black mb-35">
              <button class="btn back-to-page">
                <i class="fa-solid fa-angle-left"></i>
              </button>
              <span class="filter-title fw-medium text-black">Filter</span>
            </div>
            <form action="">
              <ul class="list-unstyled ps-0 mb-50">
                <li class="filter-item">
<span class="btn btn-toggle" data-bs-toggle="collapse"
      data-bs-target="#select-hall-bases" aria-expanded="false">
Town Hall Bases </span>
                  <div class="collapse show" id="select-hall-bases">
                    <ul class="btn-toggle-nav list-unstyled">
                      <li>
                        <div class="form-check">
                          <label class="form-check-label" for="town-hall-bases">
                            Town Hall Bases
                          </label>
                          <input class="form-check-input" type="radio"
                                 name="hall-bases" id="town-hall-bases"
                                 value="town-hall-bases" checked="checked">
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label"
                                 for="builder-hall-bases">
                            Builder Hall Bases
                          </label>
                          <input class="form-check-input" type="radio"
                                 name="hall-bases" id="builder-hall-bases"
                                 value="builder-hall-bases">
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="filter-item">
<span class="btn btn-toggle collapsed" data-bs-toggle="collapse"
      data-bs-target="#town-hall-level" aria-expanded="false">
Town Hall Level </span>
                  <div class="collapse show levels my-1" id="town-hall-level">
                    <div class="btn-toggle-nav">
                      <div class="row px-2">
                        <?php
                        $town_halls = taxonomy_get_children(1);
                        $builder_halls = taxonomy_get_children(2);
                        ?>
                        <?php foreach ($town_halls as $town_hall): ?>
                          <?php $image = file_create_url($town_hall->field_image['und'][0]['uri']) ?>
                          <div class="col-4 col-xxl-4 px-1 mt-3 level-th">
                            <div class="form-check">
                              <input class="form-check-input first-th-level"
                                     type="radio" name="hall-level" id="<?=str_replace(' ','-',$town_hall->field_short_name['und'][0]['value'])?>"
                                     value="<?=str_replace(' ','-',$town_hall->field_short_name['und'][0]['value'])?>"
                                     data-tid="<?=$town_hall->tid?>">
                              <label class="form-check-label text-uppercase"
                                     for="th16">
                                <img data-src="<?= $image ?>" alt="th16"
                                     class="img-fluid mb-1 lazyload"
                                     width="24px" height="25px"
                                     src="<?= $image ?>"
                                     style="--smush-placeholder-width: 24px; --smush-placeholder-aspect-ratio: 24/25;">
                                <?=$town_hall->field_short_name['und'][0]['value']?> </label>
                            </div>
                          </div>
                        <?php endforeach; ?>

                        <?php foreach ($builder_halls as $builder_hall): ?>
                          <?php $image = file_create_url($builder_hall->field_image['und'][0]['uri']) ?>
                        <div class="col-4 col-xxl-4 px-1 mt-3 level-bh">
                          <div class="form-check">
                            <input class="form-check-input first-th-level"
                                   type="radio" name="hall-level" id="<?=str_replace(' ','-',$builder_hall->field_short_name['und'][0]['value'])?>"
                                   value="<?=str_replace(' ','-',$builder_hall->field_short_name['und'][0]['value'])?>" checked="checked"
                            data-tid="<?=$builder_hall->tid?>">
                            <label class="form-check-label text-uppercase"
                                   for="th16">
                              <img data-src="<?= $image ?>" alt="th16"
                                   class="img-fluid mb-1 lazyload"
                                   width="24px" height="25px"
                                   src="<?= $image ?>"
                                   style="--smush-placeholder-width: 24px; --smush-placeholder-aspect-ratio: 24/25;">
                              <?=$builder_hall->field_short_name['und'][0]['value']?> </label>
                          </div>
                        </div>
                        <?php endforeach; ?>

                      </div>
                    </div>
                  </div>
                </li>

                <li class="filter-item">
<span class="btn btn-toggle" data-bs-toggle="collapse"
      data-bs-target="#primary" aria-expanded="tru">
Filters
</span>
                  <div class="collapse show" id="primary">
                    <ul class="btn-toggle-nav list-unstyled">
                      <li>
                        <div class="form-check">
                          <label class="form-check-label" for="all">
                            All
                          </label>
                          <input class="form-check-input" type="radio" name="primary" id="all" value="all" checked="" data-tid="All">
                        </div>
                      </li>
                      <?php
                      $attributes  = entity_load('taxonomy_term', FALSE, array('vid' => 4));
                      ?>
                      <?php foreach ($attributes as $attribute):?>
                        <li class="th-tag" style="">
                          <div class="form-check">
                            <label class="form-check-label text-capitalize"
                                   for="<?=$attribute->name?>">
                              <?=$attribute->name?> </label>
                            <input class="form-check-input" type="radio"
                                   name="primary" id="<?=$attribute->name?>" value="<?=$attribute->name?>" data-tid="<?=$attribute->tid?>">
                          </div>
                        </li>
                      <?php endforeach;?>
                    </ul>
                  </div>
                </li>
                <li class="filter-item">
<span class="btn btn-toggle collapsed" data-bs-toggle="collapse"
      data-bs-target="#sort-by" aria-expanded="false">
Sort By
</span>
                  <div class="collapse " id="sort-by">
                    <ul class="btn-toggle-nav list-unstyled">
                      <li>
                        <div class="form-check">
                          <label class="form-check-label" for="latest">
                            <svg width="20" height="20" viewbox="0 0 20 20"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10.7507 10.2083V10.4928L10.9952 10.6382L13.4818 12.1159L13.393 12.2651L10.5007 10.5486V7.16667H10.7507V10.2083ZM3.33398 10.5H3.83398V10C3.83398 8.14349 4.57148 6.36301 5.88424 5.05025C7.19699 3.7375 8.97747 3 10.834 3C12.6905 3 14.471 3.7375 15.7837 5.05025C17.0965 6.36301 17.834 8.14349 17.834 10C17.834 11.8565 17.0965 13.637 15.7837 14.9497C14.471 16.2625 12.6905 17 10.834 17L10.832 17C9.91316 17.0036 9.00281 16.8241 8.15417 16.4718C7.45897 16.1832 6.8166 15.7835 6.25182 15.2893L6.73001 14.8111C7.83164 15.758 9.26734 16.3333 10.834 16.3333C12.5137 16.3333 14.1246 15.6661 15.3123 14.4783C16.5001 13.2906 17.1673 11.6797 17.1673 10C17.1673 8.3203 16.5001 6.70939 15.3123 5.52166C14.1246 4.33393 12.5137 3.66667 10.834 3.66667C9.15428 3.66667 7.54337 4.33393 6.35564 5.52166C5.16791 6.70939 4.50065 8.3203 4.50065 10V10.5H5.00065H6.29143L4.13753 12.6486L2.02629 10.5H3.33398Z"
                                fill="black" stroke="#333333"></path>
                            </svg>
                            Latest
                          </label>
                          <input class="form-check-input" type="radio"
                                 name="sort-by" id="latest" value="created"
                                 checked="">
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label" for="downloads">
                            <svg width="20" height="20" viewbox="0 0 20 20"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10.0007 12.9788C9.88954 12.9788 9.78537 12.9616 9.68815 12.9272C9.59093 12.8927 9.50065 12.8336 9.41732 12.7497L6.41732 9.74968C6.26454 9.5969 6.18815 9.40246 6.18815 9.16634C6.18815 8.93023 6.26454 8.73579 6.41732 8.58301C6.5701 8.43023 6.76815 8.35051 7.01149 8.34384C7.25482 8.33718 7.4526 8.40996 7.60482 8.56218L9.16732 10.1247V4.16634C9.16732 3.93023 9.24732 3.73218 9.40732 3.57218C9.56732 3.41218 9.7651 3.33246 10.0007 3.33301C10.2368 3.33301 10.4348 3.41301 10.5948 3.57301C10.7548 3.73301 10.8345 3.93079 10.834 4.16634V10.1247L12.3965 8.56218C12.5493 8.4094 12.7473 8.33634 12.9907 8.34301C13.234 8.34968 13.4318 8.42968 13.584 8.58301C13.7368 8.73579 13.8132 8.93023 13.8132 9.16634C13.8132 9.40246 13.7368 9.5969 13.584 9.74968L10.584 12.7497C10.5007 12.833 10.4104 12.8922 10.3132 12.9272C10.2159 12.9622 10.1118 12.9794 10.0007 12.9788ZM5.00065 16.6663C4.54232 16.6663 4.14982 16.503 3.82315 16.1763C3.49649 15.8497 3.33343 15.4575 3.33399 14.9997V13.333C3.33399 13.0969 3.41399 12.8988 3.57399 12.7388C3.73399 12.5788 3.93176 12.4991 4.16732 12.4997C4.40343 12.4997 4.60149 12.5797 4.76149 12.7397C4.92149 12.8997 5.00121 13.0975 5.00065 13.333V14.9997H15.0007V13.333C15.0007 13.0969 15.0807 12.8988 15.2407 12.7388C15.4007 12.5788 15.5984 12.4991 15.834 12.4997C16.0701 12.4997 16.2682 12.5797 16.4282 12.7397C16.5882 12.8997 16.6679 13.0975 16.6673 13.333V14.9997C16.6673 15.458 16.504 15.8505 16.1773 16.1772C15.8507 16.5038 15.4584 16.6669 15.0007 16.6663H5.00065Z"
                                fill="black"></path>
                            </svg>
                            Downloads
                          </label>
                          <input class="form-check-input" type="radio"
                                 name="sort-by" id="downloads"
                                 value="field_downloads_value">
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label" for="bookmarks">
                            <svg width="20" height="20" viewbox="0 0 20 20"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.83268 2.5H14.166C15.0827 2.5 15.8327 3.25 15.8327 4.16667V17.5L9.99935 15L4.16602 17.5V4.16667C4.16602 3.25 4.91602 2.5 5.83268 2.5ZM9.99935 13.1833L14.166 15V4.16667H5.83268V15L9.99935 13.1833Z"
                                    fill="black"></path>
                            </svg>
                            Bookmarks
                          </label>
                          <input class="form-check-input" type="radio"
                                 name="sort-by" id="bookmarks" value="count">
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label" for="rating">
                            <svg width="20" height="20" viewbox="0 0 20 20"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M18.3327 8.11634L12.341 7.59967L9.99935 2.08301L7.65768 7.60801L1.66602 8.11634L6.21602 12.058L4.84935 17.9163L9.99935 14.808L15.1494 17.9163L13.791 12.058L18.3327 8.11634ZM9.99935 13.2497L6.86602 15.1413L7.69935 11.5747L4.93268 9.17467L8.58268 8.85801L9.99935 5.49967L11.4243 8.86634L15.0743 9.18301L12.3077 11.583L13.141 15.1497L9.99935 13.2497Z"
                                fill="black"></path>
                            </svg>
                            Rating
                          </label>
                          <input class="form-check-input" type="radio"
                                 name="sort-by" id="rating" value="field_rating_star_rating">
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </form>
            <div class="text-center">
              <a data-url="town-hall-15" class="btn reset-btn">Reset the
                filter</a>
            </div>
          </div>
        </div>

        <div class="col-9 col-right text-black">
          <div class="row">
            <div class="col-12">
              <h1
                class="f-40 fw-bold text-center text-lg-start text-capitalize col-lg-10"
                id="feed-title">
                Best | COC Latest Layouts</h1>
              <div class="applied-filter d-flex flex-wrap">
                <div class="selected-option" id="selected-th-level">
                  <img data-src="https://media.oneclash.com/config/th16.png"
                       alt="th16" class="img-fluid me-2 mb-1 lazyload"
                       width="18px" height="19px"
                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                       style="--smush-placeholder-width: 18px; --smush-placeholder-aspect-ratio: 18/19;">
                  <noscript><img src="../config/th16.png" alt="th16"
                                 class="img-fluid me-2 mb-1" width="18px"
                                 height="19px"></noscript>
                  <span class="text-uppercase">th16</span>
                  <button type="button" class="btn-close"
                          data-bs-dismiss="selected-th-level"
                          data-url="town-hall-15" aria-label="Close">
                    <i class="fa-solid fa-circle-xmark"></i>
                  </button>
                </div>
                <span class="border-end border-secondary-subtle"></span>
                <div class="selected-option text-capitalize d-none"
                     id="selected-primary">
                  <span></span>
                  <button type="button" class="btn-close"
                          data-bs-dismiss="selected-th-level"
                          aria-label="Close">
                    <i class="fa-solid fa-circle-xmark"></i>
                  </button>
                </div>
                <div class="selected-option" id="selected-sort-by">
<span class="text-capitalize">
<span class="fw-light">Sort By: </span><span class="sort">Latest</span></span>
                  <button type="button" class="btn-close"
                          data-bs-dismiss="selected-th-level"
                          aria-label="Close">
                    <i class="fa-solid fa-circle-xmark"></i>
                  </button>
                </div>
                <button type="button" id="btn-add-filter"
                        class="btn btn-filter d-none" data-bs-target="#filter"
                        aria-controls="filter">
                  Add filter
                  <img
                    data-src="https://cocbases.com/wp-content/themes/cocbases/images/filter.png"
                    alt="Filter" class="img-fluid lazyload" width="20px"
                    height="20px"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    style="--smush-placeholder-width: 20px; --smush-placeholder-aspect-ratio: 20/20;">
                  <noscript><img
                      src="../wp-content/themes/cocbases/images/filter.png"
                      alt="Filter" class="img-fluid" width="20px" height="20px">
                  </noscript>
                </button>
              </div>
              <div
                class="creator-code mb-4 d-flex justify-content-between align-items-center position-relative">
                <span class="copied"
                      style="display: none;">Copied to clipboard</span>
                <h5 class="m-0 me-3">Did you know that you can support us when
                  you purchase items in the Clash of Clans shop like the Gold
                  Pass, Gems, Skins, and Sceneries? It won't cost you anything
                  extra, but it helps us keep the website running. Just use the
                  creator code "cocbases" or click the button Cocbases.</h5>
                <a
                  href="https://link.clashofclans.com/en/?action=SupportCreator&id=cocbases"
                  data-link="https://link.clashofclans.com/en/?action=SupportCreator&id=cocbases"
                  target="_blank" class="copy-text btn btn-primary text-white">Cocbases</a>
              </div>
            </div>
          </div>
          <div class="row feeds-article">
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
          </div>
          <div class="col-10 col-right text-black">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="col-lg-12 hall-filter-col">
                  <div class="hall-filters level-tag-list">
                    <a href="war/index.htm" class="th-tag">
                      war
                    </a>
                    <a href="farming/index.htm" class="th-tag">
                      farming
                    </a>
                    <a href="hybrid/index.htm" class="th-tag">
                      hybrid
                    </a>
                    <a href="trophy/index.htm" class="th-tag">
                      trophy
                    </a>
                    <a href="progress-base/index.htm" class="bh-tag">
                      progress base
                    </a>
                    <a href="anti-air/index.htm" class="th-tag">
                      anti air
                    </a>
                    <a href="anti-3-stars/index.htm" class="th-bh-tag">
                      anti 3 stars
                    </a>
                    <a href="anti-2-stars/index.htm" class="th-tag">
                      anti 2 stars
                    </a>
                    <a href="anti-ground/index.htm" class="th-tag">
                      anti ground
                    </a>
                    <a href="fun/index.htm" class="th-tag">
                      fun
                    </a>
                    <a href="progress-base/index.htm" class="th-tag">
                      progress base
                    </a>
                  </div>
                </div>
                <div class="col-lg-12 hall-filter-col">
                </div>
                <div class="hall-filters mb-2">
                  <a href="index.htm" class="text-uppercase">
                    th16 </a>
                  <a href="../town-hall-15/index.htm" class="text-uppercase">
                    th15 </a>
                  <a href="../town-hall-14/index.htm" class="text-uppercase">
                    th14 </a>
                  <a href="../town-hall-13/index.htm" class="text-uppercase">
                    th13 </a>
                  <a href="../town-hall-12/index.htm" class="text-uppercase">
                    th12 </a>
                  <a href="../town-hall-11/index.htm" class="text-uppercase">
                    th11 </a>
                  <a href="../town-hall-10/index.htm" class="text-uppercase">
                    th10 </a>
                  <a href="../town-hall-9/index.htm" class="text-uppercase">
                    th9 </a>
                  <a href="../town-hall-8/index.htm" class="text-uppercase">
                    th8 </a>
                  <a href="../town-hall-7/index.htm" class="text-uppercase">
                    th7 </a>
                  <a href="../town-hall-6/index.htm" class="text-uppercase">
                    th6 </a>
                  <a href="../town-hall-5/index.htm" class="text-uppercase">
                    th5 </a>
                  <a href="../town-hall-4/index.htm" class="text-uppercase">
                    th4 </a>
                  <a href="../builder-hall-10/index.htm" class="text-uppercase">
                    bh10 </a>
                  <a href="../builder-hall-9/index.htm" class="text-uppercase">
                    bh9 </a>
                  <a href="../builder-hall-8/index.htm" class="text-uppercase">
                    bh8 </a>
                  <a href="../builder-hall-7/index.htm" class="text-uppercase">
                    bh7 </a>
                  <a href="../builder-hall-6/index.htm" class="text-uppercase">
                    bh6 </a>
                  <a href="../builder-hall-5/index.htm" class="text-uppercase">
                    bh5 </a>
                  <a href="../builder-hall-4/index.htm" class="text-uppercase">
                    bh4 </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-12 feed-dynamic-content">
            </div>
            <div class="col-md-12 feed-dynamic-readmore text-end">
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-11">
        </div>
      </div>
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

