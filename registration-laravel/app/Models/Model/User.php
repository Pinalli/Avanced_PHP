<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $connection = 'sqlite';
    protected $table = 'user';

    public static function getUser(int $limit)
    {
        $sql = self::select([
            'id',
            'name',
            'email',
            'data_register',
        ])
        ->limit($limit);
        dd($sql->toSql());
    }

    public static function register(Request $request)
    {
        $sql = self::insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'data_register' => DB::raw('now()'),
        ]);

        dd($sql->toSql(), $request->all());
    }
}
