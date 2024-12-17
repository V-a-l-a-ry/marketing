<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 font-['Inter']">
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                alt="Company logo">
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="#" class="font-medium text-custom hover:text-custom/90">start your 14-day free trial</a>
            </p>
        </div>

        <!-- Form Section -->
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if (session('status'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                value="{{ old('email') }}"
                                class="block w-full pl-10 !rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter your email">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="block w-full pl-10 !rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter your password">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" id="togglePassword"
                                    class="text-gray-400 hover:text-gray-500 focus:outline-none">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember" type="checkbox"
                                class="h-4 w-4 !rounded-button text-custom focus:ring-custom border-gray-300">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-custom hover:text-custom/90">Forgot your
                                password?</a>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent !rounded-button shadow-sm text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center text-sm text-gray-600">
            <p>Don't have an account? <a href="/register" class="font-medium text-custom hover:text-custom/90">Sign up</a>
            </p>
        </div>

        <footer class="mt-8 text-center text-xs text-gray-500">
            <p>© 2024 Your Company. All rights reserved.</p>
            <p class="mt-1">Version 2.0.0 | Compatible with Chrome, Firefox, Safari</p>
        </footer>
    </div>

    <!-- Password Toggle Script -->
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const icon = this.querySelector('i');

            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>

</html>
