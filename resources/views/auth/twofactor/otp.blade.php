<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h1 class="text-2xl font-semibold text-center mb-4">Two-Factor Authentication</h1>
        <p class="text-gray-600 text-center mb-6">Please enter the OTP sent to your email to continue.</p>
        
        <!-- Display error messages if any -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-4 mb-4 rounded">
                <ul class="text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('twofactor.verify') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- OTP Input -->
            <div>
                <label for="otp" class="block text-sm font-medium text-gray-700 mb-1">OTP</label>
                <input 
                    type="text" 
                    name="otp" 
                    id="otp" 
                    placeholder="Enter your 6-digit OTP" 
                    required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
            >
                Verify OTP
            </button>
        </form>

        <!-- Additional Info -->
        <p class="text-sm text-gray-500 text-center mt-4">
            Didn't receive the code? 
            <a href="{{ route('twofactor.send') }}" class="text-blue-500 hover:text-blue-700">Resend OTP</a>
        </p>
    </div>
</body>
</html>
