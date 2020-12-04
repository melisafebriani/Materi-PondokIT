$(function() {

  $('.tombolTambahData').on('click', function(){
    $('.jurusan option').remove();
    
    $('#formModalLabel').html('Tambah Data Santri');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.jurusan').append('<option value="Programmer">Programmer</option>' +
            '<option value="Multimedia">Multimedia</option>'+
            '<option value="Immers">Immers</option>'+
            '<option value="CEO">CEO</option>'+
            '<option value="Koki">Koki</option>');
   });

  $('.tampilModalUbah').on('click', function(){
    $('.jurusan option').remove();
    
    $('#formModalLabel').html('Ubah Data Santri');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/materi-pondok-it/Sprint-6/tugas/tugas-1/public/santri/ubah');

    
   

    const id = $(this).data('id');
    // console.log(id);


    $.ajax({
      url : 'http://localhost/materi-pondok-it/Sprint-6/tugas/tugas-1/public/santri/getubah',
      data :{id : id},
      method : 'post',
      dataType : 'json',
      success : function(data) {
        // console.log(data);
        $('#nama').val(data.nama);
        $('#alamat').val(data.alamat);
        $('#telp').val(data.telp);
        $('#email').val(data.email);
        if (data.jurusan == 'Programmer') {
          $('.jurusan').append('<option selected value="Programmer">Programmer</option>')  
          $('.jurusan').append('<option value="Multimedia">Multimedia</option>')  
          $('.jurusan').append('<option value="Imers">Imers</option>')  
          $('.jurusan').append('<option value="CEO">CEO</option>')  
          $('.jurusan').append('<option value="Koki">Koki</option>')  
        } else if(data.jurusan == 'Multimedia'){
          $('.jurusan').append('<option value="Programmer">Programmer</option>')  
          $('.jurusan').append('<option selected value="Multimedia">Multimedia</option>')  
          $('.jurusan').append('<option value="Imers">Imers</option>')  
          $('.jurusan').append('<option value="CEO">CEO</option>')  
          $('.jurusan').append('<option value="Koki">Koki</option>')  
        } else if(data.jurusan == 'Imers') {
          $('.jurusan').append('<option value="Programmer">Programmer</option>')  
          $('.jurusan').append('<option value="Multimedia">Multimedia</option>')  
          $('.jurusan').append('<option selected value="Imers">Imers</option>')  
          $('.jurusan').append('<option value="CEO">CEO</option>')  
          $('.jurusan').append('<option value="Koki">Koki</option>')  
        } else if(data.jurusan == "CEO") {
          $('.jurusan').append('<option value="Programmer">Programmer</option>')  
          $('.jurusan').append('<option value="Multimedia">Multimedia</option>')  
          $('.jurusan').append('<option value="Imers">Imers</option>')  
          $('.jurusan').append('<option selected value="CEO">CEO</option>')  
          $('.jurusan').append('<option value="Koki">Koki</option>')  
        }else if(data.jurusan == "Koki"){
          $('.jurusan').append('<option value="Programmer">Programmer</option>')  
          $('.jurusan').append('<option value="Multimedia">Multimedia</option>')  
          $('.jurusan').append('<option value="Imers">Imers</option>')  
          $('.jurusan').append('<option value="CEO">CEO</option>')  
          $('.jurusan').append('<option selected value="Koki">Koki</option>')  
        }
        $('#id').val(data.id);
      }
    });
  });
});
