<?php
    if(isset($_GET['tag'])){
		$get_hashtag = preg_replace('#[^a-z0-9_]#i','', $_GET['tag']);

	}
    //$get_hashtag = $_GET['tag'];

    $title = 'Latest News on ICO STO and blockchain crypto sphere';
    $db = new PDO('mysql:host=localhost;dbname=stoihsbz_db','stoihsbz_us','kk23t8mcweiz');
    $q = $db->query("SELECT * FROM `posts` WHERE hashtag = '$get_hashtag' ORDER BY id DESC");
    $row = $q->fetchAll(PDO::FETCH_ASSOC);
	require 'header.php';
	?>

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <?php require "main_div_content.php";?>
          <aside id="sidebar" class="col-lg-3 col-md-12 sbl">

            <?php require 'w_search.php';
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

<?php require 'footer.php';?>
