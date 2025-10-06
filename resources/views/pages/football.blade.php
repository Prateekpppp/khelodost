@extends('sports_master')

@section('sports_body')
<main class="layout-content-center p-3">
    <div class="card-body p-0">
        <table class="table text-center mb-0 align-middle odds-table">
            <thead class="table-light">
                <tr>
                    <th class="text-start fw-bold" style="width: 40%">⚽ Football</th>
                    <th style="width: 20%">1</th>
                    <th style="width: 20%">X</th>
                    <th style="width: 20%">2</th>
                </tr>
            </thead>
            <tbody>
                <!-- LIVE Match -->
                <tr>
                    <td class="text-start px-3">
                        <div class="match-layout">
                            <span class="match-status live">LIVE</span>
                            <div class="right-side">
                                <div>Nottinghamshire</div>
                                <div>Warwickshire</div>
                            </div>
                        </div>
                    </td>
                    <td><a class="odd-btn">2.28<br><small>9.98</small></a></td>
                    <td><a class="odd-btn">7.8<br><small>4.27</small></a></td>
                    <td><a class="odd-btn">2.02<br><small>1.00</small></a></td>
                </tr>

                <!-- Today Match -->
                <tr>
                    <td class="text-start px-3">
                        <div class="match-layout">
                            <span class="match-status today">Today<br><small>20:00</small></span>
                            <div class="right-side">
                                <div>Pakistan</div>
                                <div>Bangladesh</div>
                            </div>
                        </div>
                    </td>
                    <td><a class="odd-btn">1.42<br><small>13536.93</small></a></td>
                    <td><a class="odd-btn">3.35<br><small>6.23</small></a></td>
                    <td><a class="odd-btn">0<br><small>0</small></a></td>
                </tr>

                <!-- Tomorrow Match -->
                <tr>
                    <td class="text-start px-3">
                        <div class="match-layout">
                            <span class="match-status tomorrow">Tomorrow<br><small>05:30</small></span>
                            <div class="right-side">
                                <div>Victoria W</div>
                                <div>Australia W</div>
                            </div>
                        </div>
                    </td>
                    <td><a class="odd-btn">2.12<br><small>1.88</small></a></td>
                    <td><a class="odd-btn">0<br><small>0</small></a></td>
                    <td><a class="odd-btn">0<br><small>0</small></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
