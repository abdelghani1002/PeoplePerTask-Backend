// Function to handle the input and textarea elements
function handleInputElements(e) {
    var inputElement = e.target;
    var label = inputElement.previousElementSibling;
  
    if (e.type === 'keyup') {
      if (inputElement.value === '') {
        label.classList.remove('active', 'highlight');
      } else {
        label.classList.add('active', 'highlight');
      }
    } else if (e.type === 'blur') {
      if (inputElement.value === '') {
        label.classList.remove('active', 'highlight');
      } else {
        label.classList.remove('highlight');
      }
    } else if (e.type === 'focus') {
      if (inputElement.value === '') {
        label.classList.remove('highlight');
      } else {
        label.classList.add('highlight');
      }
    }
  }
  
  // Add event listeners to input and textarea elements
  var inputElements = document.querySelectorAll('.form input, .form textarea');
  inputElements.forEach(function (element) {
    element.addEventListener('keyup', handleInputElements);
    element.addEventListener('blur', handleInputElements);
    element.addEventListener('focus', handleInputElements);
  });
  
  // Function to handle tab clicks
  function handleTabClick(e) {
    e.preventDefault();
  
    var tabLink = e.target;
    var tabListItem = tabLink.parentElement;
    var target = tabLink.getAttribute('href');
  
    tabListItem.classList.add('active');
    var tabSiblings = Array.from(tabListItem.parentElement.children).filter(function (element) {
      return element !== tabListItem;
    });
    tabSiblings.forEach(function (element) {
      element.classList.remove('active');
    });
  
    var tabContentDivs = document.querySelectorAll('.tab-content > div');
    tabContentDivs.forEach(function (div) {
      if (div !== target) {
        div.style.display = 'none';
      }
    });
  
    document.querySelector(target).style.display = 'block';
  }
  
  // Add event listeners to tab links
  var tabLinks = document.querySelectorAll('.tab a');
  tabLinks.forEach(function (link) {
    link.addEventListener('click', handleTabClick);
  });
  