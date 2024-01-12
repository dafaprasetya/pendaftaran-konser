<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Konser</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php $this->load->view('snippets/navbar') ?>
    <div class="container mt-3">
        <h3>Daftar konser</h3>
        <hr>
        <div class="row">
            <?php foreach ($konser->result() as $konser) {?>
                <div class="col-sm-3 d-flex justify-content-center mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo base_url() ?><?php echo $konser->benner ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $konser->nama_konser ?></h5>
                            <p class="card-text"><?php echo substr($konser->keterangan, 0, 100) ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-6">Platinum</div>
                                    <div class="col-sm-6"><?php echo $konser->platinum ?></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-6">Silver</div>
                                    <div class="col-sm-6"><?php echo $konser->silver ?></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-6">Bronze</div>
                                    <div class="col-sm-6"><?php echo $konser->bronze ?></div>
                                </div>
                            </li>
                            
                        </ul>
                        <div class="card-body">
                            <a href="<?php echo base_url() ?>home/konser/<?php echo $konser->id ?>" class="btn btn-outline-primary">Daftar</a>
                    </div>
                    </div>    
                </div>
            <?php } ?>
            
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/popper/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>