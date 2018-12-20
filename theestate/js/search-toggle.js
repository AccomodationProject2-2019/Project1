/*
An algorithim to toggle advanced search on AND a close button functionality

1.Create object for id of element(open object)
 Create object id/class of content to be shown

2.Add eventlistener to that object(to be clicked)
    Add eventlistener for close btn

3.Create function to change display of search-form to block if open object is clicked
  Create a function to change display of search-form to none if close btn is clicked

*/

var OpenObject = document.getElementById('search-toggler');
var Content = document.getElementById('search-form');
var CloseObject = document.getElementById('Closebtn-Search');

OpenObject.addEventListener('click',OpenSearchToggle);
CloseObject.addEventListener('click',CloseSearchToggle);

function OpenSearchToggle()
{
    Content.style.display = "block"; 
}

function CloseSearchToggle()
{
    Content.style.display = "none";
}