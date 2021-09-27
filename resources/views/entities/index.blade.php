@extends('layouts.app')
@section('title')
    Entities 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Entities</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('entities.create')}}" class="btn btn-primary form-btn">Entity <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('entities.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

