const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
const mobileNavIcon = document.querySelector('.mobile-nav-toggle').style;
const primaryNav = document.querySelector('#primary-navigation').style;

mobileNavToggle.addEventListener('click', () => {
	if (mobileNavToggle.ariaHidden === 'true') {
		primaryNav.transform = 'translateX(0)';
		mobileNavToggle.ariaHidden = 'false';
		mobileNavIcon.backgroundImage = 'url("../assets/shared/icon-close.svg")';
	} else {
		primaryNav.transform = 'translateX(100%)';
		mobileNavToggle.ariaHidden = 'true';
		mobileNavIcon.backgroundImage = 'url("../assets/shared/icon-hamburger.svg")';
	}
});
