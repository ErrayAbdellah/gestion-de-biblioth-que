function clearmodel()
{
    document.getElementById('formTask').reset();
    
}


function getBook(id,title,author,language,state,date,price)
{

   // console.log(id+" "+title+" "+author+" "+language+" "+state+" "+date+" "+price);

    document.querySelector('#bookID').value     = id        ;
    document.querySelector('#title').value      = title     ;
    document.querySelector('#author').value     = author    ;
    document.querySelector('#language').value   = language  ;
    document.querySelector('#state').value      = state     ;
    document.querySelector('#date').value       = date      ;
    document.querySelector('#price').value      = price     ;

}
















// {
//     document.getElementById("formTask").reset();
//     document.getElementById("buttonCu").innerHTML = `	
//         <input type="submit"data-bs-dismiss="modal" class="btn btn-danger rounded-3 w-25 "  value="Cancel">
//         <input type="submit" id="sumbit"  class="btn btn-success rounded-3 w-25" name="save" value="Save">`
// }
