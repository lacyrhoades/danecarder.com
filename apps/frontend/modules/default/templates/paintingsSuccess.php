
<script type="text/javascript">

  // nasty javascript, works for now

function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
    document.getElementById("start").value = idx;
};

detail_url = '<?php echo url_for('details') ?>';

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        start: 1,
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
      $.get(detail_url,{
          id: $(this).attr('id'),
          attr: 'Title'
        },
        function (data){
          $('p.title').html(data);
        });
        
      $.get(detail_url,{
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
        <br />
        <br />
        <p class="title"><?php echo $painting->title ?></p>
        <p class="art-details">
          <?php echo $painting->dimensions ?><br/>
          <?php echo $painting->medium ?><br/>
          <?php echo $painting->year ?>
        </p>
      </td>
      <td align="center"><span class="art"><img id="mainArtwork" src="/uploads/<?php echo $painting->image ?>" alt="art" border="0" /></span></td>
    </tr>
    <tr height="70">
      <td width="225"></td>
      <td align="center" valign="top">
        <div class="jcarousel-container-horizontal">
          <ul id="mycarousel"  class="jcarousel-skin-ie7">
          <?php foreach($paintings as $p): ?>
            <li style="float: left"><a id="<?php echo $p->id ?>" rel="/uploads/<?php echo $p->image ?>" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/<?php echo $p->thumbnail ?>" alt="Prisoners Under Guard" width="40" height="40"/></a></li>
          <?php endforeach ?>
          </ul>
        </div>
      </td>
    </tr>
  </table>

<?php include_partial('default/footer') ?>