<!DOCTYPE html>
<html lang="zxx" class="js">


<!-- HEAD -->
<?php $this->load->view('backend/includes/head'); ?>
<!-- /HEAD -->

<body class="nk-body bg-lighter npc-general has-sidebar ">

<div class="nk-app-root">
	<!-- main @s -->
	<div class="nk-main ">


		<!-- /SidBar -->
		<?php $this->load->view('backend/includes/sidebar'); ?>
		<!-- /SidBar -->

		<!-- wrap @s -->
		<div class="nk-wrap ">
			<!-- /Header -->
			<?php $this->load->view('backend/includes/header'); ?>
			<!-- /Header -->

			<!-- content @s -->
			<div class="nk-content ">
				<div class="container-fluid">
					<div class="nk-content-inner">
						<div class="nk-content-body">
							<div class="components-preview wide-md mx-auto">
								<div class="nk-block nk-block-lg">
									<div class="nk-block-head nk-block-head-sm">
										<div class="nk-block-between">
											<div class="nk-block-head-content">
												<h3 class="nk-block-title page-title">Manage Events</h3>

											</div><!-- .nk-block-head-content -->
											<a href="<?= base_url('event/create'); ?>" class="btn btn-primary"><em class="icon ni ni-plus"></em></a>
										</div><!-- .nk-block-between -->
									</div><!-- .nk-block-head -->
									<div class="card card-preview animated fadeIn">
										<div class="card-inner">
											<table class="datatable-init table">
												<thead>
												<tr>
													<th>Sno#</th>
													<th>Customer</th>
													<th>Event Title</th>
													<th>Event Date</th>
													<th>Action</th>
												</tr>
												</thead>
												<tbody>
												<?php for ($i=0; $i<count($customers); $i++): ?>
													<tr>
														<td><?= $i+1; ?></td>
														<td><?= $customers[$i]['customer_first_name'].' '.$customers[$i]['customer_last_name']?></td>
														<td><?= $customers[$i]['customer_primary_email'];?></td>
														<td><?= $customers[$i]['customer_primary_contact_no'];?></td>
														<td align="center">
															<a href="<?= base_url('customer/additional-contacts/'.$customers[$i]['customer_id']); ?>" class="btn btn-xs btn-primary"><span class="icon ni ni-contact"></span></a>
															<a href="<?= base_url('customer/detail/'.$customers[$i]['customer_id']); ?>" class="btn btn-xs btn-info"><span class="icon ni ni-eye"></span></a>
															<button type="button" data-toggle="modal" data-target="#exampleModal-edit" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></button>
															<button type="button"  class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
														</td>
													</tr>
												<?php endfor; ?>

												</tbody>
											</table>
										</div>
									</div><!-- .card-preview -->
								</div> <!-- nk-block -->

							</div><!-- .components-preview -->
						</div>
					</div>
				</div>
			</div>
			<!-- content @e -->
			<!-- footer @s -->
			<?php $this->load->view('backend/includes/footer'); ?>
			<!-- footer @e -->
		</div>
		<!-- wrap @e -->
	</div>
	<!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->


<!-- JavaScript -->
<?php $this->load->view('backend/includes/scripts'); ?>
<!-- /JavaScript -->


</body>

</html>
