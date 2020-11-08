"use strict";

jQuery(document).ready(function($) {


    // add responsibility to sidebar images
    $('ul.blog-archives-list img').addClass('img-responsive');
    $('.sidebar-section img').addClass('img-responsive');

    $("[class*='wp-image-']").addClass('img-responsive');

    // add responsibility to top menu
    if ( $(window).width() < 780 && $( 'body' ).hasClass( 'logged-in' ) ) {
            $('#wpadminbar').css({"top": "0px", "position": "fixed"});
            $('.responsive-menu').css({"top": "46px"});
    };

    $(window).resize(function(){
        if ( $(window).width() < 780 && $( 'body' ).hasClass( 'logged-in' ) ) {
            $('#wpadminbar').css({"top":"0px","position":"fixed"});
            $('.responsive-menu').css({"top":"46px"});
        };
    });



    // re-init masonry layout if twitter widget loaded
    if ( typeof twttr !== 'undefined' ) {
        twttr.events.bind( 'loaded', function (event) {
            $(blogGrid).masonry('layout');
        });
    };



    initMainNavigation( $('.top-menu') );

    // better hover for mobile devices
    if (Modernizr.touch) {
        // run the forEach on each figure element
        [].slice.call(document.querySelectorAll('a, button')).forEach(function(el, i) {
            // check if the user moves a finger
            var fingerMove = false;
            el.addEventListener('touchmove', function(e) {
                e.stopPropagation();
                fingerMove = true;
            });
            // always reset fingerMove to false on touch start
            el.addEventListener('touchstart', function(e) {
                e.stopPropagation();
                fingerMove = false;
            });
        });
    };

    var animationDuration = 1200; // set animation durations (for circles and bars) in milliseconds
    var portfolioGrid = '#portfolio-masonry-grid'; // portfolio masonry grid selector
    var blogGrid = '#blog-masonry-grid';

    // circle skills function
    function circleInit(element) {
        var themecolor = '#ffb03a';
        var getPercent = $(element).data('progress-percent');
        $(element).circleProgress({
            value: getPercent / 100,
            size: 126,
            startAngle: Math.PI * 1.5,
            animation: {
                duration: animationDuration,
            },
            fill: {
                color: themecolor
            }
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(parseInt(getPercent * progress) + '<i>%</i>');
        });
    };

    // progressbars function
    function moveProgressBar(element) {
        var elemPure = element;
        var elem = element + ' .skillbar-wrapper .skillbar-container';
        var getPercent = ($(elem).data('progress-percent') / 100);
        var getProgressWrapWidth = $(elem).width();
        var progressTotal = getPercent * getProgressWrapWidth;
        // on page load, animate percentage bar to data percentage length
        // .stop() used to prevent animation queueing
        $(elem + ' .bar-skill').stop().animate({
            left: progressTotal,
            percent: getPercent * 100
        }, {
            duration: animationDuration,
            progress: function(now, fx) {

                $(elemPure + ' .skillbar-exp').html(parseInt(this.percent) + '<i>%</i>');
            },
            complete: function() {
                //do not forget to reset percent at the end of the animaton
                //so on the next animation it can be calculated from starting value of 0 again
                this.percent = 0;
            }
        });
    };

    // scroll to top plugin init
    scrollToTop({
        linkName: '#sstt',
        hiddenDistance: '700'
    });

    // smooth in-page anchor scrolling
    $('#section-intro .btn-cta, .top-menu a').smoothScroll({
        // offset: -20
        offset: 0
    });

    // responsive off-canvas menu handling
    $('#menu-toggle').on('touchstart click', function(e) {
        $('#page-wrapper').toggleClass('toggled');
        $('#sstt').removeClass('is-visible').addClass('is-hidden');
        return false;
    });

    // close the menu when link or page overlay is clicked
    $('.top-menu a, #page-content-overlay').on('click', function(e) {
        $('#page-wrapper').removeClass('toggled');
    });

    // init masonry & magnific popup only when all images are loaded (or confirmed broken)
    $(portfolioGrid).imagesLoaded().always(function(instance) {
        $(portfolioGrid).masonry({ // masonry init
            columnWidth: '.portfolio-grid-sizer',
            itemSelector: '.portfolio-item',
            percentPosition: true
        }).magnificPopup({ // magnific popup gallery init
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-fade',
            removalDelay: 300,
            overflowY: 'scroll',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            image: {
                cursor: null,
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by author</small>';
                }
            }
        });
    });

    // blog grid masonry init
    $('body').imagesLoaded().always(function(instance) {
        $(blogGrid).masonry({ // masonry init
            columnWidth: '.blog-grid-sizer',
            itemSelector: '.blog-post-preview',
            percentPosition: false,
        });
    });


    // waypoints triggering for bars
    $('.block-skillbars').waypoint(function() {
        var i = 1;
        $('.skillbar-block').each(function(){
            moveProgressBar('#skillbar'+i);            
            i++;
        });
        this.destroy();
    }, {
        offset: '90%',
        triggerOnce: true
    });

    // waypoints triggering for circle bars
    $('.block-circles-skills').waypoint(function() {
        circleInit('#circle1');
        circleInit('#circle2');
        circleInit('#circle3');
        this.destroy();
    }, {
        offset: '90%',
        triggerOnce: true
    });

    // progress button init
    [].slice.call(document.querySelectorAll('button.progress-button')).forEach(function(bttn) {
        new ProgressButton(bttn, {
            callback: function(instance) {
                var progress = 0,
                interval = setInterval(function() {
                    progress = Math.min(progress + Math.random() * 0.25, 1);
                    instance._setProgress(progress);

                    if (progress === 1) {
                        instance._stop(1);
                        clearInterval(interval);
                    }
                }, 200);
            }
        });
    });

    // contact form. Documentation: http://api.jquery.com/jquery.ajax/
    $('#contact-form-btn').on('click', function(e) {
        // e.preventDefault();
        var data = {
            action : 'sendmail',
            email : $("input[name='visitor-email']").val(),
            name : $("input[name='visitor-name']").val(),
            message : $("textarea[name='visitor-message']").val(),
            user : $("input[name='user']").val(),
            user_email : $("input[name='user_email']").val(),
            user_url : $("input[name='user_url']").val()
            },
            vWidth = $(window).width(),
            container = $('.response-content'),
            success_message = $('#success_text').html(), // get translated text from frontpage
            error_sending_message = $('#error_sending_text').html(),
            error_validation_message = $('#error_validation_text').html();
            if (!data.email || !data.name || !data.message) {
                $('.callback_pop_up').bPopup({
                    onOpen: function() { container.html(error_validation_message); },
                    onClose: function() { container.empty(); }
                });
                return;
            };
        $.ajax({
            type: 'POST',
            url: AjaxHandler.ajaxurl,
            data: data,
            cache : false,
        }).done(function() {
            setTimeout(function() {
                $('#contact-form-btn').removeClass('state-loading').addClass('state-success');
                $('#contact-form').trigger('reset');
                
            }, 1500);
            $('.callback_pop_up').bPopup({
                    onOpen: function() { container.html(success_message);},
                    onClose: function() { container.empty(); }
                });
        }).fail(function() {
            setTimeout(function() {
                $('#contact-form-btn').addClass('state-error').removeClass('state-success');
            }, 1500);
            $('.callback_pop_up').bPopup({
                    onOpen: function() { container.html(error_sending_message);},
                    onClose: function() { container.empty(); }
                });   
        });
    });

    // pagination re-styler
    var x = $('.page-numbers.current');
    x.parent().addClass('active');
    x.wrap("<a href='#'></a>");

    $('.inner-post-pagination > div').css({"background-color":"#ffb03a", "color":"#ffffff","border-color":"transparent"});

    // resume downloader
    $('.about-avatar-wrapper button').on('click', function(){
       window.location.href = $(this).data("resume");
    });

    // gallery viewer
    $('.blog-post-content .attachment a').magnificPopup({ type: 'image'});

    function initMainNavigation( container ) {
        container.find( '.menu-item-has-children > a' ).each(function() {
            $(this).after( '<button class="dropdown-toggle" aria-expanded="false"></button>' )
                   .next( 'button' )
                   .andSelf()
                   .wrapAll( '<div class="li-wrapper"/>' );
        });

        // Toggle buttons and submenu items with active children menu items.
        container.find( '.current-menu-ancestor > button' ).addClass( 'toggle-on' );
        container.find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

        container.find( '.dropdown-toggle' ).click( function( e ) {
            var _this = $( this );
            e.preventDefault();
            _this.toggleClass( 'toggle-on' );
            // _this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
            _this.parent( '.li-wrapper' ).next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
            _this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
        } );
    };

    // Re-initialize the main navigation when it is updated, persisting any existing submenu expanded states.
    $( document ).on( 'customize-preview-menu-refreshed', function( e, params ) {
        if ( 'left-menu' === params.wpNavMenuArgs.theme_location ) {
            initMainNavigation( params.newContainer );

            // Re-sync expanded states from oldContainer.
            params.oldContainer.find( '.dropdown-toggle.toggle-on' ).each(function() {
                var containerId = $( this ).parent().prop( 'id' );
                $( params.newContainer ).find( '#' + containerId + ' > .dropdown-toggle' ).triggerHandler( 'click' );
            });
        }
    });







});