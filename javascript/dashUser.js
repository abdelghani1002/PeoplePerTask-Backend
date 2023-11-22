const btns_dele=document.querySelectorAll(".dele_btn")
  const users =document.querySelectorAll(".user")
  for(let i=0;i<btns_dele.length;i++){
   btns_dele[i].addEventListener('click',()=>{
      users[i].style.display="none"
   })
  }