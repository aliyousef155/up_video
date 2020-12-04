@extends('Dashboard.layout.app')

@section('page_title')
    {{$module_name='add video'}}
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
                    <p class="card-category">here you can add video</p>
                </div>
{{--                end of card header--}}
                <div class="card-body">
                    <form action="{{route('videos.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">video name</label>
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
                                        <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" ></textarea>
                                    @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">description</label>
                                        <textarea name="description" class="form-control  @error('description') is-invalid @enderror" ></textarea>
                                    @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

{{--                        end of row--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">published</label>
                                    <input type="text" class="form-control  @error('published') is-invalid @enderror" name="published">
                                    @error('published')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">youtube link</label>
                                    <input type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube">
                                    @error('youtube')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{--                        end of row--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating"> category</label>

                                    <select name="cat_id" id="" class="form-control bg-dark">
                                        <option value="">..</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('cat_id')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">

                                    <label class="bmd-label-floating"> image</label>
                                    <input type="file" name="image" >
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating"> skills</label>

                                    <select name="skills[]" id="" class="form-control bg-dark" multiple>
                                        <option value="">..</option>
                                        @foreach($skills as $skill)
                                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('cat_id')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating"> tags</label>

                                    <select name="tags[]" id="" class="form-control bg-dark" multiple>
                                        <option value="">..</option>
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('cat_id')
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
