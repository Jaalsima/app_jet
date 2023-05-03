@extends('layouts.my_layout')
@section('title', 'Index')
@section('content')
<h1>Index</h1>
<ul>
    @foreach ($elements as $element)
    <li>{{$element->name}}</li>
    @endforeach
</ul>
{{$elements->links()}}
@endsection
