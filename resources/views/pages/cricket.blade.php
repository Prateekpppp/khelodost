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
                <tbody class="sportData">
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection


@section('js')
<script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('sportsupdate');
    channel.bind('sportsupdate-event', function(data) {
        updateSports(data);
    });

  </script>

@endsection