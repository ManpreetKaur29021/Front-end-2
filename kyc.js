const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})


const item=document.getElementsByClassName("item");
const form1=document.querySelector(".form1");
const form2=document.querySelector(".form2");
const form3=document.querySelector(".form3");
const form4=document.querySelector(".form4");
const form5=document.querySelector(".form5");


item[0].style.backgroundColor="#dedee1";

item[0].onclick=function(){
	item[0].style.backgroundColor="#dedee1";
	item[1].style.backgroundColor="#d4d4d5";
	item[2].style.backgroundColor="#d4d4d5";
    item[3].style.backgroundColor="#d4d4d5";
    item[4].style.backgroundColor="#d4d4d5";
	form1.style.display="block";
	form2.style.display="none";	  
	form3.style.display="none";
    form4.style.display="none";
    form5.style.display="none";
}

		item[1].onclick=function(){
			item[1].style.backgroundColor="#dedee1";
			item[0].style.backgroundColor="#d4d4d5";
			item[2].style.backgroundColor="#d4d4d5";
            item[3].style.backgroundColor="#d4d4d5";
			item[4].style.backgroundColor="#d4d4d5";
			form2.style.display="block";	  
			form1.style.display="none";	  
	form3.style.display="none";
    form4.style.display="none";
    form5.style.display="none";
}
			

		
		item[2].onclick=function(){
			item[2].style.backgroundColor="#dedee1";
			item[1].style.backgroundColor="#d4d4d5";
			item[0].style.backgroundColor="#d4d4d5";
            item[3].style.backgroundColor="#d4d4d5";
			item[4].style.backgroundColor="#d4d4d5";
			form3.style.display="block";
	form1.style.display="none";	  
	form2.style.display="none";
    form4.style.display="none";
    form5.style.display="none";
}
			


        item[3].onclick=function(){
            item[3].style.backgroundColor="#dedee1";
            item[1].style.backgroundColor="#d4d4d5";
            item[2].style.backgroundColor="#d4d4d5";
            item[0].style.backgroundColor="#d4d4d5";
            item[4].style.backgroundColor="#d4d4d5";
            form4.style.display="block";
            form2.style.display="none";	  
            form3.style.display="none";
            form1.style.display="none";
            form5.style.display="none";
        }

        item[4].onclick=function(){
            item[4].style.backgroundColor="#dedee1";
            item[1].style.backgroundColor="#d4d4d5";
            item[2].style.backgroundColor="#d4d4d5";
            item[0].style.backgroundColor="#d4d4d5";
            item[3].style.backgroundColor="#d4d4d5";
            form5.style.display="block";
            form2.style.display="none";	  
            form3.style.display="none";
            form1.style.display="none";
            form4.style.display="none";
        }
		
				
function show1(){
			document.getElementById('f1').style.display ='block';
			document.getElementById('f2').style.display ='none';
			
		  }
function show2(){
			document.getElementById('f1').style.display ='none';
			document.getElementById('f2').style.display ='block';
		  }



          const button1=document.querySelector(".next1");
          const button2=document.querySelector(".next2");
          const button3=document.querySelector(".next3");
          const button4=document.querySelector(".next4");



          button1.onclick=function(){
            form2.style.display="block";
                    form1.style.display="none";	
                    form3.style.display="none";	
                    form4.style.display="none";	
                    form5.style.display="none";	
                    item[1].style.backgroundColor="#dedee1";
                    item[0].style.backgroundColor="#d4d4d5";
                    item[2].style.backgroundColor="#d4d4d5";
                    item[3].style.backgroundColor="#d4d4d5";
                    item[4].style.backgroundColor="#d4d4d5";
                    
            }
            button2.onclick=function(){
                form3.style.display="block";
                        form1.style.display="none";	
                        form2.style.display="none";	
                        form4.style.display="none";	
                        form5.style.display="none";	
                        item[2].style.backgroundColor="#dedee1";
                        item[0].style.backgroundColor="#d4d4d5";
                        item[3].style.backgroundColor="#d4d4d5";
                        item[1].style.backgroundColor="#d4d4d5";
                        item[4].style.backgroundColor="#d4d4d5";
                        
                }
                button3.onclick=function(){
                    form4.style.display="block";
                            form1.style.display="none";	
                            form2.style.display="none";	
                            form3.style.display="none";	
                            form5.style.display="none";	
                            item[3].style.backgroundColor="#dedee1";
                            item[0].style.backgroundColor="#d4d4d5";
                            item[2].style.backgroundColor="#d4d4d5";
                            item[1].style.backgroundColor="#d4d4d5";
                            item[4].style.backgroundColor="#d4d4d5";
                            
                    }

                button4.onclick=function(){
                    form5.style.display="block";
                            form1.style.display="none";	
                            form2.style.display="none";	
                            form3.style.display="none";	
                            form4.style.display="none";	
                            item[4].style.backgroundColor="#dedee1";
                            item[0].style.backgroundColor="#d4d4d5";
                            item[2].style.backgroundColor="#d4d4d5";
                            item[1].style.backgroundColor="#d4d4d5";
                            item[3].style.backgroundColor="#d4d4d5";
                            
                    }
