<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/add_to_cart' => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add_to_cart'], null, null, null, false, false, null]],
        '/update_cart' => [[['_route' => 'update_cart', '_controller' => 'App\\Controller\\CartController::update_cart'], null, null, null, false, false, null]],
        '/remove_to_cart' => [[['_route' => 'remove_to_cart', '_controller' => 'App\\Controller\\CartController::remove_to_cart'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null]],
        '/rolecustomer' => [[['_route' => 'app_choice_role', '_controller' => 'App\\Controller\\ChoiceRoleController::index'], null, null, null, false, false, null]],
        '/admin/command' => [[['_route' => 'app_command_index', '_controller' => 'App\\Controller\\CommandController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/command/new' => [[['_route' => 'app_command_new', '_controller' => 'App\\Controller\\CommandController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/gestion/devis' => [[['_route' => 'app_gestion_devis', '_controller' => 'App\\Controller\\GestionDevisController::index'], null, null, null, false, false, null]],
        '/admin/gestion/produits' => [[['_route' => 'app_gestion_produits', '_controller' => 'App\\Controller\\GestionProduitsController::index'], null, null, null, false, false, null]],
        '/admin/gestion/stock' => [[['_route' => 'app_gestion_stock', '_controller' => 'App\\Controller\\GestionStockController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/create-payment-intent' => [[['_route' => 'create_payment_intent', '_controller' => 'App\\Controller\\PaymentController::createPaymentIntent'], null, null, null, false, false, null]],
        '/payment_confirmation' => [[['_route' => 'payment_confirmation', '_controller' => 'App\\Controller\\PaymentController::confirmPayment'], null, null, null, false, false, null]],
        '/admin/product/category' => [[['_route' => 'app_product_category_index', '_controller' => 'App\\Controller\\ProductCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product/category/new' => [[['_route' => 'app_product_category_new', '_controller' => 'App\\Controller\\ProductCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/details' => [[['_route' => 'app_product_details', '_controller' => 'App\\Controller\\ProductDetailsController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/show_detail_command' => [[['_route' => 'show_detail_command', '_controller' => 'App\\Controller\\ProfilController::show_detail_command'], null, null, null, false, false, null]],
        '/show_detail_request' => [[['_route' => 'show_detail_request', '_controller' => 'App\\Controller\\ProfilController::show_detail_request'], null, null, null, false, false, null]],
        '/admin/qr/status' => [[['_route' => 'app_qr_status_index', '_controller' => 'App\\Controller\\QrStatusController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/qr/status/new' => [[['_route' => 'app_qr_status_new', '_controller' => 'App\\Controller\\QrStatusController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/quote/request' => [[['_route' => 'app_quote_request_index', '_controller' => 'App\\Controller\\QuoteRequestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/quote/request/new' => [[['_route' => 'app_quote_request_new', '_controller' => 'App\\Controller\\QuoteRequestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quote/resquet' => [[['_route' => 'app_quote_resquet', '_controller' => 'App\\Controller\\QuoteResquetController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/request' => [[['_route' => 'app_request', '_controller' => 'App\\Controller\\RequestController::index'], null, null, null, false, false, null]],
        '/add_to_request' => [[['_route' => 'add_to_request', '_controller' => 'App\\Controller\\RequestController::add_to_request'], null, null, null, false, false, null]],
        '/update_request' => [[['_route' => 'update_request', '_controller' => 'App\\Controller\\RequestController::update_request'], null, null, null, false, false, null]],
        '/remove_to_request' => [[['_route' => 'remove_to_request', '_controller' => 'App\\Controller\\RequestController::remove_to_request'], null, null, null, false, false, null]],
        '/send_request' => [[['_route' => 'send_request', '_controller' => 'App\\Controller\\RequestController::send_request'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service/catalogue' => [[['_route' => 'app_service_catalogue', '_controller' => 'App\\Controller\\ServiceCatalogueController::index'], null, null, null, false, false, null]],
        '/admin/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|command/([^/]++)(?'
                        .'|(*:71)'
                        .'|/edit(*:83)'
                        .'|(*:90)'
                    .')'
                    .'|product/(?'
                        .'|category/([^/]++)(?'
                            .'|(*:129)'
                            .'|/edit(*:142)'
                            .'|(*:150)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:170)'
                            .'|/edit(*:183)'
                            .'|(*:191)'
                        .')'
                    .')'
                    .'|q(?'
                        .'|r/status/([^/]++)(?'
                            .'|(*:225)'
                            .'|/edit(*:238)'
                            .'|(*:246)'
                        .')'
                        .'|uote/request/([^/]++)(?'
                            .'|(*:279)'
                            .'|/edit(*:292)'
                            .'|(*:300)'
                        .')'
                    .')'
                    .'|service/([^/]++)(?'
                        .'|(*:329)'
                        .'|/edit(*:342)'
                        .'|(*:350)'
                    .')'
                    .'|users/([^/]++)(?'
                        .'|(*:376)'
                        .'|/edit(*:389)'
                        .'|(*:397)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [[['_route' => 'app_command_show', '_controller' => 'App\\Controller\\CommandController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        83 => [[['_route' => 'app_command_edit', '_controller' => 'App\\Controller\\CommandController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        90 => [[['_route' => 'app_command_delete', '_controller' => 'App\\Controller\\CommandController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        129 => [[['_route' => 'app_product_category_show', '_controller' => 'App\\Controller\\ProductCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        142 => [[['_route' => 'app_product_category_edit', '_controller' => 'App\\Controller\\ProductCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        150 => [[['_route' => 'app_product_category_delete', '_controller' => 'App\\Controller\\ProductCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        170 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        191 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        225 => [[['_route' => 'app_qr_status_show', '_controller' => 'App\\Controller\\QrStatusController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_qr_status_edit', '_controller' => 'App\\Controller\\QrStatusController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'app_qr_status_delete', '_controller' => 'App\\Controller\\QrStatusController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_quote_request_show', '_controller' => 'App\\Controller\\QuoteRequestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_quote_request_edit', '_controller' => 'App\\Controller\\QuoteRequestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'app_quote_request_delete', '_controller' => 'App\\Controller\\QuoteRequestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        376 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        389 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        397 => [
            [['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
