<div class="coursebody">

<a href="<?PHP echo base_url()?>Courses"><img class="brand_logo2" src="<?php echo base_url()?>/assets/images/cica2.png" class="cica_logo" alt="Logo"></a>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div style="margin-top:-5%;margin-bottom:20%; width:60%">
            <?php foreach ($studyMaterials as $studyMaterial) { ?>
            <a href="<?php echo base_url(); ?>studymaterials/lesson/<?php echo $studyMaterial['IdTananyag']; ?>">
                    <div class=" element_card ">
                        <h1 style="padding: 0 !important" class="title"><?php echo $studyMaterial['Megnevezes']; ?></h1>
                    </div>
               </a>
            <?php } ?>
        </div>
    </div>
</div>
</div>
