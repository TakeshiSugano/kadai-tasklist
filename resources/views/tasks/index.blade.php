@extends('layouts.app')
@section('content')
<!-- ここにページ毎にコンテンツを書く -->
    <h1>タスク一覧</h1>
    
    @if(count($tasks) >0)
        <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>ステータス</th>
                <th>タスク</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} </td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                 
            @endforeach
        </tbody>
            
    @endif

    {!! link_to_route('tasks.create', '新規タスクの投稿',null,['class' => 'btn btn-primary']) !!}

@endsection