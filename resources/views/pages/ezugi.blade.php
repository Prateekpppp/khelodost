@extends('sports_master')

@section('sports_body')
    <main class="layout-content-center layout-section">
        <div class="container indian-card-container">

            <!-- Top Scrollable Menu -->
             <div class="overflow-hidden bg-white py-3">
                <div class="d-flex gap-3 overflow-auto scrollbar-thin">
                    <a class="provider-btn" data-target="bt-beter-live">
                        <img src="{{ asset('images/HOgaming.webp') }}" alt="Beter Live" class="nav-bar-logo-indian">
                    </a>
                    <a class="provider-btn" data-target="bt-ho-gaming">
                        <img src="{{ asset('images/logo-royal-gaming-sitio-1.png') }}" alt="Ho Gaming"
                            class="nav-bar-logo-indian">
                    </a>
                    <a class="provider-btn" data-target="bt-evolution">
                        <img src="{{ asset('images/BetGames-logo.png') }}" alt="Evolution" class="nav-bar-logo-indian">
                    </a>
                    <a class="provider-btn" data-target="bt-royal-g">
                        <img src="{{ asset('images/smartsoft.webp') }}" alt="Royal G" class="nav-bar-logo-indian">
                    </a>
                    <a class="provider-btn" data-target="bt-royal-g">
                        <img src="{{ asset('images/play-n-go-logo.png') }}" alt="Royal G" class="nav-bar-logo-indian">
                    </a>
                    <a class="provider-btn" data-target="bt-pribe">
                        <img src="{{ asset('images/Onlyplay-logo.webp') }}" alt="Pribe" class="nav-bar-logo-indian">
                    </a>
                </div>
            </div>

            <!-- Main Image Banner -->
            <div class="mb-3 rounded-3 overflow-hidden" style="height:200px;">
                <img src="{{ asset('images/roleta-brasileira-eguzi.webp') }}" alt="Live Roulette" class="w-100 h-100">
            </div>

            <!-- Grid of Buttons -->
            <div class="row row-cols-2 row-cols-md-4 g-2">
                <div class="col">
                    <img src="{{ asset('images/Agent-of-Heart.webp') }}" alt="Game 3" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Amulet-of-dad.webp') }}" alt="Game 4" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Animal-madness.webp') }}" alt="Game 5" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Bakers-treat.webp') }}" alt="Game 6" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Amulet-of-dad.webp') }}" alt="Game 12" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Battle-royal.webp') }}" alt="Game 8" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Agent-of-Heart.webp') }}" alt="Game 11" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/24k-dragon.webp') }}" alt="Game 9" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Ace-of-Spades.webp') }}" alt="Game 10" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/24k-dragon.webp') }}" alt="Game 1" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Ace-of-Spades.webp') }}" alt="Game 2" class="game-image">
                </div>
                <div class="col">
                    <img src="{{ asset('images/Banana-rock.webp') }}" alt="Game 7" class="game-image">
                </div>
            </div>
        </div>
    </main>
@endsection
