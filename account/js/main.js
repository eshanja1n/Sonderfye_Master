 firebase.auth().onAuthStateChanged(function (user) {
	 firebase.firestore().collection("users").doc(user.uid).get().then(function(doc) {
			if (doc.exists) {
				if(user&&doc.data().madewebsite) {
					$("#websitebutton").text("edit your website");
					$("#websitebutton").attr("href", "../editor/index.html");
				} else {
					$("#websitebutton").text("make your website");
					$("#websitebutton").attr("href", "../order.php");
				}
			} else {
				// doc.data() will be undefined in this case
				console.log("No such document!");
				location.reload();
			}
		}).catch(function(error) {
			console.log("Error getting document:", error);
		});
 });

$("#logout").click(function() {
	firebase.auth().signOut();
	window.location = "../index.html";
})