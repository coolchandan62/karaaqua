
<div class="authentication-page">
	<div class="d-flex justify-content-between   flex-column">
	<div class="main-wrapper">
		<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-5 mx-auto">
						<form id="login-frm">
						   		<input type="hidden" name="pre_url" value="<?=$preUrl?>" class="form-control">

							<div class="d-flex flex-column justify-content-center">
								<div class="card p-sm-4 my-5">
									<div class="card-body">
										<div class="text-center mb-3">
											<h3 class="mb-2">Welcome</h3>
											<p>Enter your credentials to access your account</p>
										</div>
										<div class="mb-3">
											<label class="form-label">User Email</label>
											<input type="text" name="user_email" class="form-control">
										   <span class='message' id="msguser_email"></span>

										</div>
										<div class="mb-3">
											<div class="d-flex align-items-center justify-content-between flex-wrap">
												<label class="form-label">Password</label>
												<!-- <a href="forgot-password.html" class="text-primary fw-medium text-decoration-underline mb-1 fs-14">Forgot Password?</a> -->
											</div>
										<input type="password" name="password" class="form-control">
										     <span class='message' id="msg_password"></span>
										</div>
										<div class="mb-3">
											<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
												
											</div>
										</div>
										<div class="mb-3 text-center">
											<button type="button"  id="authenticateUserLogin"class="main-btn-rect">Sign In</button>
										</div>
										<div class="d-flex justify-content-center">
											<p>Don’t have a account? <a href="<?=base_url()?>user-register" class="text-primary"> Join us Today</a></p>
										</div>
									</div>
								
								</div>	
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</div>
</div>


<script src="<?= base_url("assets/home/js/auth.js?v=0.2") ?>"></script>

	
	<style>
	.authentication-header {
    background: transparent;
    box-shadow: none;
    padding: 100px 0 0;
		}
		
		.authentication-header img{
			width: 100%;
			max-width: 200px;
		}
		.card {
    margin-bottom: 1.5rem;
    background-color: #FFF;
    transition: all 0.5s ease-in-out;
    position: relative;
    border-radius: 10px;
    border: 1px solid #EBECED;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.08);
    color: inherit;
}
	.card .card-body {
    padding: 15px;
}
	p:last-child {
    margin-bottom: 0;
}
		.form-label {
    font-size: 14px;
    font-weight: 500;
    color: #333;
}
	.form-control {
    border-color: #dcdcdc;
    color: #333;
    font-size: 15px;
    min-height: 42px;
    padding: 6px 15px;
	background-color: #ffffff;
	font-weight: 400;
    line-height: 1.6;
    border-radius: 5px;
    height: 40px;
    transition: all 0.5s;
}	
	.text-primary {
    color: #6B2C32 !important;
    opacity: 1;
}	
	.fs-14 {
    font-size: 0.875rem !important;
}	
		.footer-copyright{
			background: #D9C7B3;
			padding: 15px 0;
		}
		
		
		
		
		
	</style>
	
	
	
