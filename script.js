function signup() {
   var fname = document.getElementById("fname");
   var lname = document.getElementById("lname");
   var email = document.getElementById("email");
   var mobile = document.getElementById("mobile");
   var password = document.getElementById("password");


   var f = new FormData();
   f.append("f", fname.value);
   f.append("l", lname.value);
   f.append("e", email.value);
   f.append("m", mobile.value);
   f.append("p", password.value);

   var request = new XMLHttpRequest();
   request.onreadystatechange = function () {
      if (request.readyState == 4 & request.status == 200) {
         var response = request.responseText;

         if (response == "Success") {
            swal({
               title: 'Check Your Email',
               text: '',
               timer: 3000
            }).then(
               function () { },
               // handling the promise rejection
               function (dismiss) {
                  if (dismiss === 'timer') {
                     console.log('I was closed by the timer')
                  }
               }
            )
            setTimeout(function () {

               swal("Type OTP Code here:", {
                  content: "input",
               })
                  .then((value) => {
                     var fname = document.getElementById("fname");
                     var email = document.getElementById("email");
                     var f = new FormData();
                     f.append("e", email.value);
                     f.append("f", fname.value);
                     f.append("otp", value);

                     var request2 = new XMLHttpRequest();

                     request2.onreadystatechange = function () {
                        if (request2.readyState == 4 && request2.status == 200) {
                           response2 = request2.responseText;

                           if (response2 == "Success") {
                              swal("OTP ", "Your Email Is Veryfied Successfull", "success");
                              window.location.assign("login.php");
                           } else if (response2 != "Success") {
                              swal("OTP ", "Your Email has been Very Failed : " + response2, "error");
                           }




                        }
                     }

                     request2.open("POST", "otpVerifyProcess.php", true);
                     request2.send(f);


                  });

            }, 3000);






         } else {
            document.getElementById("msg1").innerHTML = response;
            document.getElementById("msgdiv1").className = "alert alert-dismissible fade show py-2 bg-warning d-block";



         }


      }
   };
   request.open("POST", "registerProcess.php", true);
   request.send(f);
}


function signin() {

   var em = document.getElementById("em");
   var pw = document.getElementById("pw");
   var rm = document.getElementById("rm");

   var f = new FormData();
   f.append("e", em.value);
   f.append("p", pw.value);
   f.append("r", rm.checked);

   var request = new XMLHttpRequest();

   request.onreadystatechange = function () {

      if (request.readyState == 4 & request.status == 200) {
         var response = request.responseText;

         if (response == "Success") {




            window.location = "index.php";
         } else {



            document.getElementById("msg2").innerHTML = response;
            document.getElementById("msgdiv2").className = "alert alert-dismissible fade show py-2 bg-warning d-block";
         }
      }
   };
   request.open("POST", "loginProcess.php", true);
   request.send(f);

}

function deleteFromCart(id) {

   var r = new XMLHttpRequest();

   r.onreadystatechange = function () {
      if (r.readyState == 4) {
         var t = r.responseText;
         if (t == "success") {
            swal("Remove From Cart", "Product removed from cart Successfull", "success");
            setInterval(1009);
            window.location.reload();

         } else {


            window.location.reload();

         }
      }
   }

   r.open("GET", "deleteFromCartProcess.php?id=" + id, true);
   r.send()
}



function addToCart(id) {

   var qty = document.getElementById("pqty");

   var f = new FormData();
  
   f.append("qty", qty.value);

   var r = new XMLHttpRequest();

   r.onreadystatechange = function () {
      if (r.readyState == 4) {
         var t = r.responseText;

         if (t == "iq") {
            swal("Add Cart", "", "success");
         } else
            if (t == "Something Went Wrong") {
               swal("Add Cart Error", t, "error");
            } else
               if (t == "Product added successfully") {
                  swal("Add Cart", t, "success");
               } else
                  if (t == "Please Sign In or Register.") {
                     swal("Add Cart Failed", t, "error");
                  } else {
                     swal("Add Cart Failed", t, "error");
                  }
      }
   }

   r.open("POST", "addToCartProcess.php?id=" + id, true);

   r.send(f);
}


function signout() {
   var r = new XMLHttpRequest();

   r.onreadystatechange = function () {
      if (r.readyState == 4) {
         var t = r.responseText;
         if (t == "success") {

            //window.location="home.php";

            window.location.reload();

         } else {
            alert(t);
         }
      }

   };

   r.open("GET", "signoutProcess.php", true);
   r.send();
}


function basicsearch(x) {



   document.getElementById("banners").className = "d-none";
   document.getElementById("banners2").className = "d-none";
   document.getElementById("banners3").className = "d-none";
   document.getElementById("banners4").className = "d-none";
   document.getElementById("hp1").className = "d-none";
   document.getElementById("hp2").className = "d-none";
   document.getElementById("hp3").className = "d-none";
   document.getElementById("searcharia").className = "product__area box-plr-75 pb-70";


   var si = document.getElementById("searchinput");
   var sc = document.getElementById("searchcat");

   var f = new FormData();

   f.append("si", si.value);
   f.append("sc", sc.value);

   var request = new XMLHttpRequest();

   request.onreadystatechange = function () {

      if (request.readyState == 4 && request.status == 200) {

         var response = request.responseText;
         document.getElementById("searchru").innerHTML = response;

      }
   }
   request.open("POST", "searchProcess.php", true);
   request.send(f);
}


function filter() {

   var cat = document.getElementById("catsel");
   var bra = document.getElementById("brasel");
   var cpu = document.getElementById("cpusel");
   var dis = document.getElementById("dissel");
   var gpu = document.getElementById("gpusel");
   var ram = document.getElementById("ramsel");
   var mod = document.getElementById("modsel");
   var amo = document.getElementById("amount");



   var f = new FormData();

   f.append("ca", cat.value);
   f.append("br", bra.value);
   f.append("cp", cpu.value);
   f.append("di", dis.value);
   f.append("gp", gpu.value);
   f.append("ra", ram.value);
   f.append("mo", mod.value);
   f.append("am", amo.value);


   var request = new XMLHttpRequest();

   request.onreadystatechange = function () {


      if (request.readyState == 4) {

         var response = request.responseText;


         document.getElementById("searchru").innerHTML = response;


      }




   }

   request.open("POST", "advanceSearchProcess.php", true);
   request.send(f);




}




function discode(){

 var code =   document.getElementById("discode");
 var total =   document.getElementById("totalid");



  var f = new FormData();

  f.append("code", code.value);
  f.append("total", total.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {

   if (request.readyState == 4 && request.status == 200) {
      

     var response = request.responseText;

    

      if (response == "ec") {
         
         swal("Promo Code", "Enter Discount Code", "error");

      } else if(response == "wc") {

         swal("Promo Code", "Code is Invalid", "error");
         
      }else if(response == "sww"){
         swal("Promo Code", "Somthing Went Wrong", "error");
      }else{
         swal("Promo Code", "Congratulations...! You'r New Price is Rs."+ response+ ".00", "success");
         document.getElementById("oto").innerHTML = "Rs."+ response+".00"
      }

   }
   
  }

  request.open("POST" , "discodeProcess.php" , true);
  request.send(f);
}



function checkout(){

   request = new XMLHttpRequest();

   request.onreadystatechange = function(){

      if (request.readyState == 4 && request.status == 200) {

         var response = request.responseText;

         alert(response);
         
      }

   }

   request.open("POST" , "checkoutProcess.php", true);
   request.send();


}