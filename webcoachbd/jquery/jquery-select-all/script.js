/**
 * Created by jony on 5/11/16.
 */
$(document).ready(function(){
    $('#checkAll').click(function(){
            var c = this.checked;
            $('input[type="checkbox"]').each(function(){
                $(this).prop('checked',c);
            });
        }
    );
});
