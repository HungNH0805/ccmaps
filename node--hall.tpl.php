<?php
dpm($node);
dpm($content);
dpm(field_info_fields());
dpm((entity_get_info()));
$image = file_create_url($node->field_images['und'][0]['uri']);
?>
<div class="position-relative">
  <div
    class="feed-detail-images"
    id="aniimated-thumbnials">
    <div class="single-feed-img lazyloaded"
         style="background-image: url(&quot;<?=$image?>&quot;);"
         data-width="100"
         data-bg-image="url('<?=$image?>')">
      <a
        href="<?=$image?>"
        data-fancybox="gallery" tabindex="-1">
        <img
          data-src="<?=$image?>"
          alt="th16 base link" data-width="100"
          style="opacity:0"
          src="<?=$image?>"
          class=" ls-is-cached lazyloaded">
      </a>
    </div>
    <div class="slider-counter">1/2</div>
  </div>
  <div class="zoom">
    <img data-pin-nopin="true"
         data-src="https://cocbases.com/wp-content/themes/cocbases/images/zoom.png"
         alt=""
         src="https://cocbases.com/wp-content/themes/cocbases/images/zoom.png"
         class=" ls-is-cached lazyloaded">
  </div>
</div>
<div class="row">
  <div
    class="col-12 d-flex justify-content-between align-items-center gap-1 px-md-0">
    <button type="button" class="btn btn-bookmark-big border-0">
      <svg width="20" height="22" viewBox="0 0 24 25" fill="none"
           xmlns="http://www.w3.org/2000/svg">
        <path
          d="M16.8203 2.5H7.18031C5.05031 2.5 3.32031 4.24 3.32031 6.36V20.45C3.32031 22.25 4.61031 23.01 6.19031 22.14L11.0703 19.43C11.5903 19.14 12.4303 19.14 12.9403 19.43L17.8203 22.14C19.4003 23.02 20.6903 22.26 20.6903 20.45V6.36C20.6803 4.24 18.9503 2.5 16.8203 2.5Z"
          fill="#5E6070" stroke="#5E6070" stroke-width="1.5"
          stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M9.58984 11.5L11.0898 13L15.0898 9" stroke="#F6F6FB"
              stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round"></path>
      </svg>
      Bookmark:
      <span class="fw-bold">1</span>
    </button>
    <div class="rating justify-content-center">
      <div class="rating-summary-big border-0">
        <div class="average-rating">
          <span>3.67</span>
          <i class="fa-solid fa-star"></i>
        </div>
        <div class="total-rating" data-total="30">
          (30)
        </div>
      </div>
    </div>
    <a
      href="https://link.clashofclans.com/en?action=OpenLayout&amp;id=TH16%3AHV%3AAAAADgAAAAKCCUSEvJwPG84UBfd2YeET"
      class="btn btn-outline-secondary btn-download btn-download-big border-0"
      target="_blank" data-postid="mLCAfnCB0HOX3XWEdfHL">
      <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
           xmlns="http://www.w3.org/2000/svg">
        <path
          d="M9 22.5H15C20 22.5 22 20.5 22 15.5V9.5C22 4.5 20 2.5 15 2.5H9C4 2.5 2 4.5 2 9.5V15.5C2 20.5 4 22.5 9 22.5Z"
          fill="#4EB5FF" stroke="#4EB5FF" stroke-width="1.5"
          stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M9 12.0098L12 15.0098L15 12.0098" stroke="#EEEEEE"
              stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round"></path>
        <path d="M12 15.0098V7.00977" stroke="#EEEEEE" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M6 17.0098C9.89 18.3098 14.11 18.3098 18 17.0098"
              stroke="#EEEEEE" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round"></path>
      </svg>
      Download:
      <span class="fw-medium" data-count="1274">1.3K</span>
    </a>
  </div>
</div>
<div class="row mt-60">
  <div class="col-lg-7">
    <div class="rating mb-2">
      <div class="rating-star d-flex align-items-center">
        <p class="mb-0 f-16">Rate this Base:</p>
        <div class="stars">
<span class="star-rating" data-postid="mLCAfnCB0HOX3XWEdfHL">
<input type="hidden" name="stars_width" style="width: 74%;">
<input type="radio" name="rating" value="1"><i class="default-rating"
                                               style="width: 74%; opacity: 1;"></i>
<input type="radio" name="rating" value="2"><i></i>
<input type="radio" name="rating" value="3"><i></i>
<input type="radio" name="rating" value="4"><i></i>
<input type="radio" name="rating" value="5"><i></i>
</span>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap gap-2">
      <div class="user-info-big text-black">
        <div class="d-flex align-items-center mb-md-4 mb-3">
          <img data-pin-nopin="true"
               data-src="https://media.oneclash.com/user/nC1pQ5GoKNZ2X4SLDqMk.jpg"
               alt="ATHARV"
               class="img-fluid rounded-circle ls-is-cached lazyloaded"
               src="https://media.oneclash.com/user/nC1pQ5GoKNZ2X4SLDqMk.jpg">
          <noscript><img data-pin-nopin="true"
                         src="https://media.oneclash.com/user/nC1pQ5GoKNZ2X4SLDqMk.jpg"
                         alt="ATHARV" class="img-fluid rounded-circle">
          </noscript>
          <h6 class="f-16">ATHARV</h6>
        </div>
        <p class="f-16"></p>
      </div>
    </div>
    <div class="feed-tags-big">
      <div class="tag tag-primary">#farming</div>
    </div>
    <div class="social-share">
      <p class="f-16">Please Share the Base Layouts with your Friends.</p>
      <div class="social-links d-flex align-items-center flex-wrap">
        <a
          href="https://www.facebook.com/sharer/sharer.php?u=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/facebook.png"
               alt="Facebook" class="img-fluid ls-is-cached lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/facebook.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/facebook.png"
                         alt="Facebook" class="img-fluid"></noscript>
        </a>
        <a
          href="https://twitter.com/intent/tweet?text=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/twitter.png"
               alt="Twitter" class="img-fluid lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/twitter.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/twitter.png"
                         alt="Twitter" class="img-fluid"></noscript>
        </a>
        <a
          href="https://www.pinterest.com/pin/create/button/?url=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/pinterest.png"
               alt="Pinterest" class="img-fluid lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/pinterest.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/pinterest.png"
                         alt="Pinterest" class="img-fluid"></noscript>
        </a>
        <a
          href="https://www.reddit.com/submit?url=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/raddit.png"
               alt="Raddit" class="img-fluid lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/raddit.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/raddit.png"
                         alt="Raddit" class="img-fluid"></noscript>
        </a>
        <a class="btn p-0 snapchat-share-button"
           data-share-url="https://cocbases.com/town-hall-16/base-id-hnyw2/">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/snapchat.png"
               alt="Snapchat" class="img-fluid lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/snapchat.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/snapchat.png"
                         alt="Snapchat" class="img-fluid"></noscript>
        </a>
        <a
          href="https://api.whatsapp.com/send?text=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/whatsapp.png"
               alt="War" class="img-fluid lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/whatsapp.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/whatsapp.png"
                         alt="War" class="img-fluid"></noscript>
        </a>
        <a
          href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/linkedin.png"
               alt="Linkedin" class="img-fluid lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/linkedin.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/linkedin.png"
                         alt="Linkedin" class="img-fluid"></noscript>
        </a>
        <a
          href="fb-messenger://share?link=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/messenger.png"
               alt="Messenger" class="img-fluid lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/messenger.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/messenger.png"
                         alt="Messenger" class="img-fluid"></noscript>
        </a>
        <a
          href="https://telegram.me/share/url?url=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/telegram.png"
               alt="Telegram" class="img-fluid lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/telegram.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/telegram.png"
                         alt="Telegram" class="img-fluid"></noscript>
        </a>
        <a
          href="https://tumblr.com/widgets/share/tool?canonicalUrl=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank" class="tumblr-share-button">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/tumblr.png"
               alt="Tumblr" class="img-fluid ls-is-cached lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/tumblr.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/tumblr.png"
                         alt="Tumblr" class="img-fluid"></noscript>
        </a>
        <a
          href="https://www.instagram.com/?url=https://cocbases.com/town-hall-16/base-id-hnyw2/"
          target="_blank">
          <img data-pin-nopin="true"
               data-src="https://cocbases.com/wp-content/themes/cocbases/images/instagram.png"
               alt="Instagram" class="img-fluid ls-is-cached lazyloaded"
               src="https://cocbases.com/wp-content/themes/cocbases/images/instagram.png">
          <noscript><img data-pin-nopin="true"
                         src="https://cocbases.com/wp-content/themes/cocbases/images/instagram.png"
                         alt="Instagram" class="img-fluid"></noscript>
        </a>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="get-app-wrapper text-center">
      <h6 class="get-app-title">Application</h6>
      <div class="mt-20 px-3">
        <h6 class="f-18 mb-30">Download for free!</h6>
        <p class="f-16">Install our application to easily copy base
          designs, upload your own bases, recruit players, or find a
          clan.</p>
      </div>
      <div class="pt-md-2 app-download row">
        <div class="col-6 pe-2 text-end">
          <a href="https://apps.apple.com/in/app/cocbases/id6445983656"
             target="_blank"><img
              data-src="https://cocbases.com/wp-content/themes/cocbases/images/app-store-dark.svg"
              alt="App Store" class="img-fluid ls-is-cached lazyloaded"
              src="https://cocbases.com/wp-content/themes/cocbases/images/app-store-dark.svg">
            <noscript><img
                src="https://cocbases.com/wp-content/themes/cocbases/images/app-store-dark.svg"
                alt="App Store" class="img-fluid"></noscript>
          </a>
        </div>
        <div class="col-6 ps-2 text-start">
          <a
            href="https://play.google.com/store/apps/details?id=com.coc.cocbases&amp;hl=en&amp;gl=US"
            target="_blank"><img
              data-src="https://cocbases.com/wp-content/themes/cocbases/images/google-play-black.svg"
              alt="Google Play" class="img-fluid ls-is-cached lazyloaded"
              src="https://cocbases.com/wp-content/themes/cocbases/images/google-play-black.svg">
            <noscript><img
                src="https://cocbases.com/wp-content/themes/cocbases/images/google-play-black.svg"
                alt="Google Play" class="img-fluid"></noscript>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 text-center position-relative">
    <span class="copied" style="display: none;">Copied to clipboard</span>
    <a
      href="<?php print $node->field_link_download['und'][0]['value']?>"
      class="btn btn-download-2" target="_blank"
      data-id="<?=$node->nid?>">
      <img data-pin-nopin="true"
           data-src="https://cocbases.com/wp-content/themes/cocbases/images/copy.png"
           alt="Copy" class="img-fluid ls-is-cached lazyloaded"
           src="https://cocbases.com/wp-content/themes/cocbases/images/copy.png">
      Download/Copy this Base
    </a>
  </div>
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
<div class="row justify-content-center">
  <div class="col-11">
  </div>
</div>
