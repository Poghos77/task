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
function mlength(){
	var messages = $(".message").length;
	for(var i = 0;i<messages;i++){
		if ($(".message").eq(i).html().length>600) {
			var a = $(".message").eq(i).html();
			a = a.slice(0,600);
			a = a+=" ...";
			$(".message").eq(i).html(a);
		}
	}
}
mlength();