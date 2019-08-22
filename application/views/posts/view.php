<h2><?php echo $post['title']; ?></h2>
<h3><?php echo $post['body']; ?></h3>

<br>
<p><?php echo $post['created_at']; ?></p>

<a class="btn btn-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['id']; ?>">Edit</a>
