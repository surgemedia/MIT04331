jQuery( document ).ready(function() {
  
  /*=====================================
  =            Select Chosen            =
  =====================================*/
  jQuery(".form-field div select").chosen({disable_search_threshold: 10});
  
  /*===================================
  =            Owl Carousel           =
  ====================================*/
  var owl = jQuery(".owl-carousel");

  owl.owlCarousel({
  	
  	center:true,
    items:2,
    loop:true,
    margin:0,
    dots:false,
    navText:["NEXT","PREVIOUS"],
    responsiveBaseElement:".myCustomWrapper",
    responsive:{
        0:{
            items:1,
            nav:false
        },
        900:{
            items:2,
            nav:false
        },
        1200:{
            items:2,
            nav:false
        }
    }

  });

function showTeamContent (read_more_tag) {
    
        jQuery(read_more_tag).click(function(e){
            e.preventDefault();
            jQuery(this).parents(".small-block").addClass("open");
            
          });
    

}
showTeamContent(".info-more");

function closeTeamContent (read_more_tag) {
    
        jQuery(read_more_tag).click(function(e){
            e.preventDefault();
            jQuery(this).parents(".small-block").removeClass("open");
            
          });
    

}
closeTeamContent(".info-close");

// Go to the next item
jQuery('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
});
// Go to the previous item
jQuery('.customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
});

function getServiceInfo (url,container){

    jQuery.getJSON(url, function(data) {
    //alert(data); //uncomment this for debug
    //alert (data.item1+" "+data.item2+" "+data.item3); //further debug
    
    data = String(jQuery(data)[0].acf.sub_services[0].content);


    jQuery(container).html(data);
    jQuery(container+" .loading").hide();


    });

    

}

function readMoreService (read_more_tag) {
    
        jQuery(read_more_tag).click(function(e){
            e.preventDefault();
            var url=jQuery(this).attr("data-url");
            var container= jQuery(this).attr("data-target");
            
            console.log("here");
            jQuery(container+" .loading").addClass("show");
            getServiceInfo(url,container);
            jQuery(this).hide();
          });
    

}
readMoreService(".read-services");


    console.log( "ready!" );


/*======================================
=            Scrolling down            =
======================================*/

if (jQuery(window).width() <= 767){  
    // do something here
   jQuery('.scrollDown').click(function(e){
      e.preventDefault();
      jQuery('html, body').animate({
          scrollTop: jQuery( '.first:first' ).offset().top - 38
      }, 500);
      return false;
  });
  }


/*===========================================
=            Toggle Active Class            =
===========================================*/
var toggleActiveClass = {
   toggle : function(container){
    jQuery(container+" span").click(function(){
      jQuery(this).toggleClass("active");
      jQuery(this).siblings().removeClass("active");
    });
   }

};


toggleActiveClass.toggle(".contact-icons");


/*=============================================
  = Enabling multi-level navigation =
  ===============================================*/
// jQuery('.mega-menu-toggle').click(function() {
//    jQuery(this).toggleClass("mega-menu-open");
// });
/*=============================================
=            Scrolling Menu Mobile            =
=============================================*/
jQuery(window).resize(function(){

   if (jQuery(window).width() <= 768) {  
    var contentTop=0;
    var lastScrollTop = 0;
    jQuery(window).scroll(function(event) {
       var st = jQuery(this).scrollTop();
       var contentTop=parseInt(jQuery('.fluid-container').css('top'),10);
          
        if (st > lastScrollTop){
               // downscroll code
               if (contentTop===0 && st>64){
                  jQuery('.fluid-container').css('top','-=64');
                }
           } else {
              // upscroll code
              if (contentTop<0){
                 jQuery('.fluid-container').css('top','+=64');
              }
           }
         
       lastScrollTop = st;
    });

  }     

});

/*=========================================
=            Google Map Script            =
=========================================*/
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $el (jQuery element)
*  @return  n/a
*/

function new_map( $el ) {
  
  // var
  var $markers = $el.find('.marker');
  
  
  // vars
  var args = {
    zoom    : 16,
    center    : new google.maps.LatLng(0, 0),
    mapTypeId : google.maps.MapTypeId.ROADMAP,
    scrollwheel : false
  };
  
  
  // create map           
  var map = new google.maps.Map( $el[0], args);
  
  
  // add a markers reference
  map.markers = [];
  
  
  // add markers
  $markers.each(function(){
    
      add_marker( $(this), map );
    
  });
  
  
  // center map
  center_map( map );
  
  
  // return
  return map;
  
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $marker (jQuery element)
*  @param map (Google Map object)
*  @return  n/a
*/

function add_marker( $marker, map ) {

  // var
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  // create marker
  var marker = new google.maps.Marker({
    position  : latlng,
    map     : map
  });

  // add to array
  map.markers.push( marker );

  // if marker contains HTML, add it to an infoWindow
  if( $marker.html() )
  {
    // create info window
    var infowindow = new google.maps.InfoWindow({
      content   : $marker.html()
    });

    // show info window when marker is clicked
    google.maps.event.addListener(marker, 'click', function() {

      infowindow.open( map, marker );

    });
  }

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param map (Google Map object)
*  @return  n/a
*/

function center_map( map ) {

  // vars
  var bounds = new google.maps.LatLngBounds();

  // loop through all markers and create bounds
  $.each( map.markers, function( i, marker ){

    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

    bounds.extend( latlng );

  });

  // only 1 marker?
  if( map.markers.length === 1 )
  {
    // set center of map
      map.setCenter( bounds.getCenter() );
      map.setZoom( 16 );
  }
  else
  {
    // fit to bounds
    map.fitBounds( bounds );
  }

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type  function
*  @date  8/11/2013
*  @since 5.0.0
*
*  @param n/a
*  @return  n/a
*/
// global var
var map = null;

$(document).ready(function(){

  $('.acf-map').each(function(){

    // create map
    map = new_map( $(this) );

  });

});

})(jQuery);



});


