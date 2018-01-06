Vue.component('sy-td', {
	props: ['v', 'col', 'row', 'colspan', 'rowspan'],
	template: '<td :rowspan="rowspan" :colspan="colspan">{{v}}</td>',
	computed: {

	},
	data: function() {
		return {
			fresh: 0,
			mystoreid: this.systoreid ? this.systoreid : null
		};
	},
	methods: {}
});
Vue.component('sy-tr', {
	props: ['tds', 'row', 'spans', /*'valuekit',*/ /*'metas',*/ 'reportMetas'],
	template: '<tr><sy-td v-for="(td,col) in tds" is="sy-td" v-if="toShowtd(row,col,tds)" :colspan="getSpans(row,col).colspan" :rowspan="getSpans(row,col).rowspan"  :col="col" :row="row" :v="getValue(row,col,td)"></sy-td></tr>',
	computed: {

	},
	data: function() {
		return {
			fresh: 0,
			mystoreid: this.systoreid ? this.systoreid : null
		};
	},
	methods: {
		getValue: function(row, col, td) {
			var metas = this.$parent.tmpMetas;
			if(metas['dr_' + row + '_dc_' + col]) {
				var filter = {};
				if(this.reportMetas) {

					$.each(this.reportMetas, function(i, meta) {
						filter[meta.type] = meta.extField;

					});
				}
				var tt = {};
				var t = $.extend(true, tt, metas['r_' + row], metas['c_' + col]);
				$.each(t, function(key, value) {
					if(key.indexOf('sy_meta_') >= 0) {
						filter[t[key].type] = value.extField;
					}

				});
				var result = this.$parent.valueKits['r_' + row].findValueByObj(filter, true);
				return result;

			} else {
				return td;
			}

		},
		toShowtd: function(row, col, tds) {
			if(col == tds.length - 1) {

				return false;
			}
			if(this.spans && this.spans['r_' + row] && this.spans['r_' + row]['c_' + col]) {
				if(this.spans['r_' + row]['c_' + col].rowspan + this.spans['r_' + row]['c_' + col].colspan == 0) {
					return false;
				}

			}
			return true;
		},
		getSpans: function(row, col) {
			if(this.spans && this.spans['r_' + row] && this.spans['r_' + row]['c_' + col]) {
				if(this.spans['r_' + row]['c_' + col].rowspan + this.spans['r_' + row]['c_' + col].colspan > 0) {
					return {
						rowspan: this.spans['r_' + row]['c_' + col].rowspan,
						colspan: this.spans['r_' + row]['c_' + col].colspan
					};
				}

			}
			return {
				rowspan: 1,
				colspan: 1
			};
		}
	}
});
Vue.component('sy-table', {
	props: ['stru'],
	template: '<table><sy-tr v-if="row!=stru.reportCellDatas.length-1" v-for="(tr,row) in stru.reportCellDatas"  :spans="spans" :row="row" :tds="tr" :reportMetas="stru.reportMetas?stru.reportMetas:[]"></sy-tr></table>',
	computed: {
		spans: function() {
			var spans = this.getSpans();
			return spans;

		},

	},
	data: function() {
		return {
			fresh: 0,
			mystoreid: this.systoreid ? this.systoreid : null
		};
	},
	created: function() {

		var metas = this.getMetas();
		this.getValueKit();
	},
	methods: {
		getValueKit: function() {
			if(!this.valueKit) {
				this.valueKit = new SyValueKit({}, this.$parent.$options.store);
			}
			if(!this.valueKits) {
				this.valueKits = {};
				var metas = this.getMetas();
				var _this = this;
				$.each(_this.stru.reportCellDatas, function(i, item) {
					if(metas['r_' + i]) {
						var filter = {};
						var tt = {};
						var t = $.extend(true, tt, metas['r_' + i]);
						$.each(t, function(key, value) {
							if(key.indexOf('sy_meta_') >= 0) {
								filter[t[key].type] = value.extField;
							}

						});
						_this.valueKits['r_' + i] = new SyValueKit(filter, _this.$parent.$options.store);

					}

				});
			}
			//			console.log(this.valueKits)

			return this.valueKit;
		},
		getMetas: function() {
			var result = {};

			if(!this.tmpMetas) {
				if(this.stru && this.stru.reportCellMetas) {
					var tmpMeta = null;
					$.each(this.stru.reportCellMetas, function(i, meta) {

						if(meta.sy_cell_type && meta.sy_cell_type == 'data') {
							result['dr_' + meta.row + '_dc_' + meta.col] = {
								row: meta.row,
								col: meta.col
							};

						}

						if(meta.sy_cell_type && meta.sy_cell_type == 'meta') {
							tmpMeta = {};
							if(result['c_' + meta.col]) {
								result['c_' + meta.col] = $.extend(true, result['c_' + meta.col], meta);
							} else {

								result['c_' + meta.col] = $.extend(true, tmpMeta, meta);
							}
							var tmpMeta = {};
							if(result['r_' + meta.row]) {

								result['r_' + meta.row] = $.extend(true, result['r_' + meta.row], meta);
							} else {
								result['r_' + meta.row] = $.extend(true, tmpMeta, meta);
							}

						}
					});
				}

				this.tmpMetas = result;
			}
			return this.tmpMetas;

		},
		getSpans: function() {

			var result = {};
			if(!this.tmpSpans) {
				if(this.stru && this.stru.mergeCells)
					$.each(this.stru.mergeCells.mergedCellInfoCollection, function(i, merged) {
						for(var r = 0; r <= merged.rowspan - 1; r++) {
							if(result['r_' + (merged.row + r)]) {
								for(var c = 0; c <= merged.colspan - 1; c++) {
									if(c == 0 && r == 0) {
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)] = {};
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)].rowspan = merged.rowspan;
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)].colspan = merged.colspan;
									} else {
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)] = {};
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)].rowspan = 0;
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)].colspan = 0;
									}
								}
							} else {
								result['r_' + (merged.row + r)] = {};
								for(var c = 0; c <= merged.colspan - 1; c++) {
									if(c == 0 && r == 0) {
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)] = {};
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)].rowspan = merged.rowspan;
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)].colspan = merged.colspan;
									} else {
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)] = {};
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)].rowspan = 0;
										result['r_' + (merged.row + r)]['c_' + (merged.col + c)].colspan = 0;
									}
								}

							}
						}
					});

				this.tmpSpans = result;
			}
			return this.tmpSpans;
		}
	}
});