<?php

namespace LaravelEnso\RoAddresses\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\app\Contracts\Activatable;
use LaravelEnso\Helpers\app\Traits\ActiveState;

class County extends Model implements Activatable
{
    use ActiveState;

    protected $fillable = ['abbreviation', 'name'];

    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
