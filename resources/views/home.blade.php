@extends('layouts.main')
@section('content')
    @php
        $hour = date('H');
        $greetings = $hour >= 18 ? 'Night' : ($hour >= 12 ? 'Afternoon' : 'Morning');
    @endphp
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Good {{ $greetings }} !</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
