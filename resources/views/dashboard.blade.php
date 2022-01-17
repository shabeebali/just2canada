@extends('layout')
@section('content')
    <header class="bg-white shadow container" class="margin-top:20px;">
        <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h4 class="pull-left">
                {{ __('My Account') }}
            </h4>
            <a href="{{ route('obtain-free-assessment') }}" class="btn pull-right">New
                Application</a>
        </div>
    </header>
    <div class="py-12 container">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-row flex-wrap">
                    <div class="basis-full md:basis-3/4 p-2">
                        <div class="text-lg my-3">Your Applications</div>
                        <table class="table">
                            <thead class="bg-zinc-100 hover:bg-zinc-200">
                                <tr>
                                    <th class="border border-gray-300 py-2">Application ID</th>
                                    <th class="border border-gray-300">Type</th>
                                    <th class="border border-gray-300">Status</th>
                                    <th class="border border-gray-300">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($rows->count() == 0)
                                    <tr>
                                        <td colspan="4" class="p-6 text-xl text-center font-bold">No Data Available</td>
                                    </tr>
                                @else
                                    @foreach ($rows as $row)
                                        <tr>
                                            <td><a
                                                    href="{{ route('view-application', $row->id) }}">{{ $row->application_id }}</a>
                                            </td>
                                            <td>{{ $row->typable_type == 'App\Models\SkilledWorker' ? 'Skilled Worker' : 'Business Immigration' }}
                                            </td>
                                            <td>{{ $row->status }}</td>
                                            <td>{{ \Carbon\Carbon::parse($row->created_at)->toDateString() }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="basis-full md:basis-1/4 px-2">
                        <div class="p-4 text-2xl font-bold">Quick Links</div>
                        <ul class="list-none ml-2 text-xl">
                            <li>
                                <a class="text-blue-700 hover:text-blue-900" href="{{ route('home') }}">Back to Home
                                    page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
