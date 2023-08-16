<div>
    <form action="{{ route('guru.materi.store') }}" method="POST" enctype="multipart/form-data">@csrf
        <div class="form-group">
            <label for="name">Judul Materi</label>
            <input type="text" class="form-control" name="title_card" id="name" value="{{ old('title_card') }}">
            @error('title_card')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="foto">Foto Thumbnail</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="picture_card">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            @error('picture_card')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="foto">Kategori</label>
            <select class="form-control" name="category_id" id="kategori">
                <option value="">Pilih</option>
                @foreach($categories as $ctg)
                <option value="{{ $ctg->id }}">{{ $ctg->category }}</option>
                @endforeach
            </select>
            @error('category_id')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" class="form-control" id="video" name="video_card">
            @error('video_card')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea name="description" id="editor1" rows="10" cols="80">{{ old('description') }}</textarea>
            @error('description')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>