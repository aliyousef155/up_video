@extends('Frontend.layout.app')


@section('content')
    <div class="section  text-center">
        <div class="container" style="min-height: 500px">

            <div class="row">

                <div class="col-md-12">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar">
                                <img src="../assets/img/faces/erik-lucatero-2.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body">

                                <div class="author">
                                    <h3 class="card-title">{{$user->name}}</h3>
                                    <h5 class="card-title">{{$user->email}}</h5>
                                    @if(auth()->user()&&auth()->user()->id==$user->id)
                                    <button class="btn" id="edit-profile"> edit profile</button>
                                        @endif
                                </div>
                            <div id="edit-profile-form" style="display: none">
                                <form action="{{route('user.update',$user->id)}}" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">User name</label>
                                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">
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
                                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{$user->email}}">
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

                                    </div>
                                    {{--                        end of row--}}
                                    <button type="submit" class="btn btn-primary pull-right">update profile<div class="ripple-container"></div></button>
                                </form>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
    $(document).on('click',"#edit-profile",function () {
    $("#edit-profile-form").css('display','block');
    });
        });
    </script>
@endsection


