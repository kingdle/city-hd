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
			console.log(pd)
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
						_this.success(_this);
					};

				}
			});
		}
	});

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
								tmpDimV.push(tmpDimItem._datas[0] && tmpDimItem._datas[0].value != null && typeof(tmpDimItem._datas[0].value) != 'undefined' ? tmpDimItem._datas[0].value : '-');
							else
								tmpDimV = tmpDimItem._datas[0] && tmpDimItem._datas[0].value != null && typeof(tmpDimItem._datas[0].value) != 'undefined' ? tmpDimItem._datas[0].value : '-';
						} else {
							if(dimSize > 1)
								tmpDimV.push(tmpDimItem._datas[0] && tmpDimItem._datas[0].value != null && typeof(tmpDimItem._datas[0].value) != 'undefined' ? {
									name: item.name,
									value: tmpDimItem._datas[0].value
								} : '-');
							else
								tmpDimV = tmpDimItem._datas[0] && tmpDimItem._datas[0].value != null && typeof(tmpDimItem._datas[0].value) != 'undefined' ? {
									name: item.name,
									value: tmpDimItem._datas[0].value
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