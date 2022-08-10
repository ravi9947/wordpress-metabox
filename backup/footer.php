<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div>
</div>

<?php
/**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action( 'generate_before_footer' );
?>

<div <?php generate_do_attr( 'footer' ); ?>>
	<?php
	/**
	 * generate_before_footer_content hook.
	 *
	 * @since 0.1
	 */
	do_action( 'generate_before_footer_content' );

	/**
	 * generate_footer hook.
	 *
	 * @since 1.3.42
	 *
	 * @hooked generate_construct_footer_widgets - 5
	 * @hooked generate_construct_footer - 10
	 */
	do_action( 'generate_footer' );

	/**
	 * generate_after_footer_content hook.
	 *
	 * @since 0.1
	 */
	do_action( 'generate_after_footer_content' );
	?>
</div>

<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action( 'generate_after_footer' );

wp_footer();
?>
<script>
   jQuery(document).on('ready', function() {
 
   
    jQuery(".postsliderrv").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
      jQuery(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
      });
	  
	  jQuery('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
  
    });
	
jQuery(sf2_advancedlocationtextsearch).attr("placeholder", "City");



</script>


 <script>
 
 function showProjectsbyCat( cat ){
  if ( cat == 'all'){
    jQuery('#projects-hidden .project').each(function(){
       var owl   = jQuery(".owl-carousel");
       elem      = jQuery(this).parent().html();

     
       owl.owlCarousel('add', elem).owlCarousel('update');
       jQuery(this).parent().remove();
    });
  }else{
    jQuery('#projects-hidden .project.'+ cat).each(function(){
       var owl   = jQuery(".owl-carousel");
       elem      = jQuery(this).parent().html();

      owl.owlCarousel('add', elem).owlCarousel('update');
       jQuery(this).parent().remove();
    });

    jQuery('#projects-carousel .project:not(.project.'+ cat + ')').each(function(){
       var owl   = jQuery(".owl-carousel");
       targetPos = jQuery(this).parent().index();
       elem      = jQuery(this).parent();

       jQuery( elem ).clone().appendTo( jQuery('#projects-hidden') );
       owl.owlCarousel('remove', targetPos).owlCarousel('update');;
    });
  }
}

jQuery(window).load(function(){
  
    //Click event for filters
    jQuery('#project-terms a').click(function(e){
        e.preventDefault();
        jQuery('#project-terms a').removeClass('active');

        cat = jQuery(this).attr('ID');
        jQuery(this).addClass('active');
        showProjectsbyCat( cat );
        //alert('filtering'+ cat);
    });
  
   //Initialize owl carousel
    jQuery("#projects-carousel").owlCarousel({

    // Most important owl features
		items : 3, 
		//loop:true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navText: false,
        dots: false,
        //animateOut: 'fadeOut',
        //animateIn: 'fadeIn',
        smartSpeed: 450, 
        responsiveClass: true,
        responsive: {
            0: {
				 centerMode: true,
                items: 1,
                nav: false,
                dots: true
            },
            768: {
                items: 3
            }
        }
    }
  );
});
 jQuery("#gtranslate-2 option[value='en|en']").prop('selected',true);
 </script>

 
</body>
</html>