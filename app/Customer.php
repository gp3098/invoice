<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Customer extends Model
{
	use FilterPaginateOrder;
	
    protected $fillable = [
        'company', 'email', 'name', 'phone', 'address',
    ];

    protected $filter = [
        'id', 'company', 'email', 'name', 'phone', 'address', 'create_at',
    ];

    public static function initialize()
    {
        return [
            'company' => '', 'email' => '', 'name' => '', 'phone' => '', 'address' => '',
        ];
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
        // return $this->hasMany('App\Invoice'); //两种写法好像 没有区别
    }
}
