<?php

namespace App\Http\Controllers;

use App\Models\CompletedTask as CompletedTaskModel;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class CompletedTaskController extends Controller
{
    public function list()
    {

        // 1ページ当たりの表示数を設定
        $per_page = 2;
        
        // completedlisttaskテーブルから情報を取得
        $list = CompletedTaskModel::where('user_id', Auth::id())
            ->paginate($per_page);

        // 必要な値をビューに渡す
        // completed_list.blade.phpを表示させる
        return view('completed_list',['completed_list'=> $list]);
    }
}
