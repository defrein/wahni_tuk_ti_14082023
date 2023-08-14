@extends('layout')

@section('content')
    @php
        $nama_level = auth()->user()->level->nama_level;
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Surat Masuk</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button onclick="addSuratMasuk('{{ route('surat-masuk.store') }}')" class="btn btn-sm btn-success">
                            Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="table2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Pengirim</th>
                                    <th>Waktu</th>
                                    <th>Tempat</th>
                                    <th>Lampiran</th>
                                    <th>Perihal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($surat_masuk as $item)
                                    <tr>
                                        <td>{{ $item->no_surat }}</td>
                                        <td>{{ $item->nama_pengirim }}</td>
                                        <td>{{ $item->waktu }}</td>
                                        <td>{{ $item->tempat }}</td>
                                        <td>{{ $item->lampiran }}</td>
                                        <td>{{ $item->perihal }}</td>
                                        <td>
                                            {{-- <a href="" class="btn btn-default btn-sm d-inline-block"><i
                                                    class="fas fa-list"></i></a> --}}
                                            <button
                                                onclick="editSuratMasuk('{{ route('surat-masuk.update', $item->id_surat_masuk) }}')"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            <form id="hapus-surat-masuk{{ $item->id_surat_masuk }}"
                                                action="{{ route('surat-masuk.destroy', $item->id_surat_masuk) }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger border-0 delete-btn"
                                                    onclick="deleteSuratMasuk({{ $item->id_surat_masuk }})">
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

    @includeIf('surat_masuk.form-surat-masuk')
@endsection

@section('script')
    <script>
        function addSuratMasuk(url) {
            $('#modal-surat-masuk').modal('show');
            $('#modal-surat-masuk .modal-title').text('Tambah Surat Masuk');

            $('#modal-surat-masuk form')[0].reset();
            $('#modal-surat-masuk form').attr('action', url);
            $('#modal-surat-masuk [name=_method]').val('post');
        }

        function editSuratMasuk(url) {
            $('#modal-surat-masuk').modal('show');
            $('#modal-surat-masuk .modal-title').text('Edit Surat Masuk');

            $('#modal-surat-masuk form')[0].reset();
            $('#modal-surat-masuk form').attr('action', url);
            $('#modal-surat-masuk [name=_method]').val('put');

            $.get(url)
                .done((response) => {
                    $('#modal-surat-masuk [name=no_surat]').val(response.no_surat);
                    $('#modal-surat-masuk [name=nama_pengirim]').val(response.nama_pengirim);
                    $('#modal-surat-masuk [name=waktu]').val(response.waktu);
                    $('#modal-surat-masuk [name=lampiran]').val(response.lampiran);
                    $('#modal-surat-masuk [name=perihal]').val(response.perihal);
                    $('#modal-surat-masuk [name=nama_penerima]').val(response.nama_penerima);
                    $('#modal-surat-masuk [name=isi_surat]').val(response.isi_surat);
                    $('#modal-surat-masuk [name=id_penerbit]').val(response.id_penerbit);
                    $('#modal-surat-masuk [name=tempat]').val(response.tempat);
                    $('#modal-surat-masuk [name=id_pengesah]').val(response.id_pengesah);
                    $('#modal-surat-masuk [name=tembusan]').val(response.tembusan);
                })
        }

        function deleteSuratMasuk(id) {
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
                    document.getElementById('hapus-surat-masuk' + id).submit();
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
