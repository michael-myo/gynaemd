<?php 

/**
 * Language Code
 * set the lagunage for this directory
 */
define('language', 'ind');
define('sub_folder', '');

function url_string() {
	return str_replace('/'.language.'/', '', basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']));
}

function is_active($file_name) {
	if(url_string() == $file_name) {
		return 'active';
	}
}

function homepage_url(){
	return sprintf(
		"%s://%s/%s/",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'].sub_folder,
		language
	);
}

function lang_homepage_url($language = null){
	return sprintf(
		"%s://%s/%s",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'].sub_folder,
		($language ? $language.'/' : '')
	);
}

function get_lang() {
	$current_url_string = $_SERVER['REQUEST_URI']. '?' . $_SERVER['QUERY_STRING'];
	$current_url_string = explode('/', $current_url_string);
	return ($current_url_string[1] == language) ? $current_url_string[1] : '';
}

function meta_title() {
	switch (url_string()) {
		case 'passion.html':
			$meta_title = 'Passion | Esther Chuwa BreastCare Centre';
			break;

		case 'profile.html':
			$meta_title = 'Dr. Esther Chuwa\'s Medical Profile | Esther Chuwa BreastCare Centre';
			break;

		case 'practice.html':
			$meta_title = 'Our Clinic Practice | Esther Chuwa BreastCare Centre';
			break;

		case 'partners.html':
			$meta_title = 'Our Partners | Esther Chuwa BreastCare Centre';
			break;

		case 'plan-your-visit.html':
			$meta_title = 'Plan Your Visit | Esther Chuwa BreastCare Centre';
			break;
		
		default:
			$meta_title = 'Singapore Breast Surgeon | Breast Surgery | Esther Chuwa BreastCare Centre'; // Homepage
			break;
	}

	return $meta_title;
}


function meta_description() {
	switch (url_string()) {
		case 'passion.html':
			$meta_title = 'Dr Esther Chuwa, Singapore breast surgeon, is passionate to empower women w/ breast cancer to embrace season of trial & pursuit celebration of survivorship';
			break;

		case 'profile.html':
			$meta_title = 'Dr Esther Chuwa, Singapore breast cancer surgeon, devotes her practice to breast diseases, breast surgery & promotes breast cancer awareness. Find out why!';
			break;

		case 'practice.html':
			$meta_title = 'Our breast clinic in Singapore practice: breast screening, clinic procedures, breast cancer surgery & other treatments. Ask our Singapore breast surgeon.';
			break;

		case 'partners.html':
			$meta_title = 'Esther Chuwa BreastCare Practice, breast clinic in Singapore, is in partnership with Breast Cancer Foundation, Occupational therapist & Amoena Prosthesis.';
			break;

		case 'plan-your-visit.html':
			$meta_title = 'Planning to visit our breast clinic in Singapore? Dr Ester Chuwa, breast surgeon, suggests things to do before the visit. Call us at 64792110 to know more.';
			break;
		
		default:
			$meta_title = 'Dr Esther Chuwa is a Singapore breast cancer surgeon providing breast cancer screening, treatment and other breast surgeries. Call us at 6479-2110.'; // Homepage
			break;
	}

	return $meta_title;
}