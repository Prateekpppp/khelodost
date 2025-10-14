@extends('sports_master')

@section('sports_body')
<main class="layout-content-center p-3">
    
            <!-- 🔷 Banner Image Card -->
            <div class="mb-2">
                <div class="rounded-4 text-center flex flex-row max-w-full overflow-hidden app_scroller">
                    <a href="{{ route('index') }}" class="min-w-full">
                        <img src="{{ asset('banners/banner1.png') }}" class="img-fluid" alt="Banner">
                    </a>
                    <a href="{{ route('index') }}" class="min-w-full">
                        <img src="{{ asset('banners/banner2.png') }}" class="img-fluid" alt="Banner">
                    </a>
                    <a href="{{ route('index') }}" class="min-w-full">
                        <img src="{{ asset('banners/banner3.png') }}" class="img-fluid" alt="Banner">
                    </a>
                    <a href="{{ route('index') }}" class="min-w-full">
                        <img src="{{ asset('banners/banner4.png') }}" class="img-fluid" alt="Banner">
                    </a>
                </div>
            </div>
    <div class="shadow-sm mb-4">
        <div class="card-body p-0">
            <div class="text-center">
                <h4 class="my-1 bg-[#0c9971] text-white p-2">India Vs South Africa</h4>
                <div class="flex flex-row justify-evenly items-center my-1">
                    <span>Live</span>
                    <span>Scorecard</span>
                </div>
                <div class="flex flex-row justify-evenly items-center my-1 bg-[#0c9971] text-white p-2">
                    <span>Market Start Time</span>
                    <span>10 Oct 2025</span>
                </div>
            </div>

            <!-- Match Odds -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300" style="display: none;">
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
                                    <div class="match_nat0">--</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="odd-btn lay lay1">--</a>
                            <a class="odd-btn lay lay2">--</a>
                            <a class="odd-btn lay lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row1">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat1">--</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="odd-btn lay lay1">--</a>
                            <a class="odd-btn lay lay2">--</a>
                            <a class="odd-btn lay lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row2">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat2">--</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="odd-btn lay lay1">--</a>
                            <a class="odd-btn lay lay2">--</a>
                            <a class="odd-btn lay lay3">--</a>
                        </td>

                    </tr>
                </tbody>
            </table>

            <!-- Bookmaker -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300" style="display: none;">
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
                                    <div class="match_nat0">--</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="odd-btn lay lay1">--</a>
                            <a class="odd-btn lay lay2">--</a>
                            <a class="odd-btn lay lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row1">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat1">--</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="odd-btn lay lay1">--</a>
                            <a class="odd-btn lay lay2">--</a>
                            <a class="odd-btn lay lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row2">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat2">--</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="odd-btn lay lay1">--</a>
                            <a class="odd-btn lay lay2">--</a>
                            <a class="odd-btn lay lay3">--</a>
                        </td>

                    </tr>
                </tbody>
            </table>

            <!-- Normal-->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300" style="display: none;">
                <thead class="table-light">
                    <tr>
                        <th style="">Normal</th>
                        <th style="">Yes</th>
                        <th style="">No</th>
                    </tr>
                </thead>
                <tbody class="updateNormal">
                    
                </tbody>
            </table>
            
            <!-- Meter-->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300" style="display: none;">
                <thead class="table-light">
                    <tr>
                        <th style="">Meter</th>
                        <th style="">Yes</th>
                        <th style="">No</th>
                    </tr>
                </thead>
                <tbody class="updateMeter">
                    
                </tbody>
            </table>
                        
            <!-- Ball by Ball-->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300" style="display: none;">
                <thead class="table-light">
                    <tr>
                        <th style="">Ball by Ball</th>
                        <th style="">Yes</th>
                        <th style="">No</th>
                    </tr>
                </thead>
                <tbody class="ballbyball">
                    
                </tbody>
            </table>

            <!-- Tied Match -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300" style="display: none;">
                <thead class="table-light">
                    <tr>
                        <th style="">Tied Match</th>
                        <th style="">Back</th>
                        <th style="">Lay</th>
                    </tr>
                </thead>
                <tbody class="tiedmatch">
                    <tr class="m_row0">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat0">--</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="odd-btn lay lay1">--</a>
                            <a class="odd-btn lay lay2">--</a>
                            <a class="odd-btn lay lay3">--</a>
                        </td>

                    </tr>
                    <tr class="m_row1">
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div class="match_nat1">--</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn back3">--</a>
                            <a class="odd-btn back2">--</a>
                            <a class="odd-btn back1">--</a>
                        </td>
                        
                        <td>
                            <a class="odd-btn lay lay1">--</a>
                            <a class="odd-btn lay lay2">--</a>
                            <a class="odd-btn lay lay3">--</a>
                        </td>

                    </tr>
                </tbody>
            </table>
            
            <!-- Line Market -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300" style="display: none;">
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
            
            <!-- Odd Even -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300" style="display: none;">
                <thead class="table-light">
                    <tr>
                        <th style="">Odd Even</th>
                        <th style="">Back</th>
                        <th style="">Lay</th>
                    </tr>
                </thead>
                <tbody class="oddeven">
                    
                </tbody>
            </table>
            
        </div>
    </div>
</main>
@endsection


@section('js')

<script>
    setInterval(() => {
        callApi('get',`{{route('user.eventData')}}`,{eventId:{{$eventId}}},updateEvent);
    }, 500);
</script>

@endsection