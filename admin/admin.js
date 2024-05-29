
function adminLogin() {


    var aun = document.getElementById("aun");
    var apw = document.getElementById("apw");

    var f = new FormData();
    f.append("u", aun.value);
    f.append("p", apw.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {

        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;



            if (response == "Success") {
                document.getElementById("msg").innerHTML = response;

                window.location = "index.php";
            } else {

                document.getElementById("msg").innerHTML = response;
            }


        }
    }
    request.open("POST", "adminloginprocess.php", true);
    request.send(f);

}


// ***********************************************************************************

function loading() {
    // userlist
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            document.getElementById("tb").innerHTML = response;


        }
    };

    request.open("post", "UserloadingProcess.php", true);
    request.send();
    // userlist



    //  totalusers
    var request2 = new XMLHttpRequest();

    request2.onreadystatechange = function () {
        if (request2.readyState == 4 && request2.status == 200) {
            var response = request2.responseText;
            document.getElementById("report").innerHTML = response;
        }
    };

    request2.open("post", "ReportloadingProcess.php", true);
    request2.send();

    //  totalusers


    //  totalproduct

    var request3 = new XMLHttpRequest();

    request3.onreadystatechange = function () {

        if (request3.readyState == 4 && request3.status == 200) {

            var response = request3.responseText;
            document.getElementById("PReport").innerHTML = response;
        }

    };

    request3.open("POST", "TotalProductCount.php", true);
    request3.send();

    //  totalproduct

    var request4 = new XMLHttpRequest();

    request4.onreadystatechange = function () {

        if (request4.readyState == 4 && request4.status == 200) {


            var response = request4.responseText;
            document.getElementById("orderslist").innerHTML = response;
        }
    };

    request4.open("POST", "OrderListProcess.php", true);
    request4.send();

}

// ***********************************************************************************

function searchuserid() {

    var uid = document.getElementById("userid");



    var f = new FormData;

    f.append("u", uid.value);




    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;



            if (response == "Pleace Enter User ID") {
                swal("Oops....", "Pleace Enter User ID", "error");
                document.getElementById("udm2").className = "modal-dialog modal-dialog-centered d-none ";
            } else if (response == "Invalid User Id") {
                swal("Oops....", "Invalid User Id", "error");
                document.getElementById("udm2").className = "modal-dialog modal-dialog-centered d-none ";
            } else {
                document.getElementById("udm2").className = "modal-dialog modal-dialog-centered ";
                document.getElementById("udm3").innerHTML = response;
            }

        }

    }

    request.open("POST", "findUserProcess.php", true);
    request.send(f);

}

// ***********************************************************************************

function ubb() {

    var uid = document.getElementById("userid");

    var f = new FormData();
    f.append("uid", uid.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "block") {

                swal("User Blocked Successfull....!", "", "warning");
           


            }
            if (response == "Active") {

             
                swal("User Active Successfull", "", "success");

            }

        }

    }

    request.open("POST", "userBlockProcess.php", true);
    request.send(f);
}


// ***********************************************************************************

function addcategory() {
    var category = document.getElementById("addcategory");

    var f = new FormData();
    f.append("c", category.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {

        if (request.readyState == 4 & request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addCategoryProcess.php", true);
    request.send(f);



}

// ***********************************************************************************


function addmodal() {
    var addmodal = document.getElementById("addmodal");

    var f = new FormData();
    f.append("m", addmodal.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addModelProcess.php", true);
    request.send(f);

}

function addstorage() {
    var addstorage = document.getElementById("addstorage");

    var f = new FormData();
    f.append("s", addstorage.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addStorageProcess.php", true);
    request.send(f);

}



function addwarranty(){

  
        var addwarranty = document.getElementById("addwarranty");
    
        var f = new FormData();
        f.append("addwarranty", addwarranty.value);
    
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
    
            if (request.readyState == 4 && request.status == 200) {
    
                var response = request.responseText;
    
                if (response == "Success") {
                    swal("Warranty Added Successfully", "", "success");
                } else {
                    swal(response, "", "error");
                }
    
            }
    
        }
    
    
        request.open("POST", "addWarrantyProcess.php", true);
        request.send(f);

}
// ***********************************************************************************
function addgpu() {
    var addgpu = document.getElementById("addgpu");

    var f = new FormData();
    f.append("g", addgpu.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addGpuProcess.php", true);
    request.send(f);

}
// ***********************************************************************************
function addram() {
    var addram = document.getElementById("addram");

    var f = new FormData();
    f.append("r", addram.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addRamProcess.php", true);
    request.send(f);

}
// ***********************************************************************************
function addcpu() {
    var addcpu = document.getElementById("addcpu");

    var f = new FormData();
    f.append("c", addcpu.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addCpuProcess.php", true);
    request.send(f);


}
// ***********************************************************************************
function addbrand() {
    var addbrand = document.getElementById("addbrand");

    var f = new FormData();
    f.append("b", addbrand.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addBrandProcess.php", true);
    request.send(f);



}
// ***********************************************************************************
function adddisplay() {
    var adddisplay = document.getElementById("adddisplay");

    var f = new FormData();
    f.append("d", adddisplay.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addDisplayProcess.php", true);
    request.send(f);



}
// ***********************************************************************************
function addsize() {
    var addsize = document.getElementById("addsize");

    var f = new FormData();
    f.append("s", addsize.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;

            if (response == "Success") {
                swal("Added Successfully", "", "success");
            } else {
                swal(response, "", "error");
            }

        }

    }


    request.open("POST", "addSizeProcess.php", true);
    request.send(f);


}


function changeProductImage() {
    var image = document.getElementById("imageuploader");

    image.onchange = function () {
        var file_count = image.files.length;

        if (file_count <= 3) {

            for (x = 0; x < file_count; x++) {
                var file = this.files[x];
                var url = window.URL.createObjectURL(file);

                document.getElementById("i" + x).src = url;


            }
        } else {
            swal("Image Upload Error", "please select 3 or less than 3 images.", "error");
        }
        
    }
}



function caldis() {

    var price = document.getElementById("pprice").value;
    var discount = document.getElementById("pdiscount").value;
 
 
 
    var totalamount = (discount * price) / 100 ;
 
 
 
    var totald = price - totalamount;
 
    var total = parseInt(totald.toFixed(0));
 
   if (discount > 0) {
      document.getElementById("caldis").innerHTML ="Total Price : Rs." + total +".00";

   } else {
     
     document.getElementById("caldis").innerHTML = "No Discount" ;
 
 
   }
 
 }

 


function addProduct(param) {

  

    var title = document.getElementById("pname");
    var stitle = document.getElementById("psname");
    var price = document.getElementById("pprice");
    var discount = document.getElementById("pdiscount");
    var desc = document.getElementById("pdescription");
    var qty = document.getElementById("qty");
    var category = document.getElementById("category");
    var brand = document.getElementById("brand");
    var model = document.getElementById("model");
    var display = document.getElementById("display");
    var cpu = document.getElementById("cpu");
    var ram = document.getElementById("ram");
    var gpu = document.getElementById("gpu");
    var storage = document.getElementById("storage");
    var size = document.getElementById("size");
    var pmkeyword = document.getElementById("pmkeyword");
    var image = document.getElementById("imageuploader");
    var delivery = document.getElementById("delivery");
    var dispc = document.getElementById("caldis").innerHTML;

    var priced = document.getElementById("pprice").value;
    var discountd = document.getElementById("pdiscount").value; 
    var totalamountd = (discountd * priced) / 100 ;
    var totaldd = priced - totalamountd;
    var totald = parseInt(totaldd.toFixed(0));
   var caldis = document.getElementById("caldis").innerHTML ;
   var warranty = document.getElementById("warranty") ;
    
  if (caldis == "No Discount") {
        var dprice = 0;
 
  } else {
        var dprice = totald;
  }

    var f = new FormData();
   
    f.append("ti", title.value);
    f.append("st", stitle.value);
    f.append("pr", price.value);
    f.append("di", discount.value);
    f.append("de", desc.innerHTML);
    f.append("qt", qty.value);
    f.append("ca", category.value);
    f.append("br", brand.value);
    f.append("mo", model.value);
    f.append("dis", display.value);
    f.append("cp", cpu.value);
    f.append("ra", ram.value);
    f.append("gp", gpu.value);
    f.append("str", storage.value);
    f.append("si", size.value);
    f.append("pm", pmkeyword.value);
    f.append("del", delivery.value);
    f.append("dprice", dprice);
    f.append("war", warranty.value);


  

    var file_count = image.files.length;
 
    for (var x = 0; x < file_count; x++) {
        f.append("image" + x, image.files[x]);
        
    }

    var request = new XMLHttpRequest();


    request.onreadystatechange = function() {

        if (request.readyState == 4 && request.status == 200) {
     
            var response = request.responseText;

            

            if (response == "Success") {
                swal("Add Product Successfull","", "success");
            } else {
                swal("Add Product Error", response, "error");
            }
            
        }

    }






    request.open("POST", "addProductProcess.php", true);
    request.send(f);

}

function cancelup(){

    window.location = "./manageProduct.php";

}




function updateProduct(pid) {
    var title = document.getElementById("pname");
    var stitle = document.getElementById("psname");
    var price = document.getElementById("pprice");
    var discount = document.getElementById("pdiscount");
    var desc = document.getElementById("pdescription");
    var qty = document.getElementById("qty");
    var category = document.getElementById("category");
    var brand = document.getElementById("brand");
    var model = document.getElementById("model");
    var display = document.getElementById("display");
    var cpu = document.getElementById("cpu");
    var ram = document.getElementById("ram");
    var gpu = document.getElementById("gpu");
    var storage = document.getElementById("storage");
    var size = document.getElementById("size");
    var pmkeyword = document.getElementById("pmkeyword");
    var image = document.getElementById("imageuploader");
    var delivery = document.getElementById("delivery");
    var warranty = document.getElementById("warranty");
    
    // Calculate discounted price
    var priced = parseFloat(price.value);
    var discountd = parseFloat(discount.value);
    var totalamountd = (discountd * priced) / 100;
    var totaldd = priced - totalamountd;
    var totald = parseInt(totaldd.toFixed(0));
    var dprice = discountd > 0 ? totald : 0;

    var formData = new FormData();
    formData.append("id", pid); // Add product ID to form data
    formData.append("ti", title.value);
    formData.append("st", stitle.value);
    formData.append("pr", price.value);
    formData.append("di", discount.value);
    formData.append("de", desc.innerHTML);
    formData.append("qt", qty.value);
    formData.append("ca", category.value);
    formData.append("br", brand.value);
    formData.append("mo", model.value);
    formData.append("dis", display.value);
    formData.append("cp", cpu.value);
    formData.append("ra", ram.value);
    formData.append("gp", gpu.value);
    formData.append("str", storage.value);
    formData.append("si", size.value);
    formData.append("pm", pmkeyword.value);
    formData.append("del", delivery.value);
    formData.append("dprice", dprice);
    formData.append("war", warranty.value);

    var file_count = image.files.length;
    for (var x = 0; x < file_count; x++) {
        formData.append("image" + x, image.files[x]);
    }

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            swal("Add Product Error", response, "error");
        }
    }
    request.open("POST", "updateProductProcess.php", true);
    request.send(formData);
}

