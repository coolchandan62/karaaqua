
      <div class="col-md-9 pt-5">
      <div class="user-details">
      <div class="col-md-12 pull-right">
      <div class="personal-detail">
      <h3>Change Password</h3>
      
<?php 
 $user_id = $_SESSION['user_id'];
    $data['userData'] = registerUserById($user_id);?>
  <form>
  <input type="hidden" name="id" value="<?=$data['userData']['id']?>">

  <label>
    <p>Old Password</p>
    <input type="password" name="old_password" placeholder="Old Password">
    <span class="message" id="msg_old_password"></span>
  </label>

  <label>
    <p>New Password</p>
    <input type="password" name="new_password" placeholder="New Password">
    <span class="message" id="msg_new_password"></span>
  </label>

  <label>
    <p>Confirm Password</p>
    <input type="password" name="confirm_password" placeholder="Confirm Password">
    <span class="message" id="msg_confirm_password"></span>
  </label>

  <label>
    <p>&nbsp;</p>
    <button type="button" id="changePassword">Update Password</button>
  </label>

  <div class="message" id="msg_error"></div>
</form>


      </div>
    
      </div> 
      </div>
      </div>
           </div> </div> 
  <div class="clearfix p-5"></div>   
      <script src="<?= base_url("assets/home/js/auth.js?v=0.1") ?>"></script>
    </script>
  