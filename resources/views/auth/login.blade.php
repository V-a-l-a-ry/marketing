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
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 max-w-[80%] w-full mx-auto">
            <!-- Left Section -->
            <div
                class="bg-green-800 sm:mx-auto flex flex-col items-center justify-center sm:w-full h-full space-y-8 p-16 shadow-lg sm:rounded-lg">
                <img class="mx-auto h-20 w-auto" src="https://admissions.dkut.ac.ke/images/logo.png" alt="Logo" />
                <h2 class="mt-6 text-center text-4xl font-bold tracking-tight text-white">Sign in to your account</h2>
                <p class="mt-4 text-center text-lg text-yellow-400">
                    Don't have an account?
                    <a href="/register" class="font-medium text-white hover:text-custom/90">Sign up</a>
                </p>
            </div>

            <!-- Right Section -->
            <div class="bg-white sm:mx-auto sm:w-full py-16 px-12 shadow-lg sm:rounded-lg">
                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="mb-6 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Form -->
                <form class="space-y-8" action="{{ route('login') }}" method="POST">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">Email address</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400 text-lg"></i>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                value="{{ old('email') }}"
                                class="block w-full pl-12 rounded-button border-gray-300 shadow-lg focus:border-custom focus:ring-custom text-lg"
                                placeholder="Enter your email">
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400 text-lg"></i>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="block w-full pl-12 rounded-button border-gray-300 shadow-lg focus:border-custom focus:ring-custom text-lg"
                                placeholder="Enter your password">
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center">
                                <button type="button" id="togglePassword"
                                    class="text-gray-400 hover:text-gray-500 focus:outline-none">
                                    <i class="fas fa-eye text-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember" type="checkbox"
                                class="h-6 w-6 rounded-button text-custom focus:ring-custom border-gray-300">
                            <label for="remember-me" class="ml-3 block text-lg text-gray-900">Remember me</label>
                        </div>
                        <div class="text-lg">
                            <a href="{{ route('password.request') }}"
                                class="font-medium text-custom hover:text-custom/90">Forgot your password?</a>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-6 border border-transparent rounded-button shadow-lg text-lg font-medium text-white bg-green-800 hover:bg-custom/90 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-custom">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
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
