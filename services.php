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
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>

<style>
    .custom-width-class {
        width: 23% !important;
        margin: 5px;
    }

    @media (max-width: 700px) {
        .custom-width-class {
            width: 48% !important;
        }
    }

    @media (max-width: 520px) {
        .custom-width-class {
            width: 100% !important;
        }
    }
</style>
      <main id="main" class="site-main clr" role="main">
        <div id="content-wrap" class="container clr">
          <div id="primary" class="content-area clr">
            <div id="content" class="site-content clr">
              <article class="single-page-article clr">
                <div class="entry clr" itemprop="text">
                  <div data-elementor-type="wp-page" data-elementor-id="838" class="elementor elementor-838">
                    <section
                      class="elementor-section elementor-top-section elementor-element elementor-element-1dc3d2d1 elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-bottom elementor-section-boxed elementor-section-height-default"
                      data-id="1dc3d2d1" data-element_type="section"
                      data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:1187,&quot;url&quot;:&quot;img\/IMG-20221016-WA0011.jpg&quot;},{&quot;id&quot;:1190,&quot;url&quot;:&quot;img\/IMG-20221016-WA0014.jpg&quot;},{&quot;id&quot;:1185,&quot;url&quot;:&quot;img\/IMG-20221016-WA0009.jpg&quot;},{&quot;id&quot;:1026,&quot;url&quot;:&quot;img\/MKvr3t.jpg&quot;}],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500,&quot;_ha_eqh_enable&quot;:false}">
                      <div
                        class="elementor-background-slideshow swiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl swiper-watch-progress"
                        dir="rtl">
                        <div class="swiper-wrapper" id="swiper-wrapper-87e55a2eead42c9c" aria-live="off"
                          style="transition-duration: 0ms;">
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate"
                            data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(0px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0011.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(1519px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0014.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(3038px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0009.jpg&quot;);"></div>
                          </div>
                          <div
                            class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(4557px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/MKvr3t.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate-active"
                            data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(6076px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/IMG-20221016-WA0011.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate-next"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(7595px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0014.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide" data-swiper-slide-index="2"
                            role="group" aria-label="3 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(9114px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0009.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-prev"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(10633px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/MKvr3t.jpg&quot;);"></div>
                          </div>
                          <div
                            class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate swiper-slide-visible swiper-slide-active"
                            data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 1; transform: translate3d(12152px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0011.jpg&quot;);"></div>
                          </div>
                          <div
                            class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate swiper-slide-next"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(13671px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0014.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(15190px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0009.jpg&quot;);"></div>
                          </div>
                          <div
                            class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(16709px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/MKvr3t.jpg&quot;);"></div>
                          </div>
                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                      </div>
                      <div class="elementor-background-overlay"></div>
                      <div class="elementor-container elementor-column-gap-default">
                        <div
                          class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d9f1060"
                          data-id="3d9f1060" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                              class="elementor-section elementor-inner-section elementor-element elementor-element-5b24a46c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                              data-id="5b24a46c" data-element_type="section"
                              data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                              <div class="elementor-container elementor-column-gap-no">
                                <div
                                  class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2bd7183a"
                                  data-id="2bd7183a" data-element_type="column">
                                  <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                      class="elementor-element elementor-element-f4745b3 elementor-widget elementor-widget-heading"
                                      data-id="f4745b3" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <h1 class="elementor-heading-title elementor-size-default">Discover What Gaurav Shastri Can Offer You</h1>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section
                              class="elementor-section elementor-inner-section elementor-element elementor-element-374ed4c2 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeIn"
                              data-id="374ed4c2" data-element_type="section"
                              data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:400,&quot;_ha_eqh_enable&quot;:false}">
                              <div class="elementor-container elementor-column-gap-narrow">
                                <div
                                  class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-778c7ca8"
                                  data-id="778c7ca8" data-element_type="column">
                                  <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                      class="elementor-element elementor-element-391fe58 elementor-align-right elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                      data-id="391fe58" data-element_type="widget" data-widget_type="button.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                          <a class="elementor-button elementor-button-link elementor-size-md"
                                            href="contact.php">
                                            <span class="elementor-button-content-wrapper">
                                              <span class="elementor-button-text">Contact Us</span>
                                            </span>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2dc34f30"
                                  data-id="2dc34f30" data-element_type="column">
                                  <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                      class="elementor-element elementor-element-5893ee77 elementor-align-left elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                      data-id="5893ee77" data-element_type="widget" data-widget_type="button.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                          <a class="elementor-button elementor-button-link elementor-size-md"
                                            href="about.php">
                                            <span class="elementor-button-content-wrapper">
                                              <span class="elementor-button-text">Learn About Us</span>
                                            </span>
                                          </a>
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
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-77e1dd2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="77e1dd2" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f2d6be"
            data-id="3f2d6be" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-c14cf71 elementor-widget elementor-widget-heading"
                    data-id="c14cf71" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Our Services</h2>
                    </div>
                </div>

                <?php
                $counter = 0;
                foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        ++$counter;
                        if ($counter == 0) {
                            ?>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-9cb13ec elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9cb13ec" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                <?php
                        }
                        ?>
                            <div class="custom-width-class elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-60cefe8"
                                data-id="60cefe8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div style="height: 100%;"
                                        class="elementor-element elementor-element-47e16f3 ha-card--top ha-card--tablet-top ha-card--mobile-top elementor-widget elementor-widget-ha-card happy-addon ha-card"
                                        data-id="47e16f3" data-element_type="widget" data-widget_type="ha-card.default">
                                        <div class="elementor-widget-container" style="height: 100%">
                                            <figure class="ha-card-figure">
                                                <img width="800" height="600" src="admin/image/event/<?= $value1->image; ?>"
                                                    class="attachment-large size-large wp-image-953" alt="" />
                                            </figure>
                                            <div class="ha-card-body">
                                                <h2 class="ha-card-title"><?php echo $value1->name; ?></h2>
                                                <p><b><?php echo $value1->description; ?></b></p>
                                                <a class="ha-btn" href="booknow.php"><span class="ha-btn-text">Book
                                                        Puja</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (intval($counter) / 4 == 0) {
                                echo "</section>";
                                ?>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-9cb13ec elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9cb13ec" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                <?php
                            }
                    }
                } ?>


            </div>
        </div>
</section>
<?php
include "include/footer.php";
?>