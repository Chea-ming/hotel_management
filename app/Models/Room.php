<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'RoomID';
    protected $fillable = ['RoomType','RoomNumber', 'RoomRate', 'RoomStatus', 'RoomFeatures'];
    use HasFactory;

}
