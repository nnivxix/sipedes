	var url = 'http://localhost:8989/anggota?kk=0';

	fetch('http://localhost:8989/anggota?kk=0')
	.then(res => res.json())
	.then(data =>{
		createOption(data,'id_kk')
		console.log(data)
	})

	function createOption(data,id){
	   let dom = document.getElementById(id)

	   data.map((v)=>{
	       let option = document.createElement('option')
	       option.value   = v.id_kk
	       option.innerHTML = v.kepala + ' - ' + v.no_kk

	       dom.append(option)
	   })
	}

	let idkk = document.querySelector('.kk');
	console.log(idkk);

	function getIdKk() {
		console.log(idkk.value);
		let urlAnggota = 'http://localhost:8989/anggota?kk='+idkk.value+'&anggota=0'
		fetch(urlAnggota)
		.then(res => res.json())
		.then(data => {
			let cxbx = document.querySelector('.cxbx');
			data.forEach( v => {
				cxbx.innerHTML = `
					<div class="form-check">
					  <input id="${v.id_pend}" type="checkbox" class="form-check-input" name="id_pend" value="${v.id_pend}">
					  <label class="form-check-label" for="${v.id_pend}" >${v.nama}</label>
					</div>
				`
			})
		} )
	}
