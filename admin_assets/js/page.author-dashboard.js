!(function (e) {
	var t = {};
	function n(r) {
		if (t[r]) return t[r].exports;
		var a = (t[r] = { i: r, l: !1, exports: {} });
		return e[r].call(a.exports, a, a.exports, n), (a.l = !0), a.exports;
	}
	(n.m = e),
		(n.c = t),
		(n.d = function (e, t, r) {
			n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r });
		}),
		(n.r = function (e) {
			"undefined" != typeof Symbol &&
				Symbol.toStringTag &&
				Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
				Object.defineProperty(e, "__esModule", { value: !0 });
		}),
		(n.t = function (e, t) {
			if ((1 & t && (e = n(e)), 8 & t)) return e;
			if (4 & t && "object" == typeof e && e && e.__esModule) return e;
			var r = Object.create(null);
			if (
				(n.r(r),
				Object.defineProperty(r, "default", { enumerable: !0, value: e }),
				2 & t && "string" != typeof e)
			)
				for (var a in e)
					n.d(
						r,
						a,
						function (t) {
							return e[t];
						}.bind(null, a)
					);
			return r;
		}),
		(n.n = function (e) {
			var t =
				e && e.__esModule
					? function () {
							return e.default;
					  }
					: function () {
							return e;
					  };
			return n.d(t, "a", t), t;
		}),
		(n.o = function (e, t) {
			return Object.prototype.hasOwnProperty.call(e, t);
		}),
		(n.p = "/"),
		n((n.s = 205));
})({
	205: function (e, t, n) {
		e.exports = n(206);
	},
	206: function (e, t) {
		!(function () {
			"use strict";
			Charts.init();
			!(function (e) {
				var t =
						arguments.length > 1 && void 0 !== arguments[1]
							? arguments[1]
							: "roundedBar",
					n =
						arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
				n = Chart.helpers.merge(
					{
						barRoundness: 1.2,
						scales: {
							yAxes: [
								{
									ticks: {
										callback: function (e) {
											if (!(e % 1)) return "" + e + "";
										},
									},
								},
							],
						},
						tooltips: {
							callbacks: {
								label: function (e, t) {
									var n = t.datasets[e.datasetIndex].label || "",
										r = e.yLabel,
										a = "";
									return (
										1 < t.datasets.length &&
											(a +=
												'<span class="popover-body-label mr-auto">' +
												n +
												"</span>"),
										a + '<span class="popover-body-value">' + r + "</span>"
									);
								},
							},
						},
					},
					n
				);
				var r = {
					labels: [
						"Module1",
						"Module2",
						"Module3",
						"Module4",
						"Module5",
						"Module6",
						"Module7",
						"Module8",
						"Module9",
						"Module10",
						"Module11",
						"Module12",
					],
					datasets: [
						{
							label: "Sales",
							data: [135,132,110,86,76,68,55,42,32,0,0,0],
							barPercentage: 0.5,
							barThickness: 40,
						},
					],
				};
				Charts.create(e, t, n, r);
			})("#earningsChart");
		})();
	},
});
