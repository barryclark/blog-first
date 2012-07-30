// HIDE MENU BAR WHEN PAGE LOADS (iOS)
addEventListener('load', function() { 
	setTimeout(hideAddressBar, 0); 
}, false);
function hideAddressBar() { 
	window.scrollTo(0, 1); 
}