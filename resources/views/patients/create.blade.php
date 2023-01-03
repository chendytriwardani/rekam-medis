{{-- form for pasien --}}
<div>
    <h1>Add Patient</h1>
    <form action="{{route('patient.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="id_pasien">Id Pasien</label>
            <input type="text" name="id_pasien" id="id_pasien" class="form-control">
        </div>
        <div class="form-group">
            <label for="no_bpjs">No Bpjs</label>
            <input type="text" name="no_bpjs" id="no_bpjs" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Nama Pasien</label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            {{-- list pria wanita --}}
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>

            </select>
            {{-- <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"> --}}
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
        </div>
        <div class="form-group">
            <label for="no_hp">No Hp</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control">
        </div>
        <div class="form-group">
            <label for="berat_badan">Berat Badan</label>
            <input type="text" name="berat_badan" id="berat_badan" class="form-control">
        </div>
        <div class="form-group">
            <label for="tinggi_badan">Tinggi Badan</label>
            <input type="text" name="tinggi_badan" id="tinggi_badan" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
