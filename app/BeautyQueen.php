<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeautyQueen extends Model
{
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['rg_number', 'created_at', 'updated_at'];

    /**
     * Returns all woman that we can vote for.
     *
     * @param string $nameColumn
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllQueens($nameColumn = 'text')
    {
        return static::all([
            'id',
            "name AS {$nameColumn}",
        ]);
    }
}
