<?php

namespace App\Demo\Api\V1\Model;

use Resta\Support\Str;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    /**
     * @var $table string
     */
    protected $table='users';

    /**
     * @var array $fillable
     */
    protected $fillable = [];

    /**
     * @var array
     */
    protected $hidden = [];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saved'   => 'namespace',
        'deleted' => 'namespace',
    ];

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePagination($query)
    {
        return $query
               ->paginate(config('app.pagination'))
               ->withPath(Str::removeCharacterFromUri('page'))
               ->toArray();
    }
}

