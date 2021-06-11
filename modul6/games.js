
const kirim = document.querySelector('.container .kirim');
const input = document.querySelector('.container .input-user');
const komp = document.querySelector('.container .komputer');
const result = document.querySelector('.container .result');

var counter = 2;
var comp = Math.round(Math.random()*10 + 1);

function hasil(player,komputer)
{
	if(player == komputer)
	{
		result.style.color = 'green';
		result.innerHTML = "Selamat, kamu menang!";
		komp.innerHTML = komputer;
		input.setAttribute('disabled',true);
		return;

	}
	else
	{
		if (counter > 0) {
			counter--;
			kirim.innerHTML = 'Submit ('+(counter+1)+')';

		if (komputer>player); {
			result.style.color = 'yellow';
			result.innerHTML = "Komputer punya nilai lebih kecil";
			return;


			}
		
		
		else{
			kirim.innerHTML = 'Submit';
			result.style.color = 'red';
			result.innerHTML = "Maaf, kamu kurang beruntung";
			komp.innerHTML = komputer;
			input.setAttribute('disabled',true);
			return;

		}
	}
}

kirim.addEventListener('click',function())
{
	hasil(input.value, comp)
});
