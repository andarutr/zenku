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
            <select name="provinsi" class="form-control">
                <option value="{{ $user->provinsi }}">{{ $user->provinsi }}</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
            </select>
        </div>
        <div class="form-group">
            <label for="kota_administrasi">Kota Administrasi</label>
            <select name="kota_administrasi" class="form-control">
                <option value="{{ $user->kota_administrasi }}">{{ $user->kota_administrasi }}</option>
                <option value="Jakarta Timur">Jakarta Timur</option>
                <option value="Jakarta Barat">Jakarta Barat</option>
                <option value="Jakarta Pusat">Jakarta Pusat</option>
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