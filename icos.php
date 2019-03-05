<?php
    $page = $_GET['page'];
    $title = 'ICOs and STOs ratings and listings';
    $db = new PDO('mysql:host=localhost;dbname=stoihsbz_db','stoihsbz_us','kk23t8mcweiz');
    switch($page){
		case '1':
		$q = $db->query("SELECT * FROM `ico` ORDER BY id DESC  LIMIT 1, 3 ");
		break;
		case '2':
		$q = $db->query("SELECT * FROM `ico` ORDER BY id DESC  LIMIT 4, 6 ");
		break;
		case '3':
		$q = $db->query("SELECT * FROM `ico` ORDER BY id DESC  LIMIT 9, 11 ");
		break;
		default:
		$q = $db->query("SELECT * FROM `ico` ORDER BY id DESC  LIMIT 1, 3 ");
		
	}
    $row = $q->fetchAll(PDO::FETCH_ASSOC);
	$q2 = $db->query("SELECT title FROM `posts` ORDER BY id DESC LIMIT 3");
    $row2 = $q2->fetchAll(PDO::FETCH_ASSOC); 
	$title = 'ico a';
	require 'header.php';?>
	
 <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

      <div class="container">
        
        <div class="row">
          
          <main id="main" class="col-lg-9 col-md-12">
          
            <h2 class="title">All upcoming and active ICO Initial Coin Offerings.</h2>

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
                  <td><?=$ico['start_date']?></td>
                  <td><?=$ico['end_date']?></td>
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

              
            <div class="widget">
              <form>
                
                <a href="#" class="btn btn-style-4 icon-btn f-right"><i class="licon-magnifier"></i></a>
                <div class="wrapper">
                  <input type="text" placeholder="Search">
                </div>

              </form>

            </div>
                  
            <!-- Widget --
            <div class="widget">
              
              <h6 class="widget-title">Calculator</h6>
              
              <!-- Calculator --
              <div class="calc-section">
                
                <!-- Calc item --
                <div class="calc-item">
                  
                  <div class="currency">
                    <div class="flex-row flex-justify">
                      <span>1</span>
                      <span>BTC</span>
                    </div>
                  </div>
                  <span>=</span>
                  <div class="quantity">15232.58</div>
                  <div class="custom-select price-check">
                    <div class="select-title">USD</div>
                    <ul id="menu-type2" class="select-list"><li>USD</li><li>EUR</li><li>RUR</li></ul>
                    <select class="hide" style="display: none;">
                      <option value="menu">USD</option>
                      <option value="menu">EUR</option>
                      <option value="menu">RUR</option>
                    </select>
                  </div>

                </div>

                <!-- Calc item --
                <div class="calc-item">
                  
                  <div class="currency">
                    <div class="flex-row flex-justify">
                      <span>1</span>
                      <span>ETH</span>
                    </div>
                  </div>
                  <span>=</span>
                  <div class="quantity">767.22</div>
                  <div class="custom-select price-check">
                    <div class="select-title">USD</div>
                    <ul id="menu-type3" class="select-list"><li>USD</li><li>EUR</li><li>RUR</li></ul>
                    <select class="hide" style="display: none;">
                      <option value="menu">USD</option>
                      <option value="menu">EUR</option>
                      <option value="menu">RUR</option>
                    </select>
                  </div>

                </div>

                <!-- Calc item --
                <div class="calc-item">
                  
                  <div class="currency">
                    <div class="flex-row flex-justify">
                      <span>1</span>
                      <span>BCH</span>
                    </div>
                  </div>
                  <span>=</span>
                  <div class="quantity">2809.63</div>
                  <div class="custom-select price-check">
                    <div class="select-title">USD</div>
                    <ul id="menu-type4" class="select-list"><li>USD</li><li>EUR</li><li>RUR</li></ul>
                    <select class="hide" style="display: none;">
                      <option value="menu">USD</option>
                      <option value="menu">EUR</option>
                      <option value="menu">RUR</option>
                    </select>
                  </div>

                </div>

              </div>

            </div>

            <-- Widget --
            <div class="widget">
              
              <h6 class="widget-title">ICO Calendar</h6>
              
              <div class="entry-box">
                
                <!-- Entry --
                <div class="entry entry-ico">
            
                  <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - --
                  <div class="thumbnail-attachment">
                    <a href="#"><img src="images/78x78_img1.jpg" alt=""></a>
                  </div>
                  
                  <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - --
                  <div class="entry-body">
                    
                    <div class="entry-meta">

                      <time class="entry-date" datetime="2018-01-05">Jan 05, 2018</time>

                    </div>
                    <h6 class="entry-title"><a href="#">Hdac</a></h6>
                    <p>IoT platform backed from Hyundai</p>

                  </div>

                </div>

                <!-- Entry --
                <div class="entry entry-ico">
            
                  <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - --
                  <div class="thumbnail-attachment">
                    <a href="#"><img src="images/78x78_img2.jpg" alt=""></a>
                  </div>
                  
                  <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - --
                  <div class="entry-body">
                    
                    <div class="entry-meta">

                      <time class="entry-date" datetime="2018-01-25">Jan 25, 2018</time>

                    </div>
                    <h6 class="entry-title"><a href="#">CoinLion</a></h6>
                    <p>Exchange &amp; portfolio management</p>

                  </div>

                </div>

                <-- Entry --
                <div class="entry entry-ico">
            
                  <-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - --
                  <div class="thumbnail-attachment">
                    <a href="#"><img src="images/78x78_img3.jpg" alt=""></a>
                  </div>
                  
                  <-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - --
                  <div class="entry-body">
                    
                    <div class="entry-meta">

                      <time class="entry-date" datetime="2018-02-09">Feb 09, 2018 </time>

                    </div>
                    <h6 class="entry-title"><a href="#">United Traders</a></h6>
                    <p>IoT platform backed from Hyundai</p>

                  </div>

                </div>

              </div>

              <a href="#" class="btn btn-small">View All ICOs</a>

            </div>
            
            <!-- Widget -->
            <div class="widget">
            
              <div class="banner-title">Advertisement</div>

              <a href="#" class="banner"><img src="images/250x250_banner.jpg" alt=""></a>

            </div>

            <!-- Widget -->
            <div class="widget">
            
              <h6 class="widget-title">Most read</h6>

              <ul class="most-read">
                <?php foreach($row2 as $post): ?>
                <li><h6><a href="https://stoicolist.com/post/<?php echo rawurlencode(str_replace(' ','-',$post['title'])); ?>"><?php echo mb_substr($post['title'], 0, 50,'UTF-8')."..."; ?></a></h6></li>
                <?php endforeach;?>

              </ul>

            </div>

          </aside>

        </div>

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

   <?php require 'footer.php'; ?>