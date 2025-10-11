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
            <table class="table text-center mb-0 align-middle odds-table my-2">
                <thead class="table-light">
                    <tr>
                        <th style="">BookMaker</th>
                        <th style="">Position</th>
                    </tr>
                </thead>
                <tbody class="bookmaker">
                    <tr>
                        <!-- Cricket -->
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div>India</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn">2.32</a>
                            <a class="odd-btn">2.32</a>
                        </td>

                    </tr>
                    <tr>
                        <!-- Cricket -->
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div>South Africa</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn">2.32</a>
                            <a class="odd-btn">2.32</a>
                        </td>

                    </tr>
                </tbody>
            </table>

            <!-- Match Odds -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300">
                <thead class="table-light">
                    <tr>
                        <th style="">Match Odds</th>
                        <th style="">Position</th>
                    </tr>
                </thead>
                <tbody class="match_odds">
                    <tr>
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div>India</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn">2.32</a>
                            <a class="odd-btn">2.32</a>
                        </td>

                    </tr>
                    <tr>
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <div class="right-side">
                                    <div>South Africa</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn">2.32</a>
                            <a class="odd-btn">2.32</a>
                        </td>

                    </tr>
                </tbody>
            </table>

            
            <!-- Line Market -->
            <table class="table text-center mb-0 align-middle odds-table my-4 border-t-2 border-gray-300">
                <thead class="table-light">
                    <tr>
                        <th style="">Line Market</th>
                        <th class="w-22">No</th>
                        <th class="w-22">Yes</th>
                    </tr>
                </thead>
                <tbody class="line_market">
                    <tr>
                        <td class="text-start px-3 flex flex-row items-center justify-between">
                            <div class="match-layout">
                                1st Innings run bhav IND
                            </div>
                            <div class="rounded-[0.4rem] px-2 border-2 !border-gray-300 btn w-16">
                                Bets
                            </div>
                        </td>

                        <td>
                            <a class="odd-btn !w-full">2.32</a>
                        </td>
                        <td>
                            <a class="odd-btn !w-full">2.32</a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection


@section('js')

<script>
    setInterval(() => {
        callApi('get',`{{route('eventData',$eventId)}}`,{},updateEvent);
    }, 500);
</script>

@endsection