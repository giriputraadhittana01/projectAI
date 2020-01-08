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