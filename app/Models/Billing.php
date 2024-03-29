<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Billing extends Model
{
    use HasFactory;

    protected $table = 'billings';
    protected $primaryKey = 'BillID';
    protected $fillable = ['GuestID','ReservationID','CheckInDateTime', 'CheckOutDateTime', 'TotalCharges', 'PaymentStatus'];

    public function guest():BelongsTo
    {
        return $this->belongsTo(Guest::class, 'GuestID');
    }
    public function reservation():BelongsTo
    {
        return $this->belongsTo(Reservation::class, 'ReservationID');
    }
}
