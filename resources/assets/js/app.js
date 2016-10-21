
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
