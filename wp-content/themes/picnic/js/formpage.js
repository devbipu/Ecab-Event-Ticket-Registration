const personType = document.querySelector('#personType');
const kidsType = document.querySelector('#kidsType');


const addPersonForm = `
	<div class="form_group d-flex align-items-center gap-1 justify-content-between">
		<div style="width: 90%;">
			<div class="form-floating mb-2">
				<input type="text" class="form-control" name="name1" id="name1" placeholder="Name">
				<label for="memberID">Name</label>
			</div>
			<div class="form-floating">
				<select class="form-select" name="relation" id="relation" onchange="onSelectChange(this)">
					<option value="" disabled="" selected="">Relation</option>
					<option value="Father">Father</option>
					<option value="Mother">Mother</option>
					<option value="Sister">Sister</option>
					<option value="Brother">Brother</option>
					<option value="Wife">Wife</option>
					<option value="Husband">Husband</option>
					<option value="Friend">Friend</option>
				</select>
				<label for="relation">Person Type</label>
			</div>
		</div>
		<div class="align-items-center d-flex flex-column justify-content-between" style="width: 10%">
			<button type="button" id="addMorePersonBtn" class="btn btn-primary btn-sm mb-1 addBtn">+</button>
			<button type="button" id="removeMorePersonBtn" class="btn btn-danger btn-sm rmBtn">-</button>
		</div>
	</div>
`


// const personType = document.querySelector('#personType');

personType.addEventListener('change', (el) => {
	console.log(el.target.value);
	if (el.target.value == 'Family') {
		document.querySelector('#morePersonWrap').innerHTML = addPersonForm;
	}else if (el.target.value == 'Single') {
		document.querySelector('#morePersonWrap').innerHTML = null;
	}
})

document.addEventListener('click', (el) => {
	addNewPersonFrom(el, '#addMorePersonBtn', '#morePersonWrap', addPersonForm);
})
document.addEventListener('click', (el) => {
	if (el.target.matches('#removeMorePersonBtn')) {
		el.target.parentNode.parentNode.remove();
	}
})




// Kids add

const addKidsForm = `
	<div class="form_group d-flex align-items-center gap-1 justify-content-between">
		<div style="width: 90%;">
			<div class="form-floating mb-2">
				<input type="text" class="form-control" name="name1" id="name1" placeholder="Name">
				<label for="memberID">Name</label>
			</div>
			<div class="form-floating">
				<select class="form-select" name="relation" id="relation" onchange="onSelectChange(this)">
					<option value="" disabled="" selected="">Kids Type</option>
					<option value="Bellow 5 years">Bellow 5 Years</option>
					<option value="Above 5 years">Above 5 Years</option>
				</select>
				<label for="relation">Person Type</label>
			</div>
		</div>
		<div class="align-items-center d-flex flex-column justify-content-between" style="width: 10%">
			<button type="button" id="addMoreKidsBtn" class="btn btn-primary mb-1 btn-sm addBtn">+</button>
			<button type="button" id="removeMoreKidsBtn" class="btn btn-danger btn-sm rmBtn">-</button>
		</div>
	</div>
`

kidsType.addEventListener('change', (el) => {
	console.log(el.target.value);
	if (el.target.value == 'With Kids') {
		document.querySelector('#addMoreKidsWrap').innerHTML = addKidsForm;
	}else if (el.target.value == 'No Kids') {
		document.querySelector('#addMoreKidsWrap').innerHTML = null;
	}
})

document.addEventListener('click', (el) => {
	if (el.target.matches('#removeMoreKidsBtn')) {
		el.target.parentNode.parentNode.remove();
	}
})


//Global
document.addEventListener('click', (el) => {
	addNewPersonFrom(el, '#addMoreKidsBtn', '#addMoreKidsWrap', addKidsForm);
})


function addNewPersonFrom(el, btn, wrapper, data) {
	if (el.target.matches(btn)) {
		document.querySelector(wrapper).insertAdjacentHTML('beforeend', data);
	}
}

document.querySelector('#registrationForm').addEventListener('reset', () => {
	document.querySelector('#addMoreKidsWrap').innerHTML = null;
	document.querySelector('#morePersonWrap').innerHTML = null;
})