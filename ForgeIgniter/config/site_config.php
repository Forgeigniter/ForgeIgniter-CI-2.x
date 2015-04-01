<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Halogy
 *
 * A user friendly, modular content management system for PHP 5.0
 * Built on CodeIgniter - http://codeigniter.com
 *
 * @package		Halogy
 * @author		Haloweb Ltd
 * @copyright	Copyright (c) 2012, Haloweb Ltd
 * @license		http://halogy.com/license
 * @link		http://halogy.com/
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * site config variables
 *
**/

// set paths
$config['includesPath']		=	'includes/admin';			// path to admin header and footer files
$config['uploadsPath']		=	'/static/uploads';			// where to upload files (must be 777)
$config['staticPath']		=	'static';					// where are the images hosted
$config['adminStaticPath']  =	'static/admin';				// Admin Theme Path
$config['logoPath']			=	'';							// the administration logo
$config['stagingSites']		=	FALSE;						// whether to create upload folders for each site automatically (for MSM)
		
/* END OF FILE site_config.php */
/* Location: ./halogy/config/site_config.php */