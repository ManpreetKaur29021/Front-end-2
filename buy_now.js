var input = document.getElementById('title');
var input2 = document.getElementById('myInput2');
var input3 = document.getElementById('myInput3');

const form1=document.querySelector(".form1");
const form2=document.querySelector(".form2");
const form3=document.querySelector(".form3");
const nform1=document.querySelector(".nform1");
const nform2=document.querySelector(".nform2");
const nform3=document.querySelector(".nform3");

const cform1=document.querySelector(".cform1");
const cform2=document.querySelector(".cform2");
const cform3=document.querySelector(".cform3");



const item=document.querySelector(".next");
const item1=document.querySelector(".next1");
const item2=document.querySelector(".next2");

const item3=document.querySelector(".back1");
const item4=document.querySelector(".back2");
const item5=document.querySelector(".back3");



const progress_bar = document.querySelector(".progress");
const progress_bar1 = document.querySelector(".progress1");
const progress_bar2 = document.querySelector(".progress2");




form1.style.display="block";
form2.style.display="none";	
form3.style.display="none";	 
nform1.style.display="block";
nform2.style.display="none";	 
nform3.style.display="none"; 

cform2.style.display="none";
cform1.style.display="none" ;
cform3.style.display="none" ;



progress_bar.style.display="block";
progress_bar1.style.display="none";
progress_bar2.style.display="none";





item.onclick=function(){
form2.style.display="block";
        form1.style.display="none";	
        form3.style.display="none";	
         
        nform2.style.display="block";
        nform1.style.display="none" ;
        nform3.style.display="none" ;

        cform2.style.display="none";
        cform1.style.display="none" ;
cform3.style.display="none" ;
        

        progress_bar.style.display="none";
        progress_bar1.style.display="block";
progress_bar2.style.display="none";
        
    }

item1.onclick=function(){

    form2.style.display="none";
    form1.style.display="none";
    form3.style.display="block";	 

    nform2.style.display="none";
    nform1.style.display="none";	 
    nform3.style.display="block" ;

    cform2.style.display="none";
    cform1.style.display="none" ;
    cform3.style.display="none" ;
    
    progress_bar.style.display="none";
    progress_bar1.style.display="none";
     progress_bar2.style.display="block";
    
}


item2.onclick=function(){

    form2.style.display="none";
    form1.style.display="none";
    form3.style.display="none";	

    nform1.style.display="none";
    nform2.style.display="none";
    nform3.style.display="none"; 
    cform2.style.display="block";
    cform1.style.display="block" ;
    cform3.style.display="block" ;
    
    
    progress_bar.style.display="none";
progress_bar1.style.display="none";
progress_bar2.style.display="none";

    // document.getElementById('image').style.display="none"
    document.getElementById('create_button').style.background = '#e6e6e6';
    document.getElementById('create_button1').style.background = '#e6e6e6';
    document.getElementById('create_form').style.background = '#e6e6e6';
    document.getElementById('create_form').style.background = '#e6e6e6';

}


item3.onclick=function(){

    form2.style.display="none";
    form1.style.display="block";
    form3.style.display="none";	 

    nform2.style.display="none";
    nform1.style.display="block" ;
    nform3.style.display="none" ;

    cform2.style.display="none";
    cform3.style.display="none" ;
    cform1.style.display="none" ;
    progress_bar.style.display="block";
    progress_bar1.style.display="none";
    progress_bar2.style.display="none";


}

item4.onclick=function(){

    form2.style.display="block";
    form1.style.display="none";
    form3.style.display="none";	 

    nform2.style.display="block";
    nform1.style.display="none" ;
    nform3.style.display="none" ;

    cform2.style.display="none";
    cform1.style.display="none" ;
    cform3.style.display="none" ;

    progress_bar.style.display="none";
    progress_bar1.style.display="block";
    progress_bar2.style.display="none";


}
item5.onclick=function(){

    form2.style.display="none";
    form1.style.display="none";
    form3.style.display="block";	 

    nform2.style.display="none";
    nform1.style.display="none" ;
    nform3.style.display="block" ;

    cform2.style.display="none";
    cform1.style.display="none" ;
    cform3.style.display="none" ;
    
    progress_bar.style.display="none";
    progress_bar1.style.display="none";
    progress_bar2.style.display="block";


}



input2.value = input.value;
input3.value = input2.value;

    $('#title').on('input', function() {
        var input2 = document.getElementById('myInput2');
        var input3 = document.getElementById('myInput3');


        input2.value = input.value;
        input3.value = input2.value;
    });

    $('#theme').on('input', function() {
      
       var color=$("#theme").val();
        if (color=="Dark"){
            document.getElementById("paybutton").classList.add("dark");
            document.getElementById("paybutton").classList.remove("light");
            document.getElementById("myInput2").classList.add("dark-input");
            document.getElementById("myInput2").classList.remove("light-input");
            document.getElementById("final_button").classList.add("dark");
            document.getElementById("final_button").classList.remove("light");
            document.getElementById("myInput3").classList.add("dark-input");
            document.getElementById("myInput3").classList.remove("light-input");
            
        }
        if (color=="Light"){
            document.getElementById("paybutton").classList.add("light");
            document.getElementById("paybutton").classList.remove("dark");
            document.getElementById("myInput2").classList.add("light-input");
            document.getElementById("myInput2").classList.remove("dark-input");
            document.getElementById("final_button").classList.add("light");
            document.getElementById("final_button").classList.remove("dark");
            document.getElementById("myInput3").classList.remove("dark-input");
            document.getElementById("myInput3").classList.add("light-input");
           
        }

    });


    //form

var emaillabel = document.getElementById('email-label');
var emailoutput = document.getElementById('email-output');
var emailoutput1 = document.getElementById('email-output-1');


emailoutput.value = emaillabel.value;
emailoutput1.value = emaillabel.value; 
    $('#email-label').on('input', function() {
        emailoutput.value = emaillabel.value;
        emailoutput1.value = emaillabel.value;

    });
    var amountlabel = document.getElementById('amount-label');    
var amountoutput = document.getElementById('amount-output');
amountoutput.value = amountlabel.value; 
    $('#amount-label').on('input', function() {
        amountoutput.value = amountlabel.value;

    });

var phonelabel = document.getElementById('phone-label');
var phoneoutput = document.getElementById('phone-output');
var phoneoutput1 = document.getElementById('phone-output-1');
phoneoutput.value = phonelabel.value;
phoneoutput1.value = phonelabel.value;
    $('#phone-label').on('input', function() {
        phoneoutput.value = phonelabel.value;
        phoneoutput1.value = phonelabel.value;
    });
var namelabel = document.getElementById('name-label');
var nameoutput = document.getElementById('name-output');
var nameoutput1 = document.getElementById('name-output-1');
nameoutput.value = namelabel.value;
nameoutput1.value = namelabel.value;    
    $('#name-label').on('input', function() {
        nameoutput.value = namelabel.value;
        nameoutput1.value = namelabel.value;
    });
var addresslabel = document.getElementById('adress-label');
var addressoutput = document.getElementById('adress-output');
var addressoutput1 = document.getElementById('adress-output-1');
addressoutput.value = addresslabel.value;
addressoutput1.value = addresslabel.value;   
    $('#adress-label').on('input', function() {
        addressoutput.value = addresslabel.value;
        addressoutput1.value = addresslabel.value;
    });
var pincodelabel = document.getElementById('pincode-label');
var pincodeoutput = document.getElementById('pincode-output');
var pincodeoutput1 = document.getElementById('pincode-output-1');
pincodeoutput.value = pincodelabel.value;
pincodeoutput1.value = pincodelabel.value;   
    $('#pincode-label').on('input', function() {
        pincodeoutput.value = pincodelabel.value;
        pincodeoutput1.value = pincodelabel.value;
    });
    