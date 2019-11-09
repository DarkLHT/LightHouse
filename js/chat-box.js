$(function() {
    const $txtArea = $('#msg'),
          $send = $('#sendMsg'),
          $whatsBtn = $('#whatsapp'),
          $msgArea = $('.wrapper');
    
    //Toggle Message Section
    $whatsBtn.on('click', () => {
      $msgArea.fadeToggle(300);
    });
  
    //Send Message
    $send.on('click', () => {
      if ($txtArea.val() !== '') {
        let msg = $txtArea.val();
        let url = `https://api.whatsapp.com/send?phone=+212661327752?&text=WEB: ${msg}`;
  
        window.open(url);
        $txtArea.val('');
      }
    });
    
  });
  