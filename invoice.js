// let modalBtns=[...document.querySelectorAll(".tick")];
// modalBtns.forEach(function (btn) {
//     btn.onclick = function () {
//       let modal = btn.getAttribute("data-modal");
//       document.getElementById(modal).style.display = "block";
//     };
//   });


// function myFunction(){
//     var checkBox=document.getElementsByClassName("tick");
//     var form= document.getElementById("modalOne");
//     if(checkBox.checked==true){
//         form.style.display="block";
//     }
//     else{
//         form.style.display="none";
//     }
// }

function showHide(checked){
    if(checked==true)
        $("#modalOne").fadeIn(300 ,'linear');
    else 
        $("#modalOne").fadeOut(500 ,'linear');
}

$(document). on('click', '.close', function()
 { 
     $('.tick'). prop('checked', false); 
    });


  let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.closest(".modal");
          modal.style.display = "none";
        };
      });
    //   window.onclick = function (event) {
    //     if (event.target.className === "modal") {
    //       event.target.style.display = "none";
    //     }
    //   };
    
    $(document).ready(function()
{
$('.tick').prop('checked',false);

});
$(".click").click(function(){
    $(".account").toggle();
})
$("body").click(function(){
    $(".account").addClass("invi");
})