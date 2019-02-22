@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="row">

                    <div class="card text-white bg-primary mb-3" style="width: 19rem;">
                      <div class="card-header">Add products</div>
                      <div class="card-body">
                        <h5 class="card-title">Poducts</h5>
                        <a href="{{ route('products.index') }}" type="button" class="btn btn-primary btn-sm">Administrar</a>
                      </div>
                    </div>
                    
                    <div class="card text-white bg-info mb-3" style="width: 19rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Secondary card title</h5>
                        <a href="#" type="button" class="btn btn-primary btn-sm">Administrar</a>
                      </div>
                    </div>
                    <div class="card text-white bg-success mb-3" style="width: 19rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Success card title</h5>
                        <a href="#" type="button" class="btn btn-primary btn-sm">Administrar</a>
                      </div>
                    </div>

                    <div class="card text-white bg-warning mb-3" style="width: 19rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Warning card title</h5>
                        <a href="#" type="button" class="btn btn-primary btn-sm">Administrar</a>
                      </div>
                    </div>
                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
