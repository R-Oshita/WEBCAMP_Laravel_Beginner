<?php

namespace App\Models\Trait;

Trait CommonTaskTrait
{

        /**
     * 「重要度」用の定数
     */
    const PRIORITY_VALUE = [
        1 => '低い',
        2 => '普通',
        3 => '高い',
    ];

    /**
     * 重要度の文字列を取得する
     */

    public function getPriorityString()
    {
        return $this::PRIORITY_VALUE[$this->priority] ?? '';
    }
}
