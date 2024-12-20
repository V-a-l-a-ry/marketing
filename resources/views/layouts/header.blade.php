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
                <!-- Profile Image -->
                <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : 'https://via.placeholder.com/150' }}"
                     alt="Profile" class="h-8 w-8 rounded-full">
                <!-- Display the name of the logged-in user -->
                <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
            </div>
            
        </div>
    </div>
</header>
