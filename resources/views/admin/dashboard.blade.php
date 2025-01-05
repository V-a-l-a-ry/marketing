<x-layout>
    <main class="flex-1 overflow-y-auto p-8">
        <div class="grid grid-cols-1 gap-8">
           

            <section class="w-full">

                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-medium text-gray-900">Upcoming Events</h3>
                    <a href="{{ route('events.index') }}"
                        class="!rounded-button text-sm font-medium text-custom hover:text-custom-600">
                        View All
                    </a>
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

            <section class="grid grid-cols-2 gap-3">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Recent Newsletters</h3>
                        <a href="{{ route('newsletter.index') }}"
                            class="!rounded-button text-sm font-medium text-custom hover:text-custom-600">
                            View All
                        </a>
                    </div>
                    <div class="space-y-4">
                        @forelse ($recentNewsletters->sortByDesc('send_date')->take(4) as $newsletter)
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
                <div class="bg-gray-100 hidden xl:block">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                        <!-- Latest Event -->
                        <div class="bg-white rounded-lg shadow overflow-hidden relative">
                            <div class="h-32 bg-cover bg-center"
                                style="background-image: url('https://images.unsplash.com/photo-1519999482648-25049ddd37b1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400');">
                            </div>
                            <div class="p-6">
                                @if ($latestEvent)
                                    <p><strong>{{ $latestEvent->name }}</strong></p>
                                    <p><strong>Description:</strong> {{ $latestEvent->type }}</p>
                                    <p
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <strong>Attendees:</strong> {{ $latestEvent->attendees }}
                                    </p>
                                    @if ($latestEvent->event_date)
                                        <p><small>Event Date:
                                                {{ \Carbon\Carbon::parse($latestEvent->date)->format('M d, Y') }}</small>
                                        </p>
                                    @else
                                        <p><small>Event Date: Not specified</small></p>
                                    @endif
                                @else
                                    <p>No events available.</p>
                                @endif
                            </div>
                        </div>

                        <!-- Latest Newsletter -->
                        <div class="bg-white rounded-lg shadow overflow-hidden relative">
                            <div class="h-32 bg-cover bg-center"
                                style="background-image: url('https://images.unsplash.com/photo-1519999482648-25049ddd37b1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400');">
                            </div>
                            <div class="p-6">
                                @if ($latestNewsletter)
                                    <p><strong> {{ $latestNewsletter->title }}</strong></p>
                                    {{-- <p><strong>Content:</strong> {{ Str::limit($latestNewsletter->content, 100, '...') }}</p> --}}
                                    @if ($latestNewsletter->send_date)
                                        <p><small>Sent On:
                                                {{ \Carbon\Carbon::parse($latestNewsletter->send_date)->format('M d, Y') }}</small>
                                        </p>
                                    @else
                                        <p><small>Send Date: Not specified</small></p>
                                    @endif
                                @else
                                    <p>No newsletters available.</p>
                                @endif
                            </div>
                        </div>

                        <!-- Latest Gallery -->
                        <div class="bg-white rounded-lg shadow overflow-hidden relative">
                            <div class="h-32 bg-cover bg-center"
                                style="background-image: url('https://images.unsplash.com/photo-1519999482648-25049ddd37b1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400');">
                            </div>
                            <div class="p-6">
                                @if ($latestGallery)
                                    <p><strong>{{ $latestGallery->title }}</strong></p>
                                    @if ($latestGallery->created_at)
                                        <p><small>Created On:
                                                {{ \Carbon\Carbon::parse($latestGallery->created_at)->format('M d, Y') }}</small>
                                        </p>
                                    @else
                                        <p><small>Created Date: Not specified</small></p>
                                    @endif
                                @else
                                    <p>No galleries available.</p>
                                @endif
                            </div>
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

                        <a href="{{ route('galleries.index') }}">
                            <button
                                class="!rounded-button w-full flex items-center justify-center px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">
                                <i class="fas fa-chart-bar mr-2"></i>
                                Check Galleries
                            </button>
                        </a>

                    </div>
                </div>
            </section>


        </div>
    </main>
</x-layout>
