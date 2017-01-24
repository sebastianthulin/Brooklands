@if (is_active_sidebar('slider-area') === true )
<div class="hero sidebar-slider-area">
    @if (is_active_sidebar('slider-area'))
        {{ dynamic_sidebar('slider-area') }}
    @endif

    @include('partials.stripe')

    @if (is_front_page() && get_field('front_page_hero_search', 'option') === true)
        {{ get_search_form() }}
    @endif

</div>
@else
<?php
    $featuredImage = null;

    if (is_single() || is_page()) {
        $featuredImage = wp_get_attachment_image_src(
            get_post_thumbnail_id(),
            apply_filters('brooklands/page_hero',
                municipio_to_aspect_ratio('10:3', array(1800, 540))
            )
        );
    }

    if (is_single() || is_page()) {
        $featuredImageMedium = wp_get_attachment_image_src(
            get_post_thumbnail_id(),
            apply_filters('brooklands/page_hero_mobile',
                municipio_to_aspect_ratio('10:5', array(1000, 600))
            )
        );
    }

    if (is_single() || is_page()) {
        $featuredImageMobile = wp_get_attachment_image_src(
            get_post_thumbnail_id(),
            apply_filters('brooklands/page_hero_mobile',
                municipio_to_aspect_ratio('1:1', array(500, 500))
            )
        );
    }

?>

@if (is_array($featuredImage))
<div class="hero hero-featured-image">
    <div class="slider ratio-10-3">
        <ul>
            <li>
                <div class="slider-image hidden-xs hidden-md" style="background-image:url('{{ $featuredImage[0] }}');"></div>
                <div class="slider-image hidden-xs hidden-lg" style="background-image:url('{{ $featuredImageMedium[0] }}');"></div>
                <div class="slider-image hidden-sm hidden-md hidden-lg" style="background-image:url('{{ $featuredImageMobile[0] }}');"></div>
            </li>
        </ul>
    </div>
</div>
@endif
@endif
