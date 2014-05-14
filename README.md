WordPress SimpleSlides
======================

A WordPress theme for developing and showcasing your slide decks.

### Dependencies Built In

* [normalize.css](https://github.com/necolas/normalize.css) as a css reset
* [highlightjs](https://github.com/isagalaev/highlight.js) for syntax highlighting
* [jquery](http://jquery.com/) for javascript magic

### Creating Slides

1. Create new post
2. Title and Excerpt-meta-box content will show on home page.
3. In post content, wrap your individual slide content with `<div>` and `</div>` tags, which will automagically be turned into slides.

### Custom Meta Boxes

* **SimpleSlides CSS** - enter straight-up CSS for your slide deck's custom style -- ex. `body { font-family: monospace; }`

* **SimpleSlides HighlightJS CSS** - enter the theme's css file name, leaving blank defaults to `default` -- ex. `solarized_dark` uses the `css/highlightjs/solarized_dark.css` stylesheet.

### CSS Tricks

* to style or hide navigation arrows, add css for `#navigation` in the SimpleSlides CSS meta box
* to style or hide counter, add css for `#counter` in the SimpleSlides CSS meta box

### SimpleSlides License

SimpleSlides WordPress Theme, Copyright 2014 Jenn Schiffer
SimpleSlides is distributed under the terms of the GNU GPL

### TODO

* persistent custom fields (post meta boxes)
* meta box for highlight js - select dropdown?
* transitions
  - fade speed
  - other animation
