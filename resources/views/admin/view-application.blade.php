<x-app-layout>
    <header class="bg-white shadow container">
        <x-slot name="header">
            <div></div>
            <div class="status-form">
                <form action="{{ route('admin.change-status', $data->id) }}" method="POST">
                    @csrf
                    <select name="status" id="status">
                        <option @if ($data->status == 'pending') selected @endif value="pending">Pending</option>
                        <option @if ($data->status == 'on review') selected @endif value="on review">On review</option>
                        <option @if ($data->status == 'closed') selected @endif value="closed">Closed</option>
                    </select>
                    <button type="submit"
                        class="bg-blue-900 text-white rounded shadow-sm px-4 py-2 hover:shadow-lg">Change
                        Status</button>
                </form>
            </div>
        </x-slot>
    </header>
    @if ($data->typable_type == 'App\Models\SkilledWorker')
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100 mt-6">
            <div class="mx-auto sm:px-6 lg:px-8 max-w-7xl py-6 bg-white rounded">
                <x-view-skilled-worker-form :afdata="$data" />
            </div>
        </div>
    @endif
</x-app-layout>
