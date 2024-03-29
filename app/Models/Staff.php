<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $primaryKey = 'StaffID';
    protected $fillable = ['Name','Position','ContactNumber', 'ShiftInformation'];

    public function housekeepings():HasMany
    {
        return $this->hasMany(Housekeeping::class, 'StaffID');
    }

    public function billings():HasMany
    {
        return $this->hasMany(Billing::class, 'StaffID');
    }

    public function services():HasMany
    {
        return $this->hasMany(RoomService::class, 'StaffID');
    }

}
