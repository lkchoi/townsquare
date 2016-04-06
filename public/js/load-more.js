var page = 2;
var base_url = location.protocol + '//' + location.hostname;
$('#load-more').click(function() {
    $.ajax({
        url: base_url + "/api/v1/articles?page=" + page,
        method: 'GET',
        success: function(data) {
            if (data == 'end')
            {
                $('#load-more').remove();
            }
            else
            {
                $('.article-list').append(data);
                page++;
            }
        }
    });
})