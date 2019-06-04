$(document).ready(function () {

    (function ($) {
        "use strict";


        jQuery.validator.addMethod('answercheck', function (value, element) {
            return this.optional(element) || /^\bcat\b$/.test(value)
        }, "type the correct answer -_-");

   
        $(function() {
            $('#contactForm').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    Budget: {
                        required: true,
                        minlength: 4, 
                        number:true
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number:true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 20
                    }
                },
                messages: {
                    name: {
                        required: "come on, you have a name, don't you?",
                        minlength: "your name must consist of at least 2 characters"
                    },
                    Budget: {
                        required: "come on, you have a Budget, don't you?",
                        minlength: "your Budget must consist of at least 4 characters"
                    },
                    phone: {
                        required: "come on, you have a number, don't you?",
                        minlength: "your Number must consist of at least 10 Digit Number"
                    },
                    email: {
                        required: "no email, no message"
                    },
                    message: {
                        required: "um...yea, you have to write something to send this form.",
                        minlength: "thats all? really?"
                    }
                },
              
           })
        })

    })(jQuery)
})