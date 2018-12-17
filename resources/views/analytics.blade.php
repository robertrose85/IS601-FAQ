@extends('layouts.app')

@section('content')
    <h1>Page Views By Browser</h1>
    <table class="table table-striped table-hover table-reflow">
        <tr>
            <th>Browser</th>
            <th>Sessions</th>
        </tr>

        @foreach($browser as $arr)
            <tr>
                <td> {{ $arr['browser'] }}</td>
                <td> {{ $arr['sessions'] }}</td>
            </tr>
        @endforeach


    </table>
@stop



