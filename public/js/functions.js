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

// $(document).on("click", "#edituser", function () {
//   $("#editModal").modal("show");

//   $tr = $(this).closest("td");

//   var data = $tr
//     .children("td")
//     .map(function () {
//       return $(this).text;
//     })
//     .get();

//   console.log(data[4]);

// $("#user_id").val(data[0]);
// $("#name").val(data[0]);
// $("#email").val(data[1]);
// $("#password").val(data[2]);
// $("#country").val(data[3]);
// $("#city").val(data[4]);
// $("#zip").val(data[5]);
// $("#username").val(data[6]);
// $("#password").val(data[7]);
// $("#confirmPassword").val(data[8]);
// $("#role").val(data[9]);
// });

// $("#close").on("click", function () {
//   $("#editModal").modal("hide");
// });
