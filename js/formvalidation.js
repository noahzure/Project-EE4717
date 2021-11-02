/**
 * Validate job application form for JavaJam Coffee House.
 *
 * Modify the 'Jobs' page so that the input data for name, email, start date
 * and experience are validated once the data is entered into each field.
 *
 */

 'use strict'

 // Form elements
 const form = document.getElementById('contact-us')
 const nameContent = document.getElementById('name')
 const emailContent = document.getElementById('email')
 const messageContent = document.getElementById('message')
 const submitButton = document.getElementById('submit-btn')
 
 // Error messages
 const errorName = document.getElementById('error-name')
 const errorEmail = document.getElementById('error-email')
 const errorMessage = document.getElementById('error-message')
 const errorForm = document.getElementById('error-form')
 
 /**
  * Listens to the <name> field and show error message on blur, if applicable.
  */
 nameContent.addEventListener('blur', (event) => {
   if (nameContent.value === '') {
     errorName.textContent = 'This field is compulsory!'
   } else if (isValidName(nameContent.value)) {
     errorName.textContent = ''
   } else {
     errorName.textContent = 'Enter alpabets and whitespaces only!'
   }
 })
 
 /**
  * Listens to the <email> field and show error message on blur, if applicable.
  */
 emailContent.addEventListener('blur', (event) => {
   if (emailContent.value === '') {
     errorEmail.textContent = 'This field is compulsory!'
   } else if (isValidEmail(emailContent.value)) {
     errorEmail.textContent = ''
   } else {
     errorEmail.textContent = 'Your email contains invalid symbols!'
   }
 })
 
 
 /**
  * Listens to the <message> field and show error message on blur, if
  * applicable.
  */
 messageContent.addEventListener('blur', (event) => {
   if (messageContent.value === '') {
     errorMessage.textContent = 'This field is compulsory!'
   } else if (isValidMessage(messageContent.value)) {
     errorMessage.textContent = ''
   } else {
     errorMessage.textContent = 'You need to type in your message to us!'
   }
 })
 
 /**
  * Validate everything before submission
  */
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
 
 /**
  * Validates user 'name' field.
  *
  * The name field contains alphabet characters and character spaces.
  *
  * The rule required above is first constructed. User input is trimmed for
  * preceding and trailing whitespaces before being validated against the rule.
  *
  * @param {String} value - User input name
  *
  * @constant {RegExp} rule - Regex rule for name validation
  *
  * @returns {Boolean}
  */
 function isValidName (value) {
   const rule = /^[a-zA-Z ]+$/
 
   value.trim()
 
   return (rule.test(value))
 }
 
 /**
  * Validates user 'email' field.
  *
  * The email field contains a user name part follows by "@" and a domain name
  * part. The user name contains word characters including hyphen ("-") and
  * period (".").
  *
  * The domain name contains two to four address extensions. Each extension is
  * string of word characters and separated from the others by a period (".").
  * The last extension must have two to three characters.
  *
  * The rule required above is first constructed. User input is trimmed for
  * preceding and trailing whitespaces before being validated against the rule.
  *
  * @param {String} value - User input email
  *
  * @constant {RegExp} rule - Regex rule for email validation
  *
  * @returns {Boolean}
  */
 function isValidEmail (value) {
   const rule = /^[\w][\w.-]*@([\w][\w-]*\.){1,3}[a-zA-Z]{2,3}$/
 
   value.trim()
 
   return (rule.test(value))
 }
 

 
 /**
  * Validates user 'message' field.
  *
  * Message cannot be empty.
  *
  * @param {String} value - User input experience
  *
  * @returns {Boolean}
  */
 function isValidMessage (value) {
   return (value !== '')
 }