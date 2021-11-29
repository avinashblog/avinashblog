@extends('admin.layouts.app')
@section('content')
<!--app-content open-->
<div class="app-content">
    <div class="side-app">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Dashboard 01</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                </ol>
            </div>
            <div class="ms-auto pageheader-btn">
                <a href="#" class="btn btn-primary btn-icon text-white me-2">
                    <span> <i class="fe fe-plus"></i> </span> Add Account
                </a>
                <a href="#" class="btn btn-success btn-icon text-white">
                    <span> <i class="fe fe-log-in"></i> </span> Export
                </a>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="">Total Sales</h6>
                                        <h3 class="mb-2 number-font">34,516</h3>
                                        <p class="text-muted mb-0">
                                            <span class="text-primary"><i class="fa fa-chevron-circle-up text-primary me-1"></i> 3%</span> last month
                                        </p>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto"><i class="fe fe-trending-up text-white mb-5"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="">Total Leads</h6>
                                        <h3 class="mb-2 number-font">56,992</h3>
                                        <p class="text-muted mb-0">
                                            <span class="text-secondary"><i class="fa fa-chevron-circle-up text-secondary me-1"></i> 3%</span> last month
                                        </p>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="counter-icon bg-danger-gradient box-shadow-danger brround ms-auto"><i class="icon icon-rocket text-white mb-5"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="">Total Profit</h6>
                                        <h3 class="mb-2 number-font">$42,567</h3>
                                        <p class="text-muted mb-0">
                                            <span class="text-success"><i class="fa fa-chevron-circle-down text-success me-1"></i> 0.5%</span> last month
                                        </p>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto"><i class="fe fe-dollar-sign text-white mb-5"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="">Total Cost</h6>
                                        <h3 class="mb-2 number-font">$34,789</h3>
                                        <p class="text-muted mb-0">
                                            <span class="text-danger"><i class="fa fa-chevron-circle-down text-danger me-1"></i> 0.2%</span> last month
                                        </p>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="counter-icon bg-success-gradient box-shadow-success brround ms-auto"><i class="fe fe-briefcase text-white mb-5"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Transactions</h3>
                    </div>
                    <div class="card-body pb-0">
                        <div id="chartArea" class="chart-donut" style="min-height: 315px;">
                            <div id="apexchartsdg5ptxlg" class="apexcharts-canvas apexchartsdg5ptxlg apexcharts-theme-light" style="width: 1124px; height: 300px;">
                                <svg id="SvgjsSvg1542" width="1124" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="1124" height="300">
                                        <div class="apexcharts-legend apexcharts-align-center position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="TotalxOrders" data:collapsed="false" style="margin: 2px 5px;">
                                                <span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="
                                                                    background: rgb(98, 89, 202) !important;
                                                                    color: rgb(98, 89, 202);
                                                                    height: 12px;
                                                                    width: 12px;
                                                                    left: 0px;
                                                                    top: 0px;
                                                                    border-width: 0px;
                                                                    border-color: rgb(255, 255, 255);
                                                                    border-radius: 12px;
                                                                "></span>
                                                <span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Total%20Orders" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">
                                                    Total Orders
                                                </span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="TotalxSales" data:collapsed="false" style="margin: 2px 5px;">
                                                <span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="
                                                                    background: rgb(249, 148, 51) !important;
                                                                    color: rgb(249, 148, 51);
                                                                    height: 12px;
                                                                    width: 12px;
                                                                    left: 0px;
                                                                    top: 0px;
                                                                    border-width: 0px;
                                                                    border-color: rgb(255, 255, 255);
                                                                    border-radius: 12px;
                                                                "></span>
                                                <span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Total%20Sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">
                                                    Total Sales
                                                </span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="3" seriesname="" data:collapsed="false" style="margin: 2px 5px;">
                                                <span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="
                                                                    background: rgba(119, 119, 142, 0.05) !important;
                                                                    color: rgba(119, 119, 142, 0.05);
                                                                    height: 12px;
                                                                    width: 12px;
                                                                    left: 0px;
                                                                    top: 0px;
                                                                    border-width: 0px;
                                                                    border-color: rgb(255, 255, 255);
                                                                    border-radius: 12px;
                                                                "></span>
                                                <span class="apexcharts-legend-text" rel="3" i="2" data:default-text="" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"></span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.position-bottom,
                                            .apexcharts-legend.position-top {
                                                flex-wrap: wrap;
                                            }

                                            .apexcharts-legend.position-right,
                                            .apexcharts-legend.position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.position-top.apexcharts-align-left,
                                            .apexcharts-legend.position-right,
                                            .apexcharts-legend.position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1544" class="apexcharts-inner apexcharts-graphical" transform="translate(35.34765625, 48)">
                                        <defs id="SvgjsDefs1543">
                                            <clipPath id="gridRectMaskdg5ptxlg">
                                                <rect id="SvgjsRect1550" width="1083.482421875" height="217.348" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskdg5ptxlg">
                                                <rect id="SvgjsRect1551" width="1080.482421875" height="218.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <filter id="SvgjsFilter1557" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood1558" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1558Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite1559" in="SvgjsFeFlood1558Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1559Out"></feComposite>
                                                <feOffset id="SvgjsFeOffset1560" dx="2" dy="2" result="SvgjsFeOffset1560Out" in="SvgjsFeComposite1559Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur1561" stdDeviation="4 " result="SvgjsFeGaussianBlur1561Out" in="SvgjsFeOffset1560Out"></feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge1562" result="SvgjsFeMerge1562Out" in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode1563" in="SvgjsFeGaussianBlur1561Out"></feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode1564" in="[object Arguments]"></feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend1565" in="SourceGraphic" in2="SvgjsFeMerge1562Out" mode="normal" result="SvgjsFeBlend1565Out"></feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter1567" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood1568" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1568Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite1569" in="SvgjsFeFlood1568Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1569Out"></feComposite>
                                                <feOffset id="SvgjsFeOffset1570" dx="2" dy="2" result="SvgjsFeOffset1570Out" in="SvgjsFeComposite1569Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur1571" stdDeviation="4 " result="SvgjsFeGaussianBlur1571Out" in="SvgjsFeOffset1570Out"></feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge1572" result="SvgjsFeMerge1572Out" in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode1573" in="SvgjsFeGaussianBlur1571Out"></feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode1574" in="[object Arguments]"></feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend1575" in="SourceGraphic" in2="SvgjsFeMerge1572Out" mode="normal" result="SvgjsFeBlend1575Out"></feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter1581" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood1582" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1582Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite1583" in="SvgjsFeFlood1582Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1583Out"></feComposite>
                                                <feOffset id="SvgjsFeOffset1584" dx="2" dy="2" result="SvgjsFeOffset1584Out" in="SvgjsFeComposite1583Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur1585" stdDeviation="4 " result="SvgjsFeGaussianBlur1585Out" in="SvgjsFeOffset1584Out"></feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge1586" result="SvgjsFeMerge1586Out" in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode1587" in="SvgjsFeGaussianBlur1585Out"></feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode1588" in="[object Arguments]"></feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend1589" in="SourceGraphic" in2="SvgjsFeMerge1586Out" mode="normal" result="SvgjsFeBlend1589Out"></feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter1594" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood1595" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1595Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite1596" in="SvgjsFeFlood1595Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1596Out"></feComposite>
                                                <feOffset id="SvgjsFeOffset1597" dx="2" dy="2" result="SvgjsFeOffset1597Out" in="SvgjsFeComposite1596Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur1598" stdDeviation="4 " result="SvgjsFeGaussianBlur1598Out" in="SvgjsFeOffset1597Out"></feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge1599" result="SvgjsFeMerge1599Out" in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode1600" in="SvgjsFeGaussianBlur1598Out"></feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode1601" in="[object Arguments]"></feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend1602" in="SourceGraphic" in2="SvgjsFeMerge1599Out" mode="normal" result="SvgjsFeBlend1602Out"></feBlend>
                                            </filter>
                                        </defs>
                                        <line id="SvgjsLine1549" x1="0" y1="0" x2="0" y2="214.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="214.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1603" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1604" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                                <text id="SvgjsText1606" font-family="Helvetica, Arial, sans-serif" x="0" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1607">Jan</tspan>
                                                    <title>Jan</title>
                                                </text>
                                                <text id="SvgjsText1609" font-family="Helvetica, Arial, sans-serif" x="97.86203835227272" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1610">Feb</tspan>
                                                    <title>Feb</title>
                                                </text>
                                                <text id="SvgjsText1612" font-family="Helvetica, Arial, sans-serif" x="195.72407670454544" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1613">Mar</tspan>
                                                    <title>Mar</title>
                                                </text>
                                                <text id="SvgjsText1615" font-family="Helvetica, Arial, sans-serif" x="293.5861150568182" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1616">Apr</tspan>
                                                    <title>Apr</title>
                                                </text>
                                                <text id="SvgjsText1618" font-family="Helvetica, Arial, sans-serif" x="391.44815340909093" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1619">May</tspan>
                                                    <title>May</title>
                                                </text>
                                                <text id="SvgjsText1621" font-family="Helvetica, Arial, sans-serif" x="489.3101917613636" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1622">Jun</tspan>
                                                    <title>Jun</title>
                                                </text>
                                                <text id="SvgjsText1624" font-family="Helvetica, Arial, sans-serif" x="587.1722301136364" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1625">Jul</tspan>
                                                    <title>Jul</title>
                                                </text>
                                                <text id="SvgjsText1627" font-family="Helvetica, Arial, sans-serif" x="685.0342684659091" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1628">Aug</tspan>
                                                    <title>Aug</title>
                                                </text>
                                                <text id="SvgjsText1630" font-family="Helvetica, Arial, sans-serif" x="782.8963068181819" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1631">Sep</tspan>
                                                    <title>Sep</title>
                                                </text>
                                                <text id="SvgjsText1633" font-family="Helvetica, Arial, sans-serif" x="880.7583451704546" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1634">Oct</tspan>
                                                    <title>Oct</title>
                                                </text>
                                                <text id="SvgjsText1636" font-family="Helvetica, Arial, sans-serif" x="978.6203835227274" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1637">Nov</tspan>
                                                    <title>Nov</title>
                                                </text>
                                                <text id="SvgjsText1639" font-family="Helvetica, Arial, sans-serif" x="1076.4824218750002" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1640">Dec</tspan>
                                                    <title>Dec</title>
                                                </text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1653" class="apexcharts-grid">
                                            <g id="SvgjsG1654" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1668" x1="0" y1="0" x2="1076.482421875" y2="0" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1669" x1="0" y1="53.587" x2="1076.482421875" y2="53.587" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1670" x1="0" y1="107.174" x2="1076.482421875" y2="107.174" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1671" x1="0" y1="160.76100000000002" x2="1076.482421875" y2="160.76100000000002" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1672" x1="0" y1="214.348" x2="1076.482421875" y2="214.348" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1655" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1656" x1="0" y1="215.348" x2="0" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1657" x1="97.86203835227273" y1="215.348" x2="97.86203835227273" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1658" x1="195.72407670454547" y1="215.348" x2="195.72407670454547" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1659" x1="293.5861150568182" y1="215.348" x2="293.5861150568182" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1660" x1="391.44815340909093" y1="215.348" x2="391.44815340909093" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1661" x1="489.3101917613637" y1="215.348" x2="489.3101917613637" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1662" x1="587.1722301136364" y1="215.348" x2="587.1722301136364" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1663" x1="685.0342684659091" y1="215.348" x2="685.0342684659091" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1664" x1="782.8963068181819" y1="215.348" x2="782.8963068181819" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1665" x1="880.7583451704546" y1="215.348" x2="880.7583451704546" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1666" x1="978.6203835227274" y1="215.348" x2="978.6203835227274" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1667" x1="1076.482421875" y1="215.348" x2="1076.482421875" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1674" x1="0" y1="214.348" x2="1076.482421875" y2="214.348" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1673" x1="0" y1="1" x2="0" y2="214.348" stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1552" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1553" class="apexcharts-series" seriesName="" data:longestSeries="true" rel="1" data:realIndex="2">
                                                <path id="SvgjsPath1556" d="M 0 214.348L 0 214.348C 34.25171342329545 214.348 63.61032492897727 101.81530000000001 97.86203835227272 101.81530000000001C 132.11375177556818 101.81530000000001 161.47236328124998 139.32620000000003 195.72407670454544 139.32620000000003C 229.9757901278409 139.32620000000003 259.3344016335227 26.793499999999995 293.5861150568182 26.793499999999995C 327.8378284801136 26.793499999999995 357.19643998579545 123.2501 391.4481534090909 123.2501C 425.6998668323863 123.2501 455.0584783380682 49.300039999999996 489.3101917613636 49.300039999999996C 523.561905184659 49.300039999999996 552.920516690341 117.8914 587.1722301136364 117.8914C 621.4239435369318 117.8914 650.7825550426137 16.076099999999997 685.0342684659091 16.076099999999997C 719.2859818892045 16.076099999999997 748.6445933948863 85.73920000000001 782.8963068181818 85.73920000000001C 817.1480202414772 85.73920000000001 846.5066317471591 58.945700000000016 880.7583451704545 58.945700000000016C 915.0100585937499 58.945700000000016 944.3686700994318 16.076099999999997 978.6203835227273 16.076099999999997C 1012.8720969460227 16.076099999999997 1042.2307084517045 75.02180000000001 1076.482421875 75.02180000000001C 1076.482421875 75.02180000000001 1076.482421875 75.02180000000001 1076.482421875 214.348M 1076.482421875 75.02180000000001z" fill="rgba(119, 119, 142, 0.05)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskdg5ptxlg)" filter="url(#SvgjsFilter1557)" pathTo="M 0 214.348L 0 214.348C 34.25171342329545 214.348 63.61032492897727 101.81530000000001 97.86203835227272 101.81530000000001C 132.11375177556818 101.81530000000001 161.47236328124998 139.32620000000003 195.72407670454544 139.32620000000003C 229.9757901278409 139.32620000000003 259.3344016335227 26.793499999999995 293.5861150568182 26.793499999999995C 327.8378284801136 26.793499999999995 357.19643998579545 123.2501 391.4481534090909 123.2501C 425.6998668323863 123.2501 455.0584783380682 49.300039999999996 489.3101917613636 49.300039999999996C 523.561905184659 49.300039999999996 552.920516690341 117.8914 587.1722301136364 117.8914C 621.4239435369318 117.8914 650.7825550426137 16.076099999999997 685.0342684659091 16.076099999999997C 719.2859818892045 16.076099999999997 748.6445933948863 85.73920000000001 782.8963068181818 85.73920000000001C 817.1480202414772 85.73920000000001 846.5066317471591 58.945700000000016 880.7583451704545 58.945700000000016C 915.0100585937499 58.945700000000016 944.3686700994318 16.076099999999997 978.6203835227273 16.076099999999997C 1012.8720969460227 16.076099999999997 1042.2307084517045 75.02180000000001 1076.482421875 75.02180000000001C 1076.482421875 75.02180000000001 1076.482421875 75.02180000000001 1076.482421875 214.348M 1076.482421875 75.02180000000001z" pathFrom="M -1 214.348L -1 214.348L 97.86203835227272 214.348L 195.72407670454544 214.348L 293.5861150568182 214.348L 391.4481534090909 214.348L 489.3101917613636 214.348L 587.1722301136364 214.348L 685.0342684659091 214.348L 782.8963068181818 214.348L 880.7583451704545 214.348L 978.6203835227273 214.348L 1076.482421875 214.348"></path>
                                                <path id="SvgjsPath1566" d="M 0 214.348C 34.25171342329545 214.348 63.61032492897727 101.81530000000001 97.86203835227272 101.81530000000001C 132.11375177556818 101.81530000000001 161.47236328124998 139.32620000000003 195.72407670454544 139.32620000000003C 229.9757901278409 139.32620000000003 259.3344016335227 26.793499999999995 293.5861150568182 26.793499999999995C 327.8378284801136 26.793499999999995 357.19643998579545 123.2501 391.4481534090909 123.2501C 425.6998668323863 123.2501 455.0584783380682 49.300039999999996 489.3101917613636 49.300039999999996C 523.561905184659 49.300039999999996 552.920516690341 117.8914 587.1722301136364 117.8914C 621.4239435369318 117.8914 650.7825550426137 16.076099999999997 685.0342684659091 16.076099999999997C 719.2859818892045 16.076099999999997 748.6445933948863 85.73920000000001 782.8963068181818 85.73920000000001C 817.1480202414772 85.73920000000001 846.5066317471591 58.945700000000016 880.7583451704545 58.945700000000016C 915.0100585937499 58.945700000000016 944.3686700994318 16.076099999999997 978.6203835227273 16.076099999999997C 1012.8720969460227 16.076099999999997 1042.2307084517045 75.02180000000001 1076.482421875 75.02180000000001" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskdg5ptxlg)" filter="url(#SvgjsFilter1567)" pathTo="M 0 214.348C 34.25171342329545 214.348 63.61032492897727 101.81530000000001 97.86203835227272 101.81530000000001C 132.11375177556818 101.81530000000001 161.47236328124998 139.32620000000003 195.72407670454544 139.32620000000003C 229.9757901278409 139.32620000000003 259.3344016335227 26.793499999999995 293.5861150568182 26.793499999999995C 327.8378284801136 26.793499999999995 357.19643998579545 123.2501 391.4481534090909 123.2501C 425.6998668323863 123.2501 455.0584783380682 49.300039999999996 489.3101917613636 49.300039999999996C 523.561905184659 49.300039999999996 552.920516690341 117.8914 587.1722301136364 117.8914C 621.4239435369318 117.8914 650.7825550426137 16.076099999999997 685.0342684659091 16.076099999999997C 719.2859818892045 16.076099999999997 748.6445933948863 85.73920000000001 782.8963068181818 85.73920000000001C 817.1480202414772 85.73920000000001 846.5066317471591 58.945700000000016 880.7583451704545 58.945700000000016C 915.0100585937499 58.945700000000016 944.3686700994318 16.076099999999997 978.6203835227273 16.076099999999997C 1012.8720969460227 16.076099999999997 1042.2307084517045 75.02180000000001 1076.482421875 75.02180000000001" pathFrom="M -1 214.348L -1 214.348L 97.86203835227272 214.348L 195.72407670454544 214.348L 293.5861150568182 214.348L 391.4481534090909 214.348L 489.3101917613636 214.348L 587.1722301136364 214.348L 685.0342684659091 214.348L 782.8963068181818 214.348L 880.7583451704545 214.348L 978.6203835227273 214.348L 1076.482421875 214.348"></path>
                                                <g id="SvgjsG1554" class="apexcharts-series-markers-wrap" data:realIndex="2">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1680" r="0" cx="0" cy="0" class="apexcharts-marker w10bh906cj" stroke="#ffffff" fill="#6259ca" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1576" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1577" class="apexcharts-series" seriesName="TotalxOrders" data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1580" d="M 0 214.348C 34.25171342329545 214.348 63.61032492897727 166.11970000000002 97.86203835227272 166.11970000000002C 132.11375177556818 166.11970000000002 161.47236328124998 182.19580000000002 195.72407670454544 182.19580000000002C 229.9757901278409 182.19580000000002 259.3344016335227 133.9675 293.5861150568182 133.9675C 327.8378284801136 133.9675 357.19643998579545 198.27190000000002 391.4481534090909 198.27190000000002C 425.6998668323863 198.27190000000002 455.0584783380682 113.60444000000001 489.3101917613636 113.60444000000001C 523.561905184659 113.60444000000001 552.920516690341 171.47840000000002 587.1722301136364 171.47840000000002C 621.4239435369318 171.47840000000002 650.7825550426137 91.09790000000001 685.0342684659091 91.09790000000001C 719.2859818892045 91.09790000000001 748.6445933948863 182.19580000000002 782.8963068181818 182.19580000000002C 817.1480202414772 182.19580000000002 846.5066317471591 101.81530000000001 880.7583451704545 101.81530000000001C 915.0100585937499 101.81530000000001 944.3686700994318 144.68490000000003 978.6203835227273 144.68490000000003C 1012.8720969460227 144.68490000000003 1042.2307084517045 96.45660000000001 1076.482421875 96.45660000000001" fill="none" fill-opacity="1" stroke="rgba(98,89,202,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskdg5ptxlg)" filter="url(#SvgjsFilter1581)" pathTo="M 0 214.348C 34.25171342329545 214.348 63.61032492897727 166.11970000000002 97.86203835227272 166.11970000000002C 132.11375177556818 166.11970000000002 161.47236328124998 182.19580000000002 195.72407670454544 182.19580000000002C 229.9757901278409 182.19580000000002 259.3344016335227 133.9675 293.5861150568182 133.9675C 327.8378284801136 133.9675 357.19643998579545 198.27190000000002 391.4481534090909 198.27190000000002C 425.6998668323863 198.27190000000002 455.0584783380682 113.60444000000001 489.3101917613636 113.60444000000001C 523.561905184659 113.60444000000001 552.920516690341 171.47840000000002 587.1722301136364 171.47840000000002C 621.4239435369318 171.47840000000002 650.7825550426137 91.09790000000001 685.0342684659091 91.09790000000001C 719.2859818892045 91.09790000000001 748.6445933948863 182.19580000000002 782.8963068181818 182.19580000000002C 817.1480202414772 182.19580000000002 846.5066317471591 101.81530000000001 880.7583451704545 101.81530000000001C 915.0100585937499 101.81530000000001 944.3686700994318 144.68490000000003 978.6203835227273 144.68490000000003C 1012.8720969460227 144.68490000000003 1042.2307084517045 96.45660000000001 1076.482421875 96.45660000000001" pathFrom="M -1 214.348L -1 214.348L 97.86203835227272 214.348L 195.72407670454544 214.348L 293.5861150568182 214.348L 391.4481534090909 214.348L 489.3101917613636 214.348L 587.1722301136364 214.348L 685.0342684659091 214.348L 782.8963068181818 214.348L 880.7583451704545 214.348L 978.6203835227273 214.348L 1076.482421875 214.348"></path>
                                                <g id="SvgjsG1578" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1681" r="0" cx="0" cy="0" class="apexcharts-marker wzyvvv9fx" stroke="#ffffff" fill="#f99433" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1590" class="apexcharts-series" seriesName="TotalxSales" data:longestSeries="true" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1593" d="M 0 214.348C 34.25171342329545 214.348 63.61032492897727 150.04360000000003 97.86203835227272 150.04360000000003C 132.11375177556818 150.04360000000003 161.47236328124998 192.91320000000002 195.72407670454544 192.91320000000002C 229.9757901278409 192.91320000000002 259.3344016335227 75.02180000000001 293.5861150568182 75.02180000000001C 327.8378284801136 75.02180000000001 357.19643998579545 133.9675 391.4481534090909 133.9675C 425.6998668323863 133.9675 455.0584783380682 75.02180000000001 489.3101917613636 75.02180000000001C 523.561905184659 75.02180000000001 552.920516690341 133.9675 587.1722301136364 133.9675C 621.4239435369318 133.9675 650.7825550426137 64.30440000000002 685.0342684659091 64.30440000000002C 719.2859818892045 64.30440000000002 748.6445933948863 145.75664 782.8963068181818 145.75664C 817.1480202414772 145.75664 846.5066317471591 75.02180000000001 880.7583451704545 75.02180000000001C 915.0100585937499 75.02180000000001 944.3686700994318 123.2501 978.6203835227273 123.2501C 1012.8720969460227 123.2501 1042.2307084517045 85.73920000000001 1076.482421875 85.73920000000001" fill="none" fill-opacity="1" stroke="rgba(249,148,51,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="4" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskdg5ptxlg)" filter="url(#SvgjsFilter1594)" pathTo="M 0 214.348C 34.25171342329545 214.348 63.61032492897727 150.04360000000003 97.86203835227272 150.04360000000003C 132.11375177556818 150.04360000000003 161.47236328124998 192.91320000000002 195.72407670454544 192.91320000000002C 229.9757901278409 192.91320000000002 259.3344016335227 75.02180000000001 293.5861150568182 75.02180000000001C 327.8378284801136 75.02180000000001 357.19643998579545 133.9675 391.4481534090909 133.9675C 425.6998668323863 133.9675 455.0584783380682 75.02180000000001 489.3101917613636 75.02180000000001C 523.561905184659 75.02180000000001 552.920516690341 133.9675 587.1722301136364 133.9675C 621.4239435369318 133.9675 650.7825550426137 64.30440000000002 685.0342684659091 64.30440000000002C 719.2859818892045 64.30440000000002 748.6445933948863 145.75664 782.8963068181818 145.75664C 817.1480202414772 145.75664 846.5066317471591 75.02180000000001 880.7583451704545 75.02180000000001C 915.0100585937499 75.02180000000001 944.3686700994318 123.2501 978.6203835227273 123.2501C 1012.8720969460227 123.2501 1042.2307084517045 85.73920000000001 1076.482421875 85.73920000000001" pathFrom="M -1 214.348L -1 214.348L 97.86203835227272 214.348L 195.72407670454544 214.348L 293.5861150568182 214.348L 391.4481534090909 214.348L 489.3101917613636 214.348L 587.1722301136364 214.348L 685.0342684659091 214.348L 782.8963068181818 214.348L 880.7583451704545 214.348L 978.6203835227273 214.348L 1076.482421875 214.348"></path>
                                                <g id="SvgjsG1591" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1682" r="0" cx="0" cy="0" class="apexcharts-marker wuf9wn1fyk" stroke="#ffffff" fill="rgba(119, 119, 142, 0.05)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1555" class="apexcharts-datalabels" data:realIndex="2"></g>
                                            <g id="SvgjsG1579" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1592" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1675" x1="0" y1="0" x2="1076.482421875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1676" x1="0" y1="0" x2="1076.482421875" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1677" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1678" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1679" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1683" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1684" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1548" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1641" class="apexcharts-yaxis" rel="0" transform="translate(17.34765625, 0)">
                                        <g id="SvgjsG1642" class="apexcharts-yaxis-texts-g">
                                            <text id="SvgjsText1643" font-family="Helvetica, Arial, sans-serif" x="20" y="49.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1644">200</tspan>
                                            </text>
                                            <text id="SvgjsText1645" font-family="Helvetica, Arial, sans-serif" x="20" y="102.98700000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1646">150</tspan>
                                            </text>
                                            <text id="SvgjsText1647" font-family="Helvetica, Arial, sans-serif" x="20" y="156.574" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1648">100</tspan>
                                            </text>
                                            <text id="SvgjsText1649" font-family="Helvetica, Arial, sans-serif" x="20" y="210.16100000000003" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1650">50</tspan>
                                            </text>
                                            <text id="SvgjsText1651" font-family="Helvetica, Arial, sans-serif" x="20" y="263.748" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1652">0</tspan>
                                            </text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1545" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                        <span class="apexcharts-tooltip-marker" style="background-color: rgb(98, 89, 202);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                        <span class="apexcharts-tooltip-marker" style="background-color: rgb(249, 148, 51);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                        <span class="apexcharts-tooltip-marker" style="background-color: rgba(119, 119, 142, 0.05);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                    <div class="apexcharts-zoomin-icon" title="Zoom In">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-zoomout-icon" title="Zoom Out">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-pan-icon" title="Panning">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                            <defs>
                                                <path d="M0 0h24v24H0z" id="a"></path>
                                            </defs>
                                            <clipPath id="b">
                                                <use overflow="visible" xlink:href="#a"></use>
                                            </clipPath>
                                            <path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-reset-icon" title="Reset Zoom">
                                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-menu-icon" title="Menu">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-menu">
                                        <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                        <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                        <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1175px; height: 362px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL END -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                <div class="card custom-card">
                    <div class="card-header">
                        <h3 class="card-title">Recent Orders</h3>
                    </div>
                    <div class="card-body pt-0">
                        <div id="recentorders" class="apex-charts ht-150" style="min-height: 231.9px;">
                            <div id="apexcharts9pppic1" class="apexcharts-canvas apexcharts9pppic1 apexcharts-theme-light" style="width: 325px; height: 231.9px;">
                                <svg id="SvgjsSvg1685" width="325" height="231.9" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 10)" style="background: transparent;">
                                    <g id="SvgjsG1687" class="apexcharts-inner apexcharts-graphical" transform="translate(23, 0)">
                                        <defs id="SvgjsDefs1686">
                                            <clipPath id="gridRectMask9pppic1">
                                                <rect id="SvgjsRect1689" width="287" height="305" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask9pppic1">
                                                <rect id="SvgjsRect1690" width="285" height="307" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1695" x1="0" y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop1696" stop-opacity="1" stop-color="rgba(98,89,202,1)" offset="0"></stop>
                                                <stop id="SvgjsStop1697" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="1"></stop>
                                                <stop id="SvgjsStop1698" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1706" x1="0" y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop1707" stop-opacity="1" stop-color="rgba(98,89,202,1)" offset="0"></stop>
                                                <stop id="SvgjsStop1708" stop-opacity="1" stop-color="rgba(255,93,158,1)" offset="1"></stop>
                                                <stop id="SvgjsStop1709" stop-opacity="1" stop-color="rgba(255,93,158,1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG1691" class="apexcharts-radialbar">
                                            <g id="SvgjsG1692">
                                                <g id="SvgjsG1693" class="apexcharts-tracks">
                                                    <g id="SvgjsG1694" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                        <path id="apexcharts-radialbarTrack-0" d="M 80.80552813702589 200.1944718629741 A 84.42073170731709 84.42073170731709 0 1 1 200.1944718629741 200.1944718629741" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="22.214634146341467" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 80.80552813702589 200.1944718629741 A 84.42073170731709 84.42073170731709 0 1 1 200.1944718629741 200.1944718629741"></path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1700">
                                                    <g id="SvgjsG1705" class="apexcharts-series apexcharts-radial-series" seriesName="" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1710" d="M 80.80552813702589 200.1944718629741 A 84.42073170731709 84.42073170731709 0 1 1 224.9078740209771 139.02665507851103" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1706)" stroke-opacity="1" stroke-linecap="butt" stroke-width="27.768292682926834" stroke-dasharray="4" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="224" data:value="83" index="0" j="0" data:pathOrig="M 80.80552813702589 200.1944718629741 A 84.42073170731709 84.42073170731709 0 1 1 224.9078740209771 139.02665507851103"></path>
                                                    </g>
                                                    <circle id="SvgjsCircle1701" r="68.31341463414635" cx="140.5" cy="140.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                    <g id="SvgjsG1702" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                        <text id="SvgjsText1703" font-family="Helvetica, Arial, sans-serif" x="140.5" y="170.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#ff5d9e" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text>
                                                        <text id="SvgjsText1704" font-family="Helvetica, Arial, sans-serif" x="140.5" y="146.5" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">
                                                            83%
                                                        </text>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1711" x1="0" y1="0" x2="281" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1712" x1="0" y1="0" x2="281" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1688" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="row sales-product-infomation pb-0 mb-0 mx-auto wd-100p mt-6">
                            <div class="col-md-6 col justify-content-center text-center">
                                <p class="mb-0 d-flex justify-content-center"><span class="legend bg-primary"></span>Delivered</p>
                                <h3 class="mb-1 fw-bold">5238</h3>
                                <div class="d-flex justify-content-center">
                                    <p class="text-muted mb-0">Last 6 months</p>
                                </div>
                            </div>
                            <div class="col-md-6 col text-center float-end">
                                <p class="mb-0 d-flex justify-content-center"><span class="legend bg-background2"></span>Cancelled</p>
                                <h3 class="mb-1 fw-bold">3467</h3>
                                <div class="d-flex justify-content-center">
                                    <p class="text-muted mb-0">Last 6 months</p>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 376px; height: 362px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL END -->
        </div>
        <!-- ROW-1 END -->
        <!-- ROW-3 -->
        <div class="row">
            <div class="col-xl-4 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Timeline</h3>
                        </div>
                    </div>
                    <div class="card-body pb-0 pt-4">
                        <div class="activity1">
                            <div class="activity-blog">
                                <div class="activity-img brround bg-primary-transparent text-primary"><i class="fa fa-user-plus fs-20"></i></div>
                                <div class="activity-details d-flex">
                                    <div>
                                        <b><span class="text-dark"> Mr John </span> </b> Started following you <span class="d-flex text-muted fs-11">01 June 2020</span>
                                    </div>
                                    <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-primary text-white">1m</span></div>
                                </div>
                            </div>
                            <div class="activity-blog">
                                <div class="activity-img brround bg-secondary-transparent text-secondary"><i class="fa fa-comment fs-20"></i></div>
                                <div class="activity-details d-flex">
                                    <div>
                                        <b><span class="text-dark"> Lily </span> </b> 1 Commented applied <span class="d-flex text-muted fs-11">01 July 2020</span>
                                    </div>
                                    <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-danger text-white">3m</span></div>
                                </div>
                            </div>
                            <div class="activity-blog">
                                <div class="activity-img brround bg-success-transparent text-success"><i class="fa fa-thumbs-up fs-20"></i></div>
                                <div class="activity-details d-flex">
                                    <div>
                                        <b><span class="text-dark"> Kevin </span> </b> liked your site <span class="d-flex text-muted fs-11">05 July 2020</span>
                                    </div>
                                    <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-warning text-white">5m</span></div>
                                </div>
                            </div>
                            <div class="activity-blog">
                                <div class="activity-img brround bg-info-transparent text-info"><i class="fa fa-envelope fs-20"></i></div>
                                <div class="activity-details d-flex">
                                    <div>
                                        <b><span class="text-dark"> Andrena </span> </b> posted a new article <span class="d-flex text-muted fs-11">09 October 2020</span>
                                    </div>
                                    <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-info text-white">5m</span></div>
                                </div>
                            </div>
                            <div class="activity-blog">
                                <div class="activity-img brround bg-danger-transparent text-danger"><i class="fa fa-shopping-bag fs-20"></i></div>
                                <div class="activity-details d-flex">
                                    <div>
                                        <b><span class="text-dark"> Sonia </span> </b> Delivery in progress <span class="d-flex text-muted fs-11">12 October 2020</span>
                                    </div>
                                    <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-warning text-white">5m</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title fw-semibold">Browser Usage</h4>
                    </div>
                    <div class="card-body pt-2 pb-2">
                        <div class="d-md-flex align-items-center browser-stats">
                            <div class="d-flex">
                                <i class="fa fa-chrome bg-secondary-gradient text-white me-2"></i>
                                <p class="fs-16 my-auto mb-0">Chrome</p>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="my-auto fs-16">35,502</span> <span class="text-success fs-15"><i class="fe fe-arrow-up"></i>12.75%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex align-items-center browser-stats">
                            <div class="d-flex">
                                <i class="fa fa-opera text-white bg-danger-gradient me-2"></i>
                                <p class="fs-16 my-auto mb-0">Opera</p>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="my-auto fs-16">12,563</span> <span class="text-danger fs-15"><i class="fe fe-arrow-down"></i>15.12%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex align-items-center browser-stats">
                            <div class="d-flex">
                                <i class="fa fa-firefox text-white bg-purple-gradient me-2"></i>
                                <p class="fs-16 my-auto mb-0">IE</p>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="my-auto fs-16">25,364</span> <span class="text-success fs-15"><i class="fe fe-arrow-up"></i>24.37%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex align-items-center browser-stats">
                            <div class="d-flex">
                                <i class="fa fa-edge text-white bg-info-gradient me-2"></i>
                                <p class="fs-16 my-auto mb-0">Firefox</p>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="my-auto fs-16">14,635</span> <span class="text-success fs-15"><i class="fe fe-arrow-up"></i>15,63%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex align-items-center browser-stats">
                            <div class="d-flex">
                                <i class="fa fa-android text-white bg-success-gradient me-2"></i>
                                <p class="fs-16 my-auto mb-0">Android</p>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="my-auto fs-16">15,453</span> <span class="text-danger fs-15"><i class="fe fe-arrow-down"></i>23.70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title fw-semibold">Daily Activity</h4>
                    </div>
                    <div class="card-body pb-0">
                        <ul class="task-list">
                            <li>
                                <i class="task-icon bg-primary"></i>
                                <h6>Task Finished<span class="text-muted fs-11 ms-2">29 Oct 2020</span></h6>
                                <p class="text-muted fs-12">Adam Berry finished task on<a href="#" class="fw-semibold"> Project Management</a></p>
                            </li>
                            <li>
                                <i class="task-icon bg-secondary"></i>
                                <h6>New Comment<span class="text-muted fs-11 ms-2">25 Oct 2020</span></h6>
                                <p class="text-muted fs-12">Victoria commented on Project <a href="#" class="fw-semibold"> AngularJS Template</a></p>
                            </li>
                            <li>
                                <i class="task-icon bg-primary"></i>
                                <h6>New Comment<span class="text-muted fs-11 ms-2">25 Oct 2020</span></h6>
                                <p class="text-muted fs-12">Victoria commented on Project <a href="#" class="fw-semibold"> AngularJS Template</a></p>
                            </li>
                            <li>
                                <i class="task-icon bg-secondary"></i>
                                <h6>Task Overdue<span class="text-muted fs-11 ms-2">14 Oct 2020</span></h6>
                                <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="#" class="fw-semibold"> Integrated management</a></p>
                            </li>
                            <li>
                                <i class="task-icon bg-primary"></i>
                                <h6>Task Overdue<span class="text-muted fs-11 ms-2">29 Oct 2020</span></h6>
                                <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="#" class="fw-semibold"> Integrated management</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <!-- ROW-3 END -->
        <!-- ROW-5 -->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Product Sales</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="data-table" class="table table-bordered text-nowrap mb-0 dataTable no-footer" role="grid" aria-describedby="data-table_info">
                                            <thead class="border-top">
                                                <tr role="row">
                                                    <th class="bg-transparent border-bottom-0 w-5 sorting sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.no: activate to sort column descending" style="width: 34.2344px;">
                                                        S.no
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 447.578px;">
                                                        Name
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 187.047px;">
                                                        Date
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 194.016px;">
                                                        Amount
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 176.828px;">
                                                        Status
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 224.297px;">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-bottom odd">
                                                    <td class="text-muted fs-15 fw-semibold text-center sorting_1">01.</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md brround mt-1" style="background-image: url(admin_assets/assets/images/users/11.jpg);"></span>
                                                            <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Jake poole</h6>
                                                                <span class="fs-12 text-muted">jacke123@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">20-11-2020</td>
                                                    <td class="text-muted fs-15 fw-semibold">$5.321.2</td>
                                                    <td class="text-success fs-15 fw-semibold">Success</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i>
                                                                <svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom even">
                                                    <td class="text-muted fs-15 fw-semibold text-center sorting_1">02.</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md brround mt-1" style="background-image: url(admin_assets/assets/images/users/1.jpg);"></span>
                                                            <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Virginia Gray</h6>
                                                                <span class="fs-12 text-muted">virginia456@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">20-11-2020</td>
                                                    <td class="text-muted fs-15 fw-semibold">$53,3654</td>
                                                    <td class="text-success fs-15 fw-semibold">Success</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i>
                                                                <svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom odd">
                                                    <td class="text-muted fs-15 fw-semibold text-center sorting_1">03.</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md brround mt-1" style="background-image: url(admin_assets/assets/images/users/12.jpg);"></span>
                                                            <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Jacob Thomson</h6>
                                                                <span class="fs-12 text-muted">jacobthomson@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">20-11-2020</td>
                                                    <td class="text-muted fs-15 fw-semibold">$1,56,3654</td>
                                                    <td class="text-primary fs-15 fw-semibold">Pending</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i>
                                                                <svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom even">
                                                    <td class="text-muted fs-15 fw-semibold text-center sorting_1">04.</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md brround mt-1" style="background-image: url(admin_assets/assets/images/users/13.jpg);"></span>
                                                            <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Trevor Thomson</h6>
                                                                <span class="fs-12 text-muted">trevor@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">19-11-2020</td>
                                                    <td class="text-muted fs-15 fw-semibold">$12.3</td>
                                                    <td class="text-success fs-15 fw-semibold">Success</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i>
                                                                <svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom odd">
                                                    <td class="text-muted fs-15 fw-semibold text-center sorting_1">05.</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md brround mt-1" style="background-image: url(admin_assets/assets/images/users/2.jpg);"></span>
                                                            <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Kylie north</h6>
                                                                <span class="fs-12 text-muted">kylie@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">19-11-2020</td>
                                                    <td class="text-muted fs-15 fw-semibold">$5.312.2</td>
                                                    <td class="text-primary fs-15 fw-semibold">Pending</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i>
                                                                <svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom even">
                                                    <td class="text-muted fs-15 fw-semibold text-center sorting_1">06.</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md brround mt-1" style="background-image: url(admin_assets/assets/images/users/14.jpg);"></span>
                                                            <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Jan Hodges</h6>
                                                                <span class="fs-12 text-muted">jan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">19-11-2020</td>
                                                    <td class="text-muted fs-15 fw-semibold">$5.312.2</td>
                                                    <td class="text-danger fs-15 fw-semibold">Cancel</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i>
                                                                <svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom odd">
                                                    <td class="text-muted fs-15 fw-semibold text-center sorting_1">07.</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md brround mt-1" style="background-image: url(admin_assets/assets/images/users/4.jpg);"></span>
                                                            <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Trevor Thomson</h6>
                                                                <span class="fs-12 text-muted">trevor@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">19-11-2020</td>
                                                    <td class="text-muted fs-15 fw-semibold">$2,24,1421</td>
                                                    <td class="text-success fs-15 fw-semibold">Success</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i>
                                                                <svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="text-muted fs-15 fw-semibold text-center sorting_1">08.</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md brround mt-1" style="background-image: url(admin_assets/assets/images/users/5.jpg);"></span>
                                                            <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Emily Lewis</h6>
                                                                <span class="fs-12 text-muted">emily@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">19-11-2020</td>
                                                    <td class="text-muted fs-15 fw-semibold">$9.321.2</td>
                                                    <td class="text-danger fs-15 fw-semibold">Cancel</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i>
                                                                <svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL END -->
        </div>
        <!-- ROW-5 END -->
    </div>
</div>
<!-- app-content END -->
@endsection