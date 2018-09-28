@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
      <h1>id: {{ $task->id }} の編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection