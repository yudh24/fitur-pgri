<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH . 'models/Base_module_model.php');

class Pgri_model extends Base_module_model
{
public function __construct()
{
parent::__construct('user');
}
}

class Pgris_model extends Base_module_record
{
}