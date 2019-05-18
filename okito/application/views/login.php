<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Bejelentkezés</title>
    </head>
    <body class="loginbody">
        <div  class="container h-100">
            <div class="d-flex justify-content-center h-100">
		<div class="user_card">
                    <div class="d-flex justify-content-center">
			<div class="brand_logo_container">
                            <img class="brand_logo" src="<?php echo base_url()?>/assets/images/cica.png" class="cica_logo" alt="Logo">
			</div>
                    </div>
                    <h1 class="title block">Bejelentkezés</h1>
                    <div class=" block form_container">
			<?php echo form_open('users/login')?>
                            <div class="input-group mb-3 ">
				<div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" name="username" class="form-control "  placeholder="Felhasználónév">
                            </div>
                            <div class="input-group mb-2 ">
				<div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
				</div>
				<input type="password" name="password" class="form-control"  placeholder="Jelszó">
                            </div>
                            <div class="form-group">
				<div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label">Emlékezz rám</label>
				</div>
                            </div>
			
                    </div>
                    <div style="color:red"><?php echo validation_errors();?></div>
                    <div class="d-flex justify-content-center mt-3 ">
			<button style="color:white;" type="submit" class="btn btn-primary btn-block">Bejelentkezés</button>
                    </div>
                    <?php echo form_close();?>
                    
                    <div class="mt-4">
			<div style="color:white"  class="d-flex justify-content-center ">
                            Nincs még felhasználói fiókod? <a style="color:#325D88;" href="<?php echo base_url()?>/registration" class="ml-2">Regisztrálj</a>
			</div>
			<div  class="d-flex justify-content-center ">
                            <a style="color:#325D88;" href="#">Elfelejtetted a jelszavad?</a>
			</div>
                        
                    </div>
		</div>
            </div>
	</div>
    </body>
</html>
