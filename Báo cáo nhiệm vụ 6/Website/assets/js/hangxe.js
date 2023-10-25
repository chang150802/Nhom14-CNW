const foodBtns = document.querySelectorAll('.car-menu button')
const foodList = document.querySelectorAll('.car-item')

foodBtns.forEach((btn) => {
	btn.addEventListener('click', (e) => {
		const type = e.target.getAttribute('type-car')

		// remove and set active fpr button
		document
			.querySelector('.car-menu button.active')
			.classList.remove('active')
		e.target.classList.add('active')

		// filter elements
		foodList.forEach((item) => {
			if (type == 'all' || item.getAttribute('type-car') == type)
				item.classList.remove('hide')
			else item.classList.add('hide')
		})
	})
})
