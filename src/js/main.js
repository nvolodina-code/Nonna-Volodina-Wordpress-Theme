const toggle = document.querySelector('.site-header__toggle');

if (toggle) {
	toggle.addEventListener('click', () => {
		const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
		toggle.setAttribute('aria-expanded', String(!isExpanded));
	});

	document.addEventListener('keydown', (e) => {
		if (e.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
			toggle.setAttribute('aria-expanded', 'false');
		}
	});
}
