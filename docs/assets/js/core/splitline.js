class SplitLine{
	constructor(el) {
		this.el = el;
		this.el.classList.add('text--idle');
		this.classes = {
			word: 'splitText__word',
			line: 'splitText__line'
		}
		this.initialState = this.el.innerHTML;
		this.init();
	}
	
	init(){
		this.addSpans();
		this.animate();
	}
	
	addSpans() {
		let text = this.el.textContent.split(' ');
		let textHtml = '';	
		for (let i = 0; i < text.length; i++) {
			let space = i == text.length - 1 ? '' : '&#160;';

			textHtml += `<span class="${this.classes.word} ${this.classes.word}--idle" data-content="${text[i]}">${space}</span>`;
			
		}
		this.el.innerHTML = textHtml;
	}
	
	animate() {
		let divs = this.el.querySelectorAll('.' + this.classes.word);
		let delay = 0;
		let i = 0;
		let timer;
		this.el.classList.remove('text--idle');
		timer = window.setInterval(() => {
			divs[i].classList.remove(this.classes.word + '--idle');
			i++;
			if (i >= divs.length) {
				window.clearTimeout(timer);
				window.setTimeout(this.resetState.bind(this), 1000);
			}
		},50);
	}
	
	
	resetState() {
		this.el.innerHTML = this.initialState;
	}
}