
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head><base href="../../../">
                <meta charset="utf-8"/>
        <title>AEW Registry System | Account Registraiton</title>
        <meta name="description" content="Multi column form examples"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

		



        <!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/css/atistyles.css" rel="stylesheet" type="text/css"/>
	    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/ati.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
                <!--end::Layout Themes-->

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
		<link rel="stylesheet" href="../../../public/css/app.css">

    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading"  >

    	<!--begin::Main--> 
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">

			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid " id="kt_wrapper">

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
											<!--begin::Subheader-->
<div class="subheader py-3 py-lg-8  subheader-transparent " id="kt_subheader">
    <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">

			<!--begin::Page Heading-->
			<div class="d-flex align-items-baseline flex-wrap mr-5">
				<!--begin::Page Title-->
				
	            <h2 class="subheader-title text-dark font-weight-bolder font-size-h1 my-1 ml-10">
	                Account Registration
	        	</h2>	
			
				<!--end::Page Title-->

	        </div>
			<!--end::Page Heading-->
        </div>
		<!--end::Info-->
    </div>
</div>
<!--end::Subheader-->

				<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class=" container ">
		<div class="row">
			<div class="col-lg-12">

	<!--begin::Form-->
	<form class="form" action="{{ route("save") }}" method="POST">
		@csrf

		   <!--begin::Personal Information Row-->  
		   <div class="row" id="account-info">
            <!--begin::Personal Information-->
            <div class="col-lg-12">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>PERSONAL INFORMATION</h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <!--begin::Form-->
						<div class="card-body dashboard-personal">
							<div class="form-group row">
								<div class="col-lg-3">
									<label>Last Name:</label>
									<input type="text" name="lname" class="form-control text-line" id="lname"/>
								</div>
								<div class="col-lg-3">
									<label>First Name:</label>
									<input type="text" name="fname" class="form-control text-line" id="fname"/>
								</div>
								<div class="col-lg-3">
									<label>Middle Initial:</label>
									<input type="text" name="mname" class="form-control text-line" id="mname"/>
								</div>
								<div class="col-lg-3">
									<label>Suffix:</label>
									<input type="text" name="suffix" class="form-control text-line" id="suffix" placeholder="Sr., Jr., I, II, III, etc."/>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-3">
									<label>Sex:</label>
									<div class="input-group mb-2">
										<select name="sex" class="form-select form-control text-line" id="gender">
											<option selected>Select</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2">
									<label>Birthday:</label>
									<div class="input-group date" id="bdaypicker">
										<input name="birthdate" class="form-control text-line" id="date" placeholder="MM/DD/YY" type="date"/>
										<div class="input-group-append"></div>
									</div>
								</div>
								<div class="col-lg-1">
									<label>Age:</label>
									<input type="text" name="age" class="form-control text-line" id="age" disabled/>
								</div>
								<div class="col-lg-3">
									<label>Civil Status:</label>
									<div class="input-group mb-3">
										<select name=civil_status class="form-select form-control text-line" id="civil_status">
											<option selected>Select</option>
											<option value="single">Single</option>
											<option value="married">Married</option>
											<option value="widow_widower">Widow/Widower</option>
											<option value="separated">Separated</option>
											<option value="living_in">Living-In</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end::Personal Information-->
			</div>
			<!--end::Personal Information Row-->



			<!--begin::Other Information Row-->  
			<div class="row" id="account-info">
				<!--begin::Other Information-->
				<div class="col-lg-12">
					<div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
						<!--begin::Header-->
						<div class="card-header">
							<h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>OTHER INFORMATION</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body dashboard-personal">
							<div class="form-group row">
								<div class="col-lg-3">
									<label>Region:</label>
									<div class="input-group mb-3 ">
										<select name="perm_reg_code" class="form-select form-control text-line" id="perm_reg_code">
											<option selected>Select</option>
											<option value="1">NCR</option>
											<option value="2">Region-4A CALABARZON</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Province/District:</label>
									<div class="input-group mb-3">
										<select name="perm_prov_dist_code" class="form-select form-control text-line" id="perm_prov_dist_code">
											<option selected>Select</option>
											<option value="1">Metro Manila</option>
											<option value="2">Cavite</option>
											<option value="3">Laguna</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Municipality/City:</label>
									<div class="input-group mb-3">
										<select name="perm_city_mun_codes" class="form-select form-control text-line" id="perm_city_mun_code">
											<option selected>Select</option>
											<option value="1">Manila</option>
											<option value="2">Quezon City</option>
											<option value="3">Laguna</option>
											<option value="4">Cavite</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Barangay:</label>
									<div class="input-group mb-3">
										<select name="perm_bgy_code" class="form-select form-control text-line" id="perm_bgy_code">
											<option selected>Select</option>
											<option value="1">Bgy 371</option>
											<option value="2">Santol</option>
											<option value="3">Batong Malake</option>
											<option value="4">Phase 2</option>		
										</select>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-10">
									<label>Street Address:</label>
									<div class="input-group">
										<input name="perm_street" type="text" class="form-control text-line" id="perm_street"/>
									</div>
								</div>
								<div class="col-lg-2">
									<label>Zip Code:</label>
									<div class="input-group" id="zipcode">
										<input name="perm_zip_code" type="text" class="form-control text-line" id="perm_zip_code"/>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-3">
									<label>Mobile No:</label>
									<div class="input-group">
										<input name="mobile" type="text" class="form-control text-line" id="mobile"/>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Email Address:</label>
									<div class="input-group" id="zipcode">
										<input name="email" type="email" class="form-control text-line" id="email"/>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Password:</label>
									<div class="input-group">
										<input name="password" type="password" class="form-control text-line" id="password"/>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Confirm Password:</label>
									<div class="input-group" id="zipcode">
										<input name="password_confirmation" type="password" class="form-control text-line" id="password_confirmation"/>
									</div>
								</div>
							</div>
						</div>
						<!--end::Body-->
					</div>
				</div>
				<!--end::Other Information-->
			</div>
			<!--end::Other Information Row-->



			<!--begin::Current Employment Row-->  
			<div class="row" id="account-info">
				<!--begin::Current Employment-->
				<div class="col-lg-12">
					<div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
						<!--begin::Header-->
						<div class="card-header">
							<h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>CURRENT EMPLOYMENT</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body dashboard-personal">
							<div class="form-group row">
								<div class="col-lg-3">
									<label>Region:</label>
									<div class="input-group mb-3">
										<select name="reg_code" class="form-select form-control text-line" id="reg_code">
											<option selected>Select</option>
											<option value="1">NCR</option>
											<option value="2">Region-4A CALABARZON</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Province/District:</label>
									<div class="input-group mb-3">
										<select name="prov_dist_code" class="form-select form-control text-line" id="prov_dist_code">
											<option selected>Select</option>
											<option value="1">Metro Manila</option>
											<option value="2">Cavite</option>
											<option value="3">Laguna</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Municipality/City:</label>
									<div class="input-group mb-3">
										<select name="city_mun_code" class="form-select form-control text-line" id="city_mun_code">
											<option selected>Select</option>
											<option value="1">Manila</option>
											<option value="2">Quezon City</option>
											<option value="3">Laguna</option>
											<option value="4">Cavite</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Barangay:</label>
									<div class="input-group mb-3">
										<select name="bgy_code" class="form-select form-control text-line" id="bgy_code">
											<option selected>Select</option>
											<option value="1">Bgy 371</option>
											<option value="2">Santol</option>
											<option value="3">Batong Malake</option>
											<option value="4">Phase 2</option>		
										</select>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-10">
									<label>Street Address:</label>
									<div class="input-group">
										<input name="street" type="text" class="form-control text-line" id="street"/>
									</div>
								</div>
								<div class="col-lg-2">
									<label>Zip Code:</label>
									<div class="input-group" id="zipcode">
										<input name="zip_code" type="text" class="form-control text-line" id="zip_code"/>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-10">
									<label>Office Name:</label>
									<div class="input-group">
										<input name="office_name" type="text" class="form-control text-line" id="office-name"/>
									</div>
								</div>
								<div class="col-lg-2">
									<label>Office Type:</label>
									<div class="input-group mb-3">
										<select name="office_type_id" class="form-select form-control text-line" id="office_type_id">
											<option selected>Select</option>
											<option value="1">LGU</option>
											<option value="2">NGA</option>
											<option value="3">SUC</option>
											<option value="4">Private ESP</option>	
											<option value="5">LS</option>
											<option value="6">CSO</option>
											<option value="7">Others</option>	
										</select>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-2">
									<label>Office Tel No:</label>
									<div class="input-group">
										<input name="contact_num" type="text" class="form-control text-line" id="contact_num"/>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Position:</label>
									<div class="input-group">
										<input name="position" type="text" class="form-control text-line" id="position"/>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Designation:</label>
									<div class="input-group">
										<input name="designation" type="text" class="form-control text-line" id="designation"/>
									</div>
								</div>
								<div class="col-lg-2">
									<label>Status of Appointment:</label>
									<div class="input-group mb-3">
										<select name="status_of_appointment" class="form-select form-control text-line" id="status_of_appointment">
											<option selected>Select</option>
											<option value="1">Permanent</option>
											<option value="2">Contract of Service</option>
											<option value="3">Casual</option>	
										</select>
									</div>
								</div>
							</div>
						</div>
						<!--end::Body-->
					</div>
				</div>
				<!--end::Current Employment-->
			</div>
			<!--end::Current Employment Row-->



			<!--begin::Primary Identification Row-->  
			<div class="row" id="account-info">
				<!--begin::Primary Identification-->
				<div class="col-lg-12">
					<div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
						<!--begin::Header-->
						<div class="card-header">
							<h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i></i>IDENTIFICATION CARD</span> &nbsp;<i>Primary</i></h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body dashboard-personal">
							<div class="form-group row mt-3">
								<div class="col-lg-2">
									<label>ID Selection:</label>
									<div class="input-group mb-3">
										<select name="id-selection-primary" class="form-select form-control text-line" id="id-selection-primary">
											<option selected>Select</option>
											<option value="primary">Primary</option>
											<option value="secondary">Secondary</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2">
									<label>Primary ID:</label>
									<div class="input-group mb-3">
										<select name="primary-id" class="form-select form-control text-line" id="primary-id">
											<option selected>Select</option>
											<option value="sss">SSS</option>
											<option value="umid">UMID</option>
											<option value="gsis">GSIS</option>
											<option value="driver">driver</option>
											<option value="prc">PRC</option>
											<option value="postal">Postal ID</option>
											<option value="passport">Passport</option>
											<option value="philhealth">PhilHealth ID</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2">
									<label>ID Number:</label>
									<div class="input-group">
										<input name="id-number-primary" type="text" class="form-control text-line" id="id-number-primary" placeholder="XXX-XXX-XXX-XXXX"/>
									</div>
								</div>
								<div class="col-lg-6">
									<label>Upload ID</label>
									<div>
										<label style="font-size: 12px;">Front</label>
										<div class="dropzone dropzone-default front_id border-success" id="kt_dropzone_1">
											<div class="dropzone-msg dz-message needsclick">
												<h3 class="dropzone-msg-title">Drop a file here or click to upload.</h3>
												<span class="dropzone-msg-desc">FRONT ID</span>
											</div>
										</div>
									</div>
									<div style="margin-top: 12px;">
										<label style="font-size: 12px;">Back</label>
										<div class="dropzone dropzone-default back_id border-success" id="kt_dropzone_2">
											<div class="dropzone-msg dz-message needsclick">
												<h3 class="dropzone-msg-title">Drop a file here or click to upload.</h3>
												<span class="dropzone-msg-desc">BACK ID</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Body-->
					</div>
				</div>
				<!--end::Primary Identification-->
			</div>
			<!--end::Primary Identification Row-->



			<!--begin::Secondary Identification Row-->  
			<div class="row" id="account-info">
				<!--begin::Secondary Identification-->
				<div class="col-lg-12">
					<div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
						<!--begin::Header-->
						<div class="card-header">
							<h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i></i>IDENTIFICATION CARD</span> &nbsp;<i>Secondary</i></h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->				
						<div class="card-body dashboard-personal">
							<div class="form-group row mt-3">
								<div class="col-lg-2">
									<label>ID Selection:</label>
									<div class="input-group mb-3">
										<select name="id-selection-secondary" class="form-select form-control text-line" id="id-selection-secondary">
											<option selected>Select</option>
											<option value="primary">Primary</option>
											<option value="secondary">Secondary</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2">
									<label>Primary ID:</label>
									<div class="input-group mb-3">
										<select name="primary-id-secondary" class="form-select form-control text-line" id="primary-id-secondary">
											<option selected>Select</option>
											<option value="sss">SSS</option>
											<option value="umid">UMID</option>
											<option value="gsis">GSIS</option>
											<option value="driver">driver</option>
											<option value="prc">PRC</option>
											<option value="postal">Postal ID</option>
											<option value="passport">Passport</option>
											<option value="philhealth">PhilHealth ID</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2">
									<label>ID Number:</label>
									<div class="input-group">
										<input name="id-number-secondary-1" type="text" class="form-control text-line" id="id-number-secondary-1" placeholder="XXX-XXX-XXX-XXXX"/>
									</div>
								</div>
								<div class="col-lg-6">
									<label>Upload ID - 1:</label>
									<div class="input-group">
										<input name="upload-id-1" type="text" class="form-control text-line" placeholder="Uploaded" disabled/>
									</div>
								</div>
							</div>
							<div class="form-group row mt-3">
								<div class="col-lg-2"></div>
								<div class="col-lg-2">
									<label>Secondary ID:</label>
									<div class="input-group mb-3">
										<select name="secondary-id" class="form-select form-control text-line" id="secondary_id">
											<option selected>Select</option>
											<option value="sss">SSS</option>
											<option value="umid">UMID</option>
											<option value="gsis">GSIS</option>
											<option value="driver">driver</option>
											<option value="prc">PRC</option>
											<option value="postal">Postal ID</option>
											<option value="passport">Passport</option>
											<option value="philhealth">PhilHealth ID</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2">
									<label>ID Number:</label>
									<div class="input-group">
										<input name="id-number-secondary-2" type="text" class="form-control text-line" id="id-number-secondary-2" placeholder="XXX-XXX-XXX-XXXX"/>
									</div>
								</div>
								<div class="col-lg-6">
									<label>Upload ID - 2</label>
									<div>
										<label style="font-size: 12px;">Front</label>
										<div class="dropzone dropzone-default front_id border-success" id="kt_dropzone_3">
											<div class="dropzone-msg dz-message needsclick">
												<h3 class="dropzone-msg-title">Drop a file here or click to upload.</h3>
												<span class="dropzone-msg-desc">FRONT ID</span>
											</div>
										</div>
									</div>
									<div style="margin-top: 12px;">
										<label style="font-size: 12px;">Back</label>
										<div class="dropzone dropzone-default back_id border-success">
											<div class="dropzone-msg dz-message needsclick" id="kt_dropzone_4">
												<h3 class="dropzone-msg-title">Drop a file here or click to upload.</h3>
												<span class="dropzone-msg-desc">BACK ID</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row mb-8">
							<div class="col-lg-10"></div>
							<div class="col-lg-2">
								{{--  <a class="btn btn-success font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" data-toggle="modal" id="modalBtn" data-target="#dataconsent_modal" data-attr="#dataconsent_modal">Submit</a>  --}}
								<button type="submit" class="btn btn-success font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Submit</button>
							</div>
						</div>
						<!--end::Body-->
					</div>
				</div>
				<!--end::Secondary Identification-->
			</div>
			<!--end::Secondary Identification Row-->

			</div>
		</div>
	</div>
	<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

				



<!--begin::Footer-->
<div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
	<!--begin::Container-->
	<div class=" container  d-flex flex-column flex-md-row align-items-center justify-content-between">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted font-weight-bold mr-2">2021 &nbsp;&copy;</span>
			<a href="#" target="_blank" class="text-dark-75 text-hover-primary">MyBusyBee</a>
		</div>
		<!--end::Copyright-->

		
	</div>
	<!--end::Container-->
</div>
<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
<!--end::Main-->

                    
               
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span></div>
<!--end::Scrolltop-->

	<!-- Data Consent Modal -->
	<div class="modal fade" id="dataconsent_modal" role="dialog">
		<div class="modal-dialog" style="margin-top:120px;">
			<div class="modal-content">
				<div class="modal-header" id="dataconsent_modalheader">
					<div>
						<span style="font-size: 20px; font-weight: 500;">Agree of the Data Consent</span>
					</div>
				</div>
				<div class="modal-body" id="dataconsent_modalbody">
					<form class="form">
						<div class="form-group" style="font-size: 16px;">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="trueDataConsent">
								<label class="form-check-label" for="trueDataConsent">
									I consent that all information provided are true.
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="privacyTerms">
								<label class="form-check-label" for="privacyTerms">
									I have read the Data Privacy Terms and Conditions
								</label>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-12" style="font-size: 14px;">
								<a class="text-success font-size-h6 text-hover-success pt-5" data-toggle="modal" id="dataprivacybtn" data-target="#dataPrivacy_modal" data-attr="#dataPrivacy_modal">
									Click Here
								</a>
								to read the <i style="font-size: 14px; color: black;">Data Privacy Terms and Conditions</i>
							</div>  
						</div>
					</form>
					<!--end::Form-->
				</div>
				<div class="modal-footer" id="dataconsent_modalfooter">
					<div class=" row">
						<div class="col-lg-12">
							<div class="pull-left">
								<button type="submit" class="btn btn-success mr-2" data-toggle="modal" id="reg_messagebtn" data-target="#reg_message" data-attr="#reg_message">Accept</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END OF Data Consent Modal -->

	<!-- Data Privacy Modal -->
	<div class="modal fade bd-example-modal-lg" id="dataPrivacy_modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header" id="dataPrivacy_modalheader">
					<div>
						<span style="font-size: 20px; font-weight: 500;">Data Privacy Terms and Condition</span>
					</div>
				</div>
				<div class="modal-body" id="dataPrivacy_modalbody">
					<!--start::Data Privacy Terms-->
					<span>
						This privacy policy ("policy") will help you understand how [name] ("us", "we", "our") uses and protects the data you provide to us when you visit and use [website]
						("website", "service").<br/>
						We reserve the right to change this policy at any given time, of which you will be promptly updated. If you want to make sure that you are
						up to date with the latest changes, we advise you to frequently visit this page.<br/>
						<br/>
						<p class="font-weight-bolder">What User Data We Collect</p> 
						When you visit the website, we may collect the following data:<br/>
						<ul>
							<li> IP address.</li>
							<li>Your contact information and email address.</li>
							<li>Other information such as interests and preferences.</li>
							<li>profile regarding your online behavior on our website.</li>

						</ul>
						
						<p class="font-weight-bolder">Why We Collect Your Data</p>	
						We are collecting your data for several reasons:<br/>
						<ul>
							<li>To better understand your needs.</li>
							<li>To improve our services and products.</li>
							<li>To send you promotional emails containing the information we think you will find interesting.</li>
							<li>To contact you to fill out surveys and participate in other types of market research.</li>
							<li>To customize our website according to your online behavior and personal preferences.</li>
						</ul>
						<p class="font-weight-bolder">Safeguarding and Securing the Data</p> 
						[name] is committed to securing your data and keeping it confidential. [name] has done all in its power to prevent data theft, unauthorized access, and disclosure
						by implementing the latest technologies and software, which help us safeguard all the information we collect online.<br/>
						<br/>
						<p class="font-weight-bolder">Our Cookie Policy</p> 
						Once you agree to allow our website to use cookies, you also agree to use the data it collects regarding your online behavior (analyze web traffic, web pages you
						spend the most time on, and websites you visit).<br/>
						The data we collect by using cookies is used to customize our website to your needs. After we use the data for statistical
						analysis, the data is completely removed from our systems.<br/>
						<br/>
						Please note that cookies don't allow us to gain control of your computer in any way. They are strictly used to monitor which pages you find useful and which you
						do not so that we can provide a better experience for you.<br/>
						If you want to disable cookies, you can do it by accessing the settings of your internet browser. (Provide links for cookie settings for major internet browsers).<br/>
						<br/>
						<p class="font-weight-bolder">Links to Other Websites</p> 
						Our website contains links that lead to other websites. If you click on these links [name] is not held responsible for your data and privacy protection. Visiting those
						websites is not governed by this privacy policy agreement. Make sure to read the privacy policy documentation of the website you go to from our website.<br/>
						<br/>
						<p class="font-weight-bolder">Restricting the Collection of your Personal Data</p> 
						At some point, you might wish to restrict the use and collection of your personal data. You can achieve this by doing the following:<br/>
						When you are filling the forms on the website, make sure to check if there is a box w hich you can leave unchecked, if you don't want to disclose
						your personal information.<br/>
						If you have already agreed to share your information with us, feel free to contact us via email and we will be more than happy to change this for you.<br/>
						[name] will not lease, sell or distribute your personal information to any third parties, unless we have your permission. We might do so if the law forces us. Your
						personal information will be used when we need to send you promotional materials if you agree to this privacy policy.<br/>
					</span>
					<!--end::Data Privacy Terms-->
				</div>
				<div class="modal-footer" id="dataPrivacy_modalfooter">
					<div class=" row">
						<div class="col-lg-12">
							<div class="pull-left">
								<a class="btn btn-success mr-2 dataPrivacybtn" data-toggle="modal" id="dataprivacy_accept" data-target="#dataconsent_modal" data-attr="#dataconsent_modal">Accept</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END OF Data Privacy Modal -->
	
	<!-- Thank you Message Modal -->
	<div class="modal fade" id="reg_message" role="dialog">
		<div class="modal-dialog" style="margin-top:190px;">
			<div class="modal-content">
				<div class="modal-body" id="reg_messagebody">
					<p style="font-size: 16px; text-align: center;">
						Thank you for registering.<br/>
						Please standby for your account<br/>
						to be approved.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- END OF Thank you Message -->



        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
				"breakpoints": {
					"sm": 576,
					"md": 768,
					"lg": 992,
					"xl": 1200,
					"xxl": 1200
				},
				"colors": {
					"theme": {
						"base": {
							"white": "#ffffff",
							"primary": "#6993FF",
							"secondary": "#E5EAEE",
							"success": "#1BC5BD",
							"info": "#8950FC",
							"warning": "#FFA800",
							"danger": "#F64E60",
							"light": "#F3F6F9",
							"dark": "#212121"
						},
						"light": {
							"white": "#ffffff",
							"primary": "#E1E9FF",
							"secondary": "#ECF0F3",
							"success": "#C9F7F5",
							"info": "#EEE5FF",
							"warning": "#FFF4DE",
							"danger": "#FFE2E5",
							"light": "#F3F6F9",
							"dark": "#D6D6E0"
						},
						"inverse": {
							"white": "#ffffff",
							"primary": "#ffffff",
							"secondary": "#212121",
							"success": "#ffffff",
							"info": "#ffffff",
							"warning": "#ffffff",
							"danger": "#ffffff",
							"light": "#464E5F",
							"dark": "#ffffff"
						}
					},
					"gray": {
						"gray-100": "#F3F6F9",
						"gray-200": "#ECF0F3",
						"gray-300": "#E5EAEE",
						"gray-400": "#D6D6E0",
						"gray-500": "#B5B5C3",
						"gray-600": "#80808F",
						"gray-700": "#464E5F",
						"gray-800": "#1B283F",
						"gray-900": "#212121"
					}
				},
				"font-family": "Poppins"
			};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Theme Bundle-->

        <!--begin::Page Scripts(used by this page)-->
        <script src="assets/js/pages/crud/file-upload/dropzonejs.js"></script>
        <!--end::Page Scripts-->

        <script>
           $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                    format: 'mm/dd/yy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);

				var showRegMessage = false;
				$('#reg_message').on('hidden.bs.modal', function () {
					 location.href=("{{route('login')}}");
				});

				$("#reg_messagebtn").click(function() {
					$('#dataconsent_modal').modal('hide');
					showRegMessage = true;
					$('#dataconsent_modal').on('hidden.bs.modal', function () {
						if (showRegMessage) {
							$('#reg_message').modal('show');
							showRegMessage = false;
						}
					});
				});
            });
			
			
			
        </script>
    </body>
    <!--end::Body-->
</html>