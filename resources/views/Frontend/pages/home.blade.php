@extends('Frontend.layout.app')


@section('content')
<div class="container" style="margin-top: 150px;min-height: 500px">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h1>{{$page->name}}</h1>
                <h4>{{$page->description}}</h4>
            </div>

        </div>
    </div>
</div>
@endsection


