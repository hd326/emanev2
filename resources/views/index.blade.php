@extends('layouts.app')

@section('content')
{{-- <div class="side-bar-menu" id="side-bar">
    <div class="side-nav" id="side-menu">
        <a href="#" class="btn-style" id="btn-close">&times;</a>
        <a id="" href="#">Browse<span class="fa fa-angle-right"></span></a>
        <a id="" href="#">Shows<span class="fa fa-angle-right"></span></a>
        <a id="" href="#">Manga<span class="fa fa-angle-right"></span></a>
        <a id="" href="#">Shop<span class="fa fa-angle-right"></span></a>
        <a id="" href="#">Forums<span class="fa fa-angle-right"></span></a>
        <a id="" href="#">Premium<span class="fa fa-angle-right"></span></a>
    </div>
</div> --}}

<header>
    <div id="nav-container">
        <nav id="left-side">
            <ul>
                <!-- logo & title as a list item -->
                <li class="main-menu-l">
                    <div id="logo">
                        <p class='fa fa-gg fa-2x'></p>
                        <h1><span id="e">e</span>mane</h1>
                    </div>
                </li>
                <li class="main-menu-l">
                    <a href="#">Browse</a>
                    <div id="browse-menu">
                        <div class="browse-col-1">
                            <ul>
                                <li><a href="">Action</a></li>
                                <li><a href="">Adventure</a></li>
                                <li><a href="">Comedy</a></li>
                                <li><a href="">Tragedy</a></li>
                                <li><a href="">Shounen</a></li>
                            </ul>
                        </div>
                        <div class="browse-col-1">
                            <ul>
                                <li><a href="">Fantasy</a></li>
                                <li><a href="">Game</a></li>
                                <li><a href="">Historical</a></li>
                                <li><a href="">Horror</a></li>
                                <li><a href="">Magic</a></li>
                            </ul>
                        </div>
                        <div class="browse-col-1">
                            <ul>
                                <li><a href="">Martial-Arts</a></li>
                                <li><a href="">Mecha</a></li>
                                <li><a href="">Military</a></li>
                                <li><a href="">Music</a></li>
                                <li><a href="">Mystery</a></li>
                            </ul>
                        </div>
                        <div class="browse-col-1">
                            <ul>
                                <li><a href="">Parody</a></li>
                                <li><a href="">Police</a></li>
                                <li><a href="">Post-Apocalyptic</a></li>
                                <li><a href="">Psychological</a></li>
                                <li><a href="">Romance</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="main-menu-l">
                    <a href="">Shows</a>
                </li>
                <li class="main-menu-l">
                    <a href="">Manga</a>
                </li>
                <li class="main-menu-l">
                    <a href="">Shop</a>
                </li>
            </ul>
        </nav>
        <nav id="right-side">
            <ul>
                <li>
                    <a href="">Profile</a>
                </li>
                <li>
                    <a href="">History</a>
                </li>
                <li>
                    <a href="">Bookmarks</a>
                </li>
                <li id="search"><input id="search-box" type="text" name="search" placeholder="Anime, drama, etc.">
                    <div id="search-icon" class="fa fa-search fa-1x"></div>
                </li>

                <side-nav>
                    
                </side-nav>
            </ul>
        </nav>
    </div>
</header>


<div id="main-col"></div>

<div id="side-col"></div>

<!--<ol id="alphabet">
    <li>A</li>
    <li>B</li>
    <li>C</li>
    <li>D</li>
    <li>E</li>
    <li>F</li>
    <li>G</li>
    <li>H</li>
    <li>I</li>
    <li>J</li>
    <li>K</li>
    <li>L</li>
    <li>M</li>
    <li>N</li>
    <li>O</li>
    <li>P</li>
    <li>Q</li>
    <li>R</li>
    <li>S</li>
    <li>T</li>
    <li>U</li>
    <li>V</li>
    <li>W</li>
    <li>X</li>
    <li>Y</li>
    <li>Z</li>
    </div>-->

<!-- hero -->
<div id="container">
    <div id="hero">
        <div id="hero-helper"></div>
        <div id="hero-helper-2"></div>
        <div id="hero-wrapper">
            <div class="hero-section">
                <div id="hero-photo">
                    <img src="{{ asset('images/featured/coderealize.jpg') }}">
                </div>
            </div>

            <div class="hero-section">
                <h2>Code: Realize</h2><br />
                <p>Series</p><br />
                <p>Within Cardia Beckford's hazy memories, she can recall her father Isaac and the home where she
                    lives
                    alone, feared as a monster by the townsfolk—for in her body, she carries a deadly substance.
                    Embedded in
                    her chest by her father, the eternally beating heart—also known as Horologium—has the capability
                    to
                    produce infinite power. However, it also makes her skin destroy anything it touches.</p><br />
                <div id="hero-play-button">
                    <span class="fa fa-play fa-1x"></span>
                    &nbsp;&nbsp;START WATCHING
                </div>
            </div>
        </div>
    </div>
    <!-- hero -->

    <!-- top picks -->

    <div id="top-picks">
        <h2>SUMMER SIMULCAST</h2>
        <animes :data="{{ $summer }}" inline-template>
            {{-- <a href="/anime/{{$anime->id}}">
            <div class="top-card">
                <div class="top-half-card">
                    <div class="top-half-card-helper-2"></div>
                    <div class="top-half-card-helper">

                        <img src={{$anime->images->src}}>

                    </div>
                </div>
                <div class="bottom-half-card">
                    <div class="bottom-half-card-helper">
                        <div class="bottom-half-half">
                            <div class="bottom-half-bg"></div>
                            @foreach ($anime->images as $images)
                            <img src={{$images->src}}>
                            @endforeach
                        </div>
                        <div class="bottom-half-half">{{$anime->name}}<br /><br />
                            <div class="bottom-half-desc">
                                <span>Series</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                    class="diamond"></span><span>Subtitled</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a> --}}
        </animes>

        {{-- <button id="show-more" @click="showLess = false">SHOW MORE</button> --}}



    </div>
    <!-- top picks -->
    <!-- just updated -->
    <div id="top-picks">
        <h2>JUST UDPATED</h2>
        <animes :data="{{ $just_updated }}"></animes>
    </div>


    <!-- just updated -->
    <!-- continuing simulcast-->
    <div id="top-picks">
        <h2>CONTINUING SIMULCASTS</h2>
        <animes :data="{{ $continuing_simulcasts }}"></animes>

    </div>

</div>
</div>

<!-- continuing simulcast-->
<script>
    $(function () {
        //$('.icon').on('click', function () {
        //    $('#side-menu').slideToggle();
        //});

        //$('#btn-close').on('click', function () {
        //    $('#side-menu').fadeOut();
        //});

        $('.main-menu-l').hover(
            function () {
                $('#browse-menu', this).fadeIn();
            },
            function () {
                $('#browse-menu', this).fadeOut();
            },
        );


        $('.simul').hover(
            function () {
                $('.tooltiptext', this).fadeIn(0);
            },

            function () {
                $('.tooltiptext', this).fadeOut(0);
            },
        );

        $('.recent-shows').hover(
            function () {
                $('.tooltiptext-r', this).fadeIn(100);
            },

            function () {
                $('.tooltiptext-r', this).fadeOut(50);
            },
        );

        $('.watching').hover(
            function () {
                $('.tooltiptext-w', this).slideToggle(10);
            },

            function () {
                $('.tooltiptext-w', this).fadeOut(0);
            },
        );

        $('.pop').hover(
            function () {
                $('.pop-text', this).fadeIn();
            },

            function () {
                $('.pop-text', this).fadeOut();
            },
        );



        $(".icon").click(function () {
            $(".side-bar-menu").slideToggle(100);
        });

        $("#btn-close").click(function () {
            $(".side-bar-menu").fadeOut();
        });

        $("#btn-close2").click(function () {
            $(".side-bar-menu").fadeOut();
        });

        $("#btn-close3").click(function () {
            $(".side-bar-menu").fadeOut();
        });

        $("#btn-close4").click(function () {
            $(".side-bar-menu").fadeOut();
        });

        $("#btn-close5").click(function () {
            $(".side-bar-menu").fadeOut();
        });

        $("#btn-close6").click(function () {
            $(".side-bar-menu").fadeOut();
        });

        $('#back').click(function () {
            $('.side-nav-ours').fadeOut();
            $('.side-nav').fadeToggle();
        });

        $('#back2').click(function () {
            $('.side-nav-shop').fadeOut();
            $('.side-nav').fadeToggle();
        });

        $('#back3').click(function () {
            $('.side-nav-coffee').fadeOut();
            $('.side-nav-shop').fadeIn();
        });

        $('#back4').click(function () {
            $('.side-nav-story').fadeOut();
            $('.side-nav').fadeIn();
        });

        $('#back5').click(function () {
            $('.side-nav-join').fadeOut();
            $('.side-nav').fadeIn();
        });

        $('#our-stores').click(function () {
            $('.side-nav').fadeOut();
            $('.side-nav-ours').fadeIn();
        });

        $('#shop').click(function () {
            $('.side-nav').fadeOut();
            $('.side-nav-shop').fadeIn();
        });

        $('#coffee').click(function () {
            $('.side-nav-coffee').fadeIn();
            $('.side-nav-shop').fadeOut();
        });

        $('#story').click(function () {
            $('.side-nav').fadeOut();
            $('.side-nav-story').fadeIn();
        });

        $('#join').click(function () {
            $('.side-nav').fadeOut();
            $('.side-nav-join').fadeIn();
        });
    });

</script>
@endsection
