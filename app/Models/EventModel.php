<?php namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model{
    protected $table = 'ps_massa_event';
    protected $allowedFields = ['tajuk','mstkh','tkhtutup','sasaran','oleh','tempat','keterangan'];
}