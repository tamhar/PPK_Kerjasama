<div class="panel panel-default">
    <div class="panel-heading">
        
        <h2><?= $this->uri->segment(2) == 'edit' ? 'Edit Kerjasama' : 'Input kerjasama' ?></h2>
        <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
    </div>
    <div class="panel-body">
        <!-- Form Mitra -->
        <form method="POST" action="<?php echo  $this->uri->segment(2) == 'edit' ? site_url('c_update_kerjasama/update/' . $id) : site_url('c_input_kerjasama/insert_data_kerjasama'); ?>">
            <div class="form-group row">
                <label for="kodekerjasama" class="col-sm-2 col-form-label">
                 Kode Kerjasama
                </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  id="id_kerjasama" name="id_kerjasama" value="<?= $id ?>" disabled="">
                </div>
            </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">
                    Deskripsi
                </label>
                <div class="col-sm-10">
                <textarea id="w3mission" rows="4" cols="50" id="deskripsi_kerjasama" name="deskripsi_kerjasama"><?= $user[0]['DESKRIPSI_KERJASAMA'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggalmulai" class="col-sm-2 col-form-label">
                    Tanggal Mulai Kerjasama
                </label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggal_mulai_kerjasama" name="tanggal_mulai_kerjasama" value="<?= $user[0]['TANGGAL_MULAI_KERJASAMA'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggalselesai" class="col-sm-2 col-form-label">
                    Tanggal Selesai
                </label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggal_selesai_kerjasama" name="tanggal_selesai_kerjasama" value="<?= $user[0]['TANGGAL_SELESAI_KERJASAMA'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="namalembaga" class="col-sm-2 col-form-label">
                    Nama Lembaga
                </label>
                <div class="col-sm-10">
                  <select class="form-control" name="id_lembaga" id="id_lembaga">
                       <option selected="<?= $user[0]['ID_LEMBAGA']; ?>" value="<?= $user[0]['ID_LEMBAGA']; ?>"><?= $user[0]['NAMA_LEMBAGA']; ?></option>                    
                        <?php          
                            foreach($lembaga as $data){ // Lakukan looping pada variabel siswa dari controller           
                                echo "<option value='".$data->id_lembaga."'>".$data->nama_lembaga."</option>";          
                            }          
                            ?>        
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="perwakilanlembaga" class="col-sm-2 col-form-label">
                    Perwakilan Lembaga
                </label>
                <div class="col-sm-10">
                  <select class="form-control" name="perwakilanlembaga" id="perwakilanlembaga">
                         <option selected="<?= $user[0]['NAMA_PERWAKILAN_LEMBAGA']; ?>" value="<?= $user[0]['NAMA_PERWAKILAN_LEMBAGA']; ?>"><?= $user[0]['NAMA_PERWAKILAN_LEMBAGA']; ?></option>   

                    </select>
                </div>
            </div>
           <!--  <div class="form-group row">
                <label for="uploadberkas" class="col-sm-2 col-form-label">
                    Berkas mou
                </label>
                <div class="col-sm-4">
                  <input type="file" class="form-control" id="uploadberkas" name="uploadberkas">
                </div>
            </div> -->
            <div class="form-group row">
                <label for="uploadberkas" class="col-sm-2 col-form-label">
                    Berkas moa
                </label>
                <div class="col-sm-4">
                  <input type="file" class="form-control" id="uploadberkas" name="uploadberkas">
                </div>
            </div>
                
            <div class="form-group row">
                <label for="statuskerjasama" class="col-sm-2 col-form-label">
                    Status Kerjasama
                </label>
                <div class="col-sm-10">
                  <select class="form-control" name="statuskerjasama">
                        <option selected="true" value='Belum Berjalan'> Belum berjalan </option>
                        <option selected="true" value='Sedang Berjalan'> Sedang berjalan </option>
                        <option selected="true" value='Sudah Selesai'> Sudah selesai </option>
                        
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
<script>
        $('#id_lembaga').change(function(){ 
            var namalembaga = $(this).val();
            $.ajax({
                url : "<?php echo site_url('c_input_kerjasama/getperwakilan');?>",
                type : "POST",
                data : {namalembaga: namalembaga},
                async : true,
                dataType : 'json',
                success: function(data){

                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_perwakilan_lembaga+'>'+data[i].nama_perwakilan_lembaga+'</option>';
                    }
                    $('#perwakilanlembaga').html(html);

                },
                error: function(ts) { 
                    alert(ts.responseText) 
                }
            });  
        });
    </script>