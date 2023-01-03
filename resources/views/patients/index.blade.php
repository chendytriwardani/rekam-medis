<div>
    <h1>Patients</h1>
    {{-- button add patiens --}}
    <a href="{{route('patient.create')}}" class="btn btn-primary">Add Patient</a>
    <table border="1">
        <tr>
        <th>Id Pasien</th>
        <th>No Bpjs</th>
        <th>Nama Pasien</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Berat Badan</th>
        <th>Tinggi Badan</th>
        </tr>
        @foreach($patients as $patient)
        <tr style="text-align: center">
            <td>{{$patient->id_pasien}}</td>
            <td>{{$patient->no_bpjs}}</td>
            <td>{{$patient->nama}}</td>
            <td>{{$patient->jenis_kelamin}}</td>
            <td>{{$patient->tgl_lahir}}</td>
            <td>{{$patient->tempat_lahir}}</td>
            <td>{{$patient->alamat}}</td>
            <td>{{$patient->no_hp}}</td>
            <td>{{$patient->berat_badan}}</td>
            <td>{{$patient->tinggi_badan}}</td>
        </tr>
        @endforeach


        </table>
</div>