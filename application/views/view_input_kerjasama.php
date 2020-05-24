<div class="panel panel-default">
    <div class="panel-heading">
        <h2><?= $this->uri->segment(2) == 'edit' ? 'Edit Kerjasama' : 'Input kerjasama' ?></h2>
        <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
    </div>
    <div class="panel-body">
        <!-- Form Mitra -->
        <form method="POST" action="<?php echo  $this->uri->segment(2) == 'edit' ? site_url('c_input_kerjasama/update/' . $id) : site_url('c_input_kerjasama/insert_data_kerjasama'); ?>">
            <div class="form-group row">
                <label for="kodekerjasama" class="col-sm-2 col-form-label">
                 Kode Kerjasama
                </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  id="kodekerjasama" name="kodekerjasama" placeholder="kode kerjasama" disabled="">
                </div>
            </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">
                    Deskripsi
                </label>
                <div class="col-sm-10">
                <textarea id="w3mission" rows="4" cols="50" id="deskripsi" name="deskripsi"><?php echo @$user->deskripsi;?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggalmulai" class="col-sm-2 col-form-label">
                    Tanggal Mulai
                </label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggalmulai" name="tanggalmulai" value="<?php echo @$user->tanggal_mulai;?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggalselesai" class="col-sm-2 col-form-label">
                    Tanggal Selesai
                </label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggalselesai" name="tanggalselesai" value="<?php echo @$user->tanggal_selesai;?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="namalembaga" class="col-sm-2 col-form-label">
                    Nama Lembaga
                </label>
                <div class="col-sm-10">
                  <select class="form-control" name="namalembaga">
                        <option <?php if(@$user->nama_lembaga == "Lembaga 1"){echo "selected";}?> value="Lembaga 1"> Lembaga 1 </option>
                        <option <?php if(@$user->nama_lembaga == "Lembaga 2"){echo "selected";}?> value="Lembaga 2"> Lembaga 2 </option>
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="perwakilanlembaga" class="col-sm-2 col-form-label">
                    Perwakilan Lembaga
                </label>
                <div class="col-sm-10">
                  <select class="form-control" name="perwakilanlembaga">
                        <option  selected="true" value="Pak A"> Pak A </option>
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uploadberkas" class="col-sm-2 col-form-label">
                    Upload Berkas
                </label>
                <div class="col-sm-4">
                  <input type="file" class="form-control" id="uploadberkas" name="uploadberkas">
                </div>
            </div>
                <div class="form-group row">
                <label for="jenisberkas" class="col-sm-2 col-form-label">
                    Jenis Berkas
                </label>
                <div class="col-sm-10">
                  <select class="form-control" name="jenisberkas">
                        <option  selected="true" value='mou'> Mou </option>
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="statuskerjasama" class="col-sm-2 col-form-label">
                    Status Kerjasama
                </label>
                <div class="col-sm-10">
                  <select class="form-control" name="statuskerjasama">
                        <option selected="true" value='baru'> Baru </option>
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-11">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="pull-right">
                        <button class="btn">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Form -->
    </div>
</div>