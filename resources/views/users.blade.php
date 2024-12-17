<x-layout>
    <main class="flex-1 overflow-y-auto p-8">
        <div class="grid grid-cols-1 gap-8">
            <div class="grid grid-cols-1 gap-8">
                <section class="bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-6 border-b">
                        <h3 class="text-lg font-medium text-gray-900">User Management</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="relative"><input type="text" placeholder="Search users..."
                                    class="pl-10 pr-4 py-2 border rounded-lg focus:ring-custom focus:border-custom" /><i
                                    class="fas fa-search absolute left-3 top-3 text-gray-400"></i></div>
                            <div class="flex space-x-2"><select class="border rounded-lg px-4 py-2">
                                    <option>All Roles</option>
                                    <option>Admin</option>
                                    <option>Editor</option>
                                    <option>Viewer</option>
                                </select><select class="border rounded-lg px-4 py-2">
                                    <option>All Status</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select></div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            User</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Role</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Department</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Last Active</th>
                                        <th
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : 'https://via.placeholder.com/40' }}"
                                                        class="h-10 w-10 rounded-full" />
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $user->name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">{{ $user->role }}</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $user->department }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->status === 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $user->status }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $user->last_active->diffForHumans() }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <button class="text-custom hover:text-custom-600 mr-3">Edit</button>
                                                <button class="text-red-600 hover:text-red-900">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

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
