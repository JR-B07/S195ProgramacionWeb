import './bootstrap';

import 'alertifyjs/build/css/alertify.css';

import alertify from 'alertifyjs';
window.alertify = alertify;

// Funciones para alertify
function showSuccessAlert(message) {
    alertify.set('notifier', 'position', 'bottom-center');
    alertify.success(message);
}

function showErrorAlert(message) {
    alertify.set('notifier', 'position', 'bottom-center');
    alertify.error(message);
}

function showWarningAlert(message) {
    alertify.set('notifier', 'position', 'bottom-center');
    alertify.warning(message);
}