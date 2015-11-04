<?php include "page_header.php" ?>

    <h1>Membership Form</h1>

    <?php if ( $results["missingFields"] ) { ?>
    <p class="error">There were some problems with the form you submitted. Please complete the fields highlighted below and click Send Details to resend the form.</p>
    <?php } else { ?>
    <p>Thanks for choosing to join The Widget Club. To register, please fill in your details below and click Send Details. Fields marked with an asterisk (*) are required.</p>
    <?php } ?>

    <form action="<?php echo $results["scriptUrl"]?>" method="post">
      <div style="width: 30em;">

        <label for="firstName"<?php echo $results["firstNameAttrs"] ?>>First name *</label>
        <input type="text" name="firstName" id="firstName" value="<?php echo $results["firstNameValue"] ?>" />

        <label for="lastName"<?php echo $results["lastNameAttrs"] ?>>Last name *</label>
        <input type="text" name="lastName" id="lastName" value="<?php echo $results["lastNameValue"] ?>" />

        <label for="password1"<?php if ( $results["missingFields"] ) echo ' class="error"' ?>>Choose a password *</label>
        <input type="password" name="password1" id="password1" value="" />
        <label for="password2"<?php if ( $results["missingFields"] ) echo ' class="error"' ?>>Retype password *</label>
        <input type="password" name="password2" id="password2" value="" />

        <label<?php echo $results["genderAttrs"] ?>>Your gender: *</label>
        <label for="genderMale">Male</label>
        <input type="radio" name="gender" id="genderMale" value="M"<?php echo $results["genderMChecked"] ?>/>
        <label for="genderFemale">Female</label>
        <input type="radio" name="gender" id="genderFemale" value="F"<?php echo $results["genderFChecked"] ?> />

        <label for="favoriteWidget">What's your favorite widget? *</label>
        <select name="favoriteWidget" id="favoriteWidget" size="1">
          <option value="superWidget"<?php echo $results["favoriteWidgetOptions"]["superWidget"] ?>>The SuperWidget</option>
          <option value="megaWidget"<?php echo $results["favoriteWidgetOptions"]["megaWidget"] ?>>The MegaWidget</option>
          <option value="wonderWidget"<?php echo $results["favoriteWidgetOptions"]["wonderWidget"] ?>>The WonderWidget</option>
        </select>

        <label for="newsletter">Do you want to receive our newsletter?</label>
        <input type="checkbox" name="newsletter" id="newsletter" value="yes"<?php echo $results["newsletterChecked"] ?> />

        <label for="comments">Any comments?</label>
        <textarea name="comments" id="comments" rows="4" cols="50"><?php echo $results["commentsValue"] ?></textarea>

        <div style="clear: both;">
          <input type="submit" name="submitButton" id="submitButton" value="Send Details" />
          <input type="reset" name="resetButton" id="resetButton" value="Reset Form" style="margin-right: 20px;" />
        </div>

      </div>
    </form>

<?php include "page_footer.php" ?>
