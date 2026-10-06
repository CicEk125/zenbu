<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Dish extends Model { protected $guarded = []; protected $casts = ['is_signature' => 'boolean']; }
