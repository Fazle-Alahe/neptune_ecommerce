
// password show/hide
$(document).ready(function () {

  $(".eye").click(function () {
    var input = $("#" + $(this).attr("data-target"));

    if (input.attr("type") === 'password') {
      input.attr("type", "text");
      $(this).attr("src", $(this).attr("data-hidden"));
    }
    else {
      input.attr("type", "password");
      $(this).attr("src", $(this).attr("data-visible"));
    }

  });
});

$(document).ready(function () {
  $('.upload-button').on('click', handleUploadButtonClick);
});

function handleUploadButtonClick(event) {
  event.preventDefault();
  const button = $(this); // this refers to the button that was clicked
  const inputId = button.data('inputid'); // Get the data-inputid attribute
  const fileInput = $('#' + inputId + '_file');

  // Trigger file input click
  fileInput.click();
  fileInput.off('change').on('change', function () {
    const file = this.files[0];
    if (file) {
      const formData = new FormData();
      formData.append('image', file);
      $.ajax({
        url: '/upload-image',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
          if (data.success) {

            $('#' + inputId).val(data.filePath);
            const previewImage = $('#' + inputId + '_preview');
            previewImage.attr('src', data.previewPath);
            previewImage.show();
          } else {
            alert('Failed to upload the image.');
          }
        },
        error: function (error) {
          console.error('Error:', error);
        }
      });
    }
  });
}

$(document).ready(function () {

  $("#checkmeout").on('click', function () {
    this.checked ? $(".chkDel").prop("checked", true) : $(".chkDel").prop("checked", false);
  })
});

// $(document).ready(function () {
//   function editUser(user) {
//     $('#con-close-modal').modal('show');
//     $('#modalTitle').text('Edit User');
//     $('#userId').val(user.id);
//     $('#name').val(user.name);
//     $('#email').val(user.email);
//   }
//   $('#userForm').submit(function(e) {
//     e.preventDefault();

//     let formData = $(this).serialize();
//     let id = $('#userId').val();
//     let url = id ? `/user/update/{id}` : `/user/store`;

//     $.ajax({
//       url: url,
//       type: 'POST',
//       data: formData,
//       success: function(response) {
//           alert(response.message);
//           $('#con-close-modal').modal('hide');
//           location.reload();
//       },
//       error: function(xhr) {
//           alert('Error: ' + xhr.responseText);
//       }
//   });
//   });
// })