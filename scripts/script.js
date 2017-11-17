
        function myCV() {
            document.getElementById("onLoadAboutMe").style.display = "none";
            document.getElementById("onBioInsert").style.display = "none";
            document.getElementById("onMyCV").removeAttribute("style");
            document.getElementById("onCVInsert").removeAttribute("style");
            document.getElementById("onMyCV").innerHTML = "Curriculum Vitae";
            document.getElementById("onMyCV").scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }

        function myBio() {
            document.getElementById("onMyCV").style.display = "none";
            document.getElementById("onCVInsert").style.display = "none";
            document.getElementById("onLoadAboutMe").removeAttribute("style");
            document.getElementById("onBioInsert").removeAttribute("style");
            document.getElementById("onLoadAboutMe").innerHTML = "About Me";
            document.getElementById("onBioInsert").innerHTML = "Hello and welcome to my portfolio website. I am a Software Developer living in Dublin, Ireland and a recent graduate of Dublin Business School. I received a 1st Class Honours Higher Diploma in Science in Computing (Software Development). I was a Semiconductor Process Engineer with a large multinational for 14 years and I bring these experiences and skills to software development. I have a passion for new technologies, finding the hard answers and pushing myself to just be better. My core skills are focused around C#.Net, C#.Net MVC, HTML5, CSS3,  JavaScript, SQL and AngularJS." ;
            document.getElementById("onLoadAboutMe").scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }

        function myTimer() {
          var visited = sessionStorage["visited"];
            if(!visited){
                myTimerAnimationText();
                sessionStorage["visited"] = true;

            }
            else{
                myFunction3();

            }
        }

        function myTimerAnimationText() {
                    setTimeout(myFunction4, 0),
                    setTimeout(myFunction1, 3000),
                    setTimeout(myFunction2, 6000),
                    setTimeout(myFunction3, 9000)
                }

        function myFunction4() {

            document.getElementById("onLoadInsert").innerHTML = ".";
            document.getElementById("onLoadInsert").className = "frontPageH2hide";
        }

        function myFunction1() {

            document.getElementById("onLoadInsert").innerHTML = "Software Developer";
            document.getElementById("onLoadInsert").className = "frontPageH2show";
        }

        function myFunction2() {

            document.getElementById("onLoadInsert").innerHTML = "Web Developer";
        }


        function myFunction3() {

            document.getElementById("onLoadInsert").innerHTML = "Software Developer - Engineer - Web Developer";
        }


    jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

//Smooth Scrolling
$(document).ready(function(){
  $("#button1").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 700);
  });
});
$(document).ready(function(){
  $("#button2").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 700);
  });
});
$(document).ready(function(){
  $("#button3").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 700);
  });
});
$(document).ready(function(){
  $("#button4").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 700);
  });
});
