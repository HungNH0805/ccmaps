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
              <a href="/" aria-current="page">Home</a></li>
            <li id="menu-item-432"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-432">
              <a
                href="/type-hall/town-hall-16">Base Layouts</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <?= decode_entities(views_embed_view('view_block_config', 'block_about_us')) ?>
  <section class="hall-sec secondary-bg">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="d-md-inline-block">
            <div class="nav nav-tabs hall-tab" id="nav-tab" role="tablist">
              <button class="nav-link active" id="town-hall-tab"
                      data-bs-toggle="tab" data-bs-target="#town-hall"
                      type="button" role="tab" aria-controls="town-hall"
                      aria-selected="true">Town Hall
              </button>
              <button class="nav-link" id="builder-hall-tab"
                      data-bs-toggle="tab" data-bs-target="#builder-hall"
                      type="button" role="tab" aria-controls="builder-hall"
                      aria-selected="false">Builder Hall
              </button>
            </div>
          </div>
        </div>
        <div class="tab-content" id="nav-tabContent">

          <div class="tab-pane fade show active" id="town-hall" role="tabpanel"
               aria-labelledby="town-hall-tab"
               tabindex="0">
            <?= views_embed_view('view_term', 'block_town_hall_front') ?>
          </div>

          <div class="tab-pane fade" id="builder-hall" role="tabpanel"
               aria-labelledby="builder-hall-tab" tabindex="0">
            <?= views_embed_view('view_term', 'block_builder_hall_front') ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?= decode_entities(views_embed_view('view_block_config', 'block_base_designs_front')) ?>
  <?= (views_embed_view('view_block_front', 'block_news_front')) ?>
  <?= decode_entities(views_embed_view('view_block_config', 'block_promotion_front')) ?>
  <?= decode_entities(views_embed_view('view_block_config', 'block_footer')) ?>
</div>
