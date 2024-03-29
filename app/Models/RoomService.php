<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomService extends Model
{
    use HasFactory;
    protected $table = 'roomServices';
    protected $primaryKey = 'ServiceID';
    protected $fillable = ['GuestID','StaffID','RoomNumber', 'ServiceType', 'RequestDateTime', 'Status'];

    public function guest():BelongsTo
    {
        return $this->belongsTo(Guest::class, 'GuestID');
    }
    public function staff():BelongsTo
    {
        return $this->belongsTo(Staff::class, 'StaffID');
    }
}
