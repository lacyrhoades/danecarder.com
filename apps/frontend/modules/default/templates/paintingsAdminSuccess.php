<?php use_stylesheet('admin.css') ?>

<h1>Painting CMS</h1>

<ul class="instructions">
  <li>Click and drag to reorder.<li>
  <li>Double click to edit.<li>
  <li><a href="/logout">Click here</a> to log out.<li>
</ul>

<?php echo editable_content_list(
  'ul',
  $paintings,
  array('with_new' => true, 'class' => 'paintings', 'sortable' => true),
  'li',
  array('title', 'medium', 'dimensions', 'year', 'thumbnail', 'image'),
  array('class' => 'header','partial'=>'default/paintingShow')
) ?>
