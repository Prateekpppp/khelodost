@extends('sports_master')

@section('sports_body')
<main class="layout-content-center p-3">
    <div class="card shadow-sm mb-4">
        <div class="card-body p-0">
            <table class="table text-center mb-0 align-middle odds-table">
                <thead class="table-light">
                    <tr>
                        <th class="text-start fw-bold" style="width: 40%">🏏 Cricket</th>
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
</main>
@endsection
