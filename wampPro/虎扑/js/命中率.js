var myChart1=echarts.init(document.getElementById('pie'));
        option = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: '5%',
                left: 'center'
            },
            series: [
                {
                    name: '球队总命中率',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    itemStyle: {
                        borderRadius: 10,
                        borderColor: '#fff',
                        borderWidth: 2
                    },
                    label: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        label: {
                            show: true,
                            fontSize: '40',
                            fontWeight: 'bold'
                        }
                    },
                    labelLine: {
                        show: false
                    },
                    data: [
                    {"value":48.5,"name":"雄鹿"},
                    {"value":49.3,"name":"篮网"},
                    {"value":46.6,"name":"爵士"},
                    {"value":48.8,"name":"掘金"},
                    {"value":48.2,"name":"鹈鹕"},
                    {"value":48.3,"name":"快船"},
                    {"value":48.2,"name":"国王"},
                    {"value":47.0,"name":"奇才"},
                    {"value":44.7,"name":"开拓者"},
                    {"value":48.7,"name":"太阳"}
                    ]
                }
            ]
        };
        myChart1.setOption(option);
   