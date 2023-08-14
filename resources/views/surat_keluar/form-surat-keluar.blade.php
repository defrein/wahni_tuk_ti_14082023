<div class="modal fade" id="modal-surat-keluar" tabindex="-1" role="dialog" aria-labelledby="modal-surat-keluar">
    <div class="modal-dialog" role="document">
        <form method="POST" action="">
            @csrf
            @method('post')
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="no_surat">No Surat</label>
                            <input type="text" class="form-control" name="no_surat" id="no_surat"
                                placeholder="Masukkan Nomor Surat" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengirim">Nama Pengirim</label>
                            <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim"
                                placeholder="Masukkan Nama Pengirim" required>
                        </div>

                        {{-- WAKTU --}}
                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type="date" class="form-control" name="waktu" id="waktu"
                                placeholder="Pilih Tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="lampiran">Lampiran</label>
                            <input type="text" class="form-control" name="lampiran" id="lampiran"
                                placeholder="Masukkan Lampiran" required>
                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input type="text" class="form-control" name="perihal" id="perihal"
                                placeholder="Masukkan Perihal" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_penerima">Nama Penerima</label>
                            <input type="text" class="form-control" name="nama_penerima" id="nama_penerima"
                                placeholder="Masukkan Nama Penerima" required>
                        </div>
                        <div class="form-group">
                            <label for="isi_surat">Isi Surat</label>
                            <input type="text" class="form-control" name="isi_surat" id="isi_surat"
                                placeholder="Masukkan Isi Surat" required>
                        </div>
                        <div class="form-group">
                            <label for="id_penerbit">Unit Penerbit</label>
                            <select class="form-control" name="id_penerbit" id="id_penerbit">
                                <option value="">Pilih Unit Penerbit</option>
                                @foreach ($penerbit as $key => $item)
                                    <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" class="form-control" name="tempat" id="tempat"
                                placeholder="Masukkan Tempat" required>
                        </div>
                        <div class="form-group">
                            <label for="id_pengesah">Pengesah</label>
                            <select class="form-control" name="id_pengesah" id="id_pengesah">
                                <option value="">Pilih Pengesah</option>
                                @foreach ($pengesah as $key => $item)
                                    <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tembusan">Tembusan</label>
                            <input type="text" class="form-control" name="tembusan" id="tembusan"
                                placeholder="Masukkan Tembusan" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
