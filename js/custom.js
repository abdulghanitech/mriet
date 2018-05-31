
if (screen.width > 1000) {
//load file for screen width 1000 and up here
$(document).ready(function(){
 	        $(".dropdown").off("click");
    $(".dropdown").hover(function(){
    	//event.preventDefault();
        $(this).addClass("open"); //add open class to the li

        $(this).siblings().removeClass('open'); //remove the class open from the other li
    });

    $(".dropdown").mouseleave(function(){
    	$(this).removeClass("open"); 
    });

// after clicking an "a" in list item remove class open
  /*  $(".dropdown-menu li a").on("click",function(){
    	console.log("clicked a element");
    	$(".dropdown").removeClass('open');
    });
*/
   

});
} else {
//load file for screen width under 1000 here
}


 