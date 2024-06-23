<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'add_to_cart' => [[], ['_controller' => 'App\\Controller\\CartController::add_to_cart'], [], [['text', '/add_to_cart']], [], [], []],
    'update_cart' => [[], ['_controller' => 'App\\Controller\\CartController::update_cart'], [], [['text', '/update_cart']], [], [], []],
    'remove_to_cart' => [[], ['_controller' => 'App\\Controller\\CartController::remove_to_cart'], [], [['text', '/remove_to_cart']], [], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category']], [], [], []],
    'app_checkout' => [[], ['_controller' => 'App\\Controller\\CheckoutController::index'], [], [['text', '/checkout']], [], [], []],
    'app_choice_role' => [[], ['_controller' => 'App\\Controller\\ChoiceRoleController::index'], [], [['text', '/rolecustomer']], [], [], []],
    'app_command_index' => [[], ['_controller' => 'App\\Controller\\CommandController::index'], [], [['text', '/admin/command/']], [], [], []],
    'app_command_new' => [[], ['_controller' => 'App\\Controller\\CommandController::new'], [], [['text', '/admin/command/new']], [], [], []],
    'app_command_show' => [['id'], ['_controller' => 'App\\Controller\\CommandController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/command']], [], [], []],
    'app_command_edit' => [['id'], ['_controller' => 'App\\Controller\\CommandController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/command']], [], [], []],
    'app_command_delete' => [['id'], ['_controller' => 'App\\Controller\\CommandController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/command']], [], [], []],
    'app_gestion_devis' => [[], ['_controller' => 'App\\Controller\\GestionDevisController::index'], [], [['text', '/admin/gestion/devis']], [], [], []],
    'app_gestion_produits' => [[], ['_controller' => 'App\\Controller\\GestionProduitsController::index'], [], [['text', '/admin/gestion/produits']], [], [], []],
    'app_gestion_stock' => [[], ['_controller' => 'App\\Controller\\GestionStockController::index'], [], [['text', '/admin/gestion/stock']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'create_payment_intent' => [[], ['_controller' => 'App\\Controller\\PaymentController::createPaymentIntent'], [], [['text', '/create-payment-intent']], [], [], []],
    'payment_confirmation' => [[], ['_controller' => 'App\\Controller\\PaymentController::confirmPayment'], [], [['text', '/payment_confirmation']], [], [], []],
    'app_product_category_index' => [[], ['_controller' => 'App\\Controller\\ProductCategoryController::index'], [], [['text', '/admin/product/category/']], [], [], []],
    'app_product_category_new' => [[], ['_controller' => 'App\\Controller\\ProductCategoryController::new'], [], [['text', '/admin/product/category/new']], [], [], []],
    'app_product_category_show' => [['id'], ['_controller' => 'App\\Controller\\ProductCategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/category']], [], [], []],
    'app_product_category_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/category']], [], [], []],
    'app_product_category_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductCategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/category']], [], [], []],
    'app_product_index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/admin/product/']], [], [], []],
    'app_product_new' => [[], ['_controller' => 'App\\Controller\\ProductController::new'], [], [['text', '/admin/product/new']], [], [], []],
    'app_product_show' => [['id'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_product_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_product_details' => [[], ['_controller' => 'App\\Controller\\ProductDetailsController::index'], [], [['text', '/details']], [], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil']], [], [], []],
    'show_detail_command' => [[], ['_controller' => 'App\\Controller\\ProfilController::show_detail_command'], [], [['text', '/show_detail_command']], [], [], []],
    'show_detail_request' => [[], ['_controller' => 'App\\Controller\\ProfilController::show_detail_request'], [], [['text', '/show_detail_request']], [], [], []],
    'app_qr_status_index' => [[], ['_controller' => 'App\\Controller\\QrStatusController::index'], [], [['text', '/admin/qr/status/']], [], [], []],
    'app_qr_status_new' => [[], ['_controller' => 'App\\Controller\\QrStatusController::new'], [], [['text', '/admin/qr/status/new']], [], [], []],
    'app_qr_status_show' => [['id'], ['_controller' => 'App\\Controller\\QrStatusController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/qr/status']], [], [], []],
    'app_qr_status_edit' => [['id'], ['_controller' => 'App\\Controller\\QrStatusController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/qr/status']], [], [], []],
    'app_qr_status_delete' => [['id'], ['_controller' => 'App\\Controller\\QrStatusController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/qr/status']], [], [], []],
    'app_quote_request_index' => [[], ['_controller' => 'App\\Controller\\QuoteRequestController::index'], [], [['text', '/admin/quote/request/']], [], [], []],
    'app_quote_request_new' => [[], ['_controller' => 'App\\Controller\\QuoteRequestController::new'], [], [['text', '/admin/quote/request/new']], [], [], []],
    'app_quote_request_show' => [['id'], ['_controller' => 'App\\Controller\\QuoteRequestController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/quote/request']], [], [], []],
    'app_quote_request_edit' => [['id'], ['_controller' => 'App\\Controller\\QuoteRequestController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/quote/request']], [], [], []],
    'app_quote_request_delete' => [['id'], ['_controller' => 'App\\Controller\\QuoteRequestController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/quote/request']], [], [], []],
    'app_quote_resquet' => [[], ['_controller' => 'App\\Controller\\QuoteResquetController::index'], [], [['text', '/quote/resquet']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_request' => [[], ['_controller' => 'App\\Controller\\RequestController::index'], [], [['text', '/request']], [], [], []],
    'add_to_request' => [[], ['_controller' => 'App\\Controller\\RequestController::add_to_request'], [], [['text', '/add_to_request']], [], [], []],
    'update_request' => [[], ['_controller' => 'App\\Controller\\RequestController::update_request'], [], [['text', '/update_request']], [], [], []],
    'remove_to_request' => [[], ['_controller' => 'App\\Controller\\RequestController::remove_to_request'], [], [['text', '/remove_to_request']], [], [], []],
    'send_request' => [[], ['_controller' => 'App\\Controller\\RequestController::send_request'], [], [['text', '/send_request']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_service_catalogue' => [[], ['_controller' => 'App\\Controller\\ServiceCatalogueController::index'], [], [['text', '/service/catalogue']], [], [], []],
    'app_service_index' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/admin/service/']], [], [], []],
    'app_service_new' => [[], ['_controller' => 'App\\Controller\\ServiceController::new'], [], [['text', '/admin/service/new']], [], [], []],
    'app_service_show' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/service']], [], [], []],
    'app_service_edit' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/service']], [], [], []],
    'app_service_delete' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/service']], [], [], []],
    'shop' => [[], ['_controller' => 'App\\Controller\\ShopController::index'], [], [['text', '/shop']], [], [], []],
    'app_users_index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/admin/users/']], [], [], []],
    'app_users_new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/admin/users/new']], [], [], []],
    'app_users_show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'app_users_edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'app_users_delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\CartController::index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'App\Controller\CartController::add_to_cart' => [[], ['_controller' => 'App\\Controller\\CartController::add_to_cart'], [], [['text', '/add_to_cart']], [], [], []],
    'App\Controller\CartController::update_cart' => [[], ['_controller' => 'App\\Controller\\CartController::update_cart'], [], [['text', '/update_cart']], [], [], []],
    'App\Controller\CartController::remove_to_cart' => [[], ['_controller' => 'App\\Controller\\CartController::remove_to_cart'], [], [['text', '/remove_to_cart']], [], [], []],
    'App\Controller\CategoryController::index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category']], [], [], []],
    'App\Controller\CheckoutController::index' => [[], ['_controller' => 'App\\Controller\\CheckoutController::index'], [], [['text', '/checkout']], [], [], []],
    'App\Controller\ChoiceRoleController::index' => [[], ['_controller' => 'App\\Controller\\ChoiceRoleController::index'], [], [['text', '/rolecustomer']], [], [], []],
    'App\Controller\CommandController::index' => [[], ['_controller' => 'App\\Controller\\CommandController::index'], [], [['text', '/admin/command/']], [], [], []],
    'App\Controller\CommandController::new' => [[], ['_controller' => 'App\\Controller\\CommandController::new'], [], [['text', '/admin/command/new']], [], [], []],
    'App\Controller\CommandController::show' => [['id'], ['_controller' => 'App\\Controller\\CommandController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/command']], [], [], []],
    'App\Controller\CommandController::edit' => [['id'], ['_controller' => 'App\\Controller\\CommandController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/command']], [], [], []],
    'App\Controller\CommandController::delete' => [['id'], ['_controller' => 'App\\Controller\\CommandController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/command']], [], [], []],
    'App\Controller\GestionDevisController::index' => [[], ['_controller' => 'App\\Controller\\GestionDevisController::index'], [], [['text', '/admin/gestion/devis']], [], [], []],
    'App\Controller\GestionProduitsController::index' => [[], ['_controller' => 'App\\Controller\\GestionProduitsController::index'], [], [['text', '/admin/gestion/produits']], [], [], []],
    'App\Controller\GestionStockController::index' => [[], ['_controller' => 'App\\Controller\\GestionStockController::index'], [], [['text', '/admin/gestion/stock']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\PaymentController::createPaymentIntent' => [[], ['_controller' => 'App\\Controller\\PaymentController::createPaymentIntent'], [], [['text', '/create-payment-intent']], [], [], []],
    'App\Controller\PaymentController::confirmPayment' => [[], ['_controller' => 'App\\Controller\\PaymentController::confirmPayment'], [], [['text', '/payment_confirmation']], [], [], []],
    'App\Controller\ProductCategoryController::index' => [[], ['_controller' => 'App\\Controller\\ProductCategoryController::index'], [], [['text', '/admin/product/category/']], [], [], []],
    'App\Controller\ProductCategoryController::new' => [[], ['_controller' => 'App\\Controller\\ProductCategoryController::new'], [], [['text', '/admin/product/category/new']], [], [], []],
    'App\Controller\ProductCategoryController::show' => [['id'], ['_controller' => 'App\\Controller\\ProductCategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/category']], [], [], []],
    'App\Controller\ProductCategoryController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProductCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/category']], [], [], []],
    'App\Controller\ProductCategoryController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProductCategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/category']], [], [], []],
    'App\Controller\ProductController::index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/admin/product/']], [], [], []],
    'App\Controller\ProductController::new' => [[], ['_controller' => 'App\\Controller\\ProductController::new'], [], [['text', '/admin/product/new']], [], [], []],
    'App\Controller\ProductController::show' => [['id'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'App\Controller\ProductController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'App\Controller\ProductController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'App\Controller\ProductDetailsController::index' => [[], ['_controller' => 'App\\Controller\\ProductDetailsController::index'], [], [['text', '/details']], [], [], []],
    'App\Controller\ProfilController::index' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil']], [], [], []],
    'App\Controller\ProfilController::show_detail_command' => [[], ['_controller' => 'App\\Controller\\ProfilController::show_detail_command'], [], [['text', '/show_detail_command']], [], [], []],
    'App\Controller\ProfilController::show_detail_request' => [[], ['_controller' => 'App\\Controller\\ProfilController::show_detail_request'], [], [['text', '/show_detail_request']], [], [], []],
    'App\Controller\QrStatusController::index' => [[], ['_controller' => 'App\\Controller\\QrStatusController::index'], [], [['text', '/admin/qr/status/']], [], [], []],
    'App\Controller\QrStatusController::new' => [[], ['_controller' => 'App\\Controller\\QrStatusController::new'], [], [['text', '/admin/qr/status/new']], [], [], []],
    'App\Controller\QrStatusController::show' => [['id'], ['_controller' => 'App\\Controller\\QrStatusController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/qr/status']], [], [], []],
    'App\Controller\QrStatusController::edit' => [['id'], ['_controller' => 'App\\Controller\\QrStatusController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/qr/status']], [], [], []],
    'App\Controller\QrStatusController::delete' => [['id'], ['_controller' => 'App\\Controller\\QrStatusController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/qr/status']], [], [], []],
    'App\Controller\QuoteRequestController::index' => [[], ['_controller' => 'App\\Controller\\QuoteRequestController::index'], [], [['text', '/admin/quote/request/']], [], [], []],
    'App\Controller\QuoteRequestController::new' => [[], ['_controller' => 'App\\Controller\\QuoteRequestController::new'], [], [['text', '/admin/quote/request/new']], [], [], []],
    'App\Controller\QuoteRequestController::show' => [['id'], ['_controller' => 'App\\Controller\\QuoteRequestController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/quote/request']], [], [], []],
    'App\Controller\QuoteRequestController::edit' => [['id'], ['_controller' => 'App\\Controller\\QuoteRequestController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/quote/request']], [], [], []],
    'App\Controller\QuoteRequestController::delete' => [['id'], ['_controller' => 'App\\Controller\\QuoteRequestController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/quote/request']], [], [], []],
    'App\Controller\QuoteResquetController::index' => [[], ['_controller' => 'App\\Controller\\QuoteResquetController::index'], [], [['text', '/quote/resquet']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RequestController::index' => [[], ['_controller' => 'App\\Controller\\RequestController::index'], [], [['text', '/request']], [], [], []],
    'App\Controller\RequestController::add_to_request' => [[], ['_controller' => 'App\\Controller\\RequestController::add_to_request'], [], [['text', '/add_to_request']], [], [], []],
    'App\Controller\RequestController::update_request' => [[], ['_controller' => 'App\\Controller\\RequestController::update_request'], [], [['text', '/update_request']], [], [], []],
    'App\Controller\RequestController::remove_to_request' => [[], ['_controller' => 'App\\Controller\\RequestController::remove_to_request'], [], [['text', '/remove_to_request']], [], [], []],
    'App\Controller\RequestController::send_request' => [[], ['_controller' => 'App\\Controller\\RequestController::send_request'], [], [['text', '/send_request']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\ServiceCatalogueController::index' => [[], ['_controller' => 'App\\Controller\\ServiceCatalogueController::index'], [], [['text', '/service/catalogue']], [], [], []],
    'App\Controller\ServiceController::index' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/admin/service/']], [], [], []],
    'App\Controller\ServiceController::new' => [[], ['_controller' => 'App\\Controller\\ServiceController::new'], [], [['text', '/admin/service/new']], [], [], []],
    'App\Controller\ServiceController::show' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/service']], [], [], []],
    'App\Controller\ServiceController::edit' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/service']], [], [], []],
    'App\Controller\ServiceController::delete' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/service']], [], [], []],
    'App\Controller\ShopController::index' => [[], ['_controller' => 'App\\Controller\\ShopController::index'], [], [['text', '/shop']], [], [], []],
    'App\Controller\UsersController::index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/admin/users/']], [], [], []],
    'App\Controller\UsersController::new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/admin/users/new']], [], [], []],
    'App\Controller\UsersController::show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'App\Controller\UsersController::edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'App\Controller\UsersController::delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
];
