
<div class="coursebody">
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div style="margin-top:20%;margin-bottom:20%; width:60%">
            <?php foreach ($studyMaterials as $studyMaterial) { ?>
                <a href="studyMaterial?id=<?php echo $studyMaterial->IdTananyag; ?>">
                    <div class=" element_card ">
                        <h1 style="padding: 0 !important" class="title"><?php echo $studyMaterial->Tartalom; ?></h1>
                    </div>
               </a>
            <?php } ?>
        </div>
    </div>
</div>
</div>
