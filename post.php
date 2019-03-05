<?php

    $post_title = $uri['1'];
    $db = new PDO('mysql:host=localhost;dbname=stoihsbz_db','stoihsbz_us','kk23t8mcweiz');
    $q = $db->query("SELECT * FROM `posts` WHERE title = '$post_title'");
    $post = $q->fetch(PDO::FETCH_ASSOC);

    //$post_count = count($post);

	?>


    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

      <div class="container">

        <div class="row">

          <main id="main" class="col-lg-9 col-md-12">

            <div class="content-element">

              <div class="entry-single">
                <div class="row">
                  <div class="sidebar col-sm-4">

                    <div class="widget">

                      <div class="entry-box">

                        <div class="entry entry-small">

                          <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                          <div class="thumbnail-attachment">
                            <div class="entry-label"><?=$post['category']?></div>
                          </div>

                          <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                          <div class="entry-body">

                            <div class="entry-meta">

                              <time class="entry-date" datetime="<?=$post['date']?>"><?=$post['date']?></time> <br>
                              <span>by</span>
                              <a href="https://stoicolist.com/author.php?p=<?=$post['author']?>" class="entry-cat"><?=$post['author']?></a>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                    <!--div class="widget">

                      <div class="share-wrap">

                        <span class="share-title">Share this:</span>
                        <ul class="social-icons share v-type">

                          <li><a href="#" class="sh-facebook"><i class="icon-facebook"></i>Facebook</a></li>
                          <li><a href="#" class="sh-twitter"><i class="icon-twitter"></i>Twitter</a></li>
                          <li><a href="#" class="sh-google"><i class="icon-gplus-3"></i>Google Plus</a></li>
                          <li><a href="#" class="sh-pinterest"><i class="icon-pinterest"></i>Pinterest</a></li>
                          <li><a href="#" class="sh-mail"><i class="icon-mail"></i>Email to a Friend</a></li>

                        </ul>

                      </div>

                    </div-->

                    <div class="widget">

                      <div class="banner-wrap">

                        <div class="banner-title">Advertise</div>
                        <a href="#" class="banner"><img src="images/160x600_banner.jpg" alt=""></a>

                      </div>

                    </div>

                  </div>
                  <div class="main col-sm-8">

                    <h3 class="title"><b><?=$post['title']?></b></h2>
                    <!--p class="text-size-big"></p-->
                    <div style="align:center;" class="content-element2">
                      <img  src="/db_img/<?=$post['image']?>" alt="">
                    </div>
                    <div class="content-element2">
                      <p class="text-black"><?=convertHashtags($post['text'])?></p>
                    </div>
                    <!--div class="content-element2">
                      <p class="text-black">Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. </p>
                    </div>
                    <div class="content-element2">
                      <div class="blockquote-holder with-bg">
                        <blockquote>
                          <p>“Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla.” </p>
                          <div class="author">John McCoist</div>
                        </blockquote>
                      </div>
                    </div>
                    <div class="content-element4">
                      <p class="text-black">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
                    </div>
                    <div class="content-element2">
                      <h4>Sub-heading</h4>
                      <p class="text-black">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
                    </div>
                    <div class="content-element2">
                      <img src="images/775x494_img2.jpg" alt="">
                    </div>
                    <div class="content-element2">
                      <p class="text-black">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit.  </p>
                    </div>
                    <div class="content-element2">
                      <p class="text-black">Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipisMauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus.</p>
                    </div-->
                    <div class="tagcloud">

                      <a href="#">bitcoin</a>
                      <a href="#">blockchain</a>
                      <a href="#">cryptocurrency</a>

                    </div>

                  </div>
                </div>
              </div>

              <div class="page-nav">
                <div>
                  <a href="#" class="info-btn prev-btn">Previous Post</a>
                  <h6><b>GMO Internet's Crypto Mining Facility <br> Is Up and Running</b></h6>
                </div>
                <div class="align-right">
                  <a href="#" class="info-btn next-btn">Next Post</a>
                  <h6><b>Coinbase's Bitcoin Cash Market Is <br> Back Online</b></h6>
                </div>
              </div>

            </div>

            <div class="content-element">

              <h3 class="title">Related Posts</h3>

              <div class="entry-box row">
                <div class="col-md-4">

                  <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                  <div class="entry entry-small">

                    <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                    <div class="thumbnail-attachment">
                      <a href="#"><img src="images/315x208_img9.jpg" alt=""></a>
                      <a href="#" class="entry-label">Blockchain</a>
                    </div>

                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                    <div class="entry-body">

                      <h5 class="entry-title"><a href="#"></a></h5>
                      <div class="entry-meta">

                        <time class="entry-date" datetime="2018-12-21">Dec 21, 2018, 07:00 AM</time>
                        <span>by</span>
                        <a href="#" class="entry-cat">Adam Smith</a>

                      </div>

                    </div>

                  </div>

                </div>
                <div class="col-md-4">

                  <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                  <div class="entry entry-small">

                    <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                    <div class="thumbnail-attachment">
                      <a href="#"><img src="images/315x208_img10.jpg" alt=""></a>
                      <a href="#" class="entry-label">Blockchain</a>
                    </div>

                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                    <div class="entry-body">

                      <h5 class="entry-title"><a href="#">The Benefits of Blockchain in Government</a></h5>
                      <div class="entry-meta">

                        <time class="entry-date" datetime="2018-12-21">Dec 21, 2018, 07:00 AM</time>
                        <span>by</span>
                        <a href="#" class="entry-cat">Adam Smith</a>

                      </div>

                    </div>

                  </div>

                </div>
                <div class="col-md-4">

                  <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                  <div class="entry entry-small">

                    <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                    <div class="thumbnail-attachment">
                      <a href="#"><img src="images/315x208_img11.jpg" alt=""></a>
                      <a href="#" class="entry-label">Blockchain</a>
                    </div>

                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                    <div class="entry-body">

                      <h5 class="entry-title"><a href="#">The Evolution of Crowdfunding Through ICOs</a></h5>
                      <div class="entry-meta">

                        <time class="entry-date" datetime="2018-12-21">Dec 21, 2018, 07:00 AM</time>
                        <span>by</span>
                        <a href="#" class="entry-cat">Adam Smith</a>

                      </div>

                    </div>

                  </div>

                </div>
              </div>

            </div>

            <div class="content-element">

              <h3 class="title">Comments</h3>

              <ol class="comments-list">

                <li class="comment">

                  <article>

                    <!-- - - - - - - - - - - - - - Avatar - - - - - - - - - - - - - - - - -->

                    <div class="gravatar">

                      <a href="#"><img src="images/100x100_photo2.jpg" alt=""></a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of avatar - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Comment body - - - - - - - - - - - - - - - - -->

                    <div class="comment-body">

                      <header class="comment-meta">

                        <h6 class="comment-author"><a href="#">Camala Haddon</a></h6>
                        <div class="comment-info">
                          <time datetime="2015-10-17 02:41" class="comment-date">October 17, 2017 at 2:41 pm</time>
                          <a href="#" class="comment-reply-link">Reply</a>
                        </div>

                      </header>

                      <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros.</p>

                    </div><!--/ .comment-body-->

                    <!-- - - - - - - - - - - - - - End of comment body - - - - - - - - - - - - - - - - -->

                  </article>

                  <ol class="children">

                    <li class="comment">

                      <article>

                        <!-- - - - - - - - - - - - - - Avatar - - - - - - - - - - - - - - - - -->

                        <div class="gravatar">

                          <a href="#"><img src="images/100x100_photo3.jpg" alt=""></a>

                        </div>

                        <!-- - - - - - - - - - - - - - End of avatar - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Comment body - - - - - - - - - - - - - - - - -->

                        <div class="comment-body">

                          <header class="comment-meta">

                            <h6 class="comment-author"><a href="#">Admin</a></h6>
                            <div class="comment-info">
                              <time datetime="2015-10-17 02:41" class="comment-date">October 17, 2017 at 2:41 pm</time>
                              <a href="#" class="comment-reply-link">Reply</a>
                            </div>

                          </header>

                          <p>Aliquam erat volutpat. Duis ac turpis. </p>

                        </div><!--/ .comment-body-->

                        <!-- - - - - - - - - - - - - - End of comment body - - - - - - - - - - - - - - - - -->

                      </article>

                    </li>

                  </ol>

                </li>

                <li class="comment">

                  <article>

                    <!-- - - - - - - - - - - - - - Avatar - - - - - - - - - - - - - - - - -->

                    <div class="gravatar">

                      <a href="#"><img src="images/100x100_photo1.jpg" alt=""></a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of avatar - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Comment body - - - - - - - - - - - - - - - - -->

                    <div class="comment-body">

                      <header class="comment-meta">

                        <h6 class="comment-author"><a href="#">Bradley Grosh</a></h6>
                        <div class="comment-info">
                          <time datetime="2015-10-17 02:41" class="comment-date">October 17, 2017 at 2:41 pm</time>
                          <a href="#" class="comment-reply-link">Reply</a>
                        </div>

                      </header>

                      <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. </p>

                    </div><!--/ .comment-body-->

                    <!-- - - - - - - - - - - - - - End of comment body - - - - - - - - - - - - - - - - -->

                  </article>

                </li>

              </ol>

            </div>

            <div class="content-element">

              <h3 class="title">Leave a Comment</h3>
              <p>Your email address will not be published. Fields marked with an <span class="required"></span> are required.</p>
              <form>
                <div class="row flex-row">
                  <div class="col-12">

                    <label class="required">Name</label>
                    <input type="text">

                  </div>
                  <div class="col-12">

                    <label class="required">Email address</label>
                    <input type="email">

                  </div>
                  <div class="col-12">

                    <label>Website</label>
                    <input type="url">

                  </div>
                  <div class="col-12">

                    <label class="required">Your Comment</label>
                    <textarea rows="10"></textarea>

                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-style-4" data-type="submit">Submit Comment</button>
                  </div>
                </div>
              </form>

            </div>

          </main>
          <aside id="sidebar" class="col-lg-3 col-md-12 sbl">

            <!-- Widget -->
            <?php require 'w_search.php';
                  require 'w_icos.php';
                  require 'w_latest_stories.php';
                  require 'w_hashtags.php';
                  ?>



          </aside>

        </div>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->
