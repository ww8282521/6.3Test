var chart_04e08c7ce1ac4625afd615c8e7ceddf4 = echarts.init(
            document.getElementById('04e08c7ce1ac4625afd615c8e7ceddf4'), 'white', {renderer: 'canvas'});
        var option_04e08c7ce1ac4625afd615c8e7ceddf4 = {
    "animation": true,
    "animationThreshold": 2000,
    "animationDuration": 1000,
    "animationEasing": "cubicOut",
    "animationDelay": 0,
    "animationDurationUpdate": 300,
    "animationEasingUpdate": "cubicOut",
    "animationDelayUpdate": 0,
    "color": [
        "#c23531",
        "#2f4554",
        "#61a0a8",
        "#d48265",
        "#749f83",
        "#ca8622",
        "#bda29a",
        "#6e7074",
        "#546570",
        "#c4ccd3",
        "#f05b72",
        "#ef5b9c",
        "#f47920",
        "#905a3d",
        "#fab27b",
        "#2a5caa",
        "#444693",
        "#726930",
        "#b2d235",
        "#6d8346",
        "#ac6767",
        "#1d953f",
        "#6950a1",
        "#918597"
    ],
    "series": [
        {
            "type": "pictorialBar",
            "symbol": "roundRect",
            "symbolSize": 18,
            "symbolOffset": [
                0,
                0
            ],
            "symbolRepeat": "fixed",
            "symbolClip": true,
            "data": [
                42,
                39,
                28,
                15,
                32,
                21,
                33,
                44,
                17,
                43
            ],
            "barCategoryGap": "20%",
            "label": {
                "show": false,
                "position": "top",
                "margin": 8
            }
        }
    ],
    "legend": [
        {
            "data": [
                ""
            ],
            "selected": {
                "": true
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
            "show": false,
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
            }
        }
    ],
    "yAxis": [
        {
            "show": true,
            "scale": false,
            "nameLocation": "end",
            "nameGap": 15,
            "gridIndex": 0,
            "axisLine": {
                "show": true,
                "onZero": true,
                "onZeroAxisIndex": 0,
                "lineStyle": {
                    "show": true,
                    "width": 1,
                    "opacity": 0,
                    "curveness": 0,
                    "type": "solid"
                }
            },
            "axisTick": {
                "show": false,
                "alignWithLabel": false,
                "inside": false
            },
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
                "\u592a\u9633\u961f",
                "\u6398\u91d1\u961f",
                "\u6b65\u884c\u8005\u961f",
                "\u706b\u7bad\u961f",
                "\u70ed\u706b\u961f",
                "\u9a91\u58eb\u961f",
                "\u72ec\u884c\u4fa0\u961f",
                "\u7235\u58eb\u961f",
                "\u68ee\u6797\u72fc\u961f",
                "\u5feb\u8239\u961f"
            ]
        }
    ],
    "title": [
        {
            "text": "NBA\u7403\u961f\u5f97\u80dc\u56fe",
            "padding": 5,
            "itemGap": 10
        }
    ]
};
        chart_04e08c7ce1ac4625afd615c8e7ceddf4.setOption(option_04e08c7ce1ac4625afd615c8e7ceddf4);