<?php
//satu method untuk satu table
namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Booking extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'booking';
    const UPDATED_AT = 'modified_at';

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function room()
    {
        return $this->belongsTo('App\Room', 'id_room', 'id');
    }

    public function getActiveDeactiveAttribute()
    {
        if ($this->status){
            return "Active";
        }else{
            return "Deactive";
        }
    }

    public function getBookingTimeStartAttribute()
    {
        return date("H:i",strtotime($this->booking_start_date));
    }

    public function getBookingTimeEndAttribute()
    {
        return date("H:i",strtotime($this->booking_end_date));
    }

}