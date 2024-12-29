<x-layout>

    <main class="flex-1 overflow-y-auto p-8">
        <div class="grid grid-cols-1 gap-8">
            <div class="grid grid-cols-1 gap-8">
                <section class="bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-6 border-b">
                        <h3 class="text-lg font-medium text-gray-900">Content Library</h3>
                    </div>
                    <div class="p-6">
                        
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Content Title
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Type
                                        </th>

                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Send Date
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Opens
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($contents as $content)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $content->title }}</td>

                                            <!-- Type -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if ($content instanceof \App\Models\Gallery)
                                                    {{ ucfirst($content->type) }}
                                                @elseif ($content instanceof \App\Models\Newsletter)
                                                    {{ 'Newsletter' }}
                                                @endif
                                            </td>



                                            <!-- Send Date -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $content->send_date ? $content->send_date->format('M d, Y') : '-' }}
                                            </td>

                                            <!-- Opens -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $content->opens ?? '-' }}
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-sm text-gray-700">Showing 1 to 3 of 15 results</div>
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
