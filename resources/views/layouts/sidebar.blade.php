<aside class="w-64 bg-white border-r border-gray-200 flex flex-col">
    <div class="p-6">
        <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo" class="h-8">
    </div>
    <nav class="flex-1 px-4 space-y-1">
        <!-- Dashboard Link -->
        <a href="/admin/dashboard"
            class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg
                {{ Request::is('admin/dashboard') ? 'bg-custom/20' : '' }}">
            <i class="fas fa-chart-line w-5 h-5 mr-3"></i>
            Dashboard
        </a>

        <!-- Newsletter Management Link -->
        <a href="/admin/newsletters"
            class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg
                {{ Request::is('admin/newsletters') ? 'bg-custom/20' : '' }}">
            <i class="fas fa-newspaper w-5 h-5 mr-3"></i>
            Newsletter Management
        </a>

        <!-- Event Management Link -->
        <a href="/admin/events"
            class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg
                {{ Request::is('admin/events') ? 'bg-custom/20' : '' }}">
            <i class="fas fa-calendar-alt w-5 h-5 mr-3"></i>
            Event Management
        </a>

        <!-- User Administration Link -->
        <a href="/admin/users"
            class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg
                {{ Request::is('admin/users') ? 'bg-custom/20' : '' }}">
            <i class="fas fa-users w-5 h-5 mr-3"></i>
            User Administration
        </a>

        <!-- Content Library Link -->
        <a href="/admin/content"
            class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-lg
                {{ Request::is('admin/content') ? 'bg-custom/20' : '' }}">
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
