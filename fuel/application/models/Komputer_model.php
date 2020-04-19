<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(FUEL_PATH.'models/Base_module_model.php');
 
class komputer_model extends Base_module_model {
   
  public $foreign_keys = array('author_id' => FUEL_PATH.'models/fuel_users_model');
  //public $foreign_keys = array('author_id' => '../../modules/fuel/models/fuel_users_model');
  public $parsed_fields = array('content', 'content_formatted');
   
    function __construct()
    {
        parent::__construct('komputer'); // table name
    }
 
    function list_items($limit = NULL, $offset = NULL, $col = 'name', $order = 'asc', $just_count = FALSE)
    {
        $this->db->join('fuel_users', 'fuel_users.id = komputer.author_id', 'left');
        $this->db->select('komputer.id, title, SUBSTRING(content, 1, 50) AS content, fuel_users.user_name AS author, date_added, komputer.published', FALSE);
        $data = parent::list_items($limit, $offset, $col, $order, $just_count);
 
        // check just_count is FALSE or else $data may not be a valid array
        if (empty($just_count))
        {
          foreach($data as $key => $val)
          {
            $data[$key]['content'] = htmlentities($val['content'], ENT_QUOTES, 'UTF-8');
          }
        }
        return $data;
    }
 
    function form_fields($values = array(), $related = array())
    {
        $fields = parent::form_fields($values, $related);
         
        // ******************* ADD CUSTOM FORM STUFF HERE *******************
        $fields['content']['img_folder'] = 'komputer/';
        $fields['image']['folder'] = 'images/komputer/';
        $fields['thumb_image']['folder'] = 'images/komputer/thumbs/';
 
        return $fields;
    }
}
 
class Article_model extends Data_record {
 
}
