<?php 
    $db = new PDO('mysql:host=localhost;dbname=stoihsbz_db','stoihsbz_us','kk23t8mcweiz');
    $q = $db->query("SELECT DISTINCT `post`,`worker_image`,`worker_name`,`short_description`,`fb_profile`,`li_profile`,`tw_profile`,`ico_name`  FROM `ico_teams` GROUP BY id DESC");
    $row = $q->fetchAll(PDO::FETCH_ASSOC);

 ?>

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

      <div class="container">
        
        <div class="row">
          
          <main id="main" class="col-lg-9 col-md-12">
          
            <h2 class="title">Peoples of blockchain and cryptosphere:</h2>

            <div class="table-type-1 ico-calendar entry-box">
              <table>
                <tr>
                  <th>Name</th>
                  <th style="width: 30%";>Links</th>
                </tr>
                
                <?php 
				
				foreach($row as $ico_teams): ?>
                <tr>
                  <td>
                    
                    <!-- Entry -->
                    <div class="entry entry-ico">
                
                      <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                      <div class="thumbnail-attachment">
                        <a href="https://stoicolist.com/people/<?php echo urlencode($ico_teams['worker_name']); ?>"><img src="/db_img/ico_teams_img/<?=$ico_teams['worker_image']?>" width="78px" height="78px"></a>
                      </div>
                      
                      <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                      <div class="entry-body">
                      
                        <h5 class="entry-title"><a href="https://stoicolist.com/people/<?php echo str_replace('-', '%20', $ico_teams['worker_name']); ?>"><?php echo str_replace('-', '%20', $ico_teams['worker_name']); ?></a></h5>
                        <p><?=$ico_teams['short_description']?></p>
						<p>Member of team: <?=$ico_teams['ico_name']?></p>
						<p>Post:<?=$ico_teams['post']?></p>

                      </div>

                    </div>

                  </td>
                  <td class="social-icons style-2"><?php if(!empty($ico_teams['fb_profile'])){echo '<li class="fb"><a href="'.$ico_teams['fb_profile'].'"><i class="icon-facebook"></i></a></li>';}else {echo " ";} 
                                             if(!empty($ico_teams['tw_profile'])){echo '<li class="tw"><a href="'.$ico_teams['tw_profile'].'"><i class="icon-twitter"></i></a></li>';}else {echo " ";}
                                             if(!empty($ico_teams['li_profile'])){echo '<li class="li"><a href="'.$ico_teams['li_profile'].'"><i class="icon-linkedin"></i></a></li>';}else {echo " ";}  


                                        ?></td>
                </tr>
                <?php endforeach; ?>
              </table>
            </div>

            

            <ul class="pagination">
              <li><a href="#" class="prev-page"></a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#" class="next-page"></a></li>
            </ul>e

          </main>
          <aside id="sidebar" class="col-lg-3 col-md-12 sbl">

            <?php
               require 'w_search.php';
               require 'w_icos.php';
               require 'w_latest_stories.php';
            ?>

          </aside>

        </div>

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

 