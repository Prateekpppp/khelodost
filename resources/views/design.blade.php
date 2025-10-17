@extends('sports_master')

@section('sports_body')
<main class="layout-content-center p-3">
    <div class="card shadow-sm mb-4">
        <div class="card-body p-0 flex flex-col overflow-x-scroll w-100">
            <div class="div text-center mb-0 align-middle odds-div">
                <div class="table_head">
                    <div class="fw-bold" style="width: 50%">🏏 Cricket</div>
                    <div style="">1</div>
                    <div style="">X</div>
                    <div style="">2</div>
                </div>
                <div class="cricket">
                    <div data-gameid="794255383" data-marketid="7399277278300" data-eventname="India W v England W" data-eventdate="Oct 19 2025 3:00 PM">
                        <!-- Cricket -->
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <!-- Left Side: Date & Time -->
                                <span class="match-status today">Oct 19 2025 3:00 PM</span>

                                <!-- Right Side: Teams -->
                                <a href="http://sixtynine.sbs/eventPage/794255383" class="right-side eventPage">
                                    India W v England W
                                </a>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn">2.2<br><small>2.2</small></a>
                            <a class="odd-btn">1.78<br><small>1.78</small></a>
                        </td>

                        <td>
                            <a class="odd-btn">0<br><small>0</small></a>
                            <a class="odd-btn lay">2.3<br><small>2.3</small></a>
                        </td>

                        <td>
                            <a class="odd-btn lay">1.83<br><small>1.83</small></a>
                            <a class="odd-btn lay">0<br><small>0</small></a>
                        </td>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

