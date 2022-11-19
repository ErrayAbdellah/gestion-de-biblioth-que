function clearmodel()
{
    
    document.getElementById('formTask').reset();

    document.querySelector('#addNewBook').classList.remove("d-none");
    document.querySelector('#btnss').classList.add("d-none");
    document.querySelector('#staticBackdropLabel').innerText = "Add new book";
     
}


function getBook(id,title,author,language,state,date,price,qnt,category,image)
{ 
    
    console.log(id+" - "+title+" - "+author+" - "+language+" - "+state+" - "+date+" - "+price+" - "+qnt+" - "+category+" - "+image);
    
    document.querySelector('#idUpdate').value     = id      ;
    document.querySelector('#title').value      = title     ;
    document.querySelector('#author').value     = author    ;
    document.querySelector('#language').value   = language ;
    document.querySelector('#state').value      = state     ;
    document.querySelector('#date').value       = date      ;
    document.querySelector('#price').value      = price     ;
    document.querySelector('#category').value   = category  ;
    document.querySelector('#quantity').value   = qnt       ;
    document.querySelector('#btnss').classList.remove("d-none");
    document.querySelector('#addNewBook').classList.add("d-none");
    document.querySelector('#staticBackdropLabel').innerText = "Edite" ;        

}

function sell(id)
{
    console.log(id);
    document.querySelector('#idBookSell').value = id;
}
















// {
//     document.getElementById("formTask").reset();
//     document.getElementById("buttonCu").innerHTML = `	
//         <input type="submit"data-bs-dismiss="modal" class="btn btn-danger rounded-3 w-25 "  value="Cancel">
//         <input type="submit" id="sumbit"  class="btn btn-success rounded-3 w-25" name="save" value="Save">`
// }
