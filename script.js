<script type='text/javascript'>
$(document).ready(function() {
$(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
     $('.retourHaut').fadeIn();
      }
else
{
    
$('.retourHaut').fadeOut();
     
}
});
$('.retourHaut').click(function(){
     
$('html, body').animate({scrollTop :0},800);
      return false;
});
});
</script>