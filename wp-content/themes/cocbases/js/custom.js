jQuery(document).ready(function ($) {
  $(window).on('scroll', function () {if ($(window).scrollTop() > 50) {$('header').addClass('sticky-header');} else {$('header').removeClass('sticky-header');}});
  if ($(window).scrollTop() > 50) {$('header').addClass('sticky-header');} else {$('header').removeClass('sticky-header');}
  $('.base-design-images').slick({ infinite: true, speed: 300, autoplay: true, autoplaySpeed: 6000, slidesToShow: 1, adaptiveHeight: false, prevArrow: '<button type=\'button\' class=\'slick-prev pull-left\'><i class=\'fa-solid fa-arrow-left\' aria-hidden=\'true\'></i></button>', nextArrow: '<button type=\'button\' class=\'slick-next pull-right\'><i class=\'fa-solid fa-arrow-right\' aria-hidden=\'true\'></i></button>' });
  $('.footer-slider').slick({ infinite: true, speed: 300, draggable: false, slidesToShow: 1, adaptiveHeight: true, prevArrow: '<button type=\'button\' class=\'slick-prev pull-left\'><i class=\'fa-solid fa-arrow-left\' aria-hidden=\'true\'></i></button>', nextArrow: '<button type=\'button\' class=\'slick-next pull-right\'><i class=\'fa-solid fa-arrow-right\' aria-hidden=\'true\'></i></button>' });
  $('.read-more').on('click', function () {
    if (!$(this).hasClass('less')) {
      $(this).addClass('less').text('Read less..');
      $(this).parent().children('.read-more-div').removeClass('d-none');
    } else {
      $(this).parent().children('.read-more-div').addClass('d-none');
      $(this).removeClass('less').text('Read more..');
    }
  });
  $('.slider-read-more').on('click', function () {
    if (!$(this).hasClass('less')) {
      $(this).addClass('less').text('Read less..');
      $(this).parent().children('.read-more-div').removeClass('d-none');
    } else {
      $(this).parent().children('.read-more-div').addClass('d-none');
      $(this).removeClass('less').text('Read more..');
    }
    var height = $(this).parent().parent().parent().height();
    $('.footer-slider .slick-list').css('height', height);
  });

  function feed_images_slider() {
    $('.feed-images').each(function (num, elem) {
      var currentFeedSlider = $(elem);
      if (currentFeedSlider.length) {
        var currentSlide;
        var slidesCount;
        var sliderCounter = document.createElement('div');
        sliderCounter.classList.add('slider-counter');
        var updateSliderCounter = function (slick, currentIndex) {
          currentSlide = slick.slickCurrentSlide() + 1;
          slidesCount = slick.slideCount;
          $(sliderCounter).text(currentSlide + '/' + slidesCount);
        };
        currentFeedSlider.on('init', function (event, slick) {
          currentFeedSlider.append(sliderCounter);
          updateSliderCounter(slick);
        });
        currentFeedSlider.on('afterChange', function (event, slick, currentSlide) {updateSliderCounter(slick, currentSlide);});
        currentFeedSlider.slick({ dots: true, infinite: true, speed: 300, slidesToShow: 1, adaptiveHeight: true, arrows: false });
      }
    });
  }

  function feed_tag_scroll() {
    $('.feed-tags').each(function () {
      const scrollContainer = $(this);
      scrollContainer.on('wheel', function (evt) {
        evt.preventDefault();
        scrollContainer.scrollLeft(scrollContainer.scrollLeft() + evt.originalEvent.deltaY);
      });
      let mouseDown = false;
      let startX, scrollLeft;
      let startDragging = function (e) {
        mouseDown = true;
        startX = e.pageX - scrollContainer.offset().left;
        scrollLeft = scrollContainer.scrollLeft();
      };
      let stopDragging = function (event) {mouseDown = false;};
      let touchStart, touchMove, touchEnd;
      scrollContainer.on('touchstart', function (e) {touchStart = e.originalEvent.touches[0].pageX;});
      scrollContainer.on('touchmove', function (e) {
        e.preventDefault();
        touchMove = e.originalEvent.touches[0].pageX;
        const scroll = touchStart - touchMove;
        scrollContainer.scrollLeft(scrollContainer.scrollLeft() + scroll);
        touchStart = touchMove;
      });
      scrollContainer.on('touchend', function () {touchEnd = touchMove || touchStart;});
      scrollContainer.on('touchend', function () {
        e.preventDefault();
        const x = e.pageX - scrollContainer.offset().left;
        const scroll = x - startX;
        scrollContainer.scrollLeft(scrollLeft - scroll);
      });
      scrollContainer.on('mousemove', function (e) {
        e.preventDefault();
        if (!mouseDown) {return;}
        const x = e.pageX - scrollContainer.offset().left;
        const scroll = x - startX;
        scrollContainer.scrollLeft(scrollLeft - scroll);
      });
      scrollContainer.on('mousedown', startDragging);
      scrollContainer.on('mouseup', stopDragging);
      scrollContainer.on('mouseleave', stopDragging);
    });
  }

  feed_images_slider();
  feed_tag_scroll();
  var currentFeedDetailSlider = $('.feed-detail-images');
  if (currentFeedDetailSlider.length) {
    var currentFeedDetailSlide;
    var slidesCounts;
    var sliderCounters = document.createElement('div');
    sliderCounters.classList.add('slider-counter');
    var updateFeedDetailSliderCounter = function (slick, currentIndex) {
      currentFeedDetailSlide = slick.slickCurrentSlide() + 1;
      slidesCounts = slick.slideCount;
      $(sliderCounters).text(currentFeedDetailSlide + '/' + slidesCounts);
    };
    currentFeedDetailSlider.on('init', function (event, slick) {
      currentFeedDetailSlider.append(sliderCounters);
      updateFeedDetailSliderCounter(slick);
    });
    currentFeedDetailSlider.on('afterChange', function (event, slick, currentFeedDetailSlide) {updateFeedDetailSliderCounter(slick, currentFeedDetailSlide);});
    currentFeedDetailSlider.slick({ dots: true, infinite: true, speed: 300, slidesToShow: 1, adaptiveHeight: true, arrows: false });
  }
  if ($('#aniimated-thumbnials').length > 0) {Fancybox.bind('[data-fancybox="gallery"]', { compact: false, contentClick: 'iterateZoom', Images: { Panzoom: { maxScale: 3 } }, Hash: false, Thumbs: false, Toolbar: { display: { left: [], middle: [], right: ['iterateZoom', 'close'] } } });}
  var currentSlide, width, height;
  $('.btn-zoom-out').click(function () {$('.slick-current').children().children('[data-fancybox="gallery"]').trigger('click');});
  $('.btn-zoom-in').click(function () {$('.slick-current').children().children('[data-fancybox="gallery"]').trigger('click');});
  $('#btn-add-filter').on('click', function () {$('.filter-wrapper').addClass('filter-show');});
  $('.filter-wrapper .back-to-page').click(function () {$('.filter-wrapper').removeClass('filter-show');});
  change_bases();
  var url = $('input[name="sort-by"]:checked').attr('data-taglink');
  var firstLoad = 0;
  if ($('input[name="hall-level"]').length > 0) {
    $('.loader').removeClass('d-none');
    var hall = $('input[name="hall-level"]:checked').val();
    var sortBy = $('input[name="sort-by"]:checked').val();
    // currLoc = $(location).attr('href');
    // var urlObj1 = new URL(currLoc);
    // var page = urlObj1.searchParams.get('page');
    if (page == '' || page == undefined || page == null) {page = 1;}
    var pushback = 'yes';
    var ptag = $('input[name="primary"]:checked').val();
    var tag = 'all';
    if (ptag != 'all') {tag = ptag;}
    // get_feeds(hall, tag, sortBy, page, pushback);
  }
  $(window).on('popstate', function (event) {
    currLoc = $(location).attr('href');
    $('.loader').removeClass('d-none');
    if (currLoc.indexOf('town-hall') > -1 || currLoc.indexOf('builder-hall') > -1) {
      $('.loader').removeClass('d-none');
      var urlObj = new URL(currLoc);
      var pathname = urlObj.pathname;
      var sortBy = urlObj.searchParams.get('sortby');
      var page = urlObj.searchParams.get('page');
      var pathWithoutLeadingSlash = pathname.substring(1);
      var pathParts = pathWithoutLeadingSlash.split('/');
      var hall = pathParts[0];
      hall = hall.replace('town-hall-', 'th');
      hall = hall.replace('builder-hall-', 'bh');
      // if ((window.location.href.indexOf('town-hall') > -1)) {$('input[name="hall-bases"][value="town-hall-bases"]').prop('checked', true);} else if ((window.location.href.indexOf('builder-hall') > -1)) {$('input[name="hall-bases"][value="builder-hall-bases"]').prop('checked', true);}
      change_bases();
      $('input[name="hall-level"][value="' + hall + '"]').prop('checked', true);
      var tag = pathParts[1];
      if (page == '' || page == undefined || page == null) {page = 1;}
      if (tag == '' || tag == undefined || tag == null) {
        tag = '';
        $('input[name="primary"][value="all"]').prop('checked', true);
      } else {$('input[name="primary"][value="' + tag + '"]').prop('checked', true);}
      if (sortBy == '' || sortBy == undefined || sortBy == null) {sortBy = 'latest';}
      $('input[name="sort-by"][value="' + sortBy + '"]').prop('checked', true);
      var pushback = 'yes';
      // if ($('.feeds-article').length > 0) {get_feeds(hall, tag, sortBy, page, pushback);}
    }
  });
  $('input[name="hall-bases"]').change(function () {
    change_bases();
    if ($('input[name="hall-bases"]:checked').val() == 'town-hall-bases') {
      $('input[name="hall-level"].first-th-level').prop('checked', true);
      var hall = $('input[name="hall-level"]:checked').val();
    } else if ($('input[name="hall-bases"]:checked').val() == 'builder-hall-bases') {
      $('input[name="hall-level"].first-bh-level').prop('checked', true);
      var hall = $('input[name="hall-level"]:checked').val();
    }
    $('.loader').removeClass('d-none');
    $('input[name="pri  mary"][value="all"]').prop('checked', true);
    var tag = 'all';
    var sortBy = $('input[name="sort-by"]:checked').val();
    var page = 1;
    var pushback = 'no';
    // get_feeds(hall, tag, sortBy, page, pushback);
  });

  function change_bases(value) {
    if ($('input[name="hall-bases"]:checked').val() == 'town-hall-bases') {
      $('[data-bs-target="#select-hall-bases"]').text('Town Hall Bases');
      $('[data-bs-target="#town-hall-level"]').text('Town Hall Level');
      $('.level-th').show();
      $('.level-bh').hide();
      $('.th-tag').show();
      $('.bh-tag').hide();
    } else if ($('input[name="hall-bases"]:checked').val() == 'builder-hall-bases') {
      $('[data-bs-target="#select-hall-bases"]').text('Builder Hall Bases');
      $('[data-bs-target="#town-hall-level"]').text('Builder Hall Level');
      $('.level-bh').show();
      $('.level-th').hide();
      $('.bh-tag').show();
      $('.th-tag').hide();
    }
  }

  $('input[name="hall-level"]').change(function () {
    $('.loader').removeClass('d-none');
    $('input[name="primary"][value="all"]').prop('checked', true);
    var tag = 'all';
    var hall = $('input[name="hall-level"]:checked').val();
    var sortBy = $('input[name="sort-by"]:checked').val();
    var page = 1;
    var pushback = 'no';
    // get_feeds(hall, tag, sortBy, page, pushback);
  });
  $('input[name="primary"]').change(function () {
    $('.loader').removeClass('d-none');
    var tag = $('input[name="primary"]:checked').val();
    var hall = $('input[name="hall-level"]:checked').val();
    var sortBy = $('input[name="sort-by"]:checked').val();
    var page = 1;
    var pushback = 'no';
    // get_feeds(hall, tag, sortBy, page, pushback);
  });
  $('input[name="sort-by"]').change(function () {
    $('.loader').removeClass('d-none');
    var ptag = $('input[name="primary"]:checked').val();
    var tag = '';
    if (ptag != 'all') {tag = ptag;}
    var hall = $('input[name="hall-level"]:checked').val();
    var sortBy = $('input[name="sort-by"]:checked').val();
    var page = 1;
    var pushback = 'no';
    // get_feeds(hall, tag, sortBy, page, pushback);
  });
  $('.feeds-article').on('click', '.pagination .page-link', function (e) {
    e.preventDefault();
    var page = $(this).attr('data-page');
    $('.loader').removeClass('d-none');
    var ptag = $('input[name="primary"]:checked').val();
    var tag = '';
    if (ptag != 'all') {tag = ptag;}
    var hall = $('input[name="hall-level"]:checked').val();
    var sortBy = $('input[name="sort-by"]:checked').val();
    var pushback = 'no';
    // get_feeds(hall, tag, sortBy, page, pushback);
  });
  $('.btn-close').on('click', function () {
    $('.loader').removeClass('d-none');
    var dataUrl = $(this).attr('data-url');
    if (dataUrl == null) {
      $(this).parents('.selected-option').addClass('d-none');
      var id = $(this).parents('.selected-option').attr('id');
      if (id == 'selected-sort-by') {
        var sortBy = 'latest';
        $('input[name="sort-by"][value="latest"]').prop('checked', true);
      } else {var sortBy = $('input[name="sort-by"]:checked').val();}
      if (id == 'selected-primary') {
        var tag = '';
        $('input[name="primary"][value="all"]').prop('checked', true);
      } else {
        var ptag = $('input[name="primary"]:checked').val();
        var tag = '';
        if (ptag != 'all') {tag = ptag;}
      }
    } else {
      $('input[name="hall-bases"][value="town-hall-bases"]').prop('checked', true);
      $('input[name="hall-level"]:first').prop('checked', true);
      $('input[name="sort-by"][value="latest"]').prop('checked', true);
      $('input[name="primary"][value="all"]').prop('checked', true);
      var sortBy = 'latest';
      var tag = '';
      change_bases();
    }
    var hall = $('input[name="hall-level"]:checked').val();
    var page = 1;
    var pushback = 'no';
    // get_feeds(hall, tag, sortBy, page, pushback);
  });
  $('.reset-btn').on('click', function () {
    $('.loader').removeClass('d-none');
    $('input[name="hall-bases"][value="town-hall-bases"]').prop('checked', true);
    $('input[name="hall-level"]:first').prop('checked', true);
    $('input[name="sort-by"][value="latest"]').prop('checked', true);
    $('input[name="primary"][value="all"]').prop('checked', true);
    var sortBy = 'latest';
    var tag = '';
    change_bases();
    var hall = $('input[name="hall-level"]:checked').val();
    var page = 1;
    var pushback = 'no';
    // get_feeds(hall, tag, sortBy, page, pushback);
  });

  function get_feeds(hall, tag, sortBy, page, pushback) {
    var isExpanded = false;
    jQuery('#readMore').remove();
    jQuery('.feed-dynamic-content').html();
    $('.filter-wrapper').removeClass('filter-show');
    var homeUrl = $('.feeds-article').attr('data-url');
    let result = hall.replace('th', 'town-hall-');
    result = result.replace('bh', 'builder-hall-');
    var url = homeUrl + result + '/';
    if (tag != 'all' && tag != '') {url = url + tag + '/';}
    var short_url = url;
    if (sortBy != 'latest' && sortBy != '') {url = url + '?sortby=' + sortBy;}
    if (page != '1' && page != '') {if (sortBy != 'latest' && sortBy != '') {url = url + '&page=' + page;} else {url = url + '?page=' + page;}}
    if (pushback == 'no') {history.pushState(null, null, url);}
    /*jQuery.ajax({
      type: 'post', dataType: 'json', url: admin_ajax.ajaxurl, data: { action: 'get_feeds', url: url, level: hall, tag: tag, sortBy: sortBy, page: page }, success: function (response) {
        if (response.status == 'success') {
          jQuery('#feed-title').html(response.title);
          tag = tag.replace(/-/g, ' ');
          if (tag != '' && tag != 'all') {
            jQuery('#selected-primary').removeClass('d-none');
            jQuery('#selected-primary span').text(tag);
          } else {jQuery('#selected-primary').addClass('d-none');}
          jQuery('#selected-sort-by span.sort').text(sortBy);
          jQuery('#selected-sort-by').removeClass('d-none');
          var src = jQuery('img[alt="' + hall + '"]').attr('src');
          jQuery('#selected-th-level span').text(hall);
          jQuery('#selected-th-level img').attr('src', src);
          jQuery('.feeds-article').html(response.data);
          jQuery('.feed-dynamic-content').html(response.footer_content);
          moveSixthChild();
          if (response.content_type == 'API') {
            var data = response.footer_content;
            var maxLength = 200;
            var trimmedContent = data.substring(0, maxLength);
            jQuery('.feed-dynamic-content').html(response.footer_content);
            jQuery('.feed-dynamic-readmore').append('<a href="#" id="readMore" class="read-more btn">Read More</a>');
            $('#readMore').on('click', function (e) {
              e.preventDefault();
              if (isExpanded) {
                jQuery('.feed-dynamic-content').html(response.footer_content);
                $(this).text('Read More');
              } else {
                jQuery('.feed-dynamic-content').html(response.footer_content + response.footer_content1);
                $(this).text('Read Less');
              }
              isExpanded = !isExpanded;
            });
          }
          jQuery('title').text(response.title);
          jQuery('[property="og:title"]').attr('content', response.title);
          jQuery('[name="twitter:title"]').attr('content', response.title);
          jQuery('[name="description"]').attr('content', response.desc);
          jQuery('[property="og:description"]').attr('content', response.desc);
          jQuery('[name="twitter:description"]').attr('content', response.desc);
          jQuery('[rel="canonical"]').attr('href', short_url);
          jQuery('[property="og:url"]').attr('content', short_url);
          jQuery('.rank-math-schema').text(response.schema);
          feed_images_slider();
          feed_tag_scroll();
          if (firstLoad != 0) {$('html,body').scrollTop($('.feed-sec').offset().top - 100);}
          firstLoad++;
          $('.loader').addClass('d-none');
        }
      },
    });*/
  }

  $('.btn-download-big').on('click', function (e) {
    var ele = $(this);
    var id = $(this).attr('data-postid');
    var count = $(this).children('span').attr('data-count');
    var urlRedirect = $(this).attr('href');
    jQuery.ajax({
      type: 'post', dataType: 'json', url: admin_ajax.ajaxurl, data: { action: 'download_post_link', post_id: id, count: count }, success: function (response) {
        if (response.message == 'success') {
          var tempInput = $('<input>');
          $('body').append(tempInput);
          tempInput.val(urlRedirect).select();
          document.execCommand('copy');
          tempInput.remove();
          ele.children('span').text(response.count);
          var total_cnt = parseInt(count) + 1;
          ele.children('span').attr('data-count', total_cnt);
        }
      },
    });
  });
  $('.btn-download-2').on('click', function (e) {
    var ele = $('.btn-download-big');
    var id = $(this).attr('data-postid');
    var count = $('.btn-download-big').children('span').attr('data-count');
    var urlRedirect = $(this).attr('href');
    window.location.href = urlRedirect;
  });
  $('.copy-text').on('click', function () {
    var downloadLink = $(this).data('link');
    var tempInput = $('<input>');
    $('body').append(tempInput);
    tempInput.val(downloadLink).select();
    document.execCommand('copy');
    $('.copied').text('Copied to clipboard').show().fadeOut(1500);
    tempInput.remove();
  });
  $('.feeds-article').on('click', 'input[name="rating"]', function (e) {
    var ele = $(this);
    ele.parent().children('input[name="rating"]').attr('style', 'pointer-events:none');
    ele.parent().children('.default-rating').removeAttr('style');
    var rating = ele.val();
    var id = ele.parent().attr('data-postid');
    jQuery.ajax({
      type: 'post', dataType: 'json', url: admin_ajax.ajaxurl, data: { action: 'rate_post_link', post_id: id, rating: rating }, success: function (response) {
        if (response == true) {
          $('#reviewSuccessModal').modal('show');
          ele.parent().children('input[name="rating"]').attr('style', '');
          ele.parent().children('input[name="rating"]').prop('checked', false);
          var stars_width = ele.parent().children('[name=\'stars_width\']').css('width');
          ele.parent().children('.default-rating').css('width', stars_width);
          ele.parent().children('.default-rating').css('opacity', '1');
          var total = ele.closest('.rating').find('.total-rating').attr('data-total');
          var newTotal = parseInt(total) + 1;
          ele.closest('.rating').find('.total-rating').attr('data-total', newTotal);
          ele.closest('.rating').find('.total-rating').text('(' + newTotal + ')');
        }
      },
    });
  });
  $('.feeds-article').on('mouseenter', '.star-rating', function (event) {$('i:eq(0)', this).removeAttr('style');});
  $('.feeds-article').on('mouseleave', '.star-rating', function (event) {
    var stars_width = $('[name=\'stars_width\']', this).css('width');
    $('i:eq(0)', this).css('width', stars_width);
    $('i:eq(0)', this).css('opacity', '1');
  });
  $('[data-bs-dismiss="modal"]').on('click', function (e) {$('#reviewSuccessModal').modal('hide');});

  $('input[name="hall-level"]').change(function (){
    idHallLevel = $(this).data('tid');
    var sortBy = $('input[name="sort-by"]:checked').val();
    $('input[name="primary"][value="all"]').prop('checked', true);
    var url = window.location.href;
    if (url.toString().split("?").length > 0){
      url = url.toString().split("?")[0];
    }
    url = `${url}?field_type_hall_tid=${idHallLevel}&field_attributes_tid=All`;
    window.location = url;
  })
  $('input[name="primary"]').change(function (){
    idAttributesHall = $(this).data('tid');
    var idHallLevel = $('input[name="hall-level"]:checked').data('tid');
    var url = window.location.href;
    if (url.toString().split("?").length > 0){
      url = url.toString().split("?")[0];
    }
    url = `${url}?field_type_hall_tid=${idHallLevel}&field_attributes_tid=${idAttributesHall}`;
    window.location = url;
  })
  $('input[name="sort-by"]').change(function (){
    valSortBy = $(this).val();
    var idHallLevel = $('input[name="hall-level"]:checked').data('tid');
    var idAttributesHall = $('input[name="primary"]:checked').data('tid');
    var url = window.location.href;
    if (url.toString().split("?").length > 0){
      url = url.toString().split("?")[0];
    }
    url = `${url}?field_type_hall_tid=${idHallLevel}&field_attributes_tid=${idAttributesHall}&sort_by=${valSortBy}&sort_order=DESC`;
    window.location = url;
  })
  if ($('input[name="hall-level"]').length > 0) {
    // window path
    // /type-hall/town-hall-16?field_type_hall_tid=5&field_attributes_tid=10
    var url = window.location.href;
    if (url.toString().split("?").length > 1){
      urlOrigin = url.toString().split("?")[0];
      filterform = url.toString().split("?")[1].split("&");
      idTypeHall = filterform[0].split("=")[1];
      idAttributesHall = filterform[1].split("=")[1];
      $("input[name='hall-level']").filter(function(){
        return $(this).data('tid') == idTypeHall;
      }).prop('checked',true)
    }
  }
  if ($('input[name="primary"]').length > 0) {
    // window path
    // /type-hall/town-hall-16?field_type_hall_tid=5&field_attributes_tid=10
    var url = window.location.href;
    if (url.toString().split("?").length > 1){
      urlOrigin = url.toString().split("?")[0];
      filterform = url.toString().split("?")[1].split("&");
      idTypeHall = filterform[0].split("=")[1];
      idAttributesHall = filterform[1].split("=")[1];
      console.log(idAttributesHall);
      $("input[name='primary']").filter(function(){
        return $(this).data('tid') == idAttributesHall;
      }).prop('checked',true)
    }
  }
  if ($('input[name="sort-by"]').length > 0) {
    // window path
    // /type-hall/town-hall-16?field_type_hall_tid=5&field_attributes_tid=10
    var url = window.location.href;
    if (url.toString().split("?").length > 1){
      urlOrigin = url.toString().split("?")[0];
      filterform = url.toString().split("?")[1].split("&");
      idTypeHall = filterform[0].split("=")[1];
      idAttributesHall = filterform[1].split("=")[1];
      sortBy = filterform[2].split("=")[1];
      $("input[name='sort-by']").filter(function(){
        return $(this).val() == sortBy;
      }).prop('checked',true)
    }
  }
  function moveSixthChild() {
    var screenWidth = $(window).width();
    if (screenWidth <= 767) {
      var sixthChild = $('.feeds-article .feed-article:nth-child(5)');
      sixthChild.insertAfter($('.feeds-article .feed-article:nth-child(2)'));
    }
  }

  $(window).on('load resize', function () {moveSixthChild();});
  if ($('.filter-item .collapse').length > 0) {
    var screenWidth = $(window).width();
    if (screenWidth <= 767) {
      $('.filter-item .collapse').addClass('show');
      $('.filter-item [data-bs-toggle="collapse"]').attr('aria-expanded', 'true');
    }
  }
});
