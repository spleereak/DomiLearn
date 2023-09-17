<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 order-last order-md-first">
                <div class="copyright text-center text-md-start">
                    <p class="text-sm">
                        Сделано командой
                        <a href="https://github.com/MrLincomins/DomiLearn" rel="nofollow" target="_blank">
                            Домино 2.0
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                ">
                    <a href="/wishes" target="_blank" class="text-sm">Пожелания и запросы</a>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/resources/js/bootstrap.bundle.min.js"></script>
<script src="/resources/js/Chart.min.js"></script>
<script src="/resources/js/dynamic-pie-chart.js"></script>
<script src="/resources/js/moment.min.js"></script>
<script src="/resources/js/fullcalendar.js"></script>
<script src="/resources/js/jvectormap.min.js"></script>
<script src="/resources/js/world-merc.js"></script>
<script src="/resources/js/polyfill.js"></script>
<script src="/resources/js/main.js"></script>
<script src="/resources/js/loading-bar.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .bgc-img img {
        max-width: 150px;
        max-height: 150px;
        -webkit-transform: scale(1); /*Webkit: Scale down image to 0.8x original size*/
        -moz-transform: scale(1); /*Mozilla scale version*/
        -o-transform: scale(1); /*Opera scale version*/
        -webkit-transition-duration: 0.5s; /*Webkit: Animation duration*/
        -moz-transition-duration: 0.5s; /*Mozilla duration version*/
        -o-transition-duration: 0.5s; /*Opera duration version*/
    }

    .bgc-img img:hover {
        -webkit-transform: scale(1); /*Webkit: Scale up image to 1.2x original size*/
        -moz-transform: scale(1); /*Mozilla scale version*/
        -o-transform: scale(1); /*Opera scale version*/
        -webkit-box-shadow: 0px 0px 10px gray; /*Safari shadow version*/
        -moz-box-shadow: 0px 0px 10px gray; /*Mozilla shadow version*/
        padding: 1px;
        background: white;
        z-index: 1000;
        position: absolute;
    }
</style>
<script>
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const modal = document.getElementById("myModal");

    // Открываем всплывающее окно при клике на текст "Пожелания и запросы"
    openModal.addEventListener("click", () => {
        modal.style.display = "block";
    });

    // Закрываем всплывающее окно при клике на крестик
    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Закрываем всплывающее окно при клике за его пределами
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
    // ======== jvectormap activation
    var markers = [
        {name: "Egypt", coords: [26.8206, 30.8025]},
        {name: "Russia", coords: [61.524, 105.3188]},
        {name: "Canada", coords: [56.1304, -106.3468]},
        {name: "Greenland", coords: [71.7069, -42.6043]},
        {name: "Brazil", coords: [-14.235, -51.9253]},
    ];

    var jvm = new jsVectorMap({
        map: "world_merc",
        selector: "#map",
        zoomButtons: true,

        regionStyle: {
            initial: {
                fill: "#d1d5db",
            },
        },

        labels: {
            markers: {
                render: (marker) => marker.name,
            },
        },

        markersSelectable: true,
        selectedMarkers: markers.map((marker, index) => {
            var name = marker.name;

            if (name === "Russia" || name === "Brazil") {
                return index;
            }
        }),
        markers: markers,
        markerStyle: {
            initial: {fill: "#4A6CF7"},
            selected: {fill: "#ff5050"},
        },
        markerLabelStyle: {
            initial: {
                fontWeight: 400,
                fontSize: 14,
            },
        },
    });
    // ====== calendar activation
    document.addEventListener("DOMContentLoaded", function () {
        var calendarMiniEl = document.getElementById("calendar-mini");
        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
            initialView: "dayGridMonth",
            headerToolbar: {
                end: "today prev,next",
            },
        });
        calendarMini.render();
    });

    // =========== chart one start
    const ctx1 = document.getElementById("Chart1").getContext("2d");
    const chart1 = new Chart(ctx1, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
            labels: [
                "Jan",
                "Fab",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            // Information about the dataset
            datasets: [
                {
                    label: "",
                    backgroundColor: "transparent",
                    borderColor: "#4A6CF7",
                    data: [
                        600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,
                    ],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#4A6CF7",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 5,
                    pointBorderWidth: 5,
                    pointRadius: 8,
                    pointHoverRadius: 8,
                },
            ],
        },

        // Configuration options
        defaultFontFamily: "Inter",
        options: {
            tooltips: {
                callbacks: {
                    labelColor: function (tooltipItem, chart) {
                        return {
                            backgroundColor: "#ffffff",
                        };
                    },
                },
                intersect: false,
                backgroundColor: "#f9f9f9",
                titleFontFamily: "Inter",
                titleFontColor: "#8F92A1",
                titleFontColor: "#8F92A1",
                titleFontSize: 12,
                bodyFontFamily: "Inter",
                bodyFontColor: "#171717",
                bodyFontStyle: "bold",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 10,
                bodyAlign: "center",
                titleAlign: "center",
            },

            title: {
                display: false,
            },
            legend: {
                display: false,
            },

            scales: {
                yAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 500,
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    },
                ],
            },
        },
    });

    // =========== chart one end

    // =========== chart two start
    const ctx2 = document.getElementById("Chart2").getContext("2d");
    const chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
            labels: [
                "Jan",
                "Fab",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            // Information about the dataset
            datasets: [
                {
                    label: "",
                    backgroundColor: "#4A6CF7",
                    barThickness: 6,
                    maxBarThickness: 8,
                    data: [
                        600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
                    ],
                },
            ],
        },
        // Configuration options
        options: {
            borderColor: "#F3F6F8",
            borderWidth: 15,
            backgroundColor: "#F3F6F8",
            tooltips: {
                callbacks: {
                    labelColor: function (tooltipItem, chart) {
                        return {
                            backgroundColor: "rgba(104, 110, 255, .0)",
                        };
                    },
                },
                backgroundColor: "#F3F6F8",
                titleFontColor: "#8F92A1",
                titleFontSize: 12,
                bodyFontColor: "#171717",
                bodyFontStyle: "bold",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 10,
                bodyAlign: "center",
                titleAlign: "center",
            },

            title: {
                display: false,
            },
            legend: {
                display: false,
            },

            scales: {
                yAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 0,
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    },
                ],
            },
        },
    });
    // =========== chart two end

    // =========== chart three start
    const ctx3 = document.getElementById("Chart3").getContext("2d");
    const chart3 = new Chart(ctx3, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
            labels: [
                "Jan",
                "Fab",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            // Information about the dataset
            datasets: [
                {
                    label: "Revenue",
                    backgroundColor: "transparent",
                    borderColor: "#4a6cf7",
                    data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#4a6cf7",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
                {
                    label: "Profit",
                    backgroundColor: "transparent",
                    borderColor: "#9b51e0",
                    data: [
                        120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
                    ],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#9b51e0",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
                {
                    label: "Order",
                    backgroundColor: "transparent",
                    borderColor: "#f2994a",
                    data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#f2994a",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
            ],
        },

        // Configuration options
        options: {
            tooltips: {
                intersect: false,
                backgroundColor: "#fbfbfb",
                titleFontColor: "#8F92A1",
                titleFontSize: 16,
                titleFontFamily: "Inter",
                titleFontStyle: "400",
                bodyFontFamily: "Inter",
                bodyFontColor: "#171717",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 15,
                borderColor: "rgba(143, 146, 161, .1)",
                borderWidth: 1,
                title: false,
            },

            title: {
                display: false,
            },

            layout: {
                padding: {
                    top: 0,
                },
            },

            legend: false,

            scales: {
                yAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 300,
                            min: 50,
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    },
                ],
            },
        },
    });
    // =========== chart three end

    // ================== chart four start
    const ctx4 = document.getElementById("Chart4").getContext("2d");
    const chart4 = new Chart(ctx4, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
            labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
            // Information about the dataset
            datasets: [
                {
                    label: "",
                    backgroundColor: "#4A6CF7",
                    barThickness: "flex",
                    maxBarThickness: 8,
                    data: [600, 700, 1000, 700, 650, 800],
                },
                {
                    label: "",
                    backgroundColor: "#d50100",
                    barThickness: "flex",
                    maxBarThickness: 8,
                    data: [690, 740, 720, 1120, 876, 900],
                },
            ],
        },
        // Configuration options
        options: {
            borderColor: "#F3F6F8",
            borderWidth: 15,
            backgroundColor: "#F3F6F8",
            tooltips: {
                callbacks: {
                    labelColor: function (tooltipItem, chart) {
                        return {
                            backgroundColor: "rgba(104, 110, 255, .0)",
                        };
                    },
                },
                backgroundColor: "#F3F6F8",
                titleFontColor: "#8F92A1",
                titleFontSize: 12,
                bodyFontColor: "#171717",
                bodyFontStyle: "bold",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 10,
                bodyAlign: "center",
                titleAlign: "center",
            },

            title: {
                display: false,
            },
            legend: {
                display: false,
            },

            scales: {
                yAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 0,
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    },
                ],
            },
        },
    });
    // =========== chart four end
</script>
</body>
</html>
