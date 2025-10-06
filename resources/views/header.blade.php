<!-- Header -->
<nav class="bg-primary-green navbar px-1 py-3">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-nowrap position-relative">
        <!-- Toggle Button (Visible only on small screens) -->
        <button class="d-md-none custom-toggler position-absolute start-0 top-50 translate-middle-y ms-3" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <span class="toggler-icon"></span>
        </button>

        <!-- Logo -->
        <a href="{{ route('index') }}" class="navbar-brand p-0 flex-shrink-0 ms-5">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40"
                style="max-width: 150px; height: auto;" />
        </a>

        <!-- Search + Date/Time -->
        <div class="d-none d-md-flex align-items-center flex-grow-1 mx-3" style="max-width: 500px; min-width: 0;">
            <div class="flex-grow-1">
                <input type="text" class="form-control form-control-sm border-0 rounded-pill"
                    placeholder="Search Events (At least 3 letters)...">
            </div>
            <div class="ms-3 text-white text-nowrap">
                <small id="currentDate" style="font-size: 11px;"></small><br>
                <span id="clock" class="fw-bold" style="font-size: 13px;">--:--:--</span>
            </div>
        </div>

        <!-- Buttons -->
        <div class="d-flex align-items-center gap-2 ms-auto flex-shrink-0" id="headerButtons">
            <a href="{{ route('login') }}"
                class="btn btn-outline-light btn-sm rounded-pill px-2 px-sm-3 py-1 text-nowrap">Log In</a>
            <a href="{{ route('signin') }}" class="btn btn-light btn-sm rounded-pill px-2 px-sm-3 py-1 text-nowrap">Sign
                Up</a>
        </div>
    </div>
</nav>

<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <!-- Sports -->
        <div class="mb-4 px-3 pt-3">
            <h6 class="text-uppercase text-muted small mb-3">Sports</h6>
            <a href="{{ route('cricket') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">🏏
                Cricket</a>
            <a href="{{ route('football') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">⚽
                Football</a>
            <a href="{{ route('tennis') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">🎾
                Tennis</a>
        </div>

        <!-- Casino -->
        <div class="px-3 pb-3">
            <h6 class="text-uppercase text-muted small mb-3">Casino</h6>
            <a href="{{ route('indian_card_games') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">🃏 Indian
                Card Games</a>
            <a href="{{ route('casino') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">🎰
                Casino</a>
            <a href="{{ route('1X2_gaming') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">🎮 1X2
                Gaming</a>
            <a href="{{ route('ezugi') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">♟️
                Ezugi</a>
            <a href="{{ route('supernova') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">🌟
                Supernova</a>
            <a href="{{ route('slot_casino') }}"
                class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">🎲 Slot
                Casino</a>
            <a href="#" class="d-block text-dark text-decoration-none mb-2 py-1 rounded hover-bg-light px-2">🏆
                Sportsbook (80+)</a>
        </div>
    </div>
</div>

<!-- Account Panel Offcanvas -->
<div class="offcanvas offcanvas-end account-offcanvas" tabindex="-1" id="accountPanel">
    <div class="offcanvas-header bg-light text-dark d-flex justify-content-between align-items-center">
        <span class="fs-5 fw-semibold d-flex align-items-center gap-2">📧 demo_playcrick99</span>
        <a type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"></a>
    </div>

    <div class="offcanvas-body bg-light p-1 d-flex flex-column">
        <!-- Balance Information -->
        <div class="balance-section bg-white rounded p-3 shadow-sm mb-4">
            <div class="balance-title fw-bold text-secondary fs-6 mb-3 d-flex align-items-center gap-2">
                💳 Balance Information
            </div>

            <div class="mb-3">
                <div class="text-muted small fw-semibold">BALANCE</div>
                <div class="balance-amount fs-6 fw-bold text-success">₹ 0.00</div>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div>
                    <div class="text-muted small fw-semibold text-uppercase">Free Cash</div>
                    <div class="fs-6 fw-bold">₹ 0.00</div>
                </div>
                <div>
                    <div class="text-muted small fw-semibold text-uppercase">Net Exposure</div>
                    <div class="fs-6 fw-bold">₹ 0.00</div>
                </div>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('deposit') }}" class="btn btn-success flex-fill fw-bold">➕ Deposit</a>
                <a href="{{ route('withdraw') }}" class="btn btn-danger flex-fill fw-bold">➖ Withdraw</a>
            </div>
        </div>

        <!-- Statements Section -->
        <div class="menu-title fw-bold text-secondary fs-6 mt-1 ml-1 mb-2">
            📄 Statements
        </div>

        <div class="ms-3 border-top">
            <a href="{{ route('account_statement') }}" class="d-block py-2 px-3 text-decoration-none text-dark border-bottom">📥 Deposit &
                Withdraw</a>
            <a href="{{ route('open_bets') }}" class="d-block py-2 px-3 text-decoration-none text-dark border-bottom">📊 Open Bets</a>
            <a href="#" class="d-block py-2 px-3 text-decoration-none text-dark border-bottom">🎁 Bonuses</a>
            <a href="{{ route('profit_loss_event') }}" class="d-block py-2 px-3 text-decoration-none text-dark border-bottom">📃 Account
                Statement</a>
        </div>

        <!-- Settings Section -->
        <div class="menu-title fw-bold text-secondary fs-6 ml-1 mt-4 mb-2">
            ⚙️ Account Settings
        </div>

        <div class="ms-3 border-top">
            <a href="{{ route('account_setting') }}" class="d-block py-2 px-3 text-decoration-none text-dark border-bottom">🛠️ Settings</a>
        </div>

        <!-- Account Actions Section -->
        <div class="menu-title fw-bold text-secondary fs-6 ml-1 mt-4 mb-2">
            🔐 Account Actions
        </div>

        <div class="ms-3 border-top">
            <a href="{{ route('change_password') }}" class="d-block py-2 px-3 text-decoration-none text-dark border-bottom">🔑 Change
                Password</a>
            <a href="#" class="d-block py-2 px-3 text-decoration-none text-dark border-bottom"
                onclick="signOut()">🚪 Sign Out</a>
        </div>

    </div>
</div>

<script>
    // Check localStorage on page load
    window.addEventListener('load', function() {
        if (localStorage.getItem('demo_login') === 'true') {
            document.getElementById('headerButtons').innerHTML =
                '<button class="btn btn-outline-light btn-sm rounded-pill px-2 px-sm-3 py-1 text-nowrap" data-bs-toggle="offcanvas" data-bs-target="#accountPanel">Account</button>';
        }
    });

    // Sign out function
    function signOut() {
        localStorage.removeItem('demo_login');
        location.reload();
    }

    // Logout function
    function logout() {
        localStorage.removeItem('demo_login');
        location.reload();
    }

    function startClock() {
        setInterval(() => {
            let now = new Date();
            let ist = new Date(now.getTime() + 5.5 * 60 * 60 * 1000);
            const dateEl = document.getElementById("currentDate");
            const timeEl = document.getElementById("clock");
            if (dateEl && timeEl) {
                dateEl.textContent = ist.toLocaleDateString('en-US', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                }) + " (GMT +5:30)";
                timeEl.textContent = ist.toLocaleTimeString('en-GB');
            }
        }, 1000);
    }
    startClock();

    // Toggle button animation
    document.addEventListener('DOMContentLoaded', function() {
        const toggler = document.querySelector('.custom-toggler');
        const offcanvas = document.getElementById('mobileMenu');

        if (toggler && offcanvas) {
            toggler.addEventListener('click', function() {
                this.classList.toggle('active');
            });

            offcanvas.addEventListener('hidden.bs.offcanvas', function() {
                toggler.classList.remove('active');
            });
        }
    });
</script>