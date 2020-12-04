@extends('Dashboard.layout.app')

@section('page_title')
    {{$module_name='edit user'}}
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
                    <p class="card-category">here you can edit user</p>
                </div>
{{--                end of card header--}}
                <div class="card-body">
                    <form action="{{route('users.update',$row->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">User name</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{$row->name}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
{{--                            end of col--}}
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                                                <label class="bmd-label-floating">Email address</label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{$row->email}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                         </div>
{{--                            end of col--}}
                    </div>
{{--                        end pf row--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Password</label>
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">group</label>
                                    <select name="group" id="" class="form-control text-info">
                                        <option value="admin" {{$row->group == 'admin'? 'selected':''}}>admin</option>
                                        <option value="user"  {{$row->group == 'user'? 'selected':''}}>user</option>
                                    </select>
                                    @error('group')
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
        </div>
{{--        end of col--}}
    </div>
{{--    end of row--}}

@endsection
@push('js')

@endpush
