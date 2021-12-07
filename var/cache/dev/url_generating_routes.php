<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_article_create' => [[], ['_controller' => 'App\\Controller\\ArticleController::createAction'], [], [['text', '/article/new']], [], [], []],
    'app_article_view' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::viewAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'app_article_show' => [[], ['_controller' => 'App\\Controller\\ArticleController::showAction'], [], [['text', '/articles/all']], [], [], []],
    'app_index_number' => [[], ['_controller' => 'App\\Controller\\IndexController::number'], [], [['text', '/number']], [], [], []],
    'app_index_showname' => [['name'], ['name' => null, '_controller' => 'App\\Controller\\IndexController::showName'], ['name' => '[0-9]+'], [['variable', '/', '[0-9]+', 'name', true], ['text', '/show']], [], [], []],
    'app_index_showid' => [['id'], ['_controller' => 'App\\Controller\\IndexController::showId'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/showId']], [], [], []],
    'app_index_count' => [['int'], ['int' => null, '_controller' => 'App\\Controller\\IndexController::count'], [], [['variable', '/', '[^/]++', 'int', true], ['text', '/count']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::number'], [], [['text', '/number']], [], [], []],
];
