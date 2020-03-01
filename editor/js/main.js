'use strict';

var websitename = "";

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    	firebase.firestore().collection("users").doc(user.uid).get().then(function(doc) {
			if (doc.exists) {
				var data = doc.data();
				websitename = data.websitename;
				$("#bigname").text(data.name);
				if(data.shortbio!="")$("#sbio").attr("placeholder", data.shortbio);
				if(data.email!="")$("#email").attr("placeholder", data.email);
				if(data.phone!="")$("#phone").attr("placeholder", data.phone);
				if(data.instagram!="")$("#instagram").attr("placeholder", data.instagram);
				if(data.longbio!="")$("#lbio").attr("placeholder", data.longbio);
				if(data.volunteering_experience!="")$("#vexperience").attr("placeholder", data.volunteering_experience);
				if(data.work_experience!="")$("#wexperience").attr("placeholder", data.work_experience);
				if(data.awards!="")$("#achievements").attr("placeholder", data.awards);
			} else {
				// doc.data() will be undefined in this case
				console.log("No such document!");
			}
		}).catch(function(error) {
			console.log("Error getting document:", error);
		});
  } else {
    // No user is signed in.
  }
});

$("#viewsite").click(function () {
	window.location = "../"+websitename+".html";
});

$("#updatebutton").click(function () {
	var name = $("#name").val()==""?$("#bigname").text():$("#name").val();
	var sbio = $("#sbio").val()==""?$("#sbio").attr('placeholder'):$("#sbio").val();
	var email = $("#email").val()==""?$("#email").attr('placeholder'):$("#email").val();
	var phone = $("#phone").val()==""?$("#phone").attr('placeholder'):$("#phone").val();
	var instagram = $("#instagram").val()==""?$("#instagram").attr('placeholder'):$("#instagram").val();
	var lbio = $("#lbio").val()==""?$("#lbio").attr('placeholder'):$("#lbio").val();
	var vexperience = $("#vexperience").val()==""?$("#vexperience").attr('placeholder'):$("#vexperience").val();
	var wexperience = $("#wexperience").val()==""?$("#wexperience").attr('placeholder'):$("#wexperience").val();
	var achievements = $("#achievements").val()==""?$("#achievements").attr('placeholder'):$("#achievements").val();
	
	firebase.firestore().collection("users").doc(firebase.auth().currentUser.uid).update({
		name: name,
		shortbio: sbio,
		email: email,
		phone: phone,
		instagram: instagram,
		longbio: lbio,
		volunteering_experience: vexperience,
		work_experience: wexperience,
		awards: achievements
	}).then(function () {
		window.alert("Successfully Updated.");
		location.reload();
	}).catch(function (error) {
		window.alert("Could not update. Error: " + error);
		location.reload();
	})
});

$(window).on('load', function() { 	
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut(); 
	$("#preloder").delay(400).fadeOut("slow");

});


(function($) {

	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});


	$('.review-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		items: 1,
		autoplay: true
	});



	$('.progress-bar-style').each(function() {
		var progress = $(this).data("progress");
		var prog_width = progress + '%';
		if (progress <= 100) {
			$(this).append('<div class="bar-inner" style="width:' + prog_width + '"><span>' + prog_width + '</span></div>');
		}
		else {
			$(this).append('<div class="bar-inner" style="width:100%"><span>' + prog_width + '</span></div>');
		}
	});


	$('.lan-prog').each(function() {
		var progress = $(this).data("lanprogesss");
		var ele      = '<span></span>';
		var ele_fade = '<span class="fade-ele"></span>';
		
		for (var i = 1; i <= 5; i++) {
			if(i <= progress){
				$(this).append(ele);
			} else {
				$(this).append(ele_fade);
			}
		}
	});


	/*------------------
		Popup
	--------------------*/
	$('.portfolio-item .port-pic').magnificPopup({
		type: 'image',
		mainClass: 'img-popup-warp',
		removalDelay: 500,
	});




if($().circleProgress){

	//Set progress circle 1
	$("#progress1").circleProgress({
		value: 0.75,
		size: 175,
		thickness: 2,
		fill: "#40424a",
		emptyFill: "rgba(0, 0, 0, 0)"
	});
	//Set progress circle 2
	$("#progress2").circleProgress({
		value: 0.83,
		size: 175,
		thickness: 2,
		fill: "#40424a",
		emptyFill: "rgba(0, 0, 0, 0)"
	});

	//Set progress circle white
	$("#progress3").circleProgress({
		value: 0.75,
		size: 175,
		thickness: 2,
		fill: "#ffffff",
		emptyFill: "rgba(0, 0, 0, 0)"
	});

	//Set progress circle white
	$("#progress4").circleProgress({
		value: 0.83,
		size: 175,
		thickness: 2,
		fill: "#ffffff",
		emptyFill: "rgba(0, 0, 0, 0)"
	});

	//Set progress circle skyblue
	$("#progress5").circleProgress({
		value: 0.75,
		size: 175,
		thickness: 2,
		fill: "#009fff",
		emptyFill: "rgba(0, 0, 0, 0)"
	});

	//Set progress circle skyblue
	$("#progress6").circleProgress({
		value: 0.83,
		size: 175,
		thickness: 2,
		fill: "#009fff",
		emptyFill: "rgba(0, 0, 0, 0)"
	});
}

})(jQuery);

