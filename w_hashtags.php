<div class="widget">
                
              <h6 class="widget-title">Hashtags</h6>

              <div class="tagcloud">
                <?php 
				$q = $db->query("SELECT hashtag FROM `posts` ORDER BY id DESC LIMIT 15");
                $row = $q->fetchAll(PDO::FETCH_ASSOC); 
	            foreach($row as $post): ?>
                <a href="/hashtag.php?tag=<?=$post['hashtag']?>"><?=$post['hashtag']?></a>
                
                <? endforeach; ?>
              </div>

            </div>