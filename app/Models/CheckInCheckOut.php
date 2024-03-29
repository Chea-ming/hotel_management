<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckInCheckOut extends Model
{
    use HasFactory;

    protected $table = 'checkInCheckOuts';
    protected $primaryKey = 'CheckInID';
    protected $fillable = ['GuestID','StaffID','CheckInDateTime', 'CheckOutDateTime', 'RoomNumber', 'AdditionalRequests'];

    public function guest():BelongsTo
    {
        return $this->belongsTo(Guest::class, 'GuestID');
    }

    public function staff():BelongsTo
    {
        return $this->belongsTo(Staff::class, 'StaffID');
    }
}
