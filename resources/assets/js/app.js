
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
    // Show add product form
    $('[id^="addButton-"]').click(function() {
        var categoryId = this.id.replace(/addButton-/, '');
        
        $('#addButton-' + categoryId).hide();
        $('#addForm-' + categoryId).show();
    });

    // Show edit product form
    $('.editButton').click(function() {
        $('#editForm-' + this.id).show();
    });

    // Show add category form
    $('#addCategoryButton').click(function() {
        $('#addCategoryButton').removeClass('d-block').hide();
        $('#addCategoryForm').show();
    });

    // Show edit category form
    $('[id^="categoryButton-"]').click(function() {
        var categoryId = this.id.replace(/categoryButton-/, '');
        
        $('#tableHeader-' + categoryId).hide();
        $('#editCategory-' + categoryId).show();
    });

    // Show add daily meal form
    $('#addDailyMealButton').click(function() {
        $('#addDailyMealButton').hide();
        $('#addDailyMealForm').show();
    });

    // Show edit daily meal form
    $('[id^="editMealButton-"]').click(function() {
        var mealId = this.id.replace(/editMealButton-/, '');

        $('#dailyMeal-' + mealId).hide();
        $('#editMealForm-' + mealId).show();
    });
});