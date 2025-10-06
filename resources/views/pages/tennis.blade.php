@extends('sports_master')

@section('sports_body')
<main class="container py-3">
    <div class="card shadow-sm mb-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table text-center mb-0 align-middle odds-table">
                    <thead class="table-light">
                        <tr>
                            <th class="text-start fw-bold" style="min-width: 200px;">🎾 Tennis</th>
                            <th style="width: 20%">1</th>
                            <th style="width: 20%">X</th>
                            <th style="width: 20%">2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="text-start px-3">
                                <div class="match-layout">
                                    <span class="match-status today">Today<br><small>3:00 PM</small></span>
                                    <div class="right-side">
                                        <div>India</div>
                                        <div>Australia</div>
                                    </div>
                                </div>
                            </td>
                            <td><a class="odd-btn">1.85<br><small>—</small></a></td>
                            <td><a class="odd-btn">3.20<br><small>—</small></a></td>
                            <td><a class="odd-btn">2.10<br><small>—</small></a></td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td class="text-start px-3">
                                <div class="match-layout">
                                    <span class="match-status today">Today<br><small>5:30 PM</small></span>
                                    <div class="right-side">
                                        <div>USA</div>
                                        <div>France</div>
                                    </div>
                                </div>
                            </td>
                            <td><a class="odd-btn">2.00<br><small>—</small></a></td>
                            <td><a class="odd-btn">3.50<br><small>—</small></a></td>
                            <td><a class="odd-btn">1.90<br><small>—</small></a></td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td class="text-start px-3">
                                <div class="match-layout">
                                    <span class="match-status today">Today<br><small>5:30 PM</small></span>
                                    <div class="right-side">
                                        <div>Spain</div>
                                        <div>Germany</div>
                                    </div>
                                </div>
                            </td>
                            <td><a class="odd-btn">1.70<br><small>—</small></a></td>
                            <td><a class="odd-btn">3.00<br><small>—</small></a></td>
                            <td><a class="odd-btn">2.30<br><small>—</small></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
