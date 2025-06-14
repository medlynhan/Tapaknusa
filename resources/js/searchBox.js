
function dateCek(calendar,text){
    calendar.on("change",function(){
        let selectedDate = $(this).val()
        let changeDate = selectedDate ? new Date(selectedDate).toLocaleDateString('id-ID') : " ";
        text.text(changeDate);
    });
}

