<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trait\CommonTaskTrait;

class Task extends Model
{
    use HasFactory,CommonTaskTrait;

     /**
     * 複数代入不可能な属性
     */
    protected $guarded = ['id'];

}
