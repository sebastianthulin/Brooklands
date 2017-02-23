<?php

    //New cars controller
    $cars = new Brooklands\Controller\Cars();
    $cars = $cars->getCars()['car'];

    //Sorting
    if ($cars) {
        usort($cars, function ($a, $b) {
            return $b['id'] - $a['id'];
        });
    }

    //Only list first three
    $cars = array_slice($cars, 0, 3);

    //Get link name
    global $wpdb;
    $link_id = $wpdb->get_col("SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = '_wp_page_template' AND meta_value = 'cars.blade.php' LIMIT 1");

    if (is_array($link_id)) {
        $permalink = get_permalink(array_pop($link_id));
    } else {
        $permalink = "";
    }

?>
<div class="latest-car-container">
    <div class="container">
        <div class="grid">
            <div class="grid-xs-12">
                <?php
                    if (!$module->hideTitle) {
                        echo '<h2>' . $module->post_title . '</h2>';
                    }
                ?>
            </div>

            <?php foreach ($cars as $car) {
    ?>
                <div class="grid-xs-12 grid-md-3">
                    <a href="<?php echo $permalink; ?>#modal-<?php echo $car['id'];
    ?>">
                        <img src="http://placeholder.pics/svg/300" class="responsive" />
                        <span class="brand"><?php echo $car['brand'];
    ?></span>
                        <span class="details"><?php echo $car['modeldescription'];
    ?></span>
                        <span class="price"><?php echo preg_replace("/[^0-9]/", "", $car['price-sek']);
    ?>:-</span>
                    </a>
                </div>
            <?php
} ?>

            <div class="grid-xs-12 grid-md-3">
                <div class="squarebox">
                    <?php echo apply_filters('the_content', $module->post_content); ?>
                </div>
            </div>
        </div>
    </div>
</div>

