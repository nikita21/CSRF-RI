$(document).on("click", ".open-AddCourseDialog", function () {
     var myCourseId = $(this).data('id');
     $(".modal-dialog #courseId").val( myCourseId );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
