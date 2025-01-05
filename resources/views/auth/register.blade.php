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

<body class="bg-green-900 min-h-screen">
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 max-w-[80%] w-full mx-auto">
            <!-- Left Section -->
            <div class="bg-green-800 sm:mx-auto flex flex-col items-center justify-center sm:w-full h-full space-y-12 p-16 shadow-lg sm:rounded-lg">
                <img class="mx-auto h-20 w-auto" src="https://admissions.dkut.ac.ke/images/logo.png" alt="Logo" />
                <h2 class="mt-6 text-center text-4xl font-bold tracking-tight text-white">Create your account</h2>
                <p class="mt-4 text-center text-lg text-yellow-400">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="font-medium text-white hover:text-custom/90">Sign in</a>
                </p>
            </div>
    
            <!-- Right Section -->
            <div class="bg-white sm:mx-auto sm:w-full py-16 px-12 shadow-lg sm:rounded-lg">
                <form class="space-y-8" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Full Name</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400 text-lg"></i>
                            </div>
                            <input id="name" name="name" type="text" required
                                class="block w-full pl-12 rounded-button border-gray-300 shadow-lg focus:border-custom focus:ring-custom text-lg"
                                placeholder="Enter your full name" />
                        </div>
                    </div>
    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">Email address</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400 text-lg"></i>
                            </div>
                            <input id="email" name="email" type="email" required
                                class="block w-full pl-12 rounded-button border-gray-300 shadow-lg focus:border-custom focus:ring-custom text-lg"
                                placeholder="Enter your email" />
                        </div>
                    </div>
    
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400 text-lg"></i>
                            </div>
                            <input id="password" name="password" type="password" required
                                class="block w-full pl-12 rounded-button border-gray-300 shadow-lg focus:border-custom focus:ring-custom text-lg"
                                placeholder="Enter your password" />
                        </div>
                    </div>
    
                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-lg font-medium text-gray-700">Confirm Password</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400 text-lg"></i>
                            </div>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="block w-full pl-12 rounded-button border-gray-300 shadow-lg focus:border-custom focus:ring-custom text-lg"
                                placeholder="Confirm your password" />
                        </div>
                    </div>
    
                    <!-- Department -->
                    <div>
                        <label for="department" class="block text-lg font-medium text-gray-700">Department (optional)</label>
                        <div class="mt-2">
                            <input id="department" name="department" type="text"
                                class="block w-full rounded-button border-gray-300 shadow-lg focus:border-custom focus:ring-custom text-lg"
                                placeholder="Enter your department" />
                        </div>
                    </div>
    
                    <!-- Profile Image -->
                    <div>
                        <label for="profile_image" class="block text-lg font-medium text-gray-700">Profile Image (optional)</label>
                        <div class="mt-2">
                            <input id="profile_image" name="profile_image" type="file"
                                class="block w-full text-lg text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-button file:border-0 file:text-lg file:font-semibold file:bg-green-800 file:text-white hover:file:bg-custom/90" />
                        </div>
                    </div>
    
                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-6 border border-transparent rounded-button shadow-lg text-lg font-medium text-white bg-green-800 hover:bg-custom/90 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-custom">
                            Sign up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</body>

</html>
