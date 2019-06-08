<div class="coursebody">
<div class="container h-100">
    <div class="d-flex justify-content-center h-70">
        <div style="border-radius: 15px; text-align: center; padding:15px; margin-top:10px; width:100%;  background-color: rgba(255, 255, 255, 0.5)">
        
<?php foreach ($courses as $course):?> 
    <div style="float:left; width: 25%">
        <h1><?php echo $course['Megnevezes'];?></h1><br>;
    <?php foreach ($course['tantargyak'] as $tant):?> 
     
        <a style="color:blue" href="<?php echo base_url()?>studymaterials/modify/<?php echo $tant['IdTananyag'];?>"><h3><?php echo $tant['Megnevezes'];?></h3></a><br>
    <?php endforeach;?>
    </div>
    <?php endforeach;?>
            <div style="clear: both;"></div>
        
</div>
</div>
</div>
</div>