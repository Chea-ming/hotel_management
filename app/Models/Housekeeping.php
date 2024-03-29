<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Housekeeping extends Model
{
    use HasFactory;

    protected $table = 'housekeepings';
    protected $primaryKey = 'HousekeepingID';

    protected $fillable = ['StaffID','RoomNumber','CleaningSchedule', 'CleaningStatus'];

    public function staff():BelongsTo
    {
        return $this->belongsTo(Staff::class, 'StaffID');
    }

}
