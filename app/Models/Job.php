<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job{
    public static function all(): array{
        return[
            [
                'id'=>1,
                'title'=>'director',
                'salary'=>'$5000',
            ],
            [
                'id'=>2,
                'title'=>'Programmer',
                'salary'=>'$1000',
            ],
            [
                'id'=>3,
                'title'=>'Teacher',
                'salary'=>'$4000',
            ],
        ];
    }

    public static function find($id):array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(! $job)
        {
            abort(404);
        }
        return $job;
    }
}