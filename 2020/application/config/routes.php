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
$route['default_controller'] = 'beranda';
$route['404_override'] = 'kesalahan';
$route['translate_uri_dashes'] = FALSE;

// AUTH
$route['masuk'] = 'auth';
$route['daftar'] = 'auth/daftar';
$route['lupa_sandi'] = 'auth/lupa_sandi';

// RUP
$route['rup/penyedia/(:num)'] = 'rup/data_penyedia/$1';
$route['rup/swakelola/(:num)'] = 'rup/data_swakelola/$1';
$route['rup/tender/(:num)'] = 'rup/data_tender/$1';

// REFERENSI SATKER
$route['referensi/edit/satker/(:any)'] = 'referensi/edit_satker/$1';

// UPDATE
$route['update/penyedia/proses'] = 'update/penyedia_proses';
$route['update/swakelola/proses'] = 'update/swakelola_proses';
$route['update/tender/proses'] = 'update/tender_proses';
$route['update/satker/proses'] = 'update/satker_proses';
$route['update/program/proses'] = 'update/program_proses';
$route['update/kegiatan/proses'] = 'update/kegiatan_proses';

// PKR BJ
$route['pkr/bj/tambah'] = 'pkr/bj_tambah';
$route['rup/bj/ubah/(:num)'] = 'pkr/bj_ubah/$1';