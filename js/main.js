$(document).ready(function() {
$("#btncontcall").click(function(){ 
     $.ajax({
        type: "POST",
        url:"../send.php", // Адрес обработчика
        data:$("#callbacks").serialize(),
        error:function(){$("#erconts").html("Произошла ошибка!");},
    beforeSend: function() {
            $("#erconts").html("Отправляем данные...");
        },
    success: function(result){
      $("#erconts").html(result);
      checkThis();
    }
    });
    return false;
});
});$(document).ready(function() {
$("#booking_hote7_btn").click(function(){ 
     $.ajax({
        type: "POST",
        url:"../booking_hotel7_form.php", // Адрес обработчика
        data:$("#booking_hotel7_form").serialize(),
        error:function(){$("#erconts").html("Произошла ошибка!");},
    beforeSend: function() {
            $("#erconts").html("Отправляем данные...");
        },
    success: function(result){
      $("#erconts").html(result);
      checkThis();
    }
    });
    return false;
});
});
$(document).ready(function() {
$("#booking_hotepl_btn").click(function(){ 
     $.ajax({
        type: "POST",
        url:"../booking_hotelpl_form.php", // Адрес обработчика
        data:$("#booking_hotelpl_form").serialize(),
        error:function(){$("#erconts").html("Произошла ошибка!");},
    beforeSend: function() {
            $("#erconts").html("Отправляем данные...");
        },
    success: function(result){
      $("#erconts").html(result);
      checkThis();
    }
    });
    return false;
});
});
$(document).ready(function() {
$("#btncontcall2").click(function(){ 
     $.ajax({
        type: "POST",
        url:"../send.php", // Адрес обработчика
        data:$("#callbacks2").serialize(),
        error:function(){$("#erconts").html("Произошла ошибка!");},
    beforeSend: function() {
            $("#erconts").html("Отправляем данные...");
        },
    success: function(result){
      $("#erconts").html(result);
      checkThis();
    }
    });
    return false;
});
});
$(document).ready(function() {
$(".btnbookingiframe2").click(function(){ 
     $.ajax({
        type: "POST",
        url:"../send_hotel_pl.php", // Адрес обработчика
        data:$(".booking_form_iframe2").serialize(),
        error:function(){$(".erconts").html("Произошла ошибка!");},
    beforeSend: function() {
            $(".erconts").html("Отправляем данные...");
        },
    success: function(result){
      $(".erconts").html(result);
      checkThis();
    }
    });
    return false;
});
});
$(document).ready(function() {
$(".btnbookingiframe").click(function(){ 
     $.ajax({
        type: "POST",
        url:"../send_hotel_pl.php", // Адрес обработчика
        data:$(".booking_form_iframe").serialize(),
        error:function(){$(".erconts").html("Произошла ошибка!");},
    beforeSend: function() {
            $(".erconts").html("Отправляем данные...");
        },
    success: function(result){
      $(".erconts").html(result);
      checkThis();
    }
    });
    return false;
});
});
$(document).ready(function() {
  $("a.fancybox").fancybox()
});
function calc() {
            //получаем ссылку на чекбокс (Требуется верстка?)
            var room1 = document.getElementById("room1");
            var room2 = document.getElementById("room2");
            //получаем ссылку на элемент input (Кол-во вариантов)
            var count = document.getElementById("count");
            //получаем ссылку на элемент span, в него будем писать стоимость дизайна
            var result = document.getElementById("result"); 
 
            var price = 0;            
            price = parseInt(count.value) * 100;
            price += (room1.checked == true) ? parseInt(room1.value) : 0;
            price += (room2.checked == true) ? parseInt(room2.value) : 0;
 
            result.innerHTML = price;
        }

// Календарь
var months=new Array();
months[1]="января";
months[2]="февраля";
months[3]="марта";
months[4]="апреля";
months[5]="мая";
months[6]="июня";
months[7]="июля";
months[8]="августа";
months[9]="сентября";
months[10]="октября";
months[11]="ноября";
months[12]="декабря";

    $('.from-date').each(function() {
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth() + 1;
      $(this).children('.date').text(day);
      $(this).children('.month').text(months[month]);
      $('.from-field').val(day + ' ' + months[month])
    });
    
    $('.dest-date').each(function() {
      var date = new Date();
      date.setDate(date.getDate() + 1);
      var day = date.getDate();
      var month = date.getMonth() + 1;
      
      $(this).children('.date').text(day);
      $(this).children('.month').text(months[month]);
      $('.dest-field').val(day + ' ' + months[month])
    });

    $('.from-input').datetimepicker({
      lang: 'ru',
      timepicker: false,
      format: 'd-m-Y',
      closeOnDateSelect:true,
      minDate: 0,
      scrollMonth: false,
      onSelectDate:function(ct,$i){
        var day = ct.dateFormat('d');
        var month = ct.dateFormat('m');
        $('.from-date .date').text(day);
        if (month < 10) {
          month = month % 10;
        }
        $('.from-date .month').text(months[month]);
        $('.from-field').val(day + ' ' + months[month])
      }
    });
    $('.dest-input').datetimepicker({
      lang: 'ru',
      timepicker: false,
      format: 'd-m-Y',
      closeOnDateSelect:true,
      minDate: 0,
      scrollMonth: false,
      onSelectDate:function(ct,$i){
        var day = ct.dateFormat('d');
        var month = ct.dateFormat('m');
        $('.dest-date .date').text(day);
        if (month < 10) {
          month = month % 10;
        }
        $('.dest-date .month').text(months[month]);
        $('.dest-field').val(day + ' ' + months[month])
      }
    });;
      
$('.single-item').slick();
$('.carousel-items').slick({
centerMode: true,
  centerPadding: '0px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
});

