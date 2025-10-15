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

            <div class="soccerData">

            </div>

        </div>
    </div>
</main>
@endsection


@section('js')
    @include('includes.soccerEvent_js')

<script>
    
    eventId = {{$eventId}};
    setInterval(() => {
        callApi('get',`{{route('user.getEventData')}}`,{eventId:{{$eventId}}},updateSoccerEvent);
    }, 500);
</script>

@endsection