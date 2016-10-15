  var donate_on = 0;
  function handleDonateClick () {
//    $('#banner').css('background-color', 'lightblue');
    if (donate_on) {
      donate_on = 0;
      stopDonating();
    } else {
      donate_on = 1;
      startDonating();
    }
  }

  function startDonating () {
    resetCounter()
    $('#donate_message').html("You have donated $ ");
    $('#counter').css('color','green');
  }

  function stopDonating () {
    resetCounter()
    $('#donate_message').html("You could have donated $ ");
    $('#counter').css('color','red');
  }

  var ammt_donated = 0.00;

  function updateCounter () {
    if (Math.floor(Math.random() * 3 +1) > 2) {
      ammt_donated += 0.01;
      $('#donated').html(ammt_donated.toFixed(2));
    }
  }

  function resetCounter () {
    ammt_donated = 0.00;
  }

  window.setInterval(updateCounter,100);