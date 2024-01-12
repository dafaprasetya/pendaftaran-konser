<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah kamera</title>
    <?php $this->load->view('admin/snippets/style') ?>
</head>
<body id="page-top">
    <div id="wrapper">

        <?php $this->load->view('admin/snippets/sidebar') ?>
        <div id="content-wrapper">
            <?php $this->load->view('admin/snippets/topbar') ?>
            <div class="container-fluid">
                <!-- TOTAL CAMERA -->
                <?php $this->load->view('admin/snippets/konser') ?>
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Konser</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?php echo base_url() ?>admin/editkonser/<?php echo $konser->id ?>" method="post" enctype="multipart/form-data">
                                    <table class="table table-borderless center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th><label for="nama" class="form-label">Nama Konser</label></th>
                                                <th>
                                                    <input placeholder="Masukan nama konser" value="<?php echo $konser->nama_konser ?>" name="nama" id="nama" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="tanggal" class="form-label">Tanggal Konser</label></th>
                                                <th>
                                                    <input placeholder="Masukan tanggal konser" value="<?php echo $konser->tanggal_konser ?>" name="tanggal" id="tanggal" type="date" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="nama" class="form-label">Lokasi Konser</label></th>
                                                <th>
                                                    <input placeholder="Masukan nama konser" value="<?php echo $konser->lokasi ?>" name="lokasi" id="lokasi" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="platinum" class="form-label">Harga tiket platinum</label></th>
                                                <th>
                                                    <input placeholder="Masukan harga tiket" value="<?php echo $konser->platinum ?>" name="platinum" id="platinum" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                                <th>
                                                    <input placeholder="Masukan quantity" value="<?php echo $konser->qt_platinum ?>" name="qt_platinum" id="qt_platinum" type="number" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="silver" class="form-label">Harga tiket silver</label></th>
                                                <th>
                                                    <input placeholder="Masukan harga tiket" value="<?php echo $konser->silver ?>" name="silver" id="silver" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                                <th>
                                                    <input placeholder="Masukan quantity" value="<?php echo $konser->qt_silver ?>" name="qt_silver" id="qt_silver" type="number" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="silver" class="form-label">Harga tiket bronze</label></th>
                                                <th>
                                                    <input placeholder="Masukan harga tiket" value="<?php echo $konser->bronze ?>" name="bronze" id="bronze" type="text" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                                <th>
                                                    <input placeholder="Masukan quantity" value="<?php echo $konser->qt_bronze ?>" name="qt_bronze" id="bronze" type="number" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th><label for="silver" class="form-label">Gambar</label></th>
                                                <th>
                                                    <input placeholder="Masukan harga tiket" value="<?php echo $konser->benner ?>" name="gambar" id="bronze" type="file" class="form-control border-top-0 border-right-0 border-left-0">
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead >
                                            <tr>
                                                <th><label for="keterangan" class="form-label">Keterangan</label></th>
                                                <th>
                                                    <textarea name="keterangan" placeholder="Masukan keterangan kamera" id="keterangan" cols="10" rows="2" class="form-control"><?php echo $konser->keterangan ?></textarea>
                                                </th>
                                            </tr>
                                        </thead>                    
                                    </table>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('admin/snippets/script') ?>


</body>
</html>