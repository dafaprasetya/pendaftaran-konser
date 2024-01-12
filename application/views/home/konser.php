<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $konser->nama_konser ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
        <script>
            $(document).ready(function(){
                $("#exampleModal").focus();
            });
        </script>
</head>
<body>
    <?php $this->load->view('snippets/navbar') ?>
    <?php if ($this->session->flashdata('failed')) {?>
        <div class="container-fluid bg-danger text-light d-flex justify-content-center">Error silahkan cek kelengkapan data</div>
    <?php } ?>
   
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url() ?><?php echo $konser->benner ?>" alt="" srcset="" width="500px">
            </div>
            <div class="col-md-6">
                <h3><?php echo $konser->nama_konser ?></h3>
                <div class="table-responsive">
                    <?php if ($this->session->userdata('terdaftar')) {?>
                        
                        <div class="container-fluid mt-5">
                            
                            <div class="container d-flex justify-content-center"><h3>Berhasil terdaftar <?php echo $this->session->userdata('terdaftar') ?></h3></div>
                            <div class="row mt-5">
                                <div class="col-sm-12 d-flex justify-content-center">
                                    <a href="<?php echo base_url() ?>/home/tiket/<?php echo $this->session->userdata('terdaftar') ?>" class="btn btn-lg btn-primary" style="width: 100%;">Cetak tiket</a>
                                </div>
                                
                            </div>
                        </div>
                    <?php }else { ?>
                        <form action="<?php echo base_url() ?>home/konser/<?php echo $konser->id ?>" method="post" enctype="multipart/form-data">
                                <table class="table table-borderless center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th><label for="nama" class="form-label">Nama</label></th>
                                            <th>
                                                <input placeholder="Masukan nama anda" name="nama" id="nama" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                            </th>
                                        </tr>
                                    </thead>              
                                    <thead>
                                        <tr>
                                            <th><label for="email" class="form-label">Email</label></th>
                                            <th>
                                                <input placeholder="Masukan Email" name="email" id="email" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                            </th>
                                        </tr>
                                    </thead>              
                                    <thead>
                                        <tr>
                                            <th><label for="no_telp" class="form-label">Nomor Telepon</label></th>
                                            <th>
                                                <input placeholder="Masukan Nomor telpon" name="no_telp" id="no_telp" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                            </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th><label for="cat" class="form-label">Category</label></th>
                                            <th>
                                                <select name="cat" id="cat" class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih category</option>
                                                    <option value="platinum">Platinum - <?php echo $konser->platinum ?></option>
                                                    <option value="silver">Silver - <?php echo $konser->silver ?></option>
                                                    <option value="bronze">Bronze - <?php echo $konser->bronze ?></option>
                                                </select>
                                            </th>
                                        </tr>
                                    </thead>
    
                                </table>
                            <button class="btn btn-primary" type="submit">Daftar</button>
                        </form>
                    <?php } ?>

                </div>
            </div>
            <div class="col-md-12">
                <p><?php echo $konser->keterangan ?></p>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/popper/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>