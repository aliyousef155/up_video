@extends('Frontend.layout.app')


@section('content')
    <div class="container"style="    margin-top: 7%;">
        <div class="row">
            @foreach($videos as $video)
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <a href="{{route('video',$video->id)}}">    <img class="card-img-top" src="{{asset('uploads/'.$video->image)}}" alt="Card image cap"style="max-height: 240px"></a>
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
        </div>
        {{--        end of row--}}
    </div>
    {{--    end of container--}}
@endsection

