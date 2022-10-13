$(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
        url:"BLL/Search.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
            $('#result').html(data);
        }
        });
    }
    $('#search').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
        load_data(search);
    }
    else
    {
        load_data();
    }
    });
});