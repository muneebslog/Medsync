<?php

namespace App\Models;

use App\Models\FamilyAccount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    protected $fillable = [
        'mrid',
        'family_account_id',
        'name',
        'age',
        'gender',
        'relation_to_head',
    ];

    public function familyAccount(): BelongsTo
    {
        return $this->belongsTo(FamilyAccount::class);
    }
}
