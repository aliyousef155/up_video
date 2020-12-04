@extends('Frontend.layout.app')


@section('content')
    <div class="container"style="    margin-top: 7%;">
        <div class="row">
            <div class="card" >
                <h2 class="card-title text-center">
                    <strong>  {{$video->name}}</strong>
                </h2>
                <div class="card-body">
                    @php
                        $url=getYoutubeId($video->youtube)
                    @endphp
                    @if($url)
                        <iframe style="width: 140vh; height: 60vh" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
                </div>
                {{--                end of card body--}}
                <div class="card-body text-center">
                    <p>{{$video->description}}</p>
                    <p><small>{{$video->created_at}}</small></p>
                </div>
                <div class="row">
                <div class="col-md-4">
                    Category:<a href="{{route('category',$video->category->id)}}"><span class="badge badge-info">{{$video->category->name}}</span></a>
                </div>
                <div class="col-md-4">
                    Skills:
                    @foreach($video->skills as $skill)
                        <a href="{{route('skill',$skill->id)}}">   <span class="badge badge-warning ml-2">{{$skill->name}}</span></a>
                    @endforeach

                </div>
                <div class="col-md-4">
                    Tags:
                    @foreach($video->tags as $tag)
                        <span class="badge badge-primary ml-2">{{$tag->name}}</span>
                    @endforeach

                </div>
                </div>

            </div>

            {{--            end of card--}}

        </div>
        {{--        end of row--}}
        @if(auth()->user())

                <form action="{{route('addComment')}}" method="post">
                    @csrf
                    <div class="row">
                    <div class="col-md-10">
                    <div class="form-group ">
                        <input type="hidden"value="{{$video->id}}" name="video_id">
                        <textarea name="comment" type="text" class="form-control form-control-success" placeholder="add comment"></textarea>
                    </div>
                    </div>
                    <div class="col-md-">
                        <button type="submit" class="btn">add comment</button>
                    </div>
                    </div>
                </form>
        @endif

        @foreach($video->comments as $comment)

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                               <div class="col-md-10">
                                   <a href="{{route('user.profile',$comment->user->id)}}">  <strong>{{$comment->user->name}}</strong></a>
                               </div>
                                <div class="col-md-2">
                                    <small>{{$comment->created_at}}</small>
                                    @if(auth()->user())
                                    @if(auth()->user()->group=='admin'||auth()->user()->id==$comment->user->id)
                                    <button class="btn btn-sm edit-comment" data-comment="{{$comment->id}}"type="button" >edit</button>

                                        @endif
                                        @endif
                                </div>
                                <div class="col-md-12">
                                    {{$comment->comment}}
                                </div>
                                <div class="edited-comment{{$comment->id}}" style="display: none">
                                    <form action="{{route('comment',$comment->id)}}" method="post">
                                        @csrf
                                        <textarea class="form-control mb-2" name="comment">{{$comment->comment}}</textarea>
                                        <button class="btn" type="submit">edit comment</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{--    end of container--}}
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            let editComment='edit-comment'+$(this).data('comment');
            $(document).on('click','.edit-comment',function (e) {
                e.preventDefault();
                let commentId=$(this).data('comment');
                let comment='.edited-comment'+commentId;
                $(comment).css('display','block')


            })
        });
    </script>
@endsection

