const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function closeModal(){
	$(".mask").removeClass("active");
  }
  
  $(".close, .mask").on("click", function(){
	closeModal();
  });
  
  $(document).keyup(function(e) {
	if (e.keyCode == 27) {
	  closeModal();
	}
  });