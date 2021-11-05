 'use strict'

 const form = document.getElementById('contact-us')
 const nameContent = document.getElementById('name')
 const emailContent = document.getElementById('email')
 const messageContent = document.getElementById('message')
 const submitButton = document.getElementById('submit-btn')
 

 const errorName = document.getElementById('error-name')
 const errorEmail = document.getElementById('error-email')
 const errorMessage = document.getElementById('error-message')
 const errorForm = document.getElementById('error-form')
 
 
 nameContent.addEventListener('blur', (event) => {
   if (nameContent.value === '') {
     errorName.textContent = 'This field is compulsory!'
   } else if (isValidName(nameContent.value)) {
     errorName.textContent = ''
   } else {
     errorName.textContent = 'Enter alpabets and whitespaces only!'
   }
 })
 
 
 emailContent.addEventListener('blur', (event) => {
   if (emailContent.value === '') {
     errorEmail.textContent = 'This field is compulsory!'
   } else if (isValidEmail(emailContent.value)) {
     errorEmail.textContent = ''
   } else {
     errorEmail.textContent = 'Your email contains invalid symbols!'
   }
 })
 
 
 
 messageContent.addEventListener('blur', (event) => {
   if (messageContent.value === '') {
     errorMessage.textContent = 'This field is compulsory!'
   } else if (isValidMessage(messageContent.value)) {
     errorMessage.textContent = ''
   } else {
     errorMessage.textContent = 'You need to type in your message to us!'
   }
 })
 
 
 submitButton.addEventListener('click', (event) => {
   event.preventDefault()
 
   if (!isValidName(nameContent.value) ||
     !isValidEmail(emailContent.value) ||
     !isValidMessage(messageContent.value)) {
     errorForm.textContent = 'Fields must be filled up properly!'
   } else {
     nameContent.value = nameContent.value.trim()
     emailContent.value = emailContent.value.trim()
     messageContent.value = messageContent.value.trim()
 
     form.submit()
   }
 })
 
 
 function isValidName (value) {
   const rule = /^[a-zA-Z ]+$/
 
   value.trim()
 
   return (rule.test(value))
 }
 
 

 function isValidEmail (value) {
   const rule = /^[\w][\w.-]*@([\w][\w-]*\.){1,3}[a-zA-Z]{2,3}$/
 
   value.trim()
 
   return (rule.test(value))
 }
 

 
 function isValidMessage (value) {
   return (value !== '')
 }