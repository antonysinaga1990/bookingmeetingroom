<?php
//satu method untuk satu table
namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Division extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'division';
    const UPDATED_AT = 'modified_at';

    public function getActiveDeactiveAttribute()
    {
        if ($this->status){
            return "Active";
        }else{
            return "Deactive";
        }
    }
}