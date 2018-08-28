/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var Parallax = require('parallax-scroll');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

$(document).ready(function () {

    /*
     **  Animations
     */

    // Initialize smooth scroll
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        easing: 'easeInQuart',
    });

    // Navbar color change on scroll
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $('.mainNav').css('background-color', '#fff');

            $('.nav-colored')
                .css('color', '#151515')
                .hover(function () {
                    $(this).css('color', '#b53035');
                }, function () {
                    $(this).css('color', '#151515');
                });

            $('.navbar-brand').hover(function () {
                $(this).css('color', '#151515');
            }, function () {
                $(this).css('color', '#b53035');
            });
        } else {
            $('.mainNav').css('background-color', '#151515');

            $('.nav-colored')
                .css('color', '#fff')
                .hover(function () {
                    $(this).css('color', '#b53035');
                }, function () {
                    $(this).css('color', '#fff');
                });;

            $('.navbar-brand').hover(function () {
                $(this).css('color', '#fff');
            }, function () {
                $(this).css('color', '#b53035');
            });
        }
    });

    // Parallax
    const parallax = new Parallax('.js-parallax', {
        speed: 0.4
    });
    parallax.animate();

    // Offers active state
    $('.offersLink').click(function () {
        if (!$(this).hasClass('active')) {
            $('.offersLink').toggleClass('active');
        }
        if ($('#mealOffersLink').hasClass('active')) {
            $('#mealOffers').show(200);
            $('#promoOffers').hide(200);
        } else {
            $('#mealOffers').hide(200);
            $('#promoOffers').show(200);
        }
    });

    /*
     **  Product and services form IDs
     */

    // Show add product form
    $('[id^="addButton-"]').click(function () {
        var categoryId = this.id.replace(/addButton-/, '');

        $('#addButton-' + categoryId).hide();
        $('#addForm-' + categoryId).show();
    });

    // Show edit product form
    $('.editButton').click(function () {
        $('#editForm-' + this.id).show();
    });

    // Show add category form
    $('#addCategoryButton').click(function () {
        $('#addCategoryButton').removeClass('d-block').hide();
        $('#addCategoryForm').show();
    });

    // Show edit category form
    $('[id^="categoryButton-"]').click(function () {
        var categoryId = this.id.replace(/categoryButton-/, '');

        $('#tableHeader-' + categoryId).hide();
        $('#editCategory-' + categoryId).show();
    });

    // Show add daily meal form
    $('#addDailyMealButton').click(function () {
        $('#addDailyMealButton').hide();
        $('#addDailyMealForm').show();
    });

    // Show edit daily meal form
    $('[id^="editMealButton-"]').click(function () {
        var mealId = this.id.replace(/editMealButton-/, '');

        $('#dailyMeal-' + mealId).hide();
        $('#editMealForm-' + mealId).show();
    });

    // Show add promotion form
    $('#addPromoButton').click(function () {
        $('#addPromoButton').hide();
        $('#addPromoForm').show();
    });

    // Show edit promotion form
    $('[id^="editPromoButton"]').click(function () {
        var promoId = this.id.replace(/editPromoButton-/, '');

        $('#promo-' + promoId).hide();
        $('#editPromoForm-' + promoId).show();
    })
});