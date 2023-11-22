let btn_dele_cetegpry = document.querySelectorAll(".btn_dele_cetegory")
  let cetegories =document.querySelectorAll(".category")
  let lengthcateg=btn_dele_cetegpry.length;
  for(let i=0;i<lengthcateg;i++){
   btn_dele_cetegpry[i].addEventListener('click',()=>{
      cetegories[i].remove();
   })
  }

   

  $( document ).ready(function() {
      $("#btn_add_cetegory").click(function () { 
         let value_ipt=document.querySelector("#value_add_cetegory").value.length

         if(value_ipt){
            lengthcateg++;
         $("#parent_of_categories").append(
           
                        `<ul class=" category  flex  text-center items-center ">
                                 <li class="w-2/3  text-xs md:text-lg p-4 bg-gray-50">${value_add_cetegory.value}</li>
                                 <li class="w-1/3 text-xs md:text-lg p-4 bg-gray-50">10/10/2020</li>
                                 <li class="w-1/3 text-xs flex justify-around md:text-lg p-4 bg-gray-50">
                                     <button class="text-blue-500">EDIT</button> <button
                                         class="text-red-500 btn_dele_cete btn_dele_cetegory">DELE</button>
                                 </li>
                             </ul>`
               );
            }
            else{
               alert("you need to enter in name of category ")
            }
      });
  })
  