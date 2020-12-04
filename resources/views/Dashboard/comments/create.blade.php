
    <form action="{{route('comments.store')}}" method="post">
        @csrf

            <div class="form-group bmd-form-group">
                <input type="hidden" value="{{$row->id}}" name="video_id">
                <label class="bmd-label-floating">comment</label>
                <textarea name="comment" class="form-control  @error('comment') is-invalid @enderror" ></textarea>
                @error('comment')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary pull-right">add comment<div class="ripple-container"></div></button>

    </form>
{{--    end of form--}}
