@extends('layout')

@section('content')
    @php
        $nama_level = auth()->user()->level->nama_level;
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Surat Keluar</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button onclick="addSuratKeluar('{{ route('surat-keluar.store') }}')"
                            class="btn btn-sm btn-success">
                            Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="table2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Penerima</th>
                                    <th>Waktu</th>
                                    <th>Tempat</th>
                                    <th>Perihal</th>
                                    <th>Pengesah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($surat_keluar as $item)
                                    <tr>
                                        <td>{{ $item->no_surat }}</td>
                                        <td>{{ $item->nama_penerima }}</td>
                                        <td>{{ $item->waktu }}</td>
                                        <td>{{ $item->tempat }}</td>
                                        <td>{{ $item->perihal }}</td>
                                        <td>{{ $item->pengesah->nama_pengesah }}</td>
                                        <td>
                                            {{-- <a href="" class="btn btn-default btn-sm d-inline-block"><i
                                                    class="fas fa-list"></i></a> --}}
                                            <button
                                                onclick="editSuratKeluar('{{ route('surat-keluar.update', $item->id_surat_keluar) }}')"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            <form id="hapus-surat-keluar{{ $item->id_surat_keluar }}"
                                                action="{{ route('surat-keluar.destroy', $item->id_surat_keluar) }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger border-0 delete-btn"
                                                    onclick="deleteSuratKeluar({{ $item->id_surat_keluar }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @includeIf('surat_keluar.form-surat-keluar')
@endsection

@section('script')
    <script>
        function addSuratKeluar(url) {
            $('#modal-surat-keluar').modal('show');
            $('#modal-surat-keluar .modal-title').text('Tambah Surat Keluar');

            $('#modal-surat-keluar form')[0].reset();
            $('#modal-surat-keluar form').attr('action', url);
            $('#modal-surat-keluar [name=_method]').val('post');
        }

        function editSuratKeluar(url) {
            $('#modal-surat-keluar').modal('show');
            $('#modal-surat-keluar .modal-title').text('Edit Surat Keluar');

            $('#modal-surat-keluar form')[0].reset();
            $('#modal-surat-keluar form').attr('action', url);
            $('#modal-surat-keluar [name=_method]').val('put');

            $.get(url)
                .done((response) => {
                    $('#modal-surat-keluar [name=no_surat]').val(response.no_surat);
                    $('#modal-surat-keluar [name=nama_pengirim]').val(response.nama_pengirim);
                    $('#modal-surat-keluar [name=waktu]').val(response.waktu);
                    $('#modal-surat-keluar [name=lampiran]').val(response.lampiran);
                    $('#modal-surat-keluar [name=perihal]').val(response.perihal);
                    $('#modal-surat-keluar [name=nama_penerima]').val(response.nama_penerima);
                    $('#modal-surat-keluar [name=isi_surat]').val(response.isi_surat);
                    $('#modal-surat-keluar [name=id_penerbit]').val(response.id_penerbit);
                    $('#modal-surat-keluar [name=tempat]').val(response.tempat);
                    $('#modal-surat-keluar [name=id_pengesah]').val(response.id_pengesah);
                    $('#modal-surat-keluar [name=tembusan]').val(response.tembusan);
                })
        }

        function deleteSuratKeluar(id) {
            event.preventDefault();
            Swal.fire({
                title: 'Yakin?',
                text: "Hapus data ini",
                icon: 'warning',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('hapus-surat-keluar' + id).submit();
                    Swal.fire(
                        'Terhapus!',
                        'Data berhasil terhapus',
                        'success'
                    )
                }
            })
        }

        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            @if (Session::has('sukses-tambah'))
                Toast.fire({
                    icon: 'success',
                    title: '{{ Session::get('sukses-tambah') }}'
                })
            @endif
            @if (Session::has('sukses-ubah'))
                Toast.fire({
                    icon: 'success',
                    title: '{{ Session::get('sukses-ubah') }}'
                })
            @endif
        });
    </script>
@endsection
