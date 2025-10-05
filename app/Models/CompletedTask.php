<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trait\CommonTaskTrait;

class CompletedTask extends Model
{
    use HasFactory,CommonTaskTrait;

    // タスクを未完了タスクテーブルから持ってきたときにインクリメントしないようにする
    public $incrementing = false;
    // 複数代入不可能な属性
    // protected $guarded = ['id'];
   // 2. 【重要】マスアサインメントでIDを含むこれらのカラムへの代入を許可する
    protected $fillable = [
        'id', 
        'name', 
        'period', 
        'detail', 
        'priority', 
        'user_id'
    ];

}
