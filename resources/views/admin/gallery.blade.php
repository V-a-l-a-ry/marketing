<x-layout>
    <main class="flex-1 overflow-y-auto p-8">
        <div class="grid grid-cols-1 gap-8">
            <div class="grid grid-cols-1 gap-8">
                <section class="bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-6 border-b">
                        <h3 class="text-lg font-medium text-gray-900">Gallery Library</h3> 
                        <a href="/admin/galleries/create">
                            <button class="!rounded-button px-4 py-2 bg-custom text-white hover:bg-custom-600">
                                <i class="fas fa-plus mr-2"></i>Add New Content</button>
                        </a>
                    </div>
                    <div class="p-6">
                       
                        </div>
                        <!-- Gallery Grid -->
                        <div class="overflow-x-auto">
                            <div class="grid grid-cols-4 gap-6">
                                @foreach ($galleries as $gallery)
                                    <div class="relative group">
                                        <!-- Dynamic Image Placeholder -->
                                        <img src="{{ asset('storage/' . $gallery->media_url) }}"
                                            class="w-full h-48 object-cover rounded-lg" alt="{{ $gallery->title }}" />

                                        <!-- Hover Actions -->
                                        <div
                                            class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg flex items-center justify-center space-x-3">
                                            <a href="{{ route('galleries.show', $gallery->id) }}"
                                                class="p-2 bg-white rounded-full text-gray-800 hover:bg-gray-100">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            {{-- <a href="{{ route('galleries.edit', $gallery->id) }}"
                                                class="p-2 bg-white rounded-full text-gray-800 hover:bg-gray-100">
                                                <i class="fas fa-edit"></i>
                                            </a> --}}
                                            <form method="POST"
                                                action="{{ route('galleries.destroy', $gallery->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="p-2 bg-white rounded-full text-red-600 hover:bg-gray-100">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>

                                        <!-- Item Details -->
                                        <div class="mt-2">
                                            <h4 class="font-medium text-gray-900">{{ $gallery->title }}</h4>
                                            <p class="text-sm text-gray-500">
                                                {{ $gallery->send_date ?? 'No Date' }}
                                            </p>
                                            <span
                                                class="inline-block mt-1 px-2 py-1 text-xs font-semibold rounded-full 
                                                    {{ $gallery->type == 'newsletter' ? 'bg-purple-100 text-purple-800' : '' }}
                                                    {{ $gallery->type == 'video' ? 'bg-gray-100 text-gray-800' : '' }}
                                                    {{ $gallery->type == 'document' ? 'bg-pink-100 text-pink-800' : '' }}
                                                    {{ $gallery->type == 'image' ? 'bg-blue-100 text-blue-800' : '' }}">
                                                {{ ucfirst($gallery->type) }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <!-- No Data Message -->
                        @if ($galleries->isEmpty())
                            <p class="text-center text-gray-500 mt-6">No gallery items available yet.</p>
                        @endif

                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-sm text-gray-700">Showing 1 to 3 of 15 results</div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border rounded-lg disabled:opacity-50">Previous</button>
                                <button class="px-3 py-1 border rounded-lg bg-custom text-white">1</button>
                                <button class="px-3 py-1 border rounded-lg">2</button>
                                <button class="px-3 py-1 border rounded-lg">3</button>
                                <button class="px-3 py-1 border rounded-lg">Next</button>
                            </div>
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
            series: [
                {
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
