<!DOCTYPE html>
<html lang="zxx" class="js">

<!-- HEAD -->
<?php $this->load->view('Backend/includes/head'); ?>
<!-- /HEAD -->

<body class="nk-body bg-white npc-general pg-auth">
<div class="nk-app-root">
	<!-- main @s -->
	<div class="nk-main ">
		<!-- wrap @s -->
		<div class="nk-wrap nk-wrap-nosidebar">
			<!-- content @s -->
			<div class="nk-content ">
				<div class="nk-split nk-split-page nk-split-md">
					<div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
						<div class="absolute-top-right d-lg-none p-3 p-sm-5">
							<a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
						</div>
						<div class="nk-block nk-block-middle nk-auth-body">
							<div class="brand-logo pb-5">
								<a href="<?= base_url('registration'); ?>" class="logo-link">
									<img class="logo-light logo-img logo-img-lg" src="<?= base_url()?>assets/images/logo.png" srcset="<?= base_url()?>assets/images/logo2x.png 2x" alt="logo">
									<img class="logo-dark logo-img logo-img-lg" src="<?= base_url()?>assets/images/logo-dark.png" srcset="<?= base_url()?>assets/images/logo-dark2x.png 2x" alt="logo-dark">
								</a>
							</div>
							<div class="nk-block-head">
								<div class="nk-block-head-content">
									<h5 class="nk-block-title">Register</h5>
								</div>
							</div><!-- .nk-block-head -->
							<form action="#">
								<div class="form-group">
									<label class="form-label" for="name">Name</label>
									<input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name">
								</div>
								<div class="form-group">
									<label class="form-label" for="email">Email</label>
									<input type="text" class="form-control form-control-lg" id="email" placeholder="Enter your email">
								</div>
								<div class="form-group">
									<label class="form-label" for="email">Phone Number</label>
									<input type="text" class="form-control form-control-lg" id="email" placeholder="Enter your phone number">
								</div>
								<div class="form-group">
									<label class="form-label" for="password">Password</label>
									<div class="form-control-wrap">
										<a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
											<em class="passcode-icon icon-show icon ni ni-eye"></em>
											<em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
										</a>
										<input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
									</div>
								</div>
								<div class="form-group">
									<div class="custom-control custom-control-xs custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="checkbox">
										<label class="custom-control-label" for="checkbox">I agree to <?= $company_info['name']; ?> <a tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-lg btn-primary btn-block">Register</button>
								</div>
							</form><!-- form -->
							<div class="form-note-s2 pt-4"> Already have an account ? <a href="html/pages/auths/auth-login-v3.html"><strong>Sign in instead</strong></a>
							</div>
						</div><!-- .nk-block -->
						<div class="nk-block nk-auth-footer">
							<div class="mt-3">
								<p>&copy; <?= date('Y'); ?> <?= $company_info['name']; ?>. All Rights Reserved.</p>
							</div>
						</div><!-- nk-block -->
					</div><!-- nk-split-content -->
					<div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- nk-split-content -->
				</div><!-- nk-split -->
			</div>
			<!-- wrap @e -->
		</div>
		<!-- content @e -->
	</div>
	<!-- main @e -->
</div>
<!-- app-root @e -->


<!-- JavaScript -->
<?php $this->load->view('Backend/includes/scripts'); ?>
<!-- /JavaScript -->

</html>
