
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./odometer.min');

window.odometerOptions = {
    duration:1000,
    format: '(,ddd)'
};

$(function() {

    var increment = window.increment;
    var odometerValue = window.startDollars;

    window.setInterval(function() {
        if(odometerValue < Number.MAX_VALUE - increment) {
            odometerValue += increment;
            odometer.innerHTML = parseInt(odometerValue);
        } else {
            odometerValue = Number.MAX_VALUE;
        }
    }, 1000);

});


(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
        t._e.push(f);
    };

    return t;
}(document, "script", "twitter-wjs"));



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

/**
Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
*/
