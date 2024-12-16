<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet" />
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-[&#39;Inter&#39;]">
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-16 w-auto transform hover:scale-105 transition-transform duration-300"
                src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Company logo" />
            <h2
                class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900 hover:text-custom transition-colors duration-300">
                Sign in to your account</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="#" class="font-medium text-custom hover:text-custom/90">start your 14-day free trial</a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div
                class="bg-white py-8 px-4 shadow-lg hover:shadow-xl transition-shadow duration-300 sm:rounded-xl sm:px-10 backdrop-blur-sm bg-white/90">
                <form class="space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required=""
                                class="block w-full pl-10 !rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm transition-all duration-300 hover:border-custom/50"
                                placeholder="Enter your email" />
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required=""
                                class="block w-full pl-10 !rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm transition-all duration-300 hover:border-custom/50"
                                placeholder="Enter your password" />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" id="togglePassword"
                                    class="text-gray-400 hover:text-gray-500 focus:outline-none">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 !rounded-button text-custom focus:ring-custom border-gray-300" />
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-custom hover:text-custom/90">Forgot your
                                password?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent !rounded-button shadow-lg hover:shadow-xl text-sm font-medium text-white bg-custom hover:bg-custom/90 transform hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                            Sign in
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-3 gap-4">
                        <div>
                            <a href="#"
                                class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 !rounded-button shadow-md hover:shadow-lg bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transform hover:-translate-y-0.5 transition-all duration-300">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>

                        <div>
                            <a href="#"
                                class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 !rounded-button shadow-md hover:shadow-lg bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transform hover:-translate-y-0.5 transition-all duration-300">
                                <i class="fab fa-apple"></i>
                            </a>
                        </div>

                        <div>
                            <a href="#"
                                class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 !rounded-button shadow-md hover:shadow-lg bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transform hover:-translate-y-0.5 transition-all duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center text-sm text-gray-600">
            <p>Don&#39;t have an account? <a href="#" class="font-medium text-custom hover:text-custom/90">Sign
                    up</a></p>
        </div>

        <footer class="mt-8 text-center text-xs text-gray-500">
            <p>© 2024 Your Company. All rights reserved.</p>
            <p class="mt-1">Version 2.0.0 | Compatible with Chrome, Firefox, Safari</p>
        </footer>
    </div>

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
