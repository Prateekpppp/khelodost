@extends('sports_master')

@section('sports_body')
<main class="layout-content-center p-3">
    <div class="card shadow-sm mb-4">
        <div class="card-body p-0">
            <div class="text-center">
                <h4 class="my-1 border-b-2 border-gray-300">India Vs South Africa</h4>
                <div class="flex flex-row justify-evenly items-center my-1 border-b-2 border-gray-300">
                    <h5>Live</h5>
                    <h5>Scorecard</h5>
                </div>
                <div class="flex flex-row justify-evenly items-center my-1 border-b-2 border-gray-300">
                    <h5>Market Start Time</h5>
                    <h5>10 Oct 2025</h5>
                </div>
            </div>

            <!-- Bookmaker -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300">
                <thead class="table-light">
                    <tr>
                        <th style="">Bookmaker</th>
                        <th style="">Back</th>
                        <th style="">Lay</th>
                    </tr>
                </thead>
                <tbody class="bookmaker">
                    <tr class="m_row0">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat0">India</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="!bg-pink-300 odd-btn lay1">--</a>
                            <a class="!bg-pink-300 odd-btn lay2">--</a>
                            <a class="!bg-pink-300 odd-btn lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row1">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat1">India</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="!bg-pink-300 odd-btn lay1">--</a>
                            <a class="!bg-pink-300 odd-btn lay2">--</a>
                            <a class="!bg-pink-300 odd-btn lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row2">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat2">India</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="!bg-pink-300 odd-btn lay1">--</a>
                            <a class="!bg-pink-300 odd-btn lay2">--</a>
                            <a class="!bg-pink-300 odd-btn lay3">--</a>
                        </td>

                    </tr>
                </tbody>
            </table>

            <!-- Match Odds -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300">
                <thead class="table-light">
                    <tr>
                        <th style="">Match Odds</th>
                        <th style="">Back</th>
                        <th style="">Lay</th>
                    </tr>
                </thead>
                <tbody class="match_odds">
                    <tr class="m_row0">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat0">India</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="!bg-pink-300 odd-btn lay1">--</a>
                            <a class="!bg-pink-300 odd-btn lay2">--</a>
                            <a class="!bg-pink-300 odd-btn lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row1">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat1">India</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="!bg-pink-300 odd-btn lay1">--</a>
                            <a class="!bg-pink-300 odd-btn lay2">--</a>
                            <a class="!bg-pink-300 odd-btn lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row2">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat2">India</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="!bg-pink-300 odd-btn lay1">--</a>
                            <a class="!bg-pink-300 odd-btn lay2">--</a>
                            <a class="!bg-pink-300 odd-btn lay3">--</a>
                        </td>

                    </tr>
                </tbody>
            </table>

            
            <!-- Line Market -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300">
                <thead class="table-light">
                    <tr>
                        <th style="">Line Market</th>
                        <th style="">Back</th>
                        <th style="">Lay</th>
                    </tr>
                </thead>
                <tbody class="linemarket">
                    
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection


@section('js')

<script>
    // setInterval(() => {
        callApi('get',`{{route('user.eventData')}}`,{eventId:{{$eventId}}},updateEvent);
    // }, 500);
</script>

@endsection