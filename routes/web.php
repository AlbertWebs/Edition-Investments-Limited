<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about-us',[App\Http\Controllers\HomeController::class, 'about']);
Route::get('/products-and-services',[App\Http\Controllers\HomeController::class, 'services']);
Route::get('/portfolio',[App\Http\Controllers\HomeController::class, 'portfolio']);
Route::get('/contact-us',[App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/get-quote',[App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/news-and-blog',[App\Http\Controllers\HomeController::class, 'news']);
Route::get('/terms-and-conditions',[App\Http\Controllers\HomeController::class, 'terms']);
Route::get('/privacy-policy',[App\Http\Controllers\HomeController::class, 'privacy']);
Route::get('/portfolio/{name}',[App\Http\Controllers\HomeController::class, 'folio']);
Route::get('/our-work/{name}',[App\Http\Controllers\HomeController::class, 'our_work']);
Route::get('/copyright',[App\Http\Controllers\HomeController::class, 'copyright']);
Route::post('/submitMessage',[App\Http\Controllers\HomeController::class, 'submitMessage']);
Route::post('/getQuote',[App\Http\Controllers\HomeController::class, 'getQuote']);
Route::post('/subscribe',[App\Http\Controllers\HomeController::class, 'subscribe']);
Route::get('/csr',[App\Http\Controllers\HomeController::class, 'csr']);


Route::get('/news/{slug}',[App\Http\Controllers\BlogController::class, 'blog']);
Route::get('/news/categories/{cat}',[App\Http\Controllers\BlogController::class, 'blogCat']);
Route::post('/news/addComment',[App\Http\Controllers\BlogController::class, 'add_comment']);
Route::get('/sitemaps',[App\Http\Controllers\HomeController::class, 'sitemaps']);


Auth::routes();

Route::group(['prefix'=>'dashboard'], function(){

    Route::get('/', [App\Http\Controllers\AdminsController::class, 'index']);

    //Testimonial
    Route::get('/addTestimonial', [App\Http\Controllers\AdminsController::class, 'addTestimonial']);
    Route::post('/add_Testimonial', [App\Http\Controllers\AdminsController::class, 'add_Testimonial']);
    Route::get('/testimonials',[App\Http\Controllers\AdminsController::class, 'testimonials']);
    Route::get('/editTestimonial/{id}', [App\Http\Controllers\AdminsController::class, 'editTestimonial']);
    Route::get('/deleteTestimonial/{id}', [App\Http\Controllers\AdminsController::class, 'deleteTestimonial']);
    Route::post('/edit_Testimonial/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Testimonial']);

    // Pages
    Route::get('/pages',[App\Http\Controllers\AdminsController::class, 'values']);

    //Terms Privacy copyright
    //copyright
    Route::get('/copyright',[App\Http\Controllers\AdminsController::class, 'copyright']);
    Route::post('/edit_copyright', [App\Http\Controllers\AdminsController::class, 'edit_copyright']);
    // Delivery Terms
    Route::get('/delivery',[App\Http\Controllers\AdminsController::class, 'delivery']);
    Route::post('/edit_delivery', [App\Http\Controllers\AdminsController::class, 'edit_delivery']);
    //Privacy
    Route::get('/privacy',[App\Http\Controllers\AdminsController::class, 'privacy']);
    Route::get('/addPrivacy', [App\Http\Controllers\AdminsController::class, 'addPrivacy']);
    Route::get('/editPrivacy/{id}', [App\Http\Controllers\AdminsController::class, 'editPrivacy']);
    Route::post('/add_privacy', [App\Http\Controllers\AdminsController::class, 'add_privacy']);
    Route::get('/delete_privacy/{id}',[App\Http\Controllers\AdminsController::class, 'delete_privacy']);
    Route::post('/edit_privacy/{id}', [App\Http\Controllers\AdminsController::class, 'edit_privacy']);
    //values
    Route::get('/values',[App\Http\Controllers\AdminsController::class, 'values']);
    Route::get('/addValues', [App\Http\Controllers\AdminsController::class, 'addValues']);
    Route::get('/editValues/{id}', [App\Http\Controllers\AdminsController::class, 'editValues']);
    Route::post('/add_values', [App\Http\Controllers\AdminsController::class, 'add_values']);
    Route::get('/delete_values/{id}',[App\Http\Controllers\AdminsController::class, 'delete_values']);
    Route::post('/edit_values/{id}', [App\Http\Controllers\AdminsController::class, 'edit_values']);

    //Offers
    Route::get('/Products_offer',[App\Http\Controllers\AdminsController::class, 'Products_offer']);
    Route::get('/swapoffer/{id}',[App\Http\Controllers\AdminsController::class, 'swapoffer']);
    Route::get('/deleteOffer/{id}',[App\Http\Controllers\AdminsController::class, 'deleteOffer']);
    Route::post('/swap_offer/{id}',[App\Http\Controllers\AdminsController::class, 'swap_offer']);
    Route::get('/special_offer/{id}',[App\Http\Controllers\AdminsController::class, 'special_offer']);
    Route::post('/special_offer_post',[App\Http\Controllers\AdminsController::class, 'special_offer_post']);
    Route::get('/special_offer_edit/{id}',[App\Http\Controllers\AdminsController::class, 'special_offer_edit']);
    Route::get('/swap_full/{id}',[App\Http\Controllers\AdminsController::class, 'swap_full']);

    // Featured& trending
    Route::get('/swapTrending/{id}',[App\Http\Controllers\AdminsController::class, 'swapTrending']);
    Route::get('/swapFeatured/{id}',[App\Http\Controllers\AdminsController::class, 'swapFeatured']);
    Route::get('/swapSlider/{id}',[App\Http\Controllers\AdminsController::class, 'swapSlider']);
    Route::get('/swapBanner/{id}',[App\Http\Controllers\AdminsController::class, 'swapBanner']);


    //Who
    Route::get('/who',[App\Http\Controllers\AdminsController::class, 'who']);
    Route::get('/editWho/{id}', [App\Http\Controllers\AdminsController::class, 'editWho']);
    Route::get('/delete_who/{id}',[App\Http\Controllers\AdminsController::class, 'delete_who']);
    Route::post('/edit_who/{id}', [App\Http\Controllers\AdminsController::class, 'edit_who']);

    //why
    Route::get('/why',[App\Http\Controllers\AdminsController::class, 'why']);
    Route::get('/editWhy/{id}', [App\Http\Controllers\AdminsController::class, 'editWhy']);
    Route::get('/delete_why/{id}',[App\Http\Controllers\AdminsController::class, 'delete_why']);
    Route::post('/edit_why/{id}', [App\Http\Controllers\AdminsController::class, 'edit_why']);

    //Terms
    Route::get('/terms',[App\Http\Controllers\AdminsController::class, 'terms']);
    Route::get('/addTerms', [App\Http\Controllers\AdminsController::class, 'addTerms']);
    Route::get('/editTerm/{id}', [App\Http\Controllers\AdminsController::class, 'editTerm']);
    Route::post('/add_term', [App\Http\Controllers\AdminsController::class, 'add_term']);
    Route::post('/edit_term/{id}', [App\Http\Controllers\AdminsController::class, 'edit_term']);
    Route::get('/delete_term/{id}',[App\Http\Controllers\AdminsController::class, 'delete_term']);
    //About
    Route::get('/about',[App\Http\Controllers\AdminsController::class, 'about']);
    Route::post('/about_save', [App\Http\Controllers\AdminsController::class, 'about_save']);
    //Services
    Route::get('/services',[App\Http\Controllers\AdminsController::class, 'services']);
    Route::get('/deleteService/{id}',[App\Http\Controllers\AdminsController::class, 'deleteService']);
    Route::post('/edit_Services/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Services']);
    Route::get('/editServices/{id}', [App\Http\Controllers\AdminsController::class, 'editServices']);
    Route::get('/addService', [App\Http\Controllers\AdminsController::class, 'addService']);
    Route::post('/add_Service', [App\Http\Controllers\AdminsController::class, 'add_Service']);

    //Pricing
    Route::get('/pricing',[App\Http\Controllers\AdminsController::class, 'pricing']);
    Route::get('/deletePricing/{id}',[App\Http\Controllers\AdminsController::class, 'deletePricing']);
    Route::post('/edit_Pricing/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Pricing']);
    Route::get('/editPricing/{id}', [App\Http\Controllers\AdminsController::class, 'editPricing']);
    Route::get('/addPricing', [App\Http\Controllers\AdminsController::class, 'addPricing']);
    Route::post('/add_Pricing', [App\Http\Controllers\AdminsController::class, 'add_Pricing']);

    //Video
    Route::get('/videos',[App\Http\Controllers\AdminsController::class, 'videos']);
    Route::get('/deleteVideo/{id}',[App\Http\Controllers\AdminsController::class, 'deleteVideo']);
    Route::post('/edit_Video/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Video']);
    Route::get('/editVideo/{id}', [App\Http\Controllers\AdminsController::class, 'editVideo']);
    Route::post('/add_Video/{id}', [App\Http\Controllers\AdminsController::class, 'add_Video']);
    Route::get('/addVideo', [App\Http\Controllers\AdminsController::class, 'addVideo']);


    //Porfolio
    Route::get('/portfolio',[App\Http\Controllers\AdminsController::class, 'portfolio']);
    Route::get('/deletePortfolio/{id}',[App\Http\Controllers\AdminsController::class, 'deletePortfolio']);
    Route::post('/edit_Portfolio/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Portfolio']);
    Route::get('/editPortfolio/{id}', [App\Http\Controllers\AdminsController::class, 'editPortfolio']);
    Route::get('/addPortfolio', [App\Http\Controllers\AdminsController::class, 'addPortfolio']);
    Route::post('/add_Portfolio', [App\Http\Controllers\AdminsController::class, 'add_Portfolio']);

    //How It Works
    Route::get('/how',[App\Http\Controllers\AdminsController::class, 'how']);
    Route::get('/deleteHow/{id}',[App\Http\Controllers\AdminsController::class, 'deleteHow']);
    Route::post('/edit_How/{id}', [App\Http\Controllers\AdminsController::class, 'edit_How']);
    Route::get('/editHow/{id}', [App\Http\Controllers\AdminsController::class, 'editHow']);
    Route::get('/addHow', [App\Http\Controllers\AdminsController::class, 'addHow']);
    Route::post('/add_How', [App\Http\Controllers\AdminsController::class, 'add_How']);

    //Gallery
    Route::get('/gallery',[App\Http\Controllers\AdminsController::class, 'gallery']);
    Route::get('/editGallery/{id}',[App\Http\Controllers\AdminsController::class, 'editGallery']);
    Route::get('/deleteGallery/{id}',[App\Http\Controllers\AdminsController::class, 'deleteGallery']);
    Route::post('/save_gallery/{id}', [App\Http\Controllers\AdminsController::class, 'save_gallery']);
    Route::get('/addGallery', [App\Http\Controllers\AdminsController::class, 'addGallery']);
    Route::get('/galleryList', [App\Http\Controllers\AdminsController::class, 'galleryList']);
    Route::post('/add_Gallery', [App\Http\Controllers\AdminsController::class, 'add_Gallery']);

    //Slider
    Route::get('/slider',[App\Http\Controllers\AdminsController::class, 'slider']);
    Route::get('/editSlider/{id}',[App\Http\Controllers\AdminsController::class, 'editSlider']);
    Route::get('/deleteSlider/{id}',[App\Http\Controllers\AdminsController::class, 'deleteSlider']);
    Route::post('/edit_Slider/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Slider']);
    Route::get('/addSlider', [App\Http\Controllers\AdminsController::class, 'addSlider']);
    Route::post('/add_Slider', [App\Http\Controllers\AdminsController::class, 'add_Slider']);

    //Banner
    Route::get('/banner',[App\Http\Controllers\AdminsController::class, 'banners']);
    Route::get('/editBanner/{id}',[App\Http\Controllers\AdminsController::class, 'editBanner']);
    Route::post('/edit_Banner/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Banner']);

    //Clients
    Route::get('/addClient', [App\Http\Controllers\AdminsController::class, 'addClient']);
    Route::post('/add_Client', [App\Http\Controllers\AdminsController::class, 'add_Client']);
    Route::get('/clients',[App\Http\Controllers\AdminsController::class, 'clients']);
    Route::get('/editClient/{id}', [App\Http\Controllers\AdminsController::class, 'editClient']);
    Route::get('/deleteClient/{id}', [App\Http\Controllers\AdminsController::class, 'deleteClient']);
    Route::post('/edit_Client/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Client']);


    //Clients
    Route::get('/addBrand', [App\Http\Controllers\AdminsController::class, 'addBrand']);
    Route::post('/add_Brand', [App\Http\Controllers\AdminsController::class, 'add_Brand']);
    Route::get('/brands',[App\Http\Controllers\AdminsController::class, 'brands']);
    Route::get('/editBrand/{id}', [App\Http\Controllers\AdminsController::class, 'editBrand']);
    Route::get('/deleteBrand/{id}', [App\Http\Controllers\AdminsController::class, 'deleteBrand']);
    Route::post('/edit_Brand/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Brand']);

    //Statisctics
    Route::get('/stats',[App\Http\Controllers\AdminsController::class, 'stats']);
    Route::get('/editStats/{id}', [App\Http\Controllers\AdminsController::class, 'editStats']);
    Route::get('/deleteStats/{id}', [App\Http\Controllers\AdminsController::class, 'deleteStats']);
    Route::post('/edit_Stats/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Stats']);

    //Pages
    Route::get('/pages',[App\Http\Controllers\AdminsController::class, 'pages']);
    Route::get('/pages/{name}',[App\Http\Controllers\AdminsController::class, 'page']);
    Route::get('/editPage/{id}',[App\Http\Controllers\AdminsController::class, 'editPage']);
    Route::get('/deletePage/{id}',[App\Http\Controllers\AdminsController::class, 'deletePage']);
    Route::post('/edit_Page/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Page']);
    Route::get('/addPage', [App\Http\Controllers\AdminsController::class, 'addPage']);
    Route::post('/add_Page', [App\Http\Controllers\AdminsController::class, 'add_Page']);
    Route::post('/set_Page/{name}', [App\Http\Controllers\AdminsController::class, 'set_Page']);
    Route::get('/setPage/{name}', [App\Http\Controllers\AdminsController::class, 'setPage']);

    // My Api
    Route::get('/myApi', [App\Http\Controllers\AdminsController::class, 'myApi']);
    Route::get('/invoices', [App\Http\Controllers\AdminsController::class, 'invoices']);
    Route::get('/deleteInvoice/{id}', [App\Http\Controllers\AdminsController::class, 'deleteInvoice']);
    Route::get('/approveInvoice/{id}', [App\Http\Controllers\AdminsController::class, 'approveInvoice']);


    //Priducts
    Route::get('/products',[App\Http\Controllers\AdminsController::class, 'products']);
    Route::get('/editProduct/{id}',[App\Http\Controllers\AdminsController::class, 'editProduct']);
    Route::get('/editProductDetails/{id}',[App\Http\Controllers\AdminsController::class, 'editProductDetails']);
    Route::get('/deleteProduct/{id}',[App\Http\Controllers\AdminsController::class, 'deleteProduct']);
    Route::post('/edit_Product/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Product']);
    Route::post('/edit_Product_Details/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Product_Details']);
    Route::get('/addProduct', [App\Http\Controllers\AdminsController::class, 'addProduct']);
    Route::post('/add_Product', [App\Http\Controllers\AdminsController::class, 'add_Product']);


    //Admin
    Route::get('/admins',[App\Http\Controllers\AdminsController::class, 'admins']);
    Route::get('/editAdmin/{id}',[App\Http\Controllers\AdminsController::class, 'editAdmin']);
    Route::get('/deleteAdmin/{id}',[App\Http\Controllers\AdminsController::class, 'deleteAdmin']);
    Route::post('/edit_Admin/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Admin']);
    Route::get('/addAdmin', [App\Http\Controllers\AdminsController::class, 'addAdmin']);
    Route::post('/add_Admin', [App\Http\Controllers\AdminsController::class, 'add_Admin']);

    //Orders
    Route::get('/orders',[App\Http\Controllers\AdminsController::class, 'orders']);
    Route::get('/editOrders/{id}',[App\Http\Controllers\AdminsController::class, 'editOrders']);
    Route::get('/deleteOrders/{id}',[App\Http\Controllers\AdminsController::class, 'deleteOrders']);
    Route::get('/confrimOrder/{id}',[App\Http\Controllers\AdminsController::class, 'confrimOrder']);
    Route::get('/swapOrder/{id}',[App\Http\Controllers\AdminsController::class, 'swapOrder']);
    Route::post('/edit_Orders/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Orders']);
    Route::get('/addOrder', [App\Http\Controllers\AdminsController::class, 'addOrder']);
    Route::post('/add_Order', [App\Http\Controllers\AdminsController::class, 'add_Order']);

    //User
    Route::get('/users',[App\Http\Controllers\AdminsController::class, 'users']);
    Route::get('/editUser/{id}',[App\Http\Controllers\AdminsController::class, 'editUser']);
    Route::get('/deleteUser/{id}',[App\Http\Controllers\AdminsController::class, 'deleteUser']);
    Route::post('/edit_User/{id}', [App\Http\Controllers\AdminsController::class, 'edit_User']);
    Route::get('/addUser', [App\Http\Controllers\AdminsController::class, 'addUser']);
    Route::post('/add_User', [App\Http\Controllers\AdminsController::class, 'add_User']);

    //Blog Controls
    Route::get('/blog',[App\Http\Controllers\AdminsController::class, 'blog']);
    Route::get('/editBlog/{id}',[App\Http\Controllers\AdminsController::class, 'editBlog']);
    Route::get('/delete_Blog/{id}',[App\Http\Controllers\AdminsController::class, 'delete_Blog']);
    Route::post('/edit_Blog/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Blog']);
    Route::get('/addBlog', [App\Http\Controllers\AdminsController::class, 'addBlog']);
    Route::post('/add_blog', [App\Http\Controllers\AdminsController::class, 'add_Blog']);
    //Categories Control
    Route::get('/categories',[App\Http\Controllers\AdminsController::class, 'categories']);
    Route::get('/editCategories/{id}',[App\Http\Controllers\AdminsController::class, 'editCategories']);
    Route::get('/deleteCategory/{id}',[App\Http\Controllers\AdminsController::class, 'deleteCategory']);
    Route::post('/edit_Category/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Category']);
    Route::get('/addCategory', [App\Http\Controllers\AdminsController::class, 'addCategory']);
    Route::post('/add_Category', [App\Http\Controllers\AdminsController::class, 'add_Category']);

    //Service Renreded Control
    Route::get('/service_rendered',[App\Http\Controllers\AdminsController::class, 'service_rendered']);
    Route::get('/editService_rendered/{id}',[App\Http\Controllers\AdminsController::class, 'editService_rendered']);
    Route::get('/deleteService_rendered/{id}',[App\Http\Controllers\AdminsController::class, 'deleteService_rendered']);
    Route::post('/edit_Service_rendered/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Service_rendered']);
    Route::get('/addService_rendered', [App\Http\Controllers\AdminsController::class, 'addService_rendered']);
    Route::post('/add_Service_rendered', [App\Http\Controllers\AdminsController::class, 'add_Service_rendered']);

    //Daily
    Route::get('/daily',[App\Http\Controllers\AdminsController::class, 'daily']);
    Route::get('/editDaily/{id}',[App\Http\Controllers\AdminsController::class, 'editDaily']);
    Route::get('/deleteDaily/{id}',[App\Http\Controllers\AdminsController::class, 'deleteDaily']);
    Route::post('/edit_Daily/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Daily']);
    Route::get('/addDaily', [App\Http\Controllers\AdminsController::class, 'addDaily']);
    Route::post('/add_Daily', [App\Http\Controllers\AdminsController::class, 'add_Daily']);


    //Sub Categories
    Route::get('/subCategories',[App\Http\Controllers\AdminsController::class, 'subCategories']);
    Route::get('/editSubCategories/{id}',[App\Http\Controllers\AdminsController::class, 'editSubCategories']);
    Route::get('/deleteSubCategory/{id}',[App\Http\Controllers\AdminsController::class, 'deleteSubCategory']);
    Route::post('/edit_SubCategory/{id}', [App\Http\Controllers\AdminsController::class, 'edit_SubCategory']);
    Route::get('/addSubCategory', [App\Http\Controllers\AdminsController::class, 'addSubCategory']);
    Route::post('/add_SubCategory', [App\Http\Controllers\AdminsController::class, 'add_SubCategory']);

    //Active Services
    Route::get('/traceServices',[App\Http\Controllers\AdminsController::class, 'traceServices']);
    Route::get('/editTraceServices/{id}',[App\Http\Controllers\AdminsController::class, 'editTraceServices']);
    Route::get('/deleteTraceServices/{id}',[App\Http\Controllers\AdminsController::class, 'deleteTraceServices']);
    Route::post('/edit_TraceServices/{id}', [App\Http\Controllers\AdminsController::class, 'edit_TraceServices']);
    Route::get('/addTraceServices', [App\Http\Controllers\AdminsController::class, 'addTraceServices']);
    Route::post('/add_TraceServices', [App\Http\Controllers\AdminsController::class, 'add_TraceServices']);

    // Generic Routes
    Route::get('/form',[App\Http\Controllers\AdminsController::class, 'form']);
    Route::get('/list',[App\Http\Controllers\AdminsController::class, 'list']);
    Route::get('/formfile',[App\Http\Controllers\AdminsController::class, 'formfile']);
    Route::get('/formfiletext',[App\Http\Controllers\AdminsController::class, 'formfiletext']);

    //Payments
    Route::get('/payments',[App\Http\Controllers\AdminsController::class, 'payments']);
    Route::get('/payments/explore/{id}',[App\Http\Controllers\AdminsController::class, 'payments_explore']);
    //MPESA Routes
    Route::get('/balance',[App\Http\Controllers\AdminsController::class, 'balance']);
    Route::get('/lnmo',[App\Http\Controllers\AdminsController::class, 'lnmo']);
    Route::get('/b2b',[App\Http\Controllers\AdminsController::class, 'b2b']);
    Route::get('/b2c',[App\Http\Controllers\AdminsController::class, 'b2c']);
    Route::get('/lnmo/confirm/{id}',[App\Http\Controllers\AdminsController::class, 'lnmo_confirm']);


    // Order
    Route::get('/orders/explore/{id}',[App\Http\Controllers\AdminsController::class, 'order_explore']);

    //Notifications
    Route::get('/notifications',[App\Http\Controllers\AdminsController::class, 'notifications']);
    Route::get('/notification/{id}',[App\Http\Controllers\AdminsController::class, 'notification']);
    Route::get('/deleteNotification/{id}',[App\Http\Controllers\AdminsController::class, 'deleteNotification']);

    //Service Requests
    Route::get('/requests',[App\Http\Controllers\AdminsController::class, 'quoterequeste']);
    Route::get('/markRequest/{id}/{status}/{type}',[App\Http\Controllers\AdminsController::class, 'markRequest']);

    //Comments
    Route::get('/reviews',[App\Http\Controllers\AdminsController::class, 'reviews']);
    Route::get('/approve/{id}',[App\Http\Controllers\AdminsController::class, 'approve']);
    Route::get('/decline/{id}',[App\Http\Controllers\AdminsController::class, 'decline']);

    // Error Pages
    Route::get('/403',[App\Http\Controllers\AdminsController::class, 'error403']);
    Route::get('/404',[App\Http\Controllers\AdminsController::class, 'error404']);
    Route::get('/405',[App\Http\Controllers\AdminsController::class, 'error405']);
    Route::get('/500',[App\Http\Controllers\AdminsController::class, 'error500']);
    Route::get('/503',[App\Http\Controllers\AdminsController::class, 'error503']);





    // Subscribers Mail
    Route::post('/updatemail',[App\Http\Controllers\AdminsController::class, 'updatemail']);


    //Updates
    Route::get('/updates',[App\Http\Controllers\AdminsController::class, 'updates']);
    Route::get('/update/{id}',[App\Http\Controllers\AdminsController::class, 'update']);
    Route::get('/mark/{id}',[App\Http\Controllers\AdminsController::class, 'mark']);

    //profile
    Route::get('/profile',[App\Http\Controllers\AdminsController::class, 'profile']);
    Route::post('/profile_save/{id}',[App\Http\Controllers\AdminsController::class, 'profile_save']);
    Route::get('/editFile/{id}',[App\Http\Controllers\AdminsController::class, 'editFile']);
    Route::post('/edit_File/{id}',[App\Http\Controllers\AdminsController::class, 'edit_File']);

    // Gallery
    Route::get('/gallery',[App\Http\Controllers\AdminsController::class, 'gallery']);

    //Under Contruction
    Route::get('/under_construction',[App\Http\Controllers\AdminsController::class, 'under_construction']);

    //Wizard
    Route::get('/wizard',[App\Http\Controllers\AdminsController::class, 'wizard']);

    //Maps
    Route::get('/maps',[App\Http\Controllers\AdminsController::class, 'maps']);
    // SiteSettings
    Route::get('/sitesettings',[App\Http\Controllers\AdminsController::class, 'sitesettings']);
    Route::post('/savesitesettings',[App\Http\Controllers\AdminsController::class, 'savesitesettings']);
    //Messages
    Route::get('/allMessages', [App\Http\Controllers\AdminsController::class, 'allMessages']);
    Route::get('/unread', [App\Http\Controllers\AdminsController::class, 'unread']);
    Route::get('/read/{id}', [App\Http\Controllers\AdminsController::class, 'read']);
    Route::post('/reply/{id}', [App\Http\Controllers\AdminsController::class, 'reply']);
    Route::get('/deleteMessage/{id}', [App\Http\Controllers\AdminsController::class, 'deleteMessage']);

    //Subscribers
    Route::get('/subscribers', [App\Http\Controllers\AdminsController::class, 'subscribers']);
    Route::get('/mailSubscribers/{email}', [App\Http\Controllers\AdminsController::class, 'mailSubscribers']);
    Route::get('/mailSubscriber/{email}', [App\Http\Controllers\AdminsController::class, 'mailSubscriber']);
    Route::get('/deleteSubscriber/{id}', [App\Http\Controllers\AdminsController::class, 'deleteSubscriber']);
    // Version Control
    Route::get('/version', [App\Http\Controllers\AdminsController::class, 'version']);

    // Seo Settings
    // SeoSettings
    Route::get('/seosettings',[App\Http\Controllers\AdminsController::class, 'seosettings']);
    Route::post('/saveseosettings',[App\Http\Controllers\AdminsController::class, 'saveseosettings']);
    });
