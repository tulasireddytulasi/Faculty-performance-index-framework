
//DropDown Menu
ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", 
	orientation: 'h',
	classname: 'ddsmoothmenu', 
	//customtheme: ["#1c5a80", "#18374a"],
	method: 'toggle',
	contentsource: "markup" 
})

$(document).ready(function(e) {	
	// Mobile Menu					   
	$('nav #smoothmenu1').meanmenu();	
});

// Input Box Placeholder
function fnremove(arg,val)	{
	if (arg.value == '') {arg.value = val}
}	
function fnshow(arg,val)	{
	if (arg.value == val) {arg.value = ''}
}