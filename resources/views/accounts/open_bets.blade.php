@extends('sports_master')

@section('sports_body')
<style>
  .open-bets-header {
    background-color: #0c9971;
    color: white;
    padding: 12px 20px;
    border-radius: 8px 8px 0 0;
    font-weight: 600;
    font-size: 16px;
  }

  .section-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-bottom: 15px;
    overflow: hidden;
  }

  .section-label {
    background-color: #f8f9fa;
    padding: 8px 15px;
    font-size: 14px;
    font-weight: 500;
    color: #666;
    border-bottom: 1px solid #e9ecef;
  }

  .table-header {
    background-color: white;
    border-bottom: 2px solid #e9ecef;
  }

  .table-header th {
    padding: 12px 8px;
    font-size: 13px;
    font-weight: 600;
    color: #333;
    text-align: left;
    border-right: 1px solid #e9ecef;
  }

  .no-data {
    text-align: center;
    padding: 60px 20px;
    color: #999;
  }

  .no-data-icon {
    width: 48px;
    height: 48px;
    margin: 0 auto 15px;
    border: 2px solid #ddd;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #ddd;
  }

  .table-responsive {
    overflow-x: auto;
  }

  .table-responsive table {
    min-width: 700px;
    width: 100%;
    border-collapse: collapse;
  }
</style>

<main class="layout-content-center p-3">
  <!-- Open Bets Section -->
  <div class="section-card">
    <div class="open-bets-header">Open Bets</div>
    
    <div class="section-label">Match Odds</div>
    
    <div class="table-responsive">
      <table>
        <thead class="table-header">
          <tr>
            <th>Event Name</th>
            <th>Market Type</th>
            <th>Selection</th>
            <th>Bet Type</th>
            <th>Stack</th>
            <th>Round ID</th>
            <th>Place Time</th>
          </tr>
        </thead>
      </table>
      
      <div class="no-data">
        <div class="no-data-icon">📄</div>
        <div>No data</div>
      </div>
    </div>
  </div>

  <!-- Session Section -->
  <div class="section-card">
    <div class="section-label">Session</div>
    
    <div class="table-responsive">
      <table>
        <thead class="table-header">
          <tr>
            <th>Event Name</th>
            <th>Market Type</th>
            <th>Selection</th>
            <th>Bet Type</th>
            <th>Stack</th>
            <th>Round ID</th>
            <th>Place Time</th>
          </tr>
        </thead>
      </table>
      
      <div class="no-data">
        <div class="no-data-icon">📄</div>
        <div>No data</div>
      </div>
    </div>
  </div>
</main>
@endsection