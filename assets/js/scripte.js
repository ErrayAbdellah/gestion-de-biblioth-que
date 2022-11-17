function clearmodel()
{
    document.getElementById('formTask').reset();
    //  document.getElementById('btns').innerHTML = 
     document.querySelector('#addNewBook').classList.remove("d-none");
     document.querySelector('#updateModel').classList.add("d-none");
    //                                             <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    //                                            <input type="submit" class="btn btn-primary" name="addNewBook" value="ADD NEW BOOK">
                                                
    
}


function getBook(title,author,language,state,date,price,qnt,category,image)
{
    
    console.log(title+" "+author+" "+language+" "+state+" "+date+" "+price+" "+qnt+" "+category+" "+image);
    
    // document.querySelector('#bookID').value     = id        ;
    document.querySelector('#title').value      = title     ;
    document.querySelector('#author').value     = author    ;
    document.querySelector('#language').value   = language  ;
    document.querySelector('#state').value      = state     ;
    document.querySelector('#date').value       = date      ;
    document.querySelector('#price').value      = price     ;
    document.querySelector('#category').value   = category  ;
    document.querySelector('#quantity').value   = qnt       ;
    document.querySelector('#updateModel').classList.remove("d-none");
    document.querySelector('#addNewBook').classList.add("d-none");
                                                // <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                // <input type="submit" class="btn btn-primary" name="updateModel" value="updateModel">
                                                

}
















// {
//     document.getElementById("formTask").reset();
//     document.getElementById("buttonCu").innerHTML = `	
//         <input type="submit"data-bs-dismiss="modal" class="btn btn-danger rounded-3 w-25 "  value="Cancel">
//         <input type="submit" id="sumbit"  class="btn btn-success rounded-3 w-25" name="save" value="Save">`
// }
