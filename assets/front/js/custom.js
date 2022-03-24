// Navbar
$(document).ready(function () {

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });    

});

$('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
   });

   function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    document.getElementById("dd").classList.toggle("minus");
  }

   window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("ov-dropdown");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
    document.getElementById("dd2").classList.toggle("minus");
  }

   window.onclick = function(event) {
    if (!event.target.matches('.dropbtn2')) {
      var dropdowns = document.getElementsByClassName("ov-dropdown2");      
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];        
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  // Video Modal
  $(document).ready(function() {

    // Gets the video src from the data-src on each button
    
    var $videoSrc;  
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);
    
      
      
    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function (e) {
        
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    })
      
    
    
    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    }) 
        
        
    
    
      
      
    // document ready  
    });

    // Villa carousel
    var $owl = $('.hotel-carousel');

$owl.children().each( function( index ) {
  $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
});

$owl.owlCarousel({
  center: true,
  loop: true,
  mouseDrag: true,
  autoplay: true,
  items: 1,  
  responsive: {
    1920:{
      stagePadding: 300,
    },
    1366: {
      stagePadding: 200,
    },
    1280:{
      stagePadding: 200,
    },
    1024:{
      stagePadding: 120
    },
    914:{
      stagePadding: 100
    },
    540:{
      stagePadding: 80
    },
    412:{
      stagePadding: 30
    },
    360:{
      stagePadding: 30
    }
  }
});

$(document).on('click', '.owl-item>div', function() {
  // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
  var $speed = 300;  // in ms
  $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
});

// Special Offers Carousel
$('.spc-carousel').owlCarousel({  
  items:4,  
  loop: true,
  margin:30,  
  autoplay: true,
  stagePadding:0,
  smartSpeed:450,
  responsive:{
    1368:{
      items:4
    },
    1024:{
      items:4
    },
    914:{
      items: 2,
    },
    540:{
      items:2
    },
    412:{
      items: 1,      
    },
    360:{
      items: 1
    }
  }
});



// Hospitality Carousel
$('.hp-carousel').owlCarousel({  
  items:3,  
  loop: true,
  margin:70,  
  autoplay: true,
  stagePadding:0,
  smartSpeed:450,
  responsive:{
    1368:{
      items:3
    },
    1024:{
      items:3
    },
    914:{
      items: 2,
    },
    540:{
      items:2,
      margin:30
    },
    412:{
      items: 1,      
    },
    360:{
      items: 1
    }
  }
});

// Wow Js
wow = new WOW(
  {
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);
wow.init();

// Floor plan popup
$(document).ready(function() {
  $('.rd-fp').magnificPopup({
    type:'image',
    mainClass: 'mfp-fade',
  });
});

$(document).ready(function(){
$('.lightbox-gallery').magnificPopup({
  delegate: 'a',
  type: 'image',
  tLoading: 'Loading image #%curr%...',
  mainClass: 'mfp-fade',
  fixedContentPos: true,
  closeBtnInside: false,
  gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
  }
});
});

// Special Offers Popup
// From an element with ID #popup
$(document).ready(function(){
  $('.so-lnk').magnificPopup({
    delete: 'a',
    type: 'inline',
    mainClass: 'mfp-fade'
  });
});

$(document).ready(function(){
  $('.re-lnk').magnificPopup({
    delete: 'a',
    type: 'inline',
    mainClass: 'mfp-fade'
  });
});

$(document).ready(function(){
  $('.spc-lnk').magnificPopup({
    delete: 'a',
    type: 'inline',
    mainClass: 'mfp-fade'
  });
});

// Wedding Carousel
$('.w-car').owlCarousel({  
  items:1,  
  loop: true, 
  autoplay: true,  
  autoWidth: false,
  nav: true,
  dots: false, 
});

$('.w-tes').owlCarousel({  
  items:1,  
  loop: true, 
  autoplay: true,  
  autoWidth: false,
  stagePadding: 0,
  nav: true,
  dots: false, 
});

// Readmore wedding
$(document).ready(function(){
  $('#rdmore-con').readmore({
    moreLink: '<a href="#" class="rdmore">+ View More</a>',
    collapsedHeight: 100,
    speed: 500,    
    lessLink: '<a href="#" class="rdless">- View Less</a>',
  });
});
$(document).ready(function(){
  $('#rdmore-con2').readmore({
    moreLink: '<a href="#" class="rdmore">+ View More</a>',
    collapsedHeight: 100,
    speed: 500,    
    lessLink: '<a href="#" class="rdless">- View Less</a>',
  });
});


// Sticky Navbar
$(document).ready(function(){
  window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

});

// To Go carousel
var $owl2 = $('.togo-ss');

$owl2.children().each( function( index ) {
  $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
});

$owl2.owlCarousel({  
  loop:true,
  margin:0,
  center:true,
  stagePadding: 140,
  autoplay: true,  
  items:1,
  responsive:{
      600:{
          items:1
      }
  }
});

$(document).on('click', '.owl-item>div', function() {
  // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
  var $speed = 300;  // in ms
  $owl2.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
});


// Photo Filter
/* portfolio filter */
$('.portfolio-wrapper').each(function () {
  var _this = $(this);
  if (!_this.find('.wow').length > 0) {
      _this.find('.grid-item').css('visibility', 'hidden');
  }
  _this.imagesLoaded(function () {
    if (!_this.find('.wow').length > 0) {
      _this.find('.grid-item').css('visibility', '');
  }
  _this.removeClass('grid-loading');
  _this.isotope({
    layoutMode: 'masonry',
    itemSelector: '.grid-item',
    percentPosition: true,
    stagger: 0,
    masonry: {
        columnWidth: '.grid-sizer',
    }
});
  _this.isotope();  
  });
  $(document).on('click', '.portfolio-filter > li > a', function () {
    var _this = $(this),
            parentSectionObj = _this.parents('section');
    parentSectionObj.find('.portfolio-filter > li').removeClass('active');
    _this.parent().addClass('active');
    var selector = _this.attr('data-filter'),
            portfolioFilter = parentSectionObj.find('.portfolio-wrapper');
    
    portfolioFilter.isotope({filter: selector});
    return false;
});
});