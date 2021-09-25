function wr(){
	let wh = $(window).height();
	let header_h = $("header").height();
	let footer_h = $("footer").height();
	let mh = wh - (header_h + footer_h);
	$("main").height(mh);
}
wr();
$(window).resize(function(){
		wr();
});
	