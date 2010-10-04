<?php use_helper('Javascript') ?>

<script type="text/javascript">
function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
    document.getElementById("start").value = idx;
};


jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        start: <?php echo $start ?>,
      	itemFirstInCallback:  mycarousel_itemFirstInCallback
    });
});

function get_link(id)
{
  var painting = '/paintings?id='+id+'&start='+document.getElementById('start').value
  window.location = painting;
}
</script>
<table width="1000" border="0" cellspacing="0" cellpadding="0" height="600">
  <tr height="500" >
  <td width="225"valign="top" class="details"><p><a href="/home"><img src="/images/danecarder.gif" alt="Dane Carder" width="175" height="34" border="0" /></a></p>
  <br /><br />
      <p class="title"><?php echo $currentPainting->getTitle() ?></p>
      <p><?php echo $currentPainting->getDimensions() ?><br/>
        <?php echo $currentPainting->getMedium() ?><br/>
    <?php echo $currentPainting->getYear() ?></p></td>
    <td align="center"><span class="art"><img src="/uploads/<?php echo $currentPainting->getImage() ?>" alt="art" border="0" /></span></td>
  </tr>
  <tr height="70">
    <td width="225"></td>
	<td align="center" valign="top">
	<div class="jcarousel-container-horizontal">
	<ul id="mycarousel"  class="jcarousel-skin-ie7">
<?php $i = 1 ?>
<form name="myForm">
<input type="hidden" name="start" id="start" value="">
</form>
	<?php foreach ($paintings as $painting): ?>
		<li><a id="<?php echo $painting->getId() ?>" href="javascript:get_link(<?php echo $painting->getId() ?>)"class="navthumb" ><img src="/uploads/thumbnails/<?php echo $painting->getThumbnail() ?>" alt="<?php echo $painting->getTitle() ?>" width="40" height="40" border="<?php echo ($current_id == $painting->getId())? 3 : 0 ?>" /></a></li>
		<?php $i++ ?>
	<?php endforeach; ?>
	</ul>
	</div>
						   
   
  </td>
</tr>
</table>
