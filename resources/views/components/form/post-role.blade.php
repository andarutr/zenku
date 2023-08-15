<div>
    <form action="{{ route('admin.role.store') }}" method="POST">@csrf
        <div class="form-group">
            <label for="role">Nama Role</label>
            <input type="text" class="form-control" name="role" id="role" value="{{ old('role') }}">
            @error('role')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="id">ID Role</label>
            <input type="number" class="form-control" name="id" id="id" value="{{ old('id') }}">
            @error('id')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>