var animating = false

$('#menu').click(function () {
  if (animating) return
  $(this).toggleClass('close')
  $('body').toggleClass('sobremi')
  animating = true
  setTimeout(function () { animating = false }, 300)
});