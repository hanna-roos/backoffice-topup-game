//
// Global init of core components
//
import KTApp from "./app.js";
import KTDrawer from "./drawer.js";
import KTMenu from "./menu.js";
import KTScroll from "./scroll.js";
import KTSticky from "./sticky.js";
import KTSwapper from "./swapper.js";
import KTToggle from "./toggle.js";
import KTScrolltop from "./scrolltop.js";
import KTDialer from "./dialer.js";
import KTImageInput from "./image-input.js";
import KTPasswordMeter from "./password-meter.js";

// Init components
var KTComponents = function () {
    // Public methods
    return {
        init: function () {
            KTApp.init();
			KTDrawer.init();
			KTMenu.init();
			KTScroll.init();
			KTSticky.init();
			KTSwapper.init();
			KTToggle.init();
			KTScrolltop.init();
			KTDialer.init();	
			KTImageInput.init();
			KTPasswordMeter.init();	
        }
    }	
}();

// On document ready
if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", function() {
		KTComponents.init();
	});
 } else {
	KTComponents.init();
 }

 // Init page loader
window.addEventListener("load", function() {
    KTApp.hidePageLoading();
});

export default KTComponents;