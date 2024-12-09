<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2FA Setup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm text-center">
        <h1 class="text-2xl font-semibold mb-6">Scan the QR Code with Google Authenticator</h1>
        <img src="{{ $google2fa_url }}" alt="QR Code" class="mx-auto mb-6">
        <form action="{{ route('twofactor.enable') }}" method="POST">
            @csrf
            <input type="text" name="google2fa_token" placeholder="Enter the token" required class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 mb-4">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Enable 2FA</button>
        </form>
    </div>
</body>
</html>
