$(document)
    .ready(function () {
    $('#reg_form')
        .submit(function () {
        if (validateTextField('f_name', 'fnameInfo') & validateTextField('l_name', 'lnameInfo') & validateEmail('email', 'mailInfo') & validateNumber('phone', 'phoneInfo')) {
            return true;
        } else {
            return false;
        }
    });

    function validateTextField(fieldName, Id) {
        //if it's NOT valid
        if ($('input[name=' + fieldName + ']')
            .val()
            .length < 1) {
            $('#' + Id)
                .text('Please enter any  strings')
                .fadeIn();
            $('#' + Id)
                .addClass('error');
            return false;
        } else if (isNaN($('input[name=' + fieldName + ']')
            .val()) == false) {
            $('#' + Id)
                .text('Please enter any  strings')
                .fadeIn();
            $('#' + Id)
                .addClass('error');
            return false;
        }
        //if it's valid
        else {
            $('input[name=' + fieldName + ']')
                .removeClass('error');
            $('#' + Id)
                .fadeOut();
            return true;
        }
    }

    function validateEmail(fieldName, Id) {
        //testing regular expression
        var a = $('input[name=' + fieldName + ']')
            .val();
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        //if it's valid email
        if (filter.test(a)) {
            //$('#'+fieldName).removeClass('error');
            $('#' + Id)
                .fadeOut();
            $('#' + Id)
                .removeClass('error');
            return true;
        }
        //if it's NOT valid
        else {
            $('#' + Id)
                .text('Please Type a valid e-mail address');
            $('#' + Id)
                .addClass('error');
            return false;
        }
    }

    function validateNumber(fieldName, Id) {
        //if it's NOT valid
        if (isNaN($('input[name=' + fieldName + ']')
            .val())) {
            $('#' + Id)
                .text('Only number please,no strings allowed');
            $('#' + Id)
                .addClass('error');
            return false;
        } else if ($('input[name=' + fieldName + ']')
            .val() < 1) {
            $('#' + Id)
                .text('Please fill the field')
                .fadeIn();
            $('#' + Id)
                .addClass('error');
            return false;
        }
        //if it's valid
        else {
            $('input[name=' + fieldName + ']')
                .removeClass('error');
            $('#' + Id)
                .fadeOut();
            $('#' + Id)
                .removeClass('error');
            return true;
        }
    }
});