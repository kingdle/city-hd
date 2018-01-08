Vue.component('sy-chart', {
	props: ['chartid', 'syoption', /*'store',*/ 'systoreid', 'styleobj'],
	template: '<div :bb="syoption" :id="chartid" :do="fresh" style="width:100%;height:100%" :storeid="mystoreid" :aa="myOption" :style="styleobj"></div>',
	computed: {
		myOption: function() {
			var option = {};
			if(!this.store) {
				this.initStore();
			}
			$.extend(true, option, this.syoption);
			var chartKit = this.chartKit = new SyChartSeriesKit({
				store: this.store,
				axis: option.syaxisfilter ? option.syaxisfilter : []
			});
			var xData = [];
			if(option.xAxis && option.syaxisfilter) {
				for(var item in option.syaxisfilter) {
					xData.push(option.syaxisfilter[item].name);
				}
				option.xAxis.data = xData;
			}

			option = this.genOption(option);
			console.log(option);
			return option;
		},

	},
	data: function() {
		return {
			fresh: 0,
			mystoreid: this.systoreid ? this.systoreid : null
		};
	},
	methods: {
		initStore: function(fnt) {
			console.log('initStore')
			var _fnt = fnt;
			if(this.$parent.$options.store) {
				this.store = this.$parent.$options.store;
			}
			console.log(this)
			if(this.mystoreid && this.mystoreid != this.systoreid && !this.store) {

				_this.store = new SyStore({
					autoLoad: true,
					datasetId: this.storeid,
					success: function(store) {
						_this.store = store;
						if(_fnt) {
							_fnt(store);
						}
					}
				});
			} else {
				if(_fnt) {
					_fnt(this.store);
				}
			}
		},
		initChart: function() {
			var myChart = echarts.init(document.getElementById(this.chartid));
			myChart.setOption(this.myOption);
		},
		genOption: function(option) {
			var store = this.store;
			var chartKit = this.chartKit;
			var result = [];
			var tmpSeriesfilter = [];
			var tmpDimfilter = [];
			if(option.series) {

				$.each(option.series, function(i, series) {
					if(!series.data) {
						tmpSeriesfilter = [];
						if(series.syfilter) {
							for(var filter in series.syfilter) {
								console.log(filter)
								filter = series.syfilter[filter];
								if(!filter.extField) {
									tmpSeriesfilter.push({
										type: filter.type,
										extField: store.findMetaByItemName({
											type: filter.type,
											name: filter.name
										}).extField
									});
								} else {
									tmpSeriesfilter.push({
										type: filter.type,
										extField: filter.extField
									});
								}
							}
						}
						if(series.sydims) {
							tmpDimfilter = [];
							var tmpDim = null;
							for(var dim in series.sydims) {
								tmpDim = [];
								dim = series.sydims[dim];
								for(var dimItem in dim) {
									console.log(dim)
									dimItem = dim[dimItem];
									if(!dimItem.extField) {
										tmpDim.push({
											type: dimItem.type,
											extField: store.findMetaByItemName({
												type: dimItem.type,
												name: dimItem.name
											}).extField
										});
									} else {
										tmpDim.push({
											type: dimItem.type,
											extField: dimItem.extField
										});
									}
								}
								tmpDimfilter.push(tmpDim);

							}
						}
						console.log(chartKit)
						series.data = chartKit.genSeriesData({
							style: series.type != 'pie' ? null : 'obj',
							series: tmpSeriesfilter,
							dim: tmpDimfilter
						});
					}

				});
			}
			return option;

		}
	},
	updated: function() {
		console.log('updated')
		var _this = this;
		this.initStore(function() {

			_this.initChart();
		})

	},
	mounted: function() {
		console.log('mounted')

		this.fresh++;

	}
});