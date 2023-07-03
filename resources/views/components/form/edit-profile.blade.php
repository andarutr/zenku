<div>
    <form action="/{{ strtolower($user->role) }}/profile/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">@csrf @method('put')
        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="editor1" rows="10" cols="80">{{ Auth::user()->bio }}</textarea>
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="picture">
            <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Tgl Lahir</label>
            <input type="date" class="form-control" name="birthday" id="name" value="{{ Auth::user()->birthday }}">
        </div>
        <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{ Auth::user()->whatsapp }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ Auth::user()->alamat }}">
        </div>
        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control" name="kode_pos" id="kode_pos" value="{{ Auth::user()->kode_pos }}">
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <select name="id_provinsi" class="form-control">
                <option value="{{ $user->id_provinsi }}">{{ $user->name_provinsi }}</option>
                @foreach($provinsi as $prv)
                <option value="{{ $prv->id_provinsi }}">{{ $prv->name_provinsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kota_administrasi">Kota Administrasi</label>
            <select name="id_kota_administrasi" class="form-control">
                <option value="{{ $user->id_kota_administrasi }}">{{ $user->name_kota_administrasi }}</option>
                @foreach($kota_administrasi as $adm)
                <option value="{{ $adm->id_kota_administrasi }}">{{ $adm->name_kota_administrasi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status Kenegaraan</label>
            <select name="status_kenegaraan" class="form-control">
                <option value="{{ Auth::user()->status_kenegaraan }}">{{ Auth::user()->status_kenegaraan }}</option>
                <option>WNI</option>
                <option>WNA</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>