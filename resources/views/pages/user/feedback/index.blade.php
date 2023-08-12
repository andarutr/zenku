@extends('layouts.panel')

@section('title', 'Feedback')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <x-form.post-feedback />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
