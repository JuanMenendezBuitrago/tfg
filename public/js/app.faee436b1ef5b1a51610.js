/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/app.js":
/***/ (function(module, exports) {

$(document).ready(function () {
    $('.row.flash').find('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    if ($('#list').length > 0) {
        var actions = $('#actions');
        var actionsIndex = $('thead th').index(actions);
        var modal = $('#modal');
        var list = $('#list').DataTable({
            "columnDefs": [{ "orderable": false, "targets": actionsIndex }],
            "language": {
                "sProcessing": "Processant...",
                "sLengthMenu": "Mostra _MENU_ registres",
                "sZeroRecords": "No s'han trobat registres.",
                "sInfo": "Mostrant de _START_ a _END_ de _TOTAL_ registres",
                "sInfoEmpty": "Mostrant de 0 a 0 de 0 registres",
                "sInfoFiltered": "(filtrat de _MAX_ total registres)",
                "sInfoPostFix": "",
                "sSearch": "Filtrar:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Primer",
                    "sPrevious": "Anterior",
                    "sNext": "Següent",
                    "sLast": "Últim"
                }
            }
        });
    }
    $('.btn-commit').on('click', function (event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: $(this).attr('href'),
            data: {
                _method: 'delete',
                _token: $.ajaxSetup()['headers']['csrftoken']
            },
            success: function success(result) {
                list.row($('.to-delete')).remove().draw(false);
                modal.modal('hide');
            },
            error: function error(result) {}
        });
    });

    $('#list').on('click', '.delete-resource', function (event) {
        event.preventDefault();

        var row = $(this).parents('tr[role=row]');
        row.addClass('to-delete');
        var itemTitle = row.find('.record-title').html();

        $('.modal-title', modal).html('Estàs segur?');
        $('.btn-commit', modal).attr('href', $(this).attr('href'));
        $('.modal-body', modal).html('Confirma que vols esborrar "' + itemTitle + '"');
        modal.modal();
    });

    $(':file').on('fileselect', function (event, numFiles, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }
    });

    $(document).on('change', ':file', function () {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
});

/***/ }),

/***/ "./resources/assets/sass/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/sass/tfg-bootstrap.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/js/app.js");
__webpack_require__("./resources/assets/sass/app.scss");
module.exports = __webpack_require__("./resources/assets/sass/tfg-bootstrap.scss");


/***/ })

/******/ });