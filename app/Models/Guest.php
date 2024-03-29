<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guest extends Model
{
    use HasFactory;

    protected $table = 'guests';
    protected $primaryKey = 'GuestID';
    protected $fillable = ['Name','Gender','DateOfBirth', 'ContactNumber', 'Address', 'Nationality'];

    public function billings():HasMany
    {
        return $this->hasMany(Billing::class, 'GuestID');
    }

    public function checks():HasMany
    {
        return $this->hasMany(CheckInCheckOut::class, 'GuestID');
    }

    public function services():HasMany
    {
        return $this->hasMany(RoomService::class, 'GuestID');
    }

}
