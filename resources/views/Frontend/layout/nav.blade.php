<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-danger fixed-top >
    <div class="container" >
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{route('home')}}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
                up video
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </button>
                        <div class="dropdown-menu dropdown-danger">
                            @foreach($Categories as $category)
                            <a class="dropdown-item" href="{{route('category',$category->id)}}">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Skills
                        </button>
                        <div class="dropdown-menu dropdown-danger">
                            @foreach($Skills as $skill)
                                <a class="dropdown-item" href="{{route('skill',$skill->id)}}">{{$skill->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
                @if(auth()->user()=='')
                <li class="nav-item">
                    <a href="{{url('/login')}}" class="nav-link ">login</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/register')}}" class="nav-link">register</a>
                </li>
                @else
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{auth()->user()->name}}
                        </button>
                        <div class="dropdown-menu dropdown-danger">
                    <form action="{{ route('logout') }}" method="post">
                   @csrf
                    <button type="submit" class="btn mt-0 mr-0 ml-0 mb-0 btn-neutral" > logout</button>
                    </form>
                        </div>
                    </div>
                </li>
                    @endif
            </ul>
            <form class="form-inline ml-2 mr-2" method="get" action="{{route('home')}}" >
                @csrf
                <div class="form-group has-white">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{$search ?? ""}}">
                </div>
            </form>
        </div>
    </div>
</nav>


<!-- End Navbar -->
