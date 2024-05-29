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
            document.getElementById("msg1").innerHTML = "Registration Successfully";
            document.getElementById("msgdiv1").className = "alert alert-dismissible fade show py-2 bg-info d-block";


            fname.value = "";
            lname.value = "";
            email.value = "";
            mobile.value = "";
            password.value = "";

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
 
   var r = new XMLHttpRequest();

   r.onreadystatechange = function () {
       if (r.readyState == 4) {
           var t = r.responseText;
        
           if (t == "iq") {
            swal("Add Cart","", "success");
           }else
           if (t == "Something Went Wrong") {
            swal("Add Cart Error", t, "error");
           }else
           if (t == "Product added successfully") {
            swal("Add Cart", t, "success");
           }else
           if (t == "Please Sign In or Register.") {
            swal("Add Cart Failed", t, "error");
           }else{
            swal("Add Cart Failed", t, "error");
           }
       }
   }

   r.open("GET", "addToCartProcess.php?id=" + id, true);

   r.send();
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