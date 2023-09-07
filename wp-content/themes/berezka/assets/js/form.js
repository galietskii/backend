var form = document.getElementById("form_promo");

form.addEventListener("submit", function (e) {
    e.preventDefault();

    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/wp-admin/admin-ajax.php", true);

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                alert("Заявка успешно отправлена и сохранена!");
                form.reset(); 
            } else {
                alert("Произошла ошибка при отправке заявки.");
            }
        } else {
            alert("Произошла ошибка при отправке запроса.");
        }
    };

    xhr.send(formData);
});