@extends('Dashboard.layout.app')

@section('page_title')
    {{$module_name='add category'}}
@endsection
@push('css')
@endpush
@section('content')
    @component('Dashboard.layout.nav')
        @slot('nav_title')
        {{$module_name}}
        @endslot
    @endcomponent
{{--    content here--}}
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{$module_name}}</h4>
                    <p class="card-category">here you can add category</p>
                </div>
{{--                end of card header--}}
                <div class="card-body">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">category name</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                                                <label class="bmd-label-floating">meta keywords</label>
                                    <input type="text" class="form-control @error('meta_keyword') is-invalid @enderror" name="meta_keywords">
                                    @error('meta_keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                         </div>
                    </div>

{{--                        end of row--}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">meta description</label>
                                        <textarea name="meta_description" class="form-control @error('meta_keyword') is-invalid @enderror" ></textarea>
                                    @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

{{--                        end of row--}}
                        <button type="submit" class="btn btn-primary pull-right">{{$module_name}}<div class="ripple-container"></div></button>
                    </form>
{{--                    end of form--}}
                </div>
{{--                end of card body--}}
            </div>
{{--            end of card--}}
        </div>
{{--        end of col--}}
    </div>
{{--    end of row--}}

@endsection
@push('js')

@endpush
