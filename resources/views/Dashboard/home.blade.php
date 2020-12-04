@extends('Dashboard.layout.app')

@section('page_title')
    home page
@endsection
@push('css')

@endpush

@section('content')

    @component('Dashboard.layout.nav')
        @slot('nav_title')
            home page
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">videos</p>
                    <h3 class="card-title">{{$videos->count()}}

                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-warning">warning</i>
                        <a href="{{route('videos.index')}}" class="warning-link">Get all videos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">categories</p>
                    <h3 class="card-title">{{$categories->count()}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i>
                        <a href="{{route('categories.index')}}" class="warning-link">Get all categories</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">skills</p>
                    <h3 class="card-title">{{$skills->count()}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i>
                        <a href="{{route('skills.index')}}" class="warning-link">Get all skills</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">tags</p>
                    <h3 class="card-title">{{$tags->count()}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i>
                        <a href="{{route('tags.index')}}" class="warning-link">Get all tags</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
