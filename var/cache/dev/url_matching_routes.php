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
        '/alumnos' => [[['_route' => 'alumnos', '_controller' => 'App\\Controller\\AlumnosController::index'], null, null, null, false, false, null]],
        '/alumnos/registro' => [[['_route' => 'registro-alumnos', '_controller' => 'App\\Controller\\AlumnosController::alumnosRegistro'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/registroJornada' => [[['_route' => 'registroJornada', '_controller' => 'App\\Controller\\DashboardController::registroJornada'], null, null, null, false, false, null]],
        '/usuarios' => [[['_route' => 'usuarios', '_controller' => 'App\\Controller\\DashboardController::usuariosListar'], null, null, null, false, false, null]],
        '/usuarios/registro' => [[['_route' => 'registro-usuarios', '_controller' => 'App\\Controller\\DashboardController::usuariosRegistro'], null, null, null, false, false, null]],
        '/departamentos' => [[['_route' => 'departamentos', '_controller' => 'App\\Controller\\DepartamentosController::index'], null, null, null, false, false, null]],
        '/departamentos/registro' => [[['_route' => 'registro-departamento', '_controller' => 'App\\Controller\\DepartamentosController::departamentoRegistro'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/alumnos/(?'
                    .'|editar/([^/]++)(*:196)'
                    .'|borrar/([^/]++)(*:219)'
                .')'
                .'|/usuario(?'
                    .'|s/(?'
                        .'|editar/([^/]++)(*:259)'
                        .'|borrar/([^/]++)(*:282)'
                    .')'
                    .'|/([^/]++)/jornadas(*:309)'
                .')'
                .'|/departamento(?'
                    .'|/editar/([^/]++)(*:350)'
                    .'|s/borrar/([^/]++)(*:375)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:420)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'editar-alumno', '_controller' => 'App\\Controller\\AlumnosController::alumnoEditar'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'borrar-alumno', '_controller' => 'App\\Controller\\AlumnosController::alumnoBorrar'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'editar-usuario', '_controller' => 'App\\Controller\\DashboardController::usuarioEditar'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'borrar-usuario', '_controller' => 'App\\Controller\\DashboardController::usuarioBorrar'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'jornadas-usuario', '_controller' => 'App\\Controller\\DashboardController::usuarioJornadas'], ['id'], null, null, false, false, null]],
        350 => [[['_route' => 'editar-departamento', '_controller' => 'App\\Controller\\DepartamentosController::usuarioEditar'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'borrar-departamento', '_controller' => 'App\\Controller\\DepartamentosController::deparamentoBorrar'], ['id'], null, null, false, true, null]],
        420 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
