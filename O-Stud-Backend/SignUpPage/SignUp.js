
const form = $('#form');
const firstName = $('#firstName');
const lastName = $('#lastName');
const school = $('#school');
const email = $('#email');
const passwordA = $('#passwordA');
const passwordB = $('#passwordB');

// error count
let errors = 0;
// show input error message
const showError = (displayPlace, message) => {
    displayPlace.html(message);
    errors += 1;
}

// check for required field 
const checkRequired = (inputArr) => {
    inputArr.forEach(function(input){
        if(input.val() === '') {
            showError(input.next(), `${input.attr('id')} field is required`);
        }
    })
}

// check for input length
const checkInputLength = (input, min, max) => {
    if(input.val().length <= min){
        showError(input.next(), `${input.attr('id')} must be more than ${min} characters long`);
    } else if( input.val().length >= max){
        showError(input.next(), `${input.attr('id')} must be less than ${max} characters long`);
    }
}

// Check if email is valid
const checkEmail = (input) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regex.test(input.val())){
        showError(input.next(), 'Email is not valid');
    }
}

const checkPasswordMatch = (passwordA, passwordB) => {
    if(passwordA.val() != passwordB.val()){
        showError(passwordB.next(), 'Your passwords do not match');
    }
}

// When form is submitted
form.submit(function(e){
    e.preventDefault();
    $('small').html('');
    errors = 0;

    // TODO check for required inputs
    checkRequired([firstName, lastName, school, email, passwordA, passwordB]);
    // TODO check for first name length
    checkInputLength(firstName, 5, 15);
    // TODO check for last name length
    checkInputLength(lastName, 5, 15);
    // TODO check for schoole length
    // checkInputLength(school, 5, 20);
     // TODO check for valid email
    checkEmail(email);
    // TODO check for password length
    checkInputLength(passwordA, 5, 10);
    // TODO check if the passwords match
    checkPasswordMatch(passwordA, passwordB);

    if(errors === 0){
        $('#success').html('All inputs are correct 👍🏿');
    }
    // Submit the form
})