//scripku
$('.page-scroll').on('click', function(e){

//ambil isi hreff
  var tujuanku = $(this).attr('href');
//tangkapin aku
  var elemenTujuan = $(tujuanku);

//pindah ahhh
  $('body').animate({

    scrollTop: elemenTujuan.Offset().top - 50

  }, 1000, 'swing');

  e.preventDefault();

});