<script>
    function SyStore(config) {
        this.param = config && config.param ? config.param : {};
        this.success = config && config.success ? config.success : function() {};
        this.autoLoad = config && config.autoLoad ? config.autoLoad : false;
        this.datasetId = config && config.datasetId ? config.datasetId : 3;
        if(this.autoLoad) {
            this.init();
        }

    }
    SyStore.prototype.init = function() {
        var _this = this;
        $.ajax({
            type: "post",
            url: "/sy-hd/dataset/getDatasetMetasAsType?datasetId=" + _this.datasetId,
            //		async: false,
            success: function(paramData) {
                var pd = {};
                _this.meta = paramData;
                for(var item in paramData) {
                    if(paramData[item] instanceof Array) {
                        $.each(paramData[item], function(i, itemV) {
                            if(i == 0) {
                                pd[item + '.code'] = itemV.extField
                            } else
                                pd[item + '.code'] += "," + itemV.extField;
                        });
                    }

                }
                $.ajax({
                    type: "post",
                    url: "/sy-hd/data",
                    //				data: _this.param,
                    data: pd,
                    //				async: false,
                    success: function(rawDatas) {
                        _this.rawData = rawDatas;
                        _this.tmpData = [];
                        var tmpData = null;
                        var data = null;
                        for(var index in rawDatas.list) {
                            tmpData = {};
                            data = rawDatas.list[index];
                            for(var item in data) {
                                tmpData[item] = data[item] != null && typeof(data[item]['code']) != 'undefined' ? data[item]['code'] : data[item];
                            }
                            _this.tmpData.push(tmpData);
                        }
                        _this.collection = new SyCollection(_this.tmpData);
                        if(_this.success) {
                            _this.done = true;
                            _this.success(_this);
                        };

                    }
                });
            }
        });

    }
    SyStore.prototype.findMetaByItemName = function(item) {
        var _this = this;
        var result = {};
        var pStr = '^\\S*' + item.name + '\\S*$';
        var reg = new RegExp(pStr, 'g'); ///^(item.name)$/;
        if(_this.meta) {
            $.each(_this.meta[item.type], function(j, meta) {

                if(reg.test(meta.name)) {
                    result = meta;
                    return false;
                }
            })
        }
        return result;
    }
    SyStore.prototype.findMetaByName = function(name) {
        var _this = this;
        var result = {};
        if(_this.meta) {
            var isFind = false;
            $.each(_this.meta, function(i, item) {
                $.each(item, function(j, meta) {
                    if(meta.name == name) {
                        result = meta;
                        isFind = true;
                        return false;
                    }
                })
                if(isFind)
                    return false;
            });
        }
        return result;
    }

    function SyCollection(datas) {
        var _this = this;
        if(datas) {
            this._datas = datas;
            $.each(datas, function(index, data) {
                for(var item in data) {
                    if(item == 'value' || item == "_id")
                        continue;
                    if(!_this[item]) {
                        _this[item] = {};
                        _this[item][data[item]] = [data]
                    } else {
                        if(_this[item][data[item]]) {
                            _this[item][data[item]].push(data);
                        } else {
                            _this[item][data[item]] = [data]
                        }
                    }
                }
            });
        } else {
            this._datas = [];
        }

    }

    SyCollection.prototype.filter = function(condition) {
        var tmpResult = this;
        var tmpList = [];
        if(condition) {
            for(var item in condition) {
                if(condition[item] instanceof Array) {
                    for(var i in condition[item]) {
                        if(tmpResult[item] && tmpResult[item][condition[item][i]]) {
                            tmpList = tmpList.concat(tmpResult[item][condition[item][i]]);
                        }

                    }
                    tmpResult = new SyCollection(tmpList);
                    tmpList = [];

                } else {
                    if(tmpResult[item] && tmpResult[item][condition[item]]) {
                        tmpResult = new SyCollection(tmpResult[item][condition[item]]);

                    } else
                        tmpResult = new SyCollection(tmpList);
                }
            }
            return tmpResult;
        } else {
            return this;
        }

    }

    SyCollection.prototype.find = function(condition) {
        var tmpResult = this;
        var tmpList = [];
        if(condition) {
            for(var item in condition) {
                if(condition[item] instanceof Array) {
                    for(var i in condition[item]) {
                        if(tmpResult[item] && tmpResult[item][condition[item][i]]) {
                            tmpList = tmpList.concat(tmpResult[item][condition[item][i]]);
                        }

                    }
                    tmpResult = new SyCollection(tmpList);
                    tmpList = [];

                } else {
                    if(tmpResult[item] && tmpResult[item][condition[item]]) {
                        console.log(item)
                        tmpResult = new SyCollection(tmpResult[item][condition[item]]);

                    } else
                        tmpResult = new SyCollection(tmpList);
                }
            }
            return tmpResult._datas;
        } else {
            return this._datas;
        }

    }
    //序列1条件series[2014,2015]     维度条件dim[163,164]    filter   样式array   axis横轴[jimo,qingdao]{name type code extField}
    function SyChartSeriesKit(option) {
        this.setOption(option);
        if(this.store) {
            this.collection = this.store.collection;
            if(this.filter) {
                var tmpFilter = {};
                $.each(this.filter, function(index, item) {
                    if(tmpFilter[item.type]) {
                        tmpFilter[item.type].push(item.extField);
                    } else {
                        tmpFilter[item.type] = [item.extField]
                    }
                });
                this.collection = this.collection.filter(tmpFilter);
            }
        }
    }
    SyChartSeriesKit.prototype._genFilter = function(arr) {
        var tmpFilter = {};
        $.each(arr, function(index, item) {
            if(tmpFilter[item.type]) {
                tmpFilter[item.type].push(item.extField);
            } else {
                tmpFilter[item.type] = [item.extField]
            }
        });
        return tmpFilter;
    }
    SyChartSeriesKit.prototype.genSeriesData = function(option) {
        var _this = this;
        if(!option)
            option = {};

        var tmpSeries = option.series ? option.series : this.series;
        var tmpAxis = option.axis ? option.axis : this.axis;
        var tmpCollection = this.collection;
        var dim = option.dim ? option.dim : this.dim;
        var dimSize = dim ? dim.length : 0;
        var style = option.style ? option.style : this.style; //arr obj
        if(tmpSeries) {
            var tmpFilter = _this._genFilter(tmpSeries);
            tmpCollection = tmpCollection.filter(tmpFilter);

            if(tmpAxis) {
                var tmpResult = [];
                var tmpItem = null;
                var tmpAxisItem = null;
                var tmpDimItem = null;
                var tmpDimV = null;
                $.each(tmpAxis, function(index, item) {
                    tmpFilter = _this._genFilter(item.arr);
                    tmpAxisItem = tmpCollection.filter(tmpFilter);
                    if(dimSize < 1) {
                        if(style != 'obj')
                            tmpResult.push(tmpAxisItem._datas[0] && tmpAxisItem._datas[0].value != null && typeof(tmpAxisItem._datas[0].value) != 'undefined' ? tmpAxisItem._datas[0].value : '-');
                        else
                            tmpResult.push(tmpAxisItem._datas[0] && tmpAxisItem._datas[0].value != null && typeof(tmpAxisItem._datas[0].value) != 'undefined' ? {
                                    name: item.name,
                                    value: tmpAxisItem._datas[0].value
                                } : '-');
                    } else {
                        tmpDimV = [];
                        $.each(dim, function(jndex, tmpDim) {

                            tmpFilter = _this._genFilter(tmpDim);
                            tmpDimItem = tmpAxisItem.filter(tmpFilter);
                            if(style != 'obj') {
                                if(dimSize > 1)
                                    tmpDimV.push(tmpDimItem._datas[0] && tmpDimItem._datas[0].value != null && typeof(tmpDimItem._datas[0].value) != 'undefined' ? tmpDimItem._datas[0].value.trim() : '-');
                                else
                                    tmpDimV = tmpDimItem._datas[0] && tmpDimItem._datas[0].value != null && typeof(tmpDimItem._datas[0].value) != 'undefined' ? tmpDimItem._datas[0].value.trim() : '-';
                            } else {
                                if(dimSize > 1)
                                    tmpDimV.push(tmpDimItem._datas[0] && tmpDimItem._datas[0].value != null && typeof(tmpDimItem._datas[0].value) != 'undefined' ? {
                                            name: item.name,
                                            value: tmpDimItem._datas[0].value.trim()
                                        } : '-');
                                else
                                    tmpDimV = tmpDimItem._datas[0] && tmpDimItem._datas[0].value != null && typeof(tmpDimItem._datas[0].value) != 'undefined' ? {
                                            name: item.name,
                                            value: tmpDimItem._datas[0].value.trim()
                                        } : '-';
                            }
                        });
                        tmpResult.push(tmpDimV);

                    }

                });
                return tmpResult;

            }
        }

    }

    SyChartSeriesKit.prototype.setOption = function(option) {

        if(option) {
            for(var item in option) {
                this[item] = option[item];
            }
        }
    }

    function SyValueKit(baseFilterV, store) {
        this.baseFilterV = baseFilterV;
        this.store = store;
        this.baseFilter = this.store.collection.filter(this.baseFilterV);
    }

    SyValueKit.prototype.findValueByItemName = function(filter, isV) {
        var meta = this.store.findMetaByItemName({
            type: 'item',
            name: filter
        });
        this.baseFilter = this.store.collection.filter(this.baseFilterV);
        if(!isV) {
            return this.baseFilter.filter({
                item: meta.extField
            });
        } else {
            var res = this.baseFilter.filter({
                item: meta.extField
            });
            return res._datas[0] ? res._datas[0].value : '-'

        }

    }
</script>
<script>
    //===============!时间轴(季度)=================
    var sDate = new Date();
    var sQuarter = parseInt((sDate.getMonth() + 1) / 3);
    sDate.setMonth(sQuarter * 3 - 1);
    var cDateYear = null;
    var cDateMonth = null;
    var date = null;
    var dateArr = []; //时间数组
    var dateStrArr = []; //时间字符数组
    var cAxisArr = []; //普通图表横轴
    for (var i = 6; i >= 1; i--) {
        date = new Date(sDate.getTime() - 1000 * 60 * 60 * 24 * 30 * i * 3);
        dateArr.push(date);
        dateStrArr.push(date.getFullYear() + '-' + (date.getMonth() + 1));
        cAxisArr.push({
            name: date.getFullYear() + '-' + (date.getMonth() + 1),
            arr: [{
                name: date.getFullYear(),
                type: 'time_year',
                extField: date.getFullYear()
            }, {
                name: date.getMonth() + 1,
                type: 'time_month',
                extField: date.getMonth() + 1
            }]
        })
    }
    function initTimelineArea(showData) {
        var dom = document.getElementById("HeaderDatelineArea");
        var myChart = echarts.getInstanceByDom(dom);
        if (myChart) {
            myChart.dispose();
        }
        myChart = echarts.init(dom);
        if (showData) {
            myChart.on('timelinechanged', showData);
        }
        var option = {
            baseOption: {
                timeline: {
                    axisType: 'category',
                    autoPlay: false,
                    currentIndex: dateArr.length - 1,
                    playInterval: 1000,
                    data: dateStrArr
                },
                calculable: true,
                grid: {
                    top: 80,
                    bottom: 100,
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {
                            type: 'shadow',
                            label: {
                                show: true,
                                formatter: function (params) {
                                    return params.value.replace('\n', '');
                                }
                            }
                        }
                    }
                }
            }
        };
        myChart.setOption(option);
    }
</script>
<script>
    var storeB = null;

    $(function() {
        //指标切换
        storeB = new SyStore({
            autoLoad: true,
            datasetId: 4,
            success: function (store) {
                initTimelineArea();
                //==============散点图(横轴指标)=================
                var axisArr = [];
                for (var axis in store.meta.item) {
                    axisArr.push({
                        name: store.meta.item[axis].name,
                        arr: [{
                            type: 'item',
                            extField: store.meta.item[axis].extField
                        }]
                    })

                }
                //==============!散点图(横轴指标)=================
                for (var j in dateArr) {
                    var baseRes = {
                        frame: 200000011,
                        area: 1508,
                        time_year: dateArr[j].getFullYear(),
                        time_month: dateArr[j].getMonth() + 1,
                        //							tmp_id: 9
                    }

                    var baseRes1 = {
                        frame: 200000014,
                        area: 1508,
                        time_year: dateArr[j].getFullYear(),
                        time_month: dateArr[j].getMonth() + 1,
                        //							tmp_id: 9
                    }
                    var kit = new SyValueKit(baseRes, store); //总量kit
                    var kit1 = new SyValueKit(baseRes1, store); //增速kit
//                    console.log(dateArr[j].getFullYear() + '-' + (dateArr[j].getMonth() + 1) + ':' + kit1.findValueByItemName("地区生产总值", true))
//                    console.log(dateArr[j].getFullYear() + '-' + (dateArr[j].getMonth() + 1) + ':' + kit.findValueByItemName("地区生产总值", true))
                    //===============散点图kit==============
                    var sandianKit = new SyChartSeriesKit({
                        store: store,
                        series: [{
                            type: "time_year",
                            extField: dateArr[j].getFullYear()
                        }, {
                            type: 'time_month',
                            extField: dateArr[j].getMonth() + 1
                        }, {
                            type: 'area',
                            extField: 1508
                        }],
                        axis: axisArr,
                        dim: [
                            [{
                                type: 'frame',
                                extField: store.findMetaByItemName({
                                    type: 'frame',
                                    name: '增长率'
                                }).extField
                            }],
                            [{
                                type: 'frame',
                                extField: store.findMetaByItemName({
                                    type: 'frame',
                                    name: '累计'
                                }).extField
                            }]
                        ]

                    });

                    //序列1条件series[2014,2015]     维度条件dim[163,164]    filter   样式array   axis横轴[jimo,qingdao]{name type code extField}
                    //						console.log(chartKit)
                    var sd = sandianKit.genSeriesData();
//                    console.log("=============散点图=====================")
//                    console.log(sd);
//                    console.log("=============!散点图==================")
                    //===============!散点图kit==============

                    //===============饼图kit==============
//                    var pieKit = new SyChartSeriesKit({
//                        store: store,
//                        style: 'obj',
//                        series: [{
//                            type: "time_year",
//                            extField: dateArr[j].getFullYear()
//                        }, {
//                            type: 'time_month',
//                            extField: dateArr[j].getMonth() + 1
//                        }, {
//                            type: 'area',
//                            extField: 1508
//                        }, {
//                            type: 'frame',
//                            extField: 200000011
//                        }],
//                        axis: [{
//                            name: '第一产业',
//                            arr: [{
//                                type: 'item',
//                                extField: store.findMetaByItemName({
//                                    type: 'item',
//                                    name: '第一产业'
//                                }).extField
//                            }]
//                        }, {
//                            name: '第二产业',
//                            arr: [{
//                                //name: date.getFullYear(),
//                                type: 'item',
//                                extField: store.findMetaByItemName({
//                                    type: 'item',
//                                    name: '第二产业'
//                                }).extField
//                            }]
//                        }, {
//                            name: '第三产业',
//                            arr: [{
//                                //name: date.getFullYear(),
//                                type: 'item',
//                                extField: store.findMetaByItemName({
//                                    type: 'item',
//                                    name: '第三产业'
//                                }).extField
//                            }]
//                        }]
//                    });
//
//                    var pd = pieKit.genSeriesData();
////                    console.log(pd);
//                    //===============!饼图kit==============

                }
//                //===============普通图kit==============
//                var chartKit = new SyChartSeriesKit({
//                    store: store,
//                    series: [{
//                        type: "item",
//                        extField: store.findMetaByItemName({
//                            type: 'item',
//                            name: '第二产业'
//                        }).extField
//                    }, {
//                        type: 'frame',
//                        extField: store.findMetaByItemName({
//                            type: 'frame',
//                            name: '累计'
//                        }).extField
//                    }],
//                    axis: cAxisArr,
//
//                });
////                console.log(chartKit)
////                var cc = chartKit.genSeriesData();
////                console.log(chartKit);
                //===============!普通图kit==============

                var _store = store;

                var initDate = new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 1);

                var baseRes = {
                    frame: 200000011,
                    area: 3519,
                    time_year: initDate.getFullYear(),
                    time_month: initDate.getMonth() + 1,
                    tmp_id: 1
                };
                var baseSpeed = {
                    frame: 200000014,
                    area: 3519,
                    time_year: initDate.getFullYear(),
                    time_month: initDate.getMonth() + 1,
                    tmp_id: 1
                };
                var baseSpeedLast = {
                    frame: 200000014,
                    area: 3519,
                    time_year: new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 2).getFullYear(),
                    time_month: new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 2).getMonth() + 1,
                    tmp_id: 1
                };

                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);
                var kitSL = new SyValueKit(baseSpeedLast, _store);

                initTimelineArea(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;
                    baseSpeedLast.time_year = new Date(nowDate.getTime() - 1000 * 60 * 60 * 24 * 30 * 1).getFullYear();
                    baseSpeedLast.time_month = new Date(nowDate.getTime() - 1000 * 60 * 60 * 24 * 30 * 1).getMonth() + 1;
                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);
                    kitSL = new SyValueKit(baseSpeedLast, _store);

                    var $trLists = $(".table tbody").children("tr");
                    $.each($trLists, function (i, trlist) {
                        var $trlist = $(trlist);
                        var $tdTitle = $($trlist.find("td").eq(0));
                        var $tdV = $($trlist.find("td").eq(1));
                        var $tdS = $($trlist.find("td").eq(2));
                        $tdV.text(kitV.findValueByItemName($tdTitle.text(), true));
                        $tdS.text(kitS.findValueByItemName($tdTitle.text(), true));
                    });
                });

                var $trLists = $(".table tbody").children("tr");
                $.each($trLists, function (i, trlist) {
                    var $trlist = $(trlist);
                    var $tdTitle = $($trlist.find("td").eq(0));
                    var $tdV = $($trlist.find("td").eq(1));
                    var $tdS = $($trlist.find("td").eq(2));
                    $tdV.text(kitV.findValueByItemName($tdTitle.text(), true));
                    $tdS.text(kitS.findValueByItemName($tdTitle.text(), true));
                });

            }
        });
    })
</script>