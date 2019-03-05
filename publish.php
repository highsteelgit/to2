<?php
print_r($_POST);
mail("highsteel777gmail.com", "maill", "maill", "maill");

if(isset($_FILES['image'])){
	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
	
	$extensions = array("jpeg","jpg","png");
	if($file_size>2097152){
		$errors = 'The file must be no more than 2 MB';
	}
	if(empty($errors) == true){
		move_uploaded_file($file_tmp, "db_img/".$file_name);
		echo 'Success';
	}else{
		print $errors;
	}
}
?>
<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">

      

      <div class="page-section-bg">
        
        <div class="container">
          
          <div class="content-element3">
            
            <div class="align-center">
              
              <h2 class="section-title">Contact Us</h2>
              <p class="text-size-medium">Feel free to send us any questions you may have. We are happy to help.</p>

            </div>

          </div>

          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              
              <form action="send.php" method="POST" >
                
                <div class="row">
				  
				  
				  <div class="col-md-6">
                    
                    <label class="required">Your Email</label>
                    <input type="email" name="email" required="">

                  </div>
				  
				  <div class="col-md-6">
                    
                    <label class="required">ICO image</label>
                    <input type="text" name="image" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">ICO Name</label>
                    <input type="text" name="ico_name" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Category</label>
                    <input type="text" name="category" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Short description/Title</label>
                    <input type="text" name="short_description" required="">

                  </div>
				   <div class="col-md-6">
                    
                    <label class="required">Main description</label>
                    <input type="text" name="content_description" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Hashtags(Example: hashtag, hashtag, hashtag)</label>
                    <input type="text" name="hashtags" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Video presentation</label>
                    <input type="text" name="video" required="">

                  </div>
				  
				 
				  <div class="col-md-6">
                    
                    <label class="required">Type: (PreICO or ICO)</label>
                    <input type="text" name="icotype" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Start date</label>
                    <input type="text" name="start_date" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">End date</label>
                    <input type="text" name="end_date" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Token name</label>
                    <input type="text" name="name_index" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Type of token</label>
                    <input type="text" name="token_type" required="">

                  </div>
				  
				  <div class="col-md-6">
                    
                    <label class="required">PreICO price</label>
                    <input type="text" name="preico_price" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">ICO price</label>
                    <input type="text" name="price" required="">

                  </div>
				  
				  <div class="col-md-6">
                    
                    <label class="required">Bonus program available: (Yes or not)</label>
                    <input type="text" name="bonus_program" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Bounty campaign link</label>
                    <input type="text" name="bounty_campaign" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Prototype (mvp) link</label>
                    <input type="text" name="prototype_mvp" required="">

                  </div>
				  
				  <div class="col-md-6">
                    
                    <label class="required">Platform</label>
                    <input type="text" name="platform" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Accept</label>
                    <input type="text" name="accept" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Minimum invest.</label>
                    <input type="text" name="min_invest" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Softcap</label>
                    <input type="text" name="softcap" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Hardcap</label>
                    <input type="text" name="hardcap" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Your country</label>
                    <input type="text" name="country" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Whitelist / KYC</label>
                    <input type="text" name="kyc_whitelist" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Restricted area</label>
                    <input type="text" name="restricted_area" required="">

                  </div>
                  <div class="col-md-6">  
                    <label class="required">Website</label>
                    <input type="text" name="website" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Whitepaper</label>
                    <input type="text" name="whitepaper_link" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Facebook link</label>
                    <input type="text" name="facebook_soc" required="">

                  </div>
				  
				  <div class="col-md-6">
                    
                    <label class="required">Twitter link</label>
                    <input type="text" name="twitter_soc" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Github link</label>
                    <input type="text" name="github_soc" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Bitcointalk link</label>
                    <input type="text" name="bitcointalk_soc" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Telegram link</label>
                    <input type="text" name="telegram_soc" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">Medium link</label>
                    <input type="text" name="medium_soc" required="">

                  </div>
				  
				  <div class="col-md-6">
                    
                    <label class="required">Information about</label>
                    <input type="text" name="about_info" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">KYC Report(For each member who passed KYC)</label>
                    <input type="text" name="kyc_report" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">KYC Report(Leave the field blank if you have specified all who passed KYC)</label>
                    <input type="text" name="kyc_report2" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">KYC Report(Leave the field blank if you have specified all who passed KYC)</label>
                    <input type="text" name="kyc_report3" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">KYC Report(Leave the field blank if you have specified all who passed KYC)</label>
                    <input type="text" name="kyc_report4" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label class="required">KYC Report(Leave the field blank if you have specified all who passed KYC)</label>
                    <input type="text" name="kyc_report5" required="">

                  </div>
				  <div class="col-md-6">
                    
                    <label>Phone Number</label>
                    <input type="tel">

                  </div>
                  <div class="col-md-6">
                    
                    <label>Subject</label>
                    <input type="text">
                    
                  </div>
                  <div class="col-md-6">
                    
                    <label class="required">Your Name</label>
                    <input type="text" name="cf-name" required="">

                  </div>

                  <div class="col-md-6">
                    
                    <label class="required">Your Email</label>
                    <input type="email" name="cf-email" required="">

                  </div>

                  <div class="col-md-6">
                    
                    <label>Phone Number</label>
                    <input type="tel">

                  </div>
                  <div class="col-md-6">
                    
                    <label>Subject</label>
                    <input type="text">
                    
                  </div>
                  <div class="col-md-6">
                    
                    <label class="required">Your Name</label>
                    <input type="text" name="cf-name" required="">

                  </div>

                  <div class="col-md-6">
                    
                    <label class="required">Your Email</label>
                    <input type="email" name="cf-email" required="">

                  </div>

                  <div class="col-md-6">
                    
                    <label>Phone Number</label>
                    <input type="tel">

                  </div>
                  <div class="col-md-6">
                    
                    <label>Subject</label>
                    <input type="text">
                    
                  </div>
                  <div class="col-12">
                    
                    <label class="required">Message</label>
                    <textarea rows="11" name="cf-message"></textarea>

                  </div>
				  
				  <form action="" method="POST" enctype="multipart/form-data">
				     <input type="file" name="image">
					 <input type="submit">
					 <ul>
					   <li>Sent file:<?php echo $_FILES['image']['name'];?></li>
					   <li>File size:<?php echo $_FILES['image']['size'];?></li>
					   <li>File type:<?php echo $_FILES['image']['type'];?></li>
					 </ul>
				  </form>
                  
                  <div class="col-12">
                    
                    <div class="align-center">
                      <button type="submit" class="btn btn-style-4" data-type="submit">Submit</button>
                    </div>

                  </div>

                </div>

              </form>

            </div>
            <div class="col-lg-2"></div>
          </div>

        </div>

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->
