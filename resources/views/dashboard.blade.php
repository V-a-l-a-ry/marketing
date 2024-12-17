<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Marketing Office - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
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
                <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo" class="h-8">
            </div>
            <nav class="flex-1 px-4 space-y-1">
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-medium text-custom bg-custom/10 rounded-lg">
                    <i class="fas fa-chart-line w-5 h-5 mr-3"></i>
                    Dashboard
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg">
                    <i class="fas fa-newspaper w-5 h-5 mr-3"></i>
                    Newsletter Management
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg">
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
                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                    @csrf
                    <button type="submit"
                        class="flex items-center w-full px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                        Logout
                    </button>
                </form>
            </nav>

        </aside>

        <div class="flex-1 flex flex-col">
            <header class="bg-white border-b border-gray-200">
                <div class="flex items-center justify-between px-8 py-4">
                    <div class="flex items-center space-x-4">
                        <button class="!rounded-button text-gray-500 hover:text-gray-600">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h1 class="text-xl font-semibold text-gray-900">Dashboard</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="!rounded-button relative text-gray-500 hover:text-gray-600">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-400"></span>
                        </button>
                        <div class="flex items-center space-x-3">
                            {{-- <img src="https://creatie.ai/ai/api/search-image?query=A professional headshot of a university administrator with a warm smile, wearing business attire, against a neutral background&width=40&height=40&orientation=squarish&flag=9a04c394-24e2-4c81-aa5a-8df8c2020438"
                                alt="Profile" class="h-8 w-8 rounded-full"> --}}
                            <!-- Display the name of the logged-in user -->
                            {{-- <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span> --}}
                        </div>
                    </div>
                </div>
            </header>


            <main class="flex-1 overflow-y-auto p-8">
                <div class="grid grid-cols-1 gap-8">
                    <section class="grid grid-cols-4 gap-6">
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="flex-1">
                                    <h3 class="text-sm font-medium text-gray-500">Total Subscribers</h3>
                                    <p class="text-2xl font-semibold text-gray-900 mt-1">{{ $totalSubscribers }}</p>
                                </div>
                                <div class="w-12 h-12 bg-custom/10 rounded-full flex items-center justify-center">
                                    <i class="fas fa-users text-custom text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-500 text-sm font-medium">+2.5%</span>
                                <span class="text-gray-500 text-sm ml-2">from last month</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="flex-1">
                                    <h3 class="text-sm font-medium text-gray-500">Active Events</h3>
                                    <p class="text-2xl font-semibold text-gray-900 mt-1">{{ $activeEvents }}</p>
                                </div>
                                <div class="w-12 h-12 bg-custom/10 rounded-full flex items-center justify-center">
                                    <i class="fas fa-calendar text-custom text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-500 text-sm font-medium">+4</span>
                                <span class="text-gray-500 text-sm ml-2">new this week</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="flex-1">
                                    <h3 class="text-sm font-medium text-gray-500">Newsletter Opens</h3>
                                    <p class="text-2xl font-semibold text-gray-900 mt-1">{{ $averageOpensFormatted }}
                                    </p>
                                </div>
                                <div class="w-12 h-12 bg-custom/10 rounded-full flex items-center justify-center">
                                    <i class="fas fa-envelope-open text-custom text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-500 text-sm font-medium">+5.2%</span>
                                <span class="text-gray-500 text-sm ml-2">above average</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="flex-1">
                                    <h3 class="text-sm font-medium text-gray-500">Content Pieces</h3>
                                    <p class="text-2xl font-semibold text-gray-900 mt-1">totalContentPieces</p>
                                </div>
                                <div class="w-12 h-12 bg-custom/10 rounded-full flex items-center justify-center">
                                    <i class="fas fa-file-alt text-custom text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-500 text-sm font-medium">+12</span>
                                <span class="text-gray-500 text-sm ml-2">new items</span>
                            </div>
                        </div>
                    </section>

                    <section class="grid grid-cols-2 gap-6">
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-900">Engagement Overview</h3>
                            <div id="engagementChart" class="h-80 mt-4"></div>
                        </div>

                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-900">Upcoming Events</h3>
                            <div class="mt-4 space-y-4">
                                @if ($events->isEmpty())
                                    <p>No upcoming events at the moment.</p>
                                @else
                                    @foreach ($events->sortByDesc('date')->take(4) as $event)
                                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                            <div class="flex-shrink-0 w-10 text-center">
                                                <p class="text-sm font-semibold text-custom">
                                                    {{ \Carbon\Carbon::parse($event->date)->format('M') }}
                                                </p>
                                                <p class="text-2xl font-bold text-gray-900">
                                                    {{ \Carbon\Carbon::parse($event->date)->format('d') }}
                                                </p>
                                            </div>
                                            <div class="ml-4">
                                                <h4 class="text-sm font-medium text-gray-900">{{ $event->name }}</h4>
                                                <p class="text-sm text-gray-500">
                                                    {{ \Carbon\Carbon::parse($event->date)->format('g:i A') }} -
                                                    {{ \Carbon\Carbon::parse($event->end_time ?? $event->date)->format('g:i A') }}
                                                </p>
                                            </div>
                                            <div class="ml-auto">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    {{ $event->attendees }} Registered
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </section>

                    <section class="grid grid-cols-3 gap-6">
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-medium text-gray-900">Recent Newsletters</h3>
                                <a href="{{ route('newsletter.index') }}"
                                    class="!rounded-button text-sm font-medium text-custom hover:text-custom-600">
                                    View All
                                </a>
                            </div>
                            <div class="space-y-4">
                                @forelse ($recentNewsletters as $newsletter)
                                    <div class="flex items-center">
                                        <div class="flex-1">
                                            <h4 class="text-sm font-medium text-gray-900">{{ $newsletter->title }}
                                            </h4>
                                            <p class="text-sm text-gray-500">
                                                Sent on
                                                {{ \Carbon\Carbon::parse($newsletter->send_date)->format('M d, Y') }}
                                            </p>
                                        </div>
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            {{ $newsletter->opens ?? 0 }}% Open Rate
                                        </span>
                                    </div>
                                @empty
                                    <p class="text-sm text-gray-500">No newsletters available.</p>
                                @endforelse
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow p-6">
                            <!-- Recent Media Content -->
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-medium text-gray-900">Recent Media</h3>
                                <button
                                    class="!rounded-button text-sm font-medium text-custom hover:text-custom-600">View
                                    Library</button>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden">
                                    <img src="https://creatie.ai/ai/api/search-image?query=A modern university campus building with students walking around, featuring contemporary architecture and landscaping&width=100&height=100&orientation=squarish&flag=e339330e-8625-493d-944b-2fd5e405a938"
                                        alt="Campus" class="w-full h-full object-cover">
                                </div>
                                <div class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden">
                                    <img src="https://creatie.ai/ai/api/search-image?query=Students collaborating in a modern university library setting with computers and study materials&width=100&height=100&orientation=squarish&flag=ed67d14e-905f-4398-9125-760239709ec6"
                                        alt="Library" class="w-full h-full object-cover">
                                </div>
                                <div class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden">
                                    <img src="https://creatie.ai/ai/api/search-image?query=University research laboratory with advanced equipment and researchers working&width=100&height=100&orientation=squarish&flag=490bd539-1f36-446e-9a0c-000e029683ca"
                                        alt="Lab" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow p-6">
                            <!-- Quick Actions Content -->
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-medium text-gray-900">Quick Actions</h3>
                            </div>
                            <div class="space-y-4">

                                <form action="{{ route('newsletter.create') }}" method="GET">
                                    @csrf

                                    <button
                                        class="!rounded-button w-full flex items-center justify-center px-4 py-2 bg-custom text-white hover:bg-custom-600">
                                        <i class="fas fa-plus mr-2"></i>
                                        Create Newsletter
                                    </button>
                                </form>

                                <form action="{{ route('event.create') }}">
                                    @csrf

                                    <button
                                        class="!rounded-button w-full flex items-center justify-center px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <i class="fas fa-calendar-plus mr-2"></i>
                                        Schedule Event
                                    </button>
                                </form>

                                <button
                                    class="!rounded-button w-full flex items-center justify-center px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">
                                    <i class="fas fa-chart-bar mr-2"></i>
                                    Generate Report
                                </button>
                            </div>
                        </div>
                    </section>


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
