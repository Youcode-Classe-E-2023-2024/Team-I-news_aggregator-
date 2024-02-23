@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-center flex-column-fluid p-10">
            <img src="../../assets/media/illustrations/dozzy-1/18.png" alt="" class="mw-100 mb-10 h-lg-450px">
            <h1 class="fw-semibold mb-10" style="color: #A3A3C7">Seems there is nothing here</h1>
            <a href="{{ route('home') }}" class="btn btn-primary">Return Home</a>
        </div>
    </div>
@endsection