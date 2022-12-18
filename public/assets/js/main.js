

// menu_item.forEach((item) => {
//     console.log(item);
// })





// // Add active class to the current button (highlight it)
// let menu_inner = document.querySelector('.menu-inner');
// let menu_item = document.querySelectorAll('.menu-item');

// for (var i = 0; i < menu_item.length; i++) {
//     menu_item[i].addEventListener("click", function() {
//     var current = document.querySelectorAll(".active");
//     current[0].className = current[0].className.replace(" active", "");
//     this.className += "active";
//     });
// }


// ############# Sweat Alert ############## //

let span = document.getElementById('dateTime');

function time() {
    var d = new Date();
    var s = d.getSeconds();
    var m = d.getMinutes();
    var h = d.getHours();
    span.textContent = 
    ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
}

setInterval(time, 1000);

//   let corousel = document.querySelector('.carousel');
//   console.log(corousel);


// ============ Status Transaksi ========== //


// button cancel status transaksi
$('.btn-cancel-statusTransaksi').click( function () {
            
    let id = $(this).attr('data-id');
    console.log(id);

    Swal.fire({
        title: 'Yakin Ingin Membatalkan Transaksi?',
        text: "Transaksi Tidak Dapat Di kembalikan Lagi",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#18c42c',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = `status-transaksi/delete/${id}`;
            Swal.fire(
            'Berhasil Di Batalkan!',
            'Terima Kasih, Silahkan Lakukan Transaksi Ulang.',
            'success'
            )
        }
        })
});



// ======== Data Pribadi Public ======== //

// Button save public data pribadi
$('.btn-public-datapribadi').click( () => {
    Swal.fire({
        icon: 'success',
        title: 'Nomor Anda Berhasil Di Tambahkan',
        showConfirmButton: false,
        timer: 4500
    })
})

// Button save Admin data Public
$('.btn-adminDatapribadi').click( () => {
    Swal.fire({
        icon: 'success',
        title: 'Data Berhasil Di Simpan',
        showConfirmButton: false,
        timer: 4500
    })
})


// ========== Verifikasi Transaksi ======= //


// Button Thumbs Alert success
$('.btn-thumbsVerifikasi').click( function (){
            
    let id      = $(this).attr('data-id');
    console.log(id);

    Swal.fire({
title: `Apakah Anda Ingin Melakukan Validasi ? `,

text: "Tekan Ya Jika Benar. ",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#18c42c',
cancelButtonColor: '#d33',
confirmButtonText: 'Ya, Benar !',


}).then((result) => {
    if (result.isConfirmed) {
            window.location = `verifikasi-transaksi/change-status/${id}`;
            Swal.fire(
            'Transaksi Berhasil Divalidasi!',
            'Terima Kasih.',
            'success',
        )
    }
    })
});


// ============== Input Data Baru =========== //

// button add subjek pajak
$('.btn-addSubjekPajak').click( () => {
    Swal.fire({
        icon: 'success',
        title: 'Subjek Pajak Berhasil Di Tambahkan',
        showConfirmButton: false,
        timer: 2000
    })
});


// =========== Data Public =========== //

// button delete data public alert
$('.delete-dataPublic').click( function()  {
            
    let id      = $(this).attr('data-id');
    let nama    = $(this).attr('data-nama');
    // console.log(nama);

    Swal.fire({
title: `Yakin Menghapus ${nama}? `,

text: "Data Tidak Dapat Dikembalikan!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#18c42c',
cancelButtonColor: '#d33',
confirmButtonText: 'Ya, Hapus !',


}).then((result) => {
    if (result.isConfirmed) {
            window.location = `data-public/delete/${id}`;
            Swal.fire(
            'Berhasil!',
            'Data Berhasil Dihapus.',
            'success',
        )
    }
    })
});