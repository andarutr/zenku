<div>
    <form action="{{ route('admin.kategori.store') }}" method="POST">@csrf
        <div class="form-group">
            <label for="name_category">Nama Menu</label>
            <input type="text" class="form-control" name="name_category" id="name_category" value="{{ old('name_category') }}">
            @error('name_category')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>