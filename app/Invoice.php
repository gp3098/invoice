<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;
class Invoice extends Model
{
	use  FilterPaginateOrder;
	protected $fillable = [
		'customer_id','title','date','due_date','discount',
		'sub_total','total'
	];
	protected $filter = [
		'id','customer_id','title','date','due_date','discount',
		'sub_total','total','create_at',

		'customer.id','customer.company','customer.email','customer.name',
		'customer.phone','customer.address','customer.create_at'
	];
	public static function initialize(){
		return[
			'customer_id' => 'Select',
			'title' => 'Invoice for ',
			'date' => date('Y-m-d'),
			'due_date' => null,
			'discount' => 0,
			'items' => [
				InvoiceItem::initialize()
			] ,
		];
	}

	public function items()
	{
		return $this->hasMany(InvoiceItem::class);
	}
	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}
}

