/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/users/users.js":
/*!*************************************!*\
  !*** ./resources/js/users/users.js ***!
  \*************************************/
/***/ (() => {

eval("// function get users\nfunction getUsers() {\n  $.ajax({\n    type: \"GET\",\n    url: route_get_users,\n    dataType: 'json',\n    data: {\n      token: localStorage.token\n    },\n    success: function success(result) {\n      localStorage.token = result.token; // alert('Got a token from the server! Token: ' + result.token);\n    }\n  });\n} // ----//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvdXNlcnMvdXNlcnMuanM/NDg3ZCJdLCJuYW1lcyI6WyJnZXRVc2VycyIsIiQiLCJhamF4IiwidHlwZSIsInVybCIsInJvdXRlX2dldF91c2VycyIsImRhdGFUeXBlIiwiZGF0YSIsInRva2VuIiwibG9jYWxTdG9yYWdlIiwic3VjY2VzcyIsInJlc3VsdCJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQSxTQUFTQSxRQUFULEdBQW9CO0FBQ2hCQyxFQUFBQSxDQUFDLENBQUNDLElBQUYsQ0FBTztBQUNIQyxJQUFBQSxJQUFJLEVBQUUsS0FESDtBQUVIQyxJQUFBQSxHQUFHLEVBQUVDLGVBRkY7QUFHSEMsSUFBQUEsUUFBUSxFQUFFLE1BSFA7QUFJSEMsSUFBQUEsSUFBSSxFQUFFO0FBQ0ZDLE1BQUFBLEtBQUssRUFBRUMsWUFBWSxDQUFDRDtBQURsQixLQUpIO0FBT0hFLElBQUFBLE9BQU8sRUFBRSxpQkFBVUMsTUFBVixFQUFrQjtBQUN2QkYsTUFBQUEsWUFBWSxDQUFDRCxLQUFiLEdBQXFCRyxNQUFNLENBQUNILEtBQTVCLENBRHVCLENBRXZCO0FBQ0g7QUFWRSxHQUFQO0FBWUgsQyxDQUNEIiwic291cmNlc0NvbnRlbnQiOlsiLy8gZnVuY3Rpb24gZ2V0IHVzZXJzXHJcbmZ1bmN0aW9uIGdldFVzZXJzKCkge1xyXG4gICAgJC5hamF4KHtcclxuICAgICAgICB0eXBlOiBcIkdFVFwiLFxyXG4gICAgICAgIHVybDogcm91dGVfZ2V0X3VzZXJzLFxyXG4gICAgICAgIGRhdGFUeXBlOiAnanNvbicsXHJcbiAgICAgICAgZGF0YToge1xyXG4gICAgICAgICAgICB0b2tlbjogbG9jYWxTdG9yYWdlLnRva2VuXHJcbiAgICAgICAgfSxcclxuICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgIGxvY2FsU3RvcmFnZS50b2tlbiA9IHJlc3VsdC50b2tlbjtcclxuICAgICAgICAgICAgLy8gYWxlcnQoJ0dvdCBhIHRva2VuIGZyb20gdGhlIHNlcnZlciEgVG9rZW46ICcgKyByZXN1bHQudG9rZW4pO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG59XHJcbi8vIC0tLS0iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3VzZXJzL3VzZXJzLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/users/users.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/users/users.js"]();
/******/ 	
/******/ })()
;