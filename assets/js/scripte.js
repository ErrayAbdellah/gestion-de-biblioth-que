function clearmodel()
{
    
    document.getElementById('formTask').reset();

    document.querySelector('#addNewBook').classList.remove("d-none");
    document.querySelector('#btnss').classList.add("d-none");
    document.querySelector('#staticBackdropLabel').innerText = "Add new book";
     
}


function getBook(id,title,author,language,state,date,price,qnt,category,image)
{ 
    
    //console.log(id+" - "+title+" - "+author+" - "+language+" - "+state+" - "+date+" - "+price+" - "+qnt+" - "+category+" - "+image);
    
    document.querySelector('#idUpdate').value                = id        ;
    document.querySelector('#title').value                   = title     ;
    document.querySelector('#author').value                  = author    ;
    document.querySelector('#language').value                = language  ;
    document.querySelector('#state').value                   = state     ;
    document.querySelector('#date').value                    = date      ;
    document.querySelector('#price').value                   = price     ;
    document.querySelector('#category').value                = category  ;
    document.querySelector('#quantity').value                = qnt       ;
    document.querySelector('#imgUpdate').value                = image    ;
    document.querySelector('#staticBackdropLabel').innerText = "Edite"   ;    
    
    
    document.querySelector('#btnss').classList.remove("d-none");
    document.querySelector('#addNewBook').classList.add("d-none");

}

function sell(id)
{
    console.log(id);
    document.querySelector('#idBookSell').value = id;
}





$(document).ready(function(){
    console.log('dl');
    $('#search').keyup(function(){
      var x = $(this).val();


      $.ajax({
          url:"views/search.php",
          method:"post",
          data:{search:x},
          dataType:"text",
          success:function(data)
          {
              $('#readBook').html(data);
          }
        });
    });
});










