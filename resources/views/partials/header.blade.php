<header>
    <nav class="py-3">
        <div class="container d-flex align-items-center">
            <a href="">
                <img class="main-logo" src="{{ asset('img/dc-logo.png') }}" alt="">
            </a>
    
            <ul class="main-navigation d-flex align-items-center fw-bold fs-4">
                <li class="mx-5">
                    <a href="{{ route('home') }}" @if (Request::route()->getName() === 'home') class="active"
                        @endif>
                        COMICS
                    </a>
                </li>
                <li>
                    <a href="{{ route('news') }}"  @if (Request::route()->getName() === 'news') class="active"
                        @endif>
                        NEWS
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>