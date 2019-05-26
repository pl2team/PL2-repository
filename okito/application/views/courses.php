<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title>Tantárgyak</title>
</head>
<body class="coursebody">
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div style="margin-top:20%;margin-bottom:20%; width:60%">
            <?php foreach ($courses as $course) { ?>
                <a href="course?id=<?php echo $course->IdTantargyak; ?>">
                    <div class=" element_card ">
                        <h1 style="padding: 0 !important" class="title"><?php echo $course->Megnevezes; ?></h1>
                        <div class="d-flex justify-content-center " style="color:#325D88;">
                            (<?php echo $course->Kategoria; ?>)
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>