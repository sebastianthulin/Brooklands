
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
                    @include('partials.mobile-menu')
                </div>
                <div class="grid-xs-12 grid-md-4">
                    Kontakt
                </div>
            </div>
        </div>
    </nav>
@endif
