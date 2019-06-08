<div class="coursebody">
<div class="container h-100">
    <div class="d-flex justify-content-center h-70">
        <div style="border-radius: 15px; padding:15px; margin-top:10px; width:100%;  background-color: rgba(255, 255, 255, 0.5);">
<br><h2><?=$title;?></h2>
<br>
<?php echo form_open('pages/create'); ?>
  <div  class="form-group">
    <label>Tananyag neve</label>
    <input type="text" class="form-control" name="title" placeholder="Add meg a tananyag nevét">
  </div>
<div class="form-group">
    <label>Tantárgy</label>
    <select name="slug" class="form-control">
        <?php foreach ($courses as $course):?>
        <option value="<?php  echo $course->IdTantargyak;?>"><?php echo $course->Megnevezes;?></option>
        <?php endforeach;?>
    </select>
</div>
  <div class="form-group">
      <label>Tananyag tartalma</label>
      <textarea style="min-height: 200px;" class="form-control" name="body"></textarea>
  </div>
<button type="submit" class="btn btn-primary">Létrehozás</button>
<?php echo form_close();?>
<?php echo '<small class="validation-error">'.validation_errors()."</small>";?>
        </div>
    </div>
</div>
</div>