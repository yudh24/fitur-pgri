<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH . 'models/Base_module_model.php');

class GuestbookComments_model extends Base_module_model
{
public function __construct()
{
parent::__construct('guestbook_comments');
}
}

class GuestbookComment_model extends Base_module_record
{
}