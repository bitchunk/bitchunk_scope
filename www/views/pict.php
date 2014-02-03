<script>
$(function(){
	var dirname = [];
	$.get('/pict_dirs', {'method': 'dirname'}, function(data){
		dirname = data;
		for(var i in dirname){
			$('.pictBox').append('<p style="font-weight:bold;" class="dirname" id="' + dirname[i].id + '">' + dirname[i].title + '<br /></p>');
		}
		getThumbs(dirname);
	}, 'json');
	
	
	function getThumbs(dirs){
		var i, key;
		for(i in dirs){
			$.get('/pict_dirs', {'method': 'thumbs', 'id': dirs[i].id}, function(data){
				for(var key in data){
					$('#' + data[key].id).append('<img src="' + data[key].src + '" />');
				}
			}, 'json');
		}
	}
});
</script>
<div>
	<div class="mainbox">
		<p>工事中につきサムネイルだけです</p>
		<div class="pictBox">
			
		</div>
	</div>
</div>