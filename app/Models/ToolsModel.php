<?php namespace App\Models;
use CodeIgniter\Model;

class ToolsModel extends Model
{
    protected $table = 'Tools';
    protected $primaryKey = 'id';

    protected $allowedFields = ['Name', 'Description', 'Price', 'pictureUrl'];

    public function get_all_tools($search=NULL){
        if ($search != NULL){
            return $this->select('*')->like('Name', $search)->orlike('Description', $search);
        }
        else{
            return $this;
        }
    }

    public function get_item($item_name=null){
        if ($item_name != null){
            return $this->where(['Name' => $item_name])->first();
        }
    }
}

