
const item=document.getElementsByClassName("item");
const form1=document.querySelector(".form-1");
const form2=document.querySelector(".form-2");

const button1=document.getElementById("#button1");
const button2=document.getElementById("#button2");
const count=document.getElementById("#count");

item[1].style.backgroundColor="#d4d4d5";
            item[0].style.backgroundColor="#dedee1";
          
form1.style.display="block";
form2.style.display="none";	 

        item[0].onclick=function(){
            item[1].style.backgroundColor="#d4d4d5";
            item[0].style.backgroundColor="#dedee1";
			form1.style.display="block";
			form2.style.display="none";		
            button1.style.display="block";
    button2.style.display="none";  
    count.style.display="block";
}
		
		item[1].onclick=function(){
			item[1].style.backgroundColor="#dedee1";
			item[0].style.backgroundColor="#d4d4d5";
			form2.style.display="block";
			form1.style.display="none";	
            button1.style.display="none";
    button2.style.display="block"; 	
    count.style.display="none";		
		}
		

        $(".click").click(function(){
            $(".account").toggle();
        })
        $("body").click(function(){
            $(".account").addClass("invi");
        })

        function create() {
            document.getElementById('#create').style.display = "block";
            }
            function cancel() {
            document.getElementById('#create').style.display = "none";
                            }