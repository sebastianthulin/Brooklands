@extends('templates.master')

@section('content')

<div class="cars-header" style="background-image:url('https://images.unsplash.com/photo-1445020569771-3f8531cf7a4b');">
    <div class="container">

        <div class="grid">

            <div class="grid-xs-12 text-center">
                <h1>Bilar i hallen just nu</h1>
            </div>

            <div class="grid-md-1"></div>

            <div class="grid-md-2">
                <label for="brand"><?php _e("Brand", 'brooklands'); ?></label>
                <span class="select-wrapper">
                    <select name="brand" id="brand" class="filter-trigger">
                        <option value=""><?php _e("Choose brand", 'brooklands'); ?></option>
                        @foreach($cars['option']['brand'] as $key => $term)
                            <option value="{{$term}}">{{$term}}</option>
                        @endforeach
                    </select>
                </span>
            </div>

            <div class="grid-md-2">
                <label for="year-from"><?php _e("Model year from", 'brooklands'); ?></label>
                <span class="select-wrapper">
                    <select name="year-from" id="year-from" class="filter-trigger">
                        <option value=""><?php _e("Choose a year", 'brooklands'); ?></option>
                        @foreach($cars['option']['year'] as $key => $term)
                            <option value="{{$term}}">{{$term}}</option>
                        @endforeach
                    </select>
                </span>
            </div>

            <div class="grid-md-2">
                <label for="year-to"><?php _e("Model year to", 'brooklands'); ?></label>
                <span class="select-wrapper">
                    <select name="year-to" id="year-to" class="filter-trigger">
                        <option value=""><?php _e("Choose a year", 'brooklands'); ?></option>
                        @foreach($cars['option']['year'] as $key => $term)
                            <option value="{{$term}}">{{$term}}</option>
                        @endforeach
                    </select>
                </span>
            </div>

            <div class="grid-md-2">
                <label for="price-from"><?php _e("Price from", 'brooklands'); ?></label>
                <span class="select-wrapper">
                    <select name="price-from" id="price-from" class="filter-trigger">
                        <option value=""><?php _e("Choose lowest price", 'brooklands'); ?></option>
                        @foreach($cars['option']['price'] as $key => $term)
                            <option value="{{$term}}">{{$term}}</option>
                        @endforeach
                    </select>
                </span>
            </div>

            <div class="grid-md-2">
                <label for="price-to"><?php _e("Price to", 'brooklands'); ?></label>
                <span class="select-wrapper">
                    <select name="price-to" id="price-to" class="filter-trigger">
                        <option value=""><?php _e("Choose highest price", 'brooklands'); ?></option>
                        @foreach($cars['option']['price'] as $key => $term)
                            <option value="{{$term}}">{{$term}}</option>
                        @endforeach
                    </select>
                </span>
            </div>

            <div class="grid-md-1"></div>

        </div>

        <div class="grid">
            <div class="grid-xs-12 text-center">
                <h4 class="in-stock"><?php _e("We have", 'brooklands'); ?> <u><?php echo count($cars['data']); ?></u> <?php _e("cars in stock", 'brooklands'); ?></h4>
            </div>
        </div>

        <div class="grid">
            <div class="grid-xs-12 text-center">
                <a href="#cars-list" class="btn btn-light btn-large"><?php _e("Show the cars", 'brooklands'); ?></a>
            </div>
        </div>

    </div>
</div>


<div class="container main-container car-container" id="cars-list">

    <div class="grid hidden-xs">

        <div class="grid-xs-12">

            <h5><?php _e("Sort by", 'brooklands'); ?></h5>

            <div class="filter-options">

                <div class="sort">
                    <input type="radio" id="sbrand" name="sort" value="brand" class="sort-trigger hidden">
                    <label for="sbrand" class="btn btn-subtle btn-medium"><?php _e("Brand", 'brooklands'); ?></label>

                    <input type="radio" id="smodel" name="sort" value="year" class="sort-trigger hidden" checked>
                    <label for="smodel" class="btn btn-subtle btn-medium"><?php _e("Yearmodel", 'brooklands'); ?></label>

                    <input type="radio" id="sdistance" name="sort" value="milage" class="sort-trigger hidden">
                    <label for="sdistance" class="btn btn-subtle btn-medium"><?php _e("Milage", 'brooklands'); ?></label>

                    <input type="radio" id="sprice" name="sort" value="price" class="sort-trigger hidden">
                    <label for="sprice" class="btn btn-subtle btn-medium"><?php _e("Price", 'brooklands'); ?></label>
                </div>

            </div>
        </div>

    </div>

    <div class="grid hidden-xs">

        <div class="grid-xs-4">
            <div class="padding">
                <input type="radio" id="az" name="order" value="asc" class="order-trigger hidden" checked>
                <label for="az" href="#az" class="alpha-sorting"><?php _e("A-Z", 'brooklands'); ?></label>

                <input type="radio" id="za" name="order" value="desc" class="order-trigger hidden">
                <label for="za" href="#za" class="alpha-sorting"><?php _e("Z-A", 'brooklands'); ?></label>
            </div>
        </div>

        <div class="grid-xs-8 text-right">
            <div class="padding pagination">
                <label><?php _e("Page", 'brooklands'); ?> <span class="current-page">1</span> <?php _e("of", 'brooklands'); ?> <span class="total-pages">2</span></label>
                <button class="btn btn-subtle"><</button>
                <button class="btn btn-subtle">></button>
            </div>
        </div>

    </div>


    <ul class="list grid">
        @while(have_posts())
            {!! the_post() !!}

            @if($cars['state'] === true)
                @foreach($cars['data'] as $car)
                    <li class="grid-xs-12 grid-sm-6 grid-md-4 grid-lg-3">
                        <a href="#modal-{{ $car['id'] }}">
                            <div class="img-container">
                                <img src="https://unsplash.it/300/300/?random&{{ $car['id'] }}" class="responsive" />
                                <span class="btn show-car-btn"><?php _e("Show car", 'brooklands') ;?></span>
                            </div>
                            <span class="brand">{{ $car['brand'] }}</span>
                            <span class="details">{{ $car['modeldescription'] }}</span>
                            <span class="f-price">{{ number_format_i18n(preg_replace("/[^0-9]/", "", $car['price-sek'])) }}:-</span>

                            <!-- Sort columns -->
                            <span class="year hidden">{{ (int) $car['yearmodel'] }}</span>
                            <span class="milage hidden">{{ (int) $car['miles'] }}</span>
                            <span class="price hidden">{{ preg_replace("/[^0-9]/", "", $car['price-sek']) }}</span>
                        </a>
                    </li>
                @endforeach
            @else
                <div class="grid-xs-12 text-center">
                    <h1>{{ $cars['data']['title'] }}</h1>
                    <p>{{ $cars['data']['content'] }}</p>
                </div>
            @endif

        @endwhile
    </ul>



     <div class="grid">
        <div class="grid-xs-12 text-right">
            <div class="padding pagination">
                <label>Sida 1 av 2</label>
                <button class="btn"><-</button>
                <button class="btn">-></button>
            </div>
        </div>

    </div>

    <div class="grid"></div>


    @if($cars['state'] === true)
        @foreach($cars['data'] as $car)

            <div id="modal-{{ $car['id'] }}" class="modal modal-backdrop-dark modal-medium" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="btn btn-close" href="#close"></a>
                        <h2 class="modal-title">{{ $car['brand'] }} {{ $car['model'] }} - {{ $car['modeldescription'] }}</h2>
                    </div>
                    <div class="modal-body">

                        <div class="grid">
                            <div class="slider slider-nav-bottom slider-nav-hover">
                                <ul class="grid">
                                @foreach ($car['images']['image'] as $index => $image)
                                    @if(!$index) @endif
                                    <li class="grid-sm-12">
                                    <div class="slider-image ratio-16-9" style="background-image:url('https://unsplash.it/1200/645/?random&{{ md5($image) }}');"></div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="grid">
                            <div class="grid-md-6">
                                <article>
                                    <table>
                                        <tr>
                                            <td class="strong"><?php _e("Name", 'brooklands'); ?>:</td>
                                            <td>{{ $car['brand'] }} {{ $car['model'] }} ({{ $car['modeldescription'] }})</td>
                                        </tr>

                                        <tr>
                                            <td class="strong"><?php _e("Yearmodel", 'brooklands'); ?>:</td>
                                            <td>{{ $car['yearmodel'] }}</td>
                                        </tr>

                                        <tr>
                                            <td class="strong"><?php _e("Milage", 'brooklands'); ?>:</td>
                                            <td>{{ $car['miles'] }} <?php _e("miles", 'brooklands'); ?></td>
                                        </tr>

                                        <tr>
                                            <td class="strong"><?php _e("Gearbox", 'brooklands'); ?>:</td>
                                            <td>{{ $car['gearboxtype'] }}</td>
                                        </tr>

                                        <tr>
                                            <td class="strong"><?php _e("Fuel", 'brooklands'); ?>:</td>
                                            <td>{{ $car['fueltype'] }}</td>
                                        </tr>

                                        <tr>
                                            <td class="strong"><?php _e("Body type", 'brooklands'); ?>:</td>
                                            <td>{{ $car['bodytype'] }}</td>
                                        </tr>

                                        <tr>
                                            <td class="strong"><?php _e("Color", 'brooklands'); ?>:</td>
                                            <td>{{ $car['color'] }}</td>
                                        </tr>
                                    </table>
                                </article>
                            </div>
                            <div class="grid-md-6">
                                <article>
                                    {!! apply_filters('the_content',$car['info']) !!}
                                </article>
                            </div>
                        </div>

                    </div>
                </div>
                <a href="#close" class="backdrop"></a>
            </div>

        @endforeach
    @endif

    <div class="grid hidden-lg hidden-xl">
        <div class="grid-sm-12">
            @include('partials.page-footer')
        </div>
    </div>

</div>

@stop
