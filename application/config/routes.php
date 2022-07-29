<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['checkdulu']             = 'auth/login/checklogin';
$route['checkjuri']             = 'auth/login/checkjuri';
$route['keluaraja']             = 'auth/login/logout';

// route nilai
$route['IT-Network'] 			= 'penilaian/Penilaian';
$route['cloud'] 			    = 'penilaian/Penilaian/cloud';
$route['cabinet'] 			    = 'penilaian/Penilaian/cabinet';
$route['electrical'] 			= 'penilaian/Penilaian/electrical';
$route['mobile'] 			    = 'penilaian/Penilaian/mobile';
$route['Electronics'] 			= 'penilaian/Penilaian/Electronics';


$route['add-nilai_it'] 			= 'penilaian/Nilai_it/store';
$route['add-wall'] 			    = 'penilaian/Wall/store';
$route['add-cloud'] 			= 'penilaian/Cloud/store';
$route['add-cabinet'] 			= 'penilaian/Cabinet/store';
$route['add-electrical'] 		= 'penilaian/Electrical/store';
$route['add-mobile'] 		    = 'penilaian/Mobil/store';
$route['add-electronics'] 		= 'penilaian/Electronics/store';
// end

// route peserta
$route['peserta'] 				= 'peserta/Peserta';
$route['add-peserta'] 			= 'peserta/Peserta/store';
$route['edit-peserta'] 			= 'peserta/Peserta/update';
$route['remove-peserta/(:num)'] = 'peserta/Peserta/destroy';

// route mata lomba
$route['mata-lomba'] 			= 'lomba/Mata_lomba';
$route['add-lomba'] 			= 'lomba/Mata_lomba/store';
$route['edit-lomba'] 			= 'lomba/Mata_lomba/update';
$route['remove-lomba/(:num)'] 	= 'lomba/Mata_lomba/destroy';
$route['import-lomba']          = 'lomba/Mata_lomba/import_excel';

// route juri
$route['juri'] 					= 'juri/Juri';
$route['add-juri'] 				= 'juri/Juri/store';
$route['update-juri'] 			= 'juri/Juri/update';
$route['remove-juri/(:num)'] 	= 'juri/Juri/destroy';

$route['masuk'] 				= 'Authha';

// route pact
$route['patch']                = 'setting/Master_patch';
$route['patching']             = 'setting/Master_patch/patchsystem';
$route['public']               = 'setting/Master_patch/public';
// end


$route['default_controller'] 	= 'welcome';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
