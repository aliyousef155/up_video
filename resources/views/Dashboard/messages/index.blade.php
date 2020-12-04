@extends('Dashboard.layout.app')

@section('message_title')
    {{$module_name= 'all messages'}}
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary ">
                    <h4 class="card-title ">{{$module_name}}</h4>
                    <div class="d-flex justify-content-between">
                        <p class="card-category"> Here you can see, add, edit and delete messages</p>

                    </div>

                </div>
{{--                end of card header--}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr><th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    email
                                </th>
                                <th>
                                    message
                                </th>

                                <td class="text-right">
                                    action
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $index=>$row)
                            <tr>
                                <td>
                                    {{$index+1}}
                                </td>
                                <td>
                                    {{$row->name}}
                                </td>
                                <td>
                                    {{$row->email}}
                                </td>
                                <td>
                                    {{$row->message}}
                                </td>

                                <td class="td-actions text-right">
                                    <a type="button" href="{{route('messages.edit',$row->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit message">
                                        <i class="material-icons">edit</i>
                                    </a>
                                        <form action="{{route('message.destroy',$row->id)}}" method="post">
                                            @csrf
                                    <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                                        <i class="material-icons">close</i>
                                    </button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
{{--                    end of table--}}
                </div>
{{--                end of card body--}}
            </div>
{{--            end of card--}}
            {{$rows->links()}}
        </div>
{{--        end of col--}}
    </div>
{{--    end of row--}}
@endsection
@push('js')

@endpush
