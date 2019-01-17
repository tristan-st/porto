var currentStep = 1;
var isSwitching = 0;

$('#next-step').click(function() {
  var counter = $('#js-progressbar').val();
  counter += 7.69230769231;
  console.log(counter);
  $('#js-progressbar').val(counter);
  if (currentStep < 20 && isSwitching == 0) {
    isSwitching++;
    if (currentStep == 13) {
      // Result stage
      $('#prev_next').css('display', 'none');
      $('#change_submit').css('display', 'inline-block');
    }
    $('#tab-' + currentStep).fadeOut(200, function() {

      currentStep++;
      $('#tab-' + currentStep).fadeIn(200, function() {
        isSwitching--;
      });

    });
  }
});

$('#previous-step').click(function() {
  var counter = $('#js-progressbar').val();
  counter-=7.69230769231;
  console.log(counter);
  $('#js-progressbar').val(counter);
  if (currentStep > 1 && isSwitching == 0) {
    isSwitching++;
    $('#tab-' + currentStep).fadeOut(200, function() {

      currentStep--;
      $('#tab-' + currentStep).fadeIn(200, function() {
        isSwitching--;
      });

    });
  }
});
