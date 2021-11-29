<!DOCTYPE html>
<html>
<head>
   <!-- META DATA --> 
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Zanex – Bootstrap  Admin &amp; Dashboard Template">
   <meta name="author" content="Spruko Technologies Private Limited">
   <meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">
   <!-- FAVICON --> 
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin_assets/assets/images/brand/favicon.ico')}}">
   <!-- TITLE --> 
   <title>Zanex – Bootstrap Admin &amp; Dashboard Template</title>
   <!-- BOOTSTRAP CSS --> 
   <link href="{{ asset('admin_assets/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <!-- STYLE CSS --> 
   <link href="{{ asset('admin_assets/assets/css/style.css')}}" rel="stylesheet">
   <link href="{{ asset('admin_assets/assets/css/dark-style.css')}}" rel="stylesheet">
   <link href="{{ asset('admin_assets/assets/css/skin-modes.css')}}" rel="stylesheet">
   <!-- SIDE-MENU CSS --> 
   <link href="{{ asset('admin_assets/assets/css/sidemenu.css')}}" rel="stylesheet" id="sidemenu-theme">
   <!--C3 CHARTS CSS --> 
   <link href="{{ asset('admin_assets/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet">
   <!-- P-scroll bar css--> 
   <link href="{{ asset('admin_assets/assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet">
   <!--- FONT-ICONS CSS --> 
   <link href="{{ asset('admin_assets/assets/css/icons.css')}}" rel="stylesheet">
   <!-- SIDEBAR CSS --> 
   <link href="{{ asset('admin_assets/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
   <!-- SELECT2 CSS --> 
   <link href="{{ asset('admin_assets/assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
   <!-- INTERNAL Data table css --> 
   <link href="{{ asset('admin_assets/assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet">
   <link href="{{ asset('admin_assets/assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet">
   <!-- COLOR SKIN CSS --> 
   <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('admin_assets/assets/colors/color1.css')}}">
   <!-- INTERNAL Switcher css --> 
   <link href="{{ asset('admin_assets/assets/switcher/css/switcher.css')}}" rel="stylesheet">
   <link href="{{ asset('admin_assets/assets/switcher/demo.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <meta http-equiv="imagetoolbar" content="no">
  
   <style type="text/css">/* Chart.js */
      @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
   </style>
   <style type="text/css">.apexcharts-canvas {
      position: relative;
      user-select: none;
      /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
      }
      /* scrollbar is not visible by default for legend, hence forcing the visibility */
      .apexcharts-canvas ::-webkit-scrollbar {
      -webkit-appearance: none;
      width: 6px;
      }
      .apexcharts-canvas ::-webkit-scrollbar-thumb {
      border-radius: 4px;
      background-color: rgba(0, 0, 0, .5);
      box-shadow: 0 0 1px rgba(255, 255, 255, .5);
      -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
      }
      .apexcharts-inner {
      position: relative;
      }
      .apexcharts-text tspan {
      font-family: inherit;
      }
      .legend-mouseover-inactive {
      transition: 0.15s ease all;
      opacity: 0.20;
      }
      .apexcharts-series-collapsed {
      opacity: 0;
      }
      .apexcharts-tooltip {
      border-radius: 5px;
      box-shadow: 2px 2px 6px -4px #999;
      cursor: default;
      font-size: 14px;
      left: 62px;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      top: 20px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      white-space: nowrap;
      z-index: 12;
      transition: 0.15s ease all;
      }
      .apexcharts-tooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
      }
      .apexcharts-tooltip.apexcharts-theme-light {
      border: 1px solid #e3e3e3;
      background: rgba(255, 255, 255, 0.96);
      }
      .apexcharts-tooltip.apexcharts-theme-dark {
      color: #fff;
      background: rgba(30, 30, 30, 0.8);
      }
      .apexcharts-tooltip * {
      font-family: inherit;
      }
      .apexcharts-tooltip-title {
      padding: 6px;
      font-size: 15px;
      margin-bottom: 4px;
      }
      .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
      background: #ECEFF1;
      border-bottom: 1px solid #ddd;
      }
      .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
      background: rgba(0, 0, 0, 0.7);
      border-bottom: 1px solid #333;
      }
      .apexcharts-tooltip-text-value,
      .apexcharts-tooltip-text-z-value {
      display: inline-block;
      font-weight: 600;
      margin-left: 5px;
      }
      .apexcharts-tooltip-text-z-label:empty,
      .apexcharts-tooltip-text-z-value:empty {
      display: none;
      }
      .apexcharts-tooltip-text-value,
      .apexcharts-tooltip-text-z-value {
      font-weight: 600;
      }
      .apexcharts-tooltip-marker {
      width: 12px;
      height: 12px;
      position: relative;
      top: 0px;
      margin-right: 10px;
      border-radius: 50%;
      }
      .apexcharts-tooltip-series-group {
      padding: 0 10px;
      display: none;
      text-align: left;
      justify-content: left;
      align-items: center;
      }
      .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
      opacity: 1;
      }
      .apexcharts-tooltip-series-group.apexcharts-active,
      .apexcharts-tooltip-series-group:last-child {
      padding-bottom: 4px;
      }
      .apexcharts-tooltip-series-group-hidden {
      opacity: 0;
      height: 0;
      line-height: 0;
      padding: 0 !important;
      }
      .apexcharts-tooltip-y-group {
      padding: 6px 0 5px;
      }
      .apexcharts-tooltip-box, .apexcharts-custom-tooltip {
      padding: 4px 8px;
      }
      .apexcharts-tooltip-boxPlot {
      display: flex;
      flex-direction: column-reverse;
      }
      .apexcharts-tooltip-box>div {
      margin: 4px 0;
      }
      .apexcharts-tooltip-box span.value {
      font-weight: bold;
      }
      .apexcharts-tooltip-rangebar {
      padding: 5px 8px;
      }
      .apexcharts-tooltip-rangebar .category {
      font-weight: 600;
      color: #777;
      }
      .apexcharts-tooltip-rangebar .series-name {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      }
      .apexcharts-xaxistooltip {
      opacity: 0;
      padding: 9px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #ECEFF1;
      border: 1px solid #90A4AE;
      transition: 0.15s ease all;
      }
      .apexcharts-xaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
      }
      .apexcharts-xaxistooltip:after,
      .apexcharts-xaxistooltip:before {
      left: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
      }
      .apexcharts-xaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-left: -6px;
      }
      .apexcharts-xaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-left: -7px;
      }
      .apexcharts-xaxistooltip-bottom:after,
      .apexcharts-xaxistooltip-bottom:before {
      bottom: 100%;
      }
      .apexcharts-xaxistooltip-top:after,
      .apexcharts-xaxistooltip-top:before {
      top: 100%;
      }
      .apexcharts-xaxistooltip-bottom:after {
      border-bottom-color: #ECEFF1;
      }
      .apexcharts-xaxistooltip-bottom:before {
      border-bottom-color: #90A4AE;
      }
      .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
      border-bottom-color: rgba(0, 0, 0, 0.5);
      }
      .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
      border-bottom-color: rgba(0, 0, 0, 0.5);
      }
      .apexcharts-xaxistooltip-top:after {
      border-top-color: #ECEFF1
      }
      .apexcharts-xaxistooltip-top:before {
      border-top-color: #90A4AE;
      }
      .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
      border-top-color: rgba(0, 0, 0, 0.5);
      }
      .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
      border-top-color: rgba(0, 0, 0, 0.5);
      }
      .apexcharts-xaxistooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
      }
      .apexcharts-yaxistooltip {
      opacity: 0;
      padding: 4px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #ECEFF1;
      border: 1px solid #90A4AE;
      }
      .apexcharts-yaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
      }
      .apexcharts-yaxistooltip:after,
      .apexcharts-yaxistooltip:before {
      top: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
      }
      .apexcharts-yaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-top: -6px;
      }
      .apexcharts-yaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-top: -7px;
      }
      .apexcharts-yaxistooltip-left:after,
      .apexcharts-yaxistooltip-left:before {
      left: 100%;
      }
      .apexcharts-yaxistooltip-right:after,
      .apexcharts-yaxistooltip-right:before {
      right: 100%;
      }
      .apexcharts-yaxistooltip-left:after {
      border-left-color: #ECEFF1;
      }
      .apexcharts-yaxistooltip-left:before {
      border-left-color: #90A4AE;
      }
      .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
      border-left-color: rgba(0, 0, 0, 0.5);
      }
      .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
      border-left-color: rgba(0, 0, 0, 0.5);
      }
      .apexcharts-yaxistooltip-right:after {
      border-right-color: #ECEFF1;
      }
      .apexcharts-yaxistooltip-right:before {
      border-right-color: #90A4AE;
      }
      .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
      border-right-color: rgba(0, 0, 0, 0.5);
      }
      .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
      border-right-color: rgba(0, 0, 0, 0.5);
      }
      .apexcharts-yaxistooltip.apexcharts-active {
      opacity: 1;
      }
      .apexcharts-yaxistooltip-hidden {
      display: none;
      }
      .apexcharts-xcrosshairs,
      .apexcharts-ycrosshairs {
      pointer-events: none;
      opacity: 0;
      transition: 0.15s ease all;
      }
      .apexcharts-xcrosshairs.apexcharts-active,
      .apexcharts-ycrosshairs.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
      }
      .apexcharts-ycrosshairs-hidden {
      opacity: 0;
      }
      .apexcharts-selection-rect {
      cursor: move;
      }
      .svg_select_boundingRect, .svg_select_points_rot {
      pointer-events: none;
      opacity: 0;
      visibility: hidden;
      }
      .apexcharts-selection-rect + g .svg_select_boundingRect,
      .apexcharts-selection-rect + g .svg_select_points_rot {
      opacity: 0;
      visibility: hidden;
      }
      .apexcharts-selection-rect + g .svg_select_points_l,
      .apexcharts-selection-rect + g .svg_select_points_r {
      cursor: ew-resize;
      opacity: 1;
      visibility: visible;
      }
      .svg_select_points {
      fill: #efefef;
      stroke: #333;
      rx: 2;
      }
      .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
      cursor: crosshair
      }
      .apexcharts-svg.apexcharts-zoomable.hovering-pan {
      cursor: move
      }
      .apexcharts-zoom-icon,
      .apexcharts-zoomin-icon,
      .apexcharts-zoomout-icon,
      .apexcharts-reset-icon,
      .apexcharts-pan-icon,
      .apexcharts-selection-icon,
      .apexcharts-menu-icon,
      .apexcharts-toolbar-custom-icon {
      cursor: pointer;
      width: 20px;
      height: 20px;
      line-height: 24px;
      color: #6E8192;
      text-align: center;
      }
      .apexcharts-zoom-icon svg,
      .apexcharts-zoomin-icon svg,
      .apexcharts-zoomout-icon svg,
      .apexcharts-reset-icon svg,
      .apexcharts-menu-icon svg {
      fill: #6E8192;
      }
      .apexcharts-selection-icon svg {
      fill: #444;
      transform: scale(0.76)
      }
      .apexcharts-theme-dark .apexcharts-zoom-icon svg,
      .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
      .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
      .apexcharts-theme-dark .apexcharts-reset-icon svg,
      .apexcharts-theme-dark .apexcharts-pan-icon svg,
      .apexcharts-theme-dark .apexcharts-selection-icon svg,
      .apexcharts-theme-dark .apexcharts-menu-icon svg,
      .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
      fill: #f3f4f5;
      }
      .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
      .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
      .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
      fill: #008FFB;
      }
      .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
      .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
      .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
      .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
      .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
      .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
      fill: #333;
      }
      .apexcharts-selection-icon,
      .apexcharts-menu-icon {
      position: relative;
      }
      .apexcharts-reset-icon {
      margin-left: 5px;
      }
      .apexcharts-zoom-icon,
      .apexcharts-reset-icon,
      .apexcharts-menu-icon {
      transform: scale(0.85);
      }
      .apexcharts-zoomin-icon,
      .apexcharts-zoomout-icon {
      transform: scale(0.7)
      }
      .apexcharts-zoomout-icon {
      margin-right: 3px;
      }
      .apexcharts-pan-icon {
      transform: scale(0.62);
      position: relative;
      left: 1px;
      top: 0px;
      }
      .apexcharts-pan-icon svg {
      fill: #fff;
      stroke: #6E8192;
      stroke-width: 2;
      }
      .apexcharts-pan-icon.apexcharts-selected svg {
      stroke: #008FFB;
      }
      .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
      stroke: #333;
      }
      .apexcharts-toolbar {
      position: absolute;
      z-index: 11;
      max-width: 176px;
      text-align: right;
      border-radius: 3px;
      padding: 0px 6px 2px 6px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      }
      .apexcharts-menu {
      background: #fff;
      position: absolute;
      top: 100%;
      border: 1px solid #ddd;
      border-radius: 3px;
      padding: 3px;
      right: 10px;
      opacity: 0;
      min-width: 110px;
      transition: 0.15s ease all;
      pointer-events: none;
      }
      .apexcharts-menu.apexcharts-menu-open {
      opacity: 1;
      pointer-events: all;
      transition: 0.15s ease all;
      }
      .apexcharts-menu-item {
      padding: 6px 7px;
      font-size: 12px;
      cursor: pointer;
      }
      .apexcharts-theme-light .apexcharts-menu-item:hover {
      background: #eee;
      }
      .apexcharts-theme-dark .apexcharts-menu {
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
      }
      @media screen and (min-width: 768px) {
      .apexcharts-canvas:hover .apexcharts-toolbar {
      opacity: 1;
      }
      }
      .apexcharts-datalabel.apexcharts-element-hidden {
      opacity: 0;
      }
      .apexcharts-pie-label,
      .apexcharts-datalabels,
      .apexcharts-datalabel,
      .apexcharts-datalabel-label,
      .apexcharts-datalabel-value {
      cursor: default;
      pointer-events: none;
      }
      .apexcharts-pie-label-delay {
      opacity: 0;
      animation-name: opaque;
      animation-duration: 0.3s;
      animation-fill-mode: forwards;
      animation-timing-function: ease;
      }
      .apexcharts-canvas .apexcharts-element-hidden {
      opacity: 0;
      }
      .apexcharts-hide .apexcharts-series-points {
      opacity: 0;
      }
      .apexcharts-gridline,
      .apexcharts-annotation-rect,
      .apexcharts-tooltip .apexcharts-marker,
      .apexcharts-area-series .apexcharts-area,
      .apexcharts-line,
      .apexcharts-zoom-rect,
      .apexcharts-toolbar svg,
      .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
      .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
      .apexcharts-radar-series path,
      .apexcharts-radar-series polygon {
      pointer-events: none;
      }
      /* markers */
      .apexcharts-marker {
      transition: 0.15s ease all;
      }
      @keyframes opaque {
      0% {
      opacity: 0;
      }
      100% {
      opacity: 1;
      }
      }
      /* Resize generated styles */
      @keyframes resizeanim {
      from {
      opacity: 0;
      }
      to {
      opacity: 0;
      }
      }
      .resize-triggers {
      animation: 1ms resizeanim;
      visibility: hidden;
      opacity: 0;
      }
      .resize-triggers,
      .resize-triggers>div,
      .contract-trigger:before {
      content: " ";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      overflow: hidden;
      }
      .resize-triggers>div {
      background: #eee;
      overflow: auto;
      }
      .contract-trigger:before {
      width: 200%;
      height: 200%;
      }
   </style>
   <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
   <style type="text/css">body.swal2-shown:not(.swal2-no-backdrop) {
      overflow-y: hidden; }
      body.swal2-toast-shown {
      overflow-y: auto; }
      body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column; }
      body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-icon {
      margin: 0 0 15px; }
      body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-buttonswrapper {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-item-align: stretch;
      align-self: stretch;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end; }
      body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-loading {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
      body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-input {
      height: 32px;
      font-size: 14px;
      margin: 5px auto; }
      body.swal2-toast-shown > .swal2-container {
      position: fixed;
      background-color: transparent; }
      body.swal2-toast-shown > .swal2-container.swal2-shown {
      background-color: transparent; }
      body.swal2-toast-shown > .swal2-container.swal2-top {
      top: 0;
      left: 50%;
      bottom: auto;
      right: auto;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%); }
      body.swal2-toast-shown > .swal2-container.swal2-top-right {
      top: 0;
      left: auto;
      bottom: auto;
      right: 0; }
      body.swal2-toast-shown > .swal2-container.swal2-top-left {
      top: 0;
      left: 0;
      bottom: auto;
      right: auto; }
      body.swal2-toast-shown > .swal2-container.swal2-center-left {
      top: 50%;
      left: 0;
      bottom: auto;
      right: auto;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%); }
      body.swal2-toast-shown > .swal2-container.swal2-center {
      top: 50%;
      left: 50%;
      bottom: auto;
      right: auto;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
      body.swal2-toast-shown > .swal2-container.swal2-center-right {
      top: 50%;
      left: auto;
      bottom: auto;
      right: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%); }
      body.swal2-toast-shown > .swal2-container.swal2-bottom-left {
      top: auto;
      left: 0;
      bottom: 0;
      right: auto; }
      body.swal2-toast-shown > .swal2-container.swal2-bottom {
      top: auto;
      left: 50%;
      bottom: 0;
      right: auto;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%); }
      body.swal2-toast-shown > .swal2-container.swal2-bottom-right {
      top: auto;
      left: auto;
      bottom: 0;
      right: 0; }
      body.swal2-iosfix {
      position: fixed;
      left: 0;
      right: 0; }
      body.swal2-no-backdrop > .swal2-shown {
      top: auto;
      bottom: auto;
      left: auto;
      right: auto;
      background-color: transparent; }
      body.swal2-no-backdrop > .swal2-shown > .swal2-modal {
      -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); }
      body.swal2-no-backdrop > .swal2-shown.swal2-top {
      top: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%); }
      body.swal2-no-backdrop > .swal2-shown.swal2-top-left {
      top: 0;
      left: 0; }
      body.swal2-no-backdrop > .swal2-shown.swal2-top-right {
      top: 0;
      right: 0; }
      body.swal2-no-backdrop > .swal2-shown.swal2-center {
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
      body.swal2-no-backdrop > .swal2-shown.swal2-center-left {
      top: 50%;
      left: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%); }
      body.swal2-no-backdrop > .swal2-shown.swal2-center-right {
      top: 50%;
      right: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%); }
      body.swal2-no-backdrop > .swal2-shown.swal2-bottom {
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%); }
      body.swal2-no-backdrop > .swal2-shown.swal2-bottom-left {
      bottom: 0;
      left: 0; }
      body.swal2-no-backdrop > .swal2-shown.swal2-bottom-right {
      bottom: 0;
      right: 0; }
      .swal2-container {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      position: fixed;
      padding: 10px;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: transparent;
      z-index: 1060; }
      .swal2-container.swal2-top {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start; }
      .swal2-container.swal2-top-left {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start; }
      .swal2-container.swal2-top-right {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end; }
      .swal2-container.swal2-center {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center; }
      .swal2-container.swal2-center-left {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start; }
      .swal2-container.swal2-center-right {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end; }
      .swal2-container.swal2-bottom {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end; }
      .swal2-container.swal2-bottom-left {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start; }
      .swal2-container.swal2-bottom-right {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end; }
      .swal2-container.swal2-grow-fullscreen > .swal2-modal {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-item-align: stretch;
      align-self: stretch;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
      .swal2-container.swal2-grow-row > .swal2-modal {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-line-pack: center;
      align-content: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
      .swal2-container.swal2-grow-column {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column; }
      .swal2-container.swal2-grow-column.swal2-top, .swal2-container.swal2-grow-column.swal2-center, .swal2-container.swal2-grow-column.swal2-bottom {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center; }
      .swal2-container.swal2-grow-column.swal2-top-left, .swal2-container.swal2-grow-column.swal2-center-left, .swal2-container.swal2-grow-column.swal2-bottom-left {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start; }
      .swal2-container.swal2-grow-column.swal2-top-right, .swal2-container.swal2-grow-column.swal2-center-right, .swal2-container.swal2-grow-column.swal2-bottom-right {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end; }
      .swal2-container.swal2-grow-column > .swal2-modal {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-line-pack: center;
      align-content: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
      .swal2-container:not(.swal2-top):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-left):not(.swal2-bottom-right) > .swal2-modal {
      margin: auto; }
      @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
      .swal2-container .swal2-modal {
      margin: 0 !important; } }
      .swal2-container.swal2-fade {
      -webkit-transition: background-color .1s;
      transition: background-color .1s; }
      .swal2-container.swal2-shown {
      background-color: rgba(0, 0, 0, 0.4); }
      .swal2-popup {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      background-color: #fff;
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      border-radius: 5px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      text-align: center;
      overflow-x: hidden;
      overflow-y: auto;
      display: none;
      position: relative;
      max-width: 100%; }
      .swal2-popup.swal2-toast {
      width: 300px;
      padding: 0 15px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      overflow-y: hidden;
      -webkit-box-shadow: 0 0 10px #d9d9d9;
      box-shadow: 0 0 10px #d9d9d9; }
      .swal2-popup.swal2-toast .swal2-title {
      max-width: 300px;
      font-size: 16px;
      text-align: left; }
      .swal2-popup.swal2-toast .swal2-content {
      font-size: 14px;
      text-align: left; }
      .swal2-popup.swal2-toast .swal2-icon {
      width: 32px;
      height: 32px;
      margin: 0 15px 0 0; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 32px;
      height: 32px; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-info, .swal2-popup.swal2-toast .swal2-icon.swal2-warning, .swal2-popup.swal2-toast .swal2-icon.swal2-question {
      font-size: 26px;
      line-height: 32px; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      top: 14px;
      width: 22px; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
      left: 5px; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
      right: 5px; }
      .swal2-popup.swal2-toast .swal2-buttonswrapper {
      margin: 0 0 0 5px; }
      .swal2-popup.swal2-toast .swal2-styled {
      margin: 0 0 0 5px;
      padding: 5px 10px; }
      .swal2-popup.swal2-toast .swal2-styled:focus {
      -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(50, 100, 150, 0.4);
      box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(50, 100, 150, 0.4); }
      .swal2-popup.swal2-toast .swal2-validationerror {
      width: 100%;
      margin: 5px -20px; }
      .swal2-popup.swal2-toast .swal2-success {
      border-color: #a5dc86; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
      border-radius: 50%;
      position: absolute;
      width: 32px;
      height: 64px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg); }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
      border-radius: 64px 0 0 64px;
      top: -4px;
      left: -15px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 32px 32px;
      transform-origin: 32px 32px; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
      border-radius: 0 64px 64px 0;
      top: -5px;
      left: 14px;
      -webkit-transform-origin: 0 32px;
      transform-origin: 0 32px; }
      .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 32px;
      height: 32px; }
      .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      width: 7px;
      height: 90px;
      left: 28px;
      top: 8px; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
      height: 5px; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
      width: 12px;
      left: 3px;
      top: 18px; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
      width: 22px;
      right: 3px;
      top: 15px; }
      .swal2-popup.swal2-toast .swal2-animate-success-line-tip {
      -webkit-animation: animate-toast-success-tip .75s;
      animation: animate-toast-success-tip .75s; }
      .swal2-popup.swal2-toast .swal2-animate-success-line-long {
      -webkit-animation: animate-toast-success-long .75s;
      animation: animate-toast-success-long .75s; }
      .swal2-popup:focus {
      outline: none; }
      .swal2-popup.swal2-loading {
      overflow-y: hidden; }
      .swal2-popup .swal2-title {
      color: #595959;
      font-size: 30px;
      text-align: center;
      font-weight: 600;
      text-transform: none;
      position: relative;
      margin: 0 0 .4em;
      padding: 0;
      display: block;
      word-wrap: break-word; }
      .swal2-popup .swal2-buttonswrapper {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      margin-top: 15px; }
      .swal2-popup .swal2-buttonswrapper:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4;
      cursor: no-drop; }
      .swal2-popup .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-confirm {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      border: 4px solid transparent;
      border-color: transparent;
      width: 40px;
      height: 40px;
      padding: 0;
      margin: 7.5px;
      vertical-align: top;
      background-color: transparent !important;
      color: transparent;
      cursor: default;
      border-radius: 100%;
      -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
      animation: rotate-loading 1.5s linear 0s infinite normal;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none; }
      .swal2-popup .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-cancel {
      margin-left: 30px;
      margin-right: 30px; }
      .swal2-popup .swal2-buttonswrapper.swal2-loading :not(.swal2-styled).swal2-confirm::after {
      display: inline-block;
      content: '';
      margin-left: 5px;
      vertical-align: -1px;
      height: 15px;
      width: 15px;
      border: 3px solid #999999;
      -webkit-box-shadow: 1px 1px 1px #fff;
      box-shadow: 1px 1px 1px #fff;
      border-right-color: transparent;
      border-radius: 50%;
      -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
      animation: rotate-loading 1.5s linear 0s infinite normal; }
      .swal2-popup .swal2-styled {
      border: 0;
      border-radius: 3px;
      -webkit-box-shadow: none;
      box-shadow: none;
      color: #fff;
      cursor: pointer;
      font-size: 17px;
      font-weight: 500;
      margin: 15px 5px 0;
      padding: 10px 32px; }
      .swal2-popup .swal2-styled:focus {
      outline: none;
      -webkit-box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
      box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4); }
      .swal2-popup .swal2-image {
      margin: 20px auto;
      max-width: 100%; }
      .swal2-popup .swal2-close {
      background: transparent;
      border: 0;
      margin: 0;
      padding: 0;
      width: 38px;
      height: 40px;
      font-size: 36px;
      line-height: 40px;
      font-family: serif;
      position: absolute;
      top: 5px;
      right: 8px;
      cursor: pointer;
      color: #cccccc;
      -webkit-transition: color .1s ease;
      transition: color .1s ease; }
      .swal2-popup .swal2-close:hover {
      color: #d55; }
      .swal2-popup > .swal2-input,
      .swal2-popup > .swal2-file,
      .swal2-popup > .swal2-textarea,
      .swal2-popup > .swal2-select,
      .swal2-popup > .swal2-radio,
      .swal2-popup > .swal2-checkbox {
      display: none; }
      .swal2-popup .swal2-content {
      font-size: 18px;
      text-align: center;
      font-weight: 300;
      position: relative;
      float: none;
      margin: 0;
      padding: 0;
      line-height: normal;
      color: #545454;
      word-wrap: break-word; }
      .swal2-popup .swal2-input,
      .swal2-popup .swal2-file,
      .swal2-popup .swal2-textarea,
      .swal2-popup .swal2-select,
      .swal2-popup .swal2-radio,
      .swal2-popup .swal2-checkbox {
      margin: 20px auto; }
      .swal2-popup .swal2-input,
      .swal2-popup .swal2-file,
      .swal2-popup .swal2-textarea {
      width: 100%;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      font-size: 18px;
      border-radius: 3px;
      border: 1px solid #d9d9d9;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
      -webkit-transition: border-color .3s, -webkit-box-shadow .3s;
      transition: border-color .3s, -webkit-box-shadow .3s;
      transition: border-color .3s, box-shadow .3s;
      transition: border-color .3s, box-shadow .3s, -webkit-box-shadow .3s; }
      .swal2-popup .swal2-input.swal2-inputerror,
      .swal2-popup .swal2-file.swal2-inputerror,
      .swal2-popup .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      -webkit-box-shadow: 0 0 2px #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important; }
      .swal2-popup .swal2-input:focus,
      .swal2-popup .swal2-file:focus,
      .swal2-popup .swal2-textarea:focus {
      outline: none;
      border: 1px solid #b4dbed;
      -webkit-box-shadow: 0 0 3px #c4e6f5;
      box-shadow: 0 0 3px #c4e6f5; }
      .swal2-popup .swal2-input::-webkit-input-placeholder,
      .swal2-popup .swal2-file::-webkit-input-placeholder,
      .swal2-popup .swal2-textarea::-webkit-input-placeholder {
      color: #cccccc; }
      .swal2-popup .swal2-input:-ms-input-placeholder,
      .swal2-popup .swal2-file:-ms-input-placeholder,
      .swal2-popup .swal2-textarea:-ms-input-placeholder {
      color: #cccccc; }
      .swal2-popup .swal2-input::-ms-input-placeholder,
      .swal2-popup .swal2-file::-ms-input-placeholder,
      .swal2-popup .swal2-textarea::-ms-input-placeholder {
      color: #cccccc; }
      .swal2-popup .swal2-input::placeholder,
      .swal2-popup .swal2-file::placeholder,
      .swal2-popup .swal2-textarea::placeholder {
      color: #cccccc; }
      .swal2-popup .swal2-range input {
      float: left;
      width: 80%; }
      .swal2-popup .swal2-range output {
      float: right;
      width: 20%;
      font-size: 20px;
      font-weight: 600;
      text-align: center; }
      .swal2-popup .swal2-range input,
      .swal2-popup .swal2-range output {
      height: 43px;
      line-height: 43px;
      vertical-align: middle;
      margin: 20px auto;
      padding: 0; }
      .swal2-popup .swal2-input {
      height: 43px;
      padding: 0 12px; }
      .swal2-popup .swal2-input[type='number'] {
      max-width: 150px; }
      .swal2-popup .swal2-file {
      font-size: 20px; }
      .swal2-popup .swal2-textarea {
      height: 108px;
      padding: 12px; }
      .swal2-popup .swal2-select {
      color: #545454;
      font-size: inherit;
      padding: 5px 10px;
      min-width: 40%;
      max-width: 100%; }
      .swal2-popup .swal2-radio {
      border: 0; }
      .swal2-popup .swal2-radio label:not(:first-child) {
      margin-left: 20px; }
      .swal2-popup .swal2-radio input,
      .swal2-popup .swal2-radio span {
      vertical-align: middle; }
      .swal2-popup .swal2-radio input {
      margin: 0 3px 0 0; }
      .swal2-popup .swal2-checkbox {
      color: #545454; }
      .swal2-popup .swal2-checkbox input,
      .swal2-popup .swal2-checkbox span {
      vertical-align: middle; }
      .swal2-popup .swal2-validationerror {
      background-color: #f0f0f0;
      margin: 0 -20px;
      overflow: hidden;
      padding: 10px;
      color: gray;
      font-size: 16px;
      font-weight: 300;
      display: none; }
      .swal2-popup .swal2-validationerror::before {
      content: '!';
      display: inline-block;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background-color: #ea7d7d;
      color: #fff;
      line-height: 24px;
      text-align: center;
      margin-right: 10px; }
      @supports (-ms-accelerator: true) {
      .swal2-range input {
      width: 100% !important; }
      .swal2-range output {
      display: none; } }
      @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
      .swal2-range input {
      width: 100% !important; }
      .swal2-range output {
      display: none; } }
      .swal2-icon {
      width: 80px;
      height: 80px;
      border: 4px solid transparent;
      border-radius: 50%;
      margin: 20px auto 30px;
      padding: 0;
      position: relative;
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      cursor: default;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none; }
      .swal2-icon.swal2-error {
      border-color: #f27474; }
      .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      display: block; }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      position: absolute;
      height: 5px;
      width: 47px;
      background-color: #f27474;
      display: block;
      top: 37px;
      border-radius: 2px; }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      left: 17px; }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      right: 16px; }
      .swal2-icon.swal2-warning {
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      color: #f8bb86;
      border-color: #facea8;
      font-size: 60px;
      line-height: 80px;
      text-align: center; }
      .swal2-icon.swal2-info {
      font-family: 'Open Sans', sans-serif;
      color: #3fc3ee;
      border-color: #9de0f6;
      font-size: 60px;
      line-height: 80px;
      text-align: center; }
      .swal2-icon.swal2-question {
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      color: #87adbd;
      border-color: #c9dae1;
      font-size: 60px;
      line-height: 80px;
      text-align: center; }
      .swal2-icon.swal2-success {
      border-color: #a5dc86; }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
      border-radius: 50%;
      position: absolute;
      width: 60px;
      height: 120px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg); }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
      border-radius: 120px 0 0 120px;
      top: -7px;
      left: -33px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 60px 60px;
      transform-origin: 60px 60px; }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
      border-radius: 0 120px 120px 0;
      top: -11px;
      left: 30px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 0 60px;
      transform-origin: 0 60px; }
      .swal2-icon.swal2-success .swal2-success-ring {
      width: 80px;
      height: 80px;
      border: 4px solid rgba(165, 220, 134, 0.2);
      border-radius: 50%;
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      position: absolute;
      left: -4px;
      top: -4px;
      z-index: 2; }
      .swal2-icon.swal2-success .swal2-success-fix {
      width: 7px;
      height: 90px;
      position: absolute;
      left: 28px;
      top: 8px;
      z-index: 1;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg); }
      .swal2-icon.swal2-success [class^='swal2-success-line'] {
      height: 5px;
      background-color: #a5dc86;
      display: block;
      border-radius: 2px;
      position: absolute;
      z-index: 2; }
      .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
      width: 25px;
      left: 14px;
      top: 46px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg); }
      .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
      width: 47px;
      right: 8px;
      top: 38px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg); }
      .swal2-progresssteps {
      font-weight: 600;
      margin: 0 0 20px;
      padding: 0; }
      .swal2-progresssteps li {
      display: inline-block;
      position: relative; }
      .swal2-progresssteps .swal2-progresscircle {
      background: #3085d6;
      border-radius: 2em;
      color: #fff;
      height: 2em;
      line-height: 2em;
      text-align: center;
      width: 2em;
      z-index: 20; }
      .swal2-progresssteps .swal2-progresscircle:first-child {
      margin-left: 0; }
      .swal2-progresssteps .swal2-progresscircle:last-child {
      margin-right: 0; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
      background: #3085d6; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
      background: #add8e6; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
      background: #add8e6; }
      .swal2-progresssteps .swal2-progressline {
      background: #3085d6;
      height: .4em;
      margin: 0 -1px;
      z-index: 10; }
      [class^='swal2'] {
      -webkit-tap-highlight-color: transparent; }
      @-webkit-keyframes showSweetToast {
      0% {
      -webkit-transform: translateY(-10px) rotateZ(2deg);
      transform: translateY(-10px) rotateZ(2deg);
      opacity: 0; }
      33% {
      -webkit-transform: translateY(0) rotateZ(-2deg);
      transform: translateY(0) rotateZ(-2deg);
      opacity: .5; }
      66% {
      -webkit-transform: translateY(5px) rotateZ(2deg);
      transform: translateY(5px) rotateZ(2deg);
      opacity: .7; }
      100% {
      -webkit-transform: translateY(0) rotateZ(0);
      transform: translateY(0) rotateZ(0);
      opacity: 1; } }
      @keyframes showSweetToast {
      0% {
      -webkit-transform: translateY(-10px) rotateZ(2deg);
      transform: translateY(-10px) rotateZ(2deg);
      opacity: 0; }
      33% {
      -webkit-transform: translateY(0) rotateZ(-2deg);
      transform: translateY(0) rotateZ(-2deg);
      opacity: .5; }
      66% {
      -webkit-transform: translateY(5px) rotateZ(2deg);
      transform: translateY(5px) rotateZ(2deg);
      opacity: .7; }
      100% {
      -webkit-transform: translateY(0) rotateZ(0);
      transform: translateY(0) rotateZ(0);
      opacity: 1; } }
      @-webkit-keyframes hideSweetToast {
      0% {
      opacity: 1; }
      33% {
      opacity: .5; }
      100% {
      -webkit-transform: rotateZ(1deg);
      transform: rotateZ(1deg);
      opacity: 0; } }
      @keyframes hideSweetToast {
      0% {
      opacity: 1; }
      33% {
      opacity: .5; }
      100% {
      -webkit-transform: rotateZ(1deg);
      transform: rotateZ(1deg);
      opacity: 0; } }
      @-webkit-keyframes showSweetAlert {
      0% {
      -webkit-transform: scale(0.7);
      transform: scale(0.7); }
      45% {
      -webkit-transform: scale(1.05);
      transform: scale(1.05); }
      80% {
      -webkit-transform: scale(0.95);
      transform: scale(0.95); }
      100% {
      -webkit-transform: scale(1);
      transform: scale(1); } }
      @keyframes showSweetAlert {
      0% {
      -webkit-transform: scale(0.7);
      transform: scale(0.7); }
      45% {
      -webkit-transform: scale(1.05);
      transform: scale(1.05); }
      80% {
      -webkit-transform: scale(0.95);
      transform: scale(0.95); }
      100% {
      -webkit-transform: scale(1);
      transform: scale(1); } }
      @-webkit-keyframes hideSweetAlert {
      0% {
      -webkit-transform: scale(1);
      transform: scale(1);
      opacity: 1; }
      100% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
      opacity: 0; } }
      @keyframes hideSweetAlert {
      0% {
      -webkit-transform: scale(1);
      transform: scale(1);
      opacity: 1; }
      100% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
      opacity: 0; } }
      .swal2-show {
      -webkit-animation: showSweetAlert .3s;
      animation: showSweetAlert .3s; }
      .swal2-show.swal2-toast {
      -webkit-animation: showSweetToast .5s;
      animation: showSweetToast .5s; }
      .swal2-show.swal2-noanimation {
      -webkit-animation: none;
      animation: none; }
      .swal2-hide {
      -webkit-animation: hideSweetAlert .15s forwards;
      animation: hideSweetAlert .15s forwards; }
      .swal2-hide.swal2-toast {
      -webkit-animation: hideSweetToast .2s forwards;
      animation: hideSweetToast .2s forwards; }
      .swal2-hide.swal2-noanimation {
      -webkit-animation: none;
      animation: none; }
      @-webkit-keyframes animate-success-tip {
      0% {
      width: 0;
      left: 1px;
      top: 19px; }
      54% {
      width: 0;
      left: 1px;
      top: 19px; }
      70% {
      width: 50px;
      left: -8px;
      top: 37px; }
      84% {
      width: 17px;
      left: 21px;
      top: 48px; }
      100% {
      width: 25px;
      left: 14px;
      top: 45px; } }
      @keyframes animate-success-tip {
      0% {
      width: 0;
      left: 1px;
      top: 19px; }
      54% {
      width: 0;
      left: 1px;
      top: 19px; }
      70% {
      width: 50px;
      left: -8px;
      top: 37px; }
      84% {
      width: 17px;
      left: 21px;
      top: 48px; }
      100% {
      width: 25px;
      left: 14px;
      top: 45px; } }
      @-webkit-keyframes animate-success-long {
      0% {
      width: 0;
      right: 46px;
      top: 54px; }
      65% {
      width: 0;
      right: 46px;
      top: 54px; }
      84% {
      width: 55px;
      right: 0;
      top: 35px; }
      100% {
      width: 47px;
      right: 8px;
      top: 38px; } }
      @keyframes animate-success-long {
      0% {
      width: 0;
      right: 46px;
      top: 54px; }
      65% {
      width: 0;
      right: 46px;
      top: 54px; }
      84% {
      width: 55px;
      right: 0;
      top: 35px; }
      100% {
      width: 47px;
      right: 8px;
      top: 38px; } }
      @-webkit-keyframes animate-toast-success-tip {
      0% {
      width: 0;
      left: 1px;
      top: 9px; }
      54% {
      width: 0;
      left: 1px;
      top: 9px; }
      70% {
      width: 24px;
      left: -4px;
      top: 17px; }
      84% {
      width: 8px;
      left: 10px;
      top: 20px; }
      100% {
      width: 12px;
      left: 3px;
      top: 18px; } }
      @keyframes animate-toast-success-tip {
      0% {
      width: 0;
      left: 1px;
      top: 9px; }
      54% {
      width: 0;
      left: 1px;
      top: 9px; }
      70% {
      width: 24px;
      left: -4px;
      top: 17px; }
      84% {
      width: 8px;
      left: 10px;
      top: 20px; }
      100% {
      width: 12px;
      left: 3px;
      top: 18px; } }
      @-webkit-keyframes animate-toast-success-long {
      0% {
      width: 0;
      right: 22px;
      top: 26px; }
      65% {
      width: 0;
      right: 22px;
      top: 26px; }
      84% {
      width: 26px;
      right: 0;
      top: 15px; }
      100% {
      width: 22px;
      right: 3px;
      top: 15px; } }
      @keyframes animate-toast-success-long {
      0% {
      width: 0;
      right: 22px;
      top: 26px; }
      65% {
      width: 0;
      right: 22px;
      top: 26px; }
      84% {
      width: 26px;
      right: 0;
      top: 15px; }
      100% {
      width: 22px;
      right: 3px;
      top: 15px; } }
      @-webkit-keyframes rotatePlaceholder {
      0% {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg); }
      5% {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg); }
      12% {
      -webkit-transform: rotate(-405deg);
      transform: rotate(-405deg); }
      100% {
      -webkit-transform: rotate(-405deg);
      transform: rotate(-405deg); } }
      @keyframes rotatePlaceholder {
      0% {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg); }
      5% {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg); }
      12% {
      -webkit-transform: rotate(-405deg);
      transform: rotate(-405deg); }
      100% {
      -webkit-transform: rotate(-405deg);
      transform: rotate(-405deg); } }
      .swal2-animate-success-line-tip {
      -webkit-animation: animate-success-tip .75s;
      animation: animate-success-tip .75s; }
      .swal2-animate-success-line-long {
      -webkit-animation: animate-success-long .75s;
      animation: animate-success-long .75s; }
      .swal2-success.swal2-animate-success-icon .swal2-success-circular-line-right {
      -webkit-animation: rotatePlaceholder 4.25s ease-in;
      animation: rotatePlaceholder 4.25s ease-in; }
      @-webkit-keyframes animate-error-icon {
      0% {
      -webkit-transform: rotateX(100deg);
      transform: rotateX(100deg);
      opacity: 0; }
      100% {
      -webkit-transform: rotateX(0deg);
      transform: rotateX(0deg);
      opacity: 1; } }
      @keyframes animate-error-icon {
      0% {
      -webkit-transform: rotateX(100deg);
      transform: rotateX(100deg);
      opacity: 0; }
      100% {
      -webkit-transform: rotateX(0deg);
      transform: rotateX(0deg);
      opacity: 1; } }
      .swal2-animate-error-icon {
      -webkit-animation: animate-error-icon .5s;
      animation: animate-error-icon .5s; }
      @-webkit-keyframes animate-x-mark {
      0% {
      -webkit-transform: scale(0.4);
      transform: scale(0.4);
      margin-top: 26px;
      opacity: 0; }
      50% {
      -webkit-transform: scale(0.4);
      transform: scale(0.4);
      margin-top: 26px;
      opacity: 0; }
      80% {
      -webkit-transform: scale(1.15);
      transform: scale(1.15);
      margin-top: -6px; }
      100% {
      -webkit-transform: scale(1);
      transform: scale(1);
      margin-top: 0;
      opacity: 1; } }
      @keyframes animate-x-mark {
      0% {
      -webkit-transform: scale(0.4);
      transform: scale(0.4);
      margin-top: 26px;
      opacity: 0; }
      50% {
      -webkit-transform: scale(0.4);
      transform: scale(0.4);
      margin-top: 26px;
      opacity: 0; }
      80% {
      -webkit-transform: scale(1.15);
      transform: scale(1.15);
      margin-top: -6px; }
      100% {
      -webkit-transform: scale(1);
      transform: scale(1);
      margin-top: 0;
      opacity: 1; } }
      .swal2-animate-x-mark {
      -webkit-animation: animate-x-mark .5s;
      animation: animate-x-mark .5s; }
      @-webkit-keyframes rotate-loading {
      0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg); }
      100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }
      @keyframes rotate-loading {
      0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg); }
      100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }
   </style>
</head>
<body class="app sidebar-mini dark-mode switcher-demo" data-new-gr-c-s-check-loaded="14.1040.0" data-gr-ext-installed="">
    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin text_primary"></i></div>
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="p-3 d-grid gap-2">
                                <a href="" class="btn ripple btn-primary mt-0">View Demo</a>
                                <a href="https://themeforest.net/item/zanex-bootstrap-5-admin-dashboard-template/32984858" class="btn ripple btn-secondary">Buy Now</a>
                                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-red">Our Portfolio</a>
                            </div>
                        </div>
                        <div class="swichermainleft mb-4">
                            <h4>Navigation Style</h4>
                            <div class="ps-3 pe-3 pt-3 d-grid gap-2">
                                <a class="btn btn-success" href="LTR/Verticalmenu-Icon-Light-Sidebar/index.html">Leftmenu</a> <a class="btn btn-danger" href="LTR/Horizontal-Light/index.html"> Horizontal </a>
                            </div>
                        </div>
                        <div class="swichermainleft mb-4">
                            <h4>Navigation RTL Style</h4>
                            <div class="ps-3 pe-3 pt-3 d-grid gap-2">
                                <a class="btn btn-success" href="RTL/Verticalmenu-Icon-Light-Sidebar/index.html"> Leftmenu-RTL</a> <a class="btn btn-danger" href="RTL/Horizontal-Light/index.html"> Horizontal-RTL </a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Theme Layout</h4>
                            <div class="switch_section d-flex my-4">
                                <ul class="switch-buttons row">
                                    <li class="col-md-6 mb-0"><button type="button" id="background-left1" class="bg-left1 wscolorcode1 button-image"></button> <span class="d-block">Light Theme</span></li>
                                    <li class="col-md-6 mb-0"><button type="button" id="background-left2" class="bg-left2 wscolorcode1 button-image"></button> <span class="d-block">Dark Theme</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Header Styles Mode</h4>
                            <div class="switch_section d-flex my-4">
                                <ul class="switch-buttons row">
                                    <li class="col-md-6 light-bg"><button type="button" id="background1" class="bg1 wscolorcode1 button-image"></button> <span class="d-block">Light Header</span></li>
                                    <li class="col-md-6"><button type="button" id="background2" class="bg2 wscolorcode1 button-image"></button> <span class="d-block">Color Header</span></li>
                                    <li class="col-md-6 d-block mx-auto dark-bg"><button type="button" id="background3" class="bg3 wscolorcode1 button-image"></button> <span class="d-block">Dark Header</span></li>
                                    <li class="col-md-6 d-block mx-auto"><button type="button" id="background11" class="bg8 wscolorcode1 button-image"></button> <span class="d-block">Gradient Header</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Leftmenu Styles Mode</h4>
                            <div class="switch_section d-flex my-4">
                                <ul class="switch-buttons row">
                                    <li class="col-md-6 mb-4"><button type="button" id="background4" class="bg4 wscolorcode1 button-image"></button> <span class="d-block">Light Menu</span></li>
                                    <li class="col-md-6 mb-4"><button type="button" id="background5" class="bg5 wscolorcode1 button-image"></button> <span class="d-block">Color Menu</span></li>
                                    <li class="col-md-6 mb-0 d-block mx-auto dark-bgmenu"><button type="button" id="background6" class="bg6 wscolorcode1 button-image"></button> <span class="d-block">Dark Menu</span></li>
                                    <li class="col-md-6 mb-0 d-block mx-auto"><button type="button" id="background10" class="bg7 wscolorcode1 button-image"></button> <span class="d-block">Gradient Menu</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout-width Styles Mode</h4>
                            <div class="switch_section d-flex my-4">
                                <ul class="switch-buttons row">
                                    <li class="col-md-6 mb-4"><button type="button" id="background14" class="bg-layf wscolorcode1 button-image"></button> <span class="d-block">Full-Width</span></li>
                                    <li class="col-md-6 mb-4"><button type="button" id="background15" class="bg-laybx wscolorcode1 button-image"></button> <span class="d-block">Boxed</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Side-menu layout Styles Mode</h4>
                            <div class="switch_section d-flex my-4">
                                <ul class="switch-buttons row">
                                    <li class="col-md-6 mb-4">
                                        <a href="#" class="swticher-link default-menu" data-sidetheme="{{ asset('admin_assets/assets/css/sidemenu.css')}}"></a> <button type="button" class="bg-sided wscolorcode1 button-image"></button>
                                        <span class="d-block">Default</span>
                                    </li>
                                    <li class="col-md-6 mb-4">
                                        <a href="index-1.html" class="swticher-link icontext-menu" data-sidetheme="{{ asset('admin_assets/assets/css/sidemenu-icontext.css')}}"></a> <button type="button" class="bg-sideictxt wscolorcode1 button-image"></button>
                                        <span class="d-block">Icon-with Text</span>
                                    </li>
                                    <li class="col-md-6 mb-4 d-block mx-auto">
                                        <a href="#" class="swticher-link sideicon-menu" data-sidetheme="{{ asset('admin_assets/assets/css/sidemenu-icon.css')}}"></a> <button type="button" class="bg-sideicon wscolorcode1 button-image"></button>
                                        <span class="d-block">Icon</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Positions Mode</h4>
                            <div class="switch_section d-flex my-4">
                                <ul class="switch-buttons row">
                                    <li class="col-md-6 mb-4"><button type="button" id="background16" class="bg-left1 wscolorcode1 button-image"></button> <span class="d-block">Fixed</span></li>
                                    <li class="col-md-6 mb-4"><button type="button" id="background17" class="bg-left1 wscolorcode1 button-image"></button> <span class="d-block">Scrollable</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <!-- GLOBAL-LOADER -->
    <div id="global-loader" style="display: none;"><img src="{{ asset('admin_assets/assets/images/loader.svg')}}" class="loader-img" alt="Loader" /></div>
    <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--APP-SIDEBAR-->
            @include('admin.layouts.sidebar')
            <!--/APP-SIDEBAR-->
            <!-- Mobile Header -->
            @include('admin.layouts.header')
            <!-- /Mobile Header -->
            <!--app-content open-->
            @yield('content')
            <!-- app-content END -->
        </div>
        <!-- Sidebar-right -->
        @section('rightsidebar')
        <div class="sidebar sidebar-right sidebar-animate ps">
            <div class="panel panel-primary card mb-0 shadow-none border-0">
                <div class="tab-menu-heading border-0 d-flex p-3">
                    <div class="card-title mb-0">Notifications</div>
                    <div class="card-options ms-auto">
                        <a href="#" class="sidebar-icon text-end float-end me-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                    <div class="tabs-menu border-bottom">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="">
                                <a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-user me-1"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#side2" data-bs-toggle="tab"><i class="fe fe-users me-1"></i> Contacts</a>
                            </li>
                            <li>
                                <a href="#side3" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i> Settings</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="side1">
                            <div class="card-body text-center">
                                <div class="dropdown user-pro-body">
                                    <div class=""><img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="{{ asset('admin_assets/assets/images/faces/6.jpg')}}" /><span class="avatar-status profile-status bg-green"></span></div>
                                    <div class="user-info mg-t-20">
                                        <h6 class="fw-semibold mt-2 mb-0">Mintrona Pechon</h6>
                                        <span class="mb-0 text-muted fs-12">Premium Member</span>
                                    </div>
                                </div>
                            </div>
                            <a class="dropdown-item d-flex border-bottom border-top" href="profile.html">
                                <div class="d-flex">
                                    <i class="fe fe-user me-3 tx-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Profile</h6>
                                        <p class="tx-12 mb-0 text-muted">Profile Personal information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="chat.html">
                                <div class="d-flex">
                                    <i class="fe fe-message-square me-3 tx-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Messages</h6>
                                        <p class="tx-12 mb-0 text-muted">Person message information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="emailservices.html">
                                <div class="d-flex">
                                    <i class="fe fe-mail me-3 tx-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Mails</h6>
                                        <p class="tx-12 mb-0 text-muted">Persons mail information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="editprofile.html">
                                <div class="d-flex">
                                    <i class="fe fe-settings me-3 tx-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">Account Settings</h6>
                                        <p class="tx-12 mb-0 text-muted">Settings Information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="login.html">
                                <div class="d-flex">
                                    <i class="fe fe-power me-3 tx-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">Sign Out</h6>
                                        <p class="tx-12 mb-0 text-muted">Account Signout</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="side2">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/9.jpg')}}" style="background: url('admin_assets/assets/images/faces/9.jpg') center center;">
                                            <span class="avatar-status bg-success"></span>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
                                        <p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/11.jpg')}}" style="background: url('admin_assets/assets/images/faces/11.jpg') center center;"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                        <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/10.jpg')}}" style="background: url('admin_assets/assets/images/faces/10.jpg') center center;">
                                            <span class="avatar-status bg-success"></span>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                        <p class="mb-0 tx-12 text-muted">alinaaernier@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/2.jpg')}}" style="background: url('admin_assets/assets/images/faces/2.jpg') center center;">
                                            <span class="avatar-status bg-success"></span>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                        <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/13.jpg')}}" style="background: url('admin_assets/assets/images/faces/13.jpg') center center;"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                        <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/12.jpg')}}" style="background: url('admin_assets/assets/images/faces/12.jpg') center center;">
                                            <span class="avatar-status bg-success"></span>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
                                        <p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/4.jpg')}}" style="background: url('admin_assets/assets/images/faces/4.jpg') center center;"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                        <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/7.jpg')}}" style="background: url('admin_assets/assets/images/faces/7.jpg') center center;"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                        <p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/2.jpg')}}" style="background: url('admin_assets/assets/images/faces/2.jpg') center center;"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                        <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/14.jpg')}}" style="background: url('admin_assets/assets/images/faces/14.jpg') center center;">
                                            <span class="avatar-status bg-success"></span>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                        <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/11.jpg')}}" style="background: url('admin_assets/assets/images/faces/11.jpg') center center;"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                        <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/9.jpg')}}" style="background: url('admin_assets/assets/images/faces/9.jpg') center center;"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                        <p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/15.jpg')}}" style="background: url('admin_assets/assets/images/faces/15.jpg') center center;">
                                            <span class="avatar-status bg-success"></span>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                        <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ asset('admin_assets/assets/images/faces/4.jpg')}}" style="background: url('admin_assets/assets/images/faces/4.jpg') center center;"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                        <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side3">
                            <a class="dropdown-item bg-gray-100 pd-y-10" href="#"> Account Settings </a>
                            <div class="card-body">
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Updates Automatically</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Allow Location Map</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Show Contacts</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Show Notication</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Show Tasks Statistics</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Show Email Notification</span>
                                    </label>
                                </div>
                            </div>
                            <a class="dropdown-item bg-gray-100 pd-y-10" href="#"> General Settings </a>
                            <div class="card-body">
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Show User Online</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Website Notication</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Show Recent activity</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Logout Automatically</span>
                                    </label>
                                </div>
                                <div class="form-group mg-b-10">
                                    <label class="custom-switch ps-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="" /> <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description mg-l-10">Aloow All Notifications</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
        </div>
        @endsection
        <!--/Sidebar-right-->
        <!-- FOOTER -->
        @include('admin.layouts.footer')
        <!-- FOOTER END -->
    </div>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- JQUERY JS -->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=Jw?ids(JhB42DND1A2");
        -->
    </script>
    <!-- BOOTSTRAP JS -->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("W");
        -->
    </script>
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J7j(P?4xz.42D#Dyh");
        -->
    </script>
    <!-- SPARKLINE JS-->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/js/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=JW&(P4gyOA8@5NvW W8w");
        -->
    </script>
    <!-- CHART-CIRCLE JS-->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/js/circle-progress.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=JW&(P4BRpMOwjQrt<W<jv");
        -->
    </script>
    <!-- CHARTJS CHART JS-->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("W");
        -->
    </script>
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/chart/utils.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J8FudgGy52MhBw 1 MQ");
        -->
    </script>
    <!-- PIETY CHART JS-->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("W");
        -->
    </script>
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/peitychart/peitychart.init.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J,tpfLX@BdZKhxpv,2UTvTJdU");
        -->
    </script>
    <!-- INTERNAL SELECT2 JS -->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/select2/select2.full.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J,tpfLX@BdpJ,Arbj7$?(t6rAMBz");
        -->
    </script>
    <!-- INTERNAL Data tables js-->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("W");
        -->
    </script>
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("W");
        -->
    </script>
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J6<,BL(lr!C!LN");
        -->
    </script>
    <!-- ECHART JS-->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/echarts/echarts.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J7Fyfa@,z,42D#Dyh");
        -->
    </script>
    <!-- SIDE-MENU JS-->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/sidemenu/sidemenu.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J7Fyf%rJp@Z(Z#J@");
        -->
    </script>
    <!-- SIDEBAR JS -->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/sidebar/sidebar.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J8q%OF=©p!88>2Q6U4QXJTJdU");
        -->
    </script>
    <!-- Perfect SCROLLBAR JS-->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("W");
        -->
    </script>
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/p-scroll/pscroll.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("W");
        -->
    </script>
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/plugins/p-scroll/pscroll-1.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=JdjuuTb@yr42DND1A2");
        -->
    </script>
    <!-- APEXCHART JS -->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/js/apexcharts.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J,tyffGNCdC!LN");
        -->
    </script>
    <!-- INDEX JS -->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/js/index1.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=JWIadY@lr!4!ZTr");
        -->
    </script>
    <!-- CUSTOM JS -->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/js/custom.js')}}"></script>
    <script type="text/javascript">
        <!--
        bfhl("WLDn=J7z>$n/b/dtAB#Dyh");
        -->
    </script>
    <!-- Switcher js -->
    <noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
    <script src="{{ asset('admin_assets/assets/switcher/js/switcher.js')}}"></script>
    <svg
        id="SvgjsSvg1001"
        width="2"
        height="0"
        xmlns="http://www.w3.org/2000/svg"
        version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        xmlns:svgjs="http://svgjs.com/svgjs"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"
    >
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path
            id="SvgjsPath1004"
            d="M-1 214.348L-1 214.348C-1 214.348 97.86203835227272 214.348 97.86203835227272 214.348C97.86203835227272 214.348 195.72407670454544 214.348 195.72407670454544 214.348C195.72407670454544 214.348 293.5861150568182 214.348 293.5861150568182 214.348C293.5861150568182 214.348 391.4481534090909 214.348 391.4481534090909 214.348C391.4481534090909 214.348 489.3101917613636 214.348 489.3101917613636 214.348C489.3101917613636 214.348 587.1722301136364 214.348 587.1722301136364 214.348C587.1722301136364 214.348 685.0342684659091 214.348 685.0342684659091 214.348C685.0342684659091 214.348 782.8963068181818 214.348 782.8963068181818 214.348C782.8963068181818 214.348 880.7583451704545 214.348 880.7583451704545 214.348C880.7583451704545 214.348 978.6203835227273 214.348 978.6203835227273 214.348C978.6203835227273 214.348 1076.482421875 214.348 1076.482421875 214.348C1076.482421875 214.348 1076.482421875 214.348 1076.482421875 214.348 "
        ></path>
    </svg>
</body>
</html>