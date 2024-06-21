	<?php
    include "include/header.php";
    $url = $URL . "gallery/read_gallery.php";
    $data = array();
    // print_r($data);
    $postdata = json_encode($data);
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
    $response = curl_exec($client);
    // print_r($response);
    $result = json_decode($response);
    //print_r($result);
    ?>
	<section class="elementor-section elementor-top-section elementor-element elementor-element-77e1dd2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="77e1dd2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
	    <div class="elementor-background-overlay"></div>
	    <div class="elementor-container elementor-column-gap-default">
	        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f2d6be" data-id="3f2d6be" data-element_type="column">
	            <div class="elementor-widget-wrap elementor-element-populated">
	                <div class="elementor-element elementor-element-c14cf71 elementor-widget elementor-widget-heading" data-id="c14cf71" data-element_type="widget" data-widget_type="heading.default">
	                    <div class="elementor-widget-container">
	                        <h2 class="elementor-heading-title elementor-size-default">Our Portfolio</h2>
	                    </div>
	                </div>
	                <section class="elementor-section elementor-inner-section elementor-element elementor-element-9cb13ec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9cb13ec" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
	                    <div class="elementor-container elementor-column-gap-default">

	                        <?php

                            $counter = 0;
                            foreach ($result as $key => $value) {
                                foreach ($value as $key1 => $value1) {
                            ?>
	                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-60cefe8" data-id="60cefe8" data-element_type="column">
	                                    <div class="elementor-widget-wrap elementor-element-populated">
	                                        <div class="elementor-element elementor-element-47e16f3 ha-card--top ha-card--tablet-top ha-card--mobile-top elementor-widget elementor-widget-ha-card happy-addon ha-card" data-id="47e16f3" data-element_type="widget" data-widget_type="ha-card.default">
	                                            <div class="elementor-widget-container">
	                                                <figure class="ha-card-figure">
	                                                    <img decoding="async" width="800" height="600" src="admin/image/gallery/gallery_img<?php echo $value1->id ;?>.png" class="attachment-large size-large wp-image-953" alt="" />
	                                                </figure>
	                                                <div class="ha-card-body">
	                                                    <h2 class="ha-card-title"><?php echo $value1->galleryTitle ;?></h2>
	                                                    <p><?php echo $value1->galleryDescription ;?></p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                        <?php }
                            } ?>
                            
	                    </div>
	                </section>

	            </div>
	        </div>
	    </div>
	</section>

	<?php
    include "include/footer.php";
    ?>