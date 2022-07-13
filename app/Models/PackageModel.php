<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class PackageModel extends Model
{
    
	public $id;
	public $name;
	public $price;
	public $description;
	public $created_at;
	public $updated_at;

}