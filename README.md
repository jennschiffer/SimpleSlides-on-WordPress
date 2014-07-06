WordPress SimpleSlides
======================

A WordPress theme for developing and showcasing your slide decks.

### Dependencies Built In
* [simpleslides](http://github.com/jennschiffer/simpleslides) turns your post content to a slide deck
* [normalize.css](https://github.com/necolas/normalize.css) as a css reset
* [highlightjs](https://github.com/isagalaev/highlight.js) for syntax highlighting
* [jquery](http://jquery.com/) for javascript magic

### Creating Slides
1. Create new post
2. Title and Excerpt-meta-box content will show on home page.
3. In post content, wrap your individual slide content with `<div>` and `</div>` tags, which will automagically be turned into slides. Just the top-level div tags will be slides - you can have divs nested within them which won't become slides.

### Custom Settings Meta Box
* **Custom CSS** - enter straight-up CSS for your slide deck's custom style -- ex. `body { font-family: monospace; }`
* **HighlightJS Theme** - select the theme for HighlightJS syntax highlighting. Defaults to `default`, go figure.

### Slide page Query Param
* add `?slide=` query param to your slideshow URL and the number of the slide to go directly to that slide -- ex. `http://example.com/?p=1&slide=3` for page 3 or `http://example.com/my-post-title/?slide=3` if using pretty permalinks.

### CSS Tricks
* to style or hide navigation arrows, add css for `#navigation` in the SimpleSlides CSS meta box
* to style or hide counter, add css for `#counter` in the SimpleSlides CSS meta box

### Future Updates
* how-to post on demo site
* better query params for slideshow page
* transitions
* timer
* get some sleep maybe lol ok

### SimpleSlides License
SimpleSlides WordPress Theme, Copyright 2014 Jenn Schiffer

SimpleSlides is distributed under the terms of the GNU GPL
