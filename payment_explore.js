
const item=document.getElementsByClassName("item");
const form1=document.querySelector(".form-1");
// const form2=document.querySelector(".form-2");


// item[1].style.backgroundColor="#d4d4d5";
            item[0].style.backgroundColor="#dedee1";
            // item[2].style.backgroundColor="#d4d4d5";
            
// form1.style.display="block";
// form2.style.display="none";	  

        // item[0].onclick=function(){
        //     item[1].style.backgroundColor="#d4d4d5";
        //     item[0].style.backgroundColor="#dedee1";
            
		// 	form1.style.display="block";
		// 	form2.style.display="none";	  
        //     // document.getElementById('change').innerHTML = '+ Create QR Code';
        //     document.getElementById('change').style.display = "inline";
			
        // }
		
		// item[1].onclick=function(){
		// 	item[1].style.backgroundColor="#dedee1";
		// 	item[0].style.backgroundColor="#d4d4d5";
			
		// 	form2.style.display="block";
		// 	form1.style.display="none";	  
        //     document.getElementById('change').style.display = "none";
			
		// }
		
		
        $(".click").click(function(){
            $(".account").toggle();
        })
        $("body").click(function(){
            $(".account").addClass("invi");
        })

		