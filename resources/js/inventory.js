$(document).ready(function(){
                
                $(document).on("click",".product",function(){
                    var id = this.id.split('_');
                    var title = $("#title_"+id[1]).text();
                    var image = $("#img_"+id[1]).html();
                    var desc = $("#desc_"+id[1]).text();
                    var price = $("#price_"+id[1]).text();
                    var selectt = $("#select_"+id[1]).html();
                    var qty = $("#qty_"+id[1]).text();
                    var more = $("#moreimg_"+id[1]).html();
                    
                    
                    var $isrc = $("#img_"+id[1]+" img").attr('src');
                    
                //  var $dsrc = $("#img_"+id[1]+" img").attr('data-src');
                    
                    //var r = "position:'inside',showTitle:false,adjustX:-4,adjustY:-4";
                    
                    <!--var i = "<a href='http://placehold.it/800x600' class='cloud-zoom' id='zoom1' rel=''><img src='http://placehold.it/800x600' width='560' /></a>";
                    //alert(i);
                    $("#product_select").html('');
                    $("#product_image").html(image);
                    $("#product_image").append(more);
                //  var i = $("#product_image .mup").append('<div class="col-sm-4 mtop"><img src="'+$isrc+'"></div>');
                //  $("#product_image").append(isrc);
                    $("#product_title").html(title);
                    $("#product_desc").html(desc);
                    $("#product_price").html(price);
                    $("#product_select").html(selectt);
                    $("#product_qty").html(qty);
                    
                });
                
                $(".inline").colorbox({inline:true, width:"70%", height:"550"});
                
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
                
                $(document).on("click","#product_image .mup img",function(){
                    var $ci =  $(this).attr('src');
                    $("#product_image img.mainimage").attr("src",$ci);
                });
            });

(function() {
    var matched, browser;

    // Use of jQuery.browser is frowned upon.
    // More details: http://api.jquery.com/jQuery.browser
    // jQuery.uaMatch maintained for back-compat
    jQuery.uaMatch = function( ua ) {
        ua = ua.toLowerCase();

        var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
            /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
            /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
            /(msie) ([\w.]+)/.exec( ua ) ||
            ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
            [];

        return {
            browser: match[ 1 ] || "",
            version: match[ 2 ] || "0"
        };
    };

    matched = jQuery.uaMatch( navigator.userAgent );
    browser = {};

    if ( matched.browser ) {
        browser[ matched.browser ] = true;
        browser.version = matched.version;
    }

    // Chrome is Webkit, but Webkit is also Safari.
    if ( browser.chrome ) {
        browser.webkit = true;
    } else if ( browser.webkit ) {
        browser.safari = true;
    }

    jQuery.browser = browser;
})();