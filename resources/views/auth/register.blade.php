<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet" />
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                alt="Logo" />
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Create your account</h2>
            <p class="mt-2 text-center text-sm text-gray-600">Already have an account? <a href="{{ route('login') }}"
                    class="font-medium text-custom hover:text-custom/90">Sign in</a></p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input id="name" name="name" type="text" required
                                class="block w-full pl-10 rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter your full name" />
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" name="email" type="email" required
                                class="block w-full pl-10 rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter your email" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" name="password" type="password" required
                                class="block w-full pl-10 rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter your password" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                            Password</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="block w-full pl-10 rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Confirm your password" />
                        </div>
                    </div>

                    <!-- Department -->
                    <div>
                        <label for="department" class="block text-sm font-medium text-gray-700">Department
                            (optional)</label>
                        <div class="mt-1">
                            <input id="department" name="department" type="text"
                                class="block w-full rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter your department" />
                        </div>
                    </div>

                    <!-- Profile Image -->
                    <div>
                        <label for="profile_image" class="block text-sm font-medium text-gray-700">Profile Image
                            (optional)</label>
                        <div class="mt-1">
                            <input id="profile_image" name="profile_image" type="file"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-button file:border-0 file:text-sm file:font-semibold file:bg-custom file:text-white hover:file:bg-custom/90" />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-button shadow-sm text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                            Sign up
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-8 text-center text-sm text-gray-600">
            <p>By signing up, you agree to our <a href="#"
                    class="font-medium text-custom hover:text-custom/90">Terms</a> and <a href="#"
                    class="font-medium text-custom hover:text-custom/90">Privacy Policy</a></p>
        </div>

        <footer class="mt-8 text-center text-xs text-gray-500">
            <p>© 2024 Your Company. All rights reserved.</p>
            <p class="mt-1">Version 1.0.0 | Compatible with Chrome, Firefox, Safari</p>
        </footer>
    </div>
</body>

</html>
