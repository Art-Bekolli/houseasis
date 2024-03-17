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
      $('body').toggleClass("mobile-menu-active");
    });
  },
});


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ /* webpack/runtime/getFullHash */
/******/ !function() {
/******/ 	__webpack_require__.h = function() { return "6fc59b7b926a2caea746"; }
/******/ }();
/******/ 
/******/ }
);
//# sourceMappingURL=main.6995b1f4843f8ef9cb8a.hot-update.js.map