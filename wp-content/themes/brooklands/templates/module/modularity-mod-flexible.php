<?php

    //Desktop image
    if (isset($module->meta['flexible_image'][0]) && !empty($module->meta['flexible_image'][0])) {
        $image = wp_get_attachment_image_src(
            $module->meta['flexible_image'][0],
            apply_filters('modularity/image/contact',
                municipio_to_aspect_ratio('16:9', array(1000, 400)),
                $args
            )
        );
        $image = $image[0];
    } else {
        $image = "";
    }

    //Mobile image
    if (isset($module->meta['flexible_image'][0]) && !empty($module->meta['flexible_image'][0])) {
        $image_mobile = wp_get_attachment_image_src(
            $module->meta['flexible_image'][0],
            apply_filters('modularity/image/contact',
                municipio_to_aspect_ratio('16:9', array(800, 400)),
                $args
            )
        );
        $image_mobile = $image_mobile[0];
    } else {
        $image_mobile = "";
    }
?>
<div class="flexible-container modularity-mod-flex <?php echo $module->meta['flexible_image_focal'][0]; ?> <?php echo $module->meta['flexible_layout'][0]; ?> background-<?php echo $module->meta['flexible_base_background'][0]; ?>">
<div class="section-image-mobile hidden-md hidden-lg ratio-16-9" style="background-image: url(<?php echo $image_mobile; ?>);"></div>
    <div class="container">
        <div class="grid">

            <div class="grid-xs-12 grid-md-7 grid-lg-5">
                <?php
                    if (!$module->hideTitle) {
                        echo '<h2>' . $module->post_title . '</h2>';
                    }
                    echo apply_filters( 'the_content', $module->meta['flexible_content'][0]);
                ?>
            </div>
        </div>
    </div>
    <div class="section-image hidden-xs hidden-sm" style="background-image: url(<?php echo $image; ?>);"></div>
</div>

