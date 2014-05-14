jQuery(document).ready(function($){

  // init highlightjs syntax highlighting
  hljs.initHighlightingOnLoad();
  
  var ID = {
        slideshow : 'simpleslides',
        slide : 'slide',
        counter : 'counter',
        navigation : 'navigation',
        next : 'next',
        previous : 'previous',
        current : 'current'
      },
      labels = {
        next : '&rarr;',
        previous : '&larr;',
        separator : ' / '
      };
  
  var $slideshow = $('#' + ID.slideshow),
      $navigation = $('<div>').attr('id','navigation'),
      $slides = $slideshow.children('div').addClass(ID.slide),
      $currentSlide,
      $firstSlide = $slides.first(),
      $lastSlide = $slides.last();

  // remove non-div children (like html comments which wp wraps in <p> tags)
  $slideshow.children().not('div').remove();
  
  // add navigational arrows and counter
  $navigation.append($('<div>').attr('id',ID.previous).html(labels.previous));
  $navigation.append($('<div>').attr('id',ID.next).html(labels.next));
  $slideshow.append($navigation);
  $slideshow.append($('<div>').attr('id',ID.counter));
  
  var $counter = $('#'+ID.counter),
      $next = $('#'+ID.next),
      $previous = $('#'+ID.previous);
  
             
  /*** FUNCTIONS ***/
  
  var updateCounter = function() {
    // updates the counter
    $counter.text(thisSlidePointer + labels.separator + lastSlidePointer);
  };
  
  var hideCurrentSlide = function() {
    // hide the current slide
    $currentSlide.hide().removeClass(ID.current);
  };
  
  var nextSlide = function() {
    // hide current slide
    hideCurrentSlide();
    
    // get the next slide
    var nextSlide = $currentSlide.next();
    
    // not the last slide => go to the next one and increment the counter
    if ( thisSlidePointer != lastSlidePointer ) {
      nextSlide.show().addClass(ID.current);
      $currentSlide = nextSlide;
      thisSlidePointer++;
    }
    else {
      // is the last slide => go back to the first slide and reset the counter.
      $firstSlide.show().addClass(ID.current);
      $currentSlide = $firstSlide;
      thisSlidePointer = 1;
    }
    
    // update counter
    updateCounter();
  };
  
  var previousSlide = function() {
    // hide current slide
    hideCurrentSlide();
    
    // get the previous slide
    var previousSlide = $currentSlide.prev();
    
    // If not the first slide, go to the previous one and decrement the counter
    if ( thisSlidePointer != 1 ) {
      previousSlide.show().addClass(ID.current);
      $currentSlide = previousSlide;
      thisSlidePointer--;
    }
    else {
      // This must be the first slide, so go back to the last slide and set the counter.
      $lastSlide.show().addClass(ID.current);
      $currentSlide = $lastSlide;
      thisSlidePointer = lastSlidePointer;
    }
    
    // update counter       
    updateCounter();  
  };
  

  /*** INIT SLIDESHOW ***/
  
  // Initially hide all slides
  $slides.hide();
  
  // The first slide is number first!
  var thisSlidePointer = 1;
  
  // The last slide position is the total number of slides
  var lastSlidePointer = $slides.length;
  
  // The first slide is always the first slide, so make visible and set the counter
  $currentSlide = $firstSlide.show().addClass(ID.current);
  updateCounter();
  
  
  /*** EVENTS ***/
  
  // "next" arrow clicked => next slide
  $next.click(nextSlide);
  
  // "previous" arrow clicked => previous slide
  $previous.click(previousSlide);
  
  // Add keyboard shortcuts for changing slides
  $(document).keydown(function(e){
    if (e.which == 39) { 
      // right key pressed => next slide
      nextSlide();
      return false;
    }
    else if (e.which == 37) {
        // left key pressed => previous slide
        previousSlide();
        return false;
      }
  });
             
}); 