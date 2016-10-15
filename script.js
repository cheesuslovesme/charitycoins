function select1() {
    console.log("Selected 1");
    document.getElementById("charity1").style.backgroundColor = 'green';
    document.getElementById("charity2").style.backgroundColor = '#448083';
    document.getElementById("charity3").style.backgroundColor = '#448083';
};

function select2() {
    console.log("Selected 2");
    document.getElementById("charity1").style.backgroundColor = '#448083';
    document.getElementById("charity2").style.backgroundColor = 'green';
    document.getElementById("charity3").style.backgroundColor = '#448083';
};

function select3() {
    console.log("Selected 3");
    document.getElementById("charity1").style.backgroundColor = '#448083';
    document.getElementById("charity2").style.backgroundColor = '#448083';
    document.getElementById("charity3").style.backgroundColor = 'green';
};

var donate_on = 0;
function handleDonateClick () {
  donate_on = 1;
  startDonating();
  begin_mining()
}

function startDonating () {
    resetCounter()
    $('#donate_message').html("You have donated $ ");
}

function stopDonating () {
    resetCounter()
    $('#donate_message').html("You could have donated $ ");
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
