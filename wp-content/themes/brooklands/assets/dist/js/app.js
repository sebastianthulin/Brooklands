var Brooklands;

Brooklands = Brooklands || {};
Brooklands.ExampleNamespace = Brooklands.Liquid || {};

Brooklands.ExampleNamespace.ExampleClass = (function ($) {

	var classVariable = false;

    /**
     * Constructor
     * Should be named as the class itself
     */
	function ExampleClass() {

    }

    /**
     * Method
     */
    ExampleClass.prototype.exampleMethod = function () {

    }

	return new ExampleClass();

})(jQuery);
