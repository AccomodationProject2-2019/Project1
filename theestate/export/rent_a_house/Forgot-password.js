// Get Modal-1 Element

var Modal = document.getElementById('modal');

//Get Open Modal button element

var ModalBtn = document.getElementById('modalForgotpass');


//Get close button for Modal1

var closeBtn = document.getElementById('closeBtn');

// Listen For Click to open modal

ModalBtn.addEventListener('click', openModal);

// Listen For Click to close modal

closeBtn.addEventListener('click', closeModal);

//Function to open modal-1

function openModal()
{
    // console.log ("123");
    Modal.style.display = "flex";
}


//Function to close modal-1
function closeModal()

{
    Modal.style.display = "none";
}



/*Close1,open2*/
//Get Open Modal2 button element
// Get Modal-2 Element

var Modal2 = document.getElementById('modal2');


var ModalBtn2 = document.getElementById('user-phone-sub');

//Get close button for modal2
var closeBtn2 = document.getElementById('closeBtn2');


//Listen For Click to open modal2 and close modal1

ModalBtn2.addEventListener('click', openModal2_CloseModal1);


// Listen For Click to close modal2

closeBtn2.addEventListener('click', closeModal2);

//Function to close Modal1 when user clicks next and open modal2 
function openModal2_CloseModal1()
{
    Modal.style.display = "none";
    Modal2.style.display = "flex";

}

// function closeModal2()
// {
//     Modal2.style.display = "none";
// } // fixed by extracting inner function in closeModal2 a function called myFunction by default

 function closeModal2()
 {
   Modal2.style.display = "none";
 } 
 // fixed by extracting inner function in closeModal2 a function called myFunction by default


 
 //Get Emlemnts for Modal 3

 var modal3 = document.getElementById('modal3');

 // Get Opening Button for Modal3
 var ModalBtn3 = document.getElementById('confirmation-code-sub');

 //Get closing Element for Modal3

 var closeBtn3 = document.getElementById('closeBtn3');

 //Add event to listen on modal2 next button,closes Modal2 opens modal3

 ModalBtn3.addEventListener('click',closeModal2_openModal3);

 //Add event to listen to modal 3 closing

 closeBtn3.addEventListener('click',closeModal3)

 //function to close modal 2 and open modal3
 
 function closeModal2_openModal3()
{
    modal2.style.display = "none";
    modal3.style.display = "flex";
}

//function to close modal 3

function closeModal3()
{
    modal3.style.display = "none";
}


//get Element for modal 4

var modal4 = document.getElementById('modal4');

//Get Element for btn

var ModalBtn4 = document.getElementById('NewPass');

//Get Element for closebtn4

var closeBtn4 = document.getElementById('closeBtn4');

//Add Event listener for closing modal3 and opening 4

ModalBtn4.addEventListener('click',closeModal33_openModal4);

//Add Event listener for closing modal4
closeBtn4.addEventListener('click',closeModal4);

//function to close modal 3 and open modal 4 

function  closeModal33_openModal4()
{
    modal3.style.display = "none";
    modal4.style.display = "flex";
    
}

//function to close modal 4

function closeModal4()
{
    modal4.style.display = "none";
}














//Function to close Modal2
// function closeModal2()
// {
//     Modal2.style.display = "none";
// }

