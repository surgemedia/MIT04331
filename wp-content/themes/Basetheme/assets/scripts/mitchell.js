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

    console.log( "ready!" );
});