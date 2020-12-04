@extends('Dashboard.layout.app')

@section('message_title')
    {{$module_name='edit message'}}
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
                    <p class="card-category">here you can edit messages</p>
                </div>
{{--                end of card header--}}
                <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">message user name</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" value="{{$row->name}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"  value="{{$row->email}}">
                                    @error('email')
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
                                    <label class="bmd-label-floating">message</label>
                                    <textarea  class="form-control  @error('message') is-invalid @enderror" >{{$row->message}}</textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        {{--                        end of row--}}

                    <form action="{{route('message.replay',$row->id)}}" method="post">
                        @csrf
                    <div class="col-md-12">
                        <h3>replay message</h3>
                    </div>
                    <div class="row">
                    <div class="col-md-10">
                        <label class="bmd-label-floating"> replay message</label>
                        <textarea name="message" id=""  class="form-control" ></textarea>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">replay</button>
                    </div>
                </div>
                    </form>
                </div>
{{--                end of card body--}}
            </div>
{{--            end of  card--}}
        </div>
{{--        end of col--}}
    </div>
{{--    end of row--}}

@endsection
@push('js')

@endpush
