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
    
    jQuery('a.navthumb').click(function () {
      var src = $(this).attr('rel');
      $('#mainArtwork').attr('src', '/images/ajax-loader.gif');
      $.get(src,function(){
        $('#mainArtwork').attr('src', src);
      });
      $('#mycarousel a img').removeClass('selected');
      $(this).find('img').addClass('selected');
      $.get('/paintings/get',{
          id: $(this).attr('id'),
          attr: 'Title'
        },
        function (data){
          $('p.title').html(data);
        });
        
      $.get('/paintings/get',{
          id: $(this).attr('id'),
          attr: 'details'
        },
        function (data){
          $('p.art-details').html(data);
        });
    });
});

</script>
<table width="1000" border="0" cellspacing="0" cellpadding="0" height="600">
  <tr height="500" >
  <td width="225"valign="top" class="details"><p><a href="/home"><img src="/images/danecarder.gif" alt="Dane Carder" width="175" height="34" border="0" /></a></p>
  <br /><br />
      <p class="title"><?php echo $currentPainting->getTitle() ?></p>
      <p class="art-details"><?php echo $currentPainting->getDimensions() ?><br/>
        <?php echo $currentPainting->getMedium() ?><br/>
    <?php echo $currentPainting->getYear() ?></p></td>
    <td align="center"><span class="art"><img id="mainArtwork" src="/uploads/<?php echo $currentPainting->getImage() ?>" alt="art" border="0" /></span></td>
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
		<li style="float: left"><a id="<?php echo $painting->getId() ?>" rel="/uploads/<?php echo $painting->getImage() ?>" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/<?php echo $painting->getThumbnail() ?>" alt="<?php echo $painting->getTitle() ?>" width="40" height="40" class="<?php echo ($current_id == $painting->getId())? 'selected' : '' ?>" /></a></li>
		<?php $i++ ?>
	<?php endforeach; ?>
	</ul>
	</div>
						   
   
  </td>
</tr>
</table>
