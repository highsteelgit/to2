<?php
    $title = 'All articles by author55577777 '.$author;
    //if(strlen($uri[1]) > 2)

		//$author = $uri[1];
    $author = $_GET['p'];
    $db = new PDO('mysql:host=localhost;dbname=stoihsbz_db','stoihsbz_us','kk23t8mcweiz');
    $q = $db->query("SELECT * FROM `posts` WHERE author = '$author'");
    $row = $q->fetchAll(PDO::FETCH_ASSOC);
    require 'header.php'
 ?>
	   <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

      <div class="container">

        <div class="row">

          <main id="main" class="col-lg-9 col-md-12">

            <h2 class="title">All articles by author: <?=$author?></h2>

            <div class="content-element5">

              <div class="entry-box style-2">

                <div class="row">
				<?php foreach($row as $post): ?>
                  <div class="col-12">

                    <div class="entry entry-small">

                      <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                      <div class="thumbnail-attachment">
                        <a href="https://stoicolist.com/post/<?php echo urlencode($post['title']); ?>"><img src="https://stoicolist.com/db_img/<?=$post['image']?>" alt=""></a>
                        <div class="entry-label"><?=$post['category']?></div>
                      </div>

                      <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                      <div class="entry-body">

                        <h3 class="entry-title"><a href="https://stoicolist.com/post/<?php echo urlencode($post['title']); ?>"><?=$post['title']?></a></h3>
                        <div class="entry-meta">

                          <time class="entry-date" datetime="2018-12-21"><?=$post['date']?></time>
                          <span>by</span>
                          <a href="https://stoicolist.com/author.php?p=<?=$post['author']?>" class="entry-cat"><?=$post['author']?></a>

                        </div>
                        <p><?=convertHashtags(mb_substr($post['text'], 0, 150,'UTF-8'))."..."?></p>
                        <a href="https://stoicolist.com/post/<?php echo urlencode($post['title']); ?>" class="btn btn-small">More</a>
                        <a href="#" class="social-btn btn btn-small icon-btn"><i class="licon-share2"></i></a>

                      </div>

                    </div>

                  </div>
				  <?php endforeach;?>

                </div>

              </div>

            </div>

            <ul class="pagination">
              <li><a href="#" class="prev-page"></a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#" class="next-page"></a></li>
            </ul>

          </main>
          <aside id="sidebar" class="col-lg-3 col-md-12 sbl">

            <?php
                require 'w_search.php';
                require 'w_icos.php';
                require 'w_category.php';
                require 'w_hashtags.php';
                require 'w_latest_stories.php';
            ?>

          </aside>

        </div>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->


<?php require 'footer.php'?>
