// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

// Load some Google Fonts asynchrously 
// Typekit Web Font Loader https://github.com/typekit/webfontloader// https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js loads latest 1.x version

window.WebFontConfig = {  google: { families: [ 'Trirong:ital,wght@0,200;0,300;0,400;1,300', 'Public+Sans:ital,wght@0,400;0,700;1,400', 'Nova+Slim:400'  ] }};
(function() {  var wf = document.createElement('script');  
wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';  
wf.type = 'text/javascript';  wf.async = 'true';  
var s = document.getElementsByTagName('script')[0];  
s.parentNode.insertBefore(wf, s);
})();

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import { faBars, faUser } from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faBars, faUser);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();