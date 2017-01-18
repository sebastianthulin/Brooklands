<div class="latest-car-container">
    <div class="container">
        <div class="grid">
            <div class="grid-xs-12">
                <?php
                    if(!$module->hideTitle) {
                        echo '<h2>' . $module->post_title . '</h2>';
                    }
                ?>
            </div>
            <div class="grid-xs-12 grid-md-3">
                <a href="#link">
                    <img src="http://placeholder.pics/svg/300" class="responsive" />
                    <span class="brand">Jaguar</span>
                    <span class="details">XE 2,0T Prestige 200HK</span>
                    <span class="price">1 000 000:-</span>
                </a>
            </div>
            <div class="grid-xs-12 grid-md-3">
                <a href="#link">
                    <img src="http://placeholder.pics/svg/300" class="responsive" />
                    <span class="brand">Jaguar</span>
                    <span class="details">XE 2,0T Prestige 200HK</span>
                    <span class="price">1 000 000:-</span>
                </a>
            </div>
            <div class="grid-xs-12 grid-md-3">
                <a href="#link">
                    <img src="http://placeholder.pics/svg/300" class="responsive" />
                    <span class="brand">Jaguar</span>
                    <span class="details">XE 2,0T Prestige 200HK</span>
                    <span class="price">1 000 000:-</span>
                </a>
            </div>
            <div class="grid-xs-12 grid-md-3">
                <div class="squarebox">
                    <?php echo apply_filters( 'the_content', $module->post_content); ?>
                </div>
            </div>
        </div>
    </div>
</div>

