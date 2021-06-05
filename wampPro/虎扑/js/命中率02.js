
            var chart_a45300df15ee4e109b48ff5495ec7138 = echarts.init(
                document.getElementById('a45300df15ee4e109b48ff5495ec7138'), 'white', {renderer: 'canvas'});
            var option_a45300df15ee4e109b48ff5495ec7138 = {
        "animation": true,
        "animationThreshold": 2000,
        "animationDuration": 1000,
        "animationEasing": "cubicOut",
        "animationDelay": 0,
        "animationDurationUpdate": 300,
        "animationEasingUpdate": "cubicOut",
        "animationDelayUpdate": 0,
        "color": [
            "#c23531","#2f4554","#61a0a8","#d48265","#749f83","#ca8622",
            "#bda29a","#6e7074","#546570","#c4ccd3","#f05b72","#ef5b9c",
            "#f47920","#905a3d","#fab27b","#2a5caa","#444693","#726930",
            "#b2d235","#6d8346","#ac6767","#1d953f","#6950a1","#918597"
        ],
        "series": [
            {
                "type": "line",
                "name": "NBA",
                "connectNulls": false,
                "symbolSize": 4,
                "showSymbol": true,
                "smooth": false,
                "clip":true,
                "step":false,
                "data":[
                    ["\u5e93\u91cc",52],
                    ["\u6bd4\u5c14",50],
                    ["\u4e1c\u5951\u5947",53],
                    ["\u963f\u5fb7\u6258\u6606\u535a",49],
                    ["\u5229\u62c9\u5fb7",54],
                    ["\u62c9\u6587",53]
                ],
                "hoverAnimation": true,
                "label": {
                "show": true,
                "position": "top",
                "margin": 8
                },
                "lineStyle": {
                "show": true,
                "width": 2,
                "opacity": 1,
                "curveness": 0,
                "type": "solid"
                },
                "areaStyle": {
                "opacity": 0
                },
                "zlevel": 0,
                "z": 0
            }
        ],
        "legend": [
            {
                "data": [
                    "NBA"
                ],
                "selected": {
                    "NBA": true
                },
                "show": true,
                "padding": 5,
                "itemGap": 10,
                "itemWidth": 25,
                "itemHeight": 14
            }
        ],
        "tooltip": {
            "show": true,
            "trigger": "item",
            "triggerOn": "mousemove|click",
            "axisPointer": {
            "type": "line"
            },
            "showContent": true,
            "alwaysShowContent": false,
            "showDelay": 0,
            "hideDelay": 100,
            "textStyle": {
            "fontSize": 14
            },
            "borderWidth": 0,
            "padding": 5
        },
        "xAxis": [
            {
                "type": "category",
                "show": true,
                "scale": false,
                "nameLocation": "end",
                "nameGap": 15,
                "gridIndex": 0,
                "inverse": false,
                "offset": 0,
                "splitNumber": 5,
                "minInterval": 0,
                "splitLine": {
                "show": false,
                "lineStyle": {
                "show": true,
                "width": 1,
                "opacity": 1,
                "curveness": 0,
                "type": "solid"
                    }
                },
                "data": [
                    "\u5e93\u91cc",
                    "\u6bd4\u5c14",
                    "\u4e1c\u5951\u5947",
                    "\u963f\u5fb7\u6258\u6606\u535a",
                    "\u5229\u62c9\u5fb7",
                    "\u62c9\u6587"
                ]
            }
        ],
        "yAxis": [
            {
                "type": "value",
                "show": true,
                "scale": false,
                "nameLocation": "end",
                "nameGap": 15,
                "gridIndex": 0,
                "axisTick": {
                "show": true,
                "alignWithLabel": false,
                "inside": false
                },
                "inverse": false,
                "offset": 0,
                "splitNumber": 5,
                "minInterval": 0,
                "splitLine": {
                "show": true,
                "lineStyle": {
                "show": true,
                "width": 1,
                "opacity": 1,
                "curveness": 0,
                "type": "solid"
                    }
                }
            }
        ],
        "title": [
            {
                "text": "\u6bd4\u8d5b\u573a\u6b21",
                "padding": 5,
                "itemGap": 10
            }
        ]
    };
            chart_a45300df15ee4e109b48ff5495ec7138.setOption(option_a45300df15ee4e109b48ff5495ec7138);