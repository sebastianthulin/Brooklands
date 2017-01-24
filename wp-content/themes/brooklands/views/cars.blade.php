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
                <label for="brand">Märke</label>
                <select id="brand">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div class="grid-md-2">
                <label for="brand">Märke</label>
                <select id="brand">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div class="grid-md-2">
                <label for="brand">Märke</label>
                <select id="brand">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div class="grid-md-2">
                <label for="brand">Märke</label>
                <select id="brand">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div class="grid-md-2">
                <label for="brand">Märke</label>
                <select id="brand">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div class="grid-md-1"></div>

        </div>

        <div class="grid">
            <div class="grid-xs-12 text-center">
                <h2 class="numberOfCarsInStock">Vi har <u>37</u> bilar i lager</h2>
            </div>
        </div>

        <div class="grid">
            <div class="grid-xs-12 text-center">
                <button class="btn btn-light">Visa bilarna</button>
            </div>
        </div>

    </div>
</div>


<div class="container main-container car-container">

    <div class="grid">

        <div class="grid-xs-12">

            <h4>Sortera efter</h4>

            <label for="brand">Märke</label>
            <label for="model">Modell</label>
            <label for="distance">Miltal</label>
            <label for="price">Pris</label>

            <div class="hidden">
                <input type="radio" id="brand" name="gender" value="male">
                <input type="radio" id="model" name="gender" value="female">
                <input type="radio" id="distance" name="gender" value="other">
                <input type="radio" id="price" name="gender" value="other">
            </div>
        </div>

    </div>

    <div class="grid">

        <div class="grid-xs-4">
            <div class="padding">
                <a href="">^ A-Ö</a>
                <a href="">v Ö-A</a>
            </div>
        </div>

        <div class="grid-xs-8 text-right">
            <div class="padding pagination">
                <label>Sida 1 av 2</label>
                <button class="btn"><-</button>
                <button class="btn">-></button>
            </div>
        </div>

    </div>

    <div class="grid">
        @while(have_posts())
            {!! the_post() !!}

            @for ($x = 0; $x <= 11; $x++)

            <div class="grid-xs-12 grid-sm-6 grid-md-3 grid-lg-3">
                <a href="#link">
                    <img src="http://placeholder.pics/svg/300" class="responsive" />
                    <span class="brand">Jaguar</span>
                    <span class="details">XE 2,0T Prestige 200HK</span>
                    <span class="price">1 000 000:-</span>
                </a>
            </div>

            @endfor

        @endwhile

    </div>

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


    <div class="grid hidden-lg hidden-xl">
        <div class="grid-sm-12">
            @include('partials.page-footer')
        </div>
    </div>

</div>

@stop
