<br>
<div class="card ">
    <div class="card-header card-header-tabs card-header-warning">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">comments:</span>

            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="profile">
                <table class="table">
                    <thead>
                    <tr>

                        <th>name</th>
                        <th>comment</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>
                            {{$comment->user->name}}
                        </td>
                        <td>
                            {{$comment->comment}}
                        </td>

                        <td class="td-actions text-right">
                            <a  href="" class="btn btn-white btn-link btn-sm edit-comment-btn" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                            </a>
                            <form action="{{route('comments.destroy',$comment->id)}}" method="post">
                                @csrf
                                @method('post')
                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                            </form>
                        </td>
                    </tr>
                        <tr>
                            <td>
                                @include('Dashboard.comments.edit')
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
