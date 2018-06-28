
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

$(document).ready(function(){
    $('[id^="addButton-"]').click(function() {
        var categoryId = this.id.replace(/addButton-/, '');
        
        $('#addButton-' + categoryId).hide();
        $('#addForm-' + categoryId).show();
    });

    $('.editButton').click(function() {
        $('#editForm-' + this.id).show();
    });

    $('#addCategoryButton').click(function() {
        $('#addCategoryButton').removeClass('d-block').hide();
        $('#addCategoryForm').show();
    });

    $('[id^="categoryButton-"]').click(function() {
        var categoryId = this.id.replace(/categoryButton-/, '');
        
        $('#tableHeader-' + categoryId).hide();
        $('#editCategory-' + categoryId).show();
    });
});