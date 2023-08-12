<div>
    <form action="{{ route('admin.menu.update', ['menu' => $id]) }}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="name_menu">Nama Menu</label>
            <input type="text" class="form-control" name="name_menu" id="name_menu" value="{{ $menu_get->name_menu }}">
            @error('name_menu')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="category">Kategori</label>
            <select name="id_category_menu" id="category" class="form-control">
                <option value="{{ $menu_get->id_category_menu }}">{{ $menu_get->name_category_menu }}</option>
                @foreach($categories as $category)
                <option value="{{ $category->id_category_menu }}">{{ $category->name_category_menu }}</option>
                @endforeach
            </select>
            @error('id_category_menu')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="roles">Role</label>
            <select name="id_role" id="roles" class="form-control">
                <option value="{{ $menu_get->id_role }}">{{ $menu_get->name_role }}</option>
                @foreach($roles as $role)
                <option value="{{ $role->id_role }}">{{ $role->name_role }}</option>
                @endforeach
            </select>
            @error('id_role')<p class="text-danger">{{ $message }}</p>@enderror
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