$(function() {
    $(document).on('click', '[data-ajax=loadNextPage]', function(e) {
        link = $(this);
        url = $(this).attr('href');
        $.ajax({
            url: url,
            success: function(html) {
                link.parent().hide();
                container = $(html).find('[data-ajax=container]').html();
                $('[data-ajax=container]').append(container);  
            }
        }); 
        e.preventDefault();
    });
});