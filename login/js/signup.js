 $('#signupform').submit(function () {
 	signUp();
 	return false;
 });

var justSignedUp = false;


 function signUp() {
 	var name = document.getElementById("name").value;
 	var email = document.getElementById("email").value;
 	var password = document.getElementById("password").value;

 	firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
 		// Handle Errors here.
 		var errorCode = error.code;
 		var errorMessage = error.message;
 		alert("Error: " + errorMessage);
 	});
	justSignedUp = true;
	 
 }

 firebase.auth().onAuthStateChanged(function (user) {
 	if (user && justSignedUp) {
			user.updateProfile({
			  displayName: document.getElementById("name").value
			}).then(function() {
			   window.location.href = "../account/index.html";
			}, function(error) {
			  // An error happened.
				alert(error.message);
			});
		} else if(user) {
			window.location.href = "../account/index.html";
		} else {
			// No user is signed in.


		}
 });
