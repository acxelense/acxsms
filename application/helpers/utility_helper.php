<?php
/*
 * Copyright 2015 (C) <HRPraxis> www.praxis-hr.com
 *
 * Created on : 2015/04/13
 * Author     : Prem Prakash Bashyal
 *
 */
if( !defined('BASEPATH')) exit('No direct script acess allowed');
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