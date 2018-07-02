<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*Front end Routes*/
$route['default_controller'] = 'frontend';
$route['showroom'] = 'frontend/showroom';
$route['showroom/(:num)'] = 'frontend/showroom';
$route['showroom/v/(:any)'] = 'frontend/showcar/$1';
$route['sell-your-car'] = 'frontend/sellCar';
$route['car-locator'] = 'frontend/carLocator';
$route['services'] = 'frontend/services';
$route['vehicle-health'] = 'frontend/vehicle_health';
$route['car-dignose'] = 'frontend/car_dignose';
$route['about-us'] = 'frontend/aboutUs';
$route['testimonials'] = 'frontend/testimonials';
$route['contact'] = 'frontend/contact';
$route['thankyou'] = 'frontend/thankyou';
$route['buy-it-now/(:num)'] = 'frontend/buy_now/$1'; 
$route['book-test-drive/(:num)'] = 'frontend/book_test_drive/$1'; 
$route['send-offer/(:num)'] = 'frontend/send_offer/$1'; 
$route['part-exchange'] = 'frontend/part_exchange'; 
$route['enquiry/(:num)'] = 'frontend/enquiry/$1'; 
$route['get-direction'] = 'frontend/get_direction'; 
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*Auth Routes*/
$route['usr'] = 'auth/login';
$route['usr/login'] = 'auth/login';
$route['usr/logout'] = 'auth/logout';

/* Admin Routes*/
$route['admin/dashboard'] = 'admin';
$route['admin/dashboard/edit/profile/(:any)'] = 'admin/admin_profile/$1';
$route['profile/update'] = 'admin/update_profile';
$route['admin/dashboard/car(/:num)?'] = 'car/carList';
$route['admin/dashboard/car/add'] = 'car/carAdd';
$route['admin/dashboard/car/save'] = 'car/carSave';
$route['admin/dashboard/car/edit/(:num)'] = 'car/carEdit/$1';
$route['admin/dashboard/car/update'] = 'car/carUpdate';
$route['admin/dashboard/car/delete/(:num)'] = 'car/carDelete/$1';
$route['admin/dashboard/car/img-delete'] = 'car/imgDelete';

$route['admin/dashboard/page(/:num)?'] = 'page';
$route['admin/dashboard/page/add'] = 'page/add/$1';
$route['admin/dashboard/page/edit/(:num)'] = 'page/edit/$1';
$route['admin/dashboard/page/update'] = 'page/update';
$route['admin/dashboard/page/store'] = 'page/store/$1';
$route['admin/dashboard/page/show/(:num)'] = 'page/show/$1';
$route['admin/dashboard/page/delete/(:num)'] = 'page/delete/$1';

$route['admin/dashboard/contact(/:num)?'] = 'inquiry/contact';
$route['admin/dashboard/contact/show/(:num)'] = 'inquiry/contact_show/$1';
$route['admin/dashboard/contact/delete/(:num)'] = 'inquiry/contact_delete/$1';

$route['admin/dashboard/sell-car(/:num)?'] = 'inquiry/sellcar';
$route['admin/dashboard/sell-car/show/(:num)'] = 'inquiry/sellcar_show/$1';
$route['admin/dashboard/sell-car/delete/(:num)'] = 'inquiry/sellcar_delete/$1';

$route['admin/dashboard/reserve-car(/:num)?'] = 'inquiry/enquiry';
$route['admin/dashboard/reserve-car/show/(:num)'] = 'inquiry/enquiry_show/$1';
$route['admin/dashboard/reserve-car/delete/(:num)'] = 'inquiry/enquiry_delete/$1';

$route['admin/dashboard/test-drive(/:num)?'] = 'inquiry/enquiry';
$route['admin/dashboard/test-drive/show/(:num)'] = 'inquiry/enquiry_show/$1';
$route['admin/dashboard/test-drive/delete/(:num)'] = 'inquiry/enquiry_delete/$1';

$route['admin/dashboard/send-offer(/:num)?'] = 'inquiry/enquiry';
$route['admin/dashboard/send-offer/show/(:num)'] = 'inquiry/enquiry_show/$1';
$route['admin/dashboard/send-offer/delete/(:num)'] = 'inquiry/enquiry_delete/$1';

$route['admin/dashboard/enquiry(/:num)?'] = 'inquiry/enquiry';
$route['admin/dashboard/enquiry/show/(:num)'] = 'inquiry/enquiry_show/$1';
$route['admin/dashboard/enquiry/delete/(:num)'] = 'inquiry/enquiry_delete/$1';

$route['admin/dashboard/part-exchange(/:num)?'] = 'part_exchange/index';
$route['admin/dashboard/part-exchange/show/(:num)'] = 'part_exchange/show/$1';
$route['admin/dashboard/part-exchange/delete/(:num)'] = 'part_exchange/delete/$1';

$route['admin/dashboard/services(/:num)?'] = 'service/index';
$route['admin/dashboard/services/show/(:num)'] = 'service/show/$1';
$route['admin/dashboard/services/delete/(:num)'] = 'service/delete/$1';

$route['admin/dashboard/vehicle-health(/:num)?'] = 'service/index';
$route['admin/dashboard/vehicle-health/show/(:num)'] = 'service/show/$1';
$route['admin/dashboard/vehicle-health/delete/(:num)'] = 'service/delete/$1';

$route['admin/dashboard/car-dignose(/:num)?'] = 'service/index';
$route['admin/dashboard/car-dignose/show/(:num)'] = 'service/show/$1';
$route['admin/dashboard/car-dignose/delete/(:num)'] = 'service/delete/$1';

/* Form Submission Routes*/
$route['contact-form'] = 'form/contact';
$route['sell-form'] = 'form/sellCar';
$route['carlocator'] = 'form/carLocator';
$route['enquiry'] = 'form/enquiry';
$route['save_parts'] = 'form/save_part_exch';
$route['servicing'] = 'form/save_car_services';
require_once(BASEPATH.'database/DB.php');
$db = & DB();
$db->select('slug');
$result = $db->get('pages');
$pages = $result->result();

foreach($pages as $page){
    /* Gernal Pages */
$route[$page->slug] = 'frontend/page/$1';
}
