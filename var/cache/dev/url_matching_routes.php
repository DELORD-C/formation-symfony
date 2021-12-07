<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/article/new' => [[['_route' => 'app_article_create', '_controller' => 'App\\Controller\\ArticleController::createAction'], null, null, null, false, false, null]],
        '/articles/all' => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::showAction'], null, null, null, false, false, null]],
        '/number' => [
            [['_route' => 'app_index_number', '_controller' => 'App\\Controller\\IndexController::number'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::number'], null, null, null, false, false, null],
        ],
        '/' => [[['_route' => 'app_index_indexredirect', '_controller' => 'App\\Controller\\IndexController::indexRedirect'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/article/(?'
                    .'|([^/]++)(*:188)'
                    .'|delete/([^/]++)(*:211)'
                    .'|edit/([^/]++)(*:232)'
                .')'
                .'|/show(?'
                    .'|(?:/([0-9]+))?(*:263)'
                    .'|Id/([^/]++)(*:282)'
                .')'
                .'|/count(?:/([^/]++))?(*:311)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        188 => [[['_route' => 'app_article_view', '_controller' => 'App\\Controller\\ArticleController::viewAction'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::deleteAction'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'app_article_update', '_controller' => 'App\\Controller\\ArticleController::updateAction'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'app_index_showname', 'name' => null, '_controller' => 'App\\Controller\\IndexController::showName'], ['name'], null, null, false, true, null]],
        282 => [[['_route' => 'app_index_showid', '_controller' => 'App\\Controller\\IndexController::showId'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [
            [['_route' => 'app_index_count', 'int' => null, '_controller' => 'App\\Controller\\IndexController::count'], ['int'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
