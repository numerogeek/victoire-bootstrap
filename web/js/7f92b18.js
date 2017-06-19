$(document).on('submit','form[data-toggle="confirm"]',function(e){
    smartConfirm(e, this, 'form');
});

$(document).on('click','a[data-toggle="confirm"]',function(e){
    smartConfirm(e, this, 'a');
});

/**
 * Get a modal to ask some confirmation.
 */
function smartConfirm(e, element, type){
    if ($(element).attr('data-confirm-field-id') != undefined && $('#'+$(element).attr('data-confirm-field-id')).attr('checked') == "checked" ) {
        return true;
    }
    e.preventDefault();
    $(element).attr('data-toggle', 'confirm-waiting');
    $.post(
        Routing.generate('alertify_confirm'),
        {
            title: $(element).attr('data-title'),
            body: $(element).attr('data-body'),
            confirm_callback: $(element).attr('data-confirm-callback'),
            cancel_button_class: $(element).attr('data-cancel-button-class'),
            confirm_button_class: $(element).attr('data-confirm-button-class'),
            cancel_button_value: $(element).attr('data-cancel-button-value'),
            confirm_button_value: $(element).attr('data-confirm-button-value'),
            modal_class: $(element).attr('data-confirm-class'),
            id: $(element).attr('id'),
            type: type
        },
        function(data){
            $("body").append(data);
        }
    );
}

$(document).ready(function() {

    $(document).on('click', '[data-alertify]', function(event) {
        event.preventDefault();
        $('#canvasloader-container').fadeIn();
        $("alertify-container").attr("data-update-effect", "show");
        $("alertify-container").attr("data-new-effect", "show");
        var params = getParams(this);
        alertify(params);

        return false;
    });

});

    function alertify(params) {

        $.ajax({
            url:  Routing.generate('alertify_ajax'),
            context: document.body,
            type: "POST",
            data: $.param(params),
            success: function(jsonResponse) {
                ajaxify(jsonResponse, "alertify-container", 'html');
            },
            error: function(jsonResponse) {
                alert("Il semble s'être produit une erreur");
            }
        });
    }

     function getParams(element){
        var type = $(element).attr("data-alertify");
        if(type == "modal"){
            var params = {
                main_type: "modal",
                title: $(element).attr('data-title') ? $(element).attr('data-title'):"",
                body: $(element).attr('data-body') ? $(element).attr('data-body'):$(element).attr('data-body-target') ? $($(element).attr('data-body-target')).html():"",
                button_class: $(element).attr('data-button') ? $(element).attr('data-button'):"",
                width: $(element).attr('data-width') ? $(element).attr('data-button'):"",
                static: $(element).attr('data-static') ? "true":""
            }
        }else if(type == "noty" || type == "toastr"){
            var params = {
                main_type: type,
                body: $(element).attr('data-body') ? $(element).attr('data-body'):"",
                type: $(element).attr('data-type') ? $(element).attr('data-type'):"",
                layout: $(element).attr('data-layout') ? $(element).attr('data-layout'):"",
                timeout: $(element).attr('data-timeout') ? $(element).attr('data-timeout'):""
            }
        }else{
                alert("Il semble s'être produit une erreur");
                $('#canvasloader-container').fadeOut();
        }
        return params;
    }

/**
 * VICTOIRE PREFIXED EDITION
 *
 * Copyright (c) 2007-2014 Ariel Flesler - aflesler<a>gmail<d>com | http://flesler.blogspot.com
 * Licensed under MIT
 * @author Ariel Flesler
 * @version 1.4.14
 */
;(function(k){'use strict';k(['jquery'],function($){var j=$.scrollTo=function(a,b,c){return $(window).scrollTo(a,b,c)};j.defaults={axis:'xy',duration:0,limit:!0};j.window=function(a){return $(window)._scrollable()};$.fn._scrollable=function(){return this.map(function(){var a=this,isWin=!a.nodeName||$.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!isWin)return a;var b=(a.contentWindow||a).document||a.ownerDocument||a;return/webkit/i.test(navigator.userAgent)||b.compatMode=='BackCompat'?b.body:b.documentElement})};$.fn.scrollTo=function(f,g,h){if(typeof g=='object'){h=g;g=0}if(typeof h=='function')h={onAfter:h};if(f=='max')f=9e9;h=$.extend({},j.defaults,h);g=g||h.duration;h.queue=h.queue&&h.axis.length>1;if(h.queue)g/=2;h.offset=both(h.offset);h.over=both(h.over);return this._scrollable().each(function(){if(f==null)return;var d=this,$elem=$(d),targ=f,toff,attr={},win=$elem.is('html,body');switch(typeof targ){case'number':case'string':if(/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(targ)){targ=both(targ);break}targ=win?$(targ):$(targ,this);if(!targ.length)return;case'object':if(targ.is||targ.style)toff=(targ=$(targ)).offset()}var e=$.isFunction(h.offset)&&h.offset(d,targ)||h.offset;$.each(h.axis.split(''),function(i,a){var b=a=='x'?'Left':'Top',pos=b.toLowerCase(),key='scroll'+b,old=d[key],max=j.max(d,a);if(toff){attr[key]=toff[pos]+(win?0:old-$elem.offset()[pos]);if(h.margin){attr[key]-=parseInt(targ.css('margin'+b))||0;attr[key]-=parseInt(targ.css('border'+b+'Width'))||0}attr[key]+=e[pos]||0;if(h.over[pos])attr[key]+=targ[a=='x'?'width':'height']()*h.over[pos]}else{var c=targ[pos];attr[key]=c.slice&&c.slice(-1)=='%'?parseFloat(c)/100*max:c}if(h.limit&&/^\d+$/.test(attr[key]))attr[key]=attr[key]<=0?0:Math.min(attr[key],max);if(!i&&h.queue){if(old!=attr[key])animate(h.onAfterFirst);delete attr[key]}});animate(h.onAfter);function animate(a){$elem.animate(attr,g,h.easing,a&&function(){a.call(this,targ,h)})}}).end()};j.max=function(a,b){var c=b=='x'?'Width':'Height',scroll='scroll'+c;if(!$(a).is('html,body'))return a[scroll]-$(a)[c.toLowerCase()]();var d='client'+c,html=a.ownerDocument.documentElement,body=a.ownerDocument.body;return Math.max(html[scroll],body[scroll])-Math.min(html[d],body[d])};function both(a){return $.isFunction(a)||$.isPlainObject(a)?a:{top:a,left:a}}return j})}(typeof define==='function'&&define.amd?define:function(a,b){if(typeof module!=='undefined'&&module.exports){module.exports=b(require('jquery'))}else{b($)}}));
$(document).on('click', '[data-scroll="smooth"]', function(e) {
    e.preventDefault();
    $.scrollTo(this.hash, 1500);
});

/**
 * jQuery Unveil
 * A very lightweight jQuery plugin to lazy load images
 * http://luis-almeida.github.com/unveil
 *
 * Licensed under the MIT license.
 * Copyright 2013 Luís Almeida
 * https://github.com/luis-almeida
 */

;(function($) {

  $.fn.unveil = function(threshold, callback) {

    var $w = $(window),
        th = threshold || 0,
        retina = window.devicePixelRatio > 1,
        attrib = retina? "data-src-retina" : "data-src",
        images = this,
        loaded;

    this.one("unveil", function() {
      var source = this.getAttribute(attrib);
      source = source || this.getAttribute("data-src");
      if (source) {
        this.setAttribute("src", source);
        if (typeof callback === "function") callback.call(this);
      }
    });

    function unveil() {
      var inview = images.filter(function() {
        var $e = $(this);
        if ($e.is(":hidden")) return;

        var wt = $w.scrollTop(),
            wb = wt + $w.height(),
            et = $e.offset().top,
            eb = et + $e.height();

        return eb >= wt - th && et <= wb + th;
      });

      loaded = inview.trigger("unveil");
      images = images.not(loaded);
    }

    $w.on("scroll.unveil resize.unveil lookup.unveil", unveil);

    unveil();

    return this;

  };

})(window.jQuery || window.Zepto);

$(document).ready(function() {
  $("img").unveil();
});
$(document).ready(function() {
    // To use it  : <a href="/url/to/a/victoire/page?layout=modal" data-toggle="viclink-modal">link</a>
    $(document).on('click', '[data-toggle="viclink-modal"]', function(e) {
        e.preventDefault();
        $('.modal').modal('hide').on('hidden.bs.modal', function(){$(this).remove()});

        $(document).trigger('vic.modal.request');
        var url = $(this).attr('href');
        $.get(url, function(data) {
            $('body').append(data);
            $(document).trigger('vic.modal.append');
        }).success(function() {
            $(document).trigger('vic.modal.success');
        });
    });

    $('*[data-toggle="viclink-modal"]').each(function() {
        $(this).css({
            'pointer-events' : 'auto',
            'cursor' : 'auto'
        });
    });
});

$(document).ajaxComplete(function() {
    $('*[data-toggle="viclink-modal"]').each(function () {
        $(this).css({
            'pointer-events': 'auto',
            'cursor': 'auto'
        });
    });
});
if (window.ngDependencies == undefined) {
    window.ngDependencies = [];
}

window.ngDependencies.push("ngSanitize");

angular.module('ngApp', window.ngDependencies).
    config(function($interpolateProvider){$interpolateProvider.startSymbol('{[{').endSymbol('}]}');});

angular.module('ngApp').filter('translate', function() {
    return function(input) {
        var originalLocale = Translator.locale;
        Translator.locale = adminLocale;
        var trans = Translator.trans(input, {}, 'victoire');
        Translator.locale = originalLocale;

        return trans;
    };
});

angular.module('ngApp').controller("PageController",
    ["$scope", "$timeout", "widgetLocalStorageService", "widgetAPIService", "$sce", "$rootScope", "$http",
        function($scope, $timeout, $widgetLocalStorageService, $widgetAPI, $sce, $rootScope, $http) {
            $scope.init = function(admin) {
                $timeout(function() {
                    $scope.loadAsynchronousWidgets();
                });
                if (true === admin || undefined === admin) {
                    $scope.getWidgetMaps();
                }
            };

            $scope.feedAsynchronousWidget = function(widget) {
                $widgetScope = $(widget).scope();
                if ($widgetScope != undefined) {
                    $widgetScope.html = $sce.trustAsHtml($widgetLocalStorageService.fetchStorage($(widget).data('id')));
                    if ($widgetScope.html != undefined && $widgetScope.html != "") {
                        $(widget).removeClass('vic-widget-asynchronous').addClass('vic-widget-asynchronous-was');
                    }
                }
            };

            $scope.loadAsynchronousWidgets = function() {
                if (debug != undefined && debug == false) {
                    //Try fetching localstorage first
                    $('.vic-widget-asynchronous').each(function () {
                        $scope.feedAsynchronousWidget($(this));
                    });
                }

                widgetIds = [];
                $('.vic-widget-asynchronous').each(function() {
                    if (widgetIds.length < 100) {
                        widgetIds.push($(this).data('id'));
                    }
                });

                if (widgetIds.length < 10) {
                    for (key in widgetIds) {
                        //cal API to get html, widget after widget
                        widget = '#vic-widget-' + widgetIds[key] + '-container';
                        $widgetScope = $(widget).scope();
                        $widgetScope.widgetId = $(widget).data('id');
                        $widgetScope.fetchAsynchronousWidget();
                    }
                } else {
                    //too much widgets, let's fetch them in one shot
                    var promise = $widgetAPI.widgets(widgetIds);
                    promise.then(
                        function(payload) {
                            for (_widgetId in payload.data) {

                                $widgetLocalStorageService.store(_widgetId, payload.data[_widgetId]);
                                $scope.feedAsynchronousWidget($('#vic-widget-' + _widgetId + '-container'));
                            }
                            //Due to possible too high number of attribute and maximum size of a query
                            if (widgetIds.length == 100) {
                                $scope.loadAsynchronousWidgets();
                            }
                        },
                        function(errorPayload) {
                            console.error('/widgets API call has failed.');
                            console.error(errorPayload);
                        });
                }
            };

            $scope.getWidgetMaps = function() {
                if (typeof(viewReferenceId) != 'undefined') {
                    $http({
                        method: 'GET',
                        url: Routing.generate(
                            'victoire_core_widget_get_available_positions', {
                                viewReference: viewReferenceId,
                                _locale: locale
                            }
                        )
                    }).then(function(response) {
                        $rootScope.widgetMaps = response.data;
                    });
                }

            };
        }
    ]);
angular.module('ngApp').controller("SlotController", ["$scope", "$compile",
    function($scope, $compile) {
        this.init = function(slotId, options) {
            $scope.slotId = slotId;
            $scope.options = options;
            $scope.toggleEnableButtons();
        };
        $scope.toggleEnableButtons = function() {
            widgets = $vic('.vic-widget-container', '#vic-slot-' + $scope.slotId);
            if (widgets.length == 0) {
                var buttonBefore = angular.element('<new-widget-button title="' + $scope.slotId + '" position="" widget-map=""></new-widget-button>');
                var templateBefore = $compile(buttonBefore);
                $vic('#vic-slot-' + $scope.slotId).append(buttonBefore);
                templateBefore($scope);
            }
        };

    }
]);

angular.module('ngApp').controller("WidgetAsynchronousLoadController",
    ["$scope", "widgetLocalStorageService", "widgetAPIService", "slotLocalStorageService", "$sce",
    function($scope, $widgetLocalStorageService, $widgetAPI, $slotLocalStorageService, $sce) {
        $scope.init = function(widgetId) {
            $scope.widgetId = widgetId;
        };
        $scope.fetchAsynchronousWidget = function() {

            var promise = $widgetAPI.widget($scope.widgetId);
            promise.then(
                function(payload) {
                    html = payload.data.html;
                    $widgetLocalStorageService.store($scope.widgetId, html);
                    $scope.html = $sce.trustAsHtml(html);
                },
                function(errorPayload) {
                    console.error($scope.widgetId + ' widget API "get call" has failed.');
                    console.error(errorPayload);
                });
        };
    }
]);


angular.module('ngApp').service("slotLocalStorageService", [
    function() {
        this.fetchStorage = function(slotId) {
            if(typeof(Storage) !== "undefined" && debug != undefined && debug === false) {
                var object = JSON.parse(localStorage.getItem('victoire__slot__newContent__html__' + slotId));
                if (object != undefined) {
                    storedAt = object.timestamp;
                    now = new Date().getTime().toString();
                    //More than an hour ? forget and remove
                    //if ((now - storedAt)/1000 < 3600) {
                    return object.data;
                    /*} else {
                     localStorage.removeItem('victoire__slot__newContent__html__' + slotId);
                     }*/
                }
            }
        };
        this.store = function(slotId, html) {
            if(typeof(Storage) !== "undefined") {
                var object = {data: html, timestamp: new Date().getTime()};
                localStorage.setItem('victoire__slot__newContent__html__' + slotId, JSON.stringify(object));
            }
        };
    }
]);

angular.module('ngApp').service("widgetAPIService", ["$http",
    function($http) {
        this.widget = function(widgetId) {
            var url = Routing.generate('victoire_core_widget_show', {
                'id': widgetId,
                'viewReferenceId': viewReferenceId,
                '_locale': locale
            });

            return $http({
                    method: 'GET',
                    url: url,
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });
        };
        this.widgets = function(widgetIds) {
            var url = Routing.generate('victoire_core_widget_apiWidgets', {
                'widgetIds': JSON.stringify(widgetIds),
                'viewReferenceId': viewReferenceId,
                '_locale': locale
            });

            return $http({
                method: 'GET',
                url: url,
                headers: {
                    'Content-Type': 'application/json'
                }
            });
        };
    }
]);

angular.module('ngApp').service("widgetLocalStorageService", [
    function() {
        this.fetchStorage = function(widgetId) {
            if(typeof(Storage) !== "undefined") {
                var object = JSON.parse(localStorage.getItem('victoire__widget__html__' + widgetId));
                if (object != undefined) {
                    storedAt = object.timestamp;
                    now = new Date().getTime().toString();

                    //More than a week content has probably changed, forget and remove
                    if ((now - storedAt)/1000 < 604800 || !navigator.onLine) {
                        return object.data;
                    } else {
                        localStorage.removeItem('victoire__widget__html__' + widgetId);
                    }
                }
            }
        };
        this.store = function(widgetId, html) {
            if (typeof(Storage) !== "undefined") {
                var object = {data: html, timestamp: new Date().getTime()};
                localStorage.setItem('victoire__widget__html__' + widgetId, JSON.stringify(object));
            }
        };
    }
]);

angular.module('ngApp').directive('widget', function ($compile, $rootScope) {
    return {
        restrict:'A',
        scope: {
            widgetMap: '='
        },
        link: function(scope, element, attrs) {
            scope.positions = [];


            // When a change is done in the rootScope's widgetMaps
            $rootScope.$watch('widgetMaps', function(widgetMaps) {
                var slot = scope.$parent.slotId;
                var widgetMap = scope.widgetMap;

                var positions = [];

                if (widgetMaps && widgetMaps.hasOwnProperty(slot)) {
                    // find positions for the current widgetmap or replaced
                    if (widgetMaps[slot][widgetMap]) {
                        positions = widgetMaps[slot][widgetMap];
                    } else {
                        for (var key in widgetMaps[slot]) {
                            if (widgetMaps[slot].hasOwnProperty(key) && widgetMaps[slot][key].replaced == widgetMap) {
                                positions = widgetMaps[slot][key];
                            }
                        }
                    }
                    if (positions) {
                        // If replaced, change current widgetMap to the replaced
                        if (positions.replaced) {
                            angular.element(element).attr('widget-map', positions.id);
                            scope.widgetMap = positions.id;
                        }
                        if (positions) {
                            scope.positions = positions;
                        }

                        // Remove the newWidgetButton up an down myself
                        if (element.prev().attr('position') && element.prev().attr('widget-map') == element.attr('widget-map')) {
                            element.prev().remove();
                        }
                        if (element.next().attr('position') && element.next().attr('widget-map') == element.attr('widget-map')) {
                            element.next().remove();
                        }

                        widgets = $vic('.vic-widget-container', '#vic-slot-' + scope.$parent.slotId);
                        // If max widgets in the slot not reached
                        if (!("max" in scope.$parent.options) || ("max" in scope.$parent.options) && scope.$parent.options.max > widgets.length) {
                            for (var position in scope.positions) {
                                // If position is available
                                if (scope.positions.hasOwnProperty(position) && ['before', 'after'].indexOf(position) != -1 && scope.positions[position] == true) {
                                    var button = angular.element('<new-widget-button  title="' + scope.$parent.slotId + '" position="' + position + '" widget-map="' + scope.widgetMap + '"></new-widget-button>');
                                    var template = $compile(button);
                                    // call "before|after" on element to append or prepend button
                                    element[position](button);
                                    template(scope);
                                }
                            }
                        }
                    }
                }
            });
        }
    };
});

angular.module('ngApp').directive('newWidgetButton', function ($compile) {
    return {
        restrict:'E',
        link: function(scope, element, attrs) {
            var availableWidgets = angular.element($vic(element).parents('.vic-slot').first()).scope().options.availableWidgets;
            var choices = [{value: '', label: ''}];

            for (var name in availableWidgets) {
                choices.push({
                    value: name,
                    label: 'widget.' + name.toLowerCase() + '.new.action.label'
                });
            }

            // Eval width of the slots to add or not a class
            // function declared into the widget.js script file
            evalSlotWidth(element[0].querySelector('.v-slot'));

            scope.selectedChoices = choices[0];
            scope.choices = choices;

        },
        templateUrl: '/bundles/victoirecore/js/angular/directives/newWidgetButton/newWidgetButton.html'
    };
});

/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

/**
 * notificationFx.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
;( function( window ) {

    'use strict';

    var docElem = window.document.documentElement,
        support = { animations : Modernizr.cssanimations },
        animEndEventNames = {
            'WebkitAnimation' : 'webkitAnimationEnd',
            'OAnimation' : 'oAnimationEnd',
            'msAnimation' : 'MSAnimationEnd',
            'animation' : 'animationend'
        },
        // animation end event name
        animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];

    /**
     * extend obj function
     */
    function extend( a, b ) {
        for( var key in b ) {
            if( b.hasOwnProperty( key ) ) {
                a[key] = b[key];
            }
        }
        return a;
    }

    /**
     * NotificationFx function
     */
    function NotificationFx( options ) {
        this.options = extend( {}, this.options );
        extend( this.options, options );
        this._init();
    }

    /**
     * NotificationFx options
     */
    NotificationFx.prototype.options = {
        // element to which the notification will be appended
        // defaults to the document.body
        wrapper : document.body,
        // the message
        message : 'yo!',
        // layout type: growl|attached|bar|other
        layout : 'growl',
        // effects for the specified layout:
        // for growl layout: scale|slide|genie|jelly
        // for attached layout: flip|bouncyflip
        // for other layout: boxspinner|cornerexpand|loadingcircle|thumbslider
        // ...
        effect : 'slide',
        // notice, warning, error, success
        // will add class vic-ns-type-warning, vic-ns-type-error or vic-ns-type-success
        type : 'error',
        // if the user doesn´t close the notification then we remove it
        // after the following time
        ttl : 6000,
        // callbacks
        onClose : function() { return false; },
        onOpen : function() { return false; }
    }

    /**
     * init function
     * initialize and cache some vars
     */
    NotificationFx.prototype._init = function() {
        // create HTML structure
        this.ntf = document.createElement( 'div' );
        this.ntf.className = 'vic-ns-box vic-ns-' + this.options.layout + ' vic-ns-effect-' + this.options.effect + ' vic-ns-type-' + this.options.type;
        var strinner = '<div class="vic-ns-box-inner">';
        strinner += this.options.message;
        strinner += '</div>';
        strinner += '<span class="vic-ns-close"></span></div>';
        this.ntf.innerHTML = strinner;

        // append to body or the element specified in options.wrapper
        this.options.wrapper.insertBefore( this.ntf, this.options.wrapper.firstChild );

        // dismiss after [options.ttl]ms
        var self = this;
        this.dismissttl = setTimeout( function() {
            if( self.active ) {
                self.dismiss();
            }
        }, this.options.ttl );

        // init events
        this._initEvents();
    }

    /**
     * init events
     */
    NotificationFx.prototype._initEvents = function() {
        var self = this;
        // dismiss notification
        this.ntf.querySelector( '.vic-ns-close' ).addEventListener( 'click', function() { self.dismiss(); } );
    }

    /**
     * show the notification
     */
    NotificationFx.prototype.show = function() {
        this.active = true;
        classie.remove( this.ntf, 'vic-ns-hide' );
        classie.add( this.ntf, 'vic-ns-show' );
        this.options.onOpen();
    }

    /**
     * dismiss the notification
     */
    NotificationFx.prototype.dismiss = function() {
        var self = this;
        this.active = false;
        clearTimeout( this.dismissttl );
        classie.remove( this.ntf, 'vic-ns-show' );
        setTimeout( function() {
            classie.add( self.ntf, 'vic-ns-hide' );

            // callback
            self.options.onClose();
        }, 25 );

        // after animation ends remove ntf from the DOM
        var onEndAnimationFn = function( ev ) {
            if( support.animations ) {
                if( ev.target !== self.ntf ) return false;
                this.removeEventListener( animEndEventName, onEndAnimationFn );
            }
            self.options.wrapper.removeChild( this );
        };

        if( support.animations ) {
            this.ntf.addEventListener( animEndEventName, onEndAnimationFn );
        }
        else {
            onEndAnimationFn();
        }
    }

    /**
     * add to global namespace
     */
    window.NotificationFx = NotificationFx;

} )( window );

function warn(content, ttl, icon) {
    if (icon == undefined) {
        icon = 'fa-warning';
    }
    if (content == undefined) {
        content = 'L\'action n\'a pas pu aboutir.';
    }
    notify(content, ttl, 'growl', 'jelly', 'warning', icon);
}

function congrat(content, ttl, icon) {
    if (icon == undefined) {
        icon = 'fa-rocket';
    }
    if (content == undefined) {
        content = 'Victoire !';
    }
    notify(content, ttl, 'growl', 'jelly', 'success', icon);
}

function error(content, ttl, icon) {
    if (icon == undefined) {
        icon = 'fa-flash';
    }
    if (content == undefined) {
        content = 'Oups !';
    }
    notify(content, ttl, 'growl', 'jelly', 'error', icon);
}

function notify(content, ttl, layout, effect, type, icon) {
    if (ttl == undefined) {
        ttl = 10000; //10 seconds
    }
    var notification = new NotificationFx({
        message : '<div><i class="fa ' + icon + '"></i> ' + content + '</div>',
        layout  : layout,
        effect  : effect,
        ttl     : ttl,
        type    : type
    });

    // show the notification
    notification.show();
}
