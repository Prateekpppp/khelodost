@extends('sports_master')

@section('sports_body')
<style>
  .account-title {
    color: #0c9971;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
  }

  .filter-card {
    background: white;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    margin-bottom: 20px;
  }

  .date-input {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 10px 15px;
    font-size: 14px;
    background: white;
  }

  .btn-submit {
    background-color: #0c9971;
    color: white;
    border: none;
    border-radius: 6px;
    padding: 10px 25px;
    font-weight: 600;
    font-size: 14px;
  }

  .btn-reset {
    background-color: #e9ecef;
    color: #666;
    border: none;
    border-radius: 6px;
    padding: 10px 25px;
    font-weight: 600;
    font-size: 14px;
  }

  .table-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    overflow: hidden;
  }

  .table-responsive {
    overflow-x: auto;
  }

  .table-responsive table {
    min-width: 600px;
    border-collapse: collapse;
  }
  
  .table-body {
    background: white;
  }
  
  .table-body td {
    padding: 15px;
    text-align: center;
    border: 1px solid #ddd;
    font-size: 14px;
  }

  .table-header {
    background-color: #0c9971;
    color: white;
    font-weight: 600;
    font-size: 14px;
  }

  .table-header th {
    padding: 15px;
    text-align: center;
    border: 1px solid rgba(255,255,255,0.2);
  }

  .no-records {
    text-align: center;
    color: #999;
    font-style: italic;
    padding: 40px;
    font-size: 16px;
  }

  .pagination-arrow {
    color: #999;
    font-size: 18px;
    cursor: pointer;
  }
  
  .date-row {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
  }
  
  .date-row .date-input {
    flex: 1;
  }
  
  .button-row {
    display: flex;
    gap: 10px;
  }
  
  .button-row button {
    flex: 1;
  }

  @media (max-width: 768px) {
    .filter-card {
      padding: 20px;
    }
    
    .filter-responsive .d-flex {
      flex-direction: column;
    }
    
    .account-title {
      font-size: 20px;
    }
  }
</style>

<main class="layout-content-center p-3">
  <!-- Page Title -->
  <div class="account-title">Account Statement</div>

  <!-- Filter Section -->
  <div class="filter-card">
    <div class="filter-responsive">
      <div class="date-row">
        <input type="date" class="date-input" value="2025-09-20">
        <input type="date" class="date-input" value="2025-09-27">
      </div>
      <div class="button-row">
        <button class="btn-submit">Submit</button>
        <button class="btn-reset">Reset</button>
      </div>
    </div>
  </div>

  <!-- Table Section -->
  <div class="table-card">
    <div class="table-responsive">
      <table class="w-100">
        <thead class="table-header">
          <tr>
            <th>Date</th>
            <th>Remark</th>
            <th>Deposit</th>
            <th>Withdraw</th>
            <th>From / To</th>
            <th>Balance</th>
          </tr>
        </thead>
        <tbody class="table-body">
          <!-- Data rows will go here -->
          <!-- Sample row for demonstration -->
          <!-- <tr>
            <td>2025-09-20</td>
            <td>Sample Remark</td>
            <td>₹1000</td>
            <td>-</td>
            <td>Online</td>
            <td>₹1000</td>
          </tr> -->
        </tbody>
      </table>
      
      <!-- No Records Message -->
      <div class="no-records">
        No records found
      </div>
    </div>
  </div>
</main>
@endsection