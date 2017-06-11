@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('inventory::sidebar')
@endsection

@section('content-main')
  @include('products::'.$view)  
@endsection