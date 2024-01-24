// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            },
            false
        );
    });
})();

// $(document).ready(function () {
//     $("#productform").validate({
//         rules: {
//             name: {
//                 required: true,
//             },
//             price: {
//                 required: true,
//             },
//             stock: {
//                 required: true,
//             },
//             category: {
//                 required: true,
//             },
//             image: {
//                 required: true,
//             },
//         },
//         messages: {
//             name: {
//                 required: "Nama Produk TIdak Boleh Kosong!",
//             },
//             price: {
//                 required: "Silahkan Masukkan Harga Produk!",
//             },
//             stock: {
//                 required: "Stock Produk Tidak Boleh Kosong!",
//             },
//             category: {
//                 required: "Pilih Kategori Produk!",
//             },
//             image: {
//                 required: "Masukkan Gambar Produk!",
//             },
//         },
//     });
// });
