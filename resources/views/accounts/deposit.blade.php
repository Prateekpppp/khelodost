@extends('sports_master')

@section('sports_body')
    <main class="layout-content-center p-3 account-deposit">
        <!-- Current Balance -->
        <div class="breadcrumb-nav fw-bold">
            <span>🏠</span>
            <span class="breadcrumb-arrow">></span>
            <span>Deposit</span>
        </div>

        <!-- Deposit Card -->
        <div class="card deposit-card border-0 rounded-3 p-4">
            <span class="badge bg-success p-2 px-3 rounded-pill shadow-sm">
                Current Available Balance: ₹ 0
            </span>

            <!-- Amount Section -->
            <label class="form-label fw-bold">AMOUNT</label>
            <div class="input-group mb-2">
                <span class="input-group-text bg-light border-end-0">₹</span>
                <input type="number" class="form-control border-start-0 border-end-0" placeholder="Enter Amount"
                    min="100" max="500000">
                <span class="input-group-text bg-light border-start-0">INR</span>
            </div>
            <small class="text-muted d-block mb-3">Min 100 - Max 5,00,000</small>

            <!-- Quick Amount Links -->
            <div class="row g-2 mb-4">
                @foreach ([500, 1000, 2000, 5000, 10000, 15000] as $amount)
                    <div class="col-4">
                        <a href="javascript:void(0)"
                            class="btn btn-success w-100 fw-semibold rounded-2">+{{ $amount }}</a>
                    </div>
                @endforeach
            </div>

            <!-- Submit Button -->
            <div class="text-end">
                <a href="javascript:void(0)" class="btn btn-success fw-semibold px-4 rounded-2">Submit</a>
            </div>
        </div>
    </main>
@endsection
