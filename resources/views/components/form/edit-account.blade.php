<div>
    <form action="{{ route('admin.account.update', ['account' => $id])}}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
            @error('name')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
            @error('email')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="name">Tgl Lahir</label>
            <input type="date" class="form-control" name="birthday" id="name" value="{{ $user->birthday }}">
        </div>
        <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{ $user->whatsapp }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $user->alamat }}">
        </div>
        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control" name="kode_pos" id="kode_pos" value="{{ $user->kode_pos }}">
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
                <option value="{{ $user->status_kenegaraan }}">{{ $user->status_kenegaraan }}</option>
                <option>WNI</option>
                <option>WNA</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>