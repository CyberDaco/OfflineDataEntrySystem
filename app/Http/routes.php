<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
 * Home Controller
 */
Route::get('/','AppController@index');

/**
 * AdminController
 */ 
Route::get('/admin', 'AdminController@index');
Route::get('/admin/user','AdminController@showuser');
Route::get('/admin/jobnumber','AdminController@showjobnumber');
Route::get('/admin/logout', 'AdminController@logout');


/**
 * Batch Menu
 */
Route::get('/admin/batch/interest','AdminController@showinterest');
Route::get('/admin/batch/recent_sales','AdminController@showrecent_sales');
Route::get('/admin/batch/aunews','AdminController@showaunews');
Route::get('/admin/batch/reanz','AdminController@showreanz');
Route::get('/admin/batch/sat_auction','AdminController@showsatauction');



Route::get('/admin/report/production','AdminController@showproduction');
Route::get('/admin/export/interest','AdminController@showinterestexport');
Route::get('/admin/export/recent_sales','AdminController@showrecentsalesexport');
Route::get('/admin/export/sat_auction','AdminController@showsatauctionexport');
Route::get('/admin/export/reanz','AdminController@showreanzexport');


/**
 * Invalid
 * */
Route::get('/aunews/invalid/add', 'InvalidController@invalidadd');
Route::post('/aunews/invalid/add', 'InvalidController@invalidstore');
Route::get('/aunews/invalid/{invalid}/edit', 'InvalidController@invalidedit');
Route::post('/aunews/invalid/{invalid}/edit', 'InvalidController@invalidupdate');
Route::post('/aunews/invalid/delete', 'InvalidController@delete');

/**
 * Application Controller
 */
Route::get('/admin/setup/application/view', 'ApplicationController@applicationview');
Route::get('/admin/setup/application/add', 'ApplicationController@applicationadd');
Route::post('/admin/setup/application/add', 'ApplicationController@applicationstore');
Route::get('/admin/setup/application/{application}/edit', 'ApplicationController@applicationedit');
Route::post('/admin/setup/application/{application}/edit', 'ApplicationController@applicationupdate');
Route::post('/admin/setup/application/delete', 'ApplicationController@applicationdelete');

/**
 * Lookup Controller
 */
Route::get('/admin/setup/lookup/view', 'LookupController@lookupview');
Route::get('/admin/setup/lookup/add', 'LookupController@lookupadd');
Route::post('/admin/setup/lookup/add', 'LookupController@lookupstore');
Route::get('/admin/setup/lookup/{lookup}/edit', 'LookupController@lookupedit');
Route::post('/admin/setup/lookup/{lookup}/edit', 'LookupController@lookupupdate');
Route::post('/admin/setup/lookup/delete', 'LookupController@lookupdelete');

/**
 * UserController
 */
Route::get('/admin/setup/sysusers/view', 'UserController@sysusersview');
Route::get('/admin/setup/sysusers/add', 'UserController@sysusersadd');
Route::post('/admin/setup/sysusers/add', 'UserController@sysusersstore');
Route::get('/admin/setup/sysusers/{user}/edit', 'UserController@sysusersedit');
Route::post('/admin/setup/sysusers/{user}/edit', 'UserController@sysusersupdate');
Route::post('/admin/setup/sysusers/delete', 'UserController@sysusersdelete');

/**
 * States Controller
 */
Route::get('/admin/setup/states/view', 'StatesController@statesview');
Route::get('/admin/setup/states/add', 'StatesController@statesadd');
Route::post('/admin/setup/states/add', 'StatesController@statesstore');
Route::get('/admin/setup/states/{state}/edit', 'StatesController@statesedit');
Route::post('/admin/setup/states/{state}/edit', 'StatesController@statesupdate');
Route::post('/admin/setup/states/delete', 'StatesController@statesdelete');
 


/**
 * AUPost Code Controller
 */
Route::get('/admin/setup/aupostcode/view', 'AUPostCodeController@aupostcodeview');
Route::get('/admin/setup/aupostcode/add', 'AUPostCodeController@aupostcodeadd');
Route::post('/admin/setup/aupostcode/add', 'AUPostCodeController@aupostcodestore');
Route::get('/admin/setup/aupostcode/{aupostcode}/edit', 'AUPostCodeController@aupostcodeedit');
Route::post('/admin/setup/aupostcode/{aupostcode}/edit', 'AUPostCodeController@aupostcodeupdate');
Route::post('/admin/setup/aupostcode/delete', 'AUPostCodeController@aupostcodedelete');

/**
 * Publication Controller
 */
Route::get('/admin/setup/publication/view', 'PublicationController@pubview');
Route::get('/admin/setup/publication/add', 'PublicationController@pubadd'); //show form
Route::post('/admin/setup/publication/add', 'PublicationController@pubstore'); //submit form
Route::get('/admin/setup/publication/{publication}/edit', 'PublicationController@pubedit');
Route::post('/admin/setup/publication/{publication}/edit', 'PublicationController@pubupdate');
Route::post('/admin/setup/publication/delete', 'PublicationController@pubdelete');

/**
 * Job Number Controller
 */
Route::get('/admin/setup/jobnumber/view', 'JobNumberController@jobnumberview');
Route::get('/admin/setup/jobnumber/add', 'JobNumberController@jobnumberadd');
Route::post('/admin/setup/jobnumber/add', 'JobNumberController@jobnumberstore');
Route::get('/admin/setup/jobnumber/{jobnumber}/edit', 'JobNumberController@jobnumberedit');
Route::post('/admin/setup/jobnumber/{jobnumber}/edit', 'JobNumberController@jobnumberupdate');
Route::post('/admin/setup/jobnumber/delete', 'JobNumberController@jobnumberdelete');

/**
 * User Profile Controller
 */
Route::get('/admin/setup/userprofile/view', 'UserProfileController@userprofileview');
Route::get('/admin/setup/userprofile/{userprofile}/edit', 'UserProfileController@userprofileedit');
Route::post('/admin/setup/userprofile/{userprofile}/edit', 'UserProfileController@userprofileupdate');
Route::post('/admin/setup/userprofile/delete', 'UserProfileController@userprofiledelete');
Route::get('/profile/view', 'UserProfileController@showdetails');
Route::post('/profile/{userprofile}/edit', 'UserProfileController@updatedetails');




/**
 * Reports Controller
 */
Route::post('/admin/report/production','ReportController@productionreport');

/**
 * Exports Controller
 */
Route::post('/admin/export/interest','ExportController@show_interest');
Route::get('/admin/export/interest/{batch}','ExportController@export_interest_csv');
Route::get('/admin/export/interest/{batch}/excel','ExportController@export_interest_excel');

Route::post('/admin/export/recent_sales','ExportController@show_recentsales');
Route::get('/admin/export/recent_sales/{batch}','ExportController@export_recentsales_csv');
Route::get('/admin/export/recent_sales/{batch}/excel','ExportController@export_recent_sales_excel');

Route::post('/admin/export/sat_auction','ExportController@show_sat_auction');
Route::get('/admin/export/sat_auction/{batch}','ExportController@export_sat_auction_csv');
Route::get('/admin/export/sat_auction/{batch}/excel','ExportController@export_sat_auction_excel');

Route::post('/admin/export/reanz','ExportController@show_reanz');
Route::get('/admin/export/reanz/{batch}','ExportController@export_reanz_csv');
Route::get('/admin/export/reanz/{batch}/excel','ExportController@export_reanz_excel');


Route::get('/admin/export/aunews','ExportController@show_aunews');
Route::get('/admin/export/aunews/batch','ExportController@get_aunews');
Route::get('/admin/export/aunews/valid','ExportController@export_aunews');
Route::get('/admin/export/invalid/{batch}','ExportController@export_invalid');

Route::get('/admin/export/stats','ExportController@show_stats');
Route::post('/admin/export/stats','ExportController@get_stats');
Route::get('/admin/export/stats_output','ExportController@export_stats');


/**
 * Entry Logs Controller
 */


 Route::get('/admin/utilities/entrylogs','EntryLogController@view');


/**
 * LOokup
 */
Route::get('/admin/lookup/sat_auction','SatAuctionController@view');
Route::post('/admin/lookup/sat_auction','SatAuctionController@import');

Route::get('/admin/lookup/home_price','HomePriceController@view');
Route::post('/admin/lookup/home_price','HomePriceController@import');

Route::get('/admin/lookup/natalpha','NatalphaController@view');
Route::post('/admin/lookup/natalpha','NatalphaController@import');

Route::get('/admin/lookup/sat_auction_st_extension','SatAuctionStExtensionController@view');
Route::post('/admin/lookup/sat_auction_st_extension','SatAuctionStExtensionController@import');




Route::get('/admin/lookup/sample','ScrapeHomePriceController@scrape');




/**
 * Admin Auth Controller
 */ 
Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
Route::post('/admin/login','AdminAuth\AuthController@login');
Route::get('/admin/logout','AdminAuth\AuthController@logout');
Route::get('/admin/register', 'AdminAuth\AuthController@showRegistrationForm');
Route::post('/admin/register', 'AdminAuth\AuthController@register');

/**
 * Batch Contoller
 */

Route::get('/admin/batch/{batch_id}','BatchController@modify');
Route::post('/admin/batch','BatchController@store');
Route::post('/admin/batch/{batch_id}/edit','BatchController@update');
Route::post('/admin/batch/delete','BatchController@destroy');

 

/**
 * App Controller
 */
Route::get('/dataentry','AppController@index');
Route::get('/profile','AppController@profile');
Route::post('/profile/{userprofile}/edit', 'AppController@userprofileupdate');



/**
 * User Auth Controller
 */ 
Route::auth();

/**
 * Interest Auction Results Controller
 */
Route::get('/interest','InterestController@index');
Route::post('/interest', 'BatchController@find');
Route::get('/interest/view', 'InterestController@view');
Route::get('/interest/entry', 'InterestController@entry');
Route::post('/interest/entry', 'InterestController@create');
Route::get('/interest/verify', 'InterestController@verify');
Route::post('/interest/verify/{record}','InterestController@storeverify');
Route::get('/interest/modify/{id}', 'InterestController@modify');
Route::post('/interest/{record}/update', 'InterestController@update');
Route::post('/interest/delete', 'InterestController@delete');
Route::get('/interest/search/{id}','InterestController@search');

/**
 * Recent Sales Controller
 */
Route::get('/recent_sales','RecentSaleController@index');
Route::post('/recent_sales', 'BatchController@find');
Route::get('/recent_sales/view', 'RecentSaleController@view');
Route::get('/recent_sales/entry', 'RecentSaleController@entry');
Route::post('/recent_sales/entry', 'RecentSaleController@create');
Route::get('/recent_sales/verify', 'RecentSaleController@verify');
Route::post('/recent_sales/verify/{record}','RecentSaleController@storeverify');
Route::get('/recent_sales/modify/{id}', 'RecentSaleController@modify');
Route::post('/recent_sales/{record}/update', 'RecentSaleController@update');
Route::post('/recent_sales/delete', 'RecentSaleController@delete');
Route::get('/recent_sales/search_post_code/{suburb}/{state}','RecentSaleController@search_postcode');

/**
 * Saturday Auction Controller
 */
Route::get('/sat_auction','SaturdayAuctionController@index');
Route::post('/sat_auction', 'BatchController@find_sat_auction');
Route::get('/sat_auction/view', 'SaturdayAuctionController@view');
Route::get('/sat_auction/entry', 'SaturdayAuctionController@entry');
Route::post('/sat_auction/entry', 'SaturdayAuctionController@create');
Route::get('/sat_auction/verify', 'SaturdayAuctionController@verify');
Route::post('/sat_auction/verify/{record}','SaturdayAuctionController@storeverify');
Route::get('/sat_auction/modify/{id}', 'SaturdayAuctionController@modify');
Route::post('/sat_auction/{record}/update', 'SaturdayAuctionController@update');
Route::post('/sat_auction/delete', 'SaturdayAuctionController@delete');
Route::get('/sat_auction/search_post_code/{suburb}/{state}','SaturdayAuctionController@search_postcode');
Route::get('/sat_auction/search_property/{address}','SaturdayAuctionController@search_property');
Route::get('/sat_auction/search_property_id/{id}','SaturdayAuctionController@search_property_id');
Route::get('/sat_auction/search_suburb/{address}','SaturdayAuctionController@search_suburb');
Route::get('/sat_auction/scrape/{page}','SaturdayAuctionController@scrape');
Route::get('/sat_auction/entry/lookup','SaturdayAuctionController@ajax_lookup');
Route::get('/sat_auction/api/get-suburbs-list','SaturdayAuctionController@suburbs_list');





/**
 * News Controller
 */
Route::get('/aunews', 'NewsController@index');
Route::post('/aunews', 'BatchController@find');
Route::get('/aunews/view', 'NewsController@view');
Route::get('/aunews/entry', 'NewsController@entry');
Route::get('/aunews/propdetails', 'NewsController@showproperty');
Route::post('/aunews/propdetails', 'NewsController@storeproperty');
Route::get('/aunews/modify/{record}', 'NewsController@modify'); // 1
Route::get('/aunews/{id}/propdetails', 'NewsController@modifypropertydetails'); //2
Route::post('/aunews/{aunews_address}/update', 'NewsController@update'); //3
Route::post('/aunews/delete', 'NewsController@delete');
Route::get('/aunews/verify', 'NewsController@verify'); // 1
Route::get('/aunews/verify/{id}/propdetails', 'NewsController@verifypropertydetails'); //2
Route::post('/aunews/verify/{aunews_address}/update', 'NewsController@verify_update'); //3



Route::get('/aunews/postcode/{suburb}','AUPostCodeController@search');
Route::get('/aunews/agent/{contact}','AUNewsAgencyController@search');

//REA NZ
Route::get('/reanz','ReanzController@index');
Route::post('/reanz', 'BatchController@find');
Route::get('/reanz/view', 'ReanzController@view');
Route::get('/reanz/entry', 'ReanzController@entry'); //show form
Route::post('/reanz/entry', 'ReanzController@create'); //submit form
Route::get('/reanz/{record}/edit', 'ReanzController@modify');
Route::post('reanz/{record}/update', 'ReanzController@update');
Route::post('/reanz/delete', 'ReanzController@delete');
Route::get('/reanz/search/{id}','ReanzController@search');


