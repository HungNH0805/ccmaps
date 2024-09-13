<section class="blog-sec secondary-bg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          Clash of Clans Insights: News and Updates
        </div>
      </div>
      <div class="col-12">
        <div class="row mt-4">
          <?php foreach ($rows as $row):?>
          <div class="col-md-3 post-article mt-4">
            <?php print $row?>
          </div>
          <?php endforeach;?>
          <div class="col-12 text-center mt-5">
            <a href="/chuyen-muc/news" title="View All"
               class="btn btn-primary text-white">View All</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
