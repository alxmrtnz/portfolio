$(document).ready(function() {
	var candidate = $('.candidate');

	candidate.each(
		function(){
			candInfo = $(this).children('.candidateInfo'); 
			this.bio = candInfo.children('.candidateBio');
			this.savedBio = this.bio.text();
			this.bio.text(ellipsize(this.bio));

			$( this ).bind (
				"click",
				function(){
					this.bio.text(this.savedBio);
					$(this).siblings().each(function(){
						$(this).removeClass('expanded');
						candInfo1 = $(this).children('.candidateInfo'); 
						this.bio = candInfo1.children('.candidateBio');
						this.bio.text(ellipsize(this.bio));
					});
					if ($(this).hasClass('expanded')){
						$(this).toggleClass('expanded', 200);
						this.bio.text(ellipsize(this.bio));
					} else {
						$(this).toggleClass('expanded', 200, scrollToCandidate($(this)));
					}
				}
				);
	 
		});
});

function scrollToCandidate(x) {
	setTimeout(function(){
		$('body').animate({scrollTop : x.offset().top}, 250);
	} ,200);
}

function ellipsize(bio){
	bioText = bio.text();
	ellipText = bioText.substring(0, 100);
	var el = "...";
	ellipText = ellipText.concat(el);
	return ellipText;
}