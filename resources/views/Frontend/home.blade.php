@extends('Frontend.layout.app')
@section('content')
    {{$home=''}}
    <div class="container-fluid"style="margin-top: 10px">
        <div class="container">
            <div class="row">
                @if($videos->count()<1)
                    <div class="col-md-12"  style="min-height: 300px">
                        <h1 class="text-center">no videos found</h1>
                    </div>
                @else
                @foreach($videos as $video)
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="{{route('video',$video->id)}}">   <img class="card-img-top" src="{{asset('uploads/'.$video->image)}}" alt="Card image cap" style="max-height: 240px"></a>
                            <div class="card-body">
                                <p><strong>{{$video->name}}</strong></p>
                                <p class="card-text">{{$video->description}}</p>
                                <p><small>{{$video->created_at}}</small></p>
                            </div>
                        </div>
                        {{--                end of card--}}
                    </div>
                    {{--            end of col 4 --}}
                @endforeach
                {{$videos->links()}}
                    @endif
            </div>
        </div>

{{--        end of row--}}
        <div class="section section-dark text-center">
            <div class="container-fluid">
                <h2 class="title">our numbers</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h2 class="card-title"> {{$videosCount}}</h2>
                                        <h3 class="card-category">videos</h3>
                                    </div>
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h2 class="card-title"> {{$commentsCount}}</h2>
                                        <h4 class="card-category">comments</h4>
                                    </div>
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h2 class="card-title"> {{$tagsCount}}</h2>
                                        <h4 class="card-category">tags</h4>
                                    </div>
                                </a>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="section landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center">Keep in touch?</h2>
                        <form class="contact-form" method="post" action="{{route('message')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-single-02"></i>
                      </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-email-85"></i>
                      </span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                            </div>
                            <label>Message</label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <button class="btn btn-danger btn-lg btn-fill" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    end of container--}}
@endsection
