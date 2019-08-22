<h2><?php echo $title; ?></h2>

<?php echo form_open('posts/edit_comp') ?>
<input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" value="<?php echo $_POST['title'] ?>" name="title" readonly>
  </div>

  <div class="form-group">
    <label>Body:</label>
    <input type="text" class="form-control" value="<?php echo $_POST['body']; ?>" name="body" readonly>
  </div>
  <button type="submit" class="btn btn-primary">OK</button>
  <a href="<?php echo base_url(); ?>posts" class="btn btn-info">Back</a>
</form>
