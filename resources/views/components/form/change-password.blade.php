<div>
    <form action="/{{ Request::segment(1) }}/ganti-password/{{ Auth::user()->id }}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="old_password">Password Lama</label>
            <input type="password" class="form-control" name="old_password" id="old_password">
            @error('old_password')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="new_password">Password Baru</label>
            <input type="password" class="form-control" name="new_password" id="new_password">
            @error('new_password')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="confirmation_password">Konfirmasi Password</label>
            <input type="password" class="form-control" name="confirmation_password" id="confirmation_password">
            @error('confirmation_password')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>