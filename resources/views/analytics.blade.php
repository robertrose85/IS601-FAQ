@extends('layouts.app')

@section('content')
    <div>
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
    </div>
    <div>
        <h1>Page Views By Date</h1>
        <table class="table table-striped table-hover table-reflow">
            <tr>
                <th>Date</th>
                <th>Page Title</th>
                <th>Visitors</th>
                <th>Page Views</th>
            </tr>

            @foreach($analytics as $page)
                <tr>
                    <td> {{ $page['date'] }}</td>
                    <td> {{ $page['pageTitle'] }}</td>
                    <td> {{ $page['visitors'] }}</td>
                    <td> {{ $page['pageViews'] }}</td>
                </tr>
            @endforeach


    </table>
        <h3> Note: It was too late to do anything about how the layout calls all of it's extended pages "Laravel", so I just left it as is.</h3>
    </div>
@stop

