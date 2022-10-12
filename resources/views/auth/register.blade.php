<form method="POST" action="/register">
    @csrf

    <div>
        <label>Name</label>
        <input
        type="text"
        name="name"
        />
    </div>

    @error('name')
    <div>{{ $message }}</div>
    @enderror

    <div>
        <label>Email</label>
        <input
        type="text"
        name="email"/>
    </div>

    @error('email')
    <div>{{ $message }}</div>
    @enderror

    <div>
        <label>Password</label>
        <input
        type="password"
        name="password"/>
    </div>

    @error('password')
    <div>{{ $message }}</div>
    @enderror

    <div>
        <label>Confirm password</label>
        <input
        type="password"
        name="confirmPassword"
        />
    </div>


    <button type="submit">Register</button>
</form>

