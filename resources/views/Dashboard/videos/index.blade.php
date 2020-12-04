@extends('Dashboard.layout.app')

@section('page_title')
    {{$module_name= 'all videos'}}
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
                        <p class="card-category"> Here you can see, add, edit and delete videos</p>
                        <a href="{{route('videos.create')}}" class="btn btn-primary btn-round bg-light text-dark">add video <div class="ripple-container"></div></a>
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
                                    published
                                </th>
                                <th>
                                    category
                                </th>
                                <th>
                                    user
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
                                    {{$row->published}}
                                </td>
                                <td>
                                    {{$row->category->name}}
                                </td>
                                <td>
                                    {{$row->user->name}}
                                </td>

                                <td class="td-actions text-right">
                                    <a type="button" href="{{route('videos.edit',$row->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit video">
                                        <i class="material-icons">edit</i>
                                    </a>
                                        <form action="{{route('videos.destroy',$row->id)}}" method="post">
                                            @csrf
                                            @method('delete')
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
        </div>
{{--        end of col--}}
    </div>
{{--    end of row--}}
    {{$rows->links()}}
@endsection
@push('js')

@endpush
