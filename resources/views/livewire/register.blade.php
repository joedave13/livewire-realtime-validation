<div>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" class="form-control @if($errors->has('name'))
                is-invalid @elseif($name == null) @else is-valid
            @endif" name="name" placeholder="Full Name" wire:model="name">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Email Address</label>
            <input type="text" class="form-control @if($errors->has('email'))
                is-invalid @elseif($email == null) @else is-valid
            @endif" name="email" placeholder="user@example.com" wire:model="email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control @if($errors->has('password'))
                is-invalid @elseif($password == null) @else is-valid
            @endif" name="password" placeholder="Password" wire:model="password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Email Address"
                wire:model="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">
            Register
        </button>
    </form>
</div>