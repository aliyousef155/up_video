@extends('Dashboard.layout.app')

@section('page_title')
    {{$module_name='edit video'}}
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
                    <p class="card-category">here you can edit videos</p>
                </div>
{{--                end of card header--}}
                <div class="card-body">
                    <form action="{{route('videos.update',$row->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">video name</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{$row->name}}">
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
                                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" name="meta_keywords" value="{{$row->meta_keywords}}">
                                    @error('meta_keywordss')
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
                                    <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" > {{$row->meta_description}}</textarea>
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
                                    <textarea name="description" class="form-control  @error('description') is-invalid @enderror" > {{$row->description}}</textarea>
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
                                    <input type="text" class="form-control  @error('published') is-invalid @enderror" name="published" value="{{$row->published}}">
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
                                    <input type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{$row->youtube}}">
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
                                    <select name="cat_id" id="">
                                        @foreach($categories as $category)
                                            <option {{$row->cat_id == $category->id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
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
                                <input type="file" name="image"  >
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
                                        @foreach($skills as $skill)
                                            <option value="{{$skill->id}}" {{in_array($skill->id,$selected_skills)?  'selected': ''}}>{{$skill->name}}</option>
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
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}" {{in_array($tag->id,$selected_tags)?  'selected': ''}}>{{$skill->name}}</option>
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
{{--            end of  card--}}

{{--            comments--}}
            @include('Dashboard.comments.create')
            @include('Dashboard.comments.index')
{{--            end of comments--}}
        </div>
{{--        end of col8--}}
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @php
                                $url=getYoutubeId($row->youtube)
                            @endphp
                            @if($url)
                                <iframe width="360" height="315" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @endif
                        </div>
                        {{--                end of card body--}}
                    </div>
                    {{--            end of card--}}
                </div>
{{--            end of col--}}
            </div>
{{--            end of row--}}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <img style="width: 350px;height: 250px" src="{{asset('uploads/'.$row->image)}}" alt="">
                        </div>
{{--                        end of card body--}}
                    </div>
{{--                    end of card--}}
                </div>
{{--                end of col--}}
            </div>
{{--            end of row--}}
        </div>
{{--        end of col4--}}
    </div>
{{--    end of row--}}


@endsection
@push('js')
<script>
$(document).ready(function () {
$(document).on('click','.edit-comment-btn',function (e) {
    e.preventDefault()
    $('.edit-comment-form').css('display','block')
})
});
</script>
@endpush
