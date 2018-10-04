@extends('layouts.app')
@section('content')
<!-- ここにページ毎にコンテンツを書く -->
    <h1>タスク一覧</h1>
    
    @if(count($tasks) >0)
        <ul>
            @foreach($tasks as $task)
                 <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} > {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif

    {!! link_to_route('tasks.create', '新規タスクの投稿') !!}

@endsection