<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $table = 'citizen';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'address',
        'blood_type',
        'birth_date',
        'religion',
        'family_card_id',
    ];

    public function familyCard()
    {
        return $this->belongsTo(FamilyCard::class);
    }
}
