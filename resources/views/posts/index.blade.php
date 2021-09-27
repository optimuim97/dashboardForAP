@extends('layouts.app')
@section('title')
    Publications
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Publications</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('posts.create')}}" class="btn btn-primary form-btn">Post <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('posts.table')
            </div>
       </div>
   </div>

    </section>
@endsection

