@extends('layout')

{{-- タイトル --}}
@section('title')(詳細画面)@endsection

{{-- メインコンテンツ --}}
@section('contents')
   @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif

<h1>完了タスクの一覧</h1>
<a href="/task/list">タスク一覧へもどる</a>
        <table border="1">
            <tr>
                <th>タスク名</th>
                <th>期限</th>
                <th>重要度</th>
                <th>完了日時</th>
            </tr>
 @foreach ($completed_list as $completedTask)
        <tr>
            <td>{{ $completedTask->name }}
            <td>{{ $completedTask->period }}
            <td>{{ $completedTask->getPriorityString() }}
            <td>{{ $completedTask->created_at }}

        @endforeach
        </table>
        <!-- ページネーション -->
        {{-- {{ $completed_list->links() }} --}}
        現在 {{ $completed_list->currentPage() }} ページ目<br>
        @if ($completed_list->onFirstPage() === false)
        <a href="/completed_tasks/list">最初のページ</a>
        @else
        最初のページ
        @endif
        / 
        @if ($completed_list->previousPageUrl() !== null)
            <a href="{{ $completed_list->previousPageUrl() }}">前に戻る</a>
        @else
            前に戻る
        @endif
        / 
        @if ($completed_list->nextPageUrl() !== null)
            <a href="{{ $completed_list->nextPageUrl() }}">次に進む</a>
        @else
            次に進む
        @endif
@endsection