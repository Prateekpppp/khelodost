@extends('sports_master')

@section('sports_body')
<!-- Breadcrumb Navigation -->
<main class="layout-content-center p-3">
<div class="breadcrumb-nav fw-bold">
  <span>🏠</span>
  <span class="breadcrumb-arrow">></span>
  <span>Withdraw</span>
</div>

<!-- Main Withdraw Card -->
<div class="withdraw-card">
  <!-- Available Withdraw Amount Badge -->
  <div class="withdraw-badge">
    Available Withdraw Amount: ₹ 0
  </div>

  <!-- Amount Section -->
  <div class="amount-label">AMOUNT</div>
  
  <div class="input-group amount-input-group">
    <span class="input-group-text">₹</span>
    <input type="number" class="form-control" placeholder="Enter Amount" aria-label="Amount">
    <span class="input-group-text">INR</span>
  </div>

  <!-- Payment Method Section -->
  <div class="payment-method-section">
    <div class="payment-method-title">Select Payment Method</div>
    <div class="payment-method-subtitle">No previous payment methods available.</div>
  </div>

  <!-- Submit Button -->
  <button type="submit" class="submit-btn">Submit</button>
</div>

<!-- Bottom Action Buttons -->
{{-- <div class="bottom-buttons">
  <a href="javascript:void(0)" class="bottom-btn">Show Withdraw History</a>
  <a href="javascript:void(0)" class="bottom-btn">Add Withdraw Method</a>
</div> --}}
</main>
@endsection