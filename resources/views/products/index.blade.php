@extends('layouts.app')
@section('title')
    Products 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Products</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('products.create')}}" class="btn btn-primary form-btn">Product <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('products.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

