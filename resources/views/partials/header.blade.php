@php
    $links = [
        [
            'url' => '/characters',
            'label' => 'Characters',
            'active' => true,
        ],
        [
            'url' => '/',
            'label' => 'Comics',
            'active' => true,
        ],
        [
            'url' => '/',
            'label' => 'Movies',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Tv',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Games',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Collectibles',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Videos',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Fans',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'News',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Shop',
            'active' => false,
        ],
    ];
@endphp

<header>
    <div class="blue-line">
        <div class="container d-flex justify-content-end">
            <h5 class="text-white m-0">DC POWER VISA</h5>
            <h5 class="text-white m-0">ADDITIONAL DC SITES</h5>
        </div>
    </div>

    <nav class="bg-white py-3 my-nav">

        <div class="container d-flex justify-content-between align-items-center">
            <div class="col">
                <div class="logo-container">
                    <img class="dc-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-10">
                <ul class="d-flex list-unstyled justify-content-between align-items-center m-0">
                    @foreach ($links as $link)
                        <li>
        
                            <a class="text-decoration-none text-uppercase fw-semibold" 
                            href="{{ $link['url'] }}">
                                {{ $link['label'] }}
                            </a>
        
                        </li>
                    @endforeach
                    <li>
                        <div class="my-searchbar">
                            <input class="search-input" type="search" name="search" placeholder="Search">
                            <span id="search"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    
    </nav>
</header>
