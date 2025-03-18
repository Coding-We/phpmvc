$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#fromModalLabel").html("Tambah Data Karyawan");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#fromModalLabel").html("Ubah Data Karyawan");
    $(".modal-footer button[type=submit]").html("Ubah Data");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/karyawan/getubah",
      data: { id: id },
      method: "post",

      success: function (data) {
        console.log(data);
      },
    });
  });
});
