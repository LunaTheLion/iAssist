[].forEach.call(document.getElementsByClassName('tags-input').function (el) );
	let hiddenInput = document.createElement('input'),
		mainInput = document.createElement('input'),
		tags = [];
 
		hiddenInput.setAttribute('type', 'hidden');
		hiddenInput.setAttribute('name', el.getAttribute('data-name'));

		mainInput.classList.add('main-input');
		mainInput.setAttribute('type','text');

		el.appendChild(mainInput);
		el.appendChild(hiddenInput);

		addTag('HELLO!');

		function addTag(text){
			let tag = {
				text:text,
				element: document.createElement('span'),
			}
			tag.element.classList.add('tag');
			tag.element.textContent = tag.text;

			let closeBtn = document.createElement('span');
			closeBtn.classList.add('close');
			closeBtn.addEventListener('click', function (){
				removeTag(tags.indexOf(tag));
			});
			tag.element.appendChild(closeBtn);

			tags.push(tag);
			el.insertBefore(tag.element, mainInput);

			refreshTags();


		}

		function removeTag (index){
			let tag = tags[index];
			tags.splice(index, 1);
			el.removeChild(tag.element);
			refreshTags();

		}
		function refreshTags (){

		}
		function filterTag (tag){

		}

;