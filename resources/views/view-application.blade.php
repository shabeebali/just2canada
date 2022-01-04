@extends('layout')
@section('content')
    <div class="container">
        @if ($data->typable_type == 'App\Models\SkilledWorker')
            <x-view-skilled-worker-form :afdata="$data" />
        @endif
    </div>
@endsection
