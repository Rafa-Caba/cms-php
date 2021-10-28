// Send links of class "delete" via post after a confirmation dialog
$("a.delete").on("click", function (e) {
    e.preventDefault()

    if (confirm("Are you sure?")) {
        
        let frm = $("<form>");
        frm.attr('method', 'post');
        frm.attr('action', $(this).attr('href'));
        frm.appendTo("body");
        frm.submit();
    }
});

$.validator.addMethod("dateTime", function (value, element) {
    return (value == '') || ! isNaN(Date.parse(value))
}, "Must be a valid date and time")

$("#formArticle").validate({
    rules: {
        title: {
            required: true
        },
        content: {
            required: true
        },
        published_at: {
            dateTime: true
        }
    }
})

$("button.publish").on("click", function (e) {
    let id = $(this).data('id')
    let button = $(this)

    $.ajax({
        url: '/admin/published-article.php',
        type: 'POST',
        data: {id: id}
    })
    .done(function (data) {
        button.parent().html(data)
    })
    .fail(function () {
        alert('An error occurred')
    })
})

$('#published_at').datetimepicker({
    format: 'Y-m-d H:i:s'
})

$("#formContact").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        subject: {
            required: true
        },
        message: {
            required: true
        }
    }
})