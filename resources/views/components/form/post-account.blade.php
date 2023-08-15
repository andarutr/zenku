<div>
    <form action="{{ route('admin.account.store') }}" method="POST">@csrf
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
            @error('name')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
            @error('email')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="name">Role</label>
            <select name="id_role" class="form-control">
                <option value="">Pilih</option>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->role }}</option>
                @endforeach
            </select>
            @error('id_role')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>