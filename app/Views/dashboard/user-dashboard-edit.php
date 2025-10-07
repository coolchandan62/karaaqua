
      <div class="col-md-9">
      <div class="user-details">
      <div class="grid-25 pull-left user-big-img">
    <?php if($userdData['image']){?>
      <img src="<?=base_url()?>assets/uploads/user/<?=$userdData['image']?>">
      <?php } else {?>
      <img src="<?=base_url()?>assets/dashboard/images/user-img.jpg">

        <?php } ?> 
      <br>
      <form>
       <label><input type="file" name="image" id="image"><span><i class="fa fa-camera"></i>  Upload Image ..</span></label>
                 <span class="message" id="msg_image"></span>

      </div>
      <div class="grid-70 pull-right">
      <div class="personal-detail">
      <h3>Personal Information</h3>
      <input type="hidden" name="id" value="<?=$userdData['id']?>">
      <label><span><i class="fa fa-user"></i> Name</span>: &nbsp;<input type="text" name="user_name" value="<?=$userdData['user_name']?>"> </label>
      <span class="message" id="msg_user_name"></span>
      <label><span><i class="fa fa-envelope" aria-hidden="true"></i> Email</span>: &nbsp; <input type="text" name="user_email" readonly value="<?=$userdData['user_email']?>"> </label>
      <label><span><i class="fa fa-phone"></i> Phone</span>: &nbsp;  <input type="text" name="phone" readonly value="<?=$userdData['user_phone']?> "></label>
       <label><span> State </span>: &nbsp;  <input type="text" name="state" value="<?=$userdData['state']?>"></label>
             <span class="message" id="msg_state"></span>

       <label><span> City </span>: &nbsp;  <input type="text" name="city" value="<?=$userdData['city']?>"></label>
                    <span class="message" id="msg_city"></span>
             <label><span> Pincode </span>: &nbsp;  <input type="text" name="pincode" value="<?=$userdData['pincode']?>"></label>
                    <span class="message" id="msg_pincode"></span>

      <label><span> <i class="fa fa-map-marker"></i> Address </span> &nbsp; <textarea name="address"><?=$userdData['address']?></textarea> </label>
          <span class="message" id="msg_address"></span>

      <label><span>&nbsp;</span>
     <button type="button" id="updateProfile">Update Profile</button>
    </label>
      </div>
      </div> 
      </form>
      </div>
      </div>  
     </div> 
    </div> 
  <div class="clearfix p-5"></div>
<script src="<?= base_url("assets/home/js/auth.js?v=0.1") ?>"></script>
    </script>
  
  
