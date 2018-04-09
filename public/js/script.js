$(function() {
    $('.supprimer').click(function(evt){
      evt.preventDefault();
      if( confirm('Etes-vous sûr(e) de vouloir supprimer ce post ?', 'Oui', 'Non') ) {
        document.location = $(this).attr('href');
      }
    })
});