Brooklands = Brooklands || {};
Brooklands.Cars = Brooklands.Cars || {};

Brooklands.Cars.Cars = (function ($) {

    function Cars() {
        var carsList = new List('cars-list', {
            valueNames: ['brand', 'details', 'price', 'model', 'milage', 'year'],
            page: 12,
            pagination: true
        });

        $(".filter-trigger").change(carsList, function() {

            var values_brand        = $("#brand").val();
            var values_yearFrom     = $("#year-from").val();
            var values_YearTo       = $("#year-to").val();
            var values_priceFrom    = $("#price-from").val();
            var values_priceTo      = $("#price-to").val();

            carsList.filter(function(item) {
                return      ( values_brand == item.values().brand || !values_brand)

                        &&  ( values_yearFrom <= item.values().year || !values_yearFrom)
                        &&  ( values_YearTo >= item.values().year || !values_YearTo)

                        &&  ( values_priceFrom >= item.values().price || !values_priceFrom)
                        &&  ( values_priceTo <= item.values().price || !values_priceTo)
            }.bind(this));

        });

        $(".sort-trigger, .order-trigger").change(carsList, function(){

            var sorting     = $(".sort-trigger:checked").val();
            var ordering    = $(".order-trigger:checked").val();

            console.log("hello", sorting, ordering);

            carsList.sort(sorting, { order: ordering });
        });
    }

    return new Cars();

})(jQuery);
