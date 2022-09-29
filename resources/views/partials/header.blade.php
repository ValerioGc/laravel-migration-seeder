<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="laravel logo">
    <nav>
        <ul>
            @foreach($links as $items)
{{--                <li>--}}
{{--                    <a href="{{route($items)}}"--}}
{{--                       class="navLink {{Request::route()->getName() == $items?'active':''}}">--}}
{{--                        {{$items}}--}}
{{--                    </a>--}}
{{--                </li>--}}
            @endforeach
        </ul>
    </nav>
</header>




