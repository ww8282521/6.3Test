var colors= ['#95E1D3','#EAFFD0','#FCE38A','#FF75A0','#FB743E'];
        var bgColor= '#000';
        var itemStyle={
            star5:{color:colors[0]},
            star4:{color:colors[1]},
            star3:{color:colors[2]},
            star2:{color:colors[3]},
        };
        var data=[
            {
                name:'球队',
                itemStyle:{color:colors[1]},
                children:[
                    {
                    name:'国王队',
                    children:[
                        {   name:'5❤',
                            children:[
                                {name:'达龙-福克斯'},
                                {name:'巴迪-希尔德'},
                                {name:'哈里森-恩巴斯'}]
                        },
                        {   name:'4❤',
                            children:[
                                {name:'小迈克尔-伯特'},
                                {name:'约翰-科林斯'},
                                {name:'迈克-康利'}]
                        },
                        {   name:'3❤',
                            children:[
                                {name:'朱-霍勒迪'}]
                        },
                    ]
                },
                    {
                    name:'公牛队',
                    children:[
                        {   name:'5❤',
                            children:[
                                {name:'克里斯-米德尔顿'},
                                {name:'曳登-海尔沃'},
                                {name:'贾-莫兰特'}]
                        },
                        {   name:'4❤',
                            children:[
                                {name:'安德鲁-威金斯'},
                                {name:'RJ-巴雷特'},
                                {name:'狄龙-布鲁克斯'}]
                        },
                        {   name:'2❤',
                            children:[
                                {name:'凯尔-洛瑞'},
                                {name:'多诺万-米切尔'}]
                        },
            ]
        },
                ]
            },
            {
                name:'球队',
                itemStyle:{color:colors[2]},
                children:[
                    {
                        name:'勇士队',
                        children:[
                            {   name:'5❤',
                                children:[
                                    {name:'尼古拉-约基奇'},
                                    {name:'杰森-塔特姆'},
                                    {name:'科怀-伦纳德'}]
                            },
                            {   name:'4❤',
                                children:[
                                    {name:'特雷-杨'},
                                    {name:'杰伦-布朗'},
                                    {name:'保罗-乔治'}]
                            },
                            {   name:'3❤',
                                children:[
                                    {name:'杰拉米-格兰特'}]
                            },
                        ]
                    },
                    {
                        name:'奇才队',
                        children:[
                            {   name:'5❤',
                                children:[
                                    {name: '杰伦-阿特'},
                                    {name:'斯蒂芬-库里'}]
                            },
                            {   name:'4❤',
                                children:[
                                    {name:'扎克-拉文'},
                                    {name:'卢卡-东契奇'},
                                    {name:'达米安-安妮'}]
                            },
                            {   name:'3❤',
                                children:[
                                    {name:'阿德-米拉'},
                                    {name:'约翰-林'}]
                            },
                        ]
                    },
                ]
            },
        ];
        for (var j = 0;j< data.length; ++j){
            var level1=data[j].children;    
            for (var i=0;i < level1.length;++i){
                var block = level1[i].children; 
                var courseScore = [];
                var courseScoreId;
                for(var star = 0;star< block.length;++star){
                    var style = (function (name){
                        switch(name){
                            case '5❤':
                              courseScoreId = 0;
                              return itemStyle.star5;
                            case '4❤':
                                courseScoreId= 1;
                                return itemStyle.star4;
                            case '3❤':
                                courseScoreId = 2;
                                return itemStyle.star3;
                            case '2❤':
                                courseScoreId= 3;
                                return itemStyle.star2;
                        }
                    })(block[star].name);
    
                    block[star].label = {
                        color:style.color,
                        downplay:{
                            opacity:0.5
                        }
                    };
    
                    if (block[star].children){
                        style={
                            opacity:1,
                            color:style.color
                        };
                        block[star].children.forEach(function(course){
                            course.value=1;
                            course.itemStyle=style;
                            course.label ={
                                color:style.color
                            };
                            var value =1;
                            if(courseScoreId === 0||courseScoreId === 3){
                                value =5;
                            }
                            if(courseScore[courseScoreId]){
                                courseScore[courseScoreId].value += value;
                            }
                            else{
                                courseScore[courseScoreId]={
                                    color:colors[courseScoreId],
                                    value:value
                                };
                            }
                        });
                    }
                }
    
            }
        }
    
        option ={
            backgroundColor:bgColor,
            color:colors,
            series:[{
                type:'sunburst',
                center:['50%','48%'],
                data: data,
                sort:function(a,b){
                    if(a.depth === 1){
                        return b.getValue() - a.getValue();
                    }
                    else{
                        return a.dataIndex - b.dataIndex;
                    }
                },
                label:{
                    rotate:'radial',
                    color:bgColor
                },
                itemStyle:{
                    borderColor:bgColor,
                    borderwidth:2
                },
                levels:[{},{
                    r0:0,
                    r:40,
                    label:{
                        rotate:0
                    }
                },
                    {r0:40,r:105},
                    {r0:105,r:140,
                    itemStyle:{
                        shadowBlur:2,
                        shadowColor:colors[2],
                        color:'transparent'
                    },
                    label:{
                        rotate:'tangential',
                        fontSize:10,
                        color:colors[0]
                    }
                    },
                    {r0:140,r:145,
                    itemStyle:{
                        shadowBlur:80,
                        shadowColor:colors[0]
                    },
                    label:{
                        position:'outside',
                        textShadowBlur:5,
                        textShadowColor:'#333'
                    },
                    downplay:{
                        label:{opacity:0.5}
                    }
                    }]
            }]
        };
        var thirdC = echarts.init(document.getElementById('sun_burst'));
        thirdC.setOption(option)
    