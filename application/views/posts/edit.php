<h2><?php echo $title; ?></h2>

  <?php echo form_open('posts/edit_conf') ?>
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" value="<?php echo $post['title']; ?>" name="title">
    </div>

    <div class="form-group">
      <label>Body:</label>
      <input type="text" class="form-control" value="<?php echo $post['body']; ?>" name="body">
    </div>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <button type="submit" class="btn btn-primary">OK</button>
    <a href="<?php echo base_url(); ?>posts" class="btn btn-info">Back</a>
  </form>
