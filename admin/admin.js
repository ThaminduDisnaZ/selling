
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
            }else {
       
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

