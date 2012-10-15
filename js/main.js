$(document).ready(function() {
	getTwitters('tweets', { 
	  id: 'joshkennedy', 
	  count: 3, 
	  enableLinks: true, 
	  ignoreReplies: false, 
	  clearContents: true,
	  template: '%text% <i class="birdie"></i>'
	});
});