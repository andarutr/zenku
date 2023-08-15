<div>
    <form action="{{ route('admin.role.update', ['role' => $role->id]) }}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="role">Nama Role</label>
            <input type="text" class="form-control" name="role" id="role" value="{{ $role->role }}">
            @error('role')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="id">ID Role</label>
            <input type="number" class="form-control" name="id" id="id" value="{{ $role->id }}">
            @error('id')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>