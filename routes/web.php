<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index');
Route::get('/category-product/{id}', 'FrontendController@categoryproduct');
Route::get('/product-details/{id}', 'FrontendController@productDetails');

Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product', 'CartController@updateCart');
Route::get('/delete-cart-item/{rowId}', 'CartController@deleteCartItem');
Route::get('/checkout', 'CheckoutController@index');
Route::post('/customer-register', 'CheckoutController@saveCustomerInfo');
Route::get('/shipping-info', 'CheckoutController@shippingInfo');
Route::post('/new-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/payment-info', 'CheckoutController@selectPaymentInfo');
Route::post('/new-order', 'CheckoutController@saveOrderInfo');
Route::get('/complete-order', 'CheckoutController@completeOrderInfo');
Route::get('/order/view/{id}', 'orderController@viewOrderDetails');

Route::get('/account', 'FrontendController@account');
Route::get('/contact', 'FrontendController@contact');
Route::get('/create-account', 'FrontendController@createAccount');
//Route::get('/checkout', 'FrontendController@checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/add', 'UserController@showUserForm');
Route::post('/register', 'RegisterController@register');

Route::get('/category/add', 'CategoryController@showCategoryForm');
Route::post('/category/new', 'CategoryController@saveCategoryInfo');
Route::get('/category/manage', 'CategoryController@manageCategoryInfo');
Route::get('/category/edit/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategoryInfo');

Route::get('/brand/add', 'BrandController@showBrandForm');
Route::post('/brand/new', 'BrandController@saveBrandInfo');
Route::get('/brand/manage', 'BrandController@manageBrandInfo');
Route::get('/brand/edit/{id}', 'BrandController@editBrandInfo');
Route::post('/brand/update', 'BrandController@updateBrandInfo');
Route::get('/brand/delete/{id}', 'BrandController@deleteBrandInfo');

Route::get('/product/add', 'ProductController@showProductForm');
Route::post('/product/new', 'ProductController@saveProductInfo');
Route::get('/product/manage', 'ProductController@manageProductInfo');
Route::get('/product/view/{id}', 'ProductController@viewProductInfo');
Route::get('/product/unpublished/{id}', 'ProductController@unpublishedProductInfo');
Route::get('/product/published/{id}', 'ProductController@publishedProductInfo');
Route::get('/product/edit/{id}', 'ProductController@editProductInfo');
Route::post('/product/update', 'ProductController@updateProductInfo');
Route::get('/product/delete/{id}', 'ProductController@deleteProductInfo');

Route::get('/order/manage', 'OrderController@manageOrder');
