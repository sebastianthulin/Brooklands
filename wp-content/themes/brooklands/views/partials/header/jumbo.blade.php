
<nav class="navbar navbar-mainmenu hidden-print">
    <div class="container">
        <div class="grid">
            <div class="grid-xs-12 {!! apply_filters('Municipio/header_grid_size','grid-md-12'); !!}">
                <div class="grid">
                    <div class="grid-sm-12">
                        {!! municipio_get_logotype(get_field('header_logotype', 'option'), get_field('logotype_tooltip', 'option')) !!}
                        <a href="#mobile-menu" data-target="#mobile-menu" class="{!! apply_filters('Municipio/mobile_menu_breakpoint','hidden-md hidden-lg'); !!} menu-trigger"><span class="menu-icon"></span> <?php _e("Menu",'brooklands'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

@if (strlen($navigation['mobileMenu']) > 0)
    <nav id="mobile-menu" class="nav-mobile-menu nav-toggle-expand nav-toggle {!! apply_filters('Municipio/mobile_menu_breakpoint','hidden-md hidden-lg'); !!} hidden-print">
        @include('partials.mobile-menu')
    </nav>
@endif
