<div class="widget">
            
              <h6 class="widget-title">Latest stories</h6>

              <ul class="most-read">
			   
                <?php 
				$query_latest_stories_sidebar = $db->query("SELECT title FROM `posts` ORDER BY id DESC LIMIT 5");
                $row_latest_stories_sidebar = $query_latest_stories_sidebar->fetchAll(PDO::FETCH_ASSOC); 
	                  foreach($row2 as $post): ?>
                <li><h6><a href="https://stoicolist.com/post/<?php echo urlencode($post['title']); ?>"><?php echo mb_substr($post['title'], 0, 40,'UTF-8')."..."; ?></a></h6></li>
                <?php endforeach;?>

              </ul>

            </div>