<x-app-layout>
    <header class="bg-white shadow container">
        <x-slot name="header">
            <h2>
                {{ __('Application Forms') }}
            </h2>
        </x-slot>
    </header>
    <div class="mx-auto sm:px-6 lg:px-8 max-w-7xl py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex flex-row flex-wrap">
                <div class="basis-full p-2">
                    <div class="text-2xl my-3">Applications</div>
                    <div class="my-2 flex justify-center">
                        {{ $rows->links() }}
                    </div>
                    <table class="w-full border border-gray-200 ">
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
                                        <td><a class="text-blue-800"
                                                href="{{ route('admin.view-application', $row->id) }}">{{ $row->application_id }}</a>
                                        </td>
                                        <td>{{ $row->typable_type == 'App\Models\SkilledWorker' ? 'Skilled Worker' : 'Business Immigration' }}
                                        </td>
                                        <td>{{ ucfirst($row->status) }}</td>
                                        <td>{{ \Carbon\Carbon::parse($row->created_at)->toDateString() }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
