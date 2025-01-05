<header class="bg-green-800 border-b text-yellow-400 border-gray-200">
    <div class="flex items-center justify-between px-8 py-4">
        <div class="flex items-center space-x-4">
            <button class="!rounded-button text-white hover:text-gray-600">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h1 class="text-xl font-semibold text-white">Dashboard</h1>
        </div>
        <div class="flex items-center space-x-4">
            <button class="!rounded-button relative text-white hover:text-gray-600">
                <i class="fas fa-bell text-xl"></i>
                <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-400"></span>
            </button>
            <div class="flex items-center space-x-3">
                <!-- Profile Image -->
                <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : 'https://via.placeholder.com/150' }}"
                     alt="Profile" class="h-8 w-8 rounded-full">
                <!-- Display the name of the logged-in user -->
                <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
            </div>
            
        </div>
    </div>
</header>
