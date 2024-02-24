<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="dist/img/Logo.ico" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="https://www.svtt.io.vn/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="https://www.svtt.io.vn/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="https://www.svtt.io.vn/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://www.svtt.io.vn/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://www.svtt.io.vn/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="https://www.svtt.io.vn/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="https://www.svtt.io.vn/plugins/summernote/summernote-bs4.min.css">
    <!-- Spinjs -->
    <!-- <script src="https://spin.js.org/spin.js"></script>
<link rel="stylesheet" href="https://spin.js.org/spin.css"> -->
    <!-- Sweet alerts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <!-- jQuery -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Select2 -->
    <link href="https://www.svtt.io.vn/plugins/select2/css/select2.min.css" rel="stylesheet">
    <script src="https://www.svtt.io.vn/plugins/select2/js/select2.min.js" defer=""></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
        integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
    /* CSS để ẩn cột 'luuy' */
    .hide-column {
        display: none;
    }

    /* CSS để thay đổi màu cả dòng nếu 'luuy' là 1 */
    .luuy-1 {
        background-color: #f19c9c !important;
    }

    .luuy-2 {
        background-color: #a6f19c !important;
    }
    </style>
    <title>Dashboard | HTQL SVTT</title>
    <style>
    .swal2-popup.swal2-toast {
        box-sizing: border-box;
        grid-column: 1/4 !important;
        grid-row: 1/4 !important;
        grid-template-columns: min-content auto min-content;
        padding: 1em;
        overflow-y: hidden;
        background: #fff;
        box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
        pointer-events: all
    }

    .swal2-popup.swal2-toast>* {
        grid-column: 2
    }

    .swal2-popup.swal2-toast .swal2-title {
        margin: .5em 1em;
        padding: 0;
        font-size: 1em;
        text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-loading {
        justify-content: center
    }

    .swal2-popup.swal2-toast .swal2-input {
        height: 2em;
        margin: .5em;
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-validation-message {
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-footer {
        margin: .5em 0 0;
        padding: .5em 0 0;
        font-size: .8em
    }

    .swal2-popup.swal2-toast .swal2-close {
        grid-column: 3/3;
        grid-row: 1/99;
        align-self: center;
        width: .8em;
        height: .8em;
        margin: 0;
        font-size: 2em
    }

    .swal2-popup.swal2-toast .swal2-html-container {
        margin: .5em 1em;
        padding: 0;
        overflow: initial;
        font-size: 1em;
        text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-html-container:empty {
        padding: 0
    }

    .swal2-popup.swal2-toast .swal2-loader {
        grid-column: 1;
        grid-row: 1/99;
        align-self: center;
        width: 2em;
        height: 2em;
        margin: .25em
    }

    .swal2-popup.swal2-toast .swal2-icon {
        grid-column: 1;
        grid-row: 1/99;
        align-self: center;
        width: 2em;
        min-width: 2em;
        height: 2em;
        margin: 0 .5em 0 0
    }

    .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 1.8em;
        font-weight: bold
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
        top: .875em;
        width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
        left: .3125em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
        right: .3125em
    }

    .swal2-popup.swal2-toast .swal2-actions {
        justify-content: flex-start;
        height: auto;
        margin: 0;
        margin-top: .5em;
        padding: 0 .5em
    }

    .swal2-popup.swal2-toast .swal2-styled {
        margin: .25em .5em;
        padding: .4em .6em;
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-success {
        border-color: #a5dc86
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
        position: absolute;
        width: 1.6em;
        height: 3em;
        border-radius: 50%
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
        top: -0.8em;
        left: -0.5em;
        transform: rotate(-45deg);
        transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
        top: -0.25em;
        left: .9375em;
        transform-origin: 0 1.5em;
        border-radius: 0 4em 4em 0
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
        top: 0;
        left: .4375em;
        width: .4375em;
        height: 2.6875em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
        height: .3125em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
        top: 1.125em;
        left: .1875em;
        width: .75em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
        top: .9375em;
        right: .1875em;
        width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
        animation: swal2-toast-animate-success-line-tip .75s
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
        animation: swal2-toast-animate-success-line-long .75s
    }

    .swal2-popup.swal2-toast.swal2-show {
        animation: swal2-toast-show .5s
    }

    .swal2-popup.swal2-toast.swal2-hide {
        animation: swal2-toast-hide .1s forwards
    }

    div:where(.swal2-container) {
        display: grid;
        position: fixed;
        z-index: 1060;
        inset: 0;
        box-sizing: border-box;
        grid-template-areas: "top-start     top            top-end""center-start  center         center-end""bottom-start  bottom-center  bottom-end";
        grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
        height: 100%;
        padding: .625em;
        overflow-x: hidden;
        transition: background-color .1s;
        -webkit-overflow-scrolling: touch
    }

    div:where(.swal2-container).swal2-backdrop-show,
    div:where(.swal2-container).swal2-noanimation {
        background: rgba(0, 0, 0, .4)
    }

    div:where(.swal2-container).swal2-backdrop-hide {
        background: rgba(0, 0, 0, 0) !important
    }

    div:where(.swal2-container).swal2-top-start,
    div:where(.swal2-container).swal2-center-start,
    div:where(.swal2-container).swal2-bottom-start {
        grid-template-columns: minmax(0, 1fr) auto auto
    }

    div:where(.swal2-container).swal2-top,
    div:where(.swal2-container).swal2-center,
    div:where(.swal2-container).swal2-bottom {
        grid-template-columns: auto minmax(0, 1fr) auto
    }

    div:where(.swal2-container).swal2-top-end,
    div:where(.swal2-container).swal2-center-end,
    div:where(.swal2-container).swal2-bottom-end {
        grid-template-columns: auto auto minmax(0, 1fr)
    }

    div:where(.swal2-container).swal2-top-start>.swal2-popup {
        align-self: start
    }

    div:where(.swal2-container).swal2-top>.swal2-popup {
        grid-column: 2;
        place-self: start center
    }

    div:where(.swal2-container).swal2-top-end>.swal2-popup,
    div:where(.swal2-container).swal2-top-right>.swal2-popup {
        grid-column: 3;
        place-self: start end
    }

    div:where(.swal2-container).swal2-center-start>.swal2-popup,
    div:where(.swal2-container).swal2-center-left>.swal2-popup {
        grid-row: 2;
        align-self: center
    }

    div:where(.swal2-container).swal2-center>.swal2-popup {
        grid-column: 2;
        grid-row: 2;
        place-self: center center
    }

    div:where(.swal2-container).swal2-center-end>.swal2-popup,
    div:where(.swal2-container).swal2-center-right>.swal2-popup {
        grid-column: 3;
        grid-row: 2;
        place-self: center end
    }

    div:where(.swal2-container).swal2-bottom-start>.swal2-popup,
    div:where(.swal2-container).swal2-bottom-left>.swal2-popup {
        grid-column: 1;
        grid-row: 3;
        align-self: end
    }

    div:where(.swal2-container).swal2-bottom>.swal2-popup {
        grid-column: 2;
        grid-row: 3;
        place-self: end center
    }

    div:where(.swal2-container).swal2-bottom-end>.swal2-popup,
    div:where(.swal2-container).swal2-bottom-right>.swal2-popup {
        grid-column: 3;
        grid-row: 3;
        place-self: end end
    }

    div:where(.swal2-container).swal2-grow-row>.swal2-popup,
    div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
        grid-column: 1/4;
        width: 100%
    }

    div:where(.swal2-container).swal2-grow-column>.swal2-popup,
    div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
        grid-row: 1/4;
        align-self: stretch
    }

    div:where(.swal2-container).swal2-no-transition {
        transition: none !important
    }

    div:where(.swal2-container) div:where(.swal2-popup) {
        display: none;
        position: relative;
        box-sizing: border-box;
        grid-template-columns: minmax(0, 100%);
        width: 32em;
        max-width: 100%;
        padding: 0 0 1.25em;
        border: none;
        border-radius: 5px;
        background: #fff;
        color: #545454;
        font-family: inherit;
        font-size: 1rem
    }

    div:where(.swal2-container) div:where(.swal2-popup):focus {
        outline: none
    }

    div:where(.swal2-container) div:where(.swal2-popup).swal2-loading {
        overflow-y: hidden
    }

    div:where(.swal2-container) h2:where(.swal2-title) {
        position: relative;
        max-width: 100%;
        margin: 0;
        padding: .8em 1em 0;
        color: inherit;
        font-size: 1.875em;
        font-weight: 600;
        text-align: center;
        text-transform: none;
        word-wrap: break-word
    }

    div:where(.swal2-container) div:where(.swal2-actions) {
        display: flex;
        z-index: 1;
        box-sizing: border-box;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        width: auto;
        margin: 1.25em auto 0;
        padding: 0
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled] {
        opacity: .4
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
    }

    div:where(.swal2-container) div:where(.swal2-loader) {
        display: none;
        align-items: center;
        justify-content: center;
        width: 2.2em;
        height: 2.2em;
        margin: 0 1.875em;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        border-width: .25em;
        border-style: solid;
        border-radius: 100%;
        border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
    }

    div:where(.swal2-container) button:where(.swal2-styled) {
        margin: .3125em;
        padding: .625em 1.1em;
        transition: box-shadow .1s;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
        font-weight: 500
    }

    div:where(.swal2-container) button:where(.swal2-styled):not([disabled]) {
        cursor: pointer
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #7066e0;
        color: #fff;
        font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus {
        box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-deny {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #dc3741;
        color: #fff;
        font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus {
        box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #6e7881;
        color: #fff;
        font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus {
        box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus {
        box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled):focus {
        outline: none
    }

    div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner {
        border: 0
    }

    div:where(.swal2-container) div:where(.swal2-footer) {
        margin: 1em 0 0;
        padding: 1em 1em 0;
        border-top: 1px solid #eee;
        color: inherit;
        font-size: 1em;
        text-align: center
    }

    div:where(.swal2-container) .swal2-timer-progress-bar-container {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        grid-column: auto !important;
        overflow: hidden;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px
    }

    div:where(.swal2-container) div:where(.swal2-timer-progress-bar) {
        width: 100%;
        height: .25em;
        background: rgba(0, 0, 0, .2)
    }

    div:where(.swal2-container) img:where(.swal2-image) {
        max-width: 100%;
        margin: 2em auto 1em
    }

    div:where(.swal2-container) button:where(.swal2-close) {
        z-index: 2;
        align-items: center;
        justify-content: center;
        width: 1.2em;
        height: 1.2em;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: -1.2em;
        padding: 0;
        overflow: hidden;
        transition: color .1s, box-shadow .1s;
        border: none;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0);
        color: #ccc;
        font-family: monospace;
        font-size: 2.5em;
        cursor: pointer;
        justify-self: end
    }

    div:where(.swal2-container) button:where(.swal2-close):hover {
        transform: none;
        background: rgba(0, 0, 0, 0);
        color: #f27474
    }

    div:where(.swal2-container) button:where(.swal2-close):focus {
        outline: none;
        box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner {
        border: 0
    }

    div:where(.swal2-container) .swal2-html-container {
        z-index: 1;
        justify-content: center;
        margin: 1em 1.6em .3em;
        padding: 0;
        overflow: auto;
        color: inherit;
        font-size: 1.125em;
        font-weight: normal;
        line-height: normal;
        text-align: center;
        word-wrap: break-word;
        word-break: break-word
    }

    div:where(.swal2-container) input:where(.swal2-input),
    div:where(.swal2-container) input:where(.swal2-file),
    div:where(.swal2-container) textarea:where(.swal2-textarea),
    div:where(.swal2-container) select:where(.swal2-select),
    div:where(.swal2-container) div:where(.swal2-radio),
    div:where(.swal2-container) label:where(.swal2-checkbox) {
        margin: 1em 2em 3px
    }

    div:where(.swal2-container) input:where(.swal2-input),
    div:where(.swal2-container) input:where(.swal2-file),
    div:where(.swal2-container) textarea:where(.swal2-textarea) {
        box-sizing: border-box;
        width: auto;
        transition: border-color .1s, box-shadow .1s;
        border: 1px solid #d9d9d9;
        border-radius: .1875em;
        background: rgba(0, 0, 0, 0);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
        color: inherit;
        font-size: 1.125em
    }

    div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,
    div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,
    div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror {
        border-color: #f27474 !important;
        box-shadow: 0 0 2px #f27474 !important
    }

    div:where(.swal2-container) input:where(.swal2-input):focus,
    div:where(.swal2-container) input:where(.swal2-file):focus,
    div:where(.swal2-container) textarea:where(.swal2-textarea):focus {
        border: 1px solid #b4dbed;
        outline: none;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) input:where(.swal2-input)::placeholder,
    div:where(.swal2-container) input:where(.swal2-file)::placeholder,
    div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder {
        color: #ccc
    }

    div:where(.swal2-container) .swal2-range {
        margin: 1em 2em 3px;
        background: #fff
    }

    div:where(.swal2-container) .swal2-range input {
        width: 80%
    }

    div:where(.swal2-container) .swal2-range output {
        width: 20%;
        color: inherit;
        font-weight: 600;
        text-align: center
    }

    div:where(.swal2-container) .swal2-range input,
    div:where(.swal2-container) .swal2-range output {
        height: 2.625em;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em
    }

    div:where(.swal2-container) .swal2-input {
        height: 2.625em;
        padding: 0 .75em
    }

    div:where(.swal2-container) .swal2-file {
        width: 75%;
        margin-right: auto;
        margin-left: auto;
        background: rgba(0, 0, 0, 0);
        font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-textarea {
        height: 6.75em;
        padding: .75em
    }

    div:where(.swal2-container) .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: .375em .625em;
        background: rgba(0, 0, 0, 0);
        color: inherit;
        font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-radio,
    div:where(.swal2-container) .swal2-checkbox {
        align-items: center;
        justify-content: center;
        background: #fff;
        color: inherit
    }

    div:where(.swal2-container) .swal2-radio label,
    div:where(.swal2-container) .swal2-checkbox label {
        margin: 0 .6em;
        font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-radio input,
    div:where(.swal2-container) .swal2-checkbox input {
        flex-shrink: 0;
        margin: 0 .4em
    }

    div:where(.swal2-container) label:where(.swal2-input-label) {
        display: flex;
        justify-content: center;
        margin: 1em auto 0
    }

    div:where(.swal2-container) div:where(.swal2-validation-message) {
        align-items: center;
        justify-content: center;
        margin: 1em 0 0;
        padding: .625em;
        overflow: hidden;
        background: #f0f0f0;
        color: #666;
        font-size: 1em;
        font-weight: 300
    }

    div:where(.swal2-container) div:where(.swal2-validation-message)::before {
        content: "!";
        display: inline-block;
        width: 1.5em;
        min-width: 1.5em;
        height: 1.5em;
        margin: 0 .625em;
        border-radius: 50%;
        background-color: #f27474;
        color: #fff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center
    }

    div:where(.swal2-container) .swal2-progress-steps {
        flex-wrap: wrap;
        align-items: center;
        max-width: 100%;
        margin: 1.25em auto;
        padding: 0;
        background: rgba(0, 0, 0, 0);
        font-weight: 600
    }

    div:where(.swal2-container) .swal2-progress-steps li {
        display: inline-block;
        position: relative
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step {
        z-index: 20;
        flex-shrink: 0;
        width: 2em;
        height: 2em;
        border-radius: 2em;
        background: #2778c4;
        color: #fff;
        line-height: 2em;
        text-align: center
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
        background: #2778c4
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
        background: #add8e6;
        color: #fff
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
        background: #add8e6
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line {
        z-index: 10;
        flex-shrink: 0;
        width: 2.5em;
        height: .4em;
        margin: 0 -1px;
        background: #2778c4
    }

    div:where(.swal2-icon) {
        position: relative;
        box-sizing: content-box;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 2.5em auto .6em;
        border: 0.25em solid rgba(0, 0, 0, 0);
        border-radius: 50%;
        border-color: #000;
        font-family: inherit;
        line-height: 5em;
        cursor: default;
        user-select: none
    }

    div:where(.swal2-icon) .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 3.75em
    }

    div:where(.swal2-icon).swal2-error {
        border-color: #f27474;
        color: #f27474
    }

    div:where(.swal2-icon).swal2-error .swal2-x-mark {
        position: relative;
        flex-grow: 1
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line] {
        display: block;
        position: absolute;
        top: 2.3125em;
        width: 2.9375em;
        height: .3125em;
        border-radius: .125em;
        background-color: #f27474
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left] {
        left: 1.0625em;
        transform: rotate(45deg)
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right] {
        right: 1em;
        transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-error.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark {
        animation: swal2-animate-error-x-mark .5s
    }

    div:where(.swal2-icon).swal2-warning {
        border-color: #facea8;
        color: #f8bb86
    }

    div:where(.swal2-icon).swal2-warning.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-i-mark .5s
    }

    div:where(.swal2-icon).swal2-info {
        border-color: #9de0f6;
        color: #3fc3ee
    }

    div:where(.swal2-icon).swal2-info.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-i-mark .8s
    }

    div:where(.swal2-icon).swal2-question {
        border-color: #c9dae1;
        color: #87adbd
    }

    div:where(.swal2-icon).swal2-question.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-question-mark .8s
    }

    div:where(.swal2-icon).swal2-success {
        border-color: #a5dc86;
        color: #a5dc86
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line] {
        position: absolute;
        width: 3.75em;
        height: 7.5em;
        border-radius: 50%
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left] {
        top: -0.4375em;
        left: -2.0635em;
        transform: rotate(-45deg);
        transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right] {
        top: -0.6875em;
        left: 1.875em;
        transform: rotate(-45deg);
        transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0
    }

    div:where(.swal2-icon).swal2-success .swal2-success-ring {
        position: absolute;
        z-index: 2;
        top: -0.25em;
        left: -0.25em;
        box-sizing: content-box;
        width: 100%;
        height: 100%;
        border: .25em solid rgba(165, 220, 134, .3);
        border-radius: 50%
    }

    div:where(.swal2-icon).swal2-success .swal2-success-fix {
        position: absolute;
        z-index: 1;
        top: .5em;
        left: 1.625em;
        width: .4375em;
        height: 5.625em;
        transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line] {
        display: block;
        position: absolute;
        z-index: 2;
        height: .3125em;
        border-radius: .125em;
        background-color: #a5dc86
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip] {
        top: 2.875em;
        left: .8125em;
        width: 1.5625em;
        transform: rotate(45deg)
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip {
        animation: swal2-animate-success-line-tip .75s
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long {
        animation: swal2-animate-success-line-long .75s
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right {
        animation: swal2-rotate-success-circular-line 4.25s ease-in
    }

    [class^=swal2] {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .swal2-show {
        animation: swal2-show .3s
    }

    .swal2-hide {
        animation: swal2-hide .15s forwards
    }

    .swal2-noanimation {
        transition: none
    }

    .swal2-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    .swal2-rtl .swal2-close {
        margin-right: initial;
        margin-left: 0
    }

    .swal2-rtl .swal2-timer-progress-bar {
        right: 0;
        left: auto
    }

    @keyframes swal2-toast-show {
        0% {
            transform: translateY(-0.625em) rotateZ(2deg)
        }

        33% {
            transform: translateY(0) rotateZ(-2deg)
        }

        66% {
            transform: translateY(0.3125em) rotateZ(2deg)
        }

        100% {
            transform: translateY(0) rotateZ(0deg)
        }
    }

    @keyframes swal2-toast-hide {
        100% {
            transform: rotateZ(1deg);
            opacity: 0
        }
    }

    @keyframes swal2-toast-animate-success-line-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0
        }

        70% {
            top: .625em;
            left: -0.25em;
            width: 1.625em
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }
    }

    @keyframes swal2-toast-animate-success-line-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }
    }

    @keyframes swal2-show {
        0% {
            transform: scale(0.7)
        }

        45% {
            transform: scale(1.05)
        }

        80% {
            transform: scale(0.95)
        }

        100% {
            transform: scale(1)
        }
    }

    @keyframes swal2-hide {
        0% {
            transform: scale(1);
            opacity: 1
        }

        100% {
            transform: scale(0.5);
            opacity: 0
        }
    }

    @keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0
        }

        70% {
            top: 2.1875em;
            left: -0.375em;
            width: 3.125em
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em
        }

        100% {
            top: 2.8125em;
            left: .8125em;
            width: 1.5625em
        }
    }

    @keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em
        }
    }

    @keyframes swal2-rotate-success-circular-line {
        0% {
            transform: rotate(-45deg)
        }

        5% {
            transform: rotate(-45deg)
        }

        12% {
            transform: rotate(-405deg)
        }

        100% {
            transform: rotate(-405deg)
        }
    }

    @keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            transform: scale(0.4);
            opacity: 0
        }

        50% {
            margin-top: 1.625em;
            transform: scale(0.4);
            opacity: 0
        }

        80% {
            margin-top: -0.375em;
            transform: scale(1.15)
        }

        100% {
            margin-top: 0;
            transform: scale(1);
            opacity: 1
        }
    }

    @keyframes swal2-animate-error-icon {
        0% {
            transform: rotateX(100deg);
            opacity: 0
        }

        100% {
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @keyframes swal2-rotate-loading {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @keyframes swal2-animate-question-mark {
        0% {
            transform: rotateY(-360deg)
        }

        100% {
            transform: rotateY(0)
        }
    }

    @keyframes swal2-animate-i-mark {
        0% {
            transform: rotateZ(45deg);
            opacity: 0
        }

        25% {
            transform: rotateZ(-25deg);
            opacity: .4
        }

        50% {
            transform: rotateZ(15deg);
            opacity: .8
        }

        75% {
            transform: rotateZ(-5deg);
            opacity: 1
        }

        100% {
            transform: rotateX(0);
            opacity: 1
        }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow: hidden
    }

    body.swal2-height-auto {
        height: auto !important
    }

    body.swal2-no-backdrop .swal2-container {
        background-color: rgba(0, 0, 0, 0) !important;
        pointer-events: none
    }

    body.swal2-no-backdrop .swal2-container .swal2-popup {
        pointer-events: all
    }

    body.swal2-no-backdrop .swal2-container .swal2-modal {
        box-shadow: 0 0 10px rgba(0, 0, 0, .4)
    }

    @media print {
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow-y: scroll !important
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
            display: none
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
            position: static !important
        }
    }

    body.swal2-toast-shown .swal2-container {
        box-sizing: border-box;
        width: 360px;
        max-width: 100%;
        background-color: rgba(0, 0, 0, 0);
        pointer-events: none
    }

    body.swal2-toast-shown .swal2-container.swal2-top {
        inset: 0 auto auto 50%;
        transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-top-end,
    body.swal2-toast-shown .swal2-container.swal2-top-right {
        inset: 0 0 auto auto
    }

    body.swal2-toast-shown .swal2-container.swal2-top-start,
    body.swal2-toast-shown .swal2-container.swal2-top-left {
        inset: 0 auto auto 0
    }

    body.swal2-toast-shown .swal2-container.swal2-center-start,
    body.swal2-toast-shown .swal2-container.swal2-center-left {
        inset: 50% auto auto 0;
        transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center {
        inset: 50% auto auto 50%;
        transform: translate(-50%, -50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center-end,
    body.swal2-toast-shown .swal2-container.swal2-center-right {
        inset: 50% 0 auto auto;
        transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-start,
    body.swal2-toast-shown .swal2-container.swal2-bottom-left {
        inset: auto auto 0 0
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom {
        inset: auto auto 0 50%;
        transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-end,
    body.swal2-toast-shown .swal2-container.swal2-bottom-right {
        inset: auto 0 0 auto
    }
    </style>
    <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
        from {
            opacity: .99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
        position: absolute;
        direction: ltr;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        pointer-events: none;
        visibility: hidden;
        z-index: -1
    }

    .chartjs-size-monitor-expand>div {
        position: absolute;
        width: 1000000px;
        height: 1000000px;
        left: 0;
        top: 0
    }

    .chartjs-size-monitor-shrink>div {
        position: absolute;
        width: 200%;
        height: 200%;
        left: 0;
        top: 0
    }
    </style>
</head>

<body class="sidebar-mini layout-fixed" style="height: auto;">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
            <img class="animation__shake" src="dist/img/logo_blue.png" alt="VNPT Logo" height="90" width="auto"
                style="display: none;">
            <h4 style="display: none;">HTLQ SVTT VNPT VLG</h4>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://zalo.me/giangpt2808" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dangnhap.php?logout" role="button">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Đăng xuất
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="https://www.svtt.io.vn/dist/img/logo.png" alt="VNPT Logo" class="brand-image">
                <span class="brand-text font-weight-light">HTQL SVTT</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
                id="sidebar">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px -8px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible">
                        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                            <!-- Sidebar user panel (optional) -->
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                    <img id="dashboard_avatar_url" class="img-circle elevation-2" alt="User Avatar" src="https://phongreviews.com/wp-content/uploads/2022/11/avatar-facebook-mac-dinh-8.jpg
">
                                </div>
                                <div class="info">
                                    <a class="d-block" id="dashboard_user_fullname"
                                        href="hosonguoihuongdan?id=admin">Quản trị</a>
                                </div>
                            </div>

                            <!-- Sidebar Menu -->
                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                    data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                    <li class="nav-item">
                                        <a href="/" class="nav-link active" id="dashboard_home">
                                            <i class="fa-solid fa-chart-line"></i>
                                            <p>
                                                Dashboard
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" id="sinhvien">
                                            <i class="fa-solid fa-user-graduate"></i>
                                            <p>
                                                Sinh viên
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="/danhgiasinhvien" class="nav-link"
                                                    id="sinhvien_danhgiasinhvien">
                                                    <i class="fa-solid fa-person-circle-check"></i>
                                                    <p>Đánh giá sinh viên</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/giaoviec" class="nav-link" id="sinhvien_giaoviec">
                                                    <i class="fa-solid fa-business-time"></i>
                                                    <p>Giao việc sinh viên</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" id="thuctap">
                                            <i class="fa-solid fa-list"></i>
                                            <p>
                                                Thực tập
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="/danhsachdetai" class="nav-link" id="thuctap_danhsachdetai">
                                                    <i class="fa-solid fa-diagram-project"></i>
                                                    <p>Danh sách đề tài</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/danhsachkythuctap" class="nav-link"
                                                    id="thuctap_danhsachkythuctap">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <p>Danh sách kỳ thực tập</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/danhsachnhomthuctap" class="nav-link"
                                                    id="thuctap_danhsachnhomthuctap">
                                                    <i class="fa-solid fa-layer-group"></i>
                                                    <p>Danh sách nhóm thực tập</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /.sidebar-menu -->
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
            <!-- /.sidebar -->
        </aside>
        <script src="https://www.svtt.io.vn/dist/js/pages/sidebar.js"></script>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 581.4px;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>76</h3>

                                    <p>Sinh viên</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-user-graduate"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>75</h3>

                                    <p>SV sắp tới hạn báo cáo</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-simple"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>1</h3>

                                    <p>Đạt</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-user-check"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>0</h3>

                                    <p>Không đạt</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-user-xmark"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable ui-sortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fa-solid fa-chart-column"></i>
                                        Số sinh viên theo trường
                                    </h3>

                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="college-chart">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="college-chart-canvas"
                                                style="height: 218px; width: 318px; display: block;" width="397"
                                                height="272" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable ui-sortable">
                            <!-- Map card -->
                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fa-solid fa-chart-pie"></i>
                                        Số sinh viên theo ngành
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="world_map" style="height: 218px; width: 318px; display: block;"
                                        width="397" height="272" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- right col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable ui-sortable">
                            <!-- Map card -->
                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fa-solid fa-list-ol"></i>
                                        Danh sách sinh viên
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div id="dashboard_bangdssv_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6"></div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="dashboard_bangdssv_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search"
                                                            class="form-control form-control-sm" placeholder=""
                                                            aria-controls="dashboard_bangdssv"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table
                                                    class="table table-bordered table-hover display dataTable no-footer"
                                                    id="dashboard_bangdssv" role="grid"
                                                    aria-describedby="dashboard_bangdssv_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th scope="col" style="text-align: center;"
                                                                class="sorting_desc" tabindex="0"
                                                                aria-controls="dashboard_bangdssv" rowspan="1"
                                                                colspan="1"
                                                                aria-label="#: activate to sort column ascending"
                                                                aria-sort="descending">#</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_bangdssv"
                                                                rowspan="1" colspan="1"
                                                                aria-label="MSSV: activate to sort column ascending">
                                                                MSSV</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_bangdssv"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Họ tên: activate to sort column ascending">
                                                                Họ tên</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_bangdssv"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Giới tính: activate to sort column ascending">
                                                                Giới tính</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_bangdssv"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Chuyên ngành: activate to sort column ascending">
                                                                Chuyên ngành</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_bangdssv"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Trường: activate to sort column ascending">
                                                                Trường</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_bangdssv"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Trạng thái: activate to sort column ascending">
                                                                Trạng thái</th>
                                                            <th scope="col" style="text-align: center;" width="7%"
                                                                class="sorting" tabindex="0"
                                                                aria-controls="dashboard_bangdssv" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Thao tác: activate to sort column ascending">
                                                                Thao tác</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">1104</td>
                                                            <td>B1609816</td>
                                                            <td>Phan Thanh Giảng</td>
                                                            <td>Nam</td>
                                                            <td>Khoa học Máy tính</td>
                                                            <td>Đại học Cần Thơ</td>
                                                            <td>
                                                                <center><span class="badge badge-success"><i
                                                                            class="fa-solid fa-check"></i> Đã đánh
                                                                        giá</span></center>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="1104"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="1104"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                                <a class="btn btn-danger"
                                                                    data-id="<?php echo $row['id']; ?>">Xóa</a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1">79</td>
                                                            <td>20004002</td>
                                                            <td>Nguyễn Khang An</td>
                                                            <td>Nam</td>
                                                            <td>Kỹ thuật Phần mềm</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="79"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="79"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">78</td>
                                                            <td>20004060</td>
                                                            <td>Nguyễn Thanh Huy</td>
                                                            <td>Nam</td>
                                                            <td>Kỹ thuật Phần mềm</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="78"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="78"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1">73</td>
                                                            <td>19004251</td>
                                                            <td>Phan Tấn Minh Tâm</td>
                                                            <td>Nam</td>
                                                            <td>Kỹ thuật Phần mềm</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="73"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="73"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">72</td>
                                                            <td>20004040</td>
                                                            <td>Trương Thị Cẩm Giang</td>
                                                            <td>Nữ</td>
                                                            <td>Kỹ thuật Phần mềm</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="72"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="72"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1">71</td>
                                                            <td>20004144</td>
                                                            <td>Lê Tấn Phát</td>
                                                            <td>Nam</td>
                                                            <td>Khoa học Máy tính</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="71"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="71"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">70</td>
                                                            <td>20004003</td>
                                                            <td>Đoàn Ân </td>
                                                            <td>Nam</td>
                                                            <td>Kỹ thuật Phần mềm</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="70"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="70"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1">69</td>
                                                            <td>20004087</td>
                                                            <td>Nguyễn Chí Linh</td>
                                                            <td>Nam</td>
                                                            <td>Kỹ thuật Phần mềm</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="69"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="69"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">68</td>
                                                            <td>20004075</td>
                                                            <td>Dương Nguyễn Đăng Khoa</td>
                                                            <td>Nam</td>
                                                            <td>Kỹ thuật Phần mềm</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="68"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="68"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1">67</td>
                                                            <td>20004154</td>
                                                            <td>Võ Tâm Phúc</td>
                                                            <td>Nam</td>
                                                            <td>Khoa học Máy tính</td>
                                                            <td>Đại học Sư phạm Kỹ thuật Vĩnh Long</td>
                                                            <td>
                                                                <center><span class="badge badge-warning"><i
                                                                            class="fa-solid fa-circle-exclamation"></i>
                                                                        Chưa đánh giá</span></center>
                                                            </td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn"
                                                                    data-id="67"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-sm" data-id="67"
                                                                    id="deleteBtn"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="dashboard_bangdssv_info" role="status"
                                                    aria-live="polite">Showing 1 to 10 of 76 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="dashboard_bangdssv_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="dashboard_bangdssv_previous"><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="0"
                                                                tabindex="0" class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="1"
                                                                tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="2"
                                                                tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="3"
                                                                tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="4"
                                                                tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="5"
                                                                tabindex="0" class="page-link">5</a></li>
                                                        <li class="paginate_button page-item disabled"
                                                            id="dashboard_bangdssv_ellipsis"><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="6"
                                                                tabindex="0" class="page-link">…</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="7"
                                                                tabindex="0" class="page-link">8</a></li>
                                                        <li class="paginate_button page-item next"
                                                            id="dashboard_bangdssv_next"><a href="#"
                                                                aria-controls="dashboard_bangdssv" data-dt-idx="8"
                                                                tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- Sinh viên đánh giá -->
                        <section class="col-lg-12 connectedSortable ui-sortable">
                            <!-- Map card -->
                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fa-solid fa-list-ol"></i>
                                        Danh sách đánh giá của sinh viên
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div id="dashboard_dssinhviendanhgia_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6"></div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="dashboard_dssinhviendanhgia_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search"
                                                            class="form-control form-control-sm" placeholder=""
                                                            aria-controls="dashboard_dssinhviendanhgia"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table
                                                    class="table table-bordered table-hover display dataTable no-footer"
                                                    id="dashboard_dssinhviendanhgia" role="grid"
                                                    aria-describedby="dashboard_dssinhviendanhgia_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th scope="col" style="text-align: center;"
                                                                class="sorting_desc" tabindex="0"
                                                                aria-controls="dashboard_dssinhviendanhgia" rowspan="1"
                                                                colspan="1"
                                                                aria-label="#: activate to sort column ascending"
                                                                aria-sort="descending">#</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_dssinhviendanhgia"
                                                                rowspan="1" colspan="1"
                                                                aria-label="MSSV: activate to sort column ascending">
                                                                MSSV</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_dssinhviendanhgia"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Họ tên: activate to sort column ascending">
                                                                Họ tên</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_dssinhviendanhgia"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Nhóm thực tập: activate to sort column ascending">
                                                                Nhóm thực tập</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_dssinhviendanhgia"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Đề tài: activate to sort column ascending">
                                                                Đề tài</th>
                                                            <th scope="col" style="text-align: center;" class="sorting"
                                                                tabindex="0" aria-controls="dashboard_dssinhviendanhgia"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Người hướng dẫn: activate to sort column ascending">
                                                                Người hướng dẫn</th>
                                                            <th scope="col" style="text-align: center;" width="7%"
                                                                class="sorting" tabindex="0"
                                                                aria-controls="dashboard_dssinhviendanhgia" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Thao tác: activate to sort column ascending">
                                                                Thao tác</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">2</td>
                                                            <td>B1609816</td>
                                                            <td>Phan Thanh Giảng</td>
                                                            <td>Nhóm này để test nè</td>
                                                            <td>Quản lý sinh viên thực tập</td>
                                                            <td>Phan Thanh Giảng</td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn" data-id="2">
                                                                    <i class="fas fa-eye"></i>
                                                                </a></td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1">1</td>
                                                            <td>B1609816</td>
                                                            <td>Phan Thanh Giảng</td>
                                                            <td>Nhóm này để test nè</td>
                                                            <td>Quản lý sinh viên thực tập</td>
                                                            <td>Phan Thanh Giảng</td>
                                                            <td><a class="btn btn-info btn-sm" id="viewBtn" data-id="1">
                                                                    <i class="fas fa-eye"></i>
                                                                </a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="dashboard_dssinhviendanhgia_info"
                                                    role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="dashboard_dssinhviendanhgia_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="dashboard_dssinhviendanhgia_previous"><a href="#"
                                                                aria-controls="dashboard_dssinhviendanhgia"
                                                                data-dt-idx="0" tabindex="0"
                                                                class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="dashboard_dssinhviendanhgia"
                                                                data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item next disabled"
                                                            id="dashboard_dssinhviendanhgia_next"><a href="#"
                                                                aria-controls="dashboard_dssinhviendanhgia"
                                                                data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </section>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
        <!-- jQuery -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <div class="modal fade" id="modal_id">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal_title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal_body">
                    </div>
                    <div class="modal-footer" id="modal_footer">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3 control-sidebar-content">
                <h5>Customize AdminLTE</h5>
                <hr class="mb-2">
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div>
                <h6>Header Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span>
                </div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div>
                <h6>Sidebar Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div>
                <div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Fixed</span>
                </div>
                <div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar
                        Mini</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span>
                </div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus
                        Auto-Expand</span></div>
                <h6>Footer Options</h6>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
                <h6>Small Text Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div>
                <h6>Navbar Variants</h6>
                <div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white">
                        <option class="bg-primary">Primary</option>
                        <option class="bg-secondary">Secondary</option>
                        <option class="bg-info">Info</option>
                        <option class="bg-success">Success</option>
                        <option class="bg-danger">Danger</option>
                        <option class="bg-indigo">Indigo</option>
                        <option class="bg-purple">Purple</option>
                        <option class="bg-pink">Pink</option>
                        <option class="bg-navy">Navy</option>
                        <option class="bg-lightblue">Lightblue</option>
                        <option class="bg-teal">Teal</option>
                        <option class="bg-cyan">Cyan</option>
                        <option class="bg-dark">Dark</option>
                        <option class="bg-gray-dark">Gray dark</option>
                        <option class="bg-gray">Gray</option>
                        <option class="bg-light">Light</option>
                        <option class="bg-warning">Warning</option>
                        <option class="bg-white">White</option>
                        <option class="bg-orange">Orange</option>
                    </select></div>
                <h6>Accent Color Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Dark Sidebar Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Light Sidebar Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Brand Logo Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-secondary">Secondary</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-cyan">Cyan</option>
                    <option class="bg-dark">Dark</option>
                    <option class="bg-gray-dark">Gray dark</option>
                    <option class="bg-gray">Gray</option>
                    <option class="bg-light">Light</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-white">White</option>
                    <option class="bg-orange">Orange</option><a href="#">clear</a>
                </select>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"
        integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"
        integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="dist/js/pages/dashboard.js"></script>

</body>

</html>