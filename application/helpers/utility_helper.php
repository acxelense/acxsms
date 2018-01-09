<?php
if(!defined('BASEPATH')) exit('No direct script acess allowed');
if(!function_exists('asset_url')){
	function assets_url(){
		return base_url().'assets/';
	}
}
if(!function_exists('data_url')){
	function data_url(){
		return base_url().'data/';
	}
}
