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
                    <h4 class="card-title">Tambah Contract</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <button onclick="tambah_asset()"> + Assetnya </button>
                        <form class="form" method="post" enctype="multipart/form-data" action="<?=base_url('contract/save_contract/')?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Perusahaan</label>
                                            <select name="perusahaan" class="form-control" id="first-name-column">
                                                <?php foreach ($perusahaan as $key ): ?>
                                                    <option value="<?=$key->id_perusahaan;?>"><?=$key->nama_perusahaan;?></option>
                                                <?php endforeach ?>
                                            </select>
                                <a href="<?=base_url()?>perusahaan/tambah_perusahaan/">Daftarkan perusahaan terlebih dahulu di Master Data Perusahaan!</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Departemen">Nilai Kontrak</label>
                                            <input type="number" name="nilai" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kategori">Tanggal Pinjam</label>
                                            <input type="date" name="pinjam" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kategori">Tanggal Selesai</label>
                                            <input type="date" name="selesai" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="lokasi">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" id="kondisi"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row" id="ol">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="lokasi">Aset yang akan Dipinjam</label>
                                            <select class="form-control" name="aset[]" id="lokasi">
                                                <!-- <option disabled=""></option> -->
                                                <?php foreach ($aset as $key ): ?>
                                                    <option value="<?=$key->id_aset?>"><?=$key->nama_aset?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kondisi">Kondisi Sebelum</label>
                                            <select class="form-control" name="kondisi[]" id="kondisi">
                                                    <option value="Baik">Baik</option>
                                                    <option value="Cukup Baik">Cukup Baik</option>
                                                    <option value="Rusak">Rusak</option>
                                            </select>
                                        </div>
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
<script type="text/javascript">
    function tambah_asset(){
            $("#ol").append("<div class='col-md-6 col-12'><div class='form-group'><label for='lokasi'>Aset yang akan Dipinjam</label><select class='form-control' name='aset[]' id='kondisi'><?php foreach ($aset as $key ): ?><option value='<?=$key->id_aset?>''><?=$key->nama_aset?></option><?php endforeach ?></select></div></div>"+'<div class="col-md-6 col-12"><div class="form-group"><label for="kondisi">Kondisi Sebelum</label><select class="form-control" name="kondisi[]" id="kondisi"><option value="Baik">Baik</option><option value="Cukup Baik">Cukup Baik</option><option value="Rusak">Rusak</option></select></div></div>').children(':last');
    };
</script>