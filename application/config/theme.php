<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'config.php';

$config['doctype'] 					= 'html5';
$config['charset'] 					= 'UTF-8';
$config['site_name'] 				= $config_site_name;
$config['dojo_style']				= 'claro';

$config['page_title'] 				= '';
$config['page_title_prefix'] 		= ' &raquo; ';
$config['page_title_suffix'] 		= '';

$config['meta']						= array();
$config['css_files'] 				= array();
$config['js_files'] 				= array();
$config['dojo_files'] 				= array();
$config['js_at_foot'] 				= FALSE;

/* if TRUE then you can delete dojo and save space
 * and HTTP requests, then dojo and dijit will be requested from 
 * google CDN automatically
 */
$config['dojo_CDN']					= TRUE;
$config['dojo_version']				= '1.6.0';