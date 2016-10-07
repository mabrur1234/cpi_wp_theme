'use strict';

/**
 * Config for the router
 */
app.config(['$stateProvider','$httpProvider','$locationProvider', '$urlRouterProvider', '$controllerProvider', '$compileProvider', '$filterProvider', '$provide', '$ocLazyLoadProvider', 'JS_REQUIRES',
function ($stateProvider, $httpProvider, $locationProvider , $urlRouterProvider, $controllerProvider, $compileProvider, $filterProvider, $provide, $ocLazyLoadProvider, jsRequires ) {
	$locationProvider.html5Mode(true);

    app.controller = $controllerProvider.register;
    app.directive = $compileProvider.directive;
    app.filter = $filterProvider.register;
    app.factory = $provide.factory;
    app.service = $provide.service;
    app.constant = $provide.constant;
    app.value = $provide.value;


	$httpProvider.interceptors.push([function() {
		//console.log(nonceLocalized.nonce);
		return {
			'request': function(config) {
				config.headers = config.headers || {};
				//add nonce to avoid CSRF issues
				//config.headers['X-WP-Nonce'] = '';

				return config;
			}
		};
	}]);


    // LAZY MODULES

    $ocLazyLoadProvider.config({
        debug: false,
        events: true,
        modules: jsRequires.modules
    });



    // APPLICATION ROUTES
    // -----------------------------------
    // For any unmatched url, redirect to /app/dashboard
    //$urlRouterProvider.otherwise("/signin");
   // $urlRouterProvider.otherwise("/signin");

	if(requestUri){
		$urlRouterProvider.otherwise(requestUri);
	}else{
		$urlRouterProvider.otherwise('/signin');
	}

    //


    // sign in
	$stateProvider.state('app', {
		url: "/app",
		templateUrl: "../wp-content/plugins/oel-cmp/templates/assets/views/app.html",
		resolve: loadSequence('appCtrl','chartjs', 'chart.js', 'chatCtrl'),
		abstract: true,
		authenticated:true
	}).state('app.dashboard', {
		url: "/dashboard",
		templateUrl: "../wp-content/plugins/oel-cmp/templates/assets/views/dashboard.html",
		resolve: loadSequence('d3', 'ui.knob', 'countTo', 'dashboardCtrl'),
		authenticated:true,
		title: 'Dashboard',
		ncyBreadcrumb: {
			label: 'Dashboard'
		}
	}).state('app.ui', {
		url: '/ui',
		template: '<div ui-view class="fade-in-up"></div>',
		title: 'UI Elements',
		ncyBreadcrumb: {
			label: 'UI Elements'
		}
	}).state('app.ui.elements', {
		url: '/elements',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_elements.html",
		title: 'Elements',
		icon: 'ti-layout-media-left-alt',
		ncyBreadcrumb: {
			label: 'Elements'
		}
	}).state('app.ui.buttons', {
		url: '/buttons',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_buttons.html",
		title: 'Buttons',
		resolve: loadSequence('laddaCtrl'),
		ncyBreadcrumb: {
			label: 'Buttons'
		}
	}).state('app.ui.links', {
		url: '/links',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_links.html",
		title: 'Link Effects',
		ncyBreadcrumb: {
			label: 'Link Effects'
		}
	}).state('app.ui.icons', {
		url: '/icons',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_icons.html",
		title: 'Font Awesome Icons',
		ncyBreadcrumb: {
			label: 'Font Awesome Icons'
		},
		resolve: loadSequence('iconsCtrl')
	}).state('app.ui.lineicons', {
		url: '/line-icons',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_line_icons.html",
		title: 'Linear Icons',
		ncyBreadcrumb: {
			label: 'Linear Icons'
		},
		resolve: loadSequence('iconsCtrl')
	}).state('app.ui.lettericons', {
		url: '/letter-icons',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_letter_icons.html",
		title: 'Letter Icons',
		ncyBreadcrumb: {
			label: 'Letter Icons'
		}
	}).state('app.ui.modals', {
		url: '/modals',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_modals.html",
		title: 'Modals',
		ncyBreadcrumb: {
			label: 'Modals'
		},
		resolve: loadSequence('asideCtrl')
	}).state('app.ui.toggle', {
		url: '/toggle',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_toggle.html",
		title: 'Toggle',
		ncyBreadcrumb: {
			label: 'Toggle'
		}
	}).state('app.ui.tabs_accordions', {
		url: '/accordions',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_tabs_accordions.html",
		title: "Tabs & Accordions",
		ncyBreadcrumb: {
			label: 'Tabs & Accordions'
		},
		resolve: loadSequence('vAccordionCtrl')
	}).state('app.ui.panels', {
		url: '/panels',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_panels.html",
		title: 'Panels',
		ncyBreadcrumb: {
			label: 'Panels'
		}
	}).state('app.ui.notifications', {
		url: '/notifications',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_notifications.html",
		title: 'Notifications',
		ncyBreadcrumb: {
			label: 'Notifications'
		},
		resolve: loadSequence('toasterCtrl', 'sweetAlertCtrl', 'notificationIconsCtrl', 'notifyCtrl', 'ngNotify')
	}).state('app.ui.sliders', {
		url: '/sliders',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_sliders.html",
		title: 'Sliders',
		ncyBreadcrumb: {
			label: 'Sliders'
		},
		resolve: loadSequence('sliderCtrl')
	}).state('app.ui.treeview', {
		url: '/treeview',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_tree.html",
		title: 'TreeView',
		ncyBreadcrumb: {
			label: 'Treeview'
		},
		resolve: loadSequence('angularBootstrapNavTree', 'treeCtrl')
	}).state('app.ui.knob', {
		url: '/knob',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_knob.html",
		title: 'Knob component',
		ncyBreadcrumb: {
			label: 'Knob component'
		},
		resolve: loadSequence('d3', 'ui.knob', 'knobCtrl')
	}).state('app.ui.media', {
		url: '/media',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_media.html",
		title: 'Media',
		ncyBreadcrumb: {
			label: 'Media'
		}
	}).state('app.ui.nestable', {
		url: '/nestable2',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_nestable.html",
		title: 'Nestable List',
		ncyBreadcrumb: {
			label: 'Nestable List'
		},
		resolve: loadSequence('jquery-nestable-plugin', 'ng-nestable', 'nestableCtrl')
	}).state('app.ui.typography', {
		url: '/typography',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/ui_typography.html",
		title: 'Typography',
		ncyBreadcrumb: {
			label: 'Typography'
		}
	})
	
	.state('signin', {
        url: '/signin',
		title: 'Signin',
        templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/login_login.html",
       // resolve: loadSequence('cookies','flow','userCtrl','loginCtrl')
        resolve: loadSequence('loginCtrl'),
		controller:'loginCtrl'
    }).state('/',{
		url: '/signin',
		title: 'Signin',
		templateUrl: siteUrl+"/wp-content/plugins/oel-cmp/templates/assets/views/login_login.html",
		// resolve: loadSequence('cookies','flow','userCtrl','loginCtrl')
		resolve: loadSequence('loginCtrl')
	})

    // Generates a resolve object previously configured in constant.JS_REQUIRES (config.constant.js)
    function loadSequence() {
        var _args = arguments;
        return {
            deps: ['$ocLazyLoad', '$q',
			function ($ocLL, $q) {
			    var promise = $q.when(1);
			    for (var i = 0, len = _args.length; i < len; i++) {
			        promise = promiseThen(_args[i]);
			    }
			    return promise;

			    function promiseThen(_arg) {
			        if (typeof _arg == 'function')
			            return promise.then(_arg);
			        else
			            return promise.then(function () {
			                var nowLoad = requiredData(_arg);
			                if (!nowLoad)
			                    return $.error('Route resolve: Bad resource name [' + _arg + ']');
			                return $ocLL.load(nowLoad);
			            });
			    }

			    function requiredData(name) {
			        if (jsRequires.modules)
			            for (var m in jsRequires.modules)
			                if (jsRequires.modules[m].name && jsRequires.modules[m].name === name)
			                    return jsRequires.modules[m];
			        return jsRequires.scripts && jsRequires.scripts[name];
			    }
			}]
        };
    }




	//$locationProvider.html5Mode(true);
}]);

