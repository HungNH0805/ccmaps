jQuery(document).ready(function (){
  jQuery(".btn-download-2").click(function (e){
    e.preventDefault();
    var hostname = window.location.hostname;
    var protocol = window.location.protocol;
    console.log(hostname);
    const nid = jQuery(this).data('id');
    var urlRedirect = $(this).attr('href');
    jQuery.ajax({
      url: `${protocol}//${hostname}/cf_api/ccmaps-api/update-downloads`,
      data: {
        nid: nid,
      },
      dataType: 'json',
      type: 'post',
      success: function (data) {
        console.log(data);
        window.location.href = urlRedirect;
      },
      error: function (r1, r2) {
      }
    });
  })
})
