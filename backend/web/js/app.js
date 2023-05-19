$(function () {
    'use strict';
    $('#videoFile').change(ev => {
        console.log(ev)
        $(ev.target).closest('form').trigger('submit');
    })
});