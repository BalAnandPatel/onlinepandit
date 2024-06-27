<?php
include "include/header.php";
?>
<main id="main" class="site-main clr" role="main">
	<div data-elementor-type="wp-page" data-elementor-id="873" class="elementor elementor-873">
		<section
			class="elementor-section elementor-top-section elementor-element elementor-element-32f36ca2 elementor-section-height-min-height elementor-section-items-bottom elementor-section-full_width elementor-section-height-default"
			data-id="32f36ca2" data-element_type="section"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
			<div class="elementor-background-overlay"></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1c85169e animated fadeInUp"
					data-id="1c85169e" data-element_type="column"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
					<div class="elementor-widget-wrap"></div>
				</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-58bf16bf animated fadeInUp"
					data-id="58bf16bf" data-element_type="column"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5c0b6e5 elementor-widget elementor-widget-heading"
							data-id="5c0b6e5" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h1 class="elementor-heading-title elementor-size-default">Contact Us</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-638d5b0c"
					data-id="638d5b0c" data-element_type="column">
					<div class="elementor-widget-wrap"></div>
				</div>
			</div>
		</section>
		<?php
		if (isset($_SESSION["contactSuccessMsg"])) {
			$success_msg = $_SESSION["contactSuccessMsg"];
			echo '<div class="alert alert-success rounded-0" style="color: #000; background-color: green; text-align:center; padding: 4px 100px;border-radius: 10px;" role="alert">' . $success_msg . '</div>';
			unset($_SESSION["contactSuccessMsg"]);
		} else if (isset($_SESSION["contactErrors"])) {
			$error_msg = $_SESSION["contactErrors"];
			echo '<div class="alert alert-danger rounded-0" role="alert">' . $error_msg . '</div>';
			unset($_SESSION["contactErrors"]);
		}
		?>
		<section
			class="elementor-section elementor-top-section elementor-element elementor-element-6a3ef68f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
			data-id="6a3ef68f" data-element_type="section"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7cd08e5a"
					data-id="7cd08e5a" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section
							class="elementor-section elementor-inner-section elementor-element elementor-element-eab7d62 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="eab7d62" data-element_type="section"
							data-settings="{&quot;_ha_eqh_enable&quot;:false}">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-13c56c4"
									data-id="13c56c4" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-5a02c66 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
											data-id="5a02c66" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
														<span class="elementor-icon elementor-animation-">
															<i aria-hidden="true" class="far fa-map"></i> </span>
													</div>
													<div class="elementor-icon-box-content">
														<h3 class="elementor-icon-box-title">
															<span>
																Address </span>
														</h3>
														<p class="elementor-icon-box-description">
															Uttar barthiya Durga Mandir Sarai palaya Bengaluru
															Karnataka,
															India. 560077</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a723cfe"
									data-id="a723cfe" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-4014123 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
											data-id="4014123" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
														<span class="elementor-icon elementor-animation-">
															<i aria-hidden="true" class="far fa-envelope"></i> </span>
													</div>
													<div class="elementor-icon-box-content">
														<h3 class="elementor-icon-box-title">
															<span>
																Email </span>
														</h3>
														<p class="elementor-icon-box-description">
															gauravpsln18@gmail.com</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7068548"
									data-id="7068548" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-3635bc0 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
											data-id="3635bc0" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
														<span class="elementor-icon elementor-animation-">
															<i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
													</div>
													<div class="elementor-icon-box-content">
														<h3 class="elementor-icon-box-title">
															<span>
																Phone </span>
														</h3>
														<p class="elementor-icon-box-description">
															(+91) 639-040-6468</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section
							class="elementor-section elementor-inner-section elementor-element elementor-element-2bee5947 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="2bee5947" data-element_type="section"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7a95668d"
									data-id="7a95668d" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-6a9c57d1 elementor-widget elementor-widget-google_maps"
											data-id="6a9c57d1" data-element_type="widget"
											data-widget_type="google_maps.default">
											<div class="elementor-widget-container">
												<div class="elementor-custom-embed">
													<iframe
														src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.7604780840634!2d77.62866559999999!3d13.050912499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae171f4d6bba4d%3A0x56545e57e152f91!2sJai%20Durga%20Ma%20Mandir!5e0!3m2!1sen!2sin!4v1718971344343!5m2!1sen!2sin"
														width="600" height="450" style="border:0;" allowfullscreen=""
														loading="lazy"
														referrerpolicy="no-referrer-when-downgrade"></iframe>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-777bc6be"
									data-id="777bc6be" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-f6b0a4e fluentform-widget-submit-button-custom elementor-widget elementor-widget-fluent-form-widget"
											data-id="f6b0a4e" data-element_type="widget"
											data-widget_type="fluent-form-widget.default">
											<div class="elementor-widget-container">
												<div
													class="fluentform-widget-wrapper hide-fluent-form-labels fluentform-widget-align-default">
													<div
														class="fluentform ff-default fluentform_wrapper_1 ffs_default_wrap">

														<?php
														if (isset($_SESSION["contactSuccessMsg"])) {
															$success_msg = $_SESSION["contactSuccessMsg"];
															echo '<div class="alert alert-success rounded-0" role="alert" style="width: max-content;">' . $success_msg . '</div>';
															unset($_SESSION["contactSuccessMsg"]);
														} else if (isset($_SESSION["galleryErrors"])) {
															$error_msg = $_SESSION["galleryErrors"];
															echo '<div class="alert alert-danger rounded-0" role="alert">' . $error_msg . '</div>';
															unset($_SESSION["galleryErrors"]);
														}
														?>

														<form action="admin/action/submit_contact.php"
															class="frm-fluent-form fluent_form_1 ff-el-form-top ff_form_instance_1_1 ffs_default ff-form-loaded"
															method="POST">
															<fieldset
																style="border: none!important;margin: 0!important;padding: 0!important;background-color: transparent!important;box-shadow: none!important;outline: none!important; min-inline-size: 100%;">
																<legend class="ff_screen_reader_title"
																	style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">
																	Contact Form Demo (#1)</legend>

																<div data-type="name-element" data-name="names"
																	class=" ff-field_container ff-name-field-wrapper">
																	<div class="ff-t-container">
																		<div class="ff-t-cell ">
																			<div
																				class="ff-el-group  ff-el-form-hide_label">
																				<div
																					class="ff-el-input--label ff-el-is-required asterisk-right">
																					<label for="ff_1_names_first_name_"
																						aria-label="First Name">First
																						Name</label>
																				</div>
																				<div class="ff-el-input--content">
																					<input type="text" name="first_name"
																						id="ff_1_names_first_name_"
																						class="ff-el-form-control"
																						placeholder="First Name"
																						aria-invalid="false"
																						aria-required="true" required>
																				</div>
																			</div>
																		</div>
																		<div class="ff-t-cell ">
																			<div
																				class="ff-el-group  ff-el-form-hide_label">
																				<div
																					class="ff-el-input--label ff-el-is-required asterisk-right">
																					<label for="ff_1_names_last_name_"
																						aria-label="Last Name">Last
																						Name</label>
																				</div>
																				<div class="ff-el-input--content">
																					<input type="text" name="last_name"
																						id="ff_1_names_last_name_"
																						class="ff-el-form-control"
																						placeholder="Last Name"
																						aria-invalid="false"
																						aria-required="true" required>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="ff-el-group ff-el-form-hide_label">
																	<div
																		class="ff-el-input--label ff-el-is-required asterisk-right">
																		<label for="ff_1_input_text"
																			aria-label="Mobile">Mobile</label>
																	</div>
																	<div class="ff-el-input--content">
																		<input type="text" name="mobile"
																			class="ff-el-form-control"
																			placeholder="Mobile" data-name="input_text"
																			id="ff_1_input_text" aria-invalid="false"
																			aria-required="true" required>
																	</div>
																</div>
																<div class="ff-el-group ff-el-form-hide_label">
																	<div
																		class="ff-el-input--label ff-el-is-required asterisk-right">
																		<label for="ff_1_email"
																			aria-label="Email">Email</label>
																	</div>
																	<div class="ff-el-input--content">
																		<input type="email" name="email" id="ff_1_email"
																			class="ff-el-form-control"
																			placeholder="Email Address"
																			data-name="email" aria-invalid="false"
																			aria-required="true" required>
																	</div>
																</div>
																<div class="ff-el-group">
																	<div class="ff-el-input--label asterisk-right">
																		<label for="ff_1_subject"
																			aria-label="Subject">Subject</label>
																	</div>
																	<div class="ff-el-input--content">
																		<input type="text" name="subject"
																			class="ff-el-form-control"
																			placeholder="Subject" data-name="subject"
																			id="ff_1_subject" aria-invalid="false"
																			aria-required="false" required>
																	</div>
																</div>
																<div class="ff-el-group">
																	<div
																		class="ff-el-input--label ff-el-is-required asterisk-right">
																		<label for="ff_1_message"
																			aria-label="Your Message">Your
																			Message</label>
																	</div>
																	<div class="ff-el-input--content">
																		<textarea aria-invalid="false"
																			aria-required="true" name="message"
																			id="ff_1_message" class="ff-el-form-control"
																			placeholder="Your Message" rows="4" cols="2"
																			data-name="message" required></textarea>
																	</div>
																</div>
																<div
																	class="ff-el-group ff-text-left ff_submit_btn_wrapper">
																	<button type="submit"
																		class="ff-btn ff-btn-submit ff-btn-md ff_btn_style">Submit
																		Form</button>
																</div>
															</fieldset>
														</form>
														<div id="fluentform_1_errors"
															class="ff-errors-in-stack ff_form_instance_1_1 ff-form-loading_errors ff_form_instance_1_1_errors">
														</div>
													</div>
													<script type="text/javascript">
														window.fluent_form_ff_form_instance_1_1 = {
															"id": "1",
															"settings": {
																"layout": {
																	"labelPlacement": "top",
																	"helpMessagePlacement": "with_label",
																	"errorMessagePlacement": "inline",
																	"asteriskPlacement": "asterisk-right"
																},
																"id": "39",
																"restrictions": {
																	"denyEmptySubmission": {
																		"enabled": false
																	}
																}
															},
															"form_instance": "ff_form_instance_1_1",
															"form_id_selector": "fluentform_1",
															"rules": {
																"names[first_name]": {
																	"required": {
																		"value": true,
																		"message": "First Name is required"
																	}
																},
																"names[middle_name]": {
																	"required": {
																		"value": false,
																		"message": "This field is required"
																	}
																},
																"names[last_name]": {
																	"required": {
																		"value": true,
																		"message": "Last Name is required"
																	}
																},
																"input_text": {
																	"required": {
																		"value": true,
																		"message": "Mobile Number is required"
																	}
																},
																"email": {
																	"required": {
																		"value": true,
																		"message": "Email is required"
																	},
																	"email": {
																		"value": true,
																		"message": "This field must contain a valid email"
																	}
																},
																"subject": {
																	"required": {
																		"value": false,
																		"message": "This field is required"
																	}
																},
																"message": {
																	"required": {
																		"value": true,
																		"message": "Your Message is required"
																	}
																}
															}
														};
													</script>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
	</div>
</main>
<?php
include "include/footer.php";
?>