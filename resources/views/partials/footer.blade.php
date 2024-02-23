@php
    $linksFooter =[
        'DC COMICS'=>[
            'Characters',
            'Comics',
            'Movie',
            'TV',
            'Games',
            'Videos',
            'News'
        ],
        'DC'=>[
            'Terms Of Use',
            'Privacy policy(New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        'SITES'=>[
            'DC',
            'MAD Magazine',
            'DC Universe',
            'DC Power Visa'
        ],
        'SHOP'=>[
            'Shop DC',
            'Shop DC collectibles'
        ],
];
    $socialFooter =[
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ]
@endphp
<footer>
    <div class="upper-footer py-5">
        
        <div class="container">
            <div class="row  justify-content-between">
                <div class="col-6 d-flex flex-wrap align-items-start">
                    @foreach($linksFooter as $arrayName => $singleElem)
                    <div class="col-4">
                        <ul class="list-unstyled">
                            <h4 class="text-white">{{$arrayName}}</h4>
                            @foreach ($singleElem as $singleList)
                                <li>
                                    <a class="text-decoration-none" href="#nogo">{{$singleList}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                    <p>
                        All site contents TM and &copy; 2020 DC entertainment, unless otherwhise
                        <a class="foot-link" href="#nogo">noted here</a>. All rights reserved.
                        <a class="foot-link" href="#nogo">Cookies Settings</a>
                    </p>
                </div>

                <div class="col-6">
                    <div class="overflow-logo">
                        <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="Logo Background">
                    </div>
                </div>
            
            </div>
        </div>
    
    </div>

    <div class="lower-footer py-4">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-2">
                    <button class="foot-button">
                        SIGN UP NOW!
                    </button>
                </div>
    
                <div class="col-8 d-flex justify-content-end align-items-center">
                    <h3 class="me-4">Follow us</h3>
        
                    <ul class="list-unstyled d-flex mb-0">
                        @foreach ($socialFooter as $singleSocial)
                            <li class="px-2">
                                <a href="#nogo">
                                    <img src="{{Vite::asset('resources/img/'.$singleSocial)}}" alt="Social">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
