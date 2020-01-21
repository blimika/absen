<div class="modal fade" id="TambahModal" tabindex="-1" role="dialog" aria-labelledby="TambahModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title" id="TambahModal">Tambah Mitra BPSNTB</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal m-t-20" action="{{route('pegawai.simpan')}}" method="POST">
                 @csrf
                 <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                 </div> 
                 <div class="form-group">
                    <label for="absen_id">Absen ID</label>
                    <input type="text" class="form-control" id="absen_id" name="absen_id" placeholder="Absen ID (samakan dengan di mesin)" required>
                 </div> 
                 <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select class="form-control" name="jk" required>
                        <option name=""></option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                 </div>              
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger waves-effect waves-light">Simpan</button>
                <button type="reset" class="btn btn-success waves-effect waves-light">Reset</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="EditModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title" id="EditModal">EDIT PEGAWAI BPSNTB</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal m-t-20" action="" method="POST">
                 @csrf
                 <input type="hidden" name="tamu_id" id="tamu_id" value="" />
                 <input type="hidden" name="edit_tamu" id="edit_tamu" value="0" />
                   
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger waves-effect waves-light">Simpan</button>
                <button type="reset" class="btn btn-success waves-effect waves-light">Reset</button>
            </div>
        </form>
        </div>
    </div>
</div>