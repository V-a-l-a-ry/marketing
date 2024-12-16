<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>University Marketing Office - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex">
        <aside class="w-64 bg-white border-r border-gray-200 flex flex-col">
            <div class="p-6">
                <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo" class="h-8" />
            </div>
            <nav class="flex-1 px-4 space-y-1">
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg">
                    <i class="fas fa-chart-line w-5 h-5 mr-3"></i>
                    Dashboard
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg">
                    <i class="fas fa-newspaper w-5 h-5 mr-3"></i>
                    Newsletter Management
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-medium text-custom bg-custom/10 rounded-lg">
                    <i class="fas fa-calendar-alt w-5 h-5 mr-3"></i>
                    Event Management
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg">
                    <i class="fas fa-users w-5 h-5 mr-3"></i>
                    User Administration
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg">
                    <i class="fas fa-photo-video w-5 h-5 mr-3"></i>
                    Content Library
                </a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col">
            <header class="bg-white border-b border-gray-200">
                <div class="flex items-center justify-between px-8 py-4">
                    <div class="flex items-center space-x-4">
                        <button class="!rounded-button text-gray-500 hover:text-gray-600">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h1 class="text-xl font-semibold text-gray-900">Content Library</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="!rounded-button relative text-gray-500 hover:text-gray-600">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-400"></span>
                        </button>
                        <div class="flex items-center space-x-3">
                            <img src="https://creatie.ai/ai/api/search-image?query=A professional headshot of a university administrator with a warm smile, wearing business attire, against a neutral background&width=40&height=40&orientation=squarish&flag=9a04c394-24e2-4c81-aa5a-8df8c2020438&flag=73b6a891-3194-4712-9e67-2b2d32ee5ba7&flag=4e33065b-7593-499d-b627-479c6d45817d&flag=cbb72519-b1a0-46ff-824c-115008a57503&flag=4a5bc669-274b-492c-a4cf-aaf6bb6f28ba&flag=2bc0094a-ef19-44b1-8252-9ce6feb6636f"
                                alt="Profile" class="h-8 w-8 rounded-full" />
                            <span class="text-sm font-medium text-gray-700">John Anderson</span>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                <div class="grid grid-cols-1 gap-8">
                    <div class="grid grid-cols-1 gap-8">
                        <section class="bg-white rounded-lg shadow">
                            <div class="flex items-center justify-between p-6 border-b">
                                <h3 class="text-lg font-medium text-gray-900">Content Library</h3><button
                                    class="!rounded-button px-4 py-2 bg-custom text-white hover:bg-custom-600"><i
                                        class="fas fa-plus mr-2"></i>Add New Content</button>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="relative"><input type="text" placeholder="Search content..."
                                            class="pl-10 pr-4 py-2 border rounded-lg focus:ring-custom focus:border-custom" /><i
                                            class="fas fa-search absolute left-3 top-3 text-gray-400"></i></div>
                                    <div class="flex space-x-2"><select class="border rounded-lg px-4 py-2">
                                            <option>All Types</option>
                                            <option>Images</option>
                                            <option>Videos</option>
                                            <option>Documents</option>
                                        </select><select class="border rounded-lg px-4 py-2">
                                            <option>All Status</option>
                                            <option>Draft</option>
                                            <option>Scheduled</option>
                                            <option>Sent</option>
                                        </select></div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Content Title</th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Type</th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Status</th>
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
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center"><img
                                                            src="https://creatie.ai/ai/api/search-image?query=university+campus+photos&width=40&height=40&flag=4b7512b8-9cdd-40f1-a83d-d3d6151515a0"
                                                            class="h-10 w-10 rounded-full" />
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">Alumni
                                                                Newsletter</div>
                                                            <div class="text-sm text-gray-500">Summer 2024</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap"><span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Newsletter</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Scheduled
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap"><span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Jun
                                                        1, 2024</span></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">0</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <button
                                                        class="text-custom hover:text-custom-600 mr-3">Edit</button><button
                                                        class="text-red-600 hover:text-red-900">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center"><img
                                                            src="https://creatie.ai/ai/api/search-image?query=graduation+ceremony&width=40&height=40&flag=16e87ef7-f579-4394-8367-d7198db1973d"
                                                            class="h-10 w-10 rounded-full" />
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">Graduation
                                                                Ceremony Video</div>
                                                            <div class="text-sm text-gray-500">Class of 2024</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap"><span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Videos</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Draft
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap"><span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">May
                                                        15, 2024</span></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">120</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <button
                                                        class="text-custom hover:text-custom-600 mr-3">Edit</button><button
                                                        class="text-red-600 hover:text-red-900">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center"><img
                                                            src="https://creatie.ai/ai/api/search-image?query=research+paper&width=40&height=40&flag=b3e6ecba-4e80-4228-8e1c-0d20d9168e09"
                                                            class="h-10 w-10 rounded-full" />
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">Research
                                                                Highlights</div>
                                                            <div class="text-sm text-gray-500">Spring 2024</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap"><span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-pink-100 text-pink-800">Documents</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sent</td>
                                                <td class="px-6 py-4 whitespace-nowrap"><span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Apr
                                                        20, 2024</span></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">345</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <button
                                                        class="text-custom hover:text-custom-600 mr-3">Edit</button><button
                                                        class="text-red-600 hover:text-red-900">Delete</button></td>
                                            </tr>
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
        </div>
    </div>

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






</body>

</html>
