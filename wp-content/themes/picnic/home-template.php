<?php
/*
	Template Name: Form page
	Version: 1.0
*/
get_header(); 

$site_settings = get_option( 'ecap_settings' ); 

?>

<main class="container">
	<div class="man_wrapper_bg">
		<section>
			<div class="home_header">
				<img src="<?php echo $site_settings['header_img'];?>">
			</div>
		</section>
		<section class="container">
			<div class="content_wrap">
				<div class="row">
					<div class="col-md-3">
						<div class="col-12 left_sidebar">
							<div class="left_sidebar_row">
								<h4 class="section_title">Support</h4>
								<div class="my-4">
									<p>
										<b>IT: </b> 
										<span>
											<?php echo $site_settings['support_it_incharge_name'] ?>
										</span>
										<span>
											<?php echo $site_settings['support_it_incharge_phone'] ?>
										</span>
									</p>
									<p>
										<b>Event Inchage:</b>
										<span>
											<?php echo $site_settings['support_event_incharge_name'] ?>
										</span>
										<span>
											<?php echo $site_settings['support_event_incharge_phone'] ?>
										</span>
									</p>
									<p>
										<b>Gift Incharge:</b>
										<span>
											<?php echo $site_settings['support_gift_incharge_name'] ?>
										</span>
										<span>
											<?php echo $site_settings['support_gift_incharge_phone'] ?>
										</span>
									</p>
									<p>
										<b>Food:</b>
										<span>
											<?php echo $site_settings['support_food_incharge_name'] ?>
										</span>
										<span>
											<?php echo $site_settings['support_food_incharge_phone'] ?>
										</span>
									</p>
								</div>
							</div>
							<div class="left_sidebar_row">
								<h4 class="section_title">Organized by</h4>
								<div class="my-4">
									<p>
										<b>Name: </b>
										<span>
											<?php echo $site_settings['organization_name'] ?>
										</span>
									</p>
									<p>
										<b>Phone: </b>
										<a href="tel:<?php echo $site_settings['organization_phone'] ?>">
											<?php echo $site_settings['organization_phone'] ?>
										</a>
									</p>
									<p>
										<b>Email: </b>
										<a href="mailto:<?php echo $site_settings['organization_email'] ?>">
											<?php echo $site_settings['organization_email'] ?>
										</a>
									</p>
									<p>
										<b>Address: </b> 
										<?php echo $site_settings['organization_address'] ?>
									</p>
								</div>
							</div>
							<div class="left_sidebar_row">
								<h4 class="section_title">Member affains standing committee</h4>
								<div class="my-4">
									
									<?php
										foreach($site_settings['committee_members'] as $member ): 
									?>
									<div class="avt_row">
										<img src="<?php echo $member['member_avatar']['url'] ?>" width="50" alt="avt img">
										<h6><?php echo $member['member_name']?></h6>
									</div>
								<?php endforeach?>
								</div>
							</div>
							<div class="left_sidebar_row">
								<h4 class="section_title"></h4>
								<div class="my-4">
									<h5>Automotion powred by Inside Age <a href="https://www.ekopii.com/">Ekopii</a> </h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 center_col">
						<div class="col-12">
							<h4 class="section_title">Registration</h4>
							<div class="my-4">
								<form method="post" action="#" id="registrationForm">
									<div class="border-1">
										<div>
											<div class="form_row">
												<div class="form-floating">
													<input type="text" class="form-control" name="memberId" id="memberID" placeholder="Member ID">
													<label for="memberID">Member ID</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating mb-2">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													<label for="memberID">Name</label>
												</div>
											</div>



											<div class="form_row border-1">
												<div class="form-floating mb-2">
													<select class="form-select" id="personType">
														<option value="Single">Single</option>
														<option value="Family">Family</option>
													</select>
													<label for="personType">Person Type</label>
												</div>
												<div id="morePersonWrap" class="addMoreFiledForm">

												</div>
											</div>



											<div class="form_row">
												<div class="form-floating mb-2">
													<select class="form-select" id="kidsType">
														<option value="No Kids" selected>No Kids</option>
														<option value="With Kids">With Kids</option>
													</select>
													<label for="kidsType">Kids type</label>
												</div>
												<div id="addMoreKidsWrap" class="addMoreFiledForm">
													
												</div>
											</div>
											
											
											


											<div class="form_row">
												<div class="form-floating">
													<input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name">
													<label for="companyName">Company Name</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
													<label for="phoneNumber">Phone Number</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
													<label for="email">Email Address</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<input type="number" class="form-control" name="nid" id="nid" placeholder="NID Number">
													<label for="nid">NID Number</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<select class="form-select shadow-sm" name="pickupArea" id="pickupArea" onchange="onSelectChange(this)">
														<option value="" disabled selected>Pickup Area</option>
														<?php if (!empty($site_settings['pickupArea'])) {
														foreach ($site_settings['pickupArea'] as $area) {
															echo "<option value=".$area['areaName'].">".$area['areaName']."</option>";
														}}?>
													</select>
													<label for="pickupArea">Pickup Area</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<input type="number" class="form-control" name="regFee" id="regFee" value="1500" placeholder="Registration Fee">
													<label for="nid">Registration Fee</label>
												</div>
											</div>
											<div class="form_row">
												<div>
													<input type="submit" class="btn btn-primary px-4 shadow-sm" value="Submit">
													<input type="reset" class="btn btn-outline-secondary px-4 shadow-sm" value="Reset">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="col-md-12 right_sidebar">
							<div class="sponsore_wrap">
								<h4 class="section_title">Platinum Sponsored</h4>
								<div class="mt-4">
									<?php
										if ($site_settings['platinum_sponsored']) :
										foreach($site_settings['platinum_sponsored'] as $platinum_logo ): 
									?>
									<figure>
										<img src="<?php echo $platinum_logo['logo']['url']?>" alt="Trulli" style="width:100%">
									</figure>
								<?php endforeach;
									endif;
								?>
								</div>
							</div>
							<div class="sponsore_wrap">
								<h4 class="section_title">Gold Sponsored</h4>
								<div class="mt-4">
									<?php
										if ($site_settings['gold_sponsored']) :
										foreach($site_settings['gold_sponsored'] as $gold_logo ): 
									?>
									<figure>
										<img src="<?php echo $gold_logo['logo']['url']?>" alt="Trulli" style="width:100%">
									</figure>
								<?php endforeach;
									endif;
								?>
								</div>
							</div>
							<div class="sponsore_wrap">
								<h4 class="section_title">Sliver Sponsored</h4>
								<div class="mt-4">
									<?php
										if ($site_settings['silver_sponsored']) :
										foreach($site_settings['silver_sponsored'] as $silver_logo ): 
									?>
									<figure>
										<img src="<?php echo $silver_logo['logo']['url']?>" alt="Trulli" style="width:100%">
									</figure>
								<?php endforeach;
									endif;
								?>
								</div>
							</div>
							<div class="sponsore_wrap">
								<h4 class="section_title">Partnars</h4>
								<div class="mt-4">
									<?php
										if ($site_settings['partners_logos']) :
										foreach($site_settings['partners_logos'] as $partners_logo ): 
									?>
										<figure>
											<img src="<?php echo $partners_logo['logo']['url']?>" alt="Trulli" style="width:100%">
										</figure>
									<?php endforeach;
										endif;
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();