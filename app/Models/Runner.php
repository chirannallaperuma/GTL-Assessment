<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    use HasFactory;

    protected $table = 'runners';

    protected $fillable = [
        'race_id',
        'name',
        'age',
        'sex',
        'color'
    ];

    const COLOR_BLACK = 'B';
    const COLOR_WHITE = 'W';

    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    public function lastRuns()
    {
        return $this->hasMany(LastRun::class, 'runner_id', 'id');
    }
}
