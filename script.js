$(document).ready(function(){
    $('#contactForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: 'contact.php',
            type: 'post',
            data: $(this).serialize(),
            success: function(){
                alert('Vielen Dank für deine Nachricht!');
                $('#contactForm')[0].reset(); 
            },
            error: function(){
                alert('Senden der Nachricht fehlgeschlagen.');
            }
        });
    });
});