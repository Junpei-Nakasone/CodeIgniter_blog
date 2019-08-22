<h2><?php echo $title; ?></h2>

<?php foreach ($posts as $post) : ?>
<h2><?php echo $post['title']; ?></h2>
<h3><?php echo $post['body']; ?></h3>
<p><?php echo $post['created_at']; ?></p>
<a class="btn btn-primary" href="<?php echo base_url('/posts/view/'.$post['id']); ?>">Read more</a>
<?php endforeach; ?>
