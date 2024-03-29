<?php

//Clear Cache
Route::get('clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'Cache Cleared Successfully'; //Return anything
});

Route::get('/','HomeUIController@index');
Route::get('/products','ProductsController@productsmain');
Route::get('/products/{url}','ProductsController@cctvPrimaryCategory');
Route::get('/camera/{url}','ProductsController@byMegaPixel');
Route::get('/brand/{url}','ProductsController@byBrand');

Route::get('/category/{url}','ProductsController@cctvSecondaryCategory');
Route::get('/water-purifier-kit-price-bangladesh','ProductsController@order');
Route::get('/categoryproduct','ProductsController@categoryProduct');

Route::get('/blog','BlogController@index');
Route::get('/blog/{url}','BlogController@blogView');

Route::get('/about-us','HomeUIController@about');
Route::get('/contact','ContactController@index');
Route::get('/complaint','HomeUIController@complaint');
Route::get('/faqs','HomeUIController@complaint');
Route::get('/water-filter-price-bangladesh','HomeUIController@waterPurifire');

Route::get('/login','HomeUIController@login');
Route::get('/privacy-policy','HomeUIController@privacyPolicy');
Route::get('/terms-condition','HomeUIController@termsCondition');
Route::get('/company-document','HomeUIController@companyDocument');
Route::get('/return-refund-policy','HomeUIController@returnRefundPolicy');

Route::post('/contact','ContactController@sendMail');
Route::get('/news','NewsController@index');
Route::get('/news/{url}','NewsController@NewsView');
Route::get('/sitemap','HomeUIController@siteMap');

Route::get('/drinkcan-office-address-bangladesh','StoreLocationController@location');
Route::get('/districtby-thana','StoreLocationController@districtByThana');
Route::get('/thanaby-store','StoreLocationController@thanaByStoreLocation');

Route::get('/sucess','OrderController@sucessOrder');
Route::post('/search','ProductsController@bySearch');
Route::post('order-gkk','OrderController@order');
Route::post('confirm-order','OrderController@order');
Route::post('home-demo','HomeDemoController@order');


Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/checkout', 'CartController@checkout')->name('checkout.index');
Route::get('/get/division/{id}', 'StoreLocationController@get_district')->name('get.district');



/////////////// Admin Route ///////////////

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/admin/admin-panel', 'HomeController@index')->middleware('AdminUser');
Route::post('admin/userregister','UserDataController@selfUserRegister');
Route::get('/verify','UserDataController@userVerify');
Route::post('/check-verify','UserDataController@checkVerify');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');



Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/forget-token-checker', 'Auth\ForgotPasswordController@forgetTokenVerificationChecker');
Route::post('password/forget-token-checker', 'Auth\ForgotPasswordController@forgetTokenVerificationCheck');
Route::get('password/new-password-set', 'Auth\ForgotPasswordController@userNewPassword');
Route::get('password/new-password-set', 'Auth\ForgotPasswordController@userNewPassword');
Route::post('password/new-password-set', 'Auth\ForgotPasswordController@userNewPasswordSet');


Route::get('/user-panel','UserDataController@userPanel')->middleware('auth');
Route::get('/user-panel-pass-edit','UserDataController@userPasswordEdit')->middleware('auth');
Route::post('/user-panel-pass-update','UserDataController@userPasswordChange')->middleware('auth');
Route::get('/user-panel-info-edit','UserDataController@userPanelInfoEdit')->middleware('auth');
Route::post('/user-panel-info-update','UserDataController@userInfoUpdate')->middleware('auth');
Route::post('/user-panel-image-update','UserDataController@userImageUpload')->middleware('auth');


Route::get('admin/customer-mail-send','CustomerMailSystem@CustomerMail')->middleware('AdminUser');
Route::post('admin/customer-mail-send','CustomerMailSystem@CustomerMailSend')->middleware('AdminUser');
Route::get('admin/conditional-user-mail-count','CustomerMailSystem@ConditionalUserCount')->middleware('AdminUser');



Route::get('admin/price-list-manage','PriceListController@manage')->middleware('AdminUser');
Route::post('admin/price-list-store','PriceListController@store')->middleware('AdminUser');
Route::get('admin/price-list-delete/{id}','PriceListController@delete')->middleware('AdminUser');


Route::get('admin/client-feedback-manage','CliendFeedBack@manage')->middleware('AdminUser');
Route::get('admin/client-feedback-add','CliendFeedBack@add')->middleware('AdminUser');
Route::post('admin/client-feedback-store','CliendFeedBack@store')->middleware('AdminUser');
Route::get('admin/client-feedback-edit/{id}','CliendFeedBack@edit')->middleware('AdminUser');
Route::post('admin/client-feedback-update/{id}','CliendFeedBack@update')->middleware('AdminUser');
Route::get('admin/client-feedback-delete/{id}','CliendFeedBack@delete')->middleware('AdminUser');
Route::get('admin/client-feedback-active-deactive/{status}/{postid}','CliendFeedBack@activeDeactive')->middleware('AdminUser');




Route::get('admin/thana-name-manage','StoreLocationController@thanaManage')->middleware('AdminUser');
Route::post('admin/thana-name-store','StoreLocationController@thanaNameStore')->middleware('AdminUser');
Route::get('admin/thana-name-edit/{id}','StoreLocationController@thanaNameEdit')->middleware('AdminUser');
Route::post('admin/thana-name-update/{id}','StoreLocationController@thanaNameUpdate')->middleware('AdminUser');
Route::get('admin/thana-name-delete/{id}','StoreLocationController@thanaNameDelete')->middleware('AdminUser');



Route::get('admin/store-location-manage','StoreLocationController@storeLocationManage')->middleware('AdminUser');
Route::post('admin/store-location-store','StoreLocationController@store')->middleware('AdminUser');
Route::get('admin/store-location-edit/{id}','StoreLocationController@storeLocationEdit')->middleware('AdminUser');
Route::post('admin/store-location-update/{id}','StoreLocationController@storeLocationUpdate')->middleware('AdminUser');
Route::get('admin/store-location-delete/{id}','StoreLocationController@storeLocationDelete')->middleware('AdminUser');


Route::get('admin/homedemo-manage','HomeDemoController@manage')->middleware('AdminUser');
Route::get('admin/homedemo-edit/{id}','HomeDemoController@demoEdit')->middleware('AdminUser');
Route::post('admin/homedemo-update/{id}','HomeDemoController@demoUpdate')->middleware('AdminUser');
Route::get('admin/homedemo-delete/{id}','HomeDemoController@demoDelete')->middleware('AdminUser');


Route::get('admin/order-manage','OrderController@orderManage')->middleware('AdminUser');
Route::get('admin/order-view/{id}','OrderController@orderView')->middleware('AdminUser');
Route::get('admin/order-edit/{id}','OrderController@orderEdit')->middleware('AdminUser');
Route::post('admin/order-update/{id}','OrderController@orderUpdate')->middleware('AdminUser');
Route::get('admin/order-delete/{id}','OrderController@orderDelete')->middleware('AdminUser');
Route::post('admin/order-export', 'OrderController@orderExport')->middleware('AdminUser');




Route::post('complain-store','ComplainController@store');
Route::get('admin/complain-manage','ComplainController@complainManage')->middleware('AdminUser');
Route::get('admin/complain-edit/{id}','ComplainController@complainEdit')->middleware('AdminUser');
Route::post('admin/complain-update/{id}','ComplainController@complainUpdate')->middleware('AdminUser');
Route::get('admin/complain-delete/{id}','ComplainController@complainDelete')->middleware('AdminUser');




Route::get('admin/training-manage','TrainingController@trainingManage')->middleware('AdminUser');
Route::get('admin/training-add','TrainingController@add')->middleware('AdminUser');
Route::post('admin/training-store','TrainingController@store')->middleware('AdminUser');
Route::get('admin/training-edit/{id}','TrainingController@edit')->middleware('AdminUser');
Route::post('admin/training-update/{id}','TrainingController@update')->middleware('AdminUser');
Route::get('admin/training-delete/{id}','TrainingController@delete')->middleware('AdminUser');
Route::get('admin/training-active-deactive/{status}/{postid}','TrainingController@activeDeactive')->middleware('AdminUser');




Route::get('admin/eventsmanage','EventsController@eventsManage')->middleware('AdminUser');
Route::get('admin/events-add','EventsController@add')->middleware('AdminUser');
Route::post('admin/events-store','EventsController@store')->middleware('AdminUser');
Route::get('admin/events-edit/{id}','EventsController@edit')->middleware('AdminUser');
Route::post('admin/events-update/{id}','EventsController@update')->middleware('AdminUser');
Route::get('admin/events-delete/{id}','EventsController@delete')->middleware('AdminUser');
Route::get('admin/events-active-deactive/{status}/{postid}','EventsController@activeDeactive')->middleware('AdminUser');



Route::get('admin/blog-category','BlogController@blogCategory')->middleware('AdminUser');
Route::post('admin/store-category','BlogController@storeCategory')->middleware('AdminUser');
Route::get('admin/edit-blog-category/{id}','BlogController@editCategory')->middleware('AdminUser');
Route::get('admin/view-blog-category/{id}','BlogController@viewBlogCategory')->middleware('AdminUser');
Route::post('admin/update-blog-category/{id}','BlogController@updateCategory')->middleware('AdminUser');
Route::get('admin/delete-blog-category/{id}','BlogController@deleteCategory')->middleware('AdminUser');



Route::get('admin/blog-manage','BlogController@manage')->middleware('AdminUser');
Route::get('admin/blog-active-deactive/{status}/{postid}','BlogController@activeDeactive')->middleware('AdminUser');
Route::get('admin/blog-add','BlogController@add')->middleware('AdminUser');
Route::post('admin/blog-store','BlogController@store')->middleware('AdminUser');
Route::get('admin/blog-edit/{id}','BlogController@edit')->middleware('AdminUser');
Route::post('admin/blog-update/{id}','BlogController@update')->middleware('AdminUser');
Route::get('admin/blog-delete/{id}','BlogController@delete')->middleware('AdminUser');



Route::get('admin/software-manage','SupportController@softwareManage')->middleware('AdminUser');
Route::get('admin/software-active-deactive/{status}/{postid}','SupportController@activeDeactive')->middleware('AdminUser');
Route::get('admin/software-add','SupportController@softwareAdd')->middleware('AdminUser');
Route::post('admin/software-store','SupportController@softwareStore')->middleware('AdminUser');
Route::get('admin/software-edit/{id}','SupportController@softwareEdit')->middleware('AdminUser');
Route::post('admin/software-update/{id}','SupportController@softwareUpdate')->middleware('AdminUser');
Route::get('admin/software-delete/{id}','SupportController@softwareDelete')->middleware('AdminUser');




Route::get('admin/solutions-manage','SolutionsController@solutionsManage')->middleware('AdminUser');
Route::get('admin/solutions-add','SolutionsController@add')->middleware('AdminUser');
Route::post('admin/solutions-store','SolutionsController@store')->middleware('AdminUser');
Route::get('admin/solutions-edit/{id}','SolutionsController@edit')->middleware('AdminUser');
Route::post('admin/solutions-update/{id}','SolutionsController@update')->middleware('AdminUser');
Route::get('admin/solutions-delete/{id}','SolutionsController@delete')->middleware('AdminUser');
Route::get('admin/solutions-active-deactive/{status}/{postid}','SolutionsController@activeDeactive')->middleware('AdminUser');





Route::get('admin/news-manage','NewsController@newsManage')->middleware('AdminUser');
Route::get('admin/news-add','NewsController@add')->middleware('AdminUser');
Route::post('admin/news-store','NewsController@store')->middleware('AdminUser');
Route::get('admin/news-edit/{id}','NewsController@edit')->middleware('AdminUser');
Route::post('admin/news-update/{id}','NewsController@update')->middleware('AdminUser');
Route::get('admin/news-delete/{id}','NewsController@delete')->middleware('AdminUser');
Route::get('admin/news-active-deactive/{status}/{postid}','NewsController@activeDeactive')->middleware('AdminUser');


Route::get('admin/product-about-manage','ProductsController@aboutProduct')->middleware('AdminUser');
Route::post('admin/store-product-about','ProductsController@aboutProductStore')->middleware('AdminUser');
Route::get('admin/product-about-edit/{id}','ProductsController@aboutProductEdit')->middleware('AdminUser');
Route::post('admin/product-about-update/{id}','ProductsController@aboutProductUpdate')->middleware('AdminUser');
Route::get('admin/product-about-delete/{id}','ProductsController@aboutProductDelete')->middleware('AdminUser');


Route::get('admin/product-feature-manage','ProductsController@featureProduct')->middleware('AdminUser');
Route::post('admin/store-product-feature','ProductsController@featureProductStore')->middleware('AdminUser');
Route::get('admin/product-feature-edit/{id}','ProductsController@featureProductEdit')->middleware('AdminUser');
Route::post('admin/product-feature-update/{id}','ProductsController@featureProductUpdate')->middleware('AdminUser');
Route::get('admin/product-feature-delete/{id}','ProductsController@featureProductDelete')->middleware('AdminUser');



Route::get('admin/product-faq-manage','FaqController@productFaq')->middleware('AdminUser');
Route::post('admin/store-product-faq','FaqController@storeProductFAQ')->middleware('AdminUser');
Route::get('admin/product-faq-edit/{id}','FaqController@productFAQEdit')->middleware('AdminUser');
Route::post('admin/product-faq-update/{id}','FaqController@featureProduct')->middleware('AdminUser');
Route::get('admin/product-faq-delete/{id}','FaqController@featureProduct')->middleware('AdminUser');


Route::get('admin/products-brand','ProductsController@productsBrand')->middleware('AdminUser');
Route::post('admin/products-brand-store','ProductsController@brandStore')->middleware('AdminUser');
Route::get('admin/products-brand-edit/{id}','ProductsController@brandEdit')->middleware('AdminUser');
Route::get('admin/products-brand-view/{id}','ProductsController@brandView')->middleware('AdminUser');
Route::post('admin/products-brand-update/{id}','ProductsController@brandUpdate')->middleware('AdminUser');
Route::get('admin/products-brand-delete/{id}','ProductsController@brandDelete')->middleware('AdminUser');



Route::get('admin/cctv-brand','ProductsController@cctvBrand')->middleware('AdminUser');
Route::post('admin/cctv-brand','ProductsController@cctvBrandStore')->middleware('AdminUser');
Route::get('admin/cctv-brand-edit/{id}','ProductsController@cctvBrandEdit')->middleware('AdminUser');
Route::post('admin/cctv-brand-update/{id}','ProductsController@cctvBrandUpdate')->middleware('AdminUser');
Route::get('admin/cctv-brand-delete/{id}','ProductsController@cctvBrandDelete')->middleware('AdminUser');


Route::get('admin/products-primary-category','ProductsController@primaryCategoryManage')->middleware('AdminUser');
Route::post('admin/products-primary-store','ProductsController@primaryCategoryStore')->middleware('AdminUser');
Route::get('admin/view-products-primary-category/{id}','ProductsController@viewProductsPrimaryCategory')->middleware('AdminUser');
Route::get('admin/edit-products-primary-category/{id}','ProductsController@primaryCategoryEdit')->middleware('AdminUser');
Route::post('admin/update-products-primary-category/{id}','ProductsController@updateProductsPrimaryCategory')->middleware('AdminUser');
Route::get('admin/delete-products-primary-category/{id}','ProductsController@primaryCategoryDelete')->middleware('AdminUser');



Route::get('admin/discoverproducts','DiscoverProductsController@discoverProduct')->middleware('AdminUser');
Route::get('admin/discoverproducts-add','DiscoverProductsController@discoverProductAdd')->middleware('AdminUser');
Route::post('admin/discoverproducts-store','DiscoverProductsController@discoverProductStore')->middleware('AdminUser');
Route::get('admin/discoverproducts-edit/{id}','DiscoverProductsController@productsGridEdit')->middleware('AdminUser');
Route::post('admin/discoverproducts-update/{id}','DiscoverProductsController@discoverProductUpdate')->middleware('AdminUser');
Route::get('admin/discoverproducts-delete/{id}','DiscoverProductsController@discoverProductDelete')->middleware('AdminUser');
Route::get('admin/discoverproducts-active-deactive/{status}/{postid}','DiscoverProductsController@discoverProductActiveDeactive')->middleware('AdminUser');




Route::get('admin/portfolio-manage','PortfolioController@portfolioManage')->middleware('AdminUser');
Route::get('admin/portfolio-add','PortfolioController@add')->middleware('AdminUser');
Route::post('admin/portfolio-store','PortfolioController@store')->middleware('AdminUser');
Route::get('admin/portfolio-edit/{id}','PortfolioController@edit')->middleware('AdminUser');
Route::post('admin/portfolio-update/{id}','PortfolioController@update')->middleware('AdminUser');
Route::get('admin/portfolio-delete/{id}','PortfolioController@delete')->middleware('AdminUser');
Route::get('admin/portfolio-active-deactive/{status}/{postid}','PortfolioController@activeDeactive')->middleware('AdminUser');




Route::get('admin/cctvmegapixel','CctvMegaPixelController@megaPixelManage')->middleware('AdminUser');
Route::get('admin/cctvmegapixel-view/{id}','CctvMegaPixelController@megaPixelView')->middleware('AdminUser');
Route::post('admin/cctvmegapixel-store','CctvMegaPixelController@megaPixelStore')->middleware('AdminUser');
Route::get('admin/cctvmegapixel-edit/{id}','CctvMegaPixelController@megaPixelEdit')->middleware('AdminUser');
Route::post('admin/cctvmegapixel-update/{id}','CctvMegaPixelController@updateMegaPixel')->middleware('AdminUser');
Route::get('admin/cctvmegapixel-delete/{id}','CctvMegaPixelController@megaPixelDelete')->middleware('AdminUser');



Route::get('admin/products-secondary-category','ProductsController@productsSecondaryCategoryManage')->middleware('AdminUser');
Route::post('admin/products-secondary-store','ProductsController@secondaryCategoryStore')->middleware('AdminUser');
Route::get('admin/view-products-secondary-category/{id}','ProductsController@secondaryCategoryView')->middleware('AdminUser');
Route::get('admin/edit-products-secondary-category/{id}','ProductsController@productsSecondaryEdit')->middleware('AdminUser');
Route::post('admin/update-products-secondary-category/{id}','ProductsController@secondaryCategoryUpdate')->middleware('AdminUser');
Route::get('admin/delete-products-secondary-category/{id}','ProductsController@secondaryCategoryDelete')->middleware('AdminUser');


Route::get('admin/products-primary-catby-secondary-cat','ProductsController@primaryCategoryBySecondary')->middleware('AdminUser');
Route::get('admin/products-manage','ProductsController@manage')->middleware('AdminUser');
Route::get('admin/products-add','ProductsController@add')->middleware('AdminUser');
Route::post('admin/products-store','ProductsController@store')->middleware('AdminUser');
Route::get('admin/products-edit/{id}','ProductsController@edit')->middleware('AdminUser');
Route::post('admin/products-update/{id}','ProductsController@update')->middleware('AdminUser');
Route::get('admin/products-delete/{id}','ProductsController@delete')->middleware('AdminUser');
Route::get('admin/products-active-deactive/{status}/{postid}','ProductsController@activeDeactive')->middleware('AdminUser');
Route::get('admin/products-price-active-deactive/{status}/{postid}','ProductsController@priceActiveDeactive')->middleware('AdminUser');
Route::get('admin/products-datasheet-remove/{id}','ProductsController@dataSheetRemove')->middleware('AdminUser');


Route::get('admin/authorised-manage','AuthorizationController@manage')->middleware('AdminUser');
Route::get('admin/authorised-add','AuthorizationController@add')->middleware('AdminUser');
Route::post('admin/authorised-store','AuthorizationController@store')->middleware('AdminUser');
Route::get('admin/authorised-edit/{id}','AuthorizationController@edit')->middleware('AdminUser');
Route::post('admin/authorised-update/{id}','AuthorizationController@update')->middleware('AdminUser');
Route::get('admin/authorised-delete/{id}','AuthorizationController@delete')->middleware('AdminUser');
Route::get('admin/authorised-active-deactive/{status}/{postid}','AuthorizationController@activeDeactive')->middleware('AdminUser');

Route::get('admin/userdata-manage','UserDataController@userDataManage')->middleware('AdminUser');
Route::get('admin/userdata-add','UserDataController@userDataAdd')->middleware('AdminUser');
Route::post('admin/userdata-add','UserDataController@userDataStore')->middleware('AdminUser');
Route::get('admin/userdata-edit/{id}','UserDataController@userDataEdit')->middleware('AdminUser');
Route::post('admin/userdata-update/{id}','UserDataController@userDataUpdate')->middleware('AdminUser');
Route::get('admin/userdata-delete/{id}','UserDataController@userDataDelete')->middleware('AdminUser');



Route::get('admin/electroporno-slider-add','ElectropornoSliderController@electroPornoSliderAdd')->middleware('AdminUser');
Route::post('admin/electroporno-slider-store','ElectropornoSliderController@electroPornoSliderStore')->middleware('AdminUser');
Route::get('admin/electroporno-slider-delete/{id}','ElectropornoSliderController@electroPornoSliderDelete')->middleware('AdminUser');
Route::get('admin/electroporno-slider-active-deactive/{status}/{id}','ElectropornoSliderController@electroPornoSliderActiveDeactive')->middleware('AdminUser');
Route::get('admin/electroporno-slider-manage','ElectropornoSliderController@electroPornoSlider')->middleware('AdminUser');



Route::get('admin/quicklinks','QuickLinksController@index')->middleware('AdminUser');
Route::post('admin/quicklinks','QuickLinksController@store')->middleware('AdminUser');
Route::get('admin/edit-quicklinks/{id}','QuickLinksController@edit')->middleware('AdminUser');
Route::post('admin/update-quicklinks/{id}','QuickLinksController@update')->middleware('AdminUser');
Route::get('admin/view-quicklinks/{id}','QuickLinksController@view')->middleware('AdminUser');
Route::get('admin/delete-quicklinks/{id}','QuickLinksController@delete')->middleware('AdminUser');



Route::get('admin/sociallinks','QuickLinksController@socialLinks')->middleware('AdminUser');
Route::post('admin/sociallinks','QuickLinksController@storeSocialLinks')->middleware('AdminUser');
Route::get('admin/edit-sociallinks/{id}','QuickLinksController@sociallinksEdit')->middleware('AdminUser');
Route::post('admin/update-sociallinks/{id}','QuickLinksController@sociallinksUpdate')->middleware('AdminUser');
Route::get('admin/view-sociallinks/{id}','QuickLinksController@sociallinksView')->middleware('AdminUser');
Route::get('admin/delete-sociallinks/{id}','QuickLinksController@sociallinksDelete')->middleware('AdminUser');


Route::get('/admin/siteprofile','SiteProfileController@index')->middleware('AdminUser');
Route::post('/admin/siteprofile-update','SiteProfileController@siteProfileUpdate')->middleware('AdminUser');



Route::post('/admin/formSubmit','ImageUploadController@formSubmit')->middleware('AdminUser');
Route::get('/admin/getallimage','ImageUploadController@imagelist')->middleware('AdminUser');
Route::post('/admin/productsimageupload','ImageUploadController@productsImageUpload')->middleware('AdminUser');
Route::get('/admin/getproductsimage','ImageUploadController@productsImageGet')->middleware('AdminUser');
Route::post('/admin/productimagedelete/{id}','ImageUploadController@productImageDelete')->middleware('AdminUser');
Route::post('/admin/generalimagedelete/{id}','ImageUploadController@generalImageDelete')->middleware('AdminUser');

Route::get('/{url}','ProductsController@view');



//Cart
Route::get('/cart/store/{id}', 'CartController@store');
Route::get('/cart/count', 'CartController@cartCount');
Route::get('/cart/total', 'CartController@cartTotal');
Route::get('/get/checkout', 'CartController@getCheckout');
Route::get('/drop/cart', 'CartController@dropCart');
Route::get('/side/cart', 'CartController@sideCart');
Route::get('/page/cart', 'CartController@pageCart');
Route::get('/qty/inc/{rowId}', 'CartController@qtyInc');
Route::get('/qty/dec/{rowId}', 'CartController@qtyDec');
Route::get('cart/delete/{id}','CartController@cartdelete');
Route::get('/details/cart/store/{id}', 'CartController@detailsStore');

