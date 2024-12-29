<form method="POST" action="{{ route('password.email') }}"
    style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    @csrf
    <label for="email" style="display: block; font-weight: bold; margin-bottom: 8px;">Email address</label>
    <input type="email" name="email" id="email" required
        style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px;"
        value="{{ old('email') }}">

    @if ($errors->has('email'))
        <div style="color: #d9534f; font-size: 0.9em; margin-bottom: 10px;">
            {{ $errors->first('email') }}
        </div>
    @endif

    @if (session('status'))
        <div style="color: #5cb85c; font-size: 0.9em; margin-bottom: 10px;">
            {{ session('status') }}
        </div>
    @endif

    <button type="submit"
        style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">
        Send Reset Link
    </button>
</form>
