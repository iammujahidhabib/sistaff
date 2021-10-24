function stripslashes(str) {
    str = str.replace(/\\'/g, '\'');
    str = str.replace(/\\"/g, '"');
    str = str.replace(/\\0/g, '\0');
    str = str.replace(/\\\\/g, '\\');
    return str;
}
// =============================================================
function delete_data(base_url, id) {
    Swal.fire({
        title: "Apakah anda yakin ?",
        text: "Setelah di hapus, anda tidak bisa melihat data tersebut..!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        reverseButtons: true,
        heightAuto: false
    })
    .then((result) => {
        if(result.value) { 
            $.ajax({
                url: base_url + id,
                type: "get",
                dataType: "json",
                beforeSend:() => {
                    $('.custom-loading').fadeIn();
                },
                complete:() => {
                    $('.custom-loading').fadeOut();
                },
                success:(data) => {
                    if ($.isEmptyObject(data.errors)) {
                        toast(data.message, 'success');
                        getData();
                    } else {
                        Swal.fire({
                            title: "Gagal",
                            text: data.errors, 
                            type: "error",
                            heightAuto: false
                        });
                    }
                },
                error:() => {
                    Swal.fire({
                        title: "Data Proses",
                        text: "Error di System..!", 
                        type: "error",
                        heightAuto: false
                    });
                }
            });
        }
    });
}
// =============================================================
function input_reset() {
    $('form').trigger('reset');
    $('.select').val('').trigger('change');
    $("span[id^='file-']").html(null);
    $("span[id^='file-']").addClass('d-none');
}

function default_form(content) {
    $('input').blur();
    event.preventDefault();

    var formData = new FormData($(content)[0]);
    var action = $(content).attr("action");

    $.ajax({
        url: action,
        type: "post",
        data: formData,
        dataType: "json",
        contentType: false,
        processData: false,
        cache: false,
        async: true,
        timeout: 40000,
        beforeSend:() => {
            $('.btn-submit', content).attr("disabled", true);
            $('.btn-spinner', content).removeClass("d-none");
            $('.btn-text', content).addClass("d-none");
            $('.custom-loading').fadeIn();
        },
        complete:() => {
            $('.btn-submit', content).attr("disabled", false);
            $('.btn-spinner', content).addClass("d-none");
            $('.btn-text', content).removeClass("d-none");
            $('.custom-loading').fadeOut();
        },
        success:(data) => {
            if ($.isEmptyObject(data.errors) && $.isEmptyObject(data.form_errors)) {
                Swal.fire({
                    title: "Berhasil",
                    text: data.message, 
                    type: "success",
                    heightAuto: false
                }).then(() => {
                    location = data.url
                });
            } else if(data.form_errors) {
                for(var form_data in data.form_errors) {
                    $('#input-' + data.form_errors[form_data]['id']).addClass('is-invalid');
                    $('#input-' + data.form_errors[form_data]['id']).parents('.form-input').find('.invalid-feedback').html(data.form_errors[form_data]['msg']);
                }
            } else {
                Swal.fire({
                    title: "Gagal",
                    text: data.errors, 
                    type: "error",
                    heightAuto: false
                });
            }
        },
        error:() => {
            Swal.fire({
                title: "Error",
                text: "Error pada System..!",
                type: "error",
                heightAuto: false
            });
        }
    });
}

function modal_form(content, mode = "add") {
    $('input').blur();
    event.preventDefault();

    var formData = new FormData($(content)[0]);
    var action = $(content).attr("action");
    var context = $(content).attr("context");

    $.ajax({
        url: action,
        type: "post",
        data: formData,
        dataType: "json",
        contentType: false,
        processData: false,
        cache: false,
        async: true,
        timeout: 40000,
        beforeSend:() => {
            $('.btn-submit', content).attr("disabled", true);
            $('.btn-spinner', content).removeClass("d-none");
            $('.btn-text', content).addClass("d-none");
            $('.custom-loading').fadeIn();
        },
        complete:() => {
            $('.btn-submit', content).attr("disabled", false);
            $('.btn-spinner', content).addClass("d-none");
            $('.btn-text', content).removeClass("d-none");
            $('.custom-loading').fadeOut();
        },
        success:(data) => {
            if ($.isEmptyObject(data.errors) && $.isEmptyObject(data.form_errors)) {
                toast(data.message, 'success');
                $('#' + context).modal('toggle');
                input_reset();
                getData();
            } else if(data.form_errors) {
                if(mode == "add") {
                    for(var form_data in data.form_errors) {
                        $('#input-' + data.form_errors[form_data]['id']).addClass('is-invalid');
                        $('#input-' + data.form_errors[form_data]['id']).parents('.form-input').find('.invalid-feedback').html(data.form_errors[form_data]['msg']);
                    }
                } else if(mode == "edit") {
                    for(var form_data in data.form_errors) {
                        $('#input-' + data.form_errors[form_data]['id'] + '-e').addClass('is-invalid');
                        $('#input-' + data.form_errors[form_data]['id'] + '-e').parents('.form-input').find('.invalid-feedback').html(data.form_errors[form_data]['msg']);
                    }
                }
            } else {
                Swal.fire({
                    title: "Gagal",
                    text: data.errors, 
                    type: "error",
                    heightAuto: false
                });
            }
        },
        error:() => {
            Swal.fire({
                title: "Error",
                text: "Error pada System..!",
                type: "error",
                heightAuto: false
            });
        }
    });
}
// =============================================================
const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 3000,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
// =============================================================
function toast(string, icon) {
    Toast.fire({
        title: string,
        type: icon
    });
}
// =============================================================
$(document).ready(() => {
    // =========================================================
    $('.default-form').submit(function() {
        default_form(this);
    });

    $('.modal-form').submit(function() {
        modal_form(this);
    });
    
    $('.edit_modal-form').submit(function() {
        modal_form(this, "edit");
    });
    // =========================================================
    $('form input').on('keyup', function () {
        if (!$(this).val()) {
            $(this).addClass('is-invalid');
            $(this).parents('.form-input').find('.invalid-feedback').html(`The ${$(this).parents('.form-input').find('label').html()} field is required.`);
        } else {
            $(this).removeClass('is-invalid');
        }
    });

    $('form textarea').on('keyup', function () { 
        if (!$(this).val()) {
            $(this).addClass('is-invalid');
            $(this).parents('.form-input').find('.invalid-feedback').html(`The ${$(this).parents('.form-input').find('label').html()} field is required.`);
        } else {
            $(this).removeClass('is-invalid');
        }
    });
    // =========================================================
    $(document).on('click', ':reset', function() {
        $('input').removeClass('is-invalid');
        $('textarea').removeClass('is-invalid');
    });
    // =========================================================
    $(".modal").on("hidden.bs.modal", function () {
        input_reset();
    });
    // =========================================================
    $('#dataTable').DataTable();
    // =========================================================
});
// =============================================================