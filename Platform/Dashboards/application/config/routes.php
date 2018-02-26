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
// $route['user'] = 'users/index';
// $route['user/(:any)'] = 'users/$1';
$route['customers/(:num)'] = 'Customers/index/$1';
$route['default_controller'] = 'core';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
 | -------------------------------------------------------------------------
 | Sample REST API Routes
 | -------------------------------------------------------------------------
 */
//list
$route['services'] = 'services/items';
$route['services/(:any)/(:any)'] = 'services/$1/$2';



$route['staff/members'] = 'staff/Staff';
$route['staff/members/(:num)'] = 'staff/Staff/index/$1';

$route['staff/roles'] = 'staff/Roles';
$route['staff/roles/(:num)'] = 'staff/Roles/index/$1';

$route['staff/worktimes'] = 'staff/Worktimes';
$route['staff/worktimes/(:num)'] = 'staff/Worktimes/index/$1';

$route['staff/member/(:any)'] = 'staff/Staff/$1';
$route['staff/member/(:any)/(:num)'] = 'staff/Staff/$1/$2';


$route['staff/role/(:any)/(:any)'] = 'staff/Roles/$1/$2';
$route['staff/role/(:any)'] = 'staff/Roles/$1';
$route['staff/worktime/(:any)'] = 'staff/Worktimes/$1';


$route['api/vehicles'] = 'api/Vehiclesapi/vehicles';
$route['api/vehicle/(:num)'] = 'api/Vehicles/vehicles/id/$1';

$route['api/customers'] = 'api/Customers/customers';
$route['api/customer/(:num)'] = 'api/Customers/customers/id/$1';

$route['api/user/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8

$route['api'] = 'api/rest_server'; 
