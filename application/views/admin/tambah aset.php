<div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Asset</h2>
                <div class="breadcrumb-wrapper col-12">
                  <!--<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Home</a>
                    </li>
                    <li class="breadcrumb-item active">Table
                    </li>
                  </ol>-->
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
                <a href="<?= site_url('dashboard/tambah_kategori/'); ?>" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button">Tambah Kategori</a>
            </div>
          </div> -->
        </div>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Asset</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="<?=base_url('aset/save_aset/')?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Asset</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Nama Aset" name="nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first">Jenis Asset</label>
                                            <select name="jenis" id="first" class="form-control">
                                                <option value="fixed">Fixed Asset</option>
                                                <option value="license">License</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tanggal Masuk</label>
                                            <input type="date" id="last-name-column" class="form-control" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kategori">Kategori</label>
                                            <select class="form-control" name="kategori" id="kategori">
                                            <?php foreach ($kategori as $key) {?>
                                                <option value="<?=$key->id_kategori?>"><?=$key->kategori?></option>    
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nilai">Nilai (Rp)</label>
                                            <input type="number" min="3000000" id="nilai" class="form-control" name="nilai" placeholder="ex 100000000">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Departemen">Departemen</label>
                                            <select class="form-control" name="departemen" id="Departemen">
                                            <?php foreach ($departemen as $key) {?>
                                                <option value="<?=$key->id_departemen?>"><?=$key->departemen?></option>    
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="lokasi">Lokasi</label>
                                            <select class="form-control" name="lokasi" id="lokasi">
                                            <?php foreach ($lokasi as $key) {?>
                                                <option value="<?=$key->id_lokasi?>"><?=$key->lokasi?></option>    
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pj">Penanggung Jawab</label>
                                            <select class="form-control" name="pj" id="pj">
                                                <?php foreach ($pegawai as $key) {?>
                                                <option value="<?=$key->id_pegawai?>"><?=$key->nama?></option>    
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kondisi">Kondisi Aset</label>
                                            <select class="form-control" name="kondisi" id="kondisi">
                                                <option value="Bagus">Bagus</option>
                                                <option value="Rusak">Rusak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="depresiasi">Depresiasi</label>
                                            <input type="number" min="0" id="depresiasi" name="depresiasi" class="form-control" placeholder="dalam persen (%) pertahun ex: 10">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="maintenance">Periode Maintenance</label>
                                            <select class="form-control" name="maintenance" id="maintenance">
                                                <option value="7">1 Minggu</option>
                                                <option value="14">2 Minggu</option>
                                                <option value="30">1 Bulan</option>
                                                <option value="90">3 Bulan</option>
                                                <option value="180">6 Bulan</option>
                                                <option value="365">1 Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jumlah">Jumlah</label>
                                            <input min="1" type="number" name="jumlah" id="jumlah" class="form-control" value="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="dokumen">Dokumen Aset (pdf/png/jpg)</label>
                                            <input type="file" name="dokumen" id="dokumen" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="dokumen">Deskripsi/Keterangan</label>
                                            <textarea class="form-control" name="deskripsi"></textarea>
                                        </div>
                                    </div>
                  <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>