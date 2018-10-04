

let ar=document.querySelectorAll(".smallImage")
for(let i=0;i<ar.length;i++){
	
	ar[i].addEventListener('click', () => {
		console.log(i);
	}
	)
	};