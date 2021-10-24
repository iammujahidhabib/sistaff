<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Maintenance</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="<?=base_url('maintenance/save_maintenance/')?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                Nama Asset
                                            </div>
                                            <div class="col-6">
                                                <select name="aset" class="form-control">
                                                <?php foreach ($aset as $key): ?>
                                                    <option value="<?=$key->id_aset?>"><?=$key->nama_aset?></option>
                                                <?php endforeach ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                Tanggal Maintenance
                                            </div>
                                            <div class="col-6">
                                                <input type="date" name="tangal" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                Nama Vendor
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="vendor">
                                                    <option value="Asus Service Center">Asus Service Center</option>
                                                    <option value="Samsung Service Center">Samsung Service Center</option>
                                                    <option value="Bengkel Mobil Jaya">Bengkel Mobil Jaya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <div class="col-md-4">List barang</div>
                                            <div class="col-md-6"><textarea name="barang" class="form-control"></textarea></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                            <button class="btn btn-primary" type="submit">Sumbit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>