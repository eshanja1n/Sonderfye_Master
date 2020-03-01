

//   messagesRef.on('value', gotData, errData);

//   function gotData(data){
//     console.log(data);
//   }

//   function errData(err){
//       console.log('error!');
//       console.log(err);
// }



// Listen for from submit

document.getElementById('frmVoucher').addEventListener('submit', sumbitForm);



function sumbitForm(e){	
	
	
e.preventDefault();
	

var name = getInputVal('name');
var email = getInputVal('email');
var phone = getInputVal('phone');
var sbio = getInputVal('sbio');
var lbio = getInputVal('lbio');
var wexperience = getInputVal('wexperience');
var vexperience = getInputVal('vexperience');
var awards = getInputVal('awards');
var instagram = getInputVal('instagram');


saveMessage(name, email, phone, sbio, lbio, wexperience, vexperience, awards, instagram);


document.querySelector('.alert').style.display = 'block';

//setTimeout(function() {
//    document.querySelector('.alert').style.display = 'none';
//
//},5000);
document.getElementById('frmVoucher').reset();
$('html, body').animate({ scrollTop: 0 }, 'slow');
}

function getInputVal(id){
    return document.getElementById(id).value;
}

function saveMessage(name, email, phone, sbio, lbio, wexperience, vexperience, awards, instagram){
	const user = firebase.auth().currentUser;
    firebase.firestore().collection("users").doc(user.uid).set({
		websitename: name.replace(/\s/g, ''),
		awards: awards,
		email: email,
		facebook: "",
		instagram: instagram,
		longbio: lbio,
		madewebsite: true,
		name: name,
		phone: phone,
		shortbio: sbio,
		twitter: "",
		volunteering_experience: vexperience,
		work_experience: wexperience,
	}).then(function() {
		console.log("Firebase Document written.");
		window.location='voucherGen.php?uid=' + user.uid + '&name=' + name;
	})
	.catch(function(error) {
		console.error("Error writing document: ", error);
	});
}