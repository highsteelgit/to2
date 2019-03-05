
			
<div class="widget">
                
              <h6 class="widget-title">Latest</h6>

              <div class="entry-box">
                <?php 
				$q2 = $db->query("SELECT title FROM `posts` ORDER BY id DESC LIMIT 5");
                $row2 = $q2->fetchAll(PDO::FETCH_ASSOC); 
	                  foreach($row2 as $post): ?>
          
                <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                <div class="entry entry-small">
                
                  <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                  
                  
                  <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                  <div class="entry-body">

                    <h7 class="entry-title"><a href="https://stoicolist.com/post/<?php echo urlencode($post['title']); ?>"><?php echo mb_substr($post['title'], 0, 70,'UTF-8')."..."; ?></a></h6>
                    

                  </div>

                </div>
                <? endforeach; ?>

            </div>	
</div>			