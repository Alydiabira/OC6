<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [[['_route' => '_logout_main'], null, null, null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/(ar|bg|bn|bs|ca|cs|de|en|es|eu|fr|hr|id|it|ja|lt|ne|nl|pl|pt_BR|ro|ru|sl|sq|sr_Cyrl|sr_Latn|tr|uk|vi|zh_CN)/_components/([^/]++)(?:/([^/]++))?(*:185)'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:210)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:252)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:289)'
                                .'|router(*:303)'
                                .'|exception(?'
                                    .'|(*:323)'
                                    .'|\\.css(*:336)'
                                .')'
                            .')'
                            .'|(*:346)'
                        .')'
                    .')'
                .')'
                .'|/(en|fr)?(*:366)'
                .'|/(en|fr)/(?'
                    .'|admin(?'
                        .'|/post(?'
                            .'|(*:402)'
                            .'|/(?'
                                .'|new(*:417)'
                                .'|([1-9][0-9]*)(*:438)'
                                .'|([1-9][0-9]*)/edit(*:464)'
                                .'|([1-9][0-9]*)/delete(*:492)'
                                .'|comment/([1-9][0-9]*)/delete(*:528)'
                                .'|profile(*:543)'
                            .')'
                        .')'
                        .'|(*:553)'
                    .')'
                    .'|b(?'
                        .'|log(?'
                            .'|(*:572)'
                            .'|/(?'
                                .'|rss\\.xml(*:592)'
                                .'|p(?'
                                    .'|age/(\\d+)(*:613)'
                                    .'|osts/([^/]++)(*:634)'
                                .')'
                                .'|comment/(?'
                                    .'|([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)/new(*:690)'
                                    .'|form/([^/]++)(*:711)'
                                .')'
                                .'|search(*:726)'
                                .'|tag/(.*)(*:742)'
                            .')'
                        .')'
                        .'|ook(?'
                            .'|(*:758)'
                            .'|/controller/php(*:781)'
                        .')'
                    .')'
                    .'|l(?'
                        .'|ivres(?'
                            .'|(*:803)'
                            .'|/recherche(*:821)'
                        .')'
                        .'|ogin(*:834)'
                    .')'
                    .'|contact(?'
                        .'|/controller/test(?'
                            .'|(*:872)'
                        .')'
                        .'|(*:881)'
                    .')'
                    .'|profile/(?'
                        .'|edit(*:905)'
                        .'|change\\-password(*:929)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        185 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_locale', '_live_component', '_live_action'], null, null, false, true, null]],
        210 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        252 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        289 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        303 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        323 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        336 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        346 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        366 => [[['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'fr', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null]],
        402 => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'fr'], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_post_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'fr'], ['_locale'], ['GET' => 0], null, true, false, null],
        ],
        417 => [[['_route' => 'admin_post_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'fr'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'admin_post_show', '_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'fr'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        464 => [[['_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'fr'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        492 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'fr'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        528 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::commentDelete', '_locale' => 'fr'], ['_locale', 'commentId'], ['POST' => 0], null, false, false, null]],
        543 => [[['_route' => 'admin_profile', '_controller' => 'App\\Controller\\Admin\\BlogController::profile', '_locale' => 'fr'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        553 => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        572 => [[['_route' => 'blog_index', 'page' => 1, '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'fr'], ['_locale'], ['GET' => 0], null, false, false, null]],
        592 => [[['_route' => 'blog_rss', 'page' => 1, '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'fr'], ['_locale'], ['GET' => 0], null, false, false, null]],
        613 => [[['_route' => 'blog_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'fr'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        634 => [[['_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'fr'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        690 => [[['_route' => 'blog_comment_new', '_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'fr'], ['_locale', 'postSlug'], ['POST' => 0], null, false, false, null]],
        711 => [[['_route' => 'blog_comment_form', '_controller' => 'App\\Controller\\BlogController::commentForm', '_locale' => 'fr'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        726 => [[['_route' => 'blog_search', '_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'fr'], ['_locale'], ['GET' => 0], null, false, false, null]],
        742 => [[['_route' => 'blog_index_tag', '_controller' => 'App\\Controller\\BlogController::indexByTag'], ['_locale', 'tagName'], null, null, false, true, null]],
        758 => [[['_route' => 'app_book', '_controller' => 'App\\Controller\\BookController::index', '_locale' => 'fr'], ['_locale'], ['GET' => 0], null, false, false, null]],
        781 => [[['_route' => 'app_book_controller_php', '_controller' => 'App\\Controller\\BookControllerPhpController::index', '_locale' => 'fr'], ['_locale'], null, null, false, false, null]],
        803 => [[['_route' => 'book_index', '_controller' => 'App\\Controller\\BookController::showBooks', '_locale' => 'fr'], ['_locale'], ['GET' => 0], null, false, false, null]],
        821 => [[['_route' => 'book_search', '_controller' => 'App\\Controller\\BookController::searchBooks', '_locale' => 'fr'], ['_locale'], ['GET' => 0], null, false, false, null]],
        834 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'fr'], ['_locale'], null, null, false, false, null]],
        872 => [
            [['_route' => 'app_contact_controller_test', '_controller' => 'App\\Controller\\ContactControllerTestController::index', '_locale' => 'fr'], ['_locale'], null, null, false, false, null],
            [['_route' => 'contact_test', '_controller' => 'App\\Controller\\ContactController::test'], ['_locale'], null, null, false, false, null],
        ],
        881 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MailController::send', '_locale' => 'fr'], ['_locale'], null, null, false, false, null]],
        905 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'fr'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        929 => [
            [['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'fr'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
