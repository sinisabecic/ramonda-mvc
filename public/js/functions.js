//* Za brisanje korisnika iz CMS

function deleteUser(item) {
  if (confirm("Are you sure?")) {
    var formData = {
      user_id: item,
    };
    $.ajax({
      type: "POST",
      url: "<?= ROOT; ?>/users/delete",
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
