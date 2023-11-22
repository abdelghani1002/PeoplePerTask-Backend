const btn_messagInbox =document.querySelectorAll(".btn_messag_inbox")
  const emailMessage=document.querySelectorAll(".email_message")
  
//    btn_messagInbox.addEventListener('click',()=>{
//       emailMessage.classList.toggle="h-14"
//       emailMessage.classList.toggle="h-full"
      
//    });
btn_messagInbox.forEach((button, i) => {
    button.addEventListener('click', () => {
      emailMessage[i].classList.toggle("h-14");
      emailMessage[i].classList.toggle("h-auto");
      for(let j =0;j<emailMessage.length;j++){
        if(j!==i){
            emailMessage[j].classList.remove("h-auto");
            emailMessage[j].classList.add("h-14");
        }
      }
    });
  });
  const btn_dele_messageInbox=document.querySelectorAll(".btn_dele_message_inbox")

  btn_dele_messageInbox.forEach((button, i) => {
    button.addEventListener('click', () => {
      emailMessage[i].remove();
      
    });
  });


  const replay_mssg =document.querySelectorAll(".btn_open_model_replay_inbox");
  replay_mssg.forEach((button, i) => {
    button.addEventListener('click', () => {
      
      
    });
  });


  const  modalopen = document.querySelector("#dailog_replay");
  const  btn_opn_modal =document.querySelectorAll(".btn_open_model_replay_inbox")
  const email_user=document.querySelectorAll(".email_user")
  const  email_modal=document.querySelector("#email_inbx")
  btn_opn_modal.forEach((button, i) => {
    button.addEventListener('click', () => {
      email_modal.textContent=email_user[i].textContent;
      modalopen.showModal();
      
    });
  });
  const btn_cls_btn = document.querySelector("#clse_btn")
   
  btn_cls_btn.addEventListener('click', () => {
      modalopen.close();
    });