//* Za brisanje korisnika iz CMS
function deleteUser(item) {
  if (confirm("Are you sure?")) {
    var formData = {
      user_id: item,
    };
    $.ajax({
      type: "POST",
      url: "http://localhost/ramonda/users/delete",
      data: formData,
      success: function (response) {
        if (response.error) {
          console.log(response.error);
          alert(response.error);
        } else {
          console.log(response.success);
          window.location.reload(true);
        }
      },
      error: function (error) {
        console.log(error);
        alert("Greška, učitajte ponovo");
      },
      async: false,
    });
  }
}

//* Edit user in modal form
$(document).on("click", "#edituser", function () {
  $("#editModalLabel").html("Edit user data");
  // $(".modal-body form").attr("action", "http://localhost/ramonda/users/update");

  const id = $(this).data("id");

  $.ajax({
    url: "http://localhost/ramonda/users/edit",
    data: { user_id: id },
    method: "POST",
    dataType: "JSON",
    success: function (data) {
      if (data.error) {
        console.log(data.error);
        alert(data.error);
      } else {
        console.log(data[0]);

        $("#id").val(data[0].id);
        $("#name").val(data[0].name);
        $("#username").val(data[0].username);
        $("#email").val(data[0].email);
        // $("#password").val(data[0].password);
        $("#address").val(data[0].address);
        $("#city").val(data[0].city);
        $("#country").val(data[0].country);
        $("#phone").val(data[0].phone);
        $("#zip").val(data[0].zip);
        $("#is_admin").val(data[0].is_admin);
      }
    },
    error: function (error) {
      console.log(error);
      alert("Greška, učitajte ponovo");
    },
    async: false,
  });
});

//* Comtrade products I nacin
async function getData(url = "") {
  // Default options are marked with *
  const response = await fetch(url, {
    method: "GET", // *GET, POST, PUT, DELETE, etc.
    mode: "cors", // no-cors, *cors, same-origin
    cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
    credentials: "same-origin", // include, *same-origin, omit
    headers: {
      "Content-Type": "application/json",
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    redirect: "follow", // manual, *follow, error
    referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(), // body data type must match "Content-Type" header
  });
  return response.json(); // parses JSON response into native JavaScript objects
}
//todo POZIVANJE OVE GORNJE FUNKCIJE
//* Comtrade JS
document.querySelector("body").addEventListener("DOMContentLoaded", getData);
getData("http://localhost/ramonda/public/json/cjenovnik-comtrade.json")
  .then((data) => {
    // console.log(data);
    let output = "";
    let i = 0;
    data.forEach((item) => {
      i++;
      output += `
                <tr>
<td>${item.naziv.substring(0, 30)}</td>
<td>${item.proizvodjac}</td>
<td>${item.grupa}</td>
<td>${item.vpc_sa_pdv}</td>
<td>${item.vpcena}</td>
<td>${item.GS}</td>
<td>${item.Barcode}</td>
</tr>`;
    });
    $("#main").html(output);
  })
  .catch((err) => console.log(err));

//? ########################################################

//! Comtrade funkcija II(stariji) nacin
// function getJSON() {
//     fetch("http://localhost/ramonda/public/json/cjenovnik-comtrade.json")
//         .then((res) => res.json())
//         .then((data) => {
//             console.log(data);
//             let output = '';
//             let i = 0;
//             data.forEach(item => {
//                 i++;
//                 output += `
//                 <tr>
// <td>${item.naziv.substring(0, 30)}</td>
// <td>${item.proizvodjac}</td>
// <td>${item.grupa}</td>
// <td>${item.vpc_sa_pdv}</td>
// <td>${item.vpcena}</td>
// <td>${item.GS}</td>
// <td>${item.Barcode}</td>
// <td class="d-flex justify-content-center">
//   <div class="d-inline-flex">
//     <div class="px-1">
//       <a
//         href="#"
//         id="edituser"
//         class="text-primary"
//         data-bs-toggle="modal"
//         data-bs-target="#editModal"
//         data-id="${i}"
//       >
//         <i class="bi bi-pencil-square"></i>
//       </a>
//     </div>

//     <div class="px-1">
//       <a href="#" class="text-danger">
//         <i class="bi bi-x-square-fill"></i>
//       </a>
//     </div>
//   </div>
// </td>
// </tr>`;
//             });
//             document.getElementById("main").innerHTML = output;
//         })
//         .catch((err) => console.log(err));
// }
//

//? #################################################################

//* Za brisanje sesije iz CMS
function deleteSession(item) {
  if (confirm("Are you sure?")) {
    var formData = {
      session_id: item,
    };
    $.ajax({
      type: "POST",
      url: "http://localhost/ramonda/sessions/delete",
      data: formData,
      success: function (response) {
        if (response.error) {
          console.log(response.error);
          alert(response.error);
        } else {
          console.log(response.success);
          window.location.reload(true);
        }
      },
      error: function (error) {
        console.log(error);
        alert("Greška, učitajte ponovo");
      },
      async: false,
    });
  }
}
