<?php 
$ico_name = $uri['1'];
$db = new PDO('mysql:host=localhost;dbname=stoihsbz_db','stoihsbz_us','kk23t8mcweiz');
    $query_ico = $db->query("SELECT * FROM ico WHERE ico.ico_name ='$ico_name'");
    $team = $db->query("SELECT * FROM ico_teams WHERE ico_teams.ico_name ='$ico_name'");
    $icos = $query_ico->fetchAll(PDO::FETCH_ASSOC);
    $team_row = $team->fetchAll(PDO::FETCH_ASSOC);
        //I do not know why, query only this place begin of 0 as associated array, I doing query of one table or three tables - result 
    //begin from 0, however when i doing query on page post.php for example - query do not begin from 0 ???????????
   $arr = $icos;
   $country = $icos[0]['country']; 
   $country = strtoupper($country); 
   
       
?>
     
    <div id="content" class="page-content-wrap">

      <div class="container">
        
        <div class="row">
          
          <main id="main" class="col-lg-9 col-md-12">

            <div class="page-nav">
              <a href="/index.php" class="info-btn prev-btn">ICOS</a>
            </div>
          
            <div class="single-event">
            
              <div class="content-element2">
                
                <div class="row">
                  <div class="col-lg-4 col-md-12">

                    <div class="row">
                      
                      <div class="col-lg-12 col-md-6 col-sm-6 content-element1">
                      
                        <img src="/db_img/icos/<?=$icos[0]['image']?>" alt="">

                      </div>

                      <div class="col-lg-12 col-md-6 col-sm-6">
                      
                        <h4 class="event-title"><b>ICO: <?=$icos[0]['ico_name']?></b></h4>

                        <ul class="custom-list">

                          <li><span><?=$icos[0]['short_description']?></span></li>
                          <li><span><?=$icos[0]['icotype']?>:</span></li>
                          <li><span>Start:</span> <?=$icos[0]['start_date']?></li>
                          <li><span>End:</span> <?=$icos[0]['end_date']?></li>
                          <li><span>Site:</span> <a href="<?=$icos[0]['website']?>" class="link-text"><?=$icos[0]['website']?></a></li>
                          <li><span>Whitepaper:</span> <a href="<?=$icos[0]['whitepaper_link']?>" class="link-text"><?=$icos[0]['whitepaper_link']?></a></li>

                          <li><span>1 <?=$icos[0]['name_index']?> = <?=$icos[0]['price']?> USD</span></li>
                          <li><span>Bounty campaign: <a href="<?=$icos[0]['bounty_campaign']?>" class="link-text"><?=$icos[0]['bounty_campaign']?></a></span></li>
                          <li><span><a href="<?=$icos[0]['bonus_program']?>">Bonuses</a></span></li>
                          <li><span>Prototype or MVP: <a href="<?=$icos[0]['prototype_mvp']?>" class="link-text"><?=$aicos[0]['prototype_mvp']?></a></span></li>
                          <li><span>Realized in platform: <?=$icos[0]['platform']?></span></li>
                          <li><span>Accepting crypto: <?=$icos[0]['accept']?></span></li>
                          <li><span>Softcap: <?=$icos[0]['softcap']?> USD</span></li>
                          <li><span>Hardcap: <?=$icos[0]['hardcap']?> USD</span></li>
                          <li><span>Registration in: 
                          <?=$country?>
                          </span></li>
                          <li><span>KYS & Whitelist: <?=$icos[0]['kyc_whitelist']?></span></li>
                          <li><span>Restricted countries:  <?=$icos[0]['restricted_area']?></span></li>
                          <li>
                            <span>ICO links:</span> &nbsp;
                            <ul class="social-icons style-2">
                              <?php if(!empty($icos[0]['facebook_soc'])){echo '<li class="fb"><a href="'.$icos[0]['facebook_soc'].'"><i class="icon-facebook"></i></a></li>';}else{ echo " ";}
                                    if(!empty($icos[0]['twitter_soc'])){echo '<li class="tw"><a href="'.$icos[0]['twitter_soc'].'"><i class="icon-twitter"></i></a></li>';}else{ echo " ";}
                                    if(!empty($icos[0]['bitcointalk_soc'])){echo '<li class="bit"><a href="'.$icos[0]['bitcointalk_soc'].'"><i class="icon-bitcoin-1"></i></a></li>';}else{ echo " ";}
                                    if(!empty($icos[0]['telegram_soc'])){echo '<li class="pl"><a href="'.$icos[0]['telegram_soc'].'"><i class="icon-paper-plane"></i></a></li>';}else{ echo " ";}
                                    if(!empty($icos[0]['medium_soc'])){echo '<li class="md"><a href="'.$icos[0]['medium_soc'].'"><i class="icon-medium"></i></a></li>';}else{ echo " ";}  ?>
                              </ul>
                          </li>

                        </ul>

                      </div>

                    </div>

                  </div>
                  <div class="col-lg-8 col-md-12">
                    
                    <div class="content-element2">
                      
                      <div class="content-element1">
                        <div class="responsive-iframe">
                          <iframe src="<?=$icos[0]['video']?>"><?=$icos[0]['video']?></iframe>
                          
                        </div>
                      </div>

                      <div class="tabs tabs-section">
                        <!--tabs navigation-->                  
                        <ul class="tabs-nav clearfix">
                          <li>
                            <a href="#tab-1">Description</a>
                          </li>
                          <li>
                            <a href="#tab-2">Team</a>
                          </li>
                          <li>
                            <a href="#tab-3">Details</a>
                          </li>
                        </ul>
                        <!--tabs content-->                 
                        <div class="tabs-content">
                          <div id="tab-1">

                            <p>
                                
                              <?=$icos[0]['content_description']?>
                            </p>

                          </div>
                          <div id="tab-2">
                             
                            <div class="team-holder small-type">
            
                              <div class="row">
                                <?php foreach($team_row as $team): ?>
                                <div class="col-md-4 col-sm-6">
                                  
                                  <!-- team element -->
                                  <div class="team-item">

                                    <div class="team-desc">
                                      <div class="member-info">
                                        <h6 class="member-name"><a href="people.php?c=<?=$team['worker_name']?>" class="link-text"><?=$team['worker_name']?></a></h6>
                                        <h6 class="member-position"><?=$team['post']?></h6>
                                      </div>
                                      <ul class="social-icons style-2">

                                        <?php if(!empty($team['fb_profile'])){echo '<li class="fb"><a href="'.$team['fb_profile'].'"><i class="icon-facebook"></i></a></li>';}else {echo " ";} 
                                             if(!empty($team['tw_profile'])){echo '<li class="tw"><a href="'.$team['tw_profile'].'"><i class="icon-twitter"></i></a></li>';}else {echo " ";}
                                             if(!empty($team['li_profile'])){echo '<li class="li"><a href="'.$team['li_profile'].'"><i class="icon-linkedin"></i></a></li>';}else {echo " ";}  


                                        ?> 
                                        

                                      </ul>
                                    </div>

                                  </div>

                                </div>

                                
                                <?php endforeach;?>

                              </div>

                            </div>

                          </div>
                          <div id="tab-3">

                            <div class="tokens">
                              
                              <div class="row">
                                <div class="col-sm-6">
                                  
                                  <div class="token-item">
                                    
                                    <h6 class="token-title">Token type</h6>
                                    <div><?php echo $icos[0]['token_type']." ".$icos[0]['name_index']; ?></div>

                                  </div>
                                 <!--HERE YOU WILL MUST INSERT DATA DETAILS OF SINGLE ICO -->
                                  <!--div class="token-item">
                                    
                                    <h6 class="token-title">Token distribution </h6>
                                    <ul>
                                      <li>50% ICO</li>
                                      <li>5% Advisors</li>
                                      <li>15% Reserve</li>
                                      <li>10% Retained by CoinLion</li>
                                      <li>10% Team</li>
                                      <li>10% Ongoing Development Fund</li>
                                    </ul>

                                  </div>

                                </div>
                                !--
                                <div class="col-sm-6">
                                  
                                  <div class="token-item">
                                    
                                    <h6 class="token-title">Tokens exchange</h6>
                                    <ul>
                                      <li>Pre-ICO: 1 ETH = 3500 LION</li>
                                      <li>Week 1: 1 ETH = 3000 LION</li>
                                      <li>Week 2: 1 ETH = 2875 LION </li>
                                      <li>Week 3: 1 ETH = 2750 LION</li>
                                    </ul>

                                  </div>

                                  <div class="token-item">
                                    
                                    <h6 class="token-title">Bonuses</h6>
                                    <ul>
                                      <li>Week 1: 20%</li>
                                      <li>Week2: 15%</li>
                                      <li>Week 3: 10% </li>
                                    </ul>

                                  </div>

                                </div-->
                              </div>

                            </div>

                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

              </div>

              <div class="share-wrap">
                      
                <span class="share-title">Share this:</span>
                <ul class="social-icons share">
              
                  <li><a href="#" class="sh-facebook"><i class="icon-facebook"></i>Facebook</a></li>
                  <li><a href="#" class="sh-twitter"><i class="icon-twitter"></i>Twitter</a></li>
                  <li><a href="#" class="sh-google"><i class="icon-gplus-3"></i>Google +</a></li>
                  <li><a href="#" class="sh-pinterest"><i class="icon-pinterest"></i>Pinterest</a></li>
                  <li><a href="#" class="sh-mail"><i class="icon-mail"></i>Email to a Friend</a></li>

                </ul>

              </div>

            </div>

            <div class="page-nav">
              <div>
                <a href="#" class="info-btn prev-btn">Previous</a>
                <h6><b>Hdac</b></h6>
              </div>
              <div class="align-right">
                <a href="#" class="info-btn next-btn">Next</a>
                <h6><b>United Traders</b></h6>
              </div>
            </div>

          </main>
          <aside id="sidebar" class="col-lg-3 col-md-12 sbl">
            <?php
                 require 'w_search.php';
                 require 'w_advertise.php';
            ?>
            
          </aside>
        </div>

      </div>
    
 
    </div>
