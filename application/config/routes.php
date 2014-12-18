<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "IndexPage"; 
$route['IndexPage/Index'] = "IndexPage/Index";

$route['NoticePage'] = "NoticePage";


//$route['RegUserPage'] = "RegUserPage";
//$route['RegUserPage/(:any)'] = "RegUserPage/view/$1";


$route['RegOfficePage'] = "RegOfficePage";
//$route['RegOfficePage/(:any)'] = "RegOfficePage/Index";

$route['HospitalManangerPage'] = "HospitalManangerPage";
$route['HospitalManangerPage/Index'] = "HospitalManangerPage/Index";
$route['HospitalManangerPage/Appointment'] = "HospitalManangerPage/Appointment";

$route['RegUserPage']="RegUserPage";

$route['SuperManager'] = "SuperManager";
//$route['SuperManager/(:any)'] = "SuperManager/Index";


$route['hospital']='hospital/index';
$route['hospital/(:any)']='hospital/view/$1';
//$route['404_override'] = '';
/* End of file routes.php */
/* Location: ./application/config/routes.php */
//----------------------测试路由请往下看-------------------
//这里....

$route['Test'] = "TestControl";     
$route['Test/Index'] = "TestControl/Index";









