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




  let timerInterval;
  Swal.fire({
    title: "Please Wait",
    html: "",
    timer: 5000,
    timerProgressBar: true,
    didOpen: () => {
      Swal.showLoading();
      const timer = Swal.getPopup().querySelector("b");
      timerInterval = setInterval(() => {
        timer.textContent = `${Swal.getTimerLeft()}`;
      }, 100);
    },
    willClose: () => {
      clearInterval(timerInterval);
    }
  }).then((result) => {
    /* Read more about handling dismissals below */
    if (result.dismiss === Swal.DismissReason.timer) {
      console.log("I was closed by the timer");
    }
  });



  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;




      if (response == "Success") {


        swal({
          title: "Check Your Email",
          text: "",
          timer: 3000,
        }).then(
          function () { },
          // handling the promise rejection
          function (dismiss) {
            if (dismiss === "timer") {
              console.log("I was closed by the timer");
            }
          }
        );





        setTimeout(function () {
          swal("Type OTP Code here:", {
            content: "input",
          }).then((value) => {



            let timerInterval;
            Swal.fire({
              title: "Please Wait",
              html: "",
              timer: 2000,
              timerProgressBar: true,
              didOpen: () => {
                Swal.showLoading();
                const timer = Swal.getPopup().querySelector("b");
                timerInterval = setInterval(() => {
                  timer.textContent = `${Swal.getTimerLeft()}`;
                }, 100);
              },
              willClose: () => {
                clearInterval(timerInterval);
              }
            }).then((result) => {
              /* Read more about handling dismissals below */
              if (result.dismiss === Swal.DismissReason.timer) {
                console.log("I was closed by the timer");
              }
            });


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
                } else {
                  // swal(
                  //   "OTP ",
                  //   "Your Email has been Very Failed : " + response2,
                  //   "error"

                  // );


                  setTimeout(function () {
                    swal("Re-Enter OTP Code here:", {
                      content: "input",
                    }).then((value) => {

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
                          }

                        }
                      };

                      request2.open("POST", "otpVerifyProcess.php", true);
                      request2.send(f);
                    });
                  }, 3000);





                }
              }
            };

            request2.open("POST", "otpVerifyProcess.php", true);
            request2.send(f);
          });
        }, 3000);





      } else {
        document.getElementById("msg1").innerHTML = response;
        document.getElementById("msgdiv1").className =
          "alert alert-dismissible fade show py-2 bg-warning d-block";
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
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;

      if (response == "Success") {
        window.location = "index.php";
      } else {
        document.getElementById("msg2").innerHTML = response;
        document.getElementById("msgdiv2").className =
          "alert alert-dismissible fade show py-2 bg-warning d-block";
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
        swal(
          "Remove From Cart",
          "Product removed from cart Successfull",
          "success"
        );
        setInterval(1009);
        window.location.reload();
      } else {
        window.location.reload();
      }
    }
  };

  r.open("GET", "deleteFromCartProcess.php?id=" + id, true);
  r.send();
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
      } else if (t == "Something Went Wrong") {
        swal("Add Cart Error", t, "error");

      } else if (t == "Product added successfully") {
        swal("Add Cart", t, "success");
        setTimeout(

          window.location.reload()

          , 3000);
        window.location.reload();
      } else if (t == "Please Sign In or Register.") {
        swal("Add Cart Failed", t, "error");
      } else {
        swal("Add Cart Failed", t, "error");
      }
    }
  };

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
  document.getElementById("searcharia").className =
    "product__area box-plr-75 pb-70";

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
  };
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
  };

  request.open("POST", "advanceSearchProcess.php", true);
  request.send(f);
}

function discode() {
  var code = document.getElementById("discode");
  var total = document.getElementById("totalid");

  var f = new FormData();

  f.append("code", code.value);
  f.append("total", total.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;

      if (response == "ec") {
        swal("Promo Code", "Enter Discount Code", "error");
      } else if (response == "wc") {
        swal("Promo Code", "Code is Invalid", "error");
      } else if (response == "sww") {
        swal("Promo Code", "Somthing Went Wrong", "error");
      } else {
        swal(
          "Promo Code",
          "Congratulations...! You'r New Price is Rs." + response + ".00",
          "success"
        );
        document.getElementById("oto").value = response;
      }
    }
  };

  request.open("POST", "discodeProcess.php", true);
  request.send(f);
}

function checkout() {


  var total = document.getElementById("oto");
  var code = document.getElementById("discode");

  request = new XMLHttpRequest();

  var f = new FormData();

  f.append("total", total.value);
  f.append("code", code.value);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;

      if (response == "success") {
        swal("Please Wait", "Processing", "warning");
        window.location.href = "checkout.php";
      } else if (response == "uev") {
        swal("Checkout Error", "Please Verify Your Email", "error");
      } else if (response == "ua") {
        swal("Checkout Error", "Please Update Your Address", "error");
      } else if (response == "ssw") {
        swal("Checkout Error", "Something Went Wrong", "error");
      }else{
        swal("Please Wait", response, "warning");
      }
    }
  };

  request.open("POST", "checkoutProcess.php", true);
  request.send(f);
}

function emailverify() {
  request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
    }
  };

  request.open("POST", "otpVerifyProcess.php", true);
  request.send();

  // if (response == "Success") {
  //    swal({
  //       title: 'Check Your Email',
  //       text: '',
  //       timer: 3000
  //    }).then(
  //       function () { },
  //       // handling the promise rejection
  //       function (dismiss) {
  //          if (dismiss === 'timer') {
  //             console.log('I was closed by the timer')
  //          }
  //       }
  //    )
  //    setTimeout(function () {

  //       swal("Type OTP Code here:", {
  //          content: "input",
  //       })
  //          .then((value) => {
  //             var fname = document.getElementById("fname");
  //             var email = document.getElementById("email");
  //             var f = new FormData();
  //             f.append("e", email.value);
  //             f.append("f", fname.value);
  //             f.append("otp", value);

  //             var request2 = new XMLHttpRequest();

  //             request2.onreadystatechange = function () {
  //                if (request2.readyState == 4 && request2.status == 200) {
  //                   response2 = request2.responseText;

  //                   if (response2 == "Success") {
  //                      swal("OTP ", "Your Email Is Veryfied Successfull", "success");
  //                      window.location.assign("login.php");
  //                   } else if (response2 != "Success") {
  //                      swal("OTP ", "Your Email has been Very Failed : " + response2, "error");
  //                   }

  //                }
  //             }

  //             request2.open("POST", "otpVerifyProcess.php", true);
  //             request2.send(f);

  //          });

  //    }, 3000);

  // } else {
  //    document.getElementById("msg1").innerHTML = response;
  //    document.getElementById("msgdiv1").className = "alert alert-dismissible fade show py-2 bg-warning d-block";

  // }
}

function changeImage() {
  var view = document.getElementById("viewimg");
  var file = document.getElementById("profileimg");

  file.onchange = function () {
    var file1 = this.files[0];
    var url = window.URL.createObjectURL(file1);
    view.src = url;
  };
}

function updateProfile() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var mobile = document.getElementById("mobile");
  var opw = document.getElementById("opword");
  var npw = document.getElementById("npword");
  var cpw = document.getElementById("cpword");

  var city = document.getElementById("city");
  var no = document.getElementById("no");
  var street = document.getElementById("street");

  var img = document.getElementById("profileimg");

  var f = new FormData();

  f.append("fname", fname.value);
  f.append("lname", lname.value);
  f.append("mobile", mobile.value);
  f.append("opw", opw.value);
  f.append("npw", npw.value);
  f.append("cpw", cpw.value);
  f.append("city", city.value);

  f.append("no", no.value);
  f.append("street", street.value);

  if (img.files.length != 0) {
    f.append("img", img.files[0]);


  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "success") {
        swal("Profile Update", "Your Profile is Update Successfull", "success");
      } else if (response == "Your Password is Changed") {

        swal("Password Update", "Your Password is Update Successfull", "success");

      } else {

        swal("Profile Update Error", response, "error");

      }


    }
  };

  request.open("POST", "updateProfileProcess.php", true);
  request.send(f);
}


function addwatchlist(id) {


  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;

      if (t != "success") {
   
        swal("Add To Watchlist Failed..!", t, "error");
      } else {
        swal("Add To Watchlist", "Product Is Add to Watchlist Successfull", "success");
        
      }

    }
  };

  r.open("POST", "addToWatchlistProcess.php?id=" + id, true);

  r.send();
}



function frogotpw() {

  var pw = document.getElementById("fpw");

  var f = new FormData();

  f.append("pw", pw.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;


      if (response == "ok") {
        swal("Email Send", "Check Your Inbox", "success");

        otp.className = "form-control m-100 d-block";
        document.getElementById("otpb").className = "btn btn-primary d-block ";
        document.getElementById("seb").className = "btn btn-primary d-none";


        var f2 = new FormData();

        f2.append("pw", pw.value);


        var request2 = new XMLHttpRequest();

        request2.onreadystatechange = function () {


        }


        request2.open("POST", "otpConfirmProcess.php", true);
        request2.send(f);


      } else {
        swal("Email Send", response, "error");
      }



    }
  }

  request.open("POST", "checkEmailProcess.php", true);
  request.send(f);





}
function otpconfirm() {



  var pw = document.getElementById("fpw");
  var otp = document.getElementById("otp");

  var f3 = new FormData();

  f3.append("otp", otp.value);
  f3.append("email", pw.value);

  request3 = new XMLHttpRequest();

  request3.onreadystatechange = function () {

    if (request3.readyState == 4 && request3.status == 200) {
      response3 = request3.responseText;

      if (response3 == "ok") {

        otp.className = "form-control m-100 d-block";
        document.getElementById("otpb").className = "btn btn-primary d-none ";
        document.getElementById("seb").className = "btn btn-primary d-none";
        document.getElementById("cpb").className = "btn btn-primary d-block";


        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
          if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            document.getElementById("npwdiv").innerHTML = response;

          }
        }
        request.open("POST", "confirmPwDiv.php", true);
        request.send(f3);

      } else {

        swal("Email Send", response3, "error");

      }

    }

  }

  request3.open("POST", "confirmOtpProcess.php", true);
  request3.send(f3);




}


function changepw() {
  var pw = document.getElementById("fpw");
  var npw = document.getElementById("npw").value;
  var cnpw = document.getElementById("cnpw").value;



  if (npw.length < 5) {
    swal("Set New Password Fail", "Please enter your password more than 5 characters length", "error");

  } else if (npw == cnpw) {


    var f = new FormData();

    f.append("npw", npw);
    f.append("email", pw.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {

      if (request.readyState == 4 && request.status == 200) {
        var response = request.responseText;

        if (response == "Success") {
          swal("Password Change Status", "Password is Changed Successfully", "success");
        } else {
          swal("Set New Password Fail", response, "error");
        }

      }

    }

    request.open("POST", "updateUserPassword.php", true);
    request.send(f);




  } else {

    swal("Set New Password Fail", "Password is does not match..", "error");
  }

}



function deleteFromWatchlist(id) {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
 
      if (t == "success") {
        swal(
          "Remove From Cart",
          "Product removed from cart Successfull",
          "success"
        );
        setInterval(1009);
        window.location.reload();
      } else {
        window.location.reload();
      }
    }
  };

  r.open("GET", "deleteFromWatchlistProcess.php?id=" + id, true);
  r.send();
}