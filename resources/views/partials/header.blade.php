<div class="top-page">
    <div class="ms_container">
        <ul class="d-flex justify-content-end m-0">
            <li>
                <a href="#">DC POWER VISA <span>&reg;</span></a>
            </li>
            <li class="ms-5">
                <a href="#">ADDITIONAL DC SITES</a>
            </li>
        </ul>
    </div>
</div>
<header>
    <!-- Container -->
    <div class="ms_container">
        <!-- Content -->
        <div class="content d-flex justify-content-between align-items-center">
            {{-- Logo --}}
            <div class="logo">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">
                </a>
            </div>
            {{-- Links --}}
            <div class="header-links d-flex">
                <ul class="header-list m-0 p-0">
                    <li>
                        <a href="{{url('/characters')}}">CHARACTERS</a>
                        <a href="{{url('/')}}">COMICS</a>
                        <a href="{{url('/movies')}}">MOVIES</a>
                        <a href="{{url('/tv')}}">TV</a>
                        <a href="{{url('/games')}}">GAMES</a>
                        <a href="{{url('/collectibles')}}">COLLECTIBLES</a>
                        <a href="{{url('/videos')}}">VIDEOS</a>
                        <a href="{{url('/fans')}}">FANS</a>
                        <a href="{{url('/news')}}">NEWS</a>
                        <a href="{{url('/shop')}}">SHOP</a>
                    </li>
                </ul>
            </div>
            {{-- Search bar --}}
            <input type="text" placeholder="Search" class="text-end">
        </div>
        <!-- End Content -->
    </div>
    <!-- End Container -->
</header>