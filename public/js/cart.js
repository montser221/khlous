$(".cartinput").change(function () {
  var sum = 0;
  $(".cartinput").each(function () {
    sum += Number($(this).val());
  });
  $(".total").text(sum);
  $(".amount").val(parseFloat($(".total").text()) * 100);
});
$(".amount").val(parseFloat($(".total").text()) * 100);
