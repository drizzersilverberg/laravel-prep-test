@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <span>
                        {{ __('Product List') }}
                    </span>
                    <div>
                        <button class="btn btn-primary">Create Product</button>
                    </div>
                </div>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
