@extends('layouts.master')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Contact</h4>
                        </div>
                        <livewire:contact-index></livewire:contact-index>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@push('custom-scripts')

@endpush
@endsection
