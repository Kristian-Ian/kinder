<!--<header class="mageStyle">-->
<!--    <img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/top_bg.png" alt="banner" class="zeroRadius"/>-->
<!--    <div class="topBanner fullAbsolute alignCenter">-->
<!--        <div class="mage_container">-->
<!--            <div class="mage_row">-->
<!--                <div class="col_3 sd_2 alignCenter">-->
<!--                    <img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/logo.png" alt="logo"/>-->
<!--                </div>-->
<!--                <div class="col_5 sd_6 alignCenter">-->
<!--                    <div class="textContent">-->
<!--                        <h3>What's Inside</h3>-->
<!--                        <h2 class="extraBold">The MagePeopleAddons Pro</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col_4">-->
<!--                    <div class="flexColumn top_icon_area">-->
<!--                        <ul class="flexEqual">-->
<!--                            <li></li>-->
<!--                            <li><a href="#"><img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/refresh.png" alt="refresh"/></a></li>-->
<!--                            <li><a href="#"><img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/rocket.png" alt="rocket"/></a></li>-->
<!--                        </ul>-->
<!--                        <ul class="flexEqual">-->
<!--                            <li><a href="#"><img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/setting.png" alt="settings"/></a></li>-->
<!--                            <li><a href="#"><img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/reading.png" alt="reading"/></a></li>-->
<!--                            <li><a href="#"><img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/graph.png" alt="graph"/></a></li>-->
<!--                        </ul>-->
<!--                        <ul class="flexEqual">-->
<!--                            <li><a href="#"><img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/gift.png" alt="gift"/></a></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<section class="mageStyle">
    <div class="unlimited_section">
        <div class="mage_container">
            <div class="mage_row">
                <div class="col_6 sd_12 alignCenter">
                    <div>
                        <span class="postDash buttonOutline allCenter" style="margin-bottom:30px;">PRO VERSION FEATURES</span>
                        <h2>Attendee Form buider for attendee management Pdf Ticket and Emailing Feature.</h2>
                        <p>Event Manager Pro feature include two addons form builder and pdf ticket and emailing feature. with this pro version someone can take any kind information of attendee, attendee list can be exported as CSV. pdf ticket can send to buyer email
                            after ticket purchasing etc.</p>
                        <div>
                            <div class="alignCenter content_area nowrap">
                                <img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/icon_1.png" alt="icon" />
                                <div class="textContent">
                                    <h4>Attendee Management</h4>
                                    <p>Attendee can be managed easily with attendee form builder and attendee information can edit also can export as CSV</p>
                                </div>
                            </div>
                            <div class="alignCenter content_area nowrap">
                                <img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/icon_2.png" alt="icon" />
                                <div class="textContent">
                                    <h4>PDF Ticketing </h4>
                                    <p>every ticket purchased a pdf ticket will be generate that can print as entry document, different pdf template possible.</p>
                                </div>
                            </div>
                            <div class="alignCenter content_area nowrap">
                                <img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/icon_3.png" alt="icon" />
                                <div class="textContent">
                                    <h4>Emailing Features</h4>
                                    <p>Pro version has email feature, after purchase complete, pdf ticket can send to buyer by email, it has customize email shortcode.</p>
                                </div>
                            </div>
                        </div>
                        <a href="https://mage-people.com/product/mage-woo-event-booking-manager-pro/" target="_blank" class="buttonOutline allCenter_radius_transition customButton">Buy Event Manager Pro Today</a>
                    </div>
                </div>
                <div class="col_6 sd_12">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'welcome/' ?>img/ullimited_img.png" alt="unlimited" />
                </div>
            </div>
        </div>
    </div>
    <div class="widget">
        <div class="mage_container">
            <div class="mage_row">
                <div class="col_12">
                    <div class="justifyCenter">
                        <span class="preDash postDash customButton allCenter">Available Supportive Addon List</span>
                    </div>
                    <h1 class="textCenter">Addons</h1>
                    <div class="justifyBetween">
                        <?php
                        $url = 'https://vaincode.com/update/addon-list.json';
                        $curl = curl_init();
                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($curl, CURLOPT_HEADER, false);
                        $data = curl_exec($curl);
                        curl_close($curl);
                        $obj = json_decode($data, true);

                        if (is_array($obj) && sizeof($obj) > 0) {
                        ?>
                            <div class="addon_list_sec">
                                <ul class="mep_addon_list">
                                    <?php foreach ($obj as $list) { ?>
                                        <li>
                                            <img src="<?php echo esc_url($list['banner']); ?>" alt="">
                                            <h3><?php echo esc_html($list['name']); ?></h3>
                                            <h4><?php echo esc_html($list['price']); ?></h4>
                                            <a href="<?php echo esc_url($list['url']); ?>" target="_blank"><?php echo esc_html($list['btn_txt']); ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="getPro">
        <div class="mage_container">
            <div class="mage_row">
                <div class="col_12">
                    <h2 class="textCenter">Get Pro and Others Available Addon to get all these exciting features</h2>
                    <div class="justifyCenter">
                        <a href="https://mage-people.com/product/mage-woo-event-booking-manager-pro/" target="_blank" class="prePostDash customButton allCenter">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .widget h3 {
        font-size: 18px;
    }
</style>