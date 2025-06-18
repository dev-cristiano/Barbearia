<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'cpf',
        'specialties',
        'enterprise_id',
    ];

    public function user(): hasMany
    {
        return $this->hasMany(User::class);
    }
}
