@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Home','key'=>'','url'=>route('admin')])
<div class="container-fluid py-4">
    <div class=row>
        <div class="col-6"></div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <a href="{{route('category.create')}}" class="btn btn-success">ADD</a>
        </div>
    </div>
    <div class="card">

        <div class="table-responsive">
           <h1>Trang chủ</h1>
        </div>
    </div>

</div>
@endsection
