<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/29/06
 * Time: 6:19 AM
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>An HTML Form</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch09/common.css" />
</head>
<body>
<h1>An HTML Form</h1>
<form action="" method="get">
    <div style="width: 25em;">
        <label for="textField">A text input field</label>
        <input type="text" name="textField" id="textField" value="" />
        <label for="passwordField">A password field</label>
        <input type="password" name="passwordField" id="passwordField" value="" />
        <label for="checkboxField">A checkbox field</label>
        <input type="checkbox" name="checkboxField" id="checkboxField" value="yes" />
        <label for="radioButtonField1">A radio button field</label>
        <input type="radio" name="radioButtonField" id="radioButtonField1" value="radio1" />
        <label for="radioButtonField2">Another radio button</label>
        <input type="radio" name="radioButtonField" id="radioButtonField2" value="radio2" />
        <label for="submitButton">A submit button</label>
        <input type="submit" name="submitButton" id="submitButton" value="Submit Form" />
        <label for="resetButton">A reset button</label>
        <input type="reset" name="resetButton" id="resetButton" value="Reset Form" />
        <label for="fileSelectField">A file select field</label>
        <input type="file" name="fileSelectField" id="fileSelectField" value="" />
        <label for="hiddenField">A hidden field</label>
        <input type="hidden" name="hiddenField" id="hiddenField" value="" />
        <label for="imageField">An image field</label>
        <input type="image" name="imageField" id="imageField" value="" src="../living-examples/ch09/asterisk.gif" width="23" height="23" />
        <label for="pushButton">A push button</label>
        <input type="button" name="pushButton" id="pushButton" value="Click Me" />
        <label for="pullDownMenu">A pull-down menu</label>
        <select name="pullDownMenu" id="pullDownMenu" size="1">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        <label for="listBox">A list box</label>
        <select name="listBox" id="listBox" size="3">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        <label for="multiListBox">A multi-select list box</label>
        <select name="multiListBox" id="multiListBox" size="3"
                multiple="multiple">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        <label for="textAreaField">A text area field</label>
        <textarea name="textAreaField" id="textAreaField" rows="4" cols="50"></textarea>
    </div>
</form>
</body>
</html>

