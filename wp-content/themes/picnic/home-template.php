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
								<form id="registrationForm">
									<div class="border-1">
										<div>
											<div class="form_row">
												<div class="form-floating">
													<input type="number" class="form-control" name="memberId" id="memberId" placeholder="Member ID">
													<label for="memberId">Member ID</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating mb-2">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													<label for="name">Name</label>
												</div>
											</div>

											<div class="form_row border-1">
												<div class="form-floating mb-2">
													<select class="form-select" id="personType" name="morePersonNumber">
														<?php 

															for ($i=1; $i <= 10; $i++) { 
																echo "<option value='$i'>$i</option>";
															}
														?>
													</select>
													<label for="personType">Aditional Person</label>
												</div>
												<div id="morePersonWrap" class="addMoreFiledForm">

												</div>
											</div>

											<div class="form_row">
												<div class="form-floating mb-2">
													<select class="form-select" id="kidsType" name="kidsType">
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
													<select class="form-select shadow-sm" name="pickupArea" id="pickupArea">
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
													<select class="form-select shadow-sm" name="driverType" id="driverType">
														<option value="" disabled selected>With driver / Own drive</option>
														<option value="Own drive">Own drive</option>
														<option value="With driver">With driver (Fee 1000 taka)</option>
													</select>
													<label for="driverType">Driver Type</label>
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
		<button class="btn checkSWL">Check me</button>
	</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	const personType = document.querySelector('#personType');
	const kidsType = document.querySelector('#kidsType');


	const addPersonForm = `
		<div class="form_group d-flex align-items-center gap-1 justify-content-between morePersonRow ">
			<div style="width: 90%;">
				<div class="form-floating mb-2">
					<input type="text" class="form-control morePersonDatas" name="morePersonName" id="morePersonName" placeholder="Name">
					<label for="morePersonName">Name</label>
				</div>
				<div class="form-floating">
					<select class="form-select morePersonDatas" name="relationType" id="relationType">
						<option value="" disabled="" selected="">Relation</option>
						<option value="Father">Father</option>
						<option value="Mother">Mother</option>
						<option value="Sister">Sister</option>
						<option value="Brother">Brother</option>
						<option value="Wife">Wife</option>
						<option value="Husband">Husband</option>
						<option value="Friend">Friend</option>
					</select>
					<label for="relationType">Person Type</label>
				</div>
			</div>
			<div class="align-items-center d-flex flex-column justify-content-between" style="width: 10%">
				<button type="button" id="addMorePersonBtn" class="btn btn-primary btn-sm mb-1 addBtn">+</button>
				<button type="button" id="removeMorePersonBtn" class="btn btn-danger btn-sm rmBtn">-</button>
			</div>
		</div>
	`


	// const personType = document.querySelector('#personType');
	personType.addEventListener('change', (el) => {
		// console.log(el.target.value);
		if (el.target.value >= 2) {
			document.querySelector('#morePersonWrap').innerHTML = addPersonForm;
		}else if (el.target.value <= 1) {
			document.querySelector('#morePersonWrap').innerHTML = null;
		}
	})

	document.addEventListener('click', (el) => {
		addNewPersonFrom(el, '#addMorePersonBtn', '#morePersonWrap', addPersonForm);
	})
	document.addEventListener('click', (el) => {
		if (el.target.matches('#removeMorePersonBtn')) {
			el.target.parentNode.parentNode.remove();
		}
	})



	// function setNameKey(){
	// 	document.addEventListener('change', (el) => {
	// 		if (el.target.matches()) {}
	// 	})
	// }





	// Kids add

	const addKidsForm = `
		<div class="form_group d-flex align-items-center gap-1 justify-content-between moreKidsRow">
			<div style="width: 90%;">
				<div class="form-floating mb-2">
					<input type="text" class="form-control moreKidsInputs" name="moreKidsName" id="moreKidsName" placeholder="Name">
					<label for="moreKidsName">Name</label>
				</div>
				<div class="form-floating">
					<select class="form-select moreKidsInputs" name="moreKidsType" id="moreKidsType">
						<option value="" disabled="" selected="">Kids Type</option>
						<option value="Bellow 5 years">Bellow 5 Years</option>
						<option value="Above 5 years">Above 5 Years</option>
					</select>
					<label for="moreKidsType">Kids Type</label>
				</div>
			</div>
			<div class="align-items-center d-flex flex-column justify-content-between" style="width: 10%">
				<button type="button" id="addMoreKidsBtn" class="btn btn-primary mb-1 btn-sm addBtn">+</button>
				<button type="button" id="removeMoreKidsBtn" class="btn btn-danger btn-sm rmBtn">-</button>
			</div>
		</div>
	`

	kidsType.addEventListener('change', (el) => {
		console.log(el.target.value);
		if (el.target.value == 'With Kids') {
			document.querySelector('#addMoreKidsWrap').innerHTML = addKidsForm;
		}else if (el.target.value == 'No Kids') {
			document.querySelector('#addMoreKidsWrap').innerHTML = null;
		}
	})

	document.addEventListener('click', (el) => {
		if (el.target.matches('#removeMoreKidsBtn')) {
			el.target.parentNode.parentNode.remove();
		}
	})


	//Global
	document.addEventListener('click', (el) => {
		addNewPersonFrom(el, '#addMoreKidsBtn', '#addMoreKidsWrap', addKidsForm);
	})


	function addNewPersonFrom(el, btn, wrapper, data) {
		if (el.target.matches(btn)) {
			document.querySelector(wrapper).insertAdjacentHTML('beforeend', data);
		}
	}

	document.querySelector('#registrationForm').addEventListener('reset', () => {
		document.querySelector('#addMoreKidsWrap').innerHTML = null;
		document.querySelector('#morePersonWrap').innerHTML = null;
	})
</script>



<script type="text/javascript">

	function __notify({title='Successfull', desc='', type='success'}){
		Swal.fire({
			toast: true,
			showConfirmButton: false,
			timer: 3000,
			icon: type,
			title: title,
			text: desc,
			timerProgressBar: true,
			position: 'top-end',
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})
	}
	jQuery(document).ready(function($){
		document.querySelector('#registrationForm').addEventListener('submit', (event) => {
			event.preventDefault();
			const siteUrl = '<?php echo get_site_url()."/wp-admin/admin-ajax.php"?>';

			//Get all form data by object
			const form = document.querySelector('#registrationForm');
			const submitData = Object.fromEntries(new FormData(form).entries());

			$.ajax({
			     type: "POST",
			     url: siteUrl,
			     data: {
			        action: 'submit_entry_post',
			        fromData: submitData,
					morePerson: makeRepeaterData('morePersonWrap', '.morePersonRow', '.morePersonDatas'),
					moreKids: makeRepeaterData('addMoreKidsWrap', '.moreKidsRow', '.moreKidsInputs'),
			     },
			     success: function(res){
			     	document.querySelector('#registrationForm').reset();
			     	__notify("From Submited Successfully");
			     },
			     error: function(er){
			     	__notify({title: "Some thing went wrong", type: "error"});
			     	console.log(er);
			     }
			 });
		});

		function makeRepeaterData(wrapperId, rowClass, fieldClass){
			const repeaterContainer = document.getElementById(wrapperId);
			const repeaterRows = repeaterContainer.querySelectorAll(rowClass);
			const repeaterData = [];

			repeaterRows.forEach(row => {
				const fields = row.querySelectorAll(fieldClass);
				const rowData = {};

				fields.forEach(field => {
				  rowData[field.name] = field.value;
				});
				repeaterData.push(rowData);
			});
		    return repeaterData;
		}
	})
	
</script>
<?php
get_footer();