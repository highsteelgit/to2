<?php 
$people_name = $uri['1'];
    $db = new PDO('mysql:host=localhost;dbname=stoihsbz_db','stoihsbz_us','kk23t8mcweiz');
    $q = $db->query("SELECT * FROM ico_teams  WHERE ico_teams.worker_name = '$people_name' ORDER BY id DESC");
    $row = $q->fetchAll(PDO::FETCH_ASSOC);
    $ico_teams_name = $row[0]['ico_name'];
    $q2 = $db->query("SELECT * FROM ico  WHERE ico.ico_name = '$ico_teams_name' ORDER BY id DESC");
    $row2 = $q2->fetchAll(PDO::FETCH_ASSOC);
    
?>

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

      <div class="container">
        
        <div class="row">
          
          <main id="main" class="col-lg-9 col-md-12">
          
            <h2 class="title">Blockchain peoples</h2>

            <div class="table-type-1 ico-calendar entry-box">
              <table>
                <tr>
                  <th>Name</th>
                  <th>About</th>
                  <th>Links</th>
                </tr>
                
                <?php foreach($row as $p): ?>
                <tr>
                  <td>
                    
                    <!-- Entry -->
                    <div class="entry entry-ico">
                
                      <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                      <div class="thumbnail-attachment"><img src="/db_img/ico_teams_img/<?=$p['worker_image']?>" width="78px" height="78px">
                      </div>
                      
                      <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                      <div class="entry-body">
                      
                        <h5 class="entry-title"><?=$p['worker_name']?></h5>
                        <p><?=$p['short_description']?></p>

                      </div>

                    </div>

                  </td>
                  <td><?=$p['fb_profile']?></td>
                  <td></td>
                </tr>
                <?php endforeach;?>
              </table>
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
               require 'w_latest_stories.php';
            ?>

          </aside>

        </div>

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    