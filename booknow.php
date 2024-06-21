<?php
include "include/header.php";
$url = $URL . "events/read_events.php";
$data = array();
// print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
// print_r($response);
$result = json_decode($response);
// print_r($result);
?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-5c1e222c elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="5c1e222c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-77714a6c animated-slow elementor-invisible" data-id="77714a6c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-background-overlay"></div>
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-23fdc1c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="23fdc1c" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-71a2dfd" data-id="71a2dfd" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-49ea376 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="49ea376" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Book Your Puja</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-dd7d66f elementor-widget elementor-widget-text-editor" data-id="dd7d66f" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>Please fill this form to book a north Indian pandit for a puja or occasion.</p>
                                    </div>
                                </div>

                                <?php
                                if (isset($_SESSION["bookingSuccessMsg"])) {
                                    $success_msg = $_SESSION["bookingSuccessMsg"];
                                    echo '<div class="alert alert-success rounded-0" style="color: #000; background-color: green; text-align:center; padding: 4px 100px;border-radius: 10px;" role="alert">' . $success_msg . '</div>';
                                    unset($_SESSION["bookingSuccessMsg"]);
                                } else if (isset($_SESSION["bookingErrors"])) {
                                    $error_msg = $_SESSION["bookingErrors"];
                                    echo '<div class="alert alert-danger rounded-0" role="alert">' . $error_msg . '</div>';
                                    unset($_SESSION["bookingErrors"]);
                                }
                                ?>
                                <br>
                                <div class="elementor-element elementor-element-891113f fluentform-widget-submit-button-center fluentform-widget-submit-button-custom elementor-widget elementor-widget-fluent-form-widget" data-id="891113f" data-element_type="widget" data-widget_type="fluent-form-widget.default">
                                    <div class="elementor-widget-container">
                                        <div class="fluentform-widget-wrapper fluentform-widget-align-default">
                                            <div class='fluentform ff-default fluentform_wrapper_2 ffs_default_wrap'>

                                                <form action="admin/action/insert_booking.php" class="frm-fluent-form fluent_form_2 ff-el-form-top ff_form_instance_2_1 ff-form-loading ffs_default" method="POST">
                                                    <fieldset style="border: none!important;margin: 0!important;padding: 0!important;background-color: transparent!important;box-shadow: none!important;outline: none!important; min-inline-size: 100%;">
                                                        <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Puja Booking</legend>

                                                        <div data-type="name-element" class=" ff-field_container ff-name-field-wrapper">
                                                            <div class='ff-t-container'>
                                                                <div class='ff-t-cell '>
                                                                    <div class='ff-el-group  ff-el-form-hide_label'>
                                                                        <div class="ff-el-input--label ff-el-is-required asterisk-right">
                                                                            <label for='ff_2_names_first_name_' aria-label="First Name">First Name</label>
                                                                        </div>
                                                                        <div class='ff-el-input--content'>
                                                                            <input type="text" name="first_name" required id="ff_2_names_first_name_" class="ff-el-form-control" placeholder="First Name" aria-invalid="false" aria-required=true>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='ff-t-cell '>
                                                                    <div class='ff-el-group  ff-el-form-hide_label'>
                                                                        <div class="ff-el-input--label ff-el-is-required asterisk-right">
                                                                            <label for='ff_2_names_last_name_' aria-label="Last Name">Last Name</label>
                                                                        </div>
                                                                        <div class='ff-el-input--content'>
                                                                            <input type="text" name="last_name" required id="ff_2_names_last_name_" class="ff-el-form-control" placeholder="Last Name" aria-invalid="false" aria-required=true>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='ff-el-group ff-el-form-hide_label'>
                                                            <div class="ff-el-input--label ff-el-is-required asterisk-right">
                                                                <label for='ff_2_input_text' aria-label="Mobile">Mobile</label>
                                                            </div>
                                                            <div class='ff-el-input--content'>
                                                                <input type="text" name="mobile" class="ff-el-form-control" required placeholder="Mobile" data-name="input_text" id="ff_2_input_text" aria-invalid="false" aria-required=true>
                                                            </div>
                                                        </div>
                                                        <div class='ff-el-group'>
                                                            <div class="ff-el-input--label ff-el-is-required asterisk-right">
                                                                <label for='ff_2_dropdown' aria-label="Looking For :">Looking For :</label>
                                                            </div>
                                                            <div class='ff-el-input--content'>
                                                                <select name="event" id="ff_2_dropdown" required class="ff-el-form-control" data-name="dropdown" data-calc_value="0" aria-invalid="false" aria-required=true>
                                                                    <option value="">- Select -</option>
                                                                    <?php
                                                                    $counter = 0;
                                                                    foreach ($result as $key => $value) {
                                                                        foreach ($value as $key1 => $value1) {

                                                                    ?>
                                                                            <option value="<?php echo $value1->id; ?>"><?php echo $value1->name; ?></option>
                                                                    <?php }
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class='ff-el-group ff-el-form-hide_label'>
                                                            <div class="ff-el-input--label ff-el-is-required asterisk-right">
                                                                <label for='ff_2_input_text' aria-label="Message">Message</label>
                                                            </div>
                                                            <div class='ff-el-input--content'>
                                                                <textarea type="text" name="message" class="ff-el-form-control" placeholder="Message...." data-name="input_text" id="ff_2_input_text" aria-invalid="false" aria-required=true></textarea>
                                                            </div>
                                                        </div>
                                                        <div class='ff-el-group ff-text-left ff_submit_btn_wrapper'>
                                                            <button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style">Book Now</button>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                                <div id='fluentform_2_errors' class='ff-errors-in-stack ff_form_instance_2_1 ff-form-loading_errors ff_form_instance_2_1_errors'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5b6534a" data-id="5b6534a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-55765cd elementor-invisible elementor-widget elementor-widget-text-editor" data-id="55765cd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>With <strong>onlinepandit.in</strong>, booking the best North Indian pandit in Bangalore is a breeze. It’s a matter of some clicks. Thanks to the advancement in the technology sector, booking the best pandits
                                            has become easier than ever. No longer do you need to knock on the doors of pandits physically or wait for hours in mandirs to have a discussion with an expert pandit. You can book all types of puja services
                                            online from the comfort of your home.</p>
                                        <p>Our website is responsive enough and you can open it using your mobile browser. Probably you are reading this right from your mobile device. You just need to open the website in your browser and fill out the
                                            quote form. While filling out the quote form, you should not forget to enter the reason for the puja, date, time, and venue. Along with all these, you should also provide your contact details so that pandit
                                            Ji can communicate with you instantly and confirm the booking.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="elementor-element elementor-element-2715bc3 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="2715bc3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        Our team will review the provided details and check our pandit’s availability. If you have any special requirements, you can mention the same on the quote form. Generally, we help our users with a complete checklist for all readily available items that
                        they need to perform puja in an error-free manner. All the package details you will get on the website. Browse a little and you will get all the information that you need before hiring a pandit online.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "include/footer.php";
?>