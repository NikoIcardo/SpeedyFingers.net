//localStorage.removeItem('Entered'); //testing purposes
if (localStorage.getItem('Entered') === null)
{
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
    
    localStorage.setItem('Entered', true); // the user has entered the website for the first time
}


