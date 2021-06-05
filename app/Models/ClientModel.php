<?php namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'Client';

    protected $allowedFields = ['FIO', 'pictureUrl'];


}

