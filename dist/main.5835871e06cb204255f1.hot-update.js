"use strict";
self["webpackHotUpdate"]("main",{

/***/ "./scripts/routes/common.js":
/*!**********************************!*\
  !*** ./scripts/routes/common.js ***!
  \**********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "jquery");
/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    // JavaScript to be fired on all pages
  },
  finalize: function finalize() {
    $('.menu-btn-1').on('click', function() {
      $('.mobile-menu').toggleClass("mobile-menu-active");
      $('body').toggleClass("overflow");
    });
  },
});


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ /* webpack/runtime/getFullHash */
/******/ !function() {
/******/ 	__webpack_require__.h = function() { return "81b5ef2e79aef1ffb09a"; }
/******/ }();
/******/ 
/******/ }
);
//# sourceMappingURL=main.5835871e06cb204255f1.hot-update.js.map