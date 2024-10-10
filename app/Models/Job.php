<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}