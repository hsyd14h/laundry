<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class OrdersLoundryModel extends Model
{
    
	public $id;
	public $code_order;
	public $package_id;
	public $total_price;
	public $payment_slip;
	public $name;
	public $user_id;
	public $user_phone;
	public $address;
	public $date_drop_laundry;
	public $date_take_laundry;
	public $date_finish_laundry;
	public $status;
	public $created_at;
	public $updated_at;

}