
<nav class="navbar navbar-mainmenu hidden-print">
    <div class="container">
        <div class="grid">
            <div class="grid-xs-12 {!! apply_filters('Municipio/header_grid_size','grid-md-12'); !!}">
                <div class="grid">
                    <div class="grid-sm-12">
                        {!! municipio_get_logotype(get_field('header_logotype', 'option'), get_field('logotype_tooltip', 'option')) !!}
                        <a href="#mobile-menu" data-target="#mobile-menu" class="{!! apply_filters('Municipio/mobile_menu_breakpoint','hidden-md hidden-lg'); !!} menu-trigger"><?php _e("Menu",'brooklands'); ?><span class="menu-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

@if (strlen($navigation['mobileMenu']) > 0)
    <nav id="mobile-menu" class="nav-mobile-menu nav-toggle-expand nav-toggle {!! apply_filters('Municipio/mobile_menu_breakpoint','hidden-md hidden-lg'); !!} hidden-print">
        <div class="container">
            <div class="grid">
                <div class="grid-xs-12 grid-md-8">
                    {!!
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => 'nav',
                            'container_class' => 'hidden-print',
                            'container_id' => '',
                            'menu_class' => 'navigation',
                            'menu_id' => 'main-menu',
                            'echo' => 'echo',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'depth' => 2,
                            'fallback_cb' => '__return_false'
                        ));
                    !!}
                </div>
                <div class="grid-xs-12 grid-md-4">

                    <div id="social-detials">
                        <!-- Social -->
                        @if(!empty(\Brooklands\Admin\Options::getSocialArray()))
                            <h5>
                                <?php _e("Brooklands on", 'brooklands'); ?>
                                {!! implode(", ", \Brooklands\Admin\Options::getSocialArray()) !!}
                            </h5>
                        @endif
                    </div>

                    <div id="contact-details">

                        <!-- Company name -->
                        @if(\Brooklands\Admin\Options::getGeneralOptions('name'))
                            <h5>{{ \Brooklands\Admin\Options::getGeneralOptions('name') }}</h5>
                        @endif

                        <!-- Company open hours -->
                        @if(\Brooklands\Admin\OpenHours::getWeekSchedule())
                            <div class="grid">
                                @foreach(\Brooklands\Admin\OpenHours::getWeekSchedule() as $key => $item)
                                    <div class="grid-xs-5">{{ $item[0] }}</div>
                                    <div class="grid-xs-7 text-right">{{ $item[1] }}</div>
                                @endforeach
                            </div>
                        @endif

                         <!-- Company phone number -->
                        @if(\Brooklands\Admin\Options::getGeneralOptions('phone_number'))
                            <div class="grid">
                                <div class="grid-xs-5 strong">
                                    {{ __("Phone", 'brooklands') }}
                                </div>
                                <div class="grid-xs-7 text-right">
                                    <a href="tel:+46{{ (int) preg_replace("/[^0-9]/","", \Brooklands\Admin\Options::getGeneralOptions('phone_number')) }}">
                                        {{ \Brooklands\Admin\Options::getGeneralOptions('phone_number') }}
                                    </a>
                                </div>
                            </div>
                        @endif

                        <!-- Company email -->
                        @if(\Brooklands\Admin\Options::getGeneralOptions('email_adress'))
                            <div class="grid">
                                <div class="grid-xs-4 strong">
                                    {{ __("Email", 'brooklands') }}
                                </div>
                                <div class="grid-xs-8 text-right">
                                    <a href="mailto:{{ \Brooklands\Admin\Options::getGeneralOptions('email_adress') }}">
                                        {{ \Brooklands\Admin\Options::getGeneralOptions('email_adress') }}
                                    </a>
                                </div>
                            </div>
                        @endif

                    </div>

                </div>

            </div>
        </div>
    </nav>
@endif
