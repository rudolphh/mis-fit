<!-- Scripts -->
<script src="/js/app.js"></script>

<!-- <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script> -->



<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js" ></script>


<script type="text/javascript">


// any alert thats not important, show for 5 seconds and slide up to hide
$('div.alert').not('div.alert-important').delay(5000).slideUp(300);



  // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
  $('.dropdown').on('show.bs.dropdown', function(e){

    //$('#left-nav').css('display', 'block');

    $(this).find('.dropdown-menu').first().stop(true, true).toggle(1, function(){
    	$(this).parent().addClass('open');
      //$('.dropdown-menu').css('display', 'inline-flex');
    });
  });

// ADD SLIDEUP ANIMATION TO DROPDOWN //
$('.dropdown').on('hide.bs.dropdown', function(e){
  e.preventDefault();
  $(this).find('.dropdown-menu').first().stop(true, true).toggle(1, function(){
    $(this).parent().removeClass('open');
    //$('#left-nav').css('display', 'inline-flex');

  });
});


//for MOBILE : close the main navbar when clicked away from it
$(document).click(function (event) {
  
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");               
    var _opened = $navbar.hasClass("in");

    if (_opened === true && !clickover.hasClass("navbar-toggle")) {  
     
      if( $('.navbar-toggle').is(":visible") ){
          if ($('.dropdown-menu').is(":visible")){
            $('.dropdown-menu').collapse('hide');
          }
          else $navbar.collapse('hide');
      }
    }
    
});

//if large view dropdown links are open, open the mobile browser links too
$('.dropdown-toggle').click(function(event){
    if( !($('.navbar-toggle').is(":visible")) ){ 
      $(".navbar-collapse").addClass("in").removeAttr("style"); 
    }
    if ( !($('.dropdown-menu').is(":visible")) && $(this).parent().hasClass('open') ) {
      $(".navbar-collapse").removeClass("in").css("height", "1px"); 
    }
});


// FOR MODALS



</script>



@yield('scripts')
    