$(document).ready(function () {

    $("#add_product_links").hide();
    $("#add_product").click(function () {
        $("#add_product").hide();
        $("#add_product_links").show();
    });

    $(".attributes-dropdown").hide();

    $(".product").hover(
        function () {
            $(this).find(".attributes-dropdown").show(300);
        }, function () {
            $(this).find(".attributes-dropdown").hide();
        }
    );

    $("#attributes_filter").submit(function() {
        $(".attribute-filter-input").each(function( ) {
            if ($(this).val() == "") {
                //disable empty fields so they don't clutter up the url
                $(this).attr('disabled', true);
            }
        });
    });

    var items = [];

    $.getJSON( "http://tycoon-shop.internship1-dev.emag.local/app_dev.php/getproducts", function( data ) {
        $.each( data, function( key, val ) {
            items.push(val['name']);
        });
    });

    $(function() {
        $( "#search-bar" ).autocomplete({
            source: items
        });
    });
});


