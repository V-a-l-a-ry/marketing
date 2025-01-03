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
                <h2 class="mt-6 text-center text-4xl font-bold tracking-tight text-white">Forgot your password?</h2>
                <p class="mt-4 text-center text-lg text-yellow-400">
                    Remembered your password?
                    <a href="/login" class="font-medium text-white hover:text-custom/90">Sign in</a>
                </p>
            </div>

            <!-- Right Section -->
            <div class="bg-white sm:mx-auto sm:w-full py-16 px-12 shadow-lg sm:rounded-lg">
                <div class="mb-4 text-sm text-gray-600">
                    Forgot your password? No problem. Just let us know your email address, and we will email you a
                    password reset link.
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="space-y-8">
                    @csrf

                    <!-- Email Address -->
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
                        @if ($errors->has('email'))
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-6 border border-transparent rounded-button shadow-lg text-lg font-medium text-white bg-green-800 hover:bg-custom/90 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-custom">
                            Email Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
