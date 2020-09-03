function active_link(){
    var top_menu_links = $("nav.navbar").find('a.hoverlink'),
        current_path =window.location.href,
        account_links = $("div.top-sign").find('a');

        top_menu_links.each(function(){
            if($(this).attr('href')===current_path){
                $(this).parent().addClass('active');
            }
        })

        account_links.each(function(){
            if($(this).attr('href')===current_path){
                $(this).addClass('active');
            }
        })
}
active_link();

 $(document).ready(function () {
    $("#birthday").datepicker({
        dateFormat: 'yy-mm-dd',
        yearRange: '-100:-18',
        changeMonth: true,
        changeYear: true,
        defaultDate: "-18Y",
        //minDate: "-18Y",
    });
});
