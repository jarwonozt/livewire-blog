@extends('layouts.master')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <livewire:contact-index></livewire:contact-index>
        </div>
    </div>
</div>
@push('custom-scripts')

@endpush
@endsection
