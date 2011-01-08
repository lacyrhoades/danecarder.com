    
<script type="text/javascript">
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
  <br /><br />
      <p class="title">Prisoners Under Guard</p>
      <p class="art-details">9"x12"<br/>
        acrylic on canvas<br/>
    2007</p></td>
    <td align="center"><span class="art"><img id="mainArtwork" src="/uploads/e71fdeb83aeebba35e40dc2ce1db3df04f4011df.jpg" alt="art" border="0" /></span></td>
  </tr>
  <tr height="70">
    <td width="225"></td>
	<td align="center" valign="top">
	<div class="jcarousel-container-horizontal">
	<ul id="mycarousel"  class="jcarousel-skin-ie7">
<form name="myForm">
<input type="hidden" name="start" id="start" value="">
</form>
			<li style="float: left"><a id="16" rel="/uploads/e71fdeb83aeebba35e40dc2ce1db3df04f4011df.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/f0790666360a120d4e8f2f4750d031ef65cae148.jpg" alt="Prisoners Under Guard" width="40" height="40" class="selected" /></a></li>
					<li style="float: left"><a id="18" rel="/uploads/dc86d2a721e100659d2424f9c1d6e03ee4ca8b68.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/7b7e9b2dadec0d53d082dd8a95f64decca9a98b1.jpg" alt="Soldier Boy" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="10" rel="/uploads/3cde85970c967143078dc594b4615fa824fb05da.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/0290d1ecfb2e5b67c03e0db0a95afa23d012758a.jpg" alt="In The Midst" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="34" rel="/uploads/273be1575c9300308c34b25b2962adfbe53eb85f.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/14748def03896515cc0b18776f8dd6b56327527c.jpg" alt="Prepped" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="27" rel="/uploads/2b19756a8cf2c2bafbe109d3ab6654995bdc4c5d.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/19bb90615f6b468b4fcbab9c119789be496082e3.jpg" alt="Wounded no. 000192 " width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="7" rel="/uploads/9a7dcd594b8c8cfbcea732b065f0f3fafc20cbb9.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/913c68bd66318066bc2ad2137b5953299eb1be51.jpg" alt="For The Cause" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="25" rel="/uploads/a545c8ad756086d625f71a77d1e451aaeb111949.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/4787fccaaa94256ab081b05ff533de9bd1e4ccc7.jpg" alt="Willing" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="6" rel="/uploads/84ced4de292b6ba2db7f2e80a846fce56a4b303b.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/5d3357dbd502daeebd0ba466131c9fe43c3906af.jpg" alt="Captured" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="12" rel="/uploads/804d29d758d895fdf6facbc55595e57eb3fbeb37.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/c846b9e61eb100c32229a616c127b34a85523d00.jpg" alt="Life Goes On" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="8" rel="/uploads/9366873c0821cda285ed43d873448e79c8672653.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/7600868b1d809dd251387aa310c9cf853d2586bf.jpg" alt="Friend Or Foe" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="3" rel="/uploads/5c49a5ca3b8efbf6cd67a3aeb68b60d3a5fa2546.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/342130f297736c4848df99c7cc75bc10b0c48072.jpg" alt="Battle For Nashville II" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="33" rel="/uploads/757845f40733ad8eda86f9be654c97561fa50c1d.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/b0107c45620edc6c4c631b7e1f087974a4f4c0d8.jpg" alt="Respite" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="31" rel="/uploads/f3cbaf86667166f43505c1d66934d5ca7cd7a53b.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/a1a0566d2e90b56a2968405897db0d544d8105a3.jpg" alt="Wounded no. 000347" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="21" rel="/uploads/ce7b0cf19b39bc35616fa3cd0f52cb5c883d12c1.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/67dced63d7bc8212cb1e587d73fc643e8afa7cf0.jpg" alt="Them Or Us" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="15" rel="/uploads/9c7f66366a38c821cc5e8b1b868cd083b9d5535c.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/732e76bb67ba2c649984575619ccc333e4f78518.jpg" alt="Nurse" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="32" rel="/uploads/4bc3500e4dbc44a7fd355c92980fd16cc5b64823.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/197702482af1397cdd3a15b22621f4d833725a64.jpg" alt="Wounded no. 000417" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="13" rel="/uploads/0ba7292455b0fd97196068adcfc0afda5024bae5.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/738adbabab1ae6dc902948c0d671ae889d9e25cc.jpg" alt="Medicine" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="14" rel="/uploads/9ed0b01d12eb6dea6fc52f7844a5806ce7b8d65a.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/8744a7b0907e98303ee59cd96e792e9df396b545.jpg" alt="Not Done Yet" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="28" rel="/uploads/9c54a230022f50d5f5604f18d35ee8753c539f17.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/dc77fca112ae70056af25aabe0e0a5119fc8c304.jpg" alt="Wounded no. 000203" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="20" rel="/uploads/76d32ab88947e72919f4027d39320c8b1def5870.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/99fbef28b449498ed1374d8d42e45e787b7139c9.jpg" alt="St." width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="22" rel="/uploads/55b6ac8d973d469d60c40272dade19f14eab5739.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/b10d72ff4c2b94a5e011fd8c80f48f510ef02d60.jpg" alt="Under The Flag" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="35" rel="/uploads/67766fada81740b744c6164cebdefb5759f60cb7.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/8da5785699930a71ee399edf26e3a1dff8861a5b.jpg" alt="Three Fighting For" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="4" rel="/uploads/240e5843f9cf452f7f2f238bbd3a60038835891f.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/be3a24db3ce96ddf7a81d7606f354bdc55dde621.jpg" alt="Camp" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="19" rel="/uploads/18ab42c8f68c2b3507bf39a3cd718fb9851a72b1.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/ab7f7939b8821041d266a9209276887d435f2a9c.jpg" alt="Spotters" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="11" rel="/uploads/20c91a794cad1da4c0454729ef5b11d596a25097.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/d0d85fc8c6e7795bbb30993a0f93da56aad157b1.jpg" alt="Jeb" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="17" rel="/uploads/b7c4e9521833a975c58f125722a9d8ee96c5d3f9.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/be0ec46c6fe68c3d2006c3c241b9bfe592c9d90d.jpg" alt="Ready" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="5" rel="/uploads/c88f52e63de31b2ff5645ce86dc4678d6d785d2a.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/734e2a2ecf2da5201b6a94234a19d715368e4ab0.jpg" alt="Cannonman" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="23" rel="/uploads/5697dd10f478ce4f881edec202ae7c28cccf826b.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/4e2fdb004129875bce9c1c64c6765451db58550b.jpg" alt="Us Or Them" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="30" rel="/uploads/7cbd492b757087534a659ae05f63c923dc5e6cd7.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/44d3b7d4fbd2201e3f8819b19665b7851ba521fd.jpg" alt="Wounded no. 000339" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="9" rel="/uploads/b4a559d5e2e015a0d75c5fd7e8b66b8cc45aecc7.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/3dd77b1e5f083d65c949d7e0a19b5b2619496e26.jpg" alt="Ghost Of Him" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="26" rel="/uploads/97dd4d3aca21b9e0d7e7e7c9adc3ea3191ac8fde.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/6dada49a10002f998cf3b8b42bb750b2f15edd14.jpg" alt="With Their Swords" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="1" rel="/uploads/7be2af776d5d161615786c450e40548a5084d292.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/36b4e4e43d4ac5a606da853cb83d4755efdac02f.jpg" alt="A Leader And Others" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="36" rel="/uploads/b9901f313777397e7cda8a9f028f177bbff63846.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/7dec52b7a879a4b18b8e70e255cd2f3f1d3bbdd5.jpg" alt="Two For Them" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="29" rel="/uploads/e84893fc4dbc7abb97d04101dfc829a8a659f2db.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/f55d95ec6519729301a93280d67b452da439abc7.jpg" alt="Wounded no. 000262-2" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="24" rel="/uploads/38155a2777000c0bed23e17ccca340817655f399.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/1b1a8773fa4da224a5de6101173266893192ddd5.jpg" alt="Which Side Are They On?" width="40" height="40" class="" /></a></li>
					<li style="float: left"><a id="2" rel="/uploads/21aefde911fc8631ab5d88b2b8efee7a5e4bb085.jpg" href="#" onclick="return false;" class="navthumb" ><img src="/uploads/thumbnails/35c1a8d50d40fec5a188f868a2e6f08a9ebd93af.jpg" alt="Battle For Nashville" width="40" height="40" class="" /></a></li>
				</ul>
	</div>
						   
   
  </td>
</tr>
</table>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr height="30">
    <td width="225"></td>
    <td align="center" valign="top">  <p class="nav">
	<a href="/bio" class="nav" >bio</a> &nbsp;&nbsp;  | &nbsp; 
	<a href="/paintings" class="nav">paintings</a> &nbsp;  | &nbsp; 
	<a href="http://threesquaredisnine.blogspot.com/" target="_blank" class="nav">threesquared</a> &nbsp;  |  &nbsp; 
	<a href="/contact" class="nav">contact</a></p></td>
  </tr>
  </table>
