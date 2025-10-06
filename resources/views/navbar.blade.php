<!-- Navbar Wrapper -->
<div class="bg-white py-1 shadow-sm">
    <nav class="nav nav-pills flex-nowrap overflow-auto px-0 small custom-scrollbar"
        style="white-space: nowrap; -webkit-overflow-scrolling: touch; overflow-x: auto;">

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill {{ request()->routeIs('index') ? 'active' : '' }}"
            href="{{ route('index') }}">
            <span class="me-1">🏠</span>Home
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill" href="javascript:void(0)">
            <span class="me-1">🏆</span>Sports
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill {{ request()->routeIs('cricket') ? 'active' : '' }}"
            href="{{ route('cricket') }}">
            <span class="me-1">🏏</span>Cricket
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill {{ request()->routeIs('football') ? 'active' : '' }}"
            href="{{ route('football') }}">
            <span class="me-1">⚽</span>Football
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill {{ request()->routeIs('tennis') ? 'active' : '' }}"
            href="{{ route('tennis') }}">
            <span class="me-1">🎾</span>Tennis
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill" href="javascript:void(0)">
            <span class="me-1">✈️</span>Spribe
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill {{ request()->routeIs('1X2_gaming') ? 'active' : '' }}"
            href="{{ route('1X2_gaming') }}">
            <span class="me-1">🎲</span>1x2 Gaming
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill" href="javascript:void(0)">
            <span class="me-1">♟️</span>Live Casino
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill {{ request()->routeIs('ezugi') ? 'active' : '' }}"
            href="{{ route('ezugi') }}">
            <span class="me-1">🎲</span>Ezugi
        </a>

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill" href="javascript:void(0)">
            <span class="me-1">🎮</span>Slots
        </a>
        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill {{ request()->routeIs('supernova') ? 'active' : '' }}"
            href="{{ route('supernova') }}">
            <span class="me-1">🌟</span>Supernova
        </a>

        {{-- <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill" href="javascript:void(0)">
            <span class="me-1">⏱️</span>Beter live
        </a> --}}

        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill" href="javascript:void(0)">
            <span class="me-1">🚀</span>Crash Games
        </a>
        <a class="nav-link d-inline-flex align-items-center mx-1 px-2 py-1 rounded-pill" href="javascript:void(0)">
            <span class="me-1">🐟</span>Fishing Games
        </a>

    </nav>
</div>

<script>
    document.addEventListener('click', function(e) {
        if (e.target.closest('.nav-link')) {
            document.querySelectorAll('.nav-link').forEach(link =>
                link.classList.remove('active')
            );
            e.target.closest('.nav-link').classList.add('active');
        }
    });
</script>
