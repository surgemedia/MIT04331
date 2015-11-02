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
    responsive:{
        600:{
            items:2
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
    
    var data = String(jQuery(data)[0].acf.sub_services[0].content);


    jQuery(container).html(data);
    


    });

    

}

function readMoreService (read_more_tag) {
    
        jQuery(read_more_tag).click(function(e){
            e.preventDefault();
            var url=jQuery(this).attr("data-url");
            var container= jQuery(this).attr("data-target");
            getServiceInfo(url,container);
            jQuery(this).hide();
          });
    

}
readMoreService(".read-services");


    console.log( "ready!" );
});