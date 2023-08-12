<div>
    <form action="{{ route('guru.materi.update', ['materi' => $materi->id_card]) }}" method="POST" enctype="multipart/form-data">@csrf @method('put')
        <div class="form-group">
            <label for="name">Judul Materi</label>
            <input type="text" class="form-control" name="title_card" id="name" value="{{ $materi->title_card }}">
            @error('title_card')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="foto">Foto Thumbnail</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="picture_card">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group">
            <label for="foto">Kategori</label>
            <select class="form-control" name="id_category" id="kategori">
                <option value="{{ $materi->id_category}}">{{ $materi->category}}</option>
                @foreach($categories as $ctg)
                <option value="{{ $ctg->id_category }}">{{ $ctg->name_category }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" class="form-control" id="video" name="video_card" value="{{ $materi->video_card }}">
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea name="description" id="editor1" rows="10" cols="80">{{ $materi->description }}</textarea>
            @error('description')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>