<?php
    
    $db = new PDO('mysql:host=localhost;dbname=stoihsbz_db','stoihsbz_us','kk23t8mcweiz');
    $q = $db->query("SELECT ico_name,short_description,image,start_date,end_date FROM `ico` ORDER BY id DESC");
    $row = $q->fetchAll(PDO::FETCH_ASSOC);
	
	?>
	
 <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

      <div class="container">
        
        <div class="row">
          
          <main id="main" class="col-lg-9 col-md-12">
          
            <h2 class="title">All STO(Security Tokens Offerings) listings.</h2>

            <div class="table-type-1 ico-calendar entry-box">
              <table>
                <tr>
                  <th>Name</th>
                  <th>Start</th>
                  <th>End</th>
                </tr>
                
                <?php foreach($row as $ico): ?>
                <tr>
                  <td>
                    
                    <!-- Entry -->
                    <div class="entry entry-ico">
                
                      <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                      <div class="thumbnail-attachment">
                        <a href="https://stoicolist.com/ico/<?=$ico['ico_name']?>"><img src="/db_img/icos/<?=$ico['image']?>" width="78px" height="78px"></a>
                      </div>
                      
                      <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                      <div class="entry-body">
                      
                        <h5 class="entry-title"><a href="https://stoicolist.com/ico/<?=$ico['ico_name']?>"><?=$ico['ico_name']?></a></h5>
                        <p><?=$ico['short_description']?></p>

                      </div>

                    </div>

                  </td>
				  
                  <td><?php if($ico['start_date'] != "0000-00-00"){echo $ico['start_date'];}else{ echo "Unknown";}?></td>
                  <td><?php if($ico['end_date'] != "0000-00-00"){echo $ico['end_date'];}else{ echo "Unknown";}?></td>
                </tr>
                <?php endforeach;?>
              </table>
            </div>

            

            <ul class="pagination">
              <!--li><a href="https://stoicolist.com/icos.php?p=1" class="prev-page"></a></li-->
              <li><a href="https://stoicolist.com/icos.php?page=1">1</a></li>
              <li><a href="https://stoicolist.com/icos.php?page=2">2</a></li>
              <li><a href="https://stoicolist.com/icos.php?page=3">3</a></li>
              <!--li><a href="#" class="next-page"></a></li-->
            </ul>

          </main>
          <aside id="sidebar" class="col-lg-3 col-md-12 sbl">

            
           <?php 
               require 'w_search.php';
               require 'w_latest_stories.php'; 
               require 'w_hashtags.php'; 
              ?>

          </aside>

        </div>

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->
