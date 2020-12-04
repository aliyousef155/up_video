
 <div class="edit-comment-form" style="display: none">
     <form action="{{route('comments.update',$comment->id)}}" method="post">
         @csrf
         <div class="form-group bmd-form-group">
             <input type="hidden" value="{{$row->id}}" name="video_id">
             <input type="hidden" value="{{$comment->user->id}}" name="user_id">
             <label class="bmd-label-floating">comment</label>
             <textarea name="comment" class="form-control  @error('comment') is-invalid @enderror" >{{$comment->comment}}</textarea>
             @error('comment')
             <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
             @enderror
         </div>


         <button type="submit" class="btn btn-primary pull-right">edit comment<div class="ripple-container"></div></button>

     </form>
 </div>

