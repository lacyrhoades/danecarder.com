<h1>PaintingCMS List</h1>
<p>&nbsp;</p>
<table align="center" cellpadding="10" cellspacing="10" id="cms">
  <thead>
    <tr>
      <th><div align="left">Title<br />
        Medium<br/>
        Dimensions<br />
      Year</div></th>
      <!--<th>Description</th>
      <th>Category</th>
      <th>Subcategory</th>-->
      <th><div align="left">Thumbnail</div></th>
      <th><div align="left">Image</div></th>
      <th><div align="left">Created / <br />
      Updated</div></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($painting_list as $painting): ?>
    <tr>
      <td><a href="<?php echo url_for('paintingCMS/edit?id='.$painting->getId()) ?>"><?php echo $painting->getTitle() ?></a><br />
	  <?php echo $painting->getMedium() ?><br />
	  <?php echo $painting->getDimensions() ?><br />
	  <?php echo $painting->getYear() ?></td>
      <!--<td><?php /* echo $painting->getDescription() ?></td>
      <td><?php echo $painting->getCategory() ?></td>
      <td><?php echo $painting->getSubcategory() */ ?></td>-->
      <td><?php echo image_tag('/uploads/thumbnails/'.$painting->getThumbnail(), 'width=40') ?></td>
      <td><?php echo image_tag('/uploads/'.$painting->getImage(), 'width=100') ?></td>
      <td><?php echo $painting->getCreatedAt() ?><br />
		<?php echo $painting->getUpdatedAt() ?></td>
    </tr>
	<tr><td colspan="4"> <hr id="hr" /></td></tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <p><a href="<?php echo url_for('paintingCMS/new') ?>">New</a></p>
