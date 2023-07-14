$(document).ready(function() {
    //Try to get tbody first with jquery children. works faster!

    var tbody = $('#myTable').children('tbody');

    //Then if no tbody just select your table 
    var table = tbody.length ? tbody : $('#myTable');

    $("#myTable").on('click', '.btnDelete', function() {
        $(this).closest('tr').remove();
      });
    
       

    $(document).on('click','#flexCheckDefault',function(){
        var checkBox = document.getElementById('flexCheckDefault');
        if(checkBox.checked == true){
            document.getElementById("address").disabled = false;
            document.getElementById("city").disabled = false;
            document.getElementById("state").disabled = false;
            document.getElementById("country").disabled = false;
            document.getElementById("zip").disabled = false;
        }else{
            document.getElementById("address").disabled = true;
            document.getElementById("city").disabled = true;
            document.getElementById("state").disabled = true;
            document.getElementById("country").disabled = true;
            document.getElementById("zip").disabled = true;
        }
    })

  });




  