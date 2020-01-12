
$body = $("body");
$( document ).ajaxStart(function() {
  console.log("Loading Start");
  $body.addClass("loading");
}); 
$( document ).ajaxStop(function() {
  console.log("Loading Stop");
  $body.removeClass("loading");
});
function customSuccess(msg)
{
    Swal.fire(
        'Success',
        msg,
        'success'
      )
}
function customError(msg)
{
    Swal.fire(
        'Oops...',
        msg,
        'error'
      )
}
function customModal(ttl,msg,img)
{ 
  Swal.fire({
    title: ttl,
    text: msg,
    imageUrl: img,
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: 'Custom image'
  })
}