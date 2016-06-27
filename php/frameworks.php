<?php
function devpaipcompl_framework($framework)
{
    $scripts = '';
    $styles = '';
    if ($framework == 1) {
        //angular.js
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/angular.js" type="text/javascript"></script><script src="http://dev.paip.com.pl/lib/m/angular-material.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 2) {
        //AppML
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/appml/appml.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 3) {
        //backbone.js
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/backbone/backbone.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 4) {
        //Bootstrap
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/jquery/jquery.js" type="text/javascript"></script><script src="http://dev.paip.com.pl/lib/m/bootstrap/js/bootstap.js" type="text/javascript"></script>';
        $styles = '<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/bootstrap/css/bootstrap.css" type="text/css"/>';
    }
    elseif ($framework == 5) {
        //D3
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/d3/d3.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 6) {
        //Dojo
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/dojo/dojo.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 7) {
        //ember
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/ember/ember.js" type="text/javascript"></script><script src="http://dev.paip.com.pl/lib/m/ember/ember-data.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 8) {
        //Ext-Core
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/ext-core/ext-core.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 9) {
        //fullpage.js - JQuery Edition
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/jquery/jquery.js" type="text/javascript"></script><script src="http://dev.paip.com.pl/lib/m/fullpage/jq/jquery.fullpage.js" type="text/javascript"></script><script src="http://dev.paip.com.pl/lib/m/fullpage/jq/jquery.easings.js" type="text/javascript"></script><script src="http://dev.paip.com.pl/lib/m/fullpage/jq/jquery.slimscroll.js" type="text/javascript"></script>';
        $styles = '<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/fullpage/jq/jquery.fullpage.css" type="text/css"/>';
    }
    elseif ($framework == 10) {
        //fullpage.js - JavaScript Edition
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/fullpage/js/javascript.fullPage.js" type="text/javascript"></script>';
        $styles = '<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/fullpage/js/javascript.fullPage.css" type="text/css"/>';
    }
    elseif ($framework == 11) {
        //Google API | Google Maps API
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/gapi/gmapapi.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 12) {
        //Hammer.js
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/hammer/hammer.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 13) {
        //jQuery
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/jquery/jquery.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 14) {
        //jQuery Mobile
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/jquery-mobile/jquery.mobile.js" type="text/javascript"></script>';
        $styles = '<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/jquery-mobile/jquery.mobile.css" type="text/css"/>';
    }
    elseif ($framework == 15) {
        //jQuery UI
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/jquery/jquery.js" type="text/javascript"></script><script src="http://dev.paip.com.pl/lib/m/jquery-ui/jquery-ui.js" type="text/javascript"></script>';
        $styles = '<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/jquery-ui/jquery-ui.css" type="text/css"/>';
    }
    elseif ($framework == 16) {
        //Knockout
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/knockout/knockout-3.4.0.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 17) {
        //moment.js
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/moment/moment-with-locales.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 18) {
        //mootools
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/mootools/mootools.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 19) {
        //prototype.js
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/prototype.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 20) {
        //qunit
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/qunit/qunit-1.23.1.js" type="text/javascript"></script>';
        $styles = '<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/qunit/qunit-1.23.1.css" type="text/css"/>';
    }
    elseif ($framework == 21) {
        //scriptaculous
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/scriptaculous/scriptaculous.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 22) {
        //spf.js
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/spf/spf.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 23) {
        //swfobject
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/swfobject/swfobject.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 24) {
        //three.js
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/three/three.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 25) {
        //underscore
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/underscore/underscore.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 26) {
        //vue
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/vue/vue.js" type="text/javascript"></script>';
        $styles = '';
    }
    elseif ($framework == 27) {
        //W3.CSS
        $scripts = '';
        $styles = '<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/w3.css/w3.css" type="text/css"/>';
    }
    elseif ($framework == 28) {
        //webfont.js
        $scripts = '<script src="http://dev.paip.com.pl/lib/m/webfont/webfont.js" type="text/javascript"></script>';
        $styles = '';
    }
    /*elseif ($framework == 29) {
        //
        $scripts = ''; //<script src="http://dev.paip.com.pl/lib/m/" type="text/javascript"></script>
        $styles = ''; //<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/" type="text/css"/>
    }*/
    elseif ($framework == 255) {
        //PAiP Web Framework
        $scripts = ''; //<script src="http://dev.paip.com.pl/lib/m/" type="text/javascript"></script>
        $styles = ''; //<link rel="stylesheet" href="http://dev.paip.com.pl/lib/m/" type="text/css"/>
    }
}
?>