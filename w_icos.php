<?php 
  $query_icos_sidebar = $db->query("SELECT ico_name, image, start_date, short_description FROM `ico` ORDER BY id DESC LIMIT 5");
    $row_icos_sidebar = $query_icos_sidebar->fetchAll(PDO::FETCH_ASSOC);
?><div class="widget">
              
              <h6 class="widget-title">ICOS</h6>
              
              <div class="entry-box">
                
                

                <? foreach($row_icos_sidebar as $ico):?>
                <!-- Entry -->
                <div class="entry entry-ico">
            
                  <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                  <div class="thumbnail-attachment">
                    <a href="https://stoicolist.com/ico/<?=$ico['ico_name']?>"><img src="/db_img/icos/<?=$ico['image']?>" width="50px" height="50px" alt=""></a>
                  </div>
                  
                  <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                  <div class="entry-body">
                    
                    <div class="entry-meta">

                      <time class="entry-date" datetime="<?=$ico['start_date']?>"><?php if($ico['start_date'] != "0000-00-00"){echo $ico['start_date'];}else{ echo " ";}?></time>

                    </div>
                    <h6 class="entry-title"><a href="https://stoicolist.com/ico/<?=$ico['ico_name']?>"><?=$ico['ico_name']?></a></h6>
                    <p><?=$ico['short_description']?></p>

                  </div>

                </div>
				<!-- Entry -->
                <? endforeach; ?>
              </div>

              <a href="https://stoicolist.com" class="btn btn-small">View STOs</a>

            </div>