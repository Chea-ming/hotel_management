<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $primaryKey = 'ReservationID';
    protected $fillable = ['GuestID','RoomID','CheckInDateTime', 'CheckOutDateTime', 'NumberOfGuests', 'ReservationStatus'];

    public function guest():BelongsTo
    {
        return $this->belongsTo(Guest::class);
    }
    public function room():BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
    public function billings():HasMany
    {
        return $this->hasMany(Billing::class, 'ReservationID');
    }
}
