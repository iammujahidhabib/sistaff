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
                        <form class="form" method="post" enctype="multipart/form-data" action="<?=base_url('perusahaan/save_perusahaan/')?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Perusahaan</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Nama Perusahaan" name="nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kategori">Industri</label>
                                            <select id="kategori" required="" class="form-control" name="industri">
                                                <option value="" disabled="" selected="" >Silahkan Pilih</option>
                                                <option value="Berbasis Proyek">Berbasis Proyek</option>
                                                <option value="Engineering" >Engineering</option>
                                                <option value="Food and Beverage">Food and Beverage</option>
                                                <option value="Jasa Profesional" >Jasa Profesional</option>
                                                <option value="Keuangan" >Keuangan</option>
                                                <option value="Konstruksi" >Konstruksi</option>
                                                <option value="Logistik" >Logistik</option>
                                                <option value="Manufaktur" >Manufaktur</option>
                                                <option value="Pemerintahan" >Pemerintahan</option>
                                                <option value="Pendidikan" >Pendidikan</option>
                                                <option value="Pertambangan" >Pertambangan</option>
                                                <option value="Properti/Real Estate">Properti/Real Estate</option>
                                                <option value="Rental">Rental</option>
                                                <option value="Retail" >Retail</option>
                                                <option value="Trading/Grosir" >Trading/Grosir</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Departemen">Email</label>
                                            <input type="email" name="email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="lokasi">No Telpon</label>
                                            <input type="text" class="form-control" required="" name="notelpon" id="lokasi">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="lokasi2">FAX</label>
                                            <input type="text" class="form-control" name="fax" id="lokasi2">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kondisi">Alamat Perusahaan</label>
                                            <textarea class="form-control" name="alamat" id="kondisi"></textarea>
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