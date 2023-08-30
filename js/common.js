//FUNCION PARA DROPDOWN NAVBAR MENU
document.addEventListener('DOMContentLoaded', function () {
	var nav = document.getElementById('topNav');
	var submenuItems = nav.querySelectorAll('li > ul');

	for (var i = 0; i < submenuItems.length; i++) {
		var submenu = submenuItems[i];
		var parentItem = submenu.parentNode;

		parentItem.addEventListener('mouseenter', function () {
			this.querySelector('ul').style.display = 'block';
		});

		parentItem.addEventListener('mouseleave', function () {
			this.querySelector('ul').style.display = 'none';
		});
	}
});
