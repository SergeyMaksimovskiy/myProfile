window.onload = function() {
	heightDetect();
    blocks();
}

window.onresize = function() {
    heightDetect();
}

function heightDetect() {
    $("#first-section").css("height", $(window).height());
}

window.onscroll = function() {
	scrollMenu();
}
 

//При клике на нужный блок подгружать информацию
function blocks() {
	let infoBlocks = document.querySelectorAll('.info-content-box');

	for(let i of infoBlocks) {
		i.onclick = function(e) {
			let currentParent = i;
			currentParent.classList.toggle('current');
		}
	}
}

//Popup send back BEGIn
let sendBackButton = document.querySelectorAll('.popup-with-form');
let popupWindow = document.querySelector('.window-popup');
let closePopup = popupWindow.querySelector('.close-icon');
let modalPopup = popupWindow.querySelector('#call-back-form');

function openModal(e) {
	popupWindow.style.display = 'block';
	popupWindow.classList.add("is-open");
}

function closeModal() {
	popupWindow.style.display = 'none';
	popupWindow.classList.remove("is-open");
}

function keyCode(e) {
	if (e.keyCode === 27) {
		closeModal();
	}
}

function closePepeferia(event) {
	if (popupWindow.classList.contains("is-open") && event.target === popupWindow) {
		closeModal();
	}
}

for (let i of sendBackButton) {
	i.onclick = function(e) {
		openModal();
	}
}

closePopup.addEventListener('click', closeModal);
window.addEventListener('keydown', keyCode);
window.addEventListener("click", closePepeferia);	

//Popup send back END

//MENU BEGIN
let menuButton = document.querySelectorAll('.toggle-menu');
let menuTop = document.querySelector('.top-menu');
let menuTopUl = menuTop.querySelector('ul')
let menuTopLi = menuTopUl.querySelectorAll('li');

for(let i of menuButton) {
	i.onclick = function(e) {
		this.classList.toggle('open');
		openMenu();
	}
}

for(let i of menuTopLi) {
	i.onclick = function() {
		menuTop.classList.remove('open');
		menuTopUl.classList.remove('open');
		for(let j of menuButton) {
			if(j.classList.contains('open')) {
				j.classList.remove('open');
			}
		}
	}
}

function openMenu() {
	menuTop.classList.toggle('open');
	menuTopUl.classList.toggle('open');
}

function keyCodeMenu(e) {
	if (e.keyCode === 27) {
		menuTop.classList.remove('open');
		menuTopUl.classList.remove('open');
		for(let j of menuButton) {
			if(j.classList.contains('open')) {
				j.classList.remove('open');
			}
		}	
	}
}

window.addEventListener('keydown', keyCodeMenu);
//MENU END

//SECOND MENU ON SCROLL BEGIN
let bigMenu = document.querySelector('.top-menu-wrap');
let smallMenu = document.querySelector('.small-top-menu');

function scrollMenu() {
	let toTop = pageYOffset;
	let toWidth  = document.body.clientWidth;

	if(toWidth > 1000 && pageYOffset > 400) {

		bigMenu.classList.add('hide');
		smallMenu.classList.add('show');
		bigMenu.classList.remove('show');

	} else if(toWidth > 1000 && pageYOffset < 400) {

		bigMenu.classList.remove('hide');
		smallMenu.classList.remove('show');
		bigMenu.classList.add('show');

	}
}

//  SCROll on the pure JS
let linkNav = document.querySelectorAll('[href^="#"]'); //выбираем все ссылки к якорю на странице
let V = 0.5;  // скорость, может иметь дробное значение через точку (чем меньше значение - тем больше скорость)

linkNav.forEach(function (element) {
    element.addEventListener('click', function(e) { //по клику на ссылку

        e.preventDefault(); //отменяем стандартное поведение

        let w = pageYOffset;  // производим прокрутка прокрутка
        let hash = this.href.replace(/[^#]*(.*)/, '$1');  // к id элемента, к которому нужно перейти
        let t = document.querySelector(hash).getBoundingClientRect().top;  // отступ от окна браузера до id
        let start = null;

        requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]

        function step(time) {
            if (start === null) start = time;
            let progress = time - start;
            let r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));

            window.scrollTo(0,r);

            if (r != w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash  // URL с хэшем
            }
        }
    }, false);
});
// SCROll on the pure JS

//SECOND MENU ON SCROLL END

