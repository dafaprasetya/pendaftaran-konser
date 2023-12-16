<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php $this->load->view('snippets/navbar') ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url() ?>auth/p_login">
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
        
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/popper/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>