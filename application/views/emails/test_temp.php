<!DOCTYPE html>
<html>
<head>
	<title>Email Verification</title>
	<link rel="stylesheet" href="<?= base_url()?>assets/assets/css/dashlite.css?ver=2.0.0">
	<style>
		/*! Email Template */
		.email-wraper { background: #f5f6fa; font-size: 14px; line-height: 22px; font-weight: 400; color: #8094ae; width: 100%; }

		.email-wraper a { color: #6576ff; word-break: break-all; }

		.email-wraper .link-block { display: block; }

		.email-ul { margin: 5px 0; padding: 0; }

		.email-ul:not(:last-child) { margin-bottom: 10px; }

		.email-ul li { list-style: disc; list-style-position: inside; }

		.email-ul-col2 { display: flex; flex-wrap: wrap; }

		.email-ul-col2 li { width: 50%; padding-right: 10px; }

		.email-body { width: 96%; max-width: 620px; margin: 0 auto; background: #ffffff; }

		.email-success { border-bottom: #1ee0ac; }

		.email-warning { border-bottom: #f4bd0e; }

		.email-btn { background: #6576ff; border-radius: 4px; color: #ffffff !important; display: inline-block; font-size: 13px; font-weight: 600; line-height: 44px; text-align: center; text-decoration: none; text-transform: uppercase; padding: 0 30px; }

		.email-btn-sm { line-height: 38px; }

		.email-header, .email-footer { width: 100%; max-width: 620px; margin: 0 auto; }

		.email-logo { height: 40px; }

		.email-title { font-size: 13px; color: #6576ff; padding-top: 12px; }

		.email-heading { font-size: 18px; color: #6576ff; font-weight: 600; margin: 0; line-height: 1.4; }

		.email-heading-sm { font-size: 24px; line-height: 1.4; margin-bottom: .75rem; }

		.email-heading-s1 { font-size: 20px; font-weight: 400; color: #526484; }

		.email-heading-s2 { font-size: 16px; color: #526484; font-weight: 600; margin: 0; text-transform: uppercase; margin-bottom: 10px; }

		.email-heading-s3 { font-size: 18px; color: #6576ff; font-weight: 400; margin-bottom: 8px; }

		.email-heading-success { color: #1ee0ac; }

		.email-heading-warning { color: #f4bd0e; }

		.email-note { margin: 0; font-size: 13px; line-height: 22px; color: #8094ae; }

		.email-copyright-text { font-size: 13px; }

		.email-social li { display: inline-block; padding: 4px; }

		.email-social li a { display: inline-block; height: 30px; width: 30px; border-radius: 50%; background: #ffffff; }

		.email-social li a img { width: 30px; }

		@media (max-width: 480px) { .email-preview-page .card { border-radius: 0; margin-left: -20px; margin-right: -20px; }
			.email-ul-col2 li { width: 100%; } }
	</style>
</head>
<body>
<div class="container">
	<table class="email-wraper">
		<tr>
			<td class="py-5">
				<table class="email-header">
					<tbody>
					<tr>
						<td class="text-center pb-4">
							<a href="#"><img class="email-logo" src="https://www.technologicx.com/pictures/logo-dark2x.png" alt="logo"></a>
						</td>
					</tr>
					</tbody>
				</table>
				<table class="email-body">
					<tbody>
					<tr>
						<td class="px-3 px-sm-5 pt-3 pt-sm-5 pb-3">
							<h2 class="email-heading">Confirm Your E-Mail Address</h2>
						</td>
					</tr>
					<tr>
						<td class="px-3 px-sm-5 pb-2">
							<p>Hi Ishtiyak,</p>
							<p>Welcome! <br> You are receiving this email because you have registered on our site.</p>
							<p>Click the link below to active your DashLite account.</p>
							<p class="mb-4">This link will expire in 15 minutes and can only be used once.</p>
							<a href="#" class="email-btn">Verify Email</a>
						</td>
					</tr>
					<tr>
						<td class="px-3 px-sm-5 pt-4">
							<h4 class="email-heading-s2">or</h4>
							<p>If the button above does not work, paste this link into your web browser:</p>
							<a href="#" class="link-block">https://dashlite.com/account?login_token=dacb711d08a0ee7bda83ce1660918c31e8b43c30</a>
						</td>
					</tr>
					<tr>
						<td class="px-3 px-sm-5 pt-4 pb-3 pb-sm-5">
							<p>If you did not make this request, please contact us or ignore this message.</p>
							<p class="email-note">This is an automatically generated email please do not reply to this email. If you face any issues, please contact us at help@dashlite.com</p>
						</td>
					</tr>
					</tbody>
				</table>
				<table class="email-footer">
					<tbody>
					<tr>
						<td class="text-center pt-4">
							<p class="email-copyright-text">Copyright © <?= date('Y'); ?> DashLite. All rights reserved.</p>
							<ul class="email-social">
								<li><a href="#"><img src="https://www.technologicx.com/pictures/facebook.png" alt=""></a></li>
								<li><a href="#"><img src="https://www.technologicx.com/pictures/twitter.png" alt=""></a></li>
								<li><a href="#"><img src="https://www.technologicx.com/pictures/youtube.png" alt=""></a></li>
								<li><a href="#"><img src="https://www.technologicx.com/pictures/medium.png" alt=""></a></li>
							</ul>
						</td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</table>
</div>
</body>
</html>

