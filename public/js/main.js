function getStocks() {
    $('.update-stock').prop('disabled', true);
    $.ajax({
        url: "/",
        dataType: "json",
        success: function(data) {
            var trHTML = '';
            $('tbody').empty();
            $.each(data.stock, function(k,v) {
                    trHTML += '<tr><td>' + v["name"] + '</td><td>' + v["volume"] + '</td><td>' + v["price"]["amount"] + '</td></tr>';
                });
            $('tbody').append(trHTML);
        },
        error: function () {
            alert("Не удалось обновить  данные.");
        },
        complete: function () {
            $('.update-stock').prop('disabled', false);
        }
    });
}


setInterval(getStocks, 15000);
