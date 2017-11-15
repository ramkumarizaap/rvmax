$(function()
{
   $("input[name='a_c[]']").click(function()
    {
        if($(this).prop('checked'))
        {
            var cont_name = $(this).attr("data-contractor");

            $("select").append("<option value='"+$(this).val()+"'>"+cont_name+"</option>");
        }
        else
        {
            $("select [value='"+$(this).val()+"']").remove();
        }
    });

    $(".mt-repeater-add2").click(function(){
        var mt_repeater_div = $('.mt-repeater-cust-item').first().clone();
        $(".mt-repeater-room-dtl").append(mt_repeater_div);
    });

    $("#dob").datepicker({
        format: 'mm/dd/yyyy'
    });

        $('.jqte-test').jqte();

    $("#fromdate").datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        defaultDate:new Date()
    });
    $("#todate").datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        defaultDate:new Date()
    });

    // tinyMCE.init({
    //     selector: "#training_info",
    //     // content_css: 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
    //     plugins: ["code visualblocks"],
    //     valid_elements : '*[*]',
    //     toolbar: "undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | preview",
    //     schema: "html5",
    //     // verify_html : false,
    //     // valid_children : "+a[div], +div[*]"
    //     // extended_valid_elements : "div[*]",
    // });
    // tinyMCE.init({
    //     selector: "#pedigree_status",
    //     // content_css: 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
    //     plugins: ["code visualblocks"],
    //     valid_elements : '*[*]',
    //     toolbar: "undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | preview",
    //     schema: "html5",
    //     // verify_html : false,
    //     // valid_children : "+a[div], +div[*]"
    //     // extended_valid_elements : "div[*]",
    // });
    // tinyMCE.init({
    //     selector: "#energy_level",
    //     // content_css: 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
    //     plugins: ["code visualblocks"],
    //     valid_elements : '*[*]',
    //     toolbar: "undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | preview",
    //     schema: "html5",
    //     // verify_html : false,
    //     // valid_children : "+a[div], +div[*]"
    //     // extended_valid_elements : "div[*]",
    // });
    
    // tinyMCE.init({
    //     selector: "#history_job",
    //     // content_css: 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
    //     plugins: ["code visualblocks"],
    //     valid_elements : '*[*]',
    //     toolbar: "undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | preview",
    //     schema: "html5",
    //     // verify_html : false,
    //     // valid_children : "+a[div], +div[*]"
    //     // extended_valid_elements : "div[*]",
    // });
    
    // tinyMCE.init({
    //     selector: "#rescue",
    //     // content_css: 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
    //     plugins: ["code visualblocks"],
    //     valid_elements : '*[*]',
    //     toolbar: "undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | preview",
    //     schema: "html5",
    //     // verify_html : false,
    //     // valid_children : "+a[div], +div[*]"
    //     // extended_valid_elements : "div[*]",
    // });
    
    // tinyMCE.init({
    //     selector: "#health",
    //     // content_css: 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
    //     plugins: ["code visualblocks"],
    //     valid_elements : '*[*]',
    //     toolbar: "undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | preview",
    //     schema: "html5",
    //     // verify_html : false,
    //     // valid_children : "+a[div], +div[*]"
    //     // extended_valid_elements : "div[*]",
    // });

    $("select[name='sm_page']").change(function(){
      val = $(this).val();
      $.ajax({
        type:"POST",
        url:base_url+"settings/get_seo_by_name",
        data:{val:val},
        dataType:"json",
        success:function(data)
        {
          console.log(data);
          if(data.status=="success")
          {
            $("input[name='sm_page_title']").val(data.output.sm_page_title);
            $("input[name='sm_keyword']").val(data.output.sm_keyword);
            $("input[name='sm_description']").val(data.output.sm_description);
          }
        }
      });
    });
});	

function additional_nots(txt)
{
    if(txt=='yes'){
      //  alert(123);
        $("#hist_job").removeAttr('style');
        $("#hist_job").css("display","block");
      }
      else
      {
        $("#hist_job").removeAttr('style');
        $("#hist_job").css("display","none");
      }
}

//to delete selected record from list.
function delete_record(del_url,elm){

	$("#div_service_message").remove();
    
    	retVal = confirm("Are you sure to remove?");

        if( retVal == true ){
   
            $.post(base_url+del_url,{},function(data){           
                
                if(data.status == "success"){
                //success message set.
                service_message(data.status,data.message);
                
                //grid refresh
                refresh_grid();
    
            }
            else if(data.status == "error"){
                 //error message set.
                service_message(data.status,data.message);
            }
            
            },"json");
       }       
      
}

/* refresh grid after ajax submitting form */
function refresh_grid(data_tbl){
     
     data_tbl =(data_tbl)?data_tbl:"data_table";
     var cur_page = $("#base_url").val()+$("#cur_page").val();
     $.fn.init_progress_bar();
     $.fn.display_grid(cur_page,data_tbl);
}

function service_message(err_type,message,div_id){
    
    div_id = (div_id)?div_id:false; 	

    $("#div_service_message").remove();
    
    var str  ='<div id="div_service_message" class="Metronic-alerts alert alert-'+err_type+' fade in">';
        str +='<button class="close" aria-hidden="true" data-dismiss="alert" type="button"><i class="fa-lg fa fa-warning"></i></button>';
	    str +='<strong>'+capitaliseFirstLetter(err_type)+':&nbsp;</strong>';
	    str += message;
        str +='</div>';
        
    if(div_id){
         $("#"+div_id).html(str);
    }
    else
    {
        $(".blue-mat").after(str);
        scroll_to("div_service_message");
    }
            
}

function scroll_to(jump_id){
    //page scroll
    if(jump_id !=""){
       $(window).scrollTop($('#'+jump_id).offset().top); 
    }
}

function capitaliseFirstLetter(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}