<table class="table table-stripped" border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>nama_pemain</th>
            <th>no_punggung</th>
            <th>posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_pemain as $index => $pemain)
        <tr>
            <td>{{ $index+1 }}</td>
            <td>{{ $pemain->nama_pemain }}</td>
            <td>{{ $pemain->no_punggung }}</td>
            <td>{{ $pemain->posisi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
