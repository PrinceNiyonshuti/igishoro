function isNumberKey(evt)//-------------------------Enabling Only Numbers(48-57) , Delete & Backspace
{
 var charCode = (evt.which) ? evt.which : event.keyCode
         if (!(charCode>=48 && charCode<=57 || charCode==8 || charCode==46))
            return false;

         return true;
}


function isAlphaKey(evt)//-------------------------Enabling Only Characters(a-z,A-Z) , ('&.), Delete & Backspace
{
 var key = (evt.which) ? evt.which : event.keyCode
if (!((key == 97) || (key == 98) || (key == 39) || (key ==46) || (key == 99) || (key == 8) || (key>=65) && (key <= 90) || (key==32) || (key >= 97 && key <= 122)))
            return false;

         return true;
}
