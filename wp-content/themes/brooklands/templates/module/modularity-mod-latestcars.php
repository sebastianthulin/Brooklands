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

            <?php foreach ($cars as $car) { ?>
                <div class="grid-xs-12 grid-md-3">
                    <a href="/vara-bilar/#modal-<?php echo $car['id']; ?>">
                        <img src="http://placeholder.pics/svg/300" class="responsive" />
                        <span class="brand"><?php echo $car['brand']; ?></span>
                        <span class="details"><?php echo $car['modeldescription']; ?></span>
                        <span class="price"><?php echo preg_replace("/[^0-9]/", "", $car['price-sek']); ?>:-</span>
                    </a>
                </div>
            <?php } ?>

            <div class="grid-xs-12 grid-md-3">
                <div class="squarebox">
                    <?php echo apply_filters('the_content', $module->post_content); ?>
                </div>
            </div>
        </div>
    </div>
</div>

