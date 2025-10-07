
      <div class="col-md-9">
      <div class="user-details">
      <div class="col-md-3 pull-left user-big-img">
       <?php if($userData['image']){?>
      <img src="<?=base_url()?>assets/uploads/user/<?=$userData['image']?>">
      <?php } else {?>
      <img src="<?=base_url()?>assets/dashboard/images/user-img.jpg">
        <?php } ?> 
      </div>
      <div class="col-md-9 pull-left">
      <div class="personal-detail">
      <h3>Personal Information</h3>
      <label><span><i class="fa fa-user"></i> Name</span>: &nbsp; <?=$userData['user_name']?></label>
      <label><span><i class="fa fa-envelope" aria-hidden="true"></i> Email</span>: &nbsp; <?=$userData['user_email']?></label>
      <label><span><i class="fa fa-phone"></i> Phone</span>: &nbsp; +91 <?=$userData['user_phone']?></label>
      <label><span> State</span>: &nbsp; <?=$userData['state']?></label>
      <label><span> City</span>: &nbsp;<?=$userData['city']?></label>
      <label><span> Pin No.</span>: &nbsp; <?=$userData['pincode']?></label>      
      <label><span> <i class="fa fa-map-marker"></i> Address </span>: &nbsp;<?=$userData['address']?> </label>
      <label><span>&nbsp;</span><a href="<?=base_url()?>dashboard/edit-profile"><i class="fa fa-pencil-square-o"></i> Edit Profile</a></label>
      </div>
      </div> 
      </div>
      </div> 
        </div>          
    </div>
  </div>  </div> </div> 
  <div class="clearfix p-5"></div>
  


