@extends('layouts.app')
@section('title')
    Entity Types 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Entity Types</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('entityTypes.create')}}" class="btn btn-primary form-btn">Entity Type <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('entity_types.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

