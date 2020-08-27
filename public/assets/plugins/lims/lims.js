
var loadedScripts=new Array();
var gcAttachid =new Array();
var xlink="";
var reflink="";
var oTable;
var validator_lang="";
var gcExist=false;


function roundToTwo(num) {
    return +(Math.round(num + "e+2")  + "e-2");
}
//------------------------------------------------------------------------------

function convault(defdiv,vlink){
    if(!defdiv){
        defdiv="ajax-content";
    }
    History.pushState(null, null, vlink)


    $('#'+defdiv).load(vlink, function() {


    });

}

function initform(b,a){
    a = typeof a !== 'undefined' ? a : "myForm";
    xlink=b;
    $('#'+a).ajaxForm({
        dataType:  'json',
        success:   processJson
    });
}
function viewbox($x,$title){
    $.ajax({
        type: 'POST',
        url: $x,
        success: function(data) {
        bootbox.dialog({
            message: data,
            title: $title,
            buttons: {
                Tutup: {
                    label: "Tutup",
                    className: "btn-success"
                }
            }
        });
    }
});
}
function generateLimsTable(cdiv,columns,dbsource    ){
    oTable=$('#'+cdiv).dataTable({
        "bFilter":   false,
        "ordering": false,
        "bProcessing": true,
        "columns": columns ,
        "bServerSide":true,
        "sAjaxSource": dbsource,
        "iDisplayLength": 100,

        "drawCallback": function ( settings ) {

    },
    "rowCallback": function( row, data, iDisplayIndex ) {
        var info = oTable.api().page.info();
        var page = info.page;
        var length = info.length;
        var index = (page * length + (iDisplayIndex +1));
        $('td:eq(0)', row).html(index);
    },
    "fnInitComplete": function () {
        oTable.fnAdjustColumnSizing();

    },
    'fnServerData': function (sSource, aoData, fnCallback) {
        $.ajax
        ({
            'dataType': 'json',
            'type': 'POST',
            'url': sSource,
            'data': aoData,
            'success': fnCallback
        });
    }
});
}
function generateTable(columns,dbsource){

    oTable=$('#maintable').dataTable({
        "aaSorting": [[ 1, "asc" ]],
        responsive: true,
        "bFilter":   true,


        "bAutoWidth":false,
        "bLengthChange": true,
        "bStateSave": true,
        "bProcessing": true,
        "columns": columns ,
        "bServerSide":true,
        "sAjaxSource": dbsource,
        "iDisplayLength": 10,

        "initComplete": function(settings, json) {
            $('#searchBoxTable').bindWithDelay('keyup', function(){

                var $th = $(this);
                $th.val( $th.val().replace(/[^a-zA-Z0-9 ]/g, function(str) {

                    return '';
                } ) );
                disableButtonOnSearch();
                oTable.api().search($(this).val()).draw();
            },1000);
            $('#searchbuttons').click(function(){


                $('#searchBoxTable').val('');
                disableButtonOnSearch();
                oTable.api().search($('#searchBoxTable').val()).draw();
            });
        },
        "rowCallback": function( row, data, iDisplayIndex ) {
            var info = oTable.api().page.info();
            var page = info.page;
            var length = info.length;
            var index = (page * length + (iDisplayIndex +1));
            $('td:eq(0)', row).html(index);
        },
        'fnServerData': function (sSource, aoData, fnCallback) {
            $.ajax
            ({
                'dataType': 'json',
                'type': 'POST',
                'url': sSource,
                'data': aoData,
                'success': fnCallback
            });
        }
    });
    oTable.dataTable().fnSetFilteringDelay(1000);
}
function generatesTable(cdiv,columns,dbsource ,tabnum   ){

    var xtab=$('#'+cdiv).dataTable({
        "bFilter":   true,
        "ordering": true,
        "bProcessing": true,
        "columns": columns ,
        "bServerSide":true,
        "sAjaxSource": dbsource,
        "iDisplayLength": 10,

        "drawCallback": function ( settings ) {

        },
        "rowCallback": function( row, data, iDisplayIndex ) {
            if (tabnum){
                var info = xtab.api().page.info();
                var page = info.page;
                var length = info.length;
                var index = (page * length + (iDisplayIndex +1));
                $('td:eq(0)', row).html(index);
            }

        },
        "fnInitComplete": function () {
            xtab.fnAdjustColumnSizing();

        },
        'fnServerData': function (sSource, aoData, fnCallback) {
            $.ajax
            ({
                'dataType': 'json',
                'type': 'POST',
                'url': sSource,
                'data': aoData,
                'success': fnCallback
            });
        }
    });
    xtab.dataTable().fnSetFilteringDelay(1000);
    return xtab;
}
function disableButtonOnSearch(){
    if($('#searchBoxTable').val()==''){
        $("#searchbuttons").prop('disabled', true);
    }else{
        $("#searchbuttons").prop('disabled', false);
    }
}
function notifyError(str){
    if (str){
      $.gritter.add({
         title: 'Error!',
         text: str,
          class_name: 'gritter-error',
         sticky: false,
          time: 1000
      });

    }

}
function notifySuccess(str){
    if (str){
        $.gritter.add({
            title: 'Success!',
            text: str,
            class_name: 'gritter-info',
            sticky: false,
            time: 1000
        });
    }

}


$(document).on('click','a.fakelink', function(e) {


    e.preventDefault();
    var xmen=$(this);
    /*var uli=$(this).closest( ".nav" );
     if(uli){

     $(uli).children("li").each(function () {

     $(this).removeClass("active")
     });
     $(this).closest( "li" ).addClass("active");
     }

     if(!$('.navbar-toggle').hasClass('collapsed')){
     $('.navbar-toggle').css('display') =='none'
     $(".navbar-toggle").trigger( "click" );
     }*/
    var vlink = xmen.attr('href');

    var defdiv = xmen.attr('atarget');


    convault(defdiv,vlink);


});


function loadScript(scriptArray) {
    if($.isArray(scriptArray)){
        $.each(scriptArray, function(intIndex, objValue){
            if($.inArray(objValue, loadedScripts) < 0){
                $.ajax({
                    async:false,
                    type:'GET',
                    url:objValue,
                    success:function(){loadedScripts.push(objValue);},
                    dataType:'script'

                });
            }
        });
    }
    else{
        if($.inArray(scriptArray, loadedScripts) < 0){
            $.ajax({
                async:false,
                type:'GET',
                url:scriptArray,
                success:function(){loadedScripts.push(scriptArray);},
                dataType:'script'

            });
        }
    }
}
function dmyFormat (dateStr) {
    if (dateStr){
        dArr = dateStr.split("-");  // ex input "2010-01-18"
        if(typeof dArr[2] !== 'undefined' && typeof dArr[1] !== 'undefined' && typeof dArr[0] !== 'undefined')
            return dArr[2]+ "/" +dArr[1]+ "/" +dArr[0];
        else{
            return '';
        }
    }else{
        return '';
    }

}
function dmyhFormat (dateStr) {
    if (dateStr){
        dArr = dateStr.split("-");  // ex input "2010-01-22 01:50"
        if(typeof dArr[2] !== 'undefined' && typeof dArr[1] !== 'undefined' && typeof dArr[0] !== 'undefined')
            return dArr[2].substr(0, 2)+ "/" +dArr[1]+ "/" +dArr[0]+' ' +dArr[2].substr(3, 5);
        else{
            return '';
        }
    }else{
        return '';
    }

}
function thous(x) {
    if(x){
        //x=x.toString().replace('.', ",");
        x= x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return x
    }else{
        return '';
    }

}