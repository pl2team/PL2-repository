<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <title>Regisztráció</title>
    </head>
    <body class="regbody">
        <div  class="container h-100">
            <div class="d-flex justify-content-center h-100">
            <div  style="margin-top:20%;margin-bottom:20%; width:60%">
                <div class=" regform ">
                    <h1 style="padding: 0 !important" class="title">Regisztráció</h1>
                         <?php echo form_open('users/registration');?>
                            <div>                   
                                <div class="form-group">
                                    <label>Teljes neved:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Név megadása.">
                                    <label>Felhasználónév:</label>
                                    <input type="text" class="form-control" name="username" placeholder="Felhasználónév megadása.">
                                    <label>E-mail: </label>
                                    <input type="email" class="form-control" name="email" placeholder="E-mail cím megadása">
                                    <label>Jelszó:</label>
                                    <input type="password" class="form-control" name="password" placeholder=" Jelszó megadása.">
                                    <label>Jelszó megerősítése:</label>
                                    <input type="password" class="form-control" name="password2"placeholder="Jelszó megadása."> 
                                    <br>
                                    <div style="color:red"><?php echo validation_errors();?></div>
                                    <button type="submit" class ="btn btn-primary block ">Regisztráció</button>
                                </div>
                            </div>
                    <?php echo form_close();?>
                </div>
                </div>
            </div>                        
        </div>
    </body>
</html>