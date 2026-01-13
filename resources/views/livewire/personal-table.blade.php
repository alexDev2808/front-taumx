<div class="p-6">
    <div class="mb-4 flex justify-between items-center">
        <h2 class="text-2xl font-bold">Personal Data</h2>
        <button
            wire:click="refresh"
            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
            wire:loading.attr="disabled">
            <span wire:loading.remove>Refresh</span>
            <span wire:loading>Loading...</span>
        </button>
    </div>

    @if($loading && empty($data))
        <div class="text-center py-8">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500 mx-auto"></div>
            <p class="mt-4 text-gray-600">Loading data from API...</p>
        </div>
    @elseif($error)
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <strong>Error:</strong> {{ $error }}
        </div>
    @elseif(!empty($data))
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 border-b text-left">ID</th>
                        <th class="px-6 py-3 border-b text-left">Name</th>
                        <th class="px-6 py-3 border-b text-left">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $index => $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 border-b">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 border-b">
                                @if(is_array($item))
                                    {{ $item['name']['common'] ?? $item['name'] ?? 'N/A' }}
                                @elseif(is_object($item))
                                    {{ $item->name->common ?? $item->name ?? 'N/A' }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-6 py-4 border-b">
                                <pre class="text-xs overflow-auto max-h-32">{{ json_encode($item, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4 text-gray-600">
            Total records: {{ count($data) }}
        </div>
    @else
        <div class="text-center py-8 text-gray-500">
            No data available
        </div>
    @endif
</div>
