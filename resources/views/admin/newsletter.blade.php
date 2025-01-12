<x-layout>
    <main class="flex-1 overflow-y-auto p-8">
        <div class="grid grid-cols-1 gap-8">
            <div class="grid grid-cols-1 gap-8">
                <section class="bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-6 border-b">
                        <h3 class="text-lg font-medium text-gray-900">Newsletter Management</h3>

                        <a href="/admin/newsletter/create">
                            <button class="!rounded-button px-4 py-2 bg-custom text-white hover:bg-custom-600">
                                <i class="fas fa-plus mr-2"></i>Add New Newsletter</button>
                        </a>

                    </div>
                    <div class="p-6">

                        <div class="overflow-x-auto">
                            <div class="container mx-auto mt-8">
                                <h1 class="text-2xl font-bold mb-4">Newsletters</h1>

                                @if (session('success'))
                                    <div class="mb-4 text-green-600">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Newsletter Title</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Category</th>

                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Send Date</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Opens</th>
                                            <th
                                                class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($newsletters as $newsletter)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <img src="https://creatie.ai/ai/api/search-image?query=professional headshot&width=40&height=40"
                                                            class="h-10 w-10 rounded-full" />
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $newsletter->title }}</div>
                                                            <div class="text-sm text-gray-500">
                                                                {{ $newsletter->description ?? 'N/A' }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                        {{ $newsletter->category_id ?? 'Uncategorized' }}
                                                    </span>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ $newsletter->send_date ? $newsletter->send_date->format('M d, Y') : 'N/A' }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $newsletter->opens }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    {{-- <a href="{{ route('newsletters.edit', $newsletter->id) }}"
                                                                    class="text-blue-600 hover:text-blue-900 mr-3">Edit</a> --}}
                                                    <form action="{{ route('newsletters.destroy', $newsletter->id) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-red-600 hover:text-red-900">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                @if ($newsletters->isEmpty())
                                    <p class="text-gray-500 mt-4">No newsletters available.</p>
                                @endif
                            </div>
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-sm text-gray-700">Showing 1 to 2 of 12 results</div>
                            <div class="flex space-x-2"><button
                                    class="px-3 py-1 border rounded-lg disabled:opacity-50">Previous</button><button
                                    class="px-3 py-1 border rounded-lg bg-custom text-white">1</button><button
                                    class="px-3 py-1 border rounded-lg">2</button><button
                                    class="px-3 py-1 border rounded-lg">3</button><button
                                    class="px-3 py-1 border rounded-lg">Next</button></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>


    <script>
        const engagementChart = echarts.init(document.getElementById('engagementChart'));

        const option = {
            animation: false,
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['Newsletter Opens', 'Event Registrations'],
                top: 0
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'Newsletter Opens',
                    type: 'line',
                    data: [4200, 5300, 6500, 5900, 6800, 7200],
                    smooth: true,
                    lineStyle: {
                        color: '#4F46E5'
                    },
                    itemStyle: {
                        color: '#4F46E5'
                    }
                },
                {
                    name: 'Event Registrations',
                    type: 'line',
                    data: [3200, 4300, 4800, 5100, 5600, 6000],
                    smooth: true,
                    lineStyle: {
                        color: '#10B981'
                    },
                    itemStyle: {
                        color: '#10B981'
                    }
                }
            ]
        };

        engagementChart.setOption(option);

        window.addEventListener('resize', function() {
            engagementChart.resize();
        });
    </script>
</x-layout>
