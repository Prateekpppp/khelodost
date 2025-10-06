<style>
  .sidebar-link {
    display: block;
    padding: 0.6rem 0;
    font-size: 0.95rem;
    font-weight: 600;
    margin-left: 20px;
    color: #212529;
    text-decoration: none;
    border-radius: 0.375rem;
  }

  .sidebar-link:hover {
    background-color: #f8f9fa;
  }

  .aviator-link {
    display: block;
    padding: 0.5rem 0;
    font-size: 1.1rem;
    font-weight: bold;
    color: #212529;
    text-decoration: none;
  }

  .aviator-link:hover {
    background-color: #f8f9fa;
    border-radius: 0.375rem;
  }

  .sidebar-title {
    text-transform: uppercase;
    font-size: 0.75rem;
    font-weight: 600;
    color: #6c757d;
    margin-bottom: 0.75rem;
  }

  .sidebar-divider {
    height: 1px;
    background-color: #dee2e6;
    margin: 0rem -0.70rem;
  }

  .sidebar-section {
    margin-bottom: 1.5rem;
  }

  .sidebar-section:last-child {
    margin-bottom: 0;
  }
</style>


<!-- Left Sidebar -->
<div class="layout-sidebar-left layout-section">
  <div class="card shadow-sm rounded-3 d-none d-lg-block">
    <div class="card-body">

      <!-- Aviator -->
      <div class="sidebar-section">
        <a href="#" class="aviator-link">🚀 Aviator</a>
        <div class="sidebar-divider"></div>
      </div>

      <!-- Sports Section -->
      <div class="sidebar-section">
        <div class="sidebar-title">Sports</div>
        <a href="{{ route('cricket') }}" class="sidebar-link">🏏 Cricket</a>
        <a href="{{ route('football') }}" class="sidebar-link">⚽ Football</a>
        <a href="{{ route('tennis') }}" class="sidebar-link">🎾 Tennis</a>
        <div class="sidebar-divider"></div>
      </div>

      <!-- Casino Section -->
      <div class="sidebar-section">
        <div class="sidebar-title">Casino</div>
        <a href="{{ route('indian_card_games') }}" class="sidebar-link">♠️ Indian Card Games</a>
        <a href="{{ route('casino') }}" class="sidebar-link">🎰 Casino</a>
        <a href="{{ route('1X2_gaming') }}" class="sidebar-link">🕹️ 1X2 Gaming</a>
        <a href="{{ route('ezugi') }}" class="sidebar-link">🎲 Ezugi</a>
        <a href="{{ route('supernova') }}" class="sidebar-link">✨ Supernova</a>
        <a href="{{ route('slot_casino') }}" class="sidebar-link">🎰 Slot Casino</a>
        <div class="sidebar-divider"></div>
        <a href="#" class="sidebar-link">🏆 Sportsbook (80+)</a>
      </div>

    </div>
  </div>
</div>
