<form method="POST" action="/login">
    @csrf

    <div>
        <label>Email</label>
        <input
        type="text"
        name="email"
        />
    </div>

    <div>
        <label>Password</label>
        <input
        type="password"
        name="password"
        />
    </div>

    @error('message')
       <div>{{ $message }}</div>
    @enderror

    <button type="submit">Login</button>
</form>
