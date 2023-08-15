<div>
    <form action="{{ route('admin.menu.update', ['menu' => $id]) }}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="name_menu">Nama Menu</label>
            <input type="text" class="form-control" name="name_menu" id="name_menu" value="{{ $menu_get->name_menu }}">
            @error('name_menu')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="category">Kategori</label>
            <select name="category_menu" id="category_menu" class="form-control">
                <option value="{{ $menu_get->category_menu->id }}">{{ $menu_get->category_menu->category_menu }}</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_menu }}</option>
                @endforeach
            </select>
            @error('category_menu')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="roles">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="{{ $menu_get->role->id }}">{{ $menu_get->role->role }}</option>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->role }}</option>
                @endforeach
            </select>
            @error('role')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="icon_menu">Icon</label>
            <input type="text" class="form-control" name="icon_menu" id="icon_menu" value="{{ $menu_get->icon_menu }}">
            @error('icon_menu')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="url_menu">URL</label>
            <input type="text" class="form-control" name="url_menu" id="url_menu" value="{{ $menu_get->url_menu }}">
            @error('url_menu')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>