@extends('layouts.app') @section('content')
<div class="d-flex flex-column flex-root" id="kt_app_root"> 
    <div class="d-flex flex-column flex-column-fluid"> 
        <div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20"> 
            <a href="../../index.html" class="pt-lg-20 mb-12"> <img alt="Logo" src="{{ URL::to('assets/media/logos/logo.png') }}" class="theme-light-show h-40px h-lg-50px"> 
                <img alt="Logo" src="../../assets/media/logos/default.svg" class="theme-dark-show h-40px h-lg-50px"> 
            </a> 
                <h1 class="fw-bold fs-2qx text-gray-800 mb-10">System Error</h1>
                 <div class="fw-semibold fs-3 text-muted mb-15"> Something went wrong! 
                    <br> Please try again later. 
                </div> 
                <div class="text-center">
                    <a href="{{ route('home') }}" class="btn btn-lg btn-primary fw-bold">Go to homepage</a> 
                </div> 
             </div>
            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-350px" style="background-image: url(../../assets/media/illustrations/dozzy-1/7.png)"> 
            </div>
        </div>
    </div>
@endsection