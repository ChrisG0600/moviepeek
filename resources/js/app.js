import './bootstrap';

$(document).ready(function() {
    $('#mobileMenuButton').on('click', function() {
        $('#mobileMenu').toggleClass('hidden');
        $('#menuIcon').toggleClass('hidden');
        $('#closeIcon').toggleClass('hidden');
    });
});