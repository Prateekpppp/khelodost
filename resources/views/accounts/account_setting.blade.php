@extends('sports_master')

@section('sports_body')
<main class="layout-content-center p-3">

    <!-- Edit Stack Card -->
    <div class="card deposit-card border-0 rounded-3 p-4 shadow-sm">
        
        <!-- Title -->
        <div class="mb-4">
            <h5 class="bg-success text-white px-3 py-2 m-0">Edit Stack</h5>
        </div>

        <!-- Amount Input -->
        <div class="input-group mb-2">
            <span class="input-group-text bg-light border-end-0">₹</span>
            <input type="number" id="amount" class="form-control border-start-0 border-end-0" 
                   placeholder="Enter Amount" min="100" max="500000">
            <span class="input-group-text bg-light border-start-0">INR</span>
        </div>
        <small class="text-muted d-block mb-3">Min 100 - Max 5,00,000</small>

        <!-- Quick Amount Buttons -->
        <div class="row g-2 mb-4">
            @foreach ([500, 1000, 2000, 5000, 10000, 15000] as $amount)
                <div class="col-4">
                    <button type="button" 
                            class="btn btn-outline-success w-100 fw-semibold rounded-2"
                            onclick="setAmount({{ $amount }})">
                        +{{ number_format($amount) }}
                    </button>
                </div>
            @endforeach
        </div>

        <!-- Submit Button -->
        <div class="text-end">
            <a href="javascript:void(0)" class="btn btn-success fw-semibold px-4 rounded-2">
                Submit
            </a>
        </div>
    </div>

    <!-- Spacer / Divider -->
    <hr class="my-5">

    <!-- Add/Edit Payment Card -->
    <div class="card deposit-card border-0 rounded-3 p-4 shadow-sm">
        
        <!-- Title -->
        <div class="mb-4">
            <h5 class="bg-success text-white px-3 py-2 m-0">Add / Edit Payment</h5>
        </div>

        <!-- Account No. -->
        <div class="mb-3">
            <label for="account_no" class="form-label fw-semibold">Account No.</label>
            <input type="text" id="account_no" class="form-control" placeholder="Enter Account Number">
        </div>

        <!-- Account Holder Name -->
        <div class="mb-3">
            <label for="account_holder" class="form-label fw-semibold">Account Holder Name</label>
            <input type="text" id="account_holder" class="form-control" placeholder="Enter Account Holder Name">
        </div>

        <!-- IFSC Code -->
        <div class="mb-3">
            <label for="ifsc_code" class="form-label fw-semibold">IFSC Code</label>
            <input type="text" id="ifsc_code" class="form-control" placeholder="Enter IFSC Code">
        </div>

        <!-- Bank Name -->
        <div class="mb-4">
            <label for="bank_name" class="form-label fw-semibold">Bank Name</label>
            <input type="text" id="bank_name" class="form-control" placeholder="Enter Bank Name">
        </div>

        <!-- Save Button -->
        <div class="text-end">
            <a href="javascript:void(0)" class="btn btn-success fw-semibold px-4 rounded-2">
                Save
            </a>
        </div>
    </div>

</main>

<!-- Script to Set Amount -->
<script>
    function setAmount(value) {
        document.getElementById('amount').value = value;
    }
</script>
@endsection
