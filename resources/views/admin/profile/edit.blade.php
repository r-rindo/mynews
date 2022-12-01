@extends('layouts.profile')
@section('title', 'editファイル')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>editファイル</h2>
                <form action="{{ route('admin.profile.create') }}" method="post" enctype="multipart/form-data"></form>
            </div>
        </div>
    </div>
@endsection