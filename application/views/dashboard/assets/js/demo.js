type = ['','info','success','warning','danger'];


demo = {
  initPickColor: function(){
    $('.pick-class-label').click(function(){
      var new_class = $(this).attr('new-class');  
      var old_class = $('#display-buttons').attr('data-class');
      var display_div = $('#display-buttons');
      if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
      }
    });
  },

  initChartist: function($tipo = true,$porcent =62,$datas = null){    

    $data1=[0, 30, 49, 49, 55, 56, 68, 88, 40]
    $data2=[0, 20, 14, 24, 28, 33, 45, 47, 32]
    $data3=[0, 10, 67, 10, 19, 23, 37, 30, 24]
    if ($tipo = 1 && $datas != null) {
      $data1=$datas[0]
      $data2=$datas[1]
      $data3=$datas[2]
    }
    var dataSales = {
      labels: ['', 'lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'],
      series: [$data1,$data2,$data3]
    };

    var optionsSales = {
      lineSmooth: false,
      low: 0,
      high: 100,
      showArea: true,
      height: "245px",
      axisX: {
        showGrid: false,
      },
      lineSmooth: Chartist.Interpolation.simple({
        divisor: 3
      }),
      showLine: false,
      showPoint: false,
    };

    var responsiveSales = [
    ['screen and (max-width: 640px)', {
      axisX: {
        labelInterpolationFnc: function (value) {
          return value[0];
        }
      }
    }]
    ];
    
    Chartist.Line('#chartHours', dataSales, optionsSales, responsiveSales);

    
    var data = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      series: [
      [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895],
      [412, 243, 280, 580, 453, 353, 300, 364, 368, 410, 636, 695]
      ]
    };

    var options = {
      seriesBarDistance: 10,
      axisX: {
        showGrid: false
      },
      height: "245px"
    };

    var responsiveOptions = [
    ['screen and (max-width: 640px)', {
      seriesBarDistance: 5,
      axisX: {
        labelInterpolationFnc: function (value) {
          return value[0];
        }
      }
    }]
    ];

    Chartist.Bar('#chartActivity', data, options, responsiveOptions);
    
    var dataPreferences = {
      series: [
      [25, 30, 20, 25]
      ]
    };

    var optionsPreferences = {
      donut: true,
      donutWidth: 40,
      startAngle: 0,
      total: 100,
      showLabel: false,
      axisX: {
        showGrid: false
      }
    };
    
    Chartist.Pie('#chartPreferences', dataPreferences, optionsPreferences);

    Chartist.Pie('#chartPreferences', {
      labels: [$porcent+'%','32%','6%'],
      series: [$porcent, 32, 6]
    });   
  },

  showNotification: function(color,from, align){
    	//color = Math.floor((Math.random() * 4) + 1);
    	
    	$.notify({
       icon: "pe-7s-gift",
       message: "Bienvenido a <b>Safiro - Dashboard</b>"

     },{
      type: color,
      timer: 10,
      placement: {
        from: from,
        align: align
      }
    });
    }

    
  }

