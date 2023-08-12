<div>
    <form action="{{ route('admin.role.update', ['role' => $role->id_role]) }}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="name_role">Nama Role</label>
            <input type="text" class="form-control" name="name_role" id="name_role" value="{{ $role->name_role }}">
            @error('name_role')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="id_role">ID Role</label>
            <input type="number" class="form-control" name="id_role" id="id_role" value="{{ $role->id_role }}">
            @error('id_role')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>