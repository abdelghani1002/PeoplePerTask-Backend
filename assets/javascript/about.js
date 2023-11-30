//FAQ section 
const faqs = document.querySelectorAll('.answer')
const btn_faq = document.querySelectorAll('.btn_faq')

btn_faq.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        faqs[index].classList.toggle("hidden");
      
    });
  });