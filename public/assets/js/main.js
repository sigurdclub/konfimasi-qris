

// ######## Utility ####### //

// Clock
let span = document.getElementById('dateTime');

function time() {
    var d = new Date();
    var s = d.getSeconds();
    var m = d.getMinutes();
    var h = d.getHours();
    span.textContent = ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
}
setInterval(time, 1000);


// Number total history nomina






// Number input commas
    $('input.nominal').keyup(function(event) {
        // skip for arrow keys
        if(event.which >= 37 && event.which <= 40) return;
        // format number
        $(this).val(function(index, value) {
        return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        });
    });



    // Number commas format
    $.fn.digits = function(){ 
        return this.each(function(){ 
            $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
        })
    }
    $(".number-nominal").digits();



    // URL Number
    $(document).ready(function () {
        $(".urlNumber").change(function() {
            if (!/^62\/\//.test(this.value)) {
                this.value = "62" + this.value;
            }
        });
    });
    
    
    // ############# Sweat Alert ############## //

// ============ Status Transaksi ========== //


// button cancel status transaksi
$('.btn-cancel-statusTransaksi').click( function () {
            
    let id = $(this).attr('data-id');
    console.log(id);

    Swal.fire({
        title               : 'Yakin Ingin Membatalkan Transaksi?',
        text                : "Transaksi Tidak Dapat Di kembalikan Lagi",
        icon                : 'warning',
        showCancelButton    : true,
        confirmButtonColor  : '#18c42c',
        cancelButtonColor   : '#d33',
        confirmButtonText   : 'Yes, delete it!'

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
        icon                : 'success',
        title               : 'Nomor Anda Berhasil Di Tambahkan',
        showConfirmButton   : false,
        timer               : 4500
    })
})

// Button save Admin data Public
$('.btn-adminDatapribadi').click( () => {
    Swal.fire({
        icon                : 'success',
        title               : 'Data Berhasil Di Simpan',
        showConfirmButton   : false,
        timer               : 4500
    })
})


// ========== Verifikasi Transaksi ======= //


// Button Thumbs Alert success
$('.btn-thumbsVerifikasi').click( function (){
            
    let id      = $(this).attr('data-id');
    console.log(id);

    Swal.fire({
                title               : `Apakah Anda Ingin Melakukan Validasi ? `,
                text                : "Tekan Ya Jika Benar. ",
                icon                : 'warning',
                showCancelButton    : true,
                confirmButtonColor  : '#18c42c',
                cancelButtonColor   : '#d33',
                confirmButtonText   : 'Ya, Benar !',
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
        icon                : 'success',
        title               : 'Subjek Pajak Berhasil Di Tambahkan',
        showConfirmButton   : false,
        timer               : 2000
    })
});


// =========== Data Public =========== //

// button delete data public alert
$('.delete-dataPublic').click( function()  {
            
    let id      = $(this).attr('data-id');
    let nama    = $(this).attr('data-nama');
    // console.log(nama);

    Swal.fire({
        title                   : `Yakin Menghapus ${nama}? `,
        text                    : "Data Tidak Dapat Dikembalikan!",
        icon                    : 'warning',
        showCancelButton        : true,
        confirmButtonColor      : '#18c42c',
        cancelButtonColor       : '#d33',
        confirmButtonText       : 'Ya, Hapus !',

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



        function countTotalTransaction(){
            let ammanu = document.getElementsByClassName('number-nominal-history');
            
            let store = [];
            let total = 0
            
            const total_nominal_history = document.querySelector('#total-nominal-history');
            console.log(total_nominal_history);
            for (let i = 0; i < ammanu.length; i++) {
                
                let ammanu_angka = parseInt(ammanu.item(i).innerText) 
                store.push(ammanu_angka);
                console.log(store);
                
            }
            for(i = 0 ; i < store.length ; i ++ ){
                total += store[i];
                console.log(total);
            }
            total_nominal_history.innerHTML = total

            return total_nominal_history;
        }

    countTotalTransaction()

        

    $.fn.digits = function(){ 
        return this.each(function(){ 
            $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
        })
    }
    $(".number-total-history").digits();

    // Number commas format
    $.fn.digits = function(){ 
        return this.each(function(){ 
            $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
        })
    }
    $(".number-nominal-history").digits();