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

$route['default_controller'] = 'Login/index';
$route['dashboard'] = 'Dashboard/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*====== AUTHENTICATION =======*/
$route['verify-otp'] = 'Login/verify_otp';
$route['forgot-password'] = 'Login/forgot_password';
$route['reset-password'] = 'Login/change_password';
/*======= AUTHENTICATION =======*/

/*====== USERS, GROUPS & PERMISSIONS =======*/
$route['groups'] = 'Users/manage_user_groups';
$route['group/add']  = 'Users/add_group';
$route['group/edit/(:any)'] = 'Users/edit_group/$1';
$route['group/group_permission/(:any)'] = 'Users/group_permission/$1';
$route['user/add'] = 'Users/add_user';
$route['user/edit/(:any)'] = 'Users/edit_user/$1';
$route['users'] = 'Users/manage_users';
/*====== /USERS, GROUPS & PERMISSIONS =======*/

/*====== SETTINGS ======*/
$route['user/settings'] = 'Users/profile_settings';
$route['backup/databases'] = 'Backup/backup';
$route['backup/create'] = 'Backup/create_backup';
/*====== /SETTINGS ======*/



$route['menus/add'] = 'Menus/add_menu';
$route['menus/edit/(:any)'] = 'Menus/edit_menu/$1';
$route['menus/manage'] = 'Menus/manage_menus';
$route['activity_logs'] = 'Activity_logs/index';
$route['activity_logs/custom_search'] = 'Activity_logs/custom_search';
$route['activity_logs/log_detail/(:any)'] = 'Activity_logs/log_detail/$1';


/*========= BUSINESS =========*/
//$route['business/add'] = 'Business/add_new_business';
//$route['business/manage'] = 'Business/manage_businesses';
//$route['business/edit/(:any)'] = 'Business/edit_business_detail/$1';
/*========= /BUSINESS =========*/

/*========= BUSINESS =========*/
$route['business/add'] = 'Business/add_new_business';
$route['business/manage'] = 'Business/manage_businesses';
$route['business/edit/(:any)'] = 'Business/edit_business_detail/$1';
$route['business/detail/(:any)'] = 'Business/view_business_detail/$1';
/*========= /BUSINESS =========*/


/*========= CUSTOMER =========*/
$route['customer/add'] = 'Customer/add_customer';
$route['customer/manage'] = 'Customer/manage_customers';
$route['customer/edit/(:any)'] = 'Customer/edit_customer';
$route['customer/additional-contacts/(:any)'] = 'Customer/customer_additional_contacts/$1';
$route['customer-contact-types'] = 'Administration/customer_contact_type';
$route['customer/detail/(:any)'] = 'Customer/customer_detail/$1';
/*========= /CUSTOMER =========*/

/*========= VENDOR  =========*/
$route['vendor/add'] = 'Vendor/add_vendor';
$route['vendor/manage'] = 'Vendor/manage_vendors';
$route['vendor/edit/(:any)'] = 'Vendor/edit_vendor/$1';
$route['vendor/detail/(:any)'] = 'Vendor/detail/$1';
$route['vendor/price-list/(:any)'] = 'Vendor/vendor_price_list/$1';
/*========= /VENDOR =========*/


/*========= LOCATION =========*/
$route['location/add'] = 'Administration/add_location';
$route['location/manage'] = 'Administration/manage_locations';
$route['location/edit/(:any)'] = 'Administration/edit_location/$1';
/*========= /LOCATION =========*/


/*========= PACKAGE =========*/
$route['package/add'] = 'Administration/add_package';
$route['package/manage'] = 'Administration/manage_package';
$route['package/edit/(:any)'] = 'Administration/edit_package/$1';
$route['package/package-items/(:any)'] = 'Administration/package_items/$1';
/*========= /PACKAGE =========*/



/*========= ITEM =========*/
$route['item/add'] = 'Administration/add_item';
$route['item/manage'] = 'Administration/manage_items';
$route['item/edit/(:any)'] = 'Administration/edit_item/$1';
/*========= /ITEM =========*/



/*========= EVENT =========*/
$route['event/types'] = 'Administration/manage_event_types';
$route['event/create'] = 'Event/create_event';
$route['events/manage'] = 'Event/manage_events';
/*========= /EVENT =========*/

/*========= CREW =========*/
$route['crew/types'] = 'Administration/manage_crew_types';
/*========= /CREW =========*/

/*========= TAX STATUS TYPES  =========*/
$route['tax/types'] = 'Administration/manage_tax_types';
/*========= /TAX STATUS TYPES  =========*/


/*=========  APPOINTMENTS  =========*/
$route['appointment/create'] = 'Appointments/create_appointment';
$route['appointments/manage'] = 'Appointments/manage_appointments';
$route['appointment/edit/(:any)'] = 'Appointments/edit_appointment/$1';
/*========= /APPOINTMENTS  =========*/

/*=========  TASKS & TO DOS   =========*/
$route['tasks/manage'] = 'Task/manage_tasks';
$route['task/create'] = 'Task/create_new_task';
//$route['appointment/edit/(:any)'] = 'Appointments/edit_appointment/$1';
/*========= /TASK & TO DOS  =========*/



// SUBSCRIPTION PACKAGES
$route['subscription/manage'] = 'Business/manage_subscription_packages';
$route['subscription/add'] = 'Business/add_subscription_packages';
$route['subscription/edit/(:any)'] = 'Business/edit_subscription_packages/$1';
$route['subscription/detail/(:any)'] = 'Business/subscription_packages_detail/$1';
// SUBSCRIPTION PACKAGES

// SUBSCRIPTIONS
$route['manage/subscriptions/(:any)'] = 'Business/manage_subscriptions/$1';
$route['subscription/edit/(:any)'] = 'Business/edit_subscription_packages/$1';
$route['subscription/detail/(:any)'] = 'Business/subscription_packages_detail/$1';
// SUBSCRIPTION PACKAGES


// Business Invoices
$route['manage/manage-invoices/(:any)'] = 'Business/manage_business_invoices/$1';


// View Calendar
$route['view/calendar'] = 'Administration/view_calender';



// scrab

$route['cust/invoice'] = 'Customer/invoice';

// AQ
$route['vendor/aq'] = 'Vendor/aq_form';






