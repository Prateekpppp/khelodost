@extends('sports_master')

@section('sports_body')
    <main class="layout-content-center layout-section">
        <div class="container">

            <!-- 🔷 Banner Image Card -->
            <div class="mb-2 shadow-sm">
                <div class="card-body text-center">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('images/playcrick99-banner.webp') }}" class="img-fluid rounded-4" alt="Banner">
                    </a>
                </div>
            </div>

            <!-- 🔶 Tabs -->
            <div class="card shadow-sm mb-1">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-nowrap gap-0 overflow-auto">
                        <a href="javascript:void(0);" class="btn-tab active" data-tab="originals">Originals</a>
                        <a href="javascript:void(0);" class="btn-tab" data-tab="crash">Crash Games</a>
                        <a href="javascript:void(0);" class="btn-tab" data-tab="live">Live Roulette</a>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="javascript:void(0);" class="btn btn-outline-success btn-sm rounded-circle games_scroll"
                            data-scroll="-150">&lt;</a>
                        <a href="javascript:void(0);" class="btn btn-outline-success btn-sm rounded-circle games_scroll"
                            data-scroll="150">&gt;</a>
                    </div>
                </div>
                <div class="all_games d-flex overflow-auto p-2 gap-3">
                    <div id="originals" class="tab-content d-flex gap-2">
                        <img src="{{ asset('images/MINES.avif') }}" class="rounded tab-img" alt="Original 1">
                        <img src="{{ asset('images/T20-1739615944873.jpeg') }}" class="rounded tab-img" alt="Original 2">
                        <img src="{{ asset('images/aviatorspribe.avif') }}" class="rounded tab-img" alt="Original 3">
                        <img src="{{ asset('images/7UPDOWN-1739615820768.jpeg') }}" class="rounded tab-img"
                            alt="Original 4">
                        <img src="{{ asset('images/color_game.avif') }}" class="rounded tab-img" alt="Original 5">
                        <img src="{{ asset('images/balloon.webp') }}" class="rounded tab-img" alt="Original 6">
                    </div>
                    <div id="crash" class="tab-content d-none gap-2">
                        <img src="{{ asset('images/MINES.avif') }}" class="rounded tab-img" alt="Crash 1">
                    </div>
                    <div id="live" class="tab-content d-none gap-2">
                        <img src="{{ asset('images/balloon.webp') }}" class="rounded tab-img" alt="Live 1">
                    </div>
                </div>
            </div>

            <!-- 🔷 In Play -->
            <div class="card shadow-sm mb-3">
                <div class="card-header bg-success text-white">⏵In Play</div>
                <div class="card-body p-0">
                    <table class="table text-center mb-0 align-middle odds-table">
                        <thead class="table-light">
                            <tr>
                                <th class="text-start" style="width: 40%">🏏 Cricket</th>
                                <th style="width: 20%">1</th>
                                <th style="width: 20%">X</th>
                                <th style="width: 20%">2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Cricket -->
                                <td class="text-start px-3">
                                    <div class="match-layout">
                                        <!-- Left Side: Date & Time -->
                                        <span class="match-status today">Today<br><small>6:00 PM</small></span>

                                        <!-- Right Side: Teams -->
                                        <div class="right-side">
                                            <div>India</div>
                                            <div>China</div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <a class="odd-btn">2.32<br><small>—</small></a>
                                </td>

                                <td>
                                    <a class="odd-btn">1.72<br><small>—</small></a>
                                </td>

                                <td>
                                    <a class="odd-btn">0<br><small>—</small></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 🔶 Game Providers -->
            <div class="card shadow-sm mb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="fw-bold">🎲Game Providers</span>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-outline-success btn-sm rounded-circle providers_scroll"
                            data-scroll="-300">&lt;</a>
                        <a href="javascript:void(0);" class="btn btn-outline-success btn-sm rounded-circle providers_scroll"
                            data-scroll="300">&gt;</a>
                    </div>
                </div>
                <div class="card-body overflow-hidden">
                    <div class="providers_slider d-flex flex-nowrap overflow-auto gap-3">
                        <div class="flex flex-row flex-shrink-0" style="min-width:100%;">
                            <div class="col-4 d-flex flex-column gap-2">
                                <div class="card-slide"><img src="{{ asset('images/ezugi.svg') }}" class="provider-img"
                                        alt="Ezugi"></div>
                                <div class="card-slide"><img src="{{ asset('images/evolution.svg') }}" class="provider-img"
                                        alt="Evolution"></div>
                                <div class="card-slide"><img src="{{ asset('images/jilli.svg') }}" class="provider-img"
                                        alt="Jilli"></div>
                            </div>
                            <div class="col-4 d-flex flex-column gap-2">
                                <div class="card-slide"><img src="{{ asset('images/ONLYPLAY.png') }}"
                                        class="provider-img" alt="OnlyPlay"></div>
                                <div class="card-slide"><img src="{{ asset('images/spribe.svg') }}" class="provider-img"
                                        alt="Spribe"></div>
                                <div class="card-slide"><img src="{{ asset('images/Supernova.png') }}"
                                        class="provider-img" alt="Supernova"></div>
                            </div>
                            <div class="col-4 d-flex flex-column gap-2">
                                <div class="card-slide"><img src="{{ asset('images/royal-gaming.png') }}"
                                        class="provider-img" alt="Royal Gaming"></div>
                                <div class="card-slide"><img src="{{ asset('images/hungry-bear.svg') }}"
                                        class="provider-img" alt="Hungry Bear"></div>
                                <div class="card-slide"><img src="{{ asset('images/habanero.svg') }}"
                                        class="provider-img" alt="Habanero"></div>
                            </div>
                            <div class="col-4 d-flex flex-column gap-2">
                                <div class="card-slide"><img src="{{ asset('images/ezugi.svg') }}" class="provider-img"
                                        alt="Ezugi"></div>
                                <div class="card-slide"><img src="{{ asset('images/evolution.svg') }}"
                                        class="provider-img" alt="Evolution"></div>
                                <div class="card-slide"><img src="{{ asset('images/jilli.svg') }}" class="provider-img"
                                        alt="Jilli"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 🔷 Indian Card Games -->
            <div class="card shadow-sm mb-2">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="fw-bold">🃏Indian Card Games</span>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-outline-success btn-sm rounded-circle cards_scroll"
                            data-scroll="-300">&lt;</a>
                        <a href="javascript:void(0);" class="btn btn-outline-success btn-sm rounded-circle cards_scroll"
                            data-scroll="300">&gt;</a>
                    </div>
                </div>
                <div class="card-body overflow-hidden">
                    <div class="cards_slider d-flex flex-nowrap overflow-auto gap-3">
                        <!-- Slide 1 -->
                        <div class="row flex-shrink-0" style="min-width:100%;">
                            <div class="col-4 d-flex flex-column gap-1">
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-02.avif') }}"
                                        class="card-game-img" alt="Card Game 1"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-22.avif') }}"
                                        class="card-game-img" alt="Card Game 2"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-26.avif') }}"
                                        class="card-game-img" alt="Card Game 3"></div>
                            </div>
                            <div class="col-4 d-flex flex-column gap-1">
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-02.avif') }}"
                                        class="card-game-img" alt="Card Game 4"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-22.avif') }}"
                                        class="card-game-img" alt="Card Game 5"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-26.avif') }}"
                                        class="card-game-img" alt="Card Game 6"></div>
                            </div>
                            <div class="col-4 d-flex flex-column gap-1">
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-02.avif') }}"
                                        class="card-game-img" alt="Card Game 7"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-22.avif') }}"
                                        class="card-game-img" alt="Card Game 8"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-26.avif') }}"
                                        class="card-game-img" alt="Card Game 9"></div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="row flex-shrink-0" style="min-width:100%;">
                            <div class="col-4 d-flex flex-column gap-1">
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-02.avif') }}"
                                        class="card-game-img" alt="Card Game 10"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-22.avif') }}"
                                        class="card-game-img" alt="Card Game 11"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-26.avif') }}"
                                        class="card-game-img" alt="Card Game 12"></div>
                            </div>
                            <div class="col-4 d-flex flex-column gap-1">
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-02.avif') }}"
                                        class="card-game-img" alt="Card Game 13"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-22.avif') }}"
                                        class="card-game-img" alt="Card Game 14"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-26.avif') }}"
                                        class="card-game-img" alt="Card Game 15"></div>
                            </div>
                            <div class="col-4 d-flex flex-column gap-1">
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-02.avif') }}"
                                        class="card-game-img" alt="Card Game 16"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-22.avif') }}"
                                        class="card-game-img" alt="Card Game 17"></div>
                                <div class="card-slide"><img src="{{ asset('images/indian games posters-26.avif') }}"
                                        class="card-game-img" alt="Card Game 18"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Tab switching
        document.querySelectorAll(".btn-tab").forEach(btn => {
            btn.addEventListener("click", () => {
                document.querySelectorAll(".btn-tab").forEach(b => b.classList.remove("active"));
                btn.classList.add("active");

                document.querySelectorAll(".tab-content").forEach(c => c.classList.add("d-none"));
                document.getElementById(btn.dataset.tab).classList.remove("d-none");
            });
        });

        // Horizontal scroll buttons for game tabs
        document.querySelectorAll(".games_scroll").forEach(btn => {
            btn.addEventListener("click", () => {
                const container = document.querySelector(".all_games");
                const scrollAmount = parseInt(btn.dataset.scroll);
                container.scrollBy({
                    left: scrollAmount,
                    behavior: "smooth"
                });
            });
        });

        // Horizontal scroll buttons for sliders
        function initScrollSlider(containerSelector, buttonSelector) {
            const container = document.querySelector(containerSelector);
            document.querySelectorAll(buttonSelector).forEach(btn => {
                btn.addEventListener("click", () => {
                    const scrollValue = parseInt(btn.dataset.scroll);
                    container.scrollBy({
                        left: scrollValue,
                        behavior: "smooth"
                    });
                });
            });
        }

        initScrollSlider(".providers_slider", ".providers_scroll");
        initScrollSlider(".cards_slider", ".cards_scroll");
    </script>
@endsection
